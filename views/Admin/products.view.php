<?php view(
    'partials/header.php',
    [
        'title' => 'Admin Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>

<?= view('partials/adminNav.php') ?>
<div class="lg:w-[84%] ml-auto container">
    <header class="containre  m-auto flex scrollbar-hide overflow-hidden bg-gray-50">
        <section class="products-container container ">
            <header class="flex justify-between p-6 items-center">
                <p class="text-2xl font-medium ">Products </p>
                <div class="flex gap-4">
                    <a href="/admin-createProduct" class="btn btn-primary border-[2px] border-blue-200 text-green-900  font-medium p-2 rounded">
                        <i class="fa-duotone fa-plus"></i>
                        Add Product
                    </a>
                </div>
            </header>
            <menu>
                <ul class="flex justify-between p-6 items-center w-[50%] text-gray-700 font-medium">
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/products.svg" alt="">
                        <p class=" underline underline-offset-[10px]">All Products</p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/products.svg" alt="">
                        <p class="">Published </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/orders.svg" alt="">
                        <p>Draft </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/users.svg" alt="">
                        <p> Comming soon </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/settings.svg" alt="">
                        <p>on hold </p>
                    </li>
                </ul>
            </menu>
        </section>
    </header>
    <main class="container lg:p-6">
        <section class="search-filter flex gap-4 border border-gray-400 shadow-sm p-2 rounded w-[80%] ">
            <div class="filter">
                <p class="text-xl flex items-center justify-center place-content-center gap-8">
                    <span class="text-xl opacity-75">Filter</span>
                    <!-- <i class="fa-thin fa-sort-down"></i> -->
                </p>
            </div>
            <div class="search flex justify-center border-l border-gray-500 w-full    items-center gap-2">
                <div class="search-icon opacity-40 px-2">
                    <i class="fa-regular fa-magnifying-glass"></i>
                </div>
                <input type="text" class="search-input focus:outline-none w-full" placeholder="Search products">
            </div>
        </section>
        <section class="select-option ">
            <div class="flex justify-between items-center p-6">
                <div class="flex items-center ">
                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Showing 10 products </label>
                </div>
                <div class="flex gap-2 items-center">
                    <i class="fa-light fa-gear"></i>
                    <p class="text-gray-700 font-medium">Sort by Newset </p>
                    <!-- <select name="" id="" class="form-select">
                        <option value="">Delete</option>
                        <option value="">Edit</option>
                    </select> -->
                </div>
            </div>
            <div class="divider w-full h-[2px] rounded opacity-60 bg-gray-300"></div>
            <div class="products-list">
                <?= Widget('productPreviewCard', [
                    'title' => 'Product 1',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                    'price' => '1000',
                    'image' => 'assets/images/products/1.jpg',
                    'id' => '1'
                ]) ?>
                <?= Widget('productPreviewCard') ?>
                <?= Widget('productPreviewCard') ?>
                <?= Widget('productPreviewCard') ?>
            </div>
        </section>
        <nav aria-label="Page navigation example" class="grid justify-center mt-6 ">
            <ul class="inline-flex -space-x-px">
                <li>
                    <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>

    </main>


</div>