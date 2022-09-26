<?php

$awal = ["indonesia","singapura","malaysia","brunei","thailand"];
$baru = ["indonesia","singapura","malaysia","brunei","thailand","laos","filipina","myanmar"];

?>
<html>
    <head>
        <title>latihan 4b</title>
    </head>
    <body>
        <h2>Daftar Negara ASEAN Awal :</h2>
        <?php
        for ($i=0; $i < count($awal); $i++) { 
            echo "<li>$awal[$i]</li>";
        }
        ?>
         <h2>Daftar Negara ASEAN Baru :</h2>
        <?php
        for ($j=0; $j < count($baru); $j++) { 
            echo "<li>$baru[$j]</li>";
        }
        ?>
    </body>
</html>
