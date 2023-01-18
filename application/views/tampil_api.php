<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data json</title>
</head>
<body>
    <div class="hed">
        <h2>Merubah format json</h2>
    </div>
    <div class="biodata" style="line-height: 0.5;">
        <img src="https://image.tmdb.org/t/p/w500<?= $biodata['poster_path'] ?>" alt="" style="width: 80px;">
        <h5>Judul Fim : <?= $biodata['name'] ?></h5>
        <h5>Rating : <?= $biodata['average_rating'] ?></h5>
        <h5>Deskripsi : <?= $biodata['description'] ?></h5>
    </div>
</body>
</html>