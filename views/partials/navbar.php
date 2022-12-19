<div class="nav w-full shadow-sm  ">
    <nav class="w-full flex gap-4 container m-auto justify-around p-6 place-items-center ">
        <div class="logo">
            <a href="/">
                <img src="assets/images/Logo.svg" alt="logo">
            </a>
        </div>
        <div class="menu flex gap-4 place-items-center">
            <div class="menu-container hidden lg:block">
                <ul class="flex gap-4 font-bold text-emerald-900">
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Desktop PCs</a></li>
                    <li><a href="#">Networking Devices</a></li>
                    <li><a href="#">Printers & Scanners</a></li>
                    <li><a href="#">PC Parts</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn-rounded ">
                    Our Deals
                </button>
            </div>
        </div>
        <div class="nav-action flex gap-4 place-items-center">
            <a href="/search" class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="/cart" class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="profile-icon  cursor-pointer" id="profile-icon">
                <?php echo  isset($_SESSION['client']) ? '<p>
                    <img src="/assets/images/Profile-img.png" alt="profile">
                    </p>' : '<p><i class="fa-solid fa-user"></i></p>' 
                    ?>
                <div id="menu-profile" class="z-40 absolute hidden w-28 h-32 p-4  menu-profile rounded right-20 my-2  shadow border-rose-200  bg-slate-300 text-green-900 font-semibold">
                    <ul class="flex flex-col gap-4">
                        <li><?= $_SESSION['client']??'username' ?></li>
                        <?php echo isset($_SESSION['client']) ? '<li><a href="/logout">Logout</a></li>' : '<li><a href="/login">login</a></li>' ?>
                        <li><a href="/profile">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>