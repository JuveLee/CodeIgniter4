<?php if (count($errors) > 0) : ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
