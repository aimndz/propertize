<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Admin
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

                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
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

<main class="max-w-screen-xl mx-auto text-center px-5 mt-28">
    <section class=" bg-primary-900 ">
        <div class="mx-auto">
            <div class="relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row gap-5">
                    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="mt-48 items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden border border-accent-800 focus:outline-none focus:ring-2 focus:ring-gray-200 hover:bg-accent-700">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M3 4a1 1 0 0 1 .707-.293h12.586A1 1 0 0 1 17 4v1a1 1 0 0 1-.293.707L12 10.414V15a1 1 0 0 1-.293.707l-2 2A1 1 0 0 1 8 17v-6.586L3.293 5.707A1 1 0 0 1 3 5V4z" />
                        </svg>
                    </button>
                    <aside id="default-sidebar" class="fixed top-20 z-40 w-full md:w-28 md:min-w-28 md:static overflow-y-auto bg-accent-700 md:bg-primary-900" aria-label="Sidebar">
                        <button id="close-sidebar-button" class="absolute top-4 right-4  text-primary-100 hover:text-gray-300 md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <ul class="flex flex-col gap-5 text-primary-100 bg-accent-900 border border-accent-800 rounded-lg p-2 text-center text-xs h-[calc(100vh-9rem)]">
                            <li>
                                <div class="bg-accent-500 p-3 rounded-lg cursor-pointer">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" class="mx-auto">
                                            <path d="M3 3h18v18H3V3z" fill="none" />
                                            <path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-0.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 0.9-2 2zm16 14H5V5h14v14z" />
                                            <path d="M7 17h2V7H7v10zm4 0h2V11h-2v6zm4 0h2V9h-2v8z" />
                                        </svg>
                                    </div>
                                    <p>Summary</p>
                                </div>
                            </li>
                            <li>
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 495.398 495.398" xml:space="preserve" width="40px" height="40px" class="mx-auto">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path>
                                                        <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p>Properties</p>
                                </div>
                            </li>
                            <li>
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40px" height="40px" class="mx-auto">
                                        <circle cx="12" cy="8" r="4" fill="white" />
                                        <path d="M12 14c-4.418 0-8 2.686-8 6v2h16v-2c0-3.314-3.582-6-8-6z" fill="white" />
                                    </svg>
                                    <p>Users</p>
                                </div>
                            </li>
                        </ul>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const closeSidebarButton = document.getElementById('close-sidebar-button');
                                const sidebar = document.getElementById('default-sidebar');
                                const sections = {
                                    'summary': document.getElementById('summary-content'),
                                    'properties': document.getElementById('properties-content'),
                                    'users': document.getElementById('users-content')
                                };

                                function showSection(sectionId) {
                                    for (let id in sections) {
                                        if (id === sectionId) {
                                            sections[id].classList.remove('hidden');
                                        } else {
                                            sections[id].classList.add('hidden');
                                        }
                                    }

                                    // Update sidebar items' background based on sectionId
                                    const sidebarItems = sidebar.querySelectorAll('ul li');
                                    sidebarItems.forEach((item, index) => {
                                        const itemDiv = item.querySelector('div');
                                        if (index === 0 && sectionId === 'summary') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 1 && sectionId === 'properties') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 2 && sectionId === 'users') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else {
                                            itemDiv.classList.remove('bg-accent-500');
                                        }
                                    });
                                }

                                showSection('summary'); // Initial state: show 'Summary' content and highlight its sidebar item

                                const sidebarItems = sidebar.querySelectorAll('ul li');
                                sidebarItems.forEach((item, index) => {
                                    item.addEventListener('click', () => {
                                        switch (index) {
                                            case 0:
                                                showSection('summary');
                                                break;
                                            case 1:
                                                showSection('properties');
                                                break;
                                            case 2:
                                                showSection('users');
                                                break;
                                            default:
                                                break;
                                        }
                                    });
                                });

                            });
                        </script>

                    </aside>
                    <section id="summary-content" class="w-full flex flex-col gap-5">
                        <h1 class="text-primary-100 font-bold text-2xl text-left">Summary</h1>
                        <div class="flex gap-5">
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5 flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">21</p>
                                <p class="text-xs uppercase tracking-wider">Total Active Listings</p>
                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5  flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">15</p>
                                <p class="text-xs  uppercase  tracking-wider">Properties Sold</p>
                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5  flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">₱ 500,000.00</p>
                                <p class="text-xs  uppercase  tracking-wider ">Total Revenue</p>
                            </div>
                        </div>
                        <h1 class="text-primary-100 font-bold text-2xl text-left mt-10">Recent Lists</h1>
                        <div class="relative overflow-x-auto rounded-lg border border-accent-800">
                            <table class="w-full text-sm text-left rtl:text-right  text-primary-100 rounded-lg ">
                                <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Property
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Address
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-end">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="  bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            The Modern Oasis
                                        </td>
                                        <td class="px-6 py-4">
                                            General Trias Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 3,000,000.00
                                        </td>
                                        <td class="px-6 py-4 flex   justify-end items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Sunnyside Family Home
                                        </td>
                                        <td class="px-6 py-4">
                                            Dasmariñas, Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 1, 500,000.00
                                        </td>
                                        <td class="px-6 py-4 flex  justify-end items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            3
                                        </th>
                                        <td class="px-6 py-4">
                                            Magic House
                                        </td>
                                        <td class="px-6 py-4">
                                            Dasmariñas, Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 1, 500,000.00
                                        </td>
                                        <td class="px-6 py-4 flex  justify-end  items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section id="properties-content" class="hidden text-white w-full">
                        <h1 class="text-primary-100 font-bold text-2xl text-left mb-5">Properties</h1>
                        <div class="relative overflow-x-auto rounded-lg border border-accent-800">
                            <table class="w-full text-sm text-left rtl:text-right  text-primary-100 rounded-lg ">
                                <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Property
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Address
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-end">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="  bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            The Modern Oasis
                                        </td>
                                        <td class="px-6 py-4">
                                            General Trias Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 3,000,000.00
                                        </td>
                                        <td class="px-6 py-4 flex justify-end items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Sunnyside Family Home
                                        </td>
                                        <td class="px-6 py-4">
                                            Dasmariñas, Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 1, 500,000.00
                                        </td>
                                        <td class="px-6 py-4 flex justify-end items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            3
                                        </th>
                                        <td class="px-6 py-4">
                                            Magic House
                                        </td>
                                        <td class="px-6 py-4">
                                            Dasmariñas, Cavite
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱ 1, 500,000.00
                                        </td>
                                        <td class="px-6 py-4 flex justify-end items-center gap-3">
                                            <a href="#" class="underline">View</a>
                                            <button class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Approve</button>
                                            <button class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section id="users-content" class="hidden text-white w-full">
                        <h1 class="text-primary-100 font-bold text-2xl text-left mb-5">Users</h1>
                        <div class="relative overflow-x-auto rounded-lg border border-accent-800">
                            <table class="w-full text-sm text-left rtl:text-right  text-primary-100 rounded-lg ">
                                <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            First Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Last Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="  bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            Amiel Ian
                                        </td>
                                        <td class="px-6 py-4">
                                            Mendoza
                                        </td>
                                        <td class="px-6 py-4">
                                            amiel03@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            Admin
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Basti
                                        </td>
                                        <td class="px-6 py-4">
                                            Alarcon
                                        </td>
                                        <td class="px-6 py-4">
                                            basti@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            Buyer
                                        </td>
                                    </tr>
                                    <tr class="bg-primary-900 border-b-accent-400">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            3
                                        </th>
                                        <td class="px-6 py-4">
                                            Grace
                                        </td>
                                        <td class="px-6 py-4">
                                            Hermosa
                                        </td>
                                        <td class="px-6 py-4">
                                            grace@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            Buyer, Seller
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

</main>




<?= $this->endSection() ?>