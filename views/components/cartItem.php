<!-- product item  -->
<?php 
$product = $product[0];
?>
<div id="<?=$product->idProduit?>" class="cart-item flex justify-between items-center">
                    <div class="cart-item-img">
                        <img src="<?=$product->image?>" alt="">
                    </div>
                    <div class="cart-item-title hidden md:block w-56">
                        <p class="text-sm">
                        <?= $product->nom ?>
                        </p>
                    </div>
                    <div class="cart-item-price">
                        <p>$ <?= $product->prix_final ?> </p>
                    </div>
                    <div class="cart-item-quantity w-20">
                        <div class="quantity-input border-2 p-2">
                            <!-- <button class="minus">-</button> -->
                            <input type="number" class="quantity w-10 font-bold" value="1" />
                            <button class="plus">+</button>
                        </div>
                    </div>
                    <div class="cart-item-total pl-6">
                        <p >$ <?= $product->prix_final ?></p>
                    </div>
                    <div class="cart-item-delete grid grid-cols-1 gap-2 my-auto ">
                        <button class="delete-btn border-2 p-2 hover:bg-slate-100 hover:shadow rounded-full">
                            <i class="fa-duotone fa-xmark"></i>
                        </button>
                        <button class="delete-btn border-2 p-2  hover:bg-slate-100 hover:shadow  rounded-full">
                            <i class="fa-light fa-pen"></i>
                        </button>
                    </div>
                </div>

                <!-- product -->