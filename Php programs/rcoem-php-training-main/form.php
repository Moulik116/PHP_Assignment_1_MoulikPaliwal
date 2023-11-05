<?php
require 'functions.php';
?>
<div>My name is <?= $_POST['name'] ?>. My favorite color is 
<?php if ($_POST['gender'] == 'male'): ?>
    blue.
<?php else: ?>
    pink.
<?php endif; ?>
    <?php if (isset($_POST['subjects'])): ?>
        My favorite subjects are: 
        <?= implode(', ', $_POST['subjects']); ?>.
    <?php endif; ?>
    I live in <?= $_POST['city']; ?>.
</div>

<?php dump($_POST); ?>