<div class="nav w-full shadow-sm ">
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
        <?php echo  isset($_SESSION['client'])? '<a href="/profile">
            <img src="/assets/images/Profile-img.png" alt="profile">
        </a>':''?>
    </div>
</nav>
</div>