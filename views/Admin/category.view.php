<?php view(
    'partials/header.php',
    [
        'title' => 'Users Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>

<?= view('partials/adminNav.php') ?>
<div class="lg:w-[84%] ml-auto container p-6">
    <!-- category crud here -->

    <div>
        <form action="" method="post" class="mt-4">
            <div class="flex gap-4">
                <div class="w-1/2">
                    <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">nom</label>
                    <input type="text" name="nom" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="<?= $updatedCategory->nom ?? '' ?>"

                    >
                </div>
                <div class="w-1/2">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <input type="text" name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="<?= $updatedCategory->description ?? '' ?>"
                    >
                </div>
                

            </div>
            
            <div class="mt-4">
                <?php
                if(!$id){
                    echo '<button class="bg-green-500  text-white px-4 py-2 rounded" type="submit">Add Category</button>';
                    echo '<input type="hidden" name="addCategory" value="addCategory">';
                }else{
                    echo '<button class="bg-green-500  text-white px-4 py-2 rounded" type="submit">Edit Category</button>';
                    echo '<input type="hidden" name="updateCategory" value="updateCategory">';
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                }
                ?>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <!-- <th class="px-4 py-2">Image</th> -->
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td class="border px-4 py-2"><?= $category->idCategorie ?></td>
                        <td class="border px-4 py-2"><?= $category->nom ?></td>
                        <td class="border px-4 py-2"><?= $category->description ?></td>
                        <!-- <td class="border px-4 py-2">
                            <img src="<?= $category->image ?>" alt="" class="w-20 h-20">
                        </td> -->
                        <td class="border px-4 py-2">
                                <a class="bg-blue-500  text-white px-4 py-2 rounded" href="/admin-cateogry?id=<?= $category->idCategorie ?>">Edit</a>
                            <form action="" method="post" class="inline">
                                <input type="hidden" name="idCategorie" value="<?= $category->idCategorie ?>">
                                <input type="hidden" name="deleteCategory" value="deleteCategory">
                                <button class="bg-red-500  text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php view(
    'partials/footer.php',
    [
        'title' => 'Users Eelectro Maroc',
        'description' => 'This is the Admin Dashboard '
    ]
); ?>
