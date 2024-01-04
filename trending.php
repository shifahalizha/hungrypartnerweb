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
<style>
    .hungry {
        font-size: 25px;
    }
</style>

<body>
    <div>
        <?php
        include('auth/config.php');
        $recipes = getalltrend();
        ?>
    </div>
    <div class="wrapper d-flex align-items-stretch">
        <?php
        include('sidebar.php');
        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row text-center text-white mb-5">
                <div class="col-lg-7 mx-auto">
                    <h1 class="display-4">Popular Recipes</h1>
                    <h2 class="mb-4" style="font-size: 20px;">you should try!</h2>
                </div>
            </div>
            <div class="row">
                <form action="trending.php" method="get">
                    <div class="row col-12 col-md-6 col-lg-12 mx-auto">
                        <div class="input-group input-group-sm mb-3">
                            <input name="search" type="text" class="form-control" placeholder="cari resep">
                            <button class="btn btn-outline-secondary" type="submit">cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <div class="row">
                    <?php foreach ($recipes as $recipe): ?>
                        <div class="col-lg-8 mx-auto">
                            <!-- List group-->
                            <ul class="list-group shadow">
                                <!-- list group item-->
                                <li class="list-group-item">
                                    <!-- Custom content-->
                                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                        <div class="media-body order-2 order-lg-1">
                                            <h5 class="mt-0 font-weight-bold mb-2"><a class="text-dark"
                                                    href="detailtrend.php?id=<?= $recipe['id'] ?>">
                                                    <?= $recipe['nama_menu'] ?>
                                                </a></h5>
                                            <p class="font-italic text-muted mb-0 small">
                                                <?= $recipe['caption'] ?>
                                            </p>
                                        </div><img src="<?= $recipe['foto'] ?>" alt="<?= $recipe['nama_menu'] ?>" width="200"
                                            class="ml-lg-5 order-1 order-lg-2">
                                    </div> <!-- End -->
                                </li> <!-- End -->
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>