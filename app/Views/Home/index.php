<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Home
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="max-w-screen-xl mx-auto text-center mt-40 md:mt-60 px-4">

    <div class="mb-5 md:mb-10">
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl lg:text-7xl leading-none tracking-tight">
            Your <span class="text-primary-500 glow-text-yellow-lg">Property,</span>
        </p>
        <p class="font-bold bg-primary-900 text-primary-100 text-4xl md:text-6xl lg:text-7xl leading-none tracking-tight">
            We <span class="text-primary-500 glow-text-yellow-lg">Prioritize</span>
        </p>
    </div>
    <p class="text-primary-100 mx-auto max-w-xs sm:max-w-sm md:max-w-md lg:max-w-96 mb-10 md:mb-16 text-base md:text-lg ">
        Unlock the full potential of your investment by putting your property first.
    </p>
    <form id="filter-form" method="get" action="/buy">
        <div class="relative mx-auto max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl w-full md:w-1/2">
            <input type="text" name="city" placeholder="Enter a city..." class="block w-full px-4 py-3 md:py-5 pr-12 text-primary-100 bg-accent-900 border border-accent-800 rounded-2xl focus:outline-none focus:ring-primary-100 focus:border-primary-100" />
            <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-auto" onclick="handleSearchInput()">
                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>
    </form>
    <script>
        function handleSearchInput() {
            setTimeout(() => {
                document.getElementById('filter-form').submit();
            }, 1000);
        }
    </script>
</section>

<section class="mt-5 ">
    <div>
        <img src="images/hero-img-2.png" alt="" class="w-full">
    </div>
</section>

<section class="max-w-screen-xl mx-auto mt-10 md:mt-28 px-4 rounded-xl">
    <div class=" flex flex-row items-center justify-center  mb-10 md:mb-20">
        <div class="glow-box-yellow w-4 z-40 h-4 rounded-full bg-primary-500 hidden md:block"></div>
        <h1 class="font-bold bg-primary-900 text-primary-100 text-2xl md:text-4xl text-center px-4 py-2 rounded-md ">What Are You Looking For?</h1>
        <div class="glow-box-yellow w-4 z-40 h-4 rounded-full bg-primary-500 hidden md:block"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-5 md:gap-8">
        <div class="text-primary-100 bg-accent-900 rounded-3xl p-6 md:p-5 lg:p-10 border border-accent-800 shadow-custom">
            <h2 class="glow-text-white font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8">Buy</h2>
            <p class="mb-4 md:mb-8">Find your dream home with ease. Browse thousands of listings, filter by your preferences, and connect with expert agents to guide you through every step.</p>
            <button class="block font-bold bg-accent-700 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap"><a href="/buy">Buy a Home</a></button>
        </div>

        <div class="text-primary-100 bg-accent-900 rounded-3xl p-6 md:p-5 lg:p-10 border border-accent-800 shadow-custom">
            <h2 class="glow-text-white font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8">Sell</h2>
            <p class="mb-4 md:mb-8">Sell your property faster and smarter. Reach a vast audience of potential buyers, showcase your home with stunning visuals, and manage offers seamlessly.</p>
            <button class="block font-bold bg-accent-700 px-8 py-3  md:py-5 md:px-16  rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap"><a href="/sell">Sell a Home</a></button>
        </div>

        <div class="text-primary-100 bg-accent-900 rounded-3xl p-6 md:p-5 lg:p-10 border border-accent-800 shadow-custom">
            <h2 class="glow-text-white font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8">Rent</h2>
            <p class="mb-4 md:mb-8">Ready to start your rental journey? Find the perfect place to call home. Explore our listings and discover a rental property that matches your unique needs and lifestyle.</p>
            <button class="block font-bold bg-accent-700 px-8 py-3 md:py-5 md:px-16  rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap"><a href="/rent">Rent a Home</a></button>
        </div>
    </div>
</section>
<hr class="border-t-accent-800 mt-24">

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>