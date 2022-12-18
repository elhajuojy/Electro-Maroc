<?php view('partials/header.php', ['title' => 'Page Not Found', 'description' => 'This is the 404 Page']); ?>
<section class="w-full h-full bg-color-8">
<div class="flex flex-col justify-center items-center h-screen text-white gap-2">
    <h1 class="text-9xl font-bold">404</h1>
    <h2 class="text-3xl font-bold">Page Not Found</h2>
    <a href="/" class="text-2xl font-bold underline">Go Back</a>
</div>
</section>
<?php view ('partials/footer.php'); ?>