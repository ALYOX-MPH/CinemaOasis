<?= $header ?>
<?php if (!isset($params[0]) || strtolower($params[0]) !== 'login') { ?>
<?= $navbar; ?>
<?= $sidebar; ?>
<?php } ?>
<?= $content; ?>
<?= $footer; ?>

