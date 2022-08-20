<nav class="bg-primaryColor px-2 md:px-4 py-2.5">
    <div class="flex flex-wrap justify-between items-center mx-auto">

        <a href="https://flowbite.com" class="flex items-center">
            <img src="{{ asset('images/SamaGokh.svg') }}" class="mr-1 h-6 sm:h-9" alt="SamaGokh Logo">
            <span class="self-center font-semibold whitespace-nowrap msm:text-sm lg:text-lg">SamaGokh</span>
        </a>

        <div class="flex items-center lg:order-2">
            <a href="#" class="text-black hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-4 py-2 msm:text-xs md:px-5 md:py-2.5 mr-1 md:mr-2 md:text-sm">Connexion</a>
            <a href="#" class="text-white bg-secondaryColor focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-4 py-2 msm:text-xs md:px-5 md:py-2.5 mr-1 md:mr-2 md:text-sm">Inscription</a>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div id="mega-menu" class="hidden justify-between items-center msm:w-full sm:w-full md:text-lg lg:flex lg:w-auto lg:order-1">

            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

                <li class="lg:text-base">
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-black hover:bg-gray-50 lg:w-auto lg:hover:bg-transparent lg:border-0 lg:p-0">
                        Municipalite <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="mega-menu-dropdown" class="hidden grid absolute z-10 grid-cols-2 w-auto bg-white rounded-lg border border-gray-100 shadow-md block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(143px, 70px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        
                        <div class="p-4 pb-0 text-black md:pb-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </li>
                <li class="lg:text-base">

                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-black hover:bg-gray-50 lg:w-auto lg:hover:bg-transparent lg:border-0 lg:p-0">
                        Ville <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="mega-menu-dropdown" class="hidden grid absolute z-10 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700 block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(143px, 70px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </li>
                <li class="lg:text-base">
                    <a href="#" class="block py-2 pr-4 pl-3 text-black hover:bg-gray-50 lg:hover:bg-transparent">Actualites</a>
                </li>
                <li class="lg:text-base">
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-black hover:bg-gray-50 lg:w-auto lg:hover:bg-transparent lg:border-0 lg:p-0">
                        Demarches <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="mega-menu-dropdown" class="hidden grid absolute z-10 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700 block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(143px, 70px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-secondaryColor">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
