<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>
Propertize | List Property
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= $this->include('partials/navbar'); ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= form_open('/update-sell/' . $property['property_id'], 'method="post" enctype="multipart/form-data"'); ?>
<section class="max-w-screen-xl mx-auto px-4">
    <h1 class="font-bold mt-28 text-2xl text-primary-100">Update a Property</h1>
    <hr class="border-t-accent-800 mt-4">
    <div>
        <h2 class="text-primary-100 font-bold text-xl mt-10 mb-4">Address</h2>
        <div class="flex flex-col gap-5 md:gap-0">
            <div class="flex flex-wrap gap-5 md:gap-3">
                <div class="relative flex-1 min-w-[280px]">
                    <input type="text" id="street" name="street" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6 focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['street'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder=" ********">
                    <label for="street" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        Street Address
                    </label>
                </div>
                <div class="relative flex-1 min-w-[280px]">
                    <input type="text" id="village" name="village" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['street'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                    <label for="village" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        Subdivision/Village/Barangay
                    </label>
                </div>
                <div class="relative flex-1 min-w-[280px]">
                    <input type="text" id="city" name="city" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['city'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                    <label for="city" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        City
                    </label>
                </div>
                <div class="relative flex-1 min-w-[280px]">
                    <input type="text" id="province" name="province" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['province'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                    <label for="province" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        State/Province/Region
                    </label>
                </div>
                <div class="relative flex-1 min-w-[280px]">
                    <input type="number" id="postal-code" name="postal_code" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['postal_code'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                    <label for="postal-code" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        Postal Code
                    </label>
                </div>
                <div class="relative flex-1 min-w-[280px]">
                    <input type="text" id="country" name="country" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['country'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                    <label for="country" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        Country
                    </label>
                </div>
                <div class="relative w-full min-w-[280px]">
                    <input type="text" id="landmark" value="<?= htmlspecialchars($property['landmark'], ENT_QUOTES, 'UTF-8'); ?>" name="landmark" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 dark:focus:ring-primary-100
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required placeholder="********">
                    <label for="landmark" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                        Landmark
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>

<section class="max-w-screen-xl mx-auto px-4">
    <h1 class="font-bold mt-10 text-2xl text-primary-100 mb-4">Photos</h1>
    <!-- component -->
    <div>
        <main class="mx-auto">
            <!-- file upload modal -->
            <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-accent-900 shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                <!-- overlay -->
                <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                    <i>
                        <svg class="fill-current w-12 h-12 mb-3 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                        </svg>
                    </i>
                    <p class="text-lg text-white">Drop files to upload</p>
                </div>

                <!-- scroll area -->
                <section class="h-full overflow-auto p-8 w-full flex flex-col">
                    <header class="border-dashed border-2 border-accent-800 py-12 flex flex-col justify-center items-center">
                        <p class="mb-3 font-semibold text-primary-100 flex flex-wrap justify-center">
                            <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                        </p>
                        <input id="hidden-input" type="file" name="files[]" multiple class="hidden" />
                        <button type="button" id="button" class="mt-2 rounded-sm px-3 py-1 bg-primary-500 hover:bg-accent-600 focus:shadow-outline focus:outline-none">
                            Add a new photo
                        </button>
                    </header>
                    <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-primary-100 text-center">
                        Property photos
                    </h1>
                    <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                        <?php if (empty($property['images'])) : ?>
                            <li id="empty" class="w-full text-center flex flex-col justify-center items-center">
                                <span class="text-small text-primary-100">No files selected</span>
                            </li>
                        <?php else : ?>
                            <?php foreach ($property['images'] as $image) : ?>
                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                    <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                        <img class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" src="data:image/jpeg;base64,<?= $image['image']; ?>" />
                                        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">

                                            <div class="flex">
                                                <span class="p-1">
                                                    <i>
                                                        <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                        </svg>
                                                    </i>
                                                </span>
                                                <button type="button" class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </section>
                                    </article>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </section>
            </article>
        </main>
    </div>

    <!-- using two similar templates for simplicity in js code -->
    <template id="file-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
            <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                    <h1 class="flex-1 group-hover:text-blue-800"></h1>
                    <div class="flex">
                        <span class="p-1 text-blue-800">
                            <i>
                                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                </svg>
                            </i>
                        </span>
                        <p class="p-1 size text-xs text-gray-700"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </article>
        </li>
    </template>

    <template id="image-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
            <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                    <h1 class="flex-1"></h1>
                    <div class="flex">
                        <span class="p-1">
                            <i>
                                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                </svg>
                            </i>
                        </span>

                        <p class="p-1 size text-xs"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </article>
        </li>
    </template>

    <script>
        const fileTempl = document.getElementById("file-template"),
            imageTempl = document.getElementById("image-template"),
            empty = document.getElementById("empty");

        // use to store pre selected files
        let FILES = {};

        // check if file is of type image and prepend the initialied
        // template to the target element
        function addFile(target, file) {
            const isImage = file.type.match("image.*"),
                objectURL = URL.createObjectURL(file);

            const clone = isImage ?
                imageTempl.content.cloneNode(true) :
                fileTempl.content.cloneNode(true);

            clone.querySelector("h1").textContent = file.name;
            const liElement = clone.querySelector("li");
            liElement.id = objectURL;
            clone.querySelector(".delete").dataset.target = objectURL;
            clone.querySelector(".size").textContent =
                file.size > 1024 ?
                file.size > 1048576 ?
                Math.round(file.size / 1048576) + "mb" :
                Math.round(file.size / 1024) + "kb" :
                file.size + "b";

            isImage &&
                Object.assign(clone.querySelector("img"), {
                    src: objectURL,
                    alt: file.name
                });

            empty.classList.add("hidden");
            target.prepend(clone);

            FILES[objectURL] = file;
        }


        const gallery = document.getElementById("gallery"),
            overlay = document.getElementById("overlay");

        // click the hidden input of type file if the visible button is clicked
        // and capture the selected files
        const hidden = document.getElementById("hidden-input");
        document.getElementById("button").onclick = () => hidden.click();
        hidden.onchange = (e) => {
            for (const file of e.target.files) {
                addFile(gallery, file);
            }
        };

        // use to check if a file is being dragged
        const hasFiles = ({
                dataTransfer: {
                    types = []
                }
            }) =>
            types.indexOf("Files") > -1;

        // use to drag dragenter and dragleave events.
        // this is to know if the outermost parent is dragged over
        // without issues due to drag events on its children
        let counter = 0;

        // reset counter and append file to gallery when file is dropped
        function dropHandler(ev) {
            ev.preventDefault();
            for (const file of ev.dataTransfer.files) {
                addFile(gallery, file);
                overlay.classList.remove("draggedover");
                counter = 0;
            }
        }

        // only react to actual files being dragged
        function dragEnterHandler(e) {
            e.preventDefault();
            if (!hasFiles(e)) {
                return;
            }
            ++counter && overlay.classList.add("draggedover");
        }

        function dragLeaveHandler(e) {
            1 > --counter && overlay.classList.remove("draggedover");
        }

        function dragOverHandler(e) {
            if (hasFiles(e)) {
                e.preventDefault();
            }
        }

        gallery.onclick = ({
            target
        }) => {
            if (target.classList.contains("delete")) {
                const ou = target.dataset.target;
                const element = document.getElementById(ou);
                if (element) {
                    element.remove();
                    gallery.children.length === 1 && empty.classList.remove("hidden");
                    delete FILES[ou];
                }
            }
        };


        // print all selected files
        document.getElementById("submit").onclick = () => {
            alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
            console.log(FILES);
        };

        // clear entire selection
        document.getElementById("cancel").onclick = () => {
            while (gallery.children.length > 0) {
                gallery.lastChild.remove();
            }
            FILES = {};
            empty.classList.remove("hidden");
            gallery.append(empty);
        };
    </script>

    <style>
        .hasImage:hover section {
            background-color: rgba(5, 5, 5, 0.4);
        }

        .hasImage:hover button:hover {
            background: rgba(5, 5, 5, 0.45);
        }

        #overlay p,
        i {
            opacity: 0;
        }

        #overlay.draggedover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        #overlay.draggedover p,
        #overlay.draggedover i {
            opacity: 1;
        }

        .group:hover .group-hover\:text-blue-800 {
            color: #2b6cb0;
        }
    </style>
    <hr class="border-t-accent-800 mt-10">
</section>


<section class="max-w-screen-xl mx-auto px-4">
    <div>
        <h2 class="text-primary-100 font-bold text-xl mt-10 mb-4">Home Information</h2>
        <div class="flex flex-col md:flex-row gap-5">
            <div class="flex flex-col md:flex-row gap-5 w-full">
                <div class="flex flex-col gap-5 w-full">
                    <div class="w-full flex-1 min-w-32">
                        <!-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property Type</label> -->
                        <select id="property-type" name="type" class="p-4 text-gray-900 text-sm rounded-lg block w-full  dark:bg-accent-900  dark:placeholder-primary-800 dark:text-white">
                            <option selected>Property Type</option>
                            <option value="houses">Houses</option>
                            <option value="townhomes">Townhomes</option>
                            <option value="multi-family">Multi-family</option>
                            <option value="condos">Condos</option>
                            <option value="apartments">Apartments</option>
                            <option value="manufactured">Manufactured</option>
                        </select>
                    </div>
                    <div class="relative  w-full">
                        <input type="text" id="property-name" name="name" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['name'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                        <label for="property-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Property Name
                        </label>
                    </div>
                    <div class="relative  w-full">
                        <input type="number" id="lot-size" name="lot_size" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['lot_size'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                        <label for="lot-size" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Lot Size sq. ft.
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="number" id="floor-area" name="floor_area" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['floor_area'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                        <label for="floor-area" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Floor Area
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-5 w-full">
                    <div class="relative w-full">
                        <input type="number" name="year_built" min="1700" max="2024" id=" year-built" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars(substr($property['year_built'], 0, 4), ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********">
                        <label for="year-built" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Year Built
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="number" name="no_of_beds" id="beds" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" required value="<?= htmlspecialchars($property['no_of_beds'], ENT_QUOTES, 'UTF-8'); ?>" placeholder="********" value="0">
                        <label for="beds" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Beds
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="number" name="no_of_bathrooms" id="bathrooms" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['no_of_bathrooms'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********" value="0">
                        <label for="bathrooms" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Bathrooms
                        </label>
                    </div>
                    <div class="relative w-full">
                        <input type="number" name="no_of_parkings" id="parkings" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                focus:pt-6
                                                focus:pb-2
                                                [&:not(:placeholder-shown)]:pt-6
                                                [&:not(:placeholder-shown)]:pb-2
                                                autofill:pt-6
                                                autofill:pb-2" value="<?= htmlspecialchars($property['no_of_parkings'], ENT_QUOTES, 'UTF-8'); ?>" required placeholder="********" value="0">
                        <label for="parkings" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-75 peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                peer-[:not(:placeholder-shown)]:scale-75
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                            Parkings
                        </label>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Additional Description</label>
                <textarea id="message" name="description" rows="11" class="block resize-none p-2.5 w-full text-sm text-primary-100 bg-gray-50 rounded-lg dark:bg-accent-900  dark:placeholder-accent-800" placeholder="Additional description..."><?= htmlspecialchars($property['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>
<section class="max-w-screen-xl mx-auto px-4">
    <h1 class="font-bold mt-10 text-2xl text-primary-100 mb-5">Set your price</h1>
    <div class="flex flex-col md:flex-row gap-5">
        <div class="relative w-1/2">
            <input type="number" id="php-price" name="price" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                    focus:pt-6
                                                    focus:pb-2
                                                    [&:not(:placeholder-shown)]:pt-6
                                                    [&:not(:placeholder-shown)]:pb-2
                                                    autofill:pt-6
                                                    autofill:pb-2" value="<?= htmlspecialchars($property['price'], ENT_QUOTES, 'UTF-8'); ?>" required step="0.01" placeholder="********">
            <label for="php-price" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                    peer-focus:scale-75 peer-focus:translate-x-0.5
                                                    peer-focus:-translate-y-1.5
                                                    peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                    peer-[:not(:placeholder-shown)]:scale-75
                                                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                    peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                Php price
            </label>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>
<!-- <section class="max-w-screen-xl mx-auto px-4">
    <h1 class="font-bold mt-10 text-2xl text-primary-100 mb-5">Payment methods</h1>
    <div class="flex flex-col md:flex-row gap-5">
        <div class="flex justify-start gap-10 w-full">
            <div class="flex items-center mb-4">
                <input id="rent-bank-transfer" type="checkbox" value="" class="w-4 h-4 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 bg-primary-900 dark:border-gray-600">
                <label for="rent-bank-transfer" class="ms-2 text-sm font-medium text-primary-100">Bank Transfer</label>
            </div>
            <div class="flex items-center mb-4">
                <input id="rent-e-wallets" type="checkbox" value="" class="w-4 h-4 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 bg-primary-900 dark:border-gray-600">
                <label for="rent-e-wallets" class="ms-2 text-sm font-medium text-primary-100 ">E-wallets</label>
            </div>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>
<section id="bank-setup-section" class="max-w-screen-xl mx-auto px-4 hidden">
    <h1 class="font-bold mt-10 text-2xl text-primary-100 mb-5">Bank Setup</h1>
    <div class="flex flex-col gap-5">
        <div class="relative w-1/2">
            <input type="text" id="rent-bank-name" name="rent-bank-name" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********">
            <label for="rent-bank-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                Bank Name
            </label>
        </div>
        <div class="relative w-1/2">
            <input type="text" id="rent-bank-account-name" name="rent-bank-account-name" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********">
            <label for="rent-bank-account-name" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                Account Name
            </label>
        </div>
        <div class="relative w-1/2">
            <input type="number" id="rent-bank-number" name="rent-bank-number" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-accent-900 dark:border-neutral-700 dark:text-primary-100 focus:ring-white
                                                        focus:pt-6
                                                        focus:pb-2
                                                        [&:not(:placeholder-shown)]:pt-6
                                                        [&:not(:placeholder-shown)]:pb-2
                                                        autofill:pt-6
                                                        autofill:pb-2" required placeholder="********">
            <label for="rent-bank-number" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                        peer-focus:scale-75 peer-focus:translate-x-0.5
                                                        peer-focus:-translate-y-1.5
                                                        peer-focus:text-primary-200 dark:peer-focus:text-primary-200
                                                        peer-[:not(:placeholder-shown)]:scale-75
                                                        peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                        peer-[:not(:placeholder-shown)]:text-primary-200 dark:peer-[:not(:placeholder-shown)]:text-primary-200">
                Account Number
            </label>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>
<section id="e-wallet-setup-section" class="max-w-screen-xl mx-auto px-4 hidden ">
    <h1 class="font-bold mt-10 text-2xl text-primary-100 mb-5">E-wallet Setup</h1>
    <div class="flex flex-col md:flex-row gap-5">
        <div class="flex justify-start gap-10 w-full">
            <div class="flex justify-center items-center gap-5">
                <input type="checkbox" id="bank-transfer" class="">
                <label for="bank-transfer" class="text-primary-100">Bank Transfer</label>
            </div>
            <div class="flex justify-center items-center  gap-5">
                <input type="checkbox" id="bank-transfer" class="">
                <label for="bank-transfer" class="text-primary-100">E wallets</label>
            </div>
        </div>
    </div>
    <hr class="border-t-accent-800 mt-10">
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rentBankTransferCheckbox = document.getElementById('rent-bank-transfer');
        const rentEwalletsCheckbox = document.getElementById('rent-e-wallets');
        const bankSetupSection = document.getElementById('bank-setup-section');
        const ewalletSetupSection = document.getElementById('e-wallet-setup-section');

        rentBankTransferCheckbox.addEventListener('change', function() {
            if (rentBankTransferCheckbox.checked) {
                bankSetupSection.classList.remove('hidden');
            } else {
                bankSetupSection.classList.add('hidden');
            }
        });

        rentEwalletsCheckbox.addEventListener('change', function() {
            if (rentEwalletsCheckbox.checked) {
                ewalletSetupSection.classList.remove('hidden');
            } else {
                ewalletSetupSection.classList.add('hidden');
            }
        });
    });
</script> -->
<div>
    <input type="hidden" name="status" value="for sale">
</div>
<div>
    <input type="hidden" name="approval_status" value="pending">
</div>
<section class="max-w-screen-xl mx-auto px-4 mt-10">
    <button type="submit" class="font-bold mt-2 rounded-lg px-10 py-3 bg-primary-500 hover:bg-accent-600 focus:shadow-outline focus:outline-none">
        Update
    </button>
</section>
</form>

<hr class="border-t-accent-800 mt-24">
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/footer'); ?>
<?= $this->endSection() ?>