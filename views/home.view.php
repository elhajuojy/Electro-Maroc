<?php view('partials/header.php',
[
    'title' => 'Eelectro Maroc',
    'description' => 'This is the home page'
]
); ?>

<body class="bg-gray-200">
    <section class="p-7 m-auto grid justify-center items-center ">
        <?php $name; ?>
        <img class="m-auto " src="assets/images/Logo.svg" alt="">
        <p class=" text-center text-black">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, totam. Error, voluptas officia? Iusto praesentium quo dolorum enim, voluptates ut delectus eum aliquam reprehenderit. Debitis nostrum eligendi sequi fugiat recusandae!
        </p>
    </section>
</body>


<?php view('partials/footer.php',[
    'scripts' => [
        'assets/js/main.js'
    ]
]); ?>
