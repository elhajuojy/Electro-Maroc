<?php echo `<div class="input">
    <label for="<?=$name??'' ?>" class="input-label"><?=$label??'' ?></label>
    <input type="<?=$type??'' ?>" name="<?=$name??'' ?>" id="<?=$name??'' ?>" class="input-field" placeholder="<?=$placeholder??'' ?>">
</div>`;?>