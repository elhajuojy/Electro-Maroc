<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page'
    ]
); ?>


<?php view('partials/banner.php'); ?>
<?php view('partials/navbar.php'); ?>
<section class=" m-auto grid justify-center container items-center  px-4 md:px-0">
    <div class="home-bg">
        <img src="assets/images/home/bg-msi.png" alt="msi laptop">
    </div>
    <div class="new-products">
        <div class="title flex justify-between py-4">
            <h4 class="text-2xl font-bold">New Products</h4>
            <a href="/products" class="text-color-3 underline">See All New Products</a>
        </div>
        <div class="products-container flex justify-between w-full flex-wrap justify-items-center m-auto gap-4">
            <?php foreach($products as $product): ?>
                <?php 
                    if($product->status == "active"){
                        echo Widget('newProductCard', [
                            'id' => $product->idProduit,
                            'quantity' => $product->quantite,
                            'img' => $product->image,
                            'title' => $product->nom,
                            'price' => $product->prix_final,
                            'oldPrice' => $product->prix_achat,
                            'discount' => '10%',
                            'rating' => '4.5',
                            'reviews' => '(10)',
                            'link' => '/product/'.$product->idProduit,
                        ]) ;
                    }    
                ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="my-6 zip-content-divider flex justify-center bg-color-1 container w-full  p-2 gap-2">
        <img src="assets/images/home/zipIcon.svg" alt="">
        <div class="line w-1 h-8 rounded bg-color-4">
        </div>
        <p><strong>own</strong> it now, up to 6 months interest free <a href="/" class="text-color-4 underline">learn more</a></p>
    </div>
    <div class="msi-suggestions flex gap-4 my-7">
        <p>MSI GS Series</p>
        <p>MSI GT Series</p>
        <p>MSI GL Series</p>
        <p>MSI GE Series</p>
    </div>
    <div class="custom-build-container flex flex-wrap justify-between ">
        
        <div class=" custom-build w-72 max-w-[234px] text-color-1 grid items-center justify-center text-center">
            <div></div>
            <h1 class="text-3xl">Custome Builds</h1>
            <a href="#" class="underline">See All Products</a>
        </div>
        <?= Widget('newProductCard') ?>
        <?= Widget('newProductCard') ?>
        <?= Widget('newProductCard') ?>
        <?= Widget('newProductCard') ?>
    </div>
    <div class="my-6">
    </div>
    <div class="companies-supporter flex m-auto container w-full flex-wrap">
        <img src="assets/images/companies/Frame 22.png" alt="">
        <img src="assets/images/companies/Frame 23.png" alt="">
        <img src="assets/images/companies/Frame 24.png" alt="">
        <img src="assets/images/companies/Frame 25.png" alt="">
        <img src="assets/images/companies/Frame 26.png" alt="">
        <img src="assets/images/companies/Frame 27.png" alt="">
        <img src="assets/images/companies/Frame 34.png" alt="">
    </div>
    <div class="my-4">
    </div>
    <div class="blog container">
        <h1 class="text-xl pb-4 font-bold">Follow us on Instagram for News, Offers & More</h1>
        <div class="blog-cards  flex flex-wrap gap-4 justify-center">
            <?= Widget('blogCard') ?>
            <?= Widget('blogCard') ?>
            <?= Widget('blogCard') ?>
            <?= Widget('blogCard') ?>
        </div>
    </div>
</section>

<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>