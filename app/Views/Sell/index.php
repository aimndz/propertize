<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Sell
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<header class="text-primary-100 fixed top-0 left-0 w-full z-50 bg-primary-900 shadow-header-shadow ">
    <nav class="bg-primary-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
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
                    <!-- <div class="px-4 py-3">
                            <span class="block text-sm dark:text-primary-100">Amiel Ian Mendoza</span>
                            <span class="block text-sm truncate dark:text-primary-200">amiel03@gmail.com</span>
                        </div> -->
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block px-4 py-2 text-sm dark:hover:bg-accent-700 dark:text-gray-200 dark:hover:text-white ">Login</a>
                        </li>
                        <!-- <li>
                                <a href="#" class="block px-4 py-2 text-sm dark:hover:bg-accent-700 dark:text-gray-200 dark:hover:text-white">Sign up</a>
                            </li> -->
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-accent-900 md:dark:bg-primary-900 dark:border-accent-800">
                    <li>
                        <a href="/buy" class="block py-2 px-3 rounded md:p-0 dark:text-white  md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Buy</a>
                    </li>
                    <li>
                        <a href="/sell" class="block py-2 px-3 rounded md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Sell</a>
                    </li>
                    <li>
                        <a href="/rent" class="block py-2 px-3 rounded md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Rent</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

-->

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



<section class="max-w-screen-xl mx-auto text-center mt-60 px-4 ">
    <div class="mb-5 md:mb-10">
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            Selling made <span class="text-primary-500 glow-text-yellow-lg">simple.</span>
        </p>
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            <span class="text-primary-500 glow-text-yellow-lg">Prioritize</span> your peace of mind.
        </p>
    </div>
    <a href="/list-property"><button class="block font-bold bg-primary-900 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap border text-primary-100">Sell Now</button></a>
</section>
<section class="max-w-screen-xl mx-auto px-4 mt-40">
    <div class="shadow-custom">
        <img src="images/hero-sell-img.png" alt="" class="w-full">
    </div>
</section>
<section class="max-w-screen-xl mx-auto mt-28 px-4">
    <div class="flex justify-center ">

        <!-- <div class=" text-primary-100 bg-accent-900 rounded-3xl px-10 py-10 border border-accent-800 shadow-custom">
            <h2 class="font-bold text-3xl md:text-2xl lg:text-5xl mb-8">Start selling now</h2>
            <p class="mb-8 max-w-xl">List your property with ease, manage inquiries, and track progress – all in one place. We provide the platform, you set the pace. Prioritize your independence and maximize your return on investment.</p>
            <button class="block font-bold bg-accent-700 px-20 py-5 rounded-full mx-auto">Sell your Home</button>
        </div> -->

        <div class="text-primary-100 bg-accent-900 rounded-3xl p-6 md:p-5 lg:p-10 border border-accent-800 shadow-custom">
            <h2 class="font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8 glow-text-white-lg">Start selling now</h2>
            <p class="mb-4 md:mb-8 max-w-xl">List your property with ease, manage inquiries, and track progress – all in one place. We provide the platform, you set the pace. Prioritize your independence and maximize your return on investment.</p>
            <a href="list-property"><button class="block font-bold bg-accent-700 px-8 pyf-3  md:py-5 md:px-16  rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap">Sell your Home</button></a>
        </div>
    </div>
</section>
<hr class="border-t-accent-800 mt-24">
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>