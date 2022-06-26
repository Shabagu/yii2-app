<h1>Action Index</h1>
<p>Тема страницы: <?= $type ?></p>
<p>Жанр: <?= $genre ?></p>
<p>Группы:</p>
<?php
//    print_r($bands);
    foreach ($bands as $band) {
        echo $band . '<br>';
    }

    echo "<br><p>$id</p>";
?>
