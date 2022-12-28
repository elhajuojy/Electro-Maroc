<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page'
    ]
); ?>

<?php view('partials/banner.php'); ?>
<?php view('partials/navbar.php'); ?>
<header class="cover lg:w-[80%] m-auto">
    <div class="banner-poster  m-auto container w-md">
        <img src="assets/images/cover/products-banner.png" class="w-full" alt="">
    </div>
    <?php view('partials/routeGuide.php', ['route' => 'Home  ›  Laptops  ›  MSI Prestige Series  › <span class="text-gray-100 opacity-20"> MSI WS Series</span>']); ?>
</header>
<section class="products container m-auto  lg:w-[80%]  px-4 md:px-0">
    <h1 class="text-2xl">MSI PS Series (20)</h1>
    <div class="filter flex justify-between gap-4 mt-6 ">
        <p class="px cursor-pointer">
            <i class="fa-solid fa-chevron-left"></i>
            back
        </p>
        <p class="ml-4 flex-grow">
            Items 1-35 of 61
        </p>
        <div class="border-2 border-gray-300 px-2 py-1 rounded sort-by">
            <span class="opacity-60">Sort By:</span> Position
        </div>
        <div class="border-2 border-gray-300 px-2 py-1 rounded show">
            <span class="opacity-60">Show :</span> 35 per page
        </div>
    </div>
    <main class="products-container flex gap-4 mt-4">
        <aside class="w-[20%]">
            <nav class=" w-full bg-slate-100 px-4 py-2 rounded">
                <p class="text-center font-medium mb-4">Filter </p>
                <p class="border-2 text-sm text-center w-auto rounded-full border-gray-500 px-2 py-1">
                    Clear Filter
                </p>
                <p class="my-4">
                    Category
                </p>
                <ul class="text-sm mt-4">
                    <?php foreach ($categories as $category) : ?>
                        <li class=". cursor-pointer hover:text-gray-700">
                            <a href=""><?= $category->nom ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="my-4">
                    Sous Category
                </p>
                <ul class="text-sm mt-4">
                    <?php foreach ($categories as $category) : ?>
                        <li class=". cursor-pointer hover:text-gray-700">
                            <a href=""><?= $category->nom ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <p class="mt-6">
                    Price
                </p>
                <ul class="text-sm mt-4">
                    <li>$0.00 - $1,000.00 </li>
                    <li>$1,000.00 - $2,000.00</li>
                    <li>$2,000.00 - $3,000.00</li>
                </ul>
                <button class="py-2 mt-6 px-4 bg-blue-600 text-white text-sm w-full rounded-full  m-auto">
                    Apply Filters (2)
                </button>
            </nav>
            <div>
                more content here
            </div>
        </aside>
        <section class="products w-full  ">
            <div class="filters flex gap-2 font-medium">
                <div class="filter ">
                    <p class="flex gap-2 border-2 border-gray-100 rounded p-1 ">
                        CUSTOM PCS (24)
                        <i class="fa-duotone fa-xmark"></i>
                    </p>
                </div>
                <div class="filter  ">
                    <p class="flex gap-2 border-2 border-gray-100 rounded p-1 ">
                        HP/COMPAQ PCS (24)
                        <i class="fa-duotone fa-xmark"></i>
                    </p>
                </div>
                <div class="filter ">
                    <p class="flex gap-2 border-2 border-gray-100 rounded p-1 ">
                        Clear All
                    </p>
                </div>
            </div>
            <div class="products-list grid grid-cols-1  my-5 md:grid-cols-2 lg:grid-cols-4 justify-between">
                <?php 
                    // echo dd($products);
                ?>
                <?php foreach ($products as $product) : ?>
                    <?= Widget('newProductCard', [
                        'id' => $product['idProduit'],
                        'quantity' => $product['quantite'],
                        'img' => $product['image'],
                        'title' => $product['nom'],
                        'price' => $product['prix_offer'],
                        'oldPrice' => $product['prix_final'],
                        'discount' => '10%',
                        'rating' => '4.5',
                        'reviews' => '(10)',
                        'link' => '/product/'.$product['idProduit'],
                    ]) ?>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</section>

<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>