<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Dashboard
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
<main class="max-w-screen-xl mx-auto text-center px-5 mt-28">
    <section class=" bg-primary-900 ">
        <div class="mx-auto">
            <div class="relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row gap-5">
                    <aside id="default-sidebar" class="fixed top-20 z-40 w-full md:w-28 md:min-w-28 md:static overflow-y-auto bg-accent-700 md:bg-primary-900" aria-label="Sidebar">
                        <button id="close-sidebar-button" class="absolute top-4 right-4  text-primary-100 hover:text-gray-300 md:hidden">
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

                        <ul class="flex flex-col gap-5 text-primary-100 bg-accent-900 border border-accent-800 rounded-lg p-2 text-center text-xs h-[calc(100vh-9rem)]">
                            <li>
                                <div class="bg-accent-500 p-3 rounded-lg cursor-pointer">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" class="mx-auto">
                                            <path d="M3 3h18v18H3V3z" fill="none" />
                                            <path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-0.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 0.9-2 2zm16 14H5V5h14v14z" />
                                            <path d="M7 17h2V7H7v10zm4 0h2V11h-2v6zm4 0h2V9h-2v8z" />
                                        </svg>
                                    </div>
                                    <p class="mt-2">Summary</p>
                                </div>
                            </li>
                            <li>
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 495.398 495.398" xml:space="preserve" width="40px" height="40px" class="mx-auto">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path>
                                                        <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="mt-2">Properties</p>
                                </div>
                            </li>
                            <li>
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" class="mx-auto">
                                        <path fill="white" stroke="white" stroke-width="2" d="M2,7 L20,7 M16,2 L21,7 L16,12 M22,17 L4,17 M8,12 L3,17 L8,22" />
                                    </svg>
                                    <p class="mt-2">Transfer</p>
                                </div>
                            </li>
                            <li class="flex justify-center">
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <div class="flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" fill="#FFF" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M398.77,74.17H41.076C18.426,74.17,0,92.598,0,115.246v211.188c0,22.65,18.426,41.076,41.076,41.076H398.77    c22.65,0,41.076-18.426,41.076-41.076V115.246C439.846,92.597,421.419,74.17,398.77,74.17z M421.939,326.434    c0,12.776-10.394,23.169-23.169,23.169H41.076c-12.776,0-23.169-10.393-23.169-23.169V221.003h404.032V326.434z M421.939,136.68    H138.43c-4.945,0-8.953,4.009-8.953,8.953c0,4.945,4.009,8.953,8.953,8.953h283.509v48.51H17.907v-48.51h90.678    c4.945,0,8.953-4.009,8.953-8.953s-4.009-8.953-8.953-8.953H17.907v-21.433c0-12.775,10.393-23.169,23.169-23.169H398.77    c12.776,0,23.169,10.393,23.169,23.169V136.68z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M503.047,358.281c-4.945,0-8.953,4.009-8.953,8.953v26.608c0,14.38-11.699,26.08-26.08,26.08H116.158    c-14.388,0-26.093-11.699-26.093-26.08v-8.691c0-4.945-4.009-8.953-8.953-8.953c-4.945,0-8.953,4.009-8.953,8.953v8.691    c0,24.254,19.738,43.987,44,43.987h351.855c24.254,0,43.987-19.732,43.987-43.987v-26.608    C512,362.29,507.991,358.281,503.047,358.281z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M468.013,144.49h-10.527c-4.945,0-8.953,4.009-8.953,8.953s4.009,8.953,8.953,8.953h10.527    c14.38,0,26.08,11.705,26.08,26.093V337.39c0,4.945,4.009,8.953,8.953,8.953c4.945,0,8.953-4.009,8.953-8.953V188.489    C512,164.228,492.268,144.49,468.013,144.49z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M184.762,244.119H51.929c-4.945,0-8.953,4.009-8.953,8.953c0,4.945,4.009,8.953,8.953,8.953h132.833    c4.945,0,8.953-4.009,8.953-8.953C193.716,248.128,189.707,244.119,184.762,244.119z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M128.112,281.234H51.929c-4.945,0-8.953,4.009-8.953,8.953s4.009,8.953,8.953,8.953h76.183    c4.945,0,8.953-4.009,8.953-8.953S133.058,281.234,128.112,281.234z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="mt-2">Payment Tracking</p>
                                </div>
                            </li>
                            <?php $userRole = session('user_role');
                            if (stripos($userRole, 'landlord') !== false) : ?>
                                <li>
                                    <div class="p-3 rounded-lg cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40px" height="40px" class="mx-auto">
                                            <circle cx="12" cy="8" r="4" fill="white" />
                                            <path d="M12 14c-4.418 0-8 2.686-8 6v2h16v-2c0-3.314-3.582-6-8-6z" fill="white" />
                                        </svg>
                                        <p class="mt-2">Tenants</p>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const closeSidebarButton = document.getElementById('close-sidebar-button');
                                const sidebar = document.getElementById('default-sidebar');
                                const sections = {
                                    'summary': document.getElementById('summary-content'),
                                    'properties': document.getElementById('properties-content'),
                                    'transfer': document.getElementById('transfer-content'),
                                    'tenants': document.getElementById('tenants-content'),
                                    'payment-tracking': document.getElementById('payment-tracking-content'),
                                };

                                function showSection(sectionId) {
                                    for (let id in sections) {
                                        if (id === sectionId) {
                                            sections[id].classList.remove('hidden');
                                        } else {
                                            sections[id].classList.add('hidden');
                                        }
                                    }

                                    // Update sidebar items' background based on sectionId
                                    const sidebarItems = sidebar.querySelectorAll('ul li');
                                    sidebarItems.forEach((item, index) => {
                                        const itemDiv = item.querySelector('div');
                                        if (index === 0 && sectionId === 'summary') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 1 && sectionId === 'properties') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 2 && sectionId === 'transfer') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 3 && sectionId === 'payment-tracking') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 4 && sectionId === 'tenants') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else {
                                            itemDiv.classList.remove('bg-accent-500');
                                        }
                                    });
                                }

                                showSection('summary'); // Initial state: show 'Summary' content and highlight its sidebar item

                                const sidebarItems = sidebar.querySelectorAll('ul li');
                                sidebarItems.forEach((item, index) => {
                                    item.addEventListener('click', () => {
                                        switch (index) {
                                            case 0:
                                                showSection('summary');
                                                break;
                                            case 1:
                                                showSection('properties');
                                                break;
                                            case 2:
                                                showSection('transfer');
                                                break;
                                            case 3:
                                                showSection('payment-tracking');
                                                break;
                                            case 4:
                                                showSection('tenants');
                                                break;
                                            default:
                                                break;
                                        }
                                    });
                                });
                            });
                        </script>

                    </aside>

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


                    <section id="summary-content" class="w-full flex flex-col gap-5">
                        <h1 class="text-primary-100 font-bold text-2xl text-left">Summary</h1>
                        <div class="flex gap-5">
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5 flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">
                                    <?php
                                    $activeListingsCount = 0;
                                    if (isset($properties) && !empty($properties)) {
                                        foreach ($properties as $property) {
                                            if ($property['status'] !== 'sold' && $property['deleted_at'] === null) {
                                                $activeListingsCount++;
                                            }
                                        }
                                    }
                                    echo $activeListingsCount;
                                    ?>

                                <p class="text-xs uppercase tracking-wider">Total Active Listings</p>
                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5  flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">
                                    <?php
                                    $transferredPropertiesCount = 0;
                                    if (isset($properties) && !empty($properties)) {
                                        foreach ($properties as $property) {
                                            if ($property['transfer_to'] !== null) {
                                                $transferredPropertiesCount++;
                                            }
                                        }
                                    }
                                    echo $transferredPropertiesCount;
                                    ?>
                                </p>
                                <p class="text-xs uppercase tracking-wider">Properties Sold</p>

                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5 flex-1 shadow-custom">
                                <p class="text-4xl font-bold mb-1">
                                    ₱ <?php
                                        $receivedPaymentsTotalAmount = 0;
                                        if (isset($paymentTracking) && !empty($paymentTracking)) {
                                            foreach ($paymentTracking as $payment) {
                                                if ($payment['status'] === 'received') {
                                                    $receivedPaymentsTotalAmount += $payment['amount'];
                                                }
                                            }
                                        }

                                        echo number_format($receivedPaymentsTotalAmount, 2, '.', ',');
                                        ?>
                                </p>
                                <p class="text-xs uppercase tracking-wider">Total Revenue</p>
                            </div>

                        </div>
                        <h1 class="text-primary-100 font-bold text-2xl text-left">Latest</h1>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800">
                            <div class="relative overflow-x-auto">
                                <?php if (isset($properties) && !empty($properties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID</th>
                                                <th scope="col" class="px-6 py-3">Name</th>
                                                <th scope="col" class="px-6 py-3">Address</th>
                                                <th scope="col" class="px-6 py-3">Price</th>
                                                <th scope="col" class="px-6 py-3">Status</th>
                                                <th scope="col" class="px-6 py-3">Approval</th>
                                                <th scope="col" class="px-6 py-3 text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Initialize a counter for properties
                                            $propertiesCount = 0;

                                            foreach ($properties as $property) :
                                                // Check if the property is not deleted and transfer_to is null
                                                if ($property['deleted_at'] === null && empty($property['transfer_to'])) :
                                                    // Limit to displaying only the latest 5 properties based on property_id
                                                    if ($propertiesCount < 5) :
                                            ?>
                                                        <tr class="bg-primary-900 border-b border-b-accent-400">
                                                            <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                            <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                            <td class="px-6 py-4">
                                                                <?= $property['street'] . ', ' . $property['city'] . ', ' . $property['province'] ?>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">₱ <?= number_format($property['price'], 2) ?></td>
                                                            <td class="px-6 py-4">
                                                                <div class="px-1 py-0.5 rounded-md text-center font-medium whitespace-nowrap
                                            <?php echo match ($property['status']) {
                                                            'for sale' => 'bg-green-600',
                                                            'for rent' => 'bg-blue-500',
                                                            'sold' => 'bg-red-500',
                                                            default => '',
                                                        };
                                            ?>">
                                                                    <?= ucfirst($property['status']) ?>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4"><?= ucfirst($property['approval_status']) ?></td>
                                                            <td class="px-6 py-4 flex justify-end items-center gap-3">
                                                                <a href="#" class="underline property-preview-trigger" data-modal-target="property-preview" data-modal-toggle="property-preview" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">View</a>
                                                                <?php if (strtolower($property['status']) !== 'sold' && empty($property['transfer_to'])) : ?>
                                                                    <?php if (strtolower($property['status']) === 'for rent') : ?>
                                                                        <?php if (empty($property['tenant'])) : ?>
                                                                            <a href="/assign/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Assign</a>
                                                                        <?php endif; ?>
                                                                    <?php else : ?>
                                                                        <a href="/transfer/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Transfer</a>
                                                                    <?php endif; ?>
                                                                    <a href="/edit-sell/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
                                                                    <a href="<?= base_url('/delete/' . $property['property_id']) ?>" class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Delete</a>
                                                                <?php endif; ?>
                                                            </td>

                                                        </tr>
                                            <?php
                                                        // Increment the counter after displaying a property
                                                        $propertiesCount++;
                                                    endif;
                                                endif;
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">
                                        You haven't added any properties.
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                    </section>

                    <section id="properties-content" class="hidden text-white w-full pb-5">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Properties</h1>
                            <a href="/list-property" class="text-primary-900 font-bold rounded-lg px-10 py-3 bg-primary-500 hover:bg-accent-600 focus:shadow-outline focus:outline-none">
                                List property
                            </a>
                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800 ">
                            <div class="relative overflow-x-auto  ">
                                <?php if (isset($properties) && !empty($properties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID</th>
                                                <th scope="col" class="px-6 py-3">Name</th>
                                                <th scope="col" class="px-6 py-3">Address</th>
                                                <th scope="col" class="px-6 py-3">Price</th>
                                                <th scope="col" class="px-6 py-3">Status</th>
                                                <th scope="col" class="px-6 py-3">Approval</th>
                                                <th scope="col" class="px-6 py-3 text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($properties as $property) : ?>
                                                <?php if ($property['deleted_at'] === null) : ?>
                                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                                        <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                        <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                        <td class="px-6 py-4">
                                                            <?= $property['street'] . ', ' . $property['city'] . ', ' . $property['province'] ?>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">₱ <?= number_format($property['price'], 2) ?></td>
                                                        <td class="px-6 py-4">
                                                            <div class="px-1 py-0.5 rounded-md text-center font-medium whitespace-nowrap
                                                                <?php echo match ($property['status']) {
                                                                    'for sale' => 'bg-green-600',
                                                                    'for rent' => 'bg-blue-500',
                                                                    'sold' => 'bg-red-500',
                                                                    default => '',
                                                                };
                                                                ?>">
                                                                <?= ucfirst($property['status']) ?>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4"><?= ucfirst($property['approval_status']) ?></td>
                                                        <td class="px-6 py-4 flex justify-end items-center gap-3">
                                                            <a href="#" class="underline property-preview-trigger" data-modal-target="property-preview" data-modal-toggle="property-preview" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">View</a>
                                                            <?php if (strtolower($property['status']) !== 'sold' && empty($property['transfer_to'])) : ?>
                                                                <?php if (strtolower($property['status']) === 'for rent') : ?>
                                                                    <?php if (empty($property['tenant'])) : ?>
                                                                        <a href="/assign/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Assign</a>
                                                                    <?php endif; ?>
                                                                <?php else : ?>
                                                                    <a href="/transfer/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Transfer</a>
                                                                <?php endif; ?>
                                                                <a href="/edit-sell/<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
                                                                <a href="<?= base_url('/delete/' . $property['property_id']) ?>" class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Delete</a>
                                                            <?php endif; ?>
                                                        </td>


                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">
                                        You haven't added any properties.
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>

                    <section id="transfer-content" class="hidden text-white w-full pb-5">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Transfer</h1>

                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800 ">
                            <div class="relative overflow-x-auto  ">
                                <?php if (isset($properties) && !empty($properties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Property ID</th>
                                                <th scope="col" class="px-6 py-3">Property Name</th>
                                                <th scope="col" class="px-6 py-3">Tranferred to</th>
                                                <th scope="col" class="px-6 py-3">Tranferred date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($properties as $property) : ?>
                                                <?php if ($property['deleted_at'] === null && $property['transfer_to'] !== null) : ?>
                                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                                        <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                        <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                        <td class="px-6 py-4"><?= $property['transfer_to'] ?></td>
                                                        <td class="px-6 py-4"><?= date('Y-m-d', strtotime($property['transfer_date'])) ?></td>

                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">
                                        You haven't transfer any properties
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </section>

                    <section id="tenants-content" class="hidden text-white w-full pb-5">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Tenants</h1>
                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800 ">
                            <div class="relative overflow-x-auto  ">
                                <?php if (isset($properties) && !empty($properties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Tenant Id</th>
                                                <th scope="col" class="px-6 py-3">Name</th>
                                                <th scope="col" class="px-6 py-3">Rented Property Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($properties as $property) : ?>
                                                <?php if ($property['deleted_at'] === null && $property['transfer_to'] !== null) : ?>
                                                    <tr class="bg-primary-900 border-b border-b-accent-400">
                                                        <td class="px-6 py-4"><?= $property['tenant'] ?></td>
                                                        <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                        <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">
                                        You still don't have tenants.
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </section>

                    <section id="payment-tracking-content" class="hidden text-white w-full pb-5">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Payment Tracking</h1>
                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800">
                            <div class="relative overflow-x-auto">
                                <?php if (isset($properties) && !empty($properties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID</th>
                                                <th scope="col" class="px-6 py-3">Property Name</th>
                                                <th scope="col" class="px-6 py-3">Buyer ID</th>
                                                <th scope="col" class="px-6 py-3">Payment Month</th>
                                                <th scope="col" class="px-6 py-3">Amount</th>
                                                <th scope="col" class="px-6 py-3">Status</th>
                                                <th scope="col" class="px-6 py-3 text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($properties as $property) : ?>
                                                <?php
                                                // Initialize variables to find the closest pending payment to current date
                                                $closestPendingPayment = null;
                                                $currentDate = date('Y-m-d'); // Current date in YYYY-MM-DD format

                                                // Iterate through payment tracking records
                                                foreach ($paymentTracking as $payment) {
                                                    // Check if payment belongs to the current property, is pending, and is closest to current date
                                                    if ($payment['property_id'] == $property['property_id'] && $payment['status'] == 'pending') {
                                                        // Compare payment date to find the closest one to current date
                                                        if ($closestPendingPayment === null || abs(strtotime($payment['payment_month']) - strtotime($currentDate)) < abs(strtotime($closestPendingPayment['payment_month']) - strtotime($currentDate))) {
                                                            $closestPendingPayment = $payment;
                                                        }
                                                    }
                                                }
                                                ?>

                                                <?php if ($closestPendingPayment) : ?>
                                                    <tr>
                                                        <td class="px-6 py-4"><?= esc($closestPendingPayment['id']) ?></td>
                                                        <td class="px-6 py-4"><?= esc($property['name']) ?></td>
                                                        <td class="px-6 py-4"><?= esc($closestPendingPayment['buyer_id']) ?></td>
                                                        <td class="px-6 py-4"><?= esc($closestPendingPayment['payment_month']) ?></td>
                                                        <td class="px-6 py-4"><?= esc($closestPendingPayment['amount']) ?></td>
                                                        <td class="px-6 py-4"><?= esc($closestPendingPayment['status']) ?></td>
                                                        <td class="px-6 py-4 flex justify-end items-center gap-3">
                                                            <a href="/payment-complete/<?= htmlspecialchars($closestPendingPayment['id'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2" data-property-id="<?= htmlspecialchars($property['property_id'], ENT_QUOTES, 'UTF-8'); ?>">Payment Complete</a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">
                                        No properties found.
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                </div>
    </section>
    </div>
    </div>
    </div>
    </section>
</main>
<?= $this->endSection() ?>