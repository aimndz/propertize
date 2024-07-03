<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Sell
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main modal -->
<?php if ($showSellerModal) : ?>
    <div id="seller-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!--Dark background -->
            <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-primary-900 border border-accent-800">
                <!-- Modal header -->
                <div class="flex flex-col px-4 pt-4 md:px-4 md:pt-4 rounded-t ">
                    <div class="flex justify-center">
                        <button type="button" class="text-primary-100 absolute top-5 right-3 bg-transparent rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-accent-900 dark:hover:text-white" data-modal-hide="seller-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 text-center">
                    <h1 class="text-primary-100 font-bold text-xl mb-4 mt-5">Become a Seller?</h1>
                    <p class="text-primary-100 text-center mb-4">Are you interested in becoming a seller and having your own seller dashboard?</p>

                    <div class="flex justify-center gap-1">
                        <form action="/update-role" method="post" data-modal-hide="seller-modal">
                            <button id="becomeSellerBtn" type="submit" class="text-primary-900 bg-primary-500 hover:bg-accent-600 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm in!
                            </button>
                        </form>
                        <button data-modal-hide="seller-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-accent-700 rounded-lg border border-accent-800">No, thanks</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>

<section class="max-w-screen-xl mx-auto text-center mt-60 px-4 ">
    <div class="mb-5 md:mb-10">
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            Selling made <span class="text-primary-500 glow-text-yellow-lg">simple.</span>
        </p>
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            <span class="text-primary-500 glow-text-yellow-lg">Prioritize</span> your peace of mind.
        </p>
    </div>
    <?php if ($showSellerModal) : ?>
        <a href="#" data-modal-target="seller-modal" data-modal-toggle="seller-modal"><button class="block font-bold bg-primary-900 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap border text-primary-100">Sell Now</button></a>
        <!-- <a href="/list-property"><button class="block font-bold bg-primary-900 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap border text-primary-100">Sell Now</button></a> -->
    <?php else : ?>
        <a href="/list-property"><button class="block font-bold bg-primary-900 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap border text-primary-100">Sell Now</button></a>
    <?php endif; ?>
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