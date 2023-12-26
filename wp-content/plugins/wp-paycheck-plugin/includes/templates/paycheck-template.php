<div class="px-10 py-6">
    <div class="flex flex-col gap-5 px-2 py-3">
        <h1 class="text-primary text-5xl font-bold">Florida  paycheck calculator</h1>
        <p class="text-primary text-opacity-50">Calculate your Puerto Rico net pay or take home pay by entering your per-period or annual salary along with the pertinent federal, state, and local W4 information into this free Puerto Rico paycheck calculator.</p>
    </div>
    <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="h-auto">
            <div class="w-full px-5 py-3 bg-white rounded-3xl shadow border-1 border-third">
                <h1 class="text-primary text-lg font-semibold leading-10 text-center">Work info</h1>
                <div class="mt-6 grid grid-cols-1 gap-3">
                    <div class="col-span-full">
                        <label for="country" class="block text-sm text-secondary leading-6">Marital Status</label>
                        <div class="mt-1">
                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                <option>Single</option>
                                <option>Married</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="country" class="block text-sm text-secondary leading-6">Location</label>
                        <div class="mt-1">
                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                <option>Georgia</option>
                                <option>New york</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="country" class="block text-sm text-secondary leading-6">Pay Frequenecy</label>
                        <div class="mt-1">
                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                <option>Monthly</option>
                                <option>Yearly</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <button class="w-full inline-flex items-center justify-between text-sm text-secondary border-none">
                            Additional Withholdings
                            <svg class="w-4" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="11.0562" cy="12" rx="11.0562" ry="11" fill="#189AB4"/>
                                <path d="M18.76 14.15H13.09V19.97H9.13V14.15H3.46V10.49H9.13V4.67H13.09V10.49H18.76V14.15Z" fill="white"/>
                            </svg>
                        </button>
                    </div>

                    <div class="col-span-full">
                        <button class="w-full inline-flex items-center justify-between text-sm text-secondary border-none">
                            Pre-Tax Deductions
                            <svg class="w-4" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="11.0562" cy="12" rx="11.0562" ry="11" fill="#189AB4"/>
                                <path d="M18.76 14.15H13.09V19.97H9.13V14.15H3.46V10.49H9.13V4.67H13.09V10.49H18.76V14.15Z" fill="white"/>
                            </svg>
                        </button>
                    </div>

                    <div class="col-span-full">
                        <button class="w-full inline-flex items-center justify-between text-sm text-secondary border-none">
                            Post-Tax Deductions
                            <svg class="w-4" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="11.0562" cy="12" rx="11.0562" ry="11" fill="#189AB4"/>
                                <path d="M18.76 14.15H13.09V19.97H9.13V14.15H3.46V10.49H9.13V4.67H13.09V10.49H18.76V14.15Z" fill="white"/>
                            </svg>
                        </button>
                    </div>

                    <div class="col-span-full">
                        <button class="w-full inline-flex items-center justify-between text-sm text-secondary border-none">
                            Tax Exemptions
                            <svg class="w-4" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="11.0562" cy="12" rx="11.0562" ry="11" fill="#189AB4"/>
                                <path d="M18.76 14.15H13.09V19.97H9.13V14.15H3.46V10.49H9.13V4.67H13.09V10.49H18.76V14.15Z" fill="white"/>
                            </svg>
                        </button>
                    </div>

                    <div class="col-span-full">
                        <div class="sm:flex sm:flex-col sm:items-start sm:justify-between sm:space-y-0">
                            <label class="block text-sm text-secondary">Using a W4 from 2020 or later?</label>
                            <div class="p-3 space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                <div class="inline-flex items-center">
                                    <input name="w4-method" type="radio" class="h-4 w-4">
                                    <label class="ml-3 block text-sm text-secondary leading-6">Yes</label>
                                </div>
                                <div class="inline-flex items-center">
                                    <input name="w4-method" type="radio" class="h-4 w-4">
                                    <label class="ml-3 block text-sm text-secondary leading-6">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="w-full h-full col-span-2">

            <div class="grid grid-cols-1 gap-6">
                <div class="w-full px-5 py-3 bg-white rounded-3xl shadow border-1 border-third">
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:items-center">
                        <div class="col-span-full sm:col-span-1 order-2 sm:order-1">
                            <table class="w-full text-sm whitespace-nowrap border-0 text-left rtl:text-right">
                                <thead class="text-primary text-lg font-semibold border-b-2 border-primary">
                                <tr>
                                    <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3">
                                        Gross Paycheck
                                    </th>
                                    <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3">

                                    </th>
                                    <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3">
                                        $37,500
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-white text-primary font-normal">
                                    <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                        <div class="inline-flex items-center gap-3">
                                            <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16.5206" cy="16.8515" r="16.4589" fill="#189AB4"/>
                                            </svg>

                                            Earnings
                                        </div>
                                    </th>
                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        26%
                                    </td>
                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        $9,750
                                    </td>
                                </tr>
                                <tr class="bg-white text-primary font-normal">
                                    <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                        <div class="inline-flex items-center gap-3">
                                            <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16.5206" cy="16.9345" r="16.4589" fill="#75E6DA"/>
                                            </svg>
                                            Taxes
                                        </div>

                                    </th>

                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        14%
                                    </td>
                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        $5,250
                                    </td>
                                </tr>

                                </tbody>

                                <tfoot class=" border-t-2 border-primary">
                                <tr class="bg-white text-primary font-normal">
                                    <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                        <div class="inline-flex items-center gap-3">
                                            <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16.5206" cy="16.5731" r="16.4589" fill="#05445E"/>
                                            </svg>

                                            Take Home
                                        </div>

                                    </th>
                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        60%
                                    </td>
                                    <td class="py-2 px-1 lg:px-6 lg:py-3">
                                        $22,500
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-span-full sm:col-span-1 order-1 sm:order-2">
                            <div class="py-6" id="donut-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-5 py-3 bg-white rounded-3xl shadow border-1 border-third">
                    <div class="mt-6 grid grid-cols-1">
                        <div class="col-span-full">
                            <div class="grid grid-cols-1">
                                <div class="col-span-full">
                                    <h2 class="text-primary text-lg font-semibold leading-10">How are you paid?</h2>
                                </div>
                                <div class="grid grid-cols-2 sm:grid-cols-12 gap-3">
                                    <div class="col-span-1 sm:col-span-4">
                                        <label for="country" class="block text-sm text-secondary leading-6">Type</label>
                                        <div class="mt-1">
                                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                                <option>Single</option>
                                                <option>Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-1 sm:col-span-4">
                                        <label for="country" class="block text-sm text-secondary leading-6">Gross Pay Method
                                        </label>
                                        <div class="mt-1">
                                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                                <option>Single</option>
                                                <option>Married</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-1 sm:col-span-3">
                                        <label for="price" class="block text-sm text-secondary leading-6">Amount</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class=" text-sm text-primary text-opacity-60 sm:text-sm">$</span>
                                            </div>
                                            <input type="text" name="price" id="price" class="block w-full border-1 border-secondary rounded-lg py-1.5 pl-8 pr-20 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6 placeholder:text-primary placeholder:text-opacity-30" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="col-span-1">
                                        <button class="mt-8 inline-flex items-center">
                                            <svg class="w-6 h-6" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3077 4.98214V5.53571H16.6923V4.98214C16.6923 4.24806 16.4087 3.54405 15.9037 3.02497C15.3988 2.5059 14.714 2.21429 14 2.21429C13.286 2.21429 12.6012 2.5059 12.0963 3.02497C11.5913 3.54405 11.3077 4.24806 11.3077 4.98214ZM9.15385 5.53571V4.98214C9.15385 3.6608 9.66442 2.39357 10.5733 1.45924C11.4821 0.524903 12.7147 0 14 0C15.2853 0 16.5179 0.524903 17.4267 1.45924C18.3356 2.39357 18.8462 3.6608 18.8462 4.98214V5.53571H26.9231C27.2087 5.53571 27.4826 5.65236 27.6846 5.85999C27.8865 6.06762 28 6.34922 28 6.64286C28 6.93649 27.8865 7.2181 27.6846 7.42572C27.4826 7.63335 27.2087 7.75 26.9231 7.75H25.2991L23.2615 26.0931C23.1113 27.4441 22.4827 28.6909 21.4955 29.5959C20.5084 30.5008 19.2318 31.0006 17.9092 31H10.0908C8.76816 31.0006 7.49158 30.5008 6.50446 29.5959C5.51733 28.6909 4.88871 27.4441 4.73846 26.0931L2.70092 7.75H1.07692C0.791305 7.75 0.517386 7.63335 0.315423 7.42572C0.113461 7.2181 0 6.93649 0 6.64286C0 6.34922 0.113461 6.06762 0.315423 5.85999C0.517386 5.65236 0.791305 5.53571 1.07692 5.53571H9.15385ZM6.87938 25.8407C6.96929 26.651 7.34607 27.399 7.93792 27.9422C8.52976 28.4853 9.29529 28.7855 10.0886 28.7857H17.9103C18.7036 28.7855 19.4692 28.4853 20.061 27.9422C20.6529 27.399 21.0296 26.651 21.1195 25.8407L23.1323 7.75H4.86877L6.87938 25.8407ZM10.7692 11.625C11.0548 11.625 11.3288 11.7416 11.5307 11.9493C11.7327 12.1569 11.8462 12.4385 11.8462 12.7321V23.8036C11.8462 24.0972 11.7327 24.3788 11.5307 24.5864C11.3288 24.7941 11.0548 24.9107 10.7692 24.9107C10.4836 24.9107 10.2097 24.7941 10.0077 24.5864C9.80577 24.3788 9.69231 24.0972 9.69231 23.8036V12.7321C9.69231 12.4385 9.80577 12.1569 10.0077 11.9493C10.2097 11.7416 10.4836 11.625 10.7692 11.625ZM18.3077 12.7321C18.3077 12.4385 18.1942 12.1569 17.9923 11.9493C17.7903 11.7416 17.5164 11.625 17.2308 11.625C16.9452 11.625 16.6712 11.7416 16.4693 11.9493C16.2673 12.1569 16.1538 12.4385 16.1538 12.7321V23.8036C16.1538 24.0972 16.2673 24.3788 16.4693 24.5864C16.6712 24.7941 16.9452 24.9107 17.2308 24.9107C17.5164 24.9107 17.7903 24.7941 17.9923 24.5864C18.1942 24.3788 18.3077 24.0972 18.3077 23.8036V12.7321Z" fill="#189AB4"/>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-span-full">
                            <div class="mt-6 grid grid-cols-1">
                                <div class="col-span-full">
                                    <h2 class="text-primary text-lg font-semibold leading-10">Any overtime?</h2>
                                </div>
                                <div class="grid grid-cols-2 lg:grid-cols-12 gap-3">
                                    <div class="sm:col-span-1 lg:col-span-4">
                                        <label for="country" class="block text-sm text-secondary leading-6">Type</label>
                                        <div class="mt-1">
                                            <select id="country" name="country" autocomplete="country-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6">
                                                <option>Single</option>
                                                <option>Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-1 lg:col-span-4">
                                        <label for="price" class="block text-sm text-secondary leading-6">Hours</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <input type="text" name="price" id="price" class="block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6 placeholder:text-primary placeholder:text-opacity-30" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="col-span-1 lg:col-span-3">
                                        <label for="price" class="block text-sm text-secondary leading-6">Amount</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class=" text-sm text-primary text-opacity-60 sm:text-sm">$</span>
                                            </div>
                                            <input type="text" name="price" id="price" class="block w-full border-1 border-secondary rounded-lg py-1.5 pl-8 pr-20 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6 placeholder:text-primary placeholder:text-opacity-30" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="col-span-1 lg:col-span-1">
                                        <button class="mt-8 inline-flex items-center">
                                            <svg class="w-6 h-6" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3077 4.98214V5.53571H16.6923V4.98214C16.6923 4.24806 16.4087 3.54405 15.9037 3.02497C15.3988 2.5059 14.714 2.21429 14 2.21429C13.286 2.21429 12.6012 2.5059 12.0963 3.02497C11.5913 3.54405 11.3077 4.24806 11.3077 4.98214ZM9.15385 5.53571V4.98214C9.15385 3.6608 9.66442 2.39357 10.5733 1.45924C11.4821 0.524903 12.7147 0 14 0C15.2853 0 16.5179 0.524903 17.4267 1.45924C18.3356 2.39357 18.8462 3.6608 18.8462 4.98214V5.53571H26.9231C27.2087 5.53571 27.4826 5.65236 27.6846 5.85999C27.8865 6.06762 28 6.34922 28 6.64286C28 6.93649 27.8865 7.2181 27.6846 7.42572C27.4826 7.63335 27.2087 7.75 26.9231 7.75H25.2991L23.2615 26.0931C23.1113 27.4441 22.4827 28.6909 21.4955 29.5959C20.5084 30.5008 19.2318 31.0006 17.9092 31H10.0908C8.76816 31.0006 7.49158 30.5008 6.50446 29.5959C5.51733 28.6909 4.88871 27.4441 4.73846 26.0931L2.70092 7.75H1.07692C0.791305 7.75 0.517386 7.63335 0.315423 7.42572C0.113461 7.2181 0 6.93649 0 6.64286C0 6.34922 0.113461 6.06762 0.315423 5.85999C0.517386 5.65236 0.791305 5.53571 1.07692 5.53571H9.15385ZM6.87938 25.8407C6.96929 26.651 7.34607 27.399 7.93792 27.9422C8.52976 28.4853 9.29529 28.7855 10.0886 28.7857H17.9103C18.7036 28.7855 19.4692 28.4853 20.061 27.9422C20.6529 27.399 21.0296 26.651 21.1195 25.8407L23.1323 7.75H4.86877L6.87938 25.8407ZM10.7692 11.625C11.0548 11.625 11.3288 11.7416 11.5307 11.9493C11.7327 12.1569 11.8462 12.4385 11.8462 12.7321V23.8036C11.8462 24.0972 11.7327 24.3788 11.5307 24.5864C11.3288 24.7941 11.0548 24.9107 10.7692 24.9107C10.4836 24.9107 10.2097 24.7941 10.0077 24.5864C9.80577 24.3788 9.69231 24.0972 9.69231 23.8036V12.7321C9.69231 12.4385 9.80577 12.1569 10.0077 11.9493C10.2097 11.7416 10.4836 11.625 10.7692 11.625ZM18.3077 12.7321C18.3077 12.4385 18.1942 12.1569 17.9923 11.9493C17.7903 11.7416 17.5164 11.625 17.2308 11.625C16.9452 11.625 16.6712 11.7416 16.4693 11.9493C16.2673 12.1569 16.1538 12.4385 16.1538 12.7321V23.8036C16.1538 24.0972 16.2673 24.3788 16.4693 24.5864C16.6712 24.7941 16.9452 24.9107 17.2308 24.9107C17.5164 24.9107 17.7903 24.7941 17.9923 24.5864C18.1942 24.3788 18.3077 24.0972 18.3077 23.8036V12.7321Z" fill="#189AB4"/>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-span-full">
                            <div class="mt-6 grid grid-cols-1">
                                <div class="col-span-full">
                                    <h2 class="text-primary text-lg font-semibold leading-10">What's the date of the paycheck you're calculating?
                                    </h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-12 gap-3">
                                    <div class="col-span-full sm:col-span-4">
                                        <div class="relative max-w-sm">
<!--                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">-->
<!--                                                <svg class="w-4 h-4" viewBox="0 0 32 35" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                                    <path d="M27.1335 4.2666H4.26668C2.46254 4.2666 1 5.72915 1 7.53328V30.4001C1 32.2042 2.46254 33.6667 4.26668 33.6667H27.1335C28.9376 33.6667 30.4001 32.2042 30.4001 30.4001V7.53328C30.4001 5.72915 28.9376 4.2666 27.1335 4.2666Z" stroke="#189AB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                                    <path d="M22.2338 1V7.53336" stroke="#189AB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                                    <path d="M9.16638 1V7.53336" stroke="#189AB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                                    <path d="M1 14.0664H30.4001" stroke="#189AB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                                                    <rect x="22" y="26" width="5" height="4" rx="1" fill="#189AB4"/>-->
<!--                                                </svg>-->
<!---->
<!--                                            </div>-->
                                            <input type="date" class="block  cursor-pointer w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-inset focus:ring-third sm sm:leading-6 placeholder:text-primary placeholder:text-opacity-30" placeholder="16 - 06 - 2022">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>