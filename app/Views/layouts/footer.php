<?= $this->section('footer') ?>
    <footer class="container mx-auto mt-24 text-primary-100">
            <div class="flex items-center justify-center space-x-4 mb-10">
                <h1 class="font-bold bg-primary-900 text-4xl text-center">About us</h1>
            </div>
            
            <div class="flex justify-center mb-10">
                <div class="border-r border-r-accent-800 pr-5">
                    <h2 class="font-bold mb-3">Contacts</h2>
                    <ul>
                        <li>propertize@gmail.com</li>
                        <li>+63123456789</li>
                    </ul>
                </div>
                <div class="ml-5">
                    <h2 class="font-bold mb-3">Explore</h2>
                    <ul>
                        <li ><a href="#">Buy a Home</a></li>
                        <li><a href="#">Sell a Home</a></li>
                        <li><a href="#">Rent a Home</a></li>
                        <li><a href="#">Manage Rent</a></li>    
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-24">
                <div class="w-36 mb-3">
                    <a href="/"><img src="images/propertize-logo.png" alt="propertize logo" class="block"></a>
                </div>
                <p class="text-center">Copyright © 2024 Propertize Inc. All rights reserved.</p>
            </div>
    </footer>
<?= $this->endSection() ?>