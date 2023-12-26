<?php
/*******************************************************************************
* File with Clarity page
*******************************************************************************/

function generate_wordpress_id_option_if_empty() {
    $clarity_wp_site = get_option('clarity_wordpress_site_id');
	if (empty($clarity_wp_site)) {
        update_option('clarity_wordpress_site_id', wp_generate_uuid4());
    };
}

/**
* generate a guid identifier for this wordpress site
* runs in the callback of register_activation_hook, rerunning here for existing plugin which updated 
**/
function refresh_wordpress_id_option() {
    update_option('clarity_wordpress_site_id', wp_generate_uuid4());
}

/**
* Displays the embedded iframe in Clarity settings
**/
function clarity_section_iframe_callback() {
    $clarity_project_id_option = get_option('clarity_project_id', clarity_project_id_default_value());
    if (empty($clarity_project_id_option)) {
        refresh_wordpress_id_option();
    } else {
        generate_wordpress_id_option_if_empty();
    }
    $clarity_project_id_option = get_option(
        'clarity_project_id', /* option */
        clarity_project_id_default_value() /* default */
    );
    $clarity_wp_site = get_option(
        'clarity_wordpress_site_id' /* option */
        /* default */
    );

    $clarity_domain = "https://clarity.microsoft.com/embed";

    $query_params = "?integration=Wordpress&wpsite=$clarity_wp_site";

    // set a QP if user is admin
    if(current_user_can('manage_options')) {
        $query_params = $query_params . "&WPAdmin=1";
    }

    // initially set iframe src to the new users path
    $iframe_src = $clarity_domain.$query_params;

    // clarity project exist
    if(!empty($clarity_project_id_option))
    {
        $iframe_src = $iframe_src."&project=".$clarity_project_id_option;
    }

	?>
    <div style="width:100%;padding-right:15px;margin-top:20px;box-sizing:border-box;">
        <iframe sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-storage-access-by-user-activation" src="<?php echo $iframe_src ?>" width="100%" height="1300px" title="Microsoft Clarity" /> 
    </div>
    <?php
}

/**
* clarity project id default value is empty string
**/
function clarity_project_id_default_value() {
	return '';
}

/**
* Generates a menu page
**/
 
add_action('admin_menu', 'clarity_page_generation');
function clarity_page_generation() {
	add_menu_page(
        'microsoft-clarity', /* $page_title */
        'Clarity', /* menu_title */
        'edit_posts', /* capability */
        'microsoft-clarity', /* menu_slug */
        'clarity_section_iframe_callback', /* callback */
        'https://claritystatic.blob.core.windows.net/images/logo.svg', /* icon_url */
        99 /* position */
    );
}

/**
* Register Plugin settings
* clarity_project_id: option for currently integrated Clarity project id
* clarity_wordpress_site_id: a guid generated by the Clarity plugin to uniquely identify this wordpress site
* clarity_section_iframe_callback: part of the settings page in which the iframe is embedded
**/
add_action('admin_init', 'clarity_register_settings');
function clarity_register_settings() {
	register_setting(
        'clarity_settings_fields', /* $option_group */
        'clarity_project_id' /* option_name */
        /* args */
    );
	register_setting(
        'general', /* $option_group */
        'clarity_wordpress_site_id' /* option_name */
        /* args */
    );
}

/** 
* Notice for when wordpress admins did not finish intalling Clarity
* did not integrate a project
*/
add_action('admin_notices', 'setup_clarity_notice__info');
function setup_clarity_notice__info() {
	global $pagenow;
	$url = get_admin_url() . 'admin.php?page=microsoft-clarity';

    $clarity_project_id_option = get_option(
        'clarity_project_id', /* option */
        clarity_project_id_default_value() /* default */
    );
    $pageQPExists = isset($_GET['page']);
    if($pageQPExists) {
        $pageQP =  $_GET['page'];
    } else {
        $pageQP = "";
    }


	if(empty($clarity_project_id_option) && $pageQP !== "microsoft-clarity" && current_user_can("manage_options")) {
        echo
        '<div class="notice notice-info is-dismissible">
            <p style="font-weight:700">
                Please setup Clarity to start understanding user behavior on your site.
            </p>
            <p>
                <a class="button-primary" href="'. $url .'">
                    Setup Clarity
                </a>
            </p>
        </div>';
    }
}

/**
* Add js function to listen to message on all admin pages
* These message contain changes to integrated Clarity project
* remove - change - add new
*/
add_action('admin_enqueue_scripts', 'add_event_listeners');
function add_event_listeners($hook) {
    $pageQPExists = isset($_GET['page']);
    if($pageQPExists) {
        $pageQP =  $_GET['page'];
    } else {
        $pageQP = "";
    }

    if($pageQP !== "microsoft-clarity") {
        return;
    }

    if(!current_user_can("edit_posts")) {
        return;
    }

    wp_register_script(
        'window_listeners_js', /* handle */
        plugins_url('js\add_window_listeners.js', __FILE__ ), /* src */
        array(), /* deps  */
        false, /* ver  */
        false /* in_footer */
    );
    wp_enqueue_script(
        'window_listeners_js' /* handle */
        /* src */
        /* deps  */
        /* ver  */
        /* in_footer */    
    );
}

/**
* Add callback triggered when a new message is received
* Edits the clarity project id option respectively
*/
add_action('wp_ajax_edit_clarity_project_id', "edit_clarity_project_id");
function edit_clarity_project_id() {
    $new_value = $_POST['new_value'];
    // only admins are allowed to edit the Clarity project id
    if (!current_user_can('manage_options')) {
        die(
            json_encode(
                array(
                    'success' => false,
                    'message' => 'User must be WordPress admin.'
                )
            )
        );
    } else {
        update_option(
            'clarity_project_id', /* option */
            $new_value /* value */
            /* autoload */
        );
        die(
            json_encode(
                array(
                    'success' => true,
                    'message' => 'Clarity project updated successfully.'
                    )
                )
        );
    }
}
