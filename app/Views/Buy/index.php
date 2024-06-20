<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Buy
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<header class="text-primary-100 fixed top-0 left-0 w-full z-50 bg-primary-900 shadow-header-shadow ">
    <nav class="bg-primary-900">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/propertize-logo.png" class="h-8" alt="Propertize logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-accent-800" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="images/default-profile.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-accent-800 dark:divide-accent-900" id="user-dropdown">
                    <?php if (session()->has('user_first_name') && session()->has('user_email')) : ?>
                        <div class="px-4 py-3">
                            <span class="block text-sm dark:text-primary-100"><?= session('user_first_name') ?> <?= session('user_last_name') ?></span>
                            <span class="block text-sm truncate dark:text-primary-200"><?= session('user_email') ?></span>
                        </div>
                        <form method="post" action="/logout" class="py-2" aria-labelledby="user-menu-button">
                            <?= csrf_field() ?>
                            <button type="submit" class="block px-4 py-2 text-sm dark:hover:bg-accent-700 dark:text-gray-200 dark:hover:text-white w-full">Sign out</button>
                        </form>
                    <?php else : ?>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block px-4 py-2 text-sm dark:hover:bg-accent-700 dark:text-gray-200 dark:hover:text-white ">Login</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary-100 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-accent-900 md:dark:bg-primary-900 dark:border-accent-800">
                    <li>
                        <a href="#" class="block py-2 px-3 rounded md:p-0 dark:text-white  md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Buy</a>
                    </li>
                    <li>
                        <a href="/sell" class="block py-2 px-3 rounded md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Sell</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 rounded md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Rent</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!--Blue background -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-primary-900">
            <!-- Modal header -->
            <div class="flex flex-col p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <div class="flex items-center justify-between">
                    <button type="button" class="text-primary-100 end-2.5 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-accent-900 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/propertize-logo.png" class="h-8" alt="Propertize logo" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4 text-center">
                    Welcome Back!
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div class="relative">
                        <input type="email" id="hs-floating-input-passowrd" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="********">
                        <label for="hs-floating-input-passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                peer-focus:scale-75
                                peer-focus:translate-x-0.5
                                peer-focus:-translate-y-1.5
                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                peer-[:not(:placeholder-shown)]:scale-75
                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Email
                        </label>
                    </div>
                    <div class="relative">
                        <input type="password" id="hs-floating-input-passowrd" class="peer p-4 block w-full border-gray-200 rounded-lg text-xl placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-primary-100 dark:text-primary-100 dark:focus:ring-primary-100
                            focus:pt-6
                            focus:pb-2
                            [&:not(:placeholder-shown)]:pt-6
                            [&:not(:placeholder-shown)]:pb-2
                            autofill:pt-6
                            autofill:pb-2" placeholder="********">
                        <label for="hs-floating-input-passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                            peer-focus:scale-75
                            peer-focus:translate-x-0.5
                            peer-focus:-translate-y-1.5
                            peer-focus:primary-200 dark:peer-focus:text-primary-200
                            peer-[:not(:placeholder-shown)]:scale-75
                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                            peer-[:not(:placeholder-shown)]:primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Password
                        </label>
                    </div>
                    <div class="flex justify-between">
                        <!-- <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a> -->
                    </div>
                    <button type="submit" class="w-full text-primary-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-500">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 text-center">
                        Don't have an account? <a href="#" class="font-bold text-primary-100 hover:underline dark:text-primary-100">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="mx-auto">
    <h1 class="font-bold mt-28 text-2xl text-primary-100 px-4 text-center">Buy / Rent a Property</h1>
    <hr class="border-t-accent-800 mt-4">
    <section class=" bg-primary-900 p-3 sm:p-5">
        <div class="flex flex-col md:flex-row justify-center items-center mb-5 space-y-3 md:space-y-0 md:space-x-4 p-4 bg-primary-900">
            <div>
                <p class="text-primary-100">150 results</p>
            </div>
            <div class="w-full md:w-1/3">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Enter a City...</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center p-4 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-primary-900 border border-accent-800 text-primary-100 text-sm rounded-lg block w-full pl-10 p-3 " placeholder="Enter a City..." required="">
                    </div>
                </form>
            </div>
            <div class="flex gap-5 md:gap-0">
                <div>
                    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class=" items-center p-2 text-sm text-gray-500 rounded-lg md:hidden border border-accent-800 focus:outline-none focus:ring-2 focus:ring-gray-200 hover:bg-accent-700">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M3 4a1 1 0 0 1 .707-.293h12.586A1 1 0 0 1 17 4v1a1 1 0 0 1-.293.707L12 10.414V15a1 1 0 0 1-.293.707l-2 2A1 1 0 0 1 8 17v-6.586L3.293 5.707A1 1 0 0 1 3 5V4z" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownDefaultRadio" class="text-primary-100 bg-primary-900 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-accent-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center border border-accent-800" type="button">
                        Filter
                        <svg class="w-2 h-2 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-accent-800 divide-y divide-accent-700 rounded-lg shadow">
                        <ul class="p-3 space-y-3 text-sm text-primary-100 bg-primary-800 rounded-lg" aria-labelledby="dropdownRadioButton">
                            <li>
                                <div class="flex items-center  ">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4  bg-primary-800 border-primary-600">
                                    <label for="default-radio-1" class="ms-2 text-sm font-medium text-primary-100">Price (High to Low)</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4  bg-primary-800 border-primary-600 ">
                                    <label for="default-radio-2" class="ms-2 text-sm font-medium text-primary-100">Price (Low to High)</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4  bg-primary-800 border-primary-600">
                                    <label for="default-radio-3" class="ms-2 text-sm font-medium text-primary-100">Newest</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
            <aside id="default-sidebar" class="fixed px-4 top-20 z-40 w-full md:w-1/5 h-screen md:h-[calc(100vh-15rem)] md:min-w-72 md:sticky md:top-16 overflow-y-auto bg-accent-700 md:bg-primary-900" aria-label="Sidebar">
                <button id="close-sidebar-button" class="absolute top-4 right-4 text-primary-100 hover:text-gray-300 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const closeSidebarButton = document.getElementById('close-sidebar-button');
                        const sidebar = document.getElementById('default-sidebar');
                        const accordionButtons = sidebar.querySelectorAll('[data-accordion-target]');

                        closeSidebarButton.addEventListener('click', () => {
                            sidebar.classList.toggle('-translate-x-full');

                            accordionButtons.forEach(button => {
                                const target = document.querySelector(button.getAttribute('data-accordion-target'));
                                if (target) {
                                    target.classList.add('hidden');
                                    button.setAttribute('aria-expanded', 'false');
                                }
                            });
                        });
                    });
                </script>
                <div id="accordion-open" data-accordion="open">
                    <h1 class="text-primary-100 font-bold pl-5 mt-4 text-center mb-8 md:hidden">
                        Filter</h1>
                    <h2 id="accordion-open-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                            <span class="flex items-center">Status</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                        <div class="p-4 border-b border-accent-800">
                            <div class="flex items-center mb-4">
                                <input checked id="property-for-sale" type="radio" value="sale" name="property-status" class="w-4 h-4 bg-slate-950">
                                <label for="property-for-sale" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">For sale</label>
                            </div>
                            <div class="flex items-center  mb-4">
                                <input id="property-for-rent" type="radio" value="rent" name="property-status" class="w-4 h-4 bg-slate-950">
                                <label for="property-for-rent" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">For rent</label>
                            </div>
                            <div class="flex items-center">
                                <input id="property-sold" type="radio" value="sold" name="property-status" class="w-4 h-4 bg-slate-950">
                                <label for="property-sold" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sold</label>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                            <span class="flex items-center">Price</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden " aria-labelledby="accordion-open-heading-2">
                        <div class="p-4 border-b border-accent-800 flex gap-3 items-center">
                            <div class="relative w-full">
                                <input type="number" id="filter-min-price" name="filter-min-price" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required placeholder="********">
                                <label for="filter-min-price" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                    Min
                                </label>
                            </div>
                            <div>
                                <p class="text-primary-100">to</p>
                            </div>
                            <div class="relative w-full">
                                <input type="number" id="filter-max-price" name="filter-max-price" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required placeholder="********">
                                <label for="filter-max-price" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                    Max
                                </label>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-3">
                        <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                            <span class="flex items-center">Beds and Baths</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                        <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                            <div class="relative w-full">
                                <input type="number" id="filter-beds" name="filter-beds" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required placeholder="********">
                                <label for="filter-beds" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                    Minimum beds
                                </label>
                            </div>
                            <div class="relative w-full">
                                <input type="number" id="filter-bathrooms" name="filter-bathrooms" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required placeholder="********">
                                <label for="filter-bathrooms" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                    Minimum bathrooms
                                </label>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-4">
                        <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                            <span class="flex items-center">Property Type</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                        <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                            <div class="flex flex-col justify-start w-full">
                                <div class="flex items-center mb-4">
                                    <input id="filter-select-all" type="checkbox" value="all" checked class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-select-all" class="ms-2 text-sm font-medium text-primary-100">
                                        Select all
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="filter-houses" type="checkbox" value="houses" class="w-4 h-4 border-gray-300 rounded">
                                    <label for="filter-houses" class="ms-2 text-sm font-medium text-primary-100">
                                        Houses
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="filter-townhomes" type="checkbox" value="townhomes" class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-townhomes" class="ms-2 text-sm font-medium text-primary-100">
                                        Townhomes
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="filter-multi-family" type="checkbox" value="multi-family" class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-multi-family" class="ms-2 text-sm font-medium text-primary-100">
                                        Multi-family
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="filter-condos" type="checkbox" value="condos" class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-condos" class="ms-2 text-sm font-medium text-primary-100">
                                        Condos
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="filter-apartments" type="checkbox" value="apartments" class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-apartments" class="ms-2 text-sm font-medium text-primary-100">
                                        Apartments
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-manufactured" type="checkbox" value="manufactured" class="w-4 h-4 border-gray-300 rounded ">
                                    <label for="filter-manufactured" class="ms-2 text-sm font-medium text-primary-100">
                                        Manufactured
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-5">
                        <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
                            <span class="flex items-center">More</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
                        <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                            <div>
                                <p class="text-primary-100 mb-2">Parkings</p>
                                <div class=" flex gap-3 items-center">
                                    <div class="relative w-full">
                                        <input type="number" id="filter-min-parkings" name="filter-min-parkings" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-min-parkings" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Min
                                        </label>
                                    </div>
                                    <div>
                                        <p class="text-primary-100">to</p>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="filter-max-floor-area" name="filter-max-floor-area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-max-floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Max
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="text-primary-100 mb-2">Floor Area</p>
                                <div class=" flex gap-3 items-center">
                                    <div class="relative w-full">
                                        <input type="number" id="filter-min-floor-area" name="filter-min-floor-area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-min-floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Min
                                        </label>
                                    </div>
                                    <div>
                                        <p class="text-primary-100">to</p>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="filter-max-floor-area" name="filter-max-floor-area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-max-floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Max
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="text-primary-100 mb-2">Lot size</p>
                                <div class=" flex gap-3 items-center">
                                    <div class="relative w-full">
                                        <input type="number" id="filter-min-lot-size" name="filter-min-lot-size" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-min-lot-size" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Min
                                        </label>
                                    </div>
                                    <div>
                                        <p class="text-primary-100">to</p>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="filter-max-lot-size" name="filter-max-lot-size" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-max-lot-size" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Max
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="text-primary-100 mb-2">Year built</p>
                                <div class=" flex gap-3 items-center">
                                    <div class="relative w-full">
                                        <input type="number" id="filter-min-year-built" name="filter-min-year-built" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-min-year-built" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Min
                                        </label>
                                    </div>
                                    <div>
                                        <p class="text-primary-100">to</p>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="filter-max-year-built" name="filter-max-year-built" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" required placeholder="********">
                                        <label for="filter-max-year-built" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                            Max
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="grid w-full md:w-4/5 grid-cols-1 custom-sm:grid-cols-2 custom-md:grid-cols-3 custom-lg:grid-cols-4 gap-4 col-span-4">
                <div class=" border bg-accent-900 border-accent-800 rounded-lg shadow ">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class=" border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Alarcon</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Sebastian</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Ofalza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Estero</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
                <div class="border rounded-lg shadow bg-accent-900 border-accent-800">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/hero-sell-img.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">$200,000</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><span><strong>3</strong></span> beds | <span><strong>2</strong></span> baths | <span><strong>1,000</strong></span> sqft</p>
                        <p class="mb-3 text-sm md:text-base font-normal text-primary-100">2605 Edgerton St, Little Canada, MN 55117</p>
                        <p class=" text-sm md:text-base font-normal text-primary-500"><span>Mendoza</span>'s Property</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<hr class="border-t-accent-800 mt-24">



<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>