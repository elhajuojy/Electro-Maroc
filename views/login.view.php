<?php view('partials/header.php', [
    'title' => 'Login || Eelectro Maroc',
    'description' => 'This is login Page',
]); ?>

<?php view('partials/banner.php'); ?>
<?php view('partials/navbar.php'); ?>


<section class="login-container mx-6 md:mx-11 m-auto">
    <?php view('partials/routeGuide.php', ['route' => 'Home ›  Login']); ?>
    <h1 class="font-bold text-5xl opacity-80 my-4">Customer Login</h1>
    <div class="login-forms container">
        <div class="Registered-Customers-card grid gap-4 ">
            <div class="grid md:grid-cols-2 gap-4 container  justify-around justify-self-stretch">
                <div class="w-full">
                    <?= Widget("LoginForm",[
                        'errors' => $errors,
                    ]) ?>
                </div>
                <div class="new-Customer-card bg-color-1 p-6">
                    <h3 class="text-xl font-bold opacity-70">New Customers ?</h3>
                    <p>Creating an account has many benefits</p>
                    <ul class="list-disc px-4 opacity-60">
                        <li>Check out faster</li>
                        <li>Save multiple shipping addresses</li>
                        <li>Access your order history</li>
                        <li>Track new orders</li>
                        <li>Save items to your wish list</li>
                    </ul>
                    <button class="bg-blue-500 my-8 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline" type="button">
                        <a href="/register">Create an Account</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php view('partials/footer.php', [
    'scripts' => '
    <script src="assets/js/toggle.js"></script>
    ',
]); ?>