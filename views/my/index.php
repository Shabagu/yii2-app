<h1>Action Index</h1>
<p>Жанр: <?= $genre ?></p>
<p>Группы:</p>
<?php
//    print_r($bands);
    foreach ($bands as $band) {
        echo $band . '<br>';
    }
    echo $id;
?>

