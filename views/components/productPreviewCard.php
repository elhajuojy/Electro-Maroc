<div id="<?=$id?>" class="product text-gray-600 flex items-center justify-between">
    <div class="flex items-center ">
        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    </div>
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