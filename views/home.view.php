<?php view('partials/header.php',
[
    'title' => 'Eelectro Maroc',
    'description' => 'This is the home page'
]
); ?>

<body>
    <?= $name; ?>
    <img src="assets/images/Logo.svg" alt="">
</body>


<?php view('partials/footer.php',[
    'scripts' => [
        'assets/js/main.js'
    ]
]); ?>
