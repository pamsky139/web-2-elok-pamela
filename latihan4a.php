<?php

$balon = x["hijau", "kuning", "kelabu", "merah muda", "biru"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta chaset="UTF-8">
    <title>looping for array</title>
</head>
<body>
    <p>
    balonku ada lima<br>

    rupa-rupa warnanya<br>

    <?php
        for ($i = 0; $i < 4; $i++) {
        echo " $balon[$i]";

}

    ?> dan <?php echo $balon[4]; ?> <br>
    
    meletus balon <?php echo $balon[0]; ?> DOR!!<br>

    hatiku sangat kacau<br>

</p>


