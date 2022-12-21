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

    <section class="cart-container container-lg mt-4  ">
        <div class="title">
            <!-- <h1 class="text-xl text-gray-800  font-medium">Your Cart</h1> -->

            <!-- <?= Widget("lineBreak") ?> -->
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
                    <?= Widget("CartItem", [
                        // 'cart' => $cart,
                    ]) ?>
                    <?= Widget("lineBreak") ?>
                    <?= Widget("CartItem", [
                        // 'cart' => $cart,
                    ]) ?>
                    <?= Widget("lineBreak") ?>

                </div>
                <div class="summary m-auto  bg-blue-100 p-6 max-w-md rounded shadow">
                    <p class="mt-2 text-2xl font-medium text-gray-800">Summary</p>
                    <p class="mt-2 opacity-50">Estimate Shipping and Tax</p>
                    <p class="mt-2 text-sm opacity-40 w-[70%]">
                        Enter your destination to get a shipping estimate.
                    </p>
                    <p class="mt-6">
                        Apply Discount Code
                    </p>
                    <hr class="bg-color-7 my-2">
                    <div class="subtotal flex justify-between">
                        <p class="text-base font-medium">Subtotal</p>
                        <p class="text-base font-medium">$13,047.00</p>
                    </div>
                    <div class="shipping flex justify-between">
                        <p class="text-base font-medium">Shipping</p>
                        <p class="text-base font-medium">$13,047.00</p>
                    </div>
                    <div class="tax flex justify-between">
                        <p class="text-base font-medium">Tax</p>
                        <p class="text-base font-medium">$13,047.00</p>
                    </div>
                    <div class="order-total flex justify-between mt-6">
                        <p class="text-xl font-medium">Order Total</p>
                        <p class="text-xl font-medium">$13,047.00</p>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button class="bg-blue-700 hover:bg-blue-700 text-white font-base w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Proceed to Checkout
                        </button>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button class="bg-yellow-500  hover:bg-orange-600   w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Check with PayPal
                            <i class="fa-brands fa-paypal"></i>
                        </button>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        <button class="  border-2 border-sky-300 w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
                            Check Out with Multiple Addresses
                        </button>
                    </div>
                    <!-- <div class="line">
                        <input type="text" class="w-[70%] border-2 border-gray-300 p-2 rounded" placeholder="Enter your code here">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Apply
                        </button>
                    </div> -->
                </div>
            </div>

        </div>
    </section>
</section>
<?php view('partials/footer.php'); ?>