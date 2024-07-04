<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Seller information
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<!-- Main modal -->
<div id="mode_of_payment" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!--Blue background -->
        <div class=" bg-primary-900"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg bg-accent-900 border border-accent-800 shadow-custom p-10">
            <!-- Modal header -->
            <div class="flex flex-col px-4 md:px-5 md:pt-5 pt-4 rounded-t dark:border-gray-600">
                <div class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
                    <img src="../images/propertize-logo.png" class="h-8" alt="Propertize logo" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4 text-center">
                    Seller information
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/add-mode-of-payment') ?>
                <h2 class="text-white text-center font-bold">Mode of payment</h2>
                <div class="flex gap-5 p-4 border-b border-accent-800 justify-center">
                    <div class="flex items-center mb-4">
                        <input id="mop-gcash" type="radio" value="GCash" name="mode" class="w-4 h-4 bg-slate-950" data-target="gcash-account-num" checked>
                        <label for="mop-gcash" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">GCash</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="mop-maya" type="radio" value="Maya" name="mode" class="w-4 h-4 bg-slate-950" data-target="maya-account-num">
                        <label for="mop-maya" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maya</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="mop-cimb" type="radio" value="CIMB" name="mode" class="w-4 h-4 bg-slate-950" data-target="cimb-account-num">
                        <label for="mop-cimb" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CIMB</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="mop-unionbank" type="radio" value="Unionbank" name="mode" class="w-4 h-4 bg-slate-950" data-target="unionbank-account-num">
                        <label for="mop-unionbank" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unionbank</label>
                    </div>
                </div>

                <div class="mt-8 flex flex-col max-w-xl gap-5 mx-auto">
                    <input type="hidden" name="account_id" value="<?= session('user_id') ?>">
                    <input type="hidden" name="account_name" value="<?= session('user_first_name') ?> <?= session('user_last_name') ?>">
                    <div class="relative items-center">
                        <input type="text" value="<?= session('user_first_name') ?> <?= session('user_last_name') ?>" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label for="gcash-account-num" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Account Name
                        </label>
                    </div>
                    <div class="relative items-center" id="gcash-account-num-wrapper">
                        <input type="number" id="gcash-account-num" name="account_number" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label for="gcash-account-num" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            GCash Account Number
                        </label>
                    </div>
                    <div class="relative items-center" id="maya-account-num-wrapper" style="display: none;">
                        <input type="number" id="maya-account-num" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label for="maya-account-num" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Maya Account Number
                        </label>
                    </div>
                    <div class="relative items-center" id="cimb-account-num-wrapper" style="display: none;">
                        <input type="number" id="cimb-account-num" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label for="cimb-account-num" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            CIMB Account Number
                        </label>
                    </div>
                    <div class="relative items-center" id="unionbank-account-num-wrapper" style="display: none;">
                        <input type="number" id="unionbank-account-num" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label for="unionbank-account-num" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            UnionBank Account Number
                        </label>
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="rounded-lg bg-primary-500 hover:bg-primary-700 text-primary-900 text-center font-medium px-5 py-2.5">Add mode of payment</button>
                </div>
                <?= form_close() ?>
            </div>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const radioButtons = document.querySelectorAll('input[type="radio"][name="mode"]');
                    const accountInputs = document.querySelectorAll('[id$="-account-num-wrapper"]');

                    function toggleAccountInput(targetId) {
                        accountInputs.forEach(input => {
                            if (input.id === `${targetId}-wrapper`) {
                                input.style.display = 'block';
                            } else {
                                input.style.display = 'none';
                            }
                        });
                    }

                    radioButtons.forEach(radio => {
                        radio.addEventListener('change', function() {
                            if (this.checked) {
                                toggleAccountInput(this.dataset.target);
                            }
                        });
                    });

                    // Initialize based on default checked radio button
                    const checkedRadio = document.querySelector('input[type="radio"][name="mode"]:checked');
                    if (checkedRadio) {
                        toggleAccountInput(checkedRadio.dataset.target);
                    }
                });
            </script>

        </div>
    </div>
</div>
<?= $this->endSection() ?>