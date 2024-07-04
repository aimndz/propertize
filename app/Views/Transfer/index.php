<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Transfer
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
                    Transfer your property
                </h3>
                <p class="text-white/50 text-center mt-5 text-sm"><span class="font-bold ft">Note:</span> Please ensure all details are correct before transferring the property ownership.</p>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open('/perform-transfer/' . $propertyId) ?>
                <div class="mt-8 flex flex-col max-w-xl gap-5 mx-auto">
                    <div class="relative items-center">
                        <input type="text" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Account Name
                        </label>
                    </div>
                    <div class="relative items-center">
                        <input type="number" name="user_id" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            User ID
                        </label>
                    </div>
                    <div class="relative items-center">
                        <input type="number" name="annual_interest_rate" step="0.01" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Annual Interest Rate
                        </label>
                    </div>
                    <div class="relative items-center">
                        <input type="number" name="payment_duration" class="peer p-4 block w-full border border-accent-800 rounded-lg text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100 focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2" placeholder="********">
                        <div class="alert alert-danger text-accent-300 hidden text-sm ml-3 mt-3" role="alert"></div>
                        <label class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:scale-75 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-primary-200 dark:peer-focus:text-primary-200 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Payment Duration (Years)
                        </label>
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="rounded-lg bg-primary-500 hover:bg-primary-700 text-primary-900 text-center font-medium px-5 py-2.5">Transfer</button>
                </div>
                <?= form_close() ?>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>