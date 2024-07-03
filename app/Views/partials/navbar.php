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
                <div class="z-50 hidden my-4 text-base list-none  rounded-lg shadow dark:bg-accent-800 dark:divide-accent-900" id="user-dropdown">
                    <?php if (session()->has('user_first_name') && session()->has('user_email')) :
                    ?>
                        <div class="px-4 py-3 border-b border-b-primary-200">
                            <span class="block text-sm dark:text-primary-100"><?= session('user_first_name') ?> <?= session('user_last_name') ?></span>
                            <span class="block text-sm truncate dark:text-primary-200"><?= session('user_email') ?></span>
                        </div>

                        <?php
                        $userRole = session('user_role');
                        if (stripos($userRole, 'seller') !== false) :
                        ?>
                            <a href="/dashboard" class="block text-center px-4 py-2 text-sm dark:hover:bg-accent-700 dark:text-gray-200 dark:hover:text-white w-full">Dashboard</a>
                        <?php endif; ?>
                        <form method="post" action="/logout" class="pb-2" aria-labelledby="user-menu-button">
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
                    <li>
                        <a href="/manage-rent" class="block py-2 px-3 rounded md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-accent-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-accent-800">Manage Rent</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!--Dark background -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-primary-900 border border-accent-800">
            <!-- Modal header -->
            <div class="flex flex-col px-4 pt-4 md:px-4 md:pt-4 rounded-t ">
                <div class="flex justify-center">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <img src="images/propertize-logo.png" class="h-8 mx-auto" alt="Propertize logo" />
                    </div>
                    <button id="login-close-btn" type="button" class="text-primary-100 absolute top-5 right-3 bg-transparent rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-accent-900 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <h3 class="text-xl font-semibold text-white mt-4 text-center">
                    Welcome Back!
                </h3>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/login') ?>
                <div class="space-y-4">
                    <div class="relative">
                        <input type="text" id="login-username" name="username" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                    focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 bautofill:pb-2" placeholder="********">
                        <label for="login-username" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                    peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75
                                    peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Username
                        </label>
                    </div>
                    <div class="relative">
                        <input type="password" id="login-password" name="password" class="passwordInput peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                    focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2
                                    autofill:pt-6
                                    autofill:pb-2" placeholder="********">
                        <label for="login-password" class="
                                    absolute
                                    top-0
                                    start-0
                                    p-4
                                    h-full
                                    text-sm
                                    truncate
                                    pointer-events-none
                                    transition
                                    ease-in-out
                                    duration-100
                                    border
                                    border-transparent
                                    origin-[0_0]
                                    dark:text-white
                                    peer-disabled:opacity-50
                                    peer-disabled:pointer-events-none
                                    peer-focus:scale-75
                                    peer-focus:translate-x-0.5
                                    peer-focus:-translate-y-1.5
                                    peer-focus:text-primary-200
                                    dark:peer-focus:text-primary-200
                                    peer-[:not(:placeholder-shown)]:scale-75
                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                    peer-[:not(:placeholder-shown)]:text-primary-200
                                    dark:peer-[:not(:placeholder-shown)]:text-primary-200
                                ">
                            Password
                        </label>
                        <button type="button" class="togglePasswordButton absolute top-1/2 end-4 -translate-y-1/2 transform focus:outline-none hover:text-primary-200 dark:hover:text-primary-200 aria-label='Toggle Password Visibility'">
                            <svg class="eyeIconOpen w-5 h-5 transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            <svg class="eyeIconClosed w-5 h-5 hidden transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                <line x1="2" y1="2" x2="18" y2="18" stroke="#606060" stroke-width="2" />
                            </svg>
                        </button>
                    </div>

                    <div class="alert alert-danger text-accent-300 text-center hidden" role="alert">
                    </div>
                    <div class="flex justify-between">
                        <!-- <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a> -->
                    </div>
                    <button type="submit" class="w-full text-primary-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-500">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 text-center">
                        Don't have an account? <a href="#" data-modal-target="modal-sign-up" data-modal-toggle="modal-sign-up" data-modal-hide="authentication-modal" class="font-bold text-primary-100 hover:underline dark:text-primary-100">Sign up</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal-sign-up" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Dark background -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm "></div>
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-primary-900 border border-accent-800">
            <!-- Modal header -->
            <div class="flex flex-col px-4 pt-4 md:px-4 md:pt-4 rounded-t ">
                <div class="flex justify-center">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <img src="images/propertize-logo.png" class="h-8 mx-auto" alt="Propertize logo" />
                    </div>
                    <button type="button" class="text-primary-100 absolute top-5 right-3 bg-transparent rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-accent-900 dark:hover:text-white" data-modal-hide="modal-sign-up">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <h3 class="text-xl font-semibold text-white mt-4 text-center">
                    Sign Up
                </h3>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/create') ?>
                <div class="space-y-4 ">
                    <div>
                        <div class="relative">
                            <input type="text" id="sign-up-first-name" name='first_name' class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" placeholder="********">
                            <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                            <label for="sign-up-first-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75
                                                peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                First name
                            </label>
                        </div>

                    </div>
                    <div class="relative">
                        <input type="text" id="sign-up-last-name" name='last_name' class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                        <label for="sign-up-last-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                            peer-focus:scale-75
                                            peer-focus:translate-x-0.5
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                            peer-[:not(:placeholder-shown)]:scale-75
                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Last name
                        </label>
                    </div>
                    <div class="relative">
                        <input type="text" id="sign-up-user-name" name='username' class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                        <label for="sign-up-user-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                            peer-focus:scale-75
                                            peer-focus:translate-x-0.5
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                            peer-[:not(:placeholder-shown)]:scale-75
                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Username
                        </label>
                    </div>
                    <div class="relative">
                        <input type="email" id="sign-up-email" name='email' class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                        <label for="sign-up-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
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
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                    </div>
                    <div class="relative">
                        <button type="button" class="absolute togglePasswordButton top-7 end-4 -translate-y-1/2 transform focus:outline-none hover:text-primary-200 dark:hover:text-primary-200 aria-label='Toggle Password Visibility'">
                            <svg class="eyeIconOpen w-5 h-5  transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            <svg class="eyeIconClosed w-5 hidden h-5 transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                <line x1="2" y1="2" x2="18" y2="18" stroke="#606060" stroke-width="2" />
                            </svg>
                        </button>
                        <input type="password" id="sign-up-password" name='password' class="passwordInput peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                        <label for="sign-up-password" class="
                                            absolute
                                            top-0
                                            start-0
                                            p-4
                                            h-full
                                            text-sm
                                            truncate
                                            pointer-events-none
                                            transition
                                            ease-in-out
                                            duration-100
                                            border
                                            border-transparent
                                            origin-[0_0]
                                            dark:text-white
                                            peer-disabled:opacity-50
                                            peer-disabled:pointer-events-none
                                            peer-focus:scale-75
                                            peer-focus:translate-x-0.5
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-primary-200
                                            dark:peer-focus:text-primary-200
                                            peer-[:not(:placeholder-shown)]:scale-75
                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-primary-200
                                            dark:peer-[:not(:placeholder-shown)]:text-primary-200
                                        ">
                            Create your password
                        </label>
                    </div>
                    <div class="relative">
                        <button type="button" class="togglePasswordButton absolute top-7 end-4 -translate-y-1/2 transform focus:outline-none hover:text-primary-200 dark:hover:text-primary-200 aria-label='Toggle Password Visibility'">
                            <svg class="eyeIconOpen w-5 h-5  transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            <svg class="eyeIconClosed hidden w-5 h-5 transition duration-100 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#606060">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.736 5.943 5.522 3 10 3s8.264 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.736 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                <line x1="2" y1="2" x2="18" y2="18" stroke="#606060" stroke-width="2" />
                            </svg>
                        </button>
                        <input type="password" id="sign-up-confirm-password" name="confirm-password" class="passwordInput peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm  ml-3 mt-3" role="alert"></div>
                        <label for="sign-up-confirm-password" class="
                                            absolute
                                            top-0
                                            start-0
                                            p-4
                                            h-full
                                            text-sm
                                            truncate
                                            pointer-events-none
                                            transition
                                            ease-in-out
                                            duration-100
                                            border
                                            border-transparent
                                            origin-[0_0]
                                            dark:text-white
                                            peer-disabled:opacity-50
                                            peer-disabled:pointer-events-none
                                            peer-focus:scale-75
                                            peer-focus:translate-x-0.5
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-primary-200
                                            dark:peer-focus:text-primary-200
                                            peer-[:not(:placeholder-shown)]:scale-75
                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-primary-200
                                            dark:peer-[:not(:placeholder-shown)]:text-primary-200
                                        ">
                            Confirm your password
                        </label>
                    </div>
                    <div>
                        <input type="hidden" name="role" value="buyer">
                    </div>
                    <div class="flex justify-between">
                        <!-- <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a> -->
                    </div>
                    <button type="submit" class="w-full text-primary-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-500">Create your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 text-center">
                        Already have an account? <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-modal-hide="modal-sign-up" class=" font-bold text-primary-100 hover:underline dark:text-primary-100">Login</a>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginForm = document.querySelector('#authentication-modal form');
        const loginButton = loginForm.querySelector('button[type="submit"]');
        const errorContainer = loginForm.querySelector('.alert-danger');
        const usernameField = loginForm.querySelector('input[name="username"]');
        const passwordField = loginForm.querySelector('input[name="password"]');
        const loginCloseBtn = document.querySelector('#login-close-btn');
        const modal = document.querySelector('#authentication-modal');

        function clearError() {
            if (errorContainer) {
                errorContainer.classList.add('hidden');
                errorContainer.textContent = '';
            }
        }

        function clearForm() {
            clearError();
            usernameField.value = '';
            passwordField.value = '';
        }

        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();

            clearError();

            // Validate input fields
            const username = usernameField.value.trim();
            const password = passwordField.value.trim();

            if (!username || !password) {
                if (errorContainer) {
                    errorContainer.textContent = 'Please enter both username and password.';
                    errorContainer.classList.remove('hidden');
                }
                return;
            }

            // Proceed with form submission
            fetch('/login', {
                    method: 'POST',
                    body: new FormData(loginForm)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = data.redirect;
                    } else {
                        if (errorContainer) { // Check if the error container exists
                            errorContainer.textContent = data.message;
                            errorContainer.classList.remove('hidden');
                        } else {
                            console.error("Error container not found:", data.message); // Log if not found
                        }
                    }
                })
                .catch(error => {
                    console.error("Error occurred:", error);
                });
        });

        // Add event listener to clear error message and form fields when the modal close button is clicked
        if (loginCloseBtn) {
            loginCloseBtn.addEventListener('click', clearForm);
        }

        // Add event listeners to clear error message when input fields are modified
        [usernameField, passwordField].forEach(field => {
            field.addEventListener('input', clearError);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#modal-sign-up form');
        const inputs = form.querySelectorAll('input');

        function clearSignUpForm() {
            inputs.forEach(input => {
                input.value = "";
            });
        }

        // Function to validate input
        function validateInput(input, messageElement) {
            const inputValue = input.value.trim();

            // Example validation: Check if input is empty
            if (inputValue === '') {
                messageElement.textContent = 'This field is required.';
                messageElement.classList.remove('hidden');
            } else {
                messageElement.classList.add('hidden');

                // Validation based on input id
                switch (input.id) {
                    case 'sign-up-user-name':
                        // Validate first name and last name length
                        if (inputValue.length < 8 || inputValue.length > 24) {
                            messageElement.textContent = 'Must be between 8 and 24 characters.';
                            messageElement.classList.remove('hidden');
                        }
                        break;
                    case 'sign-up-email':
                        // Validate email format
                        if (!isValidEmail(inputValue)) {
                            messageElement.textContent = 'Enter a valid email address.';
                            messageElement.classList.remove('hidden');
                        }
                        break;
                    case 'sign-up-password':
                        // Validate password strength
                        if (!isValidPassword(inputValue)) {
                            messageElement.textContent = 'Password must be at least 8 characters long and contain at least one uppercase letter, one number, and one special character.';
                            messageElement.classList.remove('hidden');
                        }
                        break;
                    case 'sign-up-confirm-password':
                        // Validate confirm password matches password
                        const passwordInput = document.querySelector('#sign-up-password');
                        if (inputValue !== passwordInput.value.trim()) {
                            messageElement.textContent = 'Passwords do not match.';
                            messageElement.classList.remove('hidden');
                        }
                        break;
                    default:
                        break;
                }
            }
        }

        // Email validation helper function
        function isValidEmail(email) {
            // Basic email format validation using regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Password validation helper function
        function isValidPassword(password) {
            // Password must be at least 8 characters long and contain at least one uppercase letter, one number, and one special character
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return passwordRegex.test(password);
        }

        // Add event listeners to inputs
        inputs.forEach(input => {
            const messageElement = input.nextElementSibling;

            input.addEventListener('input', function() {
                validateInput(this, messageElement);
            });
        });

        // Form submission validation
        form.addEventListener('submit', function(event) {
            inputs.forEach(input => {
                const messageElement = input.nextElementSibling;
                validateInput(input, messageElement);
            });

            const hasErrors = form.querySelector('.alert.alert-danger:not(.hidden)');
            // if (hasErrors) {

            // }
            event.preventDefault();
        });
    });
</script>