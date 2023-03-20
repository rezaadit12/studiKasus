<?php

$max = 0;

for ($i = 1; $i <= 100; $i++) {
    $input = $i;
    if ($input > $max) {
        $max = $input;
    }
}
echo "Bilangan terbesar adalah $max";

?>
