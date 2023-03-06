<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page'
    ]
); ?>

<?php view('partials/banner.php'); ?>
<?php view('partials/navbar.php'); ?>
<?php view('partials/routeGuide.php'); ?>



<section class="main  p-5">
        <main class="orders">
            <table class="w-full mt-4 rounded-sm text-center ">
                <thead class="text-gray-700 font-medium bg-gray-100 rounded">
                    <th class="p-2 hidden md:block">Order ID</th>
                    <th class="p-2">Order Date  </th>
                    <th class="p-2 hidden md:block">Phone</th>
                    <th class="p-2">Order Delivery  </th>
                    <th class="p-2">Order Status</th>
                    <th class="p-2">Actions</th>
                </thead>
                <?php 

                foreach($orders_info as $order){
                     view('components/orderRow.php', [
                        'id' => $order['ville'],
                        'customer' => $order['dateCommande'],
                        'products' => $order['telephone'],
                        'date' => $order['dateLivraison'],
                        'status' => $order['status'],
                        'action' => $order['idCommande']
                     ]);
                }
                ?>
                
            </table>
        </main>
    </section>

<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>