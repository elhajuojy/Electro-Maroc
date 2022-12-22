<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page'
    ]
); ?>

<?php view('partials/banner.php'); ?>
<?php view('partials/navbar.php'); ?>
<nav class="Pannel flex items-center  mt-4 w-[90%] m-auto mb-6">
    <div class="titles flex w-full  justify-between items-center">
        <p class="lg:block hidden">
            <a href="#" class="px-4">About Product </a>
            <a href="#" class="px-4">Details</a>
            <a href="#" class="px-4">Specs</a>
        </p>
        <div class="flex justify-end items-center gap-4">
            <p class="x justify-self-end">
                On Sale from $3,299.00
            </p>
            <div class="cart-item-quantity w-20">
                <div class="quantity-input border-2 rounded p-1">
                    <!-- <button class="minus">-</button> -->
                    <input type="number" class="quantity w-10 font-bold" value="1" />
                    <button class="plus">+</button>
                </div>
            </div>
            <div class="checkout-btn w-80 rounded m-auto">
                <button class="bg-blue-700 hover:bg-blue-700 text-white font-base w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                    Add to Cart
                </button>
            </div>
            <div class="checkout-btn w-40 rounded m-auto">
                <button class="bg-yellow-500  hover:bg-orange-600   w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                    PayPal
                    <i class="fa-brands fa-paypal"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- <?= Widget('lineBreak') ?> -->
<hr>
<main class=" w-full bg-blue-50 ">
    <section class="product grid justify-center items-center  lg:grid-cols-2 lg:w-[80%] m-auto">
        <article>
            <?php view('partials/routeGuide.php', ['route' => 'Home  ›  Laptops  ›  MSI WS Series']); ?>
            <h1 class="text-3xl ">MSI MPG Trident 3</h1>
            <a href="#" class="text-blue-400 leading-8">Be the first to review this product</a>
            <ul>
                <li class="text-sm leading-6">• Intel Core i7-10700F</li>
                <li class="text-sm leading-6">• Intel H410</li>
                <li class="text-sm leading-6">• WHITE</li>
                <li class="text-sm leading-6">• NVIDIA MSI GeForce RTX 2060 SUPER 8GB AERO ITX GDDR6</li>
                <li class="text-sm leading-6">• SO-DIMM 16GB (16GB x 1) DDR4 2666MHz</li>
                <li class="text-sm leading-6">• 2 total slots (64GB Max)</li>
                <li class="text-sm leading-6">• 512GB (1 x 512GB) M.2 NVMe PCIe GEN3x4 SSD 2TB (2.5) 5400RPM</li>
                <li class="text-sm leading-6">• Gaming Keyboard GK30 + Gaming Mouse GM11</li>
                <li class="text-sm leading-6">• 3.5 HDD (0/0), 2.5 HDD/SSD(1/0), M.2 (1/0)</li>
                <li class="text-sm leading-6">• Intel WGI219Vethernet (10/100/1000M)</li>
                <li class="text-sm leading-6">• AX200 (WIFI 6)+BT5.1</li>
                <li class="text-sm leading-6">• PSU 330W</li>
                <li class="text-sm leading-6">• Fan Cooler</li>
            </ul>
        </article>
        <div class="img-container m-auto mt-10 ">
            <div class=". w-60">

                <img src="assets/images/products/laptop-x.png" class="w-full " alt="">
            </div>
            <p class=" opacity-75 text-sm w-72 flex gap-4">
                <img src="assets/images/Logo.svg" class="w-10" alt="">
                own it now, up to 6 months interest free learn more
            </p>

        </div>
    </section>
    <section class="bg-black mt-6 items-center justify-center text-center text-white grid grid-cols-1 lg:grid-cols-2">
        <div class="content">
            <h1 class="text-4xl font-medium">Outplay the Competittion</h1>
            <p class="text-xs text-left ml-72 mt-6   w-80 opacity-40">
                Experience a 40% boost in computing from last generation. MSI Desktop equips the 10th Gen. Intel® Core™ i7 processor with the upmost computing power to bring you an unparalleled gaming experience.
                *Performance compared to i7-9700. Specs varies by model.
            </p>
        </div>
        <div class="img-content">
            <img src="assets/images/cover/core.png" alt="">
        </div>
    </section>
</main>

<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>