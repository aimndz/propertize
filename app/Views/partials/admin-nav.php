<header class="text-primary-100 fixed top-0 left-0 w-full z-50 bg-primary-900 shadow-header-shadow ">
    <nav class="bg-primary-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../images/propertize-logo.png" class="h-8" alt="Propertize logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-accent-800" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="../images/default-profile.jpg" alt="user photo">
                </button>

                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none  rounded-lg shadow dark:bg-accent-800 dark:divide-accent-900" id="user-dropdown">
                    <?php if (session()->has('admin_first_name') && session()->has('admin_email')) :
                    ?>
                        <div class="px-4 py-3 border-b border-b-primary-200">
                            <span class="block text-sm dark:text-primary-100"><?= session('admin_first_name') ?> <?= session('admin_last_name') ?></span>
                            <span class="block text-sm truncate dark:text-primary-200"><?= session('admin_email') ?></span>
                        </div>
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

                <button data-collapse-toggle="default-sidebar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="default-sidebar" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

        </div>
    </nav>
</header>