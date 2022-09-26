<?php

$Negara = [
    ["Indonesia : D.K.I. Jakarta","Singapura : Singapura","Malaysia : Kuala Lumpur","Brunei : BandarSeri Begawan","Thailand : Bangkok","Laos : Vientiane","Filipina : Manila","Myanmar : Naypyidaw"]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>daftar negara ASEAN dan Ibukota :</title>
    </head>
    <body>
        <h1>daftar negara ASEAN dan ibukota :</h1>
        
        <?php foreach( $Negara as $ibukota ) : ?>
        <ul>
            <li><?php echo $ibukota[0]; ?></li>
            <li><?php echo $ibukota[1]; ?></li>
            <li><?php echo $ibukota[2]; ?></li>
            <li><?php echo $ibukota[3]; ?></li>
            <li><?php echo $ibukota[4]; ?></li>
            <li><?php echo $ibukota[5]; ?></li>
            <li><?php echo $ibukota[6]; ?></li>
            <li><?php echo $ibukota[7]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>