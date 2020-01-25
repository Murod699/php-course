<?php
    include 'tests.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="POST">
        <?php foreach ($tests AS $index => $test): ?>
        <div>
            <div><b><?=$index+1?>) <?= $test['question'] ?></b></div>
            <?php foreach($test['answers'] as $key => $answer): ?>
            <label>
                <input type="radio" name="answer[<?=$index?>]" value="<?= $key ?>"> 
                <?= $answer ?>
            </label>
            <br>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
        <hr>
        <button type="submit">Tekshirish</button>
    </form>
</body>
</html>