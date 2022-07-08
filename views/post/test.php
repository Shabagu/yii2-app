<?php
//    $this->title = 'Тестовая страница';
?>

<h1>Test Action (print comparison)</h1>

<?php

addBr(1);
echo '<p><b>print_r()</b></p>';
print_r($bands);

addBr(2);
echo '<p><b>var_dump()</b></p>';
var_dump($bands);

addBr(2);
echo '<p><b>debugPrint()</b></p>';
debugPrint($bands);
