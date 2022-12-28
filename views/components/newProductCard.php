<a href="/products?id=<?=$id??'' ?>">
    <div class="new-product-card product-card w-72 max-w-[234px] hover:shadow hover:border-1 hover:border-gray-200 hover:cursor-pointer p-2 rounded ease-in duration-300  grid justify-center gap-4 m-auto mb-4">
        <div class="check flex gap-2 ml-[10%] place-items-center  text-color-9  ">
            <div class="rounded ">
                <!-- <i class="fa-solid fa-check"></i> -->
                <i class="fa-duotone fa-circle-check"></i>
            </div>
            <p>in stock <?=$quantity??'' ?> </p>
        </div>
        <div class="product-img m-auto">
            <img src=<?=$img??"assets/images/products/product-1.png" ?> alt="">
        </div>
        <div class="product-rate">
            <div class="rate flex gap-2">
                <div class="">
                    <i class="fa-solid fa-star" style="color:#E9A426 ; height:1px"></i>
                    <i class="fa-solid fa-star" style="color:#E9A426 ; height:1px"></i>
                    <i class="fa-solid fa-star" style="color:#E9A426 ; height:1px"></i>
                    <i class="fa-solid fa-star" style="color:#E9A426 ; height:1px"></i>
                    <i class="fa-solid fa-star" style="color:#CACDD8 ; height:1px"></i>
                </div>
                <div class="rate-review">
                    Reviews (4)
                </div>
            </div>
            <div class="product-discription w-[60] mt-2">
                <p> <?=$title??'Product title here '?></p>
            </div>
            <div class="product-price grid gap-1 mt-2">
                <p class="old-price line-through text-color-5">$<?=$price ??"299.99" ?></p>
                <p class="new-price text-xl">$<?=$oldPrice ??"199.99" ?></p>
                <!-- <p id="product-test">test</p> -->
                <input type="hidden" id="id-product" value="<?= $id ?? '0' ?>">
            </div>
        </div>
    </div>
</a>


<!-- 
'img' => $product->image,
'title' => $product->nom,
'price' => $product->prix_final,
'oldPrice' => $product->prix_achat,
'discount' => '10%',
'rating' => '4.5',
'reviews' => '(10)',
'link' => '/product/'.$product->idProduit, 
-->