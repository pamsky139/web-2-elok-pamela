<?php

$nilai = array(
    array("Negara", "Indonesia", "singapura", "malaysia", "brunei", "thailand", "laos", "filipina", "myanmar"),
    array("Ibu Kota", "D.K.I Jakarta", "singapura", "kuala lumpur", "bandar seri begawan", "bangkok", "vientiane", "manila", "naypyidaw"),
    array("Kode Telepon", "+62", "+65", "+60", "+673", "+66", "+856", "+63", "+95")
);

?>
<html>

<head>
    <title>Belajar Membuat Tabel HTML</title>
</head>

<body>

    <table border="1" cellpadding="5">
        <tr>
            <th><?php echo $nilai[0][0] ?></th>
            <th><?php echo $nilai[1][0] ?></th>
            <th><?php echo $nilai[2][0] ?></th>
        </tr>
        <tr>
            <td><?php echo $nilai[0][1] ?></td>
            <td><?php echo $nilai[1][1] ?></td>
            <td><?php echo $nilai[2][1] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][2] ?></td>
            <td><?php echo $nilai[1][2] ?></td>
            <td><?php echo $nilai[2][2] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][3] ?></td>
            <td><?php echo $nilai[1][3] ?></td>
            <td><?php echo $nilai[2][3] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][4] ?></td>
            <td><?php echo $nilai[1][4] ?></td>
            <td><?php echo $nilai[2][4] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][5] ?></td>
            <td><?php echo $nilai[1][5] ?></td>
            <td><?php echo $nilai[2][5] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][6] ?></td>
            <td><?php echo $nilai[1][6] ?></td>
            <td><?php echo $nilai[2][6] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][7] ?></td>
            <td><?php echo $nilai[1][7] ?></td>
            <td><?php echo $nilai[2][7] ?></td>
        </tr>
        <tr>
            <td><?php echo $nilai[0][8] ?></td>
            <td><?php echo $nilai[1][8] ?></td>
            <td><?php echo $nilai[2][8] ?></td>
        </tr>
    </table>

</body>

</html>