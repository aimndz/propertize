<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Sell
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main modal -->
<section class="max-w-screen-xl mx-auto text-center mt-60 px-4 ">
    <div class="mb-5 md:mb-10">
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            Stay <span class="text-primary-500 glow-text-yellow-lg">organize</span>, stay <span class="text-primary-500 glow-text-yellow-lg">profitable</span>.
        </p>
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl leading-none tracking-tight">
            <span class="text-primary-500 glow-text-yellow-lg">Manage</span> rents with <span class="text-primary-500 glow-text-yellow-lg">ease</span>.
        </p>
    </div>
    <a href="/list-rent" data-modal-target="seller-modal" data-modal-toggle="seller-modal"><button class="block font-bold bg-primary-900 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap border text-primary-100">Manage Rent</button></a>

</section>
<section class="max-w-screen-xl mx-auto px-4 mt-40">
    <div class="shadow-custom">
        <img src="images/manage-rent-img.png" alt="" class="w-full">
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
            <h2 class="font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8 glow-text-white-lg">Manage rent now</h2>
            <p class="mb-4 md:mb-8 max-w-xl">Easily manage your rents, handle tenant inquiries, and track payments – all in one platform. We provide the tools, you set the pace. Prioritize your independence and optimize your returns.</p>
            <a href="list-property"><button class="block font-bold bg-accent-700 px-8 pyf-3  md:py-5 md:px-16  rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap">Manage Rent</button></a>
        </div>
    </div>
</section>
<hr class="border-t-accent-800 mt-24">
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>