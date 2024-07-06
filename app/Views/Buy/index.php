<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Buy
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Property Preview Modal -->
<div id="property-preview" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <!-- Dark background -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-primary-900 border border-accent-800">
            <!-- Modal header -->
            <div class="p-4 md:pt-8 md:p-5">
                <button type="button" class="text-primary-100 text-sm text-start" data-modal-hide="property-preview">
                    &lt; Back to search
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5 text-primary-100 modal-body">
                <div class="flex gap-3">


                    <div id="gallery" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 carousel-wrapper">
                            <!-- Item 1 -->

                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="w-full flex flex-col gap-3">
                        <div class="border p-3 border-accent-500 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-xs">Current Price</p>
                                    <p class="font-bold text-3xl price">Php </p>
                                </div>
                                <div class="flex gap-3">
                                    <div class="text-center bg-accent-900 p-3 rounded-lg border border-accent-500">
                                        <p class="font-bold beds text-3xl"></p>
                                        <p class="text-xs">Beds</p>
                                    </div>
                                    <div class="text-center bg-accent-900 p-3 rounded-lg border border-accent-500">
                                        <p class="font-bold baths text-3xl"></p>
                                        <p class="text-xs">Baths</p>
                                    </div>
                                    <div class="text-center bg-accent-900 p-3 rounded-lg border border-accent-500">
                                        <p class="font-bold sqft text-3xl"></p>
                                        <p class="text-xs">Sqft.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button class="bg-primary-500 text-primary-900 font-bold w-full p-3 rounded-lg" onclick="contactSeller()">Contact seller</button>
                            </div>
                        </div>
                        <div class="border p-3 border-accent-500 rounded-lg">
                            <h3 class="font-bold  mb-3">Additional Information</h3>
                            <p class="additional-info"></p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3 mt-3">
                    <div class="p-5 border border-accent-500 rounded-lg w-2/3">
                        <h1 class="font-bold text-2xl mb-10">Facts & Features</h1>
                        <div class="flex flex-col gap-10">
                            <div class="flex justify-between">
                                <div class="w-full">
                                    <h2 class="font-bold text-lg">Bedrooms and Bathrooms</h2>
                                    <ul class="list-disc pl-5">
                                        <li>Bedrooms: <span class="beds-main"></span></li>
                                        <li>Bathrooms: <span class="baths-main"></span></li>
                                    </ul>
                                </div>
                                <div class="w-full">
                                    <h2 class="font-bold text-lg">Parkings</h2>
                                    <ul class="list-disc pl-5">
                                        <li>Total spaces: <span class="parkings"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="w-full">
                                    <h2 class="font-bold text-lg">Lot size</h2>
                                    <ul class="list-disc pl-5">
                                        <li>Total lot size: <span class="lot-size"></span> sqft</li>
                                        <li>Floor area: <span class="floor-area"></span> sqft</li>
                                    </ul>
                                </div>
                                <div class="w-full">
                                    <h2 class="font-bold text-lg">Details</h2>
                                    <ul class="list-disc pl-5">
                                        <li>Property name: <span class="property-name"></span></li>
                                        <li>Property type: <span class="property-type"></span></li>
                                        <li>Year built: <span class="year-built"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="w-full">
                                    <h2 class="font-bold text-lg">Location</h2>
                                    <ul class="list-disc pl-5">
                                        <li class="location"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 border border-accent-500 rounded-lg w-1/3">
                        <h1 class="font-bold text-2xl mb-5">Seller's Information</h1>
                        <div class="flex flex-col gap-5">
                            <h2 class="font-bold text-lg">Name: <span class="font-normal text-base owner-name"></span></h2>
                            <h2 class="font-bold text-lg">Email: <span class="font-normal text-base owner-email"></span></h2>
                            <!-- <h2 class="font-bold text-lg">Contact #: <span class="font-normal text-base"></span></h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="mx-auto">
    <h1 class="font-bold mt-28 text-2xl text-primary-100 px-4 text-center mb-10">Buy and Rent a Property</h1>
    <hr class="border-t-accent-800 mt-4">
    <section class=" bg-primary-900 p-3 sm:p-5">
        <form id="filter-form" method="get">
            <div class="flex flex-col md:flex-row justify-center items-center mb-5 space-y-3 md:space-y-0 md:space-x-4 p-4 bg-primary-900">
                <div>
                    <p class="text-primary-100"><?= $resultsCount ?> results</p>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="flex flex-col md:flex-row items-center w-full space-y-3 md:space-y-0 md:space-x-4">
                        <div class="relative w-full">
                            <label for="simple-search" class="sr-only">Enter a City...</label>
                            <div class="absolute inset-y-0 left-0 flex items-center p-4 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-primary-900 border border-accent-800 text-primary-100 text-sm rounded-lg block w-full pl-10 p-3" placeholder="Enter a City..." name="city" value="<?= $city ?? '' ?>" oninput="handleSearchInput()">
                        </div>
                        <div>
                            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownDefaultRadio" class="text-primary-100 bg-primary-900 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-accent-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center border border-accent-800" type="button">
                                Sort
                                <svg class="w-2 h-2 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-accent-800 divide-y divide-accent-700 rounded-lg shadow">
                                <ul class="p-3 space-y-3 text-sm text-primary-100 bg-primary-800 rounded-lg" aria-labelledby="dropdownRadioButton">
                                    <li>
                                        <div class="flex items-center">
                                            <input id="default-radio-3" type="radio" value="newest" name="sort_by" class="w-4 h-4 bg-primary-800 border-primary-600" <?php if (empty($sortBy) || $sortBy === 'newest') echo 'checked'; ?>>
                                            <label for="default-radio-3" class="ms-2 text-sm font-medium text-primary-100">Newest</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="price_high_to_low" name="sort_by" class="w-4 h-4 bg-primary-800 border-primary-600" <?php if ($sortBy === 'price_high_to_low') echo 'checked'; ?>>
                                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-primary-100">Price (High to Low)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <input id="default-radio-2" type="radio" value="price_low_to_high" name="sort_by" class="w-4 h-4 bg-primary-800 border-primary-600" <?php if ($sortBy === 'price_low_to_high') echo 'checked'; ?>>
                                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-primary-100">Price (Low to High)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 ">
                <aside id="default-sidebar" class="fixed px-4 top-20 z-40 w-full md:w-1/5 h-screen md:h-[calc(100vh-15rem)] md:min-w-72 md:sticky md:top-16 overflow-y-auto bg-accent-700 md:bg-primary-900" aria-label="Sidebar">
                    <button id="close-sidebar-button" class="absolute top-4 right-4 text-primary-100 hover:text-gray-300 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const closeSidebarButton = document.getElementById('close-sidebar-button');
                            const sidebar = document.getElementById('default-sidebar');
                            const accordionButtons = sidebar.querySelectorAll('[data-accordion-target]');

                            function handleResize() {
                                if (window.innerWidth >= 768) {
                                    sidebar.classList.remove('-translate-x-full');
                                }
                            }
                            closeSidebarButton.addEventListener('click', () => {
                                sidebar.classList.toggle('-translate-x-full');
                                accordionButtons.forEach(button => {
                                    const target = document.querySelector(button.getAttribute('data-accordion-target'));
                                    if (target) {
                                        target.classList.add('hidden');
                                        button.setAttribute('aria-expanded', 'false');
                                    }
                                });
                            });
                            // Initial check and event listener for resizing
                            handleResize();
                            window.addEventListener('resize', handleResize);
                        });
                    </script>
                    <div id="accordion-open" data-accordion="open">
                        <h1 class="text-primary-100 font-bold pl-5 mt-4 text-center mb-8 md:hidden">
                            Filter</h1>
                        <h2 id="accordion-open-heading-1">
                            <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                                <span class="flex items-center">Status</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                            <div class="p-4 border-b border-accent-800">
                                <div class="flex items-center mb-4">
                                    <input id="property-for-sale" type="radio" value="for sale" name="property_status" class="w-4 h-4 bg-slate-950" <?php if ($propertyStatus === 'for sale') echo 'checked'; ?>>
                                    <label for="property-for-sale" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">For sale</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="property-for-rent" type="radio" value="for rent" name="property_status" class="w-4 h-4 bg-slate-950" <?php if ($propertyStatus === 'for rent') echo 'checked'; ?>>
                                    <label for="property-for-rent" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">For rent</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="property-sold" type="radio" value="sold" name="property_status" class="w-4 h-4 bg-slate-950" <?php if ($propertyStatus === 'sold') echo 'checked'; ?>>
                                    <label for="property-sold" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sold</label>
                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-open-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                                <span class="flex items-center">Price</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-2" class="hidden " aria-labelledby="accordion-open-heading-2">
                            <div class="p-4 border-b border-accent-800 flex gap-3 items-center">
                                <div class="relative w-full">
                                    <input type="number" id="filter-min-price" name="filter-min-price" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********" value="<?= $minPrice ?? '' ?>" oninput="handleSearchInput()">
                                    <label for="filter-min-price" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                        Min
                                    </label>
                                </div>
                                <div>
                                    <p class="text-primary-100">to</p>
                                </div>
                                <div class="relative w-full">
                                    <input type="number" id="filter-max-price" name="filter-max-price" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********" value="<?= $maxPrice ?? '' ?>" oninput="handleSearchInput()">
                                    <label for="filter-max-price" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                        Max
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-open-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                                <span class="flex items-center">Beds and Baths</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                            <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                                <div class="relative w-full">
                                    <input type="number" id="filter-beds" name="filter-beds" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********" value="<?= $minBeds ?? '' ?>" oninput="handleSearchInput()">
                                    <label for="filter-beds" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                        Minimum beds
                                    </label>
                                </div>
                                <div class="relative w-full">
                                    <input type="number" id="filter-bathrooms" name="filter-bathrooms" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********" value="<?= $minBathrooms ?? '' ?>" oninput="handleSearchInput()">
                                    <label for="filter-bathrooms" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                        Minimum bathrooms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-open-heading-4">
                            <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                                <span class="flex items-center">Property Type</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                            <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                                <div class="flex flex-col justify-start w-full">
                                    <div class="flex items-center mb-4">
                                        <input id="filter-select-all" type="checkbox" name="property_types[]" value="all" <?= isset($propertyTypes) && in_array('all', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-select-all" class="ms-2 text-sm font-medium text-primary-100">
                                            Select all
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="filter-houses" type="checkbox" name="property_types[]" value="houses" <?= isset($propertyTypes) && in_array('houses', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-houses" class="ms-2 text-sm font-medium text-primary-100">
                                            Houses
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="filter-townhomes" type="checkbox" name="property_types[]" value="townhomes" <?= isset($propertyTypes) && in_array('townhomes', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-townhomes" class="ms-2 text-sm font-medium text-primary-100">
                                            Townhomes
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="filter-multi-family" type="checkbox" name="property_types[]" value="multi-family" <?= isset($propertyTypes) && in_array('multi-family', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-multi-family" class="ms-2 text-sm font-medium text-primary-100">
                                            Multi-family
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="filter-condos" type="checkbox" name="property_types[]" value="condos" <?= isset($propertyTypes) && in_array('condos', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-condos" class="ms-2 text-sm font-medium text-primary-100">
                                            Condos
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="filter-apartments" type="checkbox" name="property_types[]" value="apartments" <?= isset($propertyTypes) && in_array('apartments', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-apartments" class="ms-2 text-sm font-medium text-primary-100">
                                            Apartments
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-manufactured" type="checkbox" name="property_types[]" value="manufactured" <?= isset($propertyTypes) && in_array('manufactured', $propertyTypes) ? 'checked' : '' ?> class="w-4 h-4 border-gray-300 rounded" onclick="handleCheckboxClick()">
                                        <label for="filter-manufactured" class="ms-2 text-sm font-medium text-primary-100">
                                            Manufactured
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-open-heading-5">
                            <button type="button" class="flex items-center justify-between w-full p-4 font-medium rtl:text-right bg-accent-700 md:bg-primary-900 text-primary-100 border-b border-b-accent-800 border-primary-800 gap-3" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
                                <span class="flex items-center">More</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
                            <div class="p-4 border-b border-accent-800 flex flex-col gap-3">
                                <div>
                                    <p class="text-primary-100 mb-2">Parkings</p>
                                    <div class=" flex gap-3 items-center">
                                        <div class="relative w-full">
                                            <input type="number" id="filter-min-parkings" name="filter-min-parkings" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $minParkings ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-min-parkings" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Min
                                            </label>
                                        </div>
                                        <div>
                                            <p class="text-primary-100">to</p>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="number" id="filter-max-parkings" name="filter-max-parkings" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $maxParkings ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-max-parkings" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Max
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-primary-100 mb-2">Floor Area</p>
                                    <div class=" flex gap-3 items-center">
                                        <div class="relative w-full">
                                            <input type="number" id="filter-min-floor-area" name="filter-min-floor-area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $minFloorArea ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-min-floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Min
                                            </label>
                                        </div>
                                        <div>
                                            <p class="text-primary-100">to</p>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="number" id="filter-max-floor-area" name="filter-max-floor-area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $maxFloorArea ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-max-floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Max
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-primary-100 mb-2">Lot size</p>
                                    <div class=" flex gap-3 items-center">
                                        <div class="relative w-full">
                                            <input type="number" id="filter-min-lot-size" name="filter-min-lot-size" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $minLotSize ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-min-lot-size" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Min
                                            </label>
                                        </div>
                                        <div>
                                            <p class="text-primary-100">to</p>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="number" id="filter-max-lot-size" name="filter-max-lot-size" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $maxLotSize ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-max-lot-size" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Max
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-primary-100 mb-2">Year built</p>
                                    <div class=" flex gap-3 items-center">
                                        <div class="relative w-full">
                                            <input type="number" id="filter-min-year-built" name="filter-min-year-built" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $minYearBuilt ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-min-year-built" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Min
                                            </label>
                                        </div>
                                        <div>
                                            <p class="text-primary-100">to</p>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="number" id="filter-max-year-built" name="filter-max-year-built" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                            focus:pt-6
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-6
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-6
                                                            autofill:pb-2" required value="<?= $maxYearBuilt ?? '' ?>" oninput="handleSearchInput()" placeholder="********">
                                            <label for="filter-max-year-built" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:scale-75 peer-focus:translate-x-0.5
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                            peer-[:not(:placeholder-shown)]:scale-75
                                                            peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                                                Max
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <script>
                    function handleSearchInput() {
                        setTimeout(() => {
                            document.getElementById('filter-form').submit();
                        }, 1000);
                    }

                    function handleCheckboxClick() {
                        clearTimeout();
                        setTimeout(() => {
                            document.getElementById('filter-form').submit();
                        }, 1000);
                    }

                    document.addEventListener('DOMContentLoaded', () => {
                        // For sorting change
                        const sortRadios = document.querySelectorAll('input[name="sort_by"]');
                        sortRadios.forEach(radio => {
                            radio.addEventListener('change', () => {
                                document.getElementById('filter-form').submit();
                            });
                        });

                        // For property status change
                        const sortStatus = document.querySelectorAll('input[name="property_status"]');
                        sortStatus.forEach(radio => {
                            radio.addEventListener('change', () => {
                                document.getElementById('filter-form').submit();
                            });
                        });

                        handlePriceInput();
                    });
                </script>
                <div class="w-full md:w-4/5">
                    <?php if (empty($properties)) : ?>
                        <div class="col-span-1 custom-sm:col-span-2 custom-md:col-span-3 custom-lg:col-span-4 flex justify-center items-center">
                            <p class="text-xl md:text-2xl font-bold tracking-wide text-gray-900 dark:text-white text-center mt-20">Oops! Looks like there are no properties available.</p>
                        </div>
                    <?php else : ?>
                        <div class="grid grid-cols-1 custom-sm:grid-cols-2 custom-md:grid-cols-3 custom-lg:grid-cols-4 gap-4 min-h-[350px]">
                            <?php foreach ($properties as $property) : ?>
                                <div class="border bg-accent-900 border-accent-800 rounded-lg shadow flex flex-col">
                                    <a href="#" class="property-preview-trigger" data-modal-target="property-preview" data-modal-toggle="property-preview" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">
                                        <div class="block aspect-[4/3]">
                                            <?php if (isset($property['image']['image']) && !empty($property['image']['image'])) : ?>
                                                <img class="rounded-t-lg w-full h-full object-cover" src="data:image/jpeg;base64,<?= $property['image']['image'] ?>" alt="property-image" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-5 flex-grow flex flex-col justify-between">
                                            <div>
                                                <a href="#">
                                                    <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-wide text-gray-900 dark:text-white trackin">₱<?= number_format($property['price'], 2) ?></h5>
                                                </a>
                                                <p class="mb-3 text-sm md:text-base font-normal text-primary-100">
                                                    <span><strong><?= $property['no_of_beds'] ?></strong></span> beds |
                                                    <span><strong><?= $property['no_of_bathrooms'] ?></strong></span> baths |
                                                    <span><strong><?= $property['floor_area'] ?></strong></span> sqft
                                                </p>
                                                <p class="mb-3 text-sm md:text-base font-normal text-primary-100"><?= esc($property['street']) ?>, <?= esc($property['city']) ?>, <?= esc($property['province']) ?> <?= esc($property['postal_code']) ?></p>
                                            </div>
                                            <p class="text-sm md:text-base font-normal text-primary-500"><?= esc($property['name']) ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const propertyPreviewTriggers = document.querySelectorAll('.property-preview-trigger');
                                propertyPreviewTriggers.forEach(trigger => {
                                    trigger.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        const propertyId = this.getAttribute('data-property-id');
                                        fetch(`<?= base_url('buy/get_property_details') ?>/${propertyId}`)
                                            .then(response => response.json())
                                            .then(data => {
                                                updateModalContent(data);
                                            })
                                            .catch(error => {
                                                console.error('Error fetching property details:', error);
                                            });
                                    });
                                });

                                function updateModalContent(data) {
                                    document.querySelector('.modal-body .price').innerText = `₱ ${parseFloat(data.price).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
                                    document.querySelector('.modal-body .beds').innerText = data.no_of_beds;
                                    document.querySelector('.modal-body .beds-main').innerText = data.no_of_beds;
                                    document.querySelector('.modal-body .baths-main').innerText = data.no_of_bathrooms;
                                    document.querySelector('.modal-body .baths').innerText = data.no_of_bathrooms;
                                    document.querySelector('.modal-body .parkings').innerText = data.no_of_parkings;
                                    document.querySelector('.modal-body .lot-size').innerText = data.lot_size;
                                    document.querySelector('.modal-body .sqft').innerText = data.floor_area;
                                    document.querySelector('.modal-body .floor-area').innerText = data.floor_area;
                                    document.querySelector('.modal-body .additional-info').innerText = data.description;
                                    document.querySelector('.modal-body .property-name').innerText = data.name;
                                    document.querySelector('.modal-body .property-type').innerText = data.type;
                                    document.querySelector('.modal-body .year-built').innerText = data.year_built;
                                    document.querySelector('.modal-body .location').innerText = `${data.street}, ${data.village}, ${data.city}, ${data.province}, ${data.postal_code}, ${data.country}`;
                                    document.querySelector('.modal-body .owner-name').innerText = data.owner_name;
                                    document.querySelector('.modal-body .owner-email').innerText = data.owner_email;
                                    // Update property images in the carousel
                                    const galleryContainer = document.getElementById('gallery');
                                    // Clear existing carousel items
                                    //galleryContainer.innerHTML = '';
                                    // Add new carousel items for each image
                                    if (data.images && data.images.length > 0) {
                                        const carouselWrapper = document.querySelector('.carousel-wrapper');
                                        carouselWrapper.innerHTML = "";
                                        data.images.forEach((image, index) => {
                                            const carouselItem = document.createElement('div');
                                            carouselItem.classList.add('duration-700', 'ease-in-out');
                                            const imgElement = document.createElement('img');
                                            imgElement.classList.add('absolute', 'block', 'max-w-full', 'h-auto', '-translate-x-1/2', '-translate-y-1/2', 'top-1/2', 'left-1/2', 'object-cover');
                                            if (index === 1) {
                                                carouselItem.setAttribute('data-carousel-item', 'active');
                                            } else {
                                                carouselItem.setAttribute('data-carousel-item', '');
                                            }
                                            imgElement.src = `data:image/jpeg;base64,${image.image}`;
                                            carouselItem.appendChild(imgElement);
                                            carouselWrapper.appendChild(carouselItem);
                                        });
                                    } else {
                                        const noImageMessage = document.createElement('div');
                                        noImageMessage.innerText = 'No images available';
                                        carouselWrapper.appendChild(noImageMessage);
                                    }
                                    // Get references to elements
                                    const carouselWrapper = document.querySelector('[data-carousel="slide"]');
                                    const carouselItems = carouselWrapper.querySelectorAll('[data-carousel-item]');
                                    const prevButton = carouselWrapper.querySelector('[data-carousel-prev]');
                                    const nextButton = carouselWrapper.querySelector('[data-carousel-next]');
                                    let currentItemIndex = 0; // Start with the first item active
                                    // Function to update carousel state
                                    function updateCarousel() {
                                        carouselItems.forEach((item, index) => {
                                            if (index === currentItemIndex) {
                                                item.classList.remove('hidden');
                                                item.setAttribute('data-carousel-item', 'active');
                                            } else {
                                                item.classList.add('hidden');
                                                item.setAttribute('data-carousel-item', '');
                                            }
                                        });
                                    }
                                    // Event listeners for buttons
                                    prevButton.addEventListener('click', () => {
                                        currentItemIndex = (currentItemIndex - 1 + carouselItems.length) % carouselItems.length;
                                        updateCarousel();
                                    });
                                    nextButton.addEventListener('click', () => {
                                        currentItemIndex = (currentItemIndex + 1) % carouselItems.length;
                                        updateCarousel();
                                    });
                                    // Initial setup: ensure only the first item is visible
                                    updateCarousel();
                                }
                            });

                            function contactSeller() {
                                const ownerEmailElement = document.querySelector('.modal-body .owner-email');
                                const ownerEmail = ownerEmailElement ? ownerEmailElement.innerText : 'default@example.com'; // Fallback to a default email if not found
                                window.location.href = 'mailto:' + ownerEmail;
                            }
                        </script>
                        </div>
                </div>
            </div>
        </form>
    </section>

</section>
<hr class="border-t-accent-800 mt-24">



<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>