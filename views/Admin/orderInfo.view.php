<?php view(
    'partials/header.php',
    [
        'title' => 'Admin Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>



<?= view('partials/adminNav.php') ?>
<main class="container  lg:w-[84%] w-full ml-auto">
    <section >
        <div class="commande-info bg-gray-100 rounded-md p-4">
            <h1 class="text-xl font-semibold mb-2">Commande info</h1>
            <div class="flex gap-6 justify-between">
            <p class="text-gray-700"><span class="font-medium">Commande ID:</span> <?= $orders_info[0]["commande_id"] ?></p>
            <p class="text-gray-700"><span class="font-medium">Date commande:</span> <?= $orders_info[0]["dateCommande"] ?></p>
            <p class="text-gray-700"><span class="font-medium">Date Livraison:</span> <?= $orders_info[0]["dateLivraison"] ?></p>
            </div>
        </div>
        <div class="user-info bg-gray-300 px-4 py-4 mt-8">
            <h1 class="text-xl font-semibold mt-4">user info </h1>
            <p class="mt-2">nom: <?= $orders_info[0]["nom"] ?></p>
            <p>email: <?= $orders_info[0]["email"] ?></p>
            <p>telephone: <?= $orders_info[0]["telephone"] ?></p>
            <p>adresse: <?= $orders_info[0]["adresse"] ?></p>
            <p>ville: <?= $orders_info[0]["ville"] ?></p>
            <p>code postal: <?= $orders_info[0]["codePostal"] ?></p>
        </div>
        <div class="bought-products mt-8">
            <h1 class="text-xl font-semibold mt-6 ">bought products </h1>
            <table class="w-full table-fixed mt-4">
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-2/5">product name</th>
                        <th class="px-4 py-2 w-2/5">proudct image</th>
                        <th class="px-4 py-2 w-1/5">product price</th>
                        <th class="px-4 py-2 w-1/5">product quantity</th>
                        <th class="px-4 py-2 w-1/5">product total price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders_info as $order) : ?>
                        <tr>
                            <td class="border px-4 py-2"><?= $order["nom"] ?></td>
                            <td class="border px-4 py-2"><img src="<?= $order["image"] ?>" alt="" class="w-12 h-12 m-auto"></td>
                            <td class="border px-4 py-2"><?= $order["prix_final"] ?></td>
                            <td class="border px-4 py-2"><?= $order["pc_quantite"] ?></td>
                            <td class="border px-4 py-2"><?= $order["prix_final"] * $order["pc_quantite"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="total-order mt-8 grid place-content-end  px-4 py-2">
            <h1 class="text-xl font-semibold">total order </h1>
            <p class="mt-2">Total  order:
                <?php foreach ($orders_info as $order) : ?>
                    <?php $total_order += $order["prix_final"] * $order["pc_quantite"] ?>
                <?php endforeach; ?>
                <?= $total_order ?> DH 
            </p>
        </div>
    </section>
</main>