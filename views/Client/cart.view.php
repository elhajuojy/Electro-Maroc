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


<section class="login-container w-[90%] px-12 m-auto">
    <main class="container m-auto">
        <?php view('partials/routeGuide.php', ['route' => 'Home ›  Cart']); ?>
        <h1 class="text-3xl text-gray-800 font-semibold">Shopping Cart </h1>
    </main>

    <section class="cart-container container-lg my-4  ">
        <div class="title">
            <div class="cart-content grid  md:grid-cols-2 lg:grid-cols-3 gap-3 justify-between">
                <div class="cart-items col-span-2">
                    <?= Widget("lineBreak") ?>
                    <div class="cart-headers flex justify-around mt-6">
                        <div class="product">item</div>
                        <div class="title hidden md:block">title</div>
                        <div class="price pl-24">Price</div>
                        <div class="quantity">Quantity</div>
                        <div class="total">Total</div>
                    </div>
                    <?php 

                        for($i = 0; $i < count($products); $i++){
                            echo Widget("CartItem", [
                                'product' => $products[$i],
                                'cart' => $cart[$i]
                            ]);
                            echo Widget("lineBreak") ;
                            
                        }
                        
                    ?>
                    <div class="action w-full mt-5 flex justify-between">
                        <div class="div">
                        <button class="rounded-full text-gray-500 font-medium text-xs border-[3px] py-1 px-2">
                            <a href="/">Contunie Shopping</a>
                        </button>
                        <button class="rounded-full text-white bg-black font-medium text-xs  py-1 px-2">
                            Clear Shopping Cart
                        </button>
                        </div>
                        <button class="rounded-full text-white bg-black font-medium text-xs  py-1 px-2 ">
                            Update Shopping Cart
                        </button>
                        
                    </div>
                </div>
                <div class="summary m-auto bg-blue-100 p-6 max-w-md rounded shadow">
                    <p class="mt-2 text-2xl font-medium text-gray-800">Summary</p>
                    <p class="mt-2 opacity-50">Estimate Shipping and Tax</p>
                    <p class="mt-2 text-sm opacity-40 w-[70%]">
                        Enter your destination to get a shipping estimate.
                    </p>
                    <p class="mt-6">
                        Apply Discount Code
                    </p>
                    <hr class="bg-color-7 my-2">
                    
                    <div class="order-total flex justify-between mt-6">
                        <p class="text-xl font-medium">Order Total</p>
                        <p class="text-xl font-medium">$ <?=$totalOrder?> </p>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button onclick="sweetAlertWithCheck(<?=$_SESSION['id']?>)" class="bg-blue-700  ease-in duration-200 hover:bg-blue-800  text-white font-base w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Proceed to Checkout
                        </button>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button class="bg-yellow-500  ease-in duration-200 hover:bg-orange-600   w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Check with PayPal
                            <i class="fa-brands fa-paypal"></i>
                        </button>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button class=" ease-in duration-200  border-2 border-sky-300 w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Check Out with Multiple Addresses
                        </button>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>
</section>

<?php view('partials/footer.php',[

'scripts' => ' <script src="assets/js/confirmOrder.js"></script>'
]); ?>