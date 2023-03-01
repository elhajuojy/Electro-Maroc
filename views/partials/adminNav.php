<nav class="h-screen fixed  hidden lg:block w-60 shadow-lg min-w-min bg-slate-800 text-color-1">
        <a href="/">
            <div class="logo flex p-6 gap-4 justify-center items-center place-content-center">
                <img src="assets/images/Logo.svg" alt="">
                <p>Electro Matoc</p>
            </div>
        </a>
        <div class="w-[80%] h-[2px] m-auto rounded bg-gray-600"></div>
        <div class="links flex flex-col gap-4 p-6">
            <a href="/admin" class="flex gap-4 items-center 
            <?php echo (urlIs('/admin'))?' border p-2 rounded border-gray-300':'' ?>
            hover:text-gray-300">
                <img src="assets/images/icons/dashboard.png" alt="">
                <p>Dashboard</p>
            </a>
            <a href="admin-products" class="flex gap-4 items-center 
            <?php echo (urlIs('/admin-products'))?' border p-2 rounded border-gray-300':'' ?>
            <?php echo (urlIs('/admin-createProduct'))?' border p-2 rounded border-gray-300':'' ?>
             hover:text-gray-300">
                <img src="assets/images/icons/products.svg" alt="">
                <p>Products</p>
            </a>
            <a href="/admin-orders" class="flex gap-4 items-center 
            <?php echo (urlIs('/admin-orders'))?' border p-2 rounded border-gray-300':'' ?>
            hover:text-gray-300">
                <img src="assets/images/icons/orders.svg" alt="">
                <p>Orders</p>
            </a>
            <a href="/admin-users" class="flex gap-4 items-center 
            <?php echo (urlIs('/admin-users'))?' border p-2 rounded border-gray-300':'' ?>
            hover:text-gray-300">
                <img src="assets/images/icons/users.svg" alt="">
                <p>Users</p>
            </a>

            <a href="/admin-cateogry" class="flex gap-4 items-center 
            <?php echo (urlIs('/admin-cateogry'))?' border p-2 rounded border-gray-300':'' ?>
            hover:text-gray-300">
                <img src="assets/images/icons/users.svg" alt="">
                <p> 
                    Cateogry 
                </p>
            </a>
            <a href="#" class="flex gap-4 
            <?php echo (urlIs('/admin-settings'))?' border p-2 rounded border-gray-300':'' ?>
            items-center">
                <img src="assets/images/icons/settings.svg" alt="">
                <p>Settings</p>
            </a>
        </div>
        <div class="divider m-auto  top-0">
        </div>
        <div class="logout grid items-center h-6">
            <a href="/logout" class="flex gap-5 items-center text-white px-6  hover:text-gray-300">
                <img src="assets/images/icons/logout.svg" alt="">
                <p>Logout</p>
            </a>
        </div>
    </nav>