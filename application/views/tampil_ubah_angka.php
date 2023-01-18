<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "<p> Soal nomor 3 mengubah deret angka</p>";
    echo "<pre>";
    
    $angka = 1225441;
    $ubah = str_split($angka);
    $data = count($ubah);

    // var_dump($ubah);
    // die;

    for($i = 0; $i <= $data-1; $i++) {
        echo $ubah[$i];
        for($j = $data-2; $j >= $i; $j--) {
            echo "0";
        }
        echo "<br>";
    }
    
    echo "</pre>";
    ?>
</body>
</html>