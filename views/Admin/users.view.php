<?php view(
    'partials/header.php',
    [
        'title' => 'Users Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>

<?= view('partials/adminNav.php') ?>
<div class="lg:w-[84%] ml-auto container p-6">

    <header class="search-Customers">
        <div class="input flex border-2 border-gray-100 max-w-md p-2 rounded">
            <span class=""><i class="fa-solid fa-magnifying-glass pr-2 "></i></span>
            <input type="text" class="search-input focus:outline-none w-full text-base" placeholder="Search Customers">
        </div>
        <p class="text-2xl pt-10 font-medium text-gray-800">Customers</p>
    </header>
    <section>
        <div class="filters-sections flex gap-4 mt-14">
            <button class="border-2 px-[10px] font-medium rounded p-1 opacity-70 border-gray-400 shadow-sm ">
                Add Filter <i class="fa-solid fa-plus"></i>
            </button>
            <button class="border-2 px-[10px] font-medium rounded p-1 opacity-70 border-gray-400  ">
                <span class="opacity-50">Tag :</span> Lead <i class="fa-solid fa-times"></i>
            </button>
            <button class="border-2 px-[10px] font-medium rounded p-1 opacity-70 border-gray-400  ">
                <span class="opacity-50">Type :</span> Person <i class="fa-solid fa-times"></i>
            </button>
            <button class="border-2 px-[10px] font-medium rounded p-1 opacity-70 border-gray-400  ">
                <span class="opacity-50">Country :</span> United Knigdom <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="customer-checkbox flex gap-6 mt-6 items-center">
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <!-- <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label> -->
            </div>
            <p class="opacity-70">Customers</p>
        </div>
        <div class="customers-list mt-6 w-[90%] ">
            <div class="header flex justify-between">
                <p>Check</p>
                <p class="-mx-[10%]">profile</p>
                <p>Name </p>
                <p class="shrink ">Email</p>
                <!-- <p></p> -->
                <p class="">number</p>
                <p>City/country</p>
            </div>
            <?= Widget('lineBreak') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview',[
                // 'name' => 'Jordan Kenndy',
                // 'email' => 'email@gmai.com',
                // 'number' => '0659707721',
                // 'city' => 'Safi,Maroc',
                // 'image'=> 'https://flowbite.com/docs/images/people/profile-picture-5.jpg'
            ]) ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
            <?= Widget('customerPreview') ?>
        </div>
    </section>
</div>