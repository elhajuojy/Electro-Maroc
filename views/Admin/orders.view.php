<?php view(
    'partials/header.php',
    [
        'title' => 'Users Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>

<?= view('partials/adminNav.php') ?>
<div class="lg:w-[84%] w-full  ml-auto container ">
    <nav class=" px-6 pt-6">
        <header class="flex justify-between">
            <h1 class="text-3xl font-medium ">Orders </h1>
            <div class="action">
                <a href="" class="border-2  rounded py-1 px-2 border-gray-500">
                    <i class="fa-solid fa-print"></i>
                    Print Orders
                </a>

            </div>

        </header>
        <?= Widget('lineBreak') ?>
        <div class="actions flex justify-rounded gap-2">
            <div class="search border-2 border-gray-100 flex items-center p-1 rounded-lg w-96">
                <div class="text-gray-400">
                    <i class="fa-solid fa-search pl-1"></i>
                </div>
                <input type="text" name="search" id="search" placeholder="Search for any order ..." class="px-2 py-1 focus:outline-none">
            </div>
            <div class="date flex px-2 gap-2 items-center text-gray-500 border-2 border-gray-100 p-1 rounded-lg">
                <i class="fa-regular fa-calendar"></i>
                <p>Date Range </p>
                <img src="assets/icons/arrowbottom.svg" alt="">
                <!-- <input type="date" name="date" id="date"> -->
            </div>
            <div class="date flex px-2 gap-2 items-center text-gray-500 border-2 border-gray-100 p-1 rounded-lg">
                <i class="fa-solid fa-clipboard-check"></i>
                <p>Status</p>
                <img src="assets/icons/arrowbottom.svg" alt="">
                <!-- <input type="date" name="date" id="date"> -->
            </div>
            <div class="date flex px-2 gap-2 items-center text-gray-500 border-2 border-gray-100 p-1 rounded-lg">
                <i class="fa-regular fa-location-pin"></i>
                <p>Department</p>
                <img src="assets/icons/arrowbottom.svg" alt="">
                <!-- <input type="date" name="date" id="date"> -->
            </div>
            <div class="date flex px-2 gap-2 items-center text-gray-500 border-2 border-gray-100 p-1 rounded-lg">
                <i class="fa-light fa-sd-card"></i>
                <p>Save Filters </p>
                <img src="assets/icons/arrowbottom.svg" alt="">
                <!-- <input type="date" name="date" id="date"> -->
            </div>
        </div>
        <?= Widget('lineBreak') ?>
        <div class="filters flex text-gray-600 gap-6">
            <div class="all flex gap-2">
                <i class="fa-solid fa-box"></i>
                <p>All</p>
                <span> 64 </span>
            </div>

            <div class="PickUp flex gap-1">
                <i class="fa-solid fa-arrow-right"></i>
                <p>PickUps</p>
                <span> 34 </span>
            </div>
            <div class="Returns flex gap-1">
                <i class="fa-solid fa-arrow-left"></i>
                <p>Returns</p>
                <span> 23 </span>
            </div>
        </div>
    </nav>
    <section class="main  p-5">
        <p class="opacity-[50%] text-base font-medium">Showing 11 -24 of 64 result </p>
        <main class="orders">
            <table class="w-full mt-4 rounded-sm text-center ">
                <thead class="text-gray-700 font-medium bg-gray-100 rounded">
                    <th class="p-2 hidden md:block">Order ID</th>
                    <th class="p-2">Customer</th>
                    <th class="p-2 hidden md:block">Products</th>
                    <th class="p-2">Order Date</th>
                    <th class="p-2">Order Status</th>
                    <th class="p-2">Delvery status </th>
                    <th class="p-2">Order Total</th>
                    <th class="p-2">Actions</th>
                </thead>
                <?= view('components/orderRow.php', [
                    'id' => 4437,
                    'customer' => 'Mohamed',
                    'products' => 'Laptop Asus',
                    'date' => '12 Aug 2021',
                    'status' => 'Pending',
                    'delivery' => 'PickUp',
                    'total' => '1200 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 8875,
                    'customer' => 'Mehdi',
                    'products' => 'Iphone 12',
                    'date' => '22 Aug 2022',
                    'status' => 'Booked',
                    'delivery' => 'Delayed',
                    'total' => '7745 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 4458,
                    'customer' => 'Mohamed',
                    'products' => 'Laptop Asus',
                    'date' => '12 Aug 2021',
                    'status' => 'Closed',
                    'delivery' => 'PickUp',
                    'total' => '1200 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 8875,
                    'customer' => 'Mehdi',
                    'products' => 'Iphone 12',
                    'date' => '22 Aug 2022',
                    'status' => 'Booked',
                    'delivery' => 'Delayed',
                    'total' => '7745 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 4458,
                    'customer' => 'Mohamed',
                    'products' => 'Laptop Asus',
                    'date' => '12 Aug 2021',
                    'status' => 'Closed',
                    'delivery' => 'PickUp',
                    'total' => '1200 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 8875,
                    'customer' => 'Mehdi',
                    'products' => 'Iphone 12',
                    'date' => '22 Aug 2022',
                    'status' => 'Booked',
                    'delivery' => 'Delayed',
                    'total' => '7745 DH',
                    'action' => 'View'
                ]) ?>
                <?= view('components/orderRow.php', [
                    'id' => 4458,
                    'customer' => 'Mohamed',
                    'products' => 'Laptop Asus',
                    'date' => '12 Aug 2021',
                    'status' => 'Closed',
                    'delivery' => 'PickUp',
                    'total' => '1200 DH',
                    'action' => 'View'
                ]) ?>
            </table>
        </main>
    </section>
</div>

<?php view('partials/footer.php') ?>