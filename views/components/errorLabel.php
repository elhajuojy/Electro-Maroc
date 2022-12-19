<?php if (isset($errors[$par])) : ?>
            <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
            <p class="text-red-500 text-xs mt-2 font-bold italic"><?= $errors[$par] ?></p>
<?php endif; ?>