<div class="text-primary-100 bg-accent-900 rounded-3xl p-6 md:p-5 lg:p-10 border border-accent-800 shadow-custom">
    <h2 class="font-bold text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-8"><?= $this->renderSection('card-title') ?></h2>
    <p class="mb-4 md:mb-8"><?= $this->renderSection('card-description') ?></p>
    <button class="block font-bold bg-accent-700 px-8 py-3 md:py-5 md:px-16 rounded-full mx-auto text-sm md:text-base hover:bg-accent-800 whitespace-nowrap"><?= $this->renderSection('card-buttonText') ?></button>
</div>