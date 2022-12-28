<?php view(
    'partials/header.php',
    [
        'title' => 'Admin Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>



<?= view('partials/adminNav.php') ?>
<main class="lg:w-[84%] w-full  ml-auto container ">
    <section class="">
        <header class="w-full bg-white p-6 flex justify-between container items-center  flex-grow-1 ">
            <h3 class="text-2xl opacity-90 font-semibold">Store Overview</h3>
            <div class="input-search ">
                <span class="text-blue-500 mr-3"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" placeholder="Search" class="w-60 h-5 rounded-full focus:outline-none bg-gray-200 p-4">
            </div>
            <div class="acitvity flex gap-4 justify-between items-center">
                <span class="text-blue-500"><i class="fa-solid fa-envelope"></i></span>
                <div class="divider h-6 w-[2px] bg-slate-300 rounded "></div>
                <span class="text-blue-500"><i class="fa-solid fa-gear"></i></span>
                <div class="divider h-6 w-[2px] bg-slate-300 rounded "></div>
                <button class=" border-2 rounded-xl border-sky-500 border-solid px-2 py-2">
                    <span class="text-blue-500"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                    <span class="font-semibold text-blue-500">Uplodad report</span>
                </button>
            </div>
        </header>

        <div class="activity flex justify-between container sm:p-6 ">
            <h3 class=" font-medium text-xl">Activity </h3>
            <div class="date ">
                <span class="text-blue-400"><i class="fa-solid fa-calendar"></i></span>
                <span class="text-blue-500 font-medium">Today- </span>
                <span class="text-blue-500 font-medium">20 May </span>
            </div>
        </div>

        <main class="lg:flex">
            <section class="container lg:w-[70%] w-full lg:p-6  ">
                <div class="activity-cards grid grid-cols-4">
                    <?= Widget('activityCard', [
                        'title' => 'Total sales',
                        'value' => '$456,22.1',
                        'icon' => 'fa-solid fa-shopping-bag',
                        'color' => 'bg-blue-500',
                        'iconColor' => 'text-blue-500',
                        'grow' => '+ 20,45 %'
                    ]) ?>
                    <?= Widget('activityCard', [
                        'title' => 'Visitors',
                        'value' => '632.22',
                        'icon' => 'fa-regular fa-user-plus',
                        'color' => 'bg-blue-500',
                        'iconColor' => 'text-blue-500',
                        'grow' => '+ 9 %'
                    ]) ?>
                    <?= Widget('activityCard', [
                        'title' => 'Total orders',
                        'value' => '3,456.22',
                        'icon' => 'fa-solid fa-wallet',
                        'color' => 'bg-blue-500',
                        'iconColor' => 'text-blue-500',
                        'grow' => '+ 7,45 %'
                    ]) ?>
                    <?= Widget('activityCard', [
                        'title' => 'Refunded',
                        'value' => '503.22',
                        'icon' => 'fa-solid fa-arrow-rotate-left',
                        'color' => 'bg-blue-500',
                        'iconColor' => 'text-blue-500',
                        'grow' => '+ 4,3 %'
                    ]) ?>
                </div>
                <div class="recent-invoice ">
                    <div class="recent-invoice-header flex justify-between mt-6 ">
                        <h3 class=" font-medium text-xl">Recent invoices</h3>
                        <div class=" flex gap-4">
                            <div class="select-invoice flex gap-2">
                                <p>All Channels </p>
                                <span class="text-blue-300"><i class="fa-light fa-angle-right"></i></span>
                            </div>
                            <div class="filter flex gap-2">
                                <p>Filters </p>
                                <span class="text-blue-300"><i class="fa-solid fa-bars-filter"></i></span>

                            </div>
                        </div>
                    </div>
                    <div class="invoices-datagrid mt-6 font-medium opacity-90 ">
                        <table class="w-full text-lg mt-4 rounded-sm text-center ">
                            <thead class="text-gray-700  bg-gray-100 rounded">
                                    <th>No.</th>
                                    <th>Id Order</th>
                                    <th>Customer Name</th>
                                    <th>Order Date</th>
                                    <th>City</th>
                                    <th>Order Status</th>
                                    <th>Amount</th>
                            </thead>
                            <?php foreach ($commandes as $invoice) : ?>
                                <tr class="bg-white text-gray-700">
                                    <td class="py-2"><?= $invoice['id']??"" ?></td>
                                    <td class="py-2"><?= $invoice['id_order']??4433 ?></td>
                                    <td class="py-2"><?= $invoice['nom_complet'] ?></td>
                                    <td class="py-2"><?= $invoice['dateCommande'] ?></td>
                                    <td class="py-2"><?= $invoice['city']??"casa" ?></td>
                                    <td class="py-2"><?= $invoice['status'] ?></td>
                                    <td class="py-2"><?= $invoice['prix_final']??"" ?></td>
                                </tr>
                            <?php endforeach; ?>
                        
                        </table>
                    </div>
                </div>
            </section>
            <aside class="w-[35%] h-screen px-6">
                <div class="top-revenu-channels p-4 rounded  bg-white border">
                    <div class="flex justify-between">
                        <h3 class=" font-medium">Top revenue channels</h3>
                        <span class="text-blue-300"><i class="fa-light fa-angle-right"></i></span>
                    </div>
                    <div class="top-content mt-7">
                        <p class="text-2xl text-center">$123.233.00</p>
                    </div>
                    <div class="more-info ">
                        <div class="flex justify-between ">
                            <p class="text-blue-500">More info</p>
                            <span class="text-blue-300"><i class="fa-light fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="top-products border p-4 mt-6 bg-white rounded">
                    <p class="font-semibold ">Top Products</p>
                    <div class="top-products-container">
                        <div class="top-product-card flex justify-between place-content-center items-center">
                            <div class="card-img w-12">
                                <img class="w-full" src="https://johnlewis.scene7.com/is/image/JohnLewis/241230500?$rsp-pdp-port-640$" alt="">
                            </div>
                            <div class="card-info flex gap-2">
                                <p class="text-blue-500 font-semibold">Iphone 12</p>
                                <p class="text-gray-400">#1029</p>
                            </div>
                            <div class="more-points">
                                <i class="fa-thin fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="top-products-container">
                        <div class="top-product-card flex justify-between place-content-center items-center">
                            <div class="card-img w-12">
                                <img class="w-full" src="https://johnlewis.scene7.com/is/image/JohnLewis/241230500?$rsp-pdp-port-640$" alt="">
                            </div>
                            <div class="card-info flex gap-2">
                                <p class="text-blue-500 font-semibold">Iphone 12</p>
                                <p class="text-gray-400">#1029</p>
                            </div>
                            <div class="more-points">
                                <i class="fa-thin fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="top-products-container">
                        <div class="top-product-card flex justify-between place-content-center items-center">
                            <div class="card-img w-12">
                                <img class="w-full" src="https://johnlewis.scene7.com/is/image/JohnLewis/241230500?$rsp-pdp-port-640$" alt="">
                            </div>
                            <div class="card-info flex gap-2">
                                <p class="text-blue-500 font-semibold">Iphone 12</p>
                                <p class="text-gray-400">#1029</p>
                            </div>
                            <div class="more-points">
                                <i class="fa-thin fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </main>

    </section>

</main>

<?php view('partials/footer.php'); ?>