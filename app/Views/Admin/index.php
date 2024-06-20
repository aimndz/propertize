<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Admin login
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Main modal -->
<div id="admin-login" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!--Blue background -->
        <div class=" bg-primary-900"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-accent-900 border border-accent-800">
            <!-- Modal header -->
            <div class="flex flex-col px-4 md:px-5 md:pt-5 pt-4 rounded-t dark:border-gray-600">
                <div class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/propertize-logo.png" class="h-8" alt="Propertize logo" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4 text-center">
                    Admin
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/admin-login') ?>
                <div class="relative">
                    <input type="username" id="hs-floating-input-passowrd" name="username" class="mb-4 peer p-4 block w-full border dark:border-accent-800 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:text-primary-100 dark:focus:ring-primary-100
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
                        Username
                    </label>
                </div>
                <div class="relative">
                    <input type="password" id="login-password" name="password" class="passwordInput peer p-4 block w-full border dark:border-accent-800 border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:text-primary-100 dark:focus:ring-primary-100
                                    focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2
                                    autofill:pt-6
                                    autofill:pb-2" required placeholder="********">
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
                <button type="submit" class="mt-10  py-4 w-full text-primary-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-500 rounded-lg text-sm px-5 text-center dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-500 font-bold">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection() ?>