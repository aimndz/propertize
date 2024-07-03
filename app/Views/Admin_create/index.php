<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Admin Sign up
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<!-- Main modal -->
<div id="admin-create" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!--Blue background -->
        <div class=" bg-primary-900"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg bg-accent-900 border border-accent-800 shadow-custom">
            <!-- Modal header -->
            <div class="flex flex-col px-4 md:px-5 md:pt-5 pt-4 rounded-t dark:border-gray-600">
                <div class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
                    <img src="../images/propertize-logo.png" class="h-8" alt="Propertize logo" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4 text-center">
                    Admin Sign Up
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/admin/create') ?>
                <div class="space-y-4 ">
                    <div>
                        <div class="relative">
                            <input type="text" id="sign-up-first-name" name='first_name' class="peer p-4 block w-full  border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                        <input type="text" id="sign-up-last-name" name='last_name' class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                        <input type="text" id="sign-up-user-name" name='username' class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                        <input type="email" id="sign-up-email" name='email' class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                        <input type="password" id="sign-up-password" name='password' class="passwordInput peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                        <input type="password" id="sign-up-confirm-password" name="confirm-password" class="passwordInput peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
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
                                            origin-[0_0] border-accent-800
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
                        <input type="hidden" name="role" value="admin">
                    </div>
                    <div class="flex justify-between">
                        <!-- <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a> -->
                    </div>
                    <button type="submit" class="w-full text-primary-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-500">Create your account</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection() ?>