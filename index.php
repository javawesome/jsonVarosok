<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3.css">
    <title>JSON példák</title>
    <style>
        .my-container {
            width: 700px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="w3-container my-container">
        <?php

        echo '<h1 class="w3-text-black">A világ legnagyobb városai</h1>';
        $getfile = file_get_contents("./varosok.json");
        $data = json_decode($getfile, false);

        echo '<table class="w3-table w3-striped w3-border w3-border-teal">';
        echo "<tr class='w3-teal'>";
        echo '<th>Helyezés</th>';
        echo '<th>Város</th>';
        echo '<th>Ország</th>';
        echo '<th>Népesség</th>';
        echo '</tr>';

        foreach ($data->varosok as $obj) {
            echo '<tr>';
            echo "<th>$obj->helyezes</th>";
            echo "<td>$obj->varos</td>";
            echo "<td>$obj->orszag</td>";
            echo "<td class='phone'>$obj->nepesseg</td>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
</body>

</html>