<form method="POST" class="bg-color-1 shadow-sm rounded px-8 pt-6 pb-8 h-full">
    <h3 class="mb-2">Registered Customers</h3>
    <p class="mb-2">If you have an account, sign in with your username </p>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
            Username
        </label>
        <input class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" value="<?= $_POST['username'] ?? '' ?>" type="text" placeholder="Username">
        <?php if (isset($errors['username'])) : ?>
            <!-- <p class="text-red-500 text-xs mt-2"><?= $errors['username'] ?></p> -->
            <p class="text-red-500 text-xs italic">Please choose a username.</p>
        <?php endif; ?>
    </div>
    <div class="mb-6">
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
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline" type="submit">
            Sign In
        </button>
        <a class="inline-block align-baseline font-semibold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Your Password?
        </a>
    </div>
</form>