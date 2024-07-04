<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | Admin
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/admin-nav'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40px" height="40px" class="mx-auto">
                                        <circle cx="12" cy="8" r="4" fill="white" />
                                        <path d="M12 14c-4.418 0-8 2.686-8 6v2h16v-2c0-3.314-3.582-6-8-6z" fill="white" />
                                    </svg>
                                    <p class="mt-2">Users</p>
                                </div>
                            </li>
                            <li>
                                <div class=" p-3 rounded-lg cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" class="mx-auto">
                                        <path fill="white" stroke="white" stroke-width="2" d="M2,7 L20,7 M16,2 L21,7 L16,12 M22,17 L4,17 M8,12 L3,17 L8,22" />
                                    </svg>
                                    <p class="mt-2">Transactions</p>
                                </div>
                            </li>
                        </ul>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const closeSidebarButton = document.getElementById('close-sidebar-button');
                                const sidebar = document.getElementById('default-sidebar');
                                const sections = {
                                    'summary': document.getElementById('summary-content'),
                                    'properties': document.getElementById('properties-content'),
                                    'users': document.getElementById('users-content'),
                                    'transactions': document.getElementById('transactions-content')
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
                                        } else if (index === 2 && sectionId === 'users') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else if (index === 3 && sectionId === 'transactions') {
                                            itemDiv.classList.add('bg-accent-500');
                                        } else {
                                            itemDiv.classList.remove('bg-accent-500');
                                        }
                                    });
                                }

                                showSection('summary');

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
                                                showSection('users');
                                                break;
                                            case 3:
                                                showSection('transactions');
                                                break;
                                            default:
                                                break;
                                        }
                                    });
                                });

                            });
                        </script>

                    </aside>

                    <section id="summary-content" class="w-full flex flex-col gap-5">
                        <h1 class="text-primary-100 font-bold text-2xl text-left">Summary</h1>
                        <div class="flex gap-5">
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5 flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">
                                    <?php
                                    $activeListingsCount = 0;
                                    if (isset($allProperties) && !empty($allProperties)) {
                                        foreach ($allProperties as $property) {
                                            if ($property['status'] !== 'Sold') {
                                                $activeListingsCount++;
                                            }
                                        }
                                    }
                                    echo $activeListingsCount;
                                    ?></p>
                                <p class="text-xs uppercase tracking-wider">Total Active Listings</p>
                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5  flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">
                                    <?php
                                    $soldPropertiesCount = 0;
                                    if (isset($allProperties) && !empty($allProperties)) {
                                        foreach ($allProperties as $property) {
                                            if ($property['status'] === 'Sold') {
                                                $soldPropertiesCount++;
                                            }
                                        }
                                    }
                                    echo $soldPropertiesCount;
                                    ?></p>
                                <p class="text-xs  uppercase  tracking-wider">Properties Sold</p>
                            </div>
                            <div class="bg-accent-900 border border-accent-800 rounded-lg text-primary-100 p-5  flex-1  shadow-custom">
                                <p class="text-4xl font-bold mb-1">₱ 500,000.00</p>
                                <p class="text-xs  uppercase  tracking-wider ">Total Revenue</p>
                            </div>
                        </div>
                        <h1 class="text-primary-100 font-bold text-2xl text-left mt-10">Recent Lists</h1>
                        <div class=" overflow-y-auto rounded-lg border border-accent-800 ">
                            <div class="relative overflow-x-auto ">
                                <?php if (isset($pendingProperties) && !empty($pendingProperties)) : ?>
                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID</th>
                                                <th scope="col" class="px-6 py-3">Property Name</th>
                                                <th scope="col" class="px-6 py-3">Address</th>
                                                <th scope="col" class="px-6 py-3">Price</th>
                                                <th scope="col" class="px-6 py-3">Status</th>
                                                <th scope="col" class="px-6 py-3 text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Extract last 5 pending properties and reverse order
                                            $lastFiveProperties = array_slice($pendingProperties, -5, 5);
                                            $lastFiveProperties = array_reverse($lastFiveProperties);

                                            foreach ($lastFiveProperties as $property) : ?>
                                                <tr class="bg-primary-900 border-b border-b-accent-400">
                                                    <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                    <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                    <td class="px-6 py-4">
                                                        <?= $property['street'] . ', ' . $property['city'] . ', ' . $property['province'] ?>
                                                    </td>
                                                    <td class="px-6 py-4">₱ <?= number_format($property['price'], 2) ?></td>
                                                    <td class="px-6 py-4">
                                                        <div class="px-1 py-0.5 rounded-md text-center font-medium 
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
                                                    <td class="px-6 py-4 flex justify-end items-center gap-3">
                                                        <a href="#" class="underline">View</a>
                                                        <a href="#" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Accept</a>
                                                        <a href="#" class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">No pending properties.</p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </section>

                    <section id="properties-content" class="hidden text-white w-full pb-5">
                        <h1 class="text-primary-100 font-bold text-2xl text-left mb-5">Properties</h1>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800 ">
                            <div class="relative overflow-x-auto  ">
                                <?php if (isset($allProperties) && !empty($allProperties)) : ?>
                                    <?php
                                    // Sort properties array based on approval_status
                                    usort($allProperties, function ($a, $b) {
                                        if ($a['approval_status'] === 'pending' && $b['approval_status'] !== 'pending') {
                                            return -1; // $a (pending) comes before $b
                                        } elseif ($a['approval_status'] !== 'pending' && $b['approval_status'] === 'pending') {
                                            return 1; // $b (pending) comes before $a
                                        } else {
                                            return 0; // Maintain current order if both are pending or neither is pending
                                        }
                                    });
                                    ?>

                                    <table class="w-full text-sm text-left rtl:text-right text-primary-100 rounded-lg">
                                        <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID</th>
                                                <th scope="col" class="px-6 py-3">Property Name</th>
                                                <th scope="col" class="px-6 py-3">Address</th>
                                                <th scope="col" class="px-6 py-3">Price</th>
                                                <th scope="col" class="px-6 py-3">Status</th>
                                                <th scope="col" class="px-6 py-3 text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($allProperties as $property) : ?>
                                                <tr class="bg-primary-900 border-b border-b-accent-400">
                                                    <td class="px-6 py-4"><?= $property['property_id'] ?></td>
                                                    <td class="px-6 py-4"><?= $property['name'] ?></td>
                                                    <td class="px-6 py-4">
                                                        <?= $property['street'] . ', ' . $property['city'] . ', ' . $property['province'] ?>
                                                    </td>
                                                    <td class="px-6 py-4">₱ <?= number_format($property['price'], 2) ?></td>
                                                    <td class="px-6 py-4">
                                                        <div class="px-1 py-0.5 rounded-md text-center font-medium 
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
                                                    <td class="px-6 py-4 flex justify-end items-center gap-3">
                                                        <a href="#" class="underline">View</a>
                                                        <?php if ($property['approval_status'] === 'pending') : ?>
                                                            <!-- Accept form -->
                                                            <form action="/admin/accept" method="post" class="inline">
                                                                <input type="hidden" name="property_id" value="<?= $property['property_id'] ?>">
                                                                <button type="submit" class="bg-accent-900 border border-accent-800 rounded-lg px-5 py-2">Accept</button>
                                                            </form>
                                                            <!-- Reject form -->
                                                            <form action="/admin/reject" method="post" class="inline">
                                                                <input type="hidden" name="property_id" value="<?= $property['property_id'] ?>">
                                                                <button type="submit" class="bg-primary-900 border border-accent-300 text-accent-300 rounded-lg px-6 py-2">Reject</button>
                                                            </form>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p class="text-primary-100 p-5">No properties listed yet.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>

                    <section id="users-content" class="hidden text-white w-full">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Users</h1>
                            <?php if (session()->get('admin_role') === 'master admin') : ?>
                                <a href="/admin/create">
                                    <button type="submit" class="text-primary-900 font-bold rounded-lg px-10 py-3 bg-primary-500 hover:bg-accent-600 focus:shadow-outline focus:outline-none">
                                        Create
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800">
                            <div class="relative overflow-x-auto rounded-lg ">
                                <table class="w-full text-sm text-left rtl:text-right  text-primary-100 rounded-lg ">
                                    <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                First Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Last Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Username
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Role
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                            <tr class="bg-primary-900 border-b border-b-accent-400">
                                                <td class="px-6 py-4"><?= $user['id'] ?></td>
                                                <td class="px-6 py-4"><?= $user['first_name'] ?></td>
                                                <td class="px-6 py-4"><?= $user['last_name'] ?></td>
                                                <td class="px-6 py-4"><?= $user['username'] ?></td>
                                                <td class="px-6 py-4"><?= $user['email'] ?></td>
                                                <td class="px-6 py-4"><?= $user['role'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <section id="transactions-content" class="hidden text-white w-full">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-primary-100 font-bold text-2xl text-left">Transactions</h1>
                            <button type="submit" class=" text-primary-900 font-bold rounded-lg px-10 py-3 bg-primary-500 hover:bg-accent-600 focus:shadow-outline focus:outline-none">
                                Create
                            </button>
                        </div>
                        <div class="max-h-[78vh] overflow-y-auto rounded-lg border border-accent-800">
                            <div class="relative overflow-x-auto rounded-lg ">
                                <table class="w-full text-sm text-left rtl:text-right  text-primary-100 rounded-lg ">
                                    <thead class="text-xs text-primary-200 uppercase bg-accent-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                First Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Last Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Username
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Role
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                            <tr class="bg-primary-900 border-b border-b-accent-400">
                                                <td class="px-6 py-4"><?= $user['id'] ?></td>
                                                <td class="px-6 py-4"><?= $user['first_name'] ?></td>
                                                <td class="px-6 py-4"><?= $user['last_name'] ?></td>
                                                <td class="px-6 py-4"><?= $user['username'] ?></td>
                                                <td class="px-6 py-4"><?= $user['email'] ?></td>
                                                <td class="px-6 py-4"><?= $user['role'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

</main>




<?= $this->endSection() ?>