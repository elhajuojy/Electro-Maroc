<div id="<?=$id?>" class="product text-gray-600 flex items-center justify-between">

    <div class="product-img  flex items-center gap-4 min-w-[200px]">
        <img src="<?= $image ?>" class=". w-28 mr-6" alt="">
        <div class=" font-medium content w-[200px]">
            <p class=" text-sm hidden md:block"><?= $description ?? 'Cara RN sweat ' ?></p>
            <p class="text-xs text-gray-500">quantite : <?= $quantity ?></p>
        </div>
    </div>
    <div class="product-info max-w-sm hidden md:block">
        <p class="font-medium text-base">
            <?= $title ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.' ?>
        </p>
    </div>
    <div class="product-price">
        <p class="text-base font-medium ">
            <span class="text-gray-500">price : </span> <?= $price ?? '1000' ?> DH
        </p>
    </div>
    <div class="product-code">
        <p class="text-base font-medium "><span class="">code : </span> <?=$code_barre?></p>
    </div>

    <div class="" onclick="changeProductStatus(<?=$id?>)">
        <p class="text-sm product-status cursor-pointer font-medium text-gray-500  border-2 rounded-full px-4 py-2 bg-slate-300"><?=$status?></p>
    </div>
    <a href="/admin-createProduct?id=<?=$id?>">
        <div class="" onclick="UpdateProductStatus(<?=$id?>)">
            <p class="text-sm product-status cursor-pointer font-medium text-gray-500 border-2 rounded-full px-4 py-2 bg-slate-300">Update </p>
        </div>
    </a>

</div>