<?php view(
    'partials/header.php',
    [
        'title' => 'Eelectro Maroc',
        'description' => 'This is the home page',
        // 'base_dir'=>$base_dir 
    ]
); ?>
<?= view('partials/adminNav.php') ?>



<div class="lg:w-[84%] ml-auto container ">
    <form action="" method="POST" enctype="multipart/form-data">
        <section class="p-10 pb-1 bg-gray-50 ">
            <header class="add-product-title flex justify-between ">
                <div class="product-title flex gap-4  items-center ">
                    <div class="icon text-green-500">
                        <a href="/admin-products">
                        <i class="fa-solid fa-arrow-left cursor-pointer"></i>
                        </a>
                    </div>
                    <?php 
                        // dd($product);
                    ?>
                    <h1 class="text-2xl font-medium"><?=$product[0]->nom== ""? 'Product Name' : $product[0]->nom?> </h1>
                    <div class="product-status">
                        <p class="cursor-pointer text-xs font-medium text-white border-2 rounded-full px-2 py-1 bg-blue-400">Published</p>
                    </div>
                </div>
                <div class="actions flex justify-center items-center gap-2">
                    <button class="border-2 text-sm text-gray-600 font-medium border-gray-400 px-2 py-1 rounded">
                        More actions
                        <i class="fa-regular fa-angle-down"></i>
                    </button>
                    
                    <button type="submit" name=<?= $product[0]->nom ? 'Update' : 'Save' ?>  class="bg-green-500 text-sm hover:bg-green-600 hover:shadow-sm ease-in duration-200 text-white px-5 py-[6px] rounded">
                        <?= $product[0]->nom ? 'Update' : 'Save' ?>
                    </button>
                </div>
            </header>
            <menu>
                <ul class="flex justify-between p-6 items-center w-[50%] text-gray-700 font-medium">
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/products.svg" alt="">
                        <p class=" underline underline-offset-[10px]">Overview </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/products.svg" alt="">
                        <p class="">Acivity </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/orders.svg" alt="">
                        <p>Comman information </p>
                    </li>
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="assets/images/icons/users.svg" alt="">
                        <p> Internal info </p>
                    </li>
                </ul>
            </menu>
        </section>
        <main class="create-products p-10 w-[80%]">
            <div class="header-content">
                <p class="text-xl text-gray-700">General information</p>
                <span class="opacity-50">Maroc/safi</span>
            </div>
            <div class="divider">
                <hr class="border-2 border-gray-200 my-6">
            </div>
            <div class="basic-info flex w-full  gap-2 ">
                <div class="product-name min-w-md">
                    <label for="product-name" class="text-gray-700">Product name</label>
                    <input type="text" name="product-name" id="product-name" value="<?=$product[0]->nom ?? ''?>" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
                <div class="product-name min-w-md">
                    <label for="product-name" class="text-gray-700">Product Referance </label>
                    <input type="text" name="product-reference"  value="<?=$product[0]->REFERENCE ?? ''?>" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
            </div>
            <div class="code_barre max-w-md">
                <label for="code-barre" class="text-gray-700">Code barre</label>
                <input type="text" name="code-barre" value="<?=$product[0]->code_barre ?? ''?>"  id="code-barre" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
            </div>

            <div class=" bg-slate-400 h-[2px]  opacity-50 my-7 w-full">
            </div>
            <div class="products-photos">
                <header class="flex justify-between">
                    <div class="">
                        <p class="text-3xl font-medium text-gray-700 ">Product Photos
                            <span class="Badge">
                                <span class="Badge__badge text-sm opacity-40">4</span>
                            </span>
                        </p>
                        <p>
                            <span class="text-gray-700">Add photos of your product</span>
                            <span class="text-gray-400"> (optional)</span>
                        </p>
                    </div>
                    <div class="get-more-inspration">
                        <p class="text-green-500">Get more inspiration</p>
                    </div>
                </header>
                <div class="products-img-container flex gap-4" >
                    <div id="uploadImagePreview" class=" flex gap-4">

                    </div>
                    <div class="product-img w-32 h-52 p-auto grid items-center">
                        <img  src= <?=$product[0]->image ==''? "http://flxtable.com/wp-content/plugins/pl-platform/engine/ui/images/image-preview.png" : $product[0]->image ?> class="w-full" alt="">
                        <input type="text" hidden name="image"  value=<?=$product[0]->image??''?> >
                    </div>
                    <div onclick="selectImage()" class="add-product-img w-32 rounded border-green-500 h-52 border-dotted border-2 grid place-content-center justify-center  ">
                        <div class="add-product-icon cursor-pointer  bg-green-500 w-16 h-16 rounded-[50%] grid place-content-center ml-3">
                            <span class="text-white text-2xl">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </div>
                        <p class="text-base text-gray-900 pt-4">Add Photos</p>
                    </div>
                </div>
                <input type="file" name="fileUpload" id="file" style="opacity: 0" class="hidden">
            </div>
            <div class="description">
                <label for="product-name" class="text-gray-700">Description</label>
                <textarea name="description" id="product-name" class="w-full resize-none border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" rows="5"><?=$product[0]->description ?? ''?></textarea>
            </div>
            <div>
                <label for="Categories">Categories</label>
                <select name="Categories" id="Categories" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie->idCategorie ?>"><?= $categorie->nom ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- <div class="categories">
                <label for="product-name" class="text-gray-700">Categories</label>
                <div class="categories-list flex gap-2 border-2 my-2 p-3 rounded ">
                    <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                        <p class="text-gray-700">Category 1</p>
                        <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                    </div>
                    <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                        <p class="text-gray-700">Category 2</p>
                        <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                    </div>
                    <div class="category flex gap-2 items-center justify-center border-2 border-gray-300 rounded px-2 py-1">
                        <p class="text-gray-700">Category 3</p>
                        <span class="text-red-400 cursor-pointer hover:text-red-500"><i class="fa-solid fa-times"></i></span>
                    </div>
                </div>
                <p class="opacity-50 text-sm">add more categories here ...</p>
                <button class="add-category flex bg-blue-500 ease-in duration-150 hover:bg-blue-600 hover:shadow-sm px-2 py-2 rounded mt-4">
                    <span class="text-white pr-2"><i class="fa-solid fa-plus"></i></span>
                    <p class="text-white">Add category</p>
                </button>
            </div> -->
            <div class="flex w-full m-auto gap-10 py-5">
                <div class="product-name">
                    <label for="product-name" class="text-gray-700">Prix offere</label>
                    <input type="number" name="prix-offere" value="<?=$product[0]->prix_offer ?? ''?>" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
                <div class="product-name">
                    <label for="product-name" class="text-gray-700">Produit Quntite</label>
                    <input type="number" name="quntite" value="<?=$product[0]->quantite ?? ''?>" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>

            </div>
            <div class="product-prices flex w-full m-auto  py-5 gap-10">
                <div class="product-name">
                    <label for="product-name" class="text-gray-700">Prix Achate </label>
                    <input type="number" value="<?=$product[0]->prix_achat ?? ''?>" name="prix-achate" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
                <div class="product-name">
                    <label for="product-name" class="text-gray-700">Prix final </label>
                    <input type="number" value="<?=$product[0]->prix_final ?? ''?>" name="prix-final" id="product-name" class="w-full border-2 border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>

            </div>
            <div class="Status w-40 ">
                <label for="status" class="block mb-2 text-sm font-medium opacity-60">Select a Status</label>
                <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="active" 
                        <?php 
                            if(get('id')){
                                echo $product[0]->status=="active" ? 'selected' :'' ?? '' ;
                            }else{
                                echo 'selected';
                            }
                        ?>
                    >Active</option>
                    <option value="inactive" 
                        <?php 
                            if(get('id')){
                                echo $product[0]->status=="active" ? '' :'selected' ?? '' ;
                            }
                        ?>
                    >Inactive</option>
                </select>
            </div>

        </main>
    </form>
</div>


<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/createProduct.js"></script>'
]);

// <?=$product[0]->status=="active" ? 'selected' :'' ?? '' ?>
 <!-- <?=$product[0]->status=="active" ? '' :'selected' ?? ''?> -->