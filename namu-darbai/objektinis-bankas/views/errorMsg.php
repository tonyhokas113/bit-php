<?php if ($msg = Bank\App::getMessage()) : ?>
    <div class="<?= Bank\App::setClass() ?>">
        <?= Bank\App::setSvg() ?>
        <?= $msg ?>
    </div>
<?php endif ?>