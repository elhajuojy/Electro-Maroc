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

                    for ($i = 0; $i < count($products); $i++) {
                        echo Widget("CartItem", [
                            'product' => $products[$i],
                            'cart' => $cart[$i]
                        ]);
                        echo Widget("lineBreak");
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
                        <p class="text-xl font-medium">$ <?= $totalOrder ?> </p>
                    </div>
                    <div class="checkout-btn w-full mt-6 rounded m-auto">
                        show the form to fill the inofrmation of the client
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" onclick="" class="bg-blue-700  ease-in duration-200 hover:bg-blue-800  text-white font-base w-full rounded-full py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
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

    <!-- Main modal -->
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900"> 
                        Confirm your order by filling the form
                    </h3>
                    <form id="order-information-form" class="space-y-6" action="" method="POST">
                        <div class="flex gap-1">
                        <div>
                            <label for="nom_complete" class="block mb-2 text-sm font-medium text-gray-900 ">Your nom complete</label>
                            <input type="text" name="nom_complete" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" nom complet" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Your phone</label>
                            <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" phone" required>
                        </div>

                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" email" required>
                        </div>
                        
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Your address</label>
                            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" address" required>
                        </div>
                        <div>
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 ">Your city</label>
                            <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" city" required>
                        </div>
                        <div>
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 ">Your country</label>
                            <input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" country" required>
                        </div>
                        <div>
                            <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 ">Your zip</label>
                            <input type="text" name="zip" id="zip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" zip" required>
                        </div>
                        <button  
                        type="submit"

                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        
                        >
                            Confirm your order
                        </button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php view('partials/footer.php', [

    'scripts' => ' <script src="assets/js/confirmOrder.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    '
]); ?>