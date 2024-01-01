<!doctype html>
<html lang="en">

<head>
    <title>Hungry Partner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <?php
        include('auth/config.php');
        $recipes = getdetailtrend();
        ?>
    </div>
    <nav class="navbar navbar-light" style="background-color: #7E30E1">
        <span class="navbar-brand mb-0 h1 text-white">
            <?= $recipes->nama_menu ?>
        </span>
    </nav>


    <div class="container pt-5">
        <div>
            <img src="<?= $recipes->foto ?>" alt="<?= $recipe['nama_menu']?>" width="500">
            <h2 style="font-size: 15px" class="pt-5" >bahan-bahan yang diperlukan</h2>
            <?= $recipes->bahan ?>
            <h2 style="font-size: 15px">cara membuat</h2>
            <?= $recipes->cara ?>

        </div>
    </div>

</body>

</html>