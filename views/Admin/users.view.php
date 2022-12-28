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
            <table class="w-full  text-lg mt-4 rounded-sm text-center ">
                <thead class="text-gray-700 bg-gray-100 rounded">
                    <th>Check.</th>
                    <th>profile </th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Number </th>
                    <th>City/country</th>
                </thead>
                <?php foreach ($clients as $client) : ?>
                    <tr class="bg-white text-gray-700">
                        <td class="py-2"><input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
                        <td class="py-2"><img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="" class="w-10 h-10 rounded-full"></td>
                        <td class="py-2"><?= $client->nom_complet ?></td>
                        <td class="py-2"><?= $client->email ?></td>
                        <td class="py-2"><?= $client->telephone ?></td>
                        <!-- <td class="py-2"><?= $client->ville ?></td> -->
                        <td class="py-2"><?= $client->pays ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </section>
</div>