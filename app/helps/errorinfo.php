<?php if (count($errMsg) > 0): ?>
    <ul>
        <?php foreach ($errMsg as $error): ?>
            <li><p><?=$error; ?></p></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>