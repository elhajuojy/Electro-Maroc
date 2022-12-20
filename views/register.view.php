<?php view(
    'partials/header.php',
    [
        'title' => 'Register || Electro Maroc',
        'description' => 'This is the register page'
    ]
); ?>

<?php view('partials/banner.php'); ?>


<section class="reigster container m-auto mt-20">
<form method="POST" class="bg-color-1 shadow-sm rounded px-8 pt-6 pb-8 h-full">
    <h3 class="mb-2 text-2xl font-bold opacity-75">New Customers ?</h3>
    <div class="basic-info md:flex w-full justify-between gap-4 flex-shrink">
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
                Username
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" value="<?= $_POST['username'] ?? '' ?>" type="text" placeholder="Username">
            <?php if (isset($errors['username'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['username'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a username.</p>
            <?php endif; ?>
        </div>
        
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="nom_complet">
                nom_complet
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom_complet" name="nom_complet" value="<?= $_POST['nom_complet'] ?? '' ?>" type="text" placeholder="nom_complet">
            <?php if (isset($errors['nom_complet'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['nom_complet'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a nom_complet.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="basic-info md:flex w-full justify-between gap-4 flex-shrink">
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                email
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>" type="text" placeholder="email">
            <?php if (isset($errors['email'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a email.</p>
            <?php endif; ?>
        </div>
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="telephone">
                telephone
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telephone" name="telephone" value="<?= $_POST['telephone'] ?? '' ?>" type="text" placeholder="telephone">
            <?php if (isset($errors['telephone'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['telephone'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a telephone.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="basic-info md:flex w-full justify-between gap-4 flex-shrink">
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="adresse">
                adresse
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" name="adresse" value="<?= $_POST['adresse'] ?? '' ?>" type="text" placeholder="adresse">
            <?php if (isset($errors['adresse'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['adresse'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a adresse.</p>
            <?php endif; ?>
        </div>
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="ville">
                ville
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ville" name="ville" value="<?= $_POST['ville'] ?? '' ?>" type="text" placeholder="ville">
            <?php if (isset($errors['ville'])) : ?>
                <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['ville'] ?></p> -->
                <p class="text-red-500 text-xs italic">Please choose a ville.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">
            Password
        </label>
        <input class="shadow-sm appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
        <?php if (isset($errors['password'])) : ?>
            <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p> -->
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        <?php endif; ?>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline" type="submit" name="register">
            Create An Account
        </button>
        <a class="inline-block align-baseline font-semibold text-sm text-blue-500 hover:text-blue-800" href="/login">
            Do you have an account?
        </a>
    </div>
</form>
</section>


<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>