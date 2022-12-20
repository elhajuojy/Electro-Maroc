<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page'
    ]
); ?>
<?= view('partials/adminNav.php') ?>

<div class="lg:w-[84%] ml-auto container ">

    <section class="p-10 pb-1 bg-gray-50 ">
        <header class="add-product-title flex justify-between ">
            <div class="product-title flex gap-4  items-center ">
                <div class="icon text-green-500">
                    <i class="fa-solid fa-arrow-left cursor-pointer"></i>
                </div>
                <h1 class="text-2xl font-medium">Product Name </h1>
                <div class="product-status">
                    <p class="cursor-pointer text-xs font-medium text-white border-2 rounded-full px-2 py-1 bg-blue-400">Published</p>
                </div>
            </div>
            <div class="actions flex justify-center items-center gap-2">
                <button class="border-2 text-sm text-gray-600 font-medium border-gray-400 px-2 py-1 rounded">
                    More actions
                    <i class="fa-regular fa-angle-down"></i>
                </button>
                <button class="bg-green-500 text-sm text-white px-5 py-[6px] rounded">
                    Save
                </button>
            </div>
        </header>
        <menu>
            <ul class="flex justify-between p-6 items-center w-[50%] text-gray-700 font-medium">
                <li class="flex gap-4 items-center cursor-pointer">
                    <img src="assets/images/icons/products.svg" alt="">
                    <p class=" underline underline-offset-[10px]">Overview </p>
                </li>
                <li class="flex gap-4 items-center cursor-pointer">
                    <img src="assets/images/icons/products.svg" alt="">
                    <p class="">Acivity </p>
                </li>
                <li class="flex gap-4 items-center cursor-pointer">
                    <img src="assets/images/icons/orders.svg" alt="">
                    <p>Comman information </p>
                </li>
                <li class="flex gap-4 items-center cursor-pointer">
                    <img src="assets/images/icons/users.svg" alt="">
                    <p> Internal info </p>
                </li>
            </ul>
        </menu>
    </section>
    <main class="create-products p-10 w-[80%]">
        <div class="header-content">
            <p class="text-xl text-gray-700">General information</p>
            <span class="opacity-50">Maroc/safi</span>
        </div>
        <div class="divider">
            <hr class="border-2 border-gray-200 my-6">
        </div>
        <div class="basic-info flex w-full m-auto gap-10 ">
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Product name</label>
                <input type="text" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Product Referance </label>
                <input type="text" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>
        </div>
        <div class="product-prices flex w-full m-auto  py-5 gap-10">
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Prix Achate </label>
                <input type="number" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Prix final </label>
                <input type="number" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>

        </div>
        
        <div class=" bg-slate-400 h-[2px]  opacity-50 my-7 w-full">
        </div>
        <div class="products-photos">
            <header class="flex justify-between">
                <div class="">
                    <p class="text-3xl font-medium text-gray-700 ">Product Photos
                        <span class="Badge">
                            <span class="Badge__badge text-sm opacity-40">4</span>
                        </span>
                    </p>
                    <p>
                        <span class="text-gray-700">Add photos of your product</span>
                        <span class="text-gray-400"> (optional)</span>
                    </p>
                </div>
                <div class="get-more-inspration">
                    <p class="text-green-500">Get more inspiration</p>
                </div>
            </header>
            <div class="products-img-container flex gap-4">
                <div class="product-img w-32 h-52 p-auto grid items-center">
                    <img src="assets/images/products/laptop-1.png" class="w-full" alt="">
                </div>
                <div class="product-img w-32 h-52 p-auto grid items-center">
                    <img src="assets/images/products/laptop-1.png" class="w-full" alt="">
                </div>
                <div class="product-img w-32 h-52 p-auto grid items-center">
                    <img src="assets/images/products/laptop-1.png" class="w-full" alt="">
                </div>
                <div class="product-img w-32 h-52 p-auto grid items-center">
                    <img src="assets/images/products/laptop-1.png" class="w-full" alt="">
                </div>
                <form action="">
                    <div class="add-product-img w-32 rounded border-green-500 h-52 border-dotted border-2 grid place-content-center justify-center  ">
                        <div class="add-product-icon cursor-pointer  bg-green-500 w-16 h-16 rounded-[50%] grid place-content-center ml-3">
                            <span class="text-white text-2xl"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <p class="text-base text-gray-900 pt-4">Add Photos</p>
                    </div>
                </form>
            </div>

            <div class="more">
                <!-- add more here  -->
                <!-- <label for="status" class="block mb-2 text-sm font-medium  dark:text-white">Select a status</label>
                <select  id="status" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Active </option>
                    <option value="US">inActive </option>
                </select> -->
            </div>
        </div>
        <div class="description">
            <label for="product-name" class="text-gray-700">Description</label>
            <textarea name="product-name" id="product-name" class="w-full resize-none border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" rows="5"></textarea>
        </div>
        <div class="categories">
            <label for="product-name" class="text-gray-700">Categories</label>
            <div class="categories-list flex gap-2 border-2 my-2 p-3 rounded ">
                <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                    <p class="text-gray-700">Category 1</p>
                    <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                </div>
                <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                    <p class="text-gray-700">Category 2</p>
                    <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                </div>
                <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                    <p class="text-gray-700">Category 3</p>
                    <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                </div>
            </div>
            <p class="opacity-50 text-sm">add more categories here ...</p>
            <button class="add-category flex bg-blue-500 ease-in duration-150 hover:bg-blue-600 hover:shadow-sm px-2 py-2 rounded mt-4">
                <span class="text-white pr-2"><i class="fa-solid fa-plus"></i></span>
                <p class="text-white">Add category</p>
            </button>
        </div>
        <div class="flex w-full m-auto gap-10 py-5">
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Prix offere</label>
                <input type="number" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>
            <div class="product-name">
                <label for="product-name" class="text-gray-700">Produit Quntite</label>
                <input type="number" name="product-name" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>
        </div>
        
        
</main>
</div>

<?php view('partials/footer.php');