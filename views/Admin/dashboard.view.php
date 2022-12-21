<?php view(
    'partials/header.php',
    [
        'title' => 'Admin Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>



<main class="containre m-auto flex scrollbar-hide overflow-hidden bg-gray-50">
    <?= view('partials/adminNav.php') ?>
    <section class="w-[85%] ml-auto">
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
                    'grow'=> '+ 20,45 %'
                ]) ?>
                <?= Widget('activityCard', [
                    'title' => 'Visitors',
                    'value' => '632.22',
                    'icon' => 'fa-regular fa-user-plus',
                    'color' => 'bg-blue-500',
                    'iconColor' => 'text-blue-500',
                    'grow'=> '+ 9 %'
                ]) ?>
                <?= Widget('activityCard', [
                    'title' => 'Total orders',
                    'value' => '3,456.22',
                    'icon' => 'fa-solid fa-wallet',
                    'color' => 'bg-blue-500',
                    'iconColor' => 'text-blue-500',
                    'grow'=> '+ 7,45 %'
                ]) ?>
                <?= Widget('activityCard', [
                    'title' => 'Refunded',
                    'value' => '503.22',
                    'icon' => 'fa-solid fa-arrow-rotate-left',
                    'color' => 'bg-blue-500',
                    'iconColor' => 'text-blue-500',
                    'grow'=> '+ 4,3 %'
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
                        <div class="invoices-header-title flex gap-2 m-auto  mb-2 justify-between">
                            <p>No.</p>
                            <p>Id Order 
                                <span class="text-blue-300"><i class="fa-light fa-angle-down"></i></span>
                            </p>
                            <p>Customer Name</p>
                            <p>Order Date
                                <span class="text-blue-300"><i class="fa-light fa-angle-down"></i></span>
                            </p>
                            <p>City</p>
                            <p>Order Status</p>
                            <p>Amount </p>
                        </div>
                        <div class="divider w-full h-[2px] mb-2 bg-blue-200">

                        </div>
                        <div class="invoices-content ">
                            <div class="invoices-content-title flex gap-2 m-auto mb-2 opacity-70 justify-between">
                                <p>1</p>
                                <p>123456</p>
                                <p>John Doe</p>
                                <p>20 May 2021</p>
                                <p>Paris</p>
                                <p>Delivered</p>
                                <p>$ 123.00</p>
                            </div>
                            <div class="invoices-content-title flex gap-2 m-auto mb-2 opacity-70 justify-between ">
                                <p>2</p>
                                <p>123456</p>
                                <p>John Doe</p>
                                <p>20 May 2021</p>
                                <p>Paris</p>
                                <p>Delivered</p>
                                <p>$ 123.00</p>
                            </div>
                            <div class="invoices-content-title flex gap-2 mb-2 m-auto opacity-70 justify-between">
                                <p>3</p>
                                <p>123456</p>
                                <p>John Doe</p>
                                <p>20 May 2021</p>
                                <p>Paris</p>
                                <p>Delivered</p>
                                <p>$ 123.00</p>
                            </div>
                            <div class="invoices-content-title flex gap-2 mb-2 m-auto opacity-70 justify-between">
                                <p>4</p>
                                <p>123456</p>
                                <p>John Doe</p>
                                <p>20 May 2021</p>
                                <p>Paris</p>
                                <p>Delivered</p>
                                <p>$ 123.00</p>
                            </div>
                            <div class="invoices-content-title flex gap-2 mb-2 m-auto opacity-70 justify-between">
                                <p>5</p>
                                <p>123456</p>
                                <p>John Doe</p>
                                <p>20 May 2021</p>
                                <p>Paris</p>
                                <p>Delivered</p>
                                <p>$ 123.00</p>
                            </div>
                        </div>
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