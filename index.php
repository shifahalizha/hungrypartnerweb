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
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <div class="text-center p-t-136">
                    <a class="txt2" href="login/login.php" style="color:white">
                        have an account?
                        <i class="m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                <h1><a class="pt-2 text-center py-4 mb-5 hungry" style="color :white">hungry partner</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="home.php">home</a>
                    </li>
                    <li>
                        <a href="trending.php">trending food</a>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Resep</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="makanan.php">masakan indonesia</a>
                            </li>
                            <li>
                                <a href="westernfood.php">western food</a>
                            </li>
                            <li>
                                <a href="makananringan.php">makanan ringan</a>
                            </li>
                            <li>
                                <a href="dessert.php">dessert</a>
                            </li>
                            <li>
                                <a href="minuman.php">minuman</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>

                <div class="footer">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Welcome To Hungry Partner</h2>
            <p>Selamat datang di rumah resep kami, tempat di mana kelezatan dan kreativitas bercampur menjadi
                sebuah pengalaman kuliner yang tak terlupakan. Di sini, kami berbagi beragam resep yang telah
                kami uji dan sempurnakan, menjadikan setiap hidangan sebagai karya seni rasa. Dari hidangan
                sehari-hari hingga kreasi istimewa, setiap resep disusun dengan cinta dan perhatian terhadap
                detail. Kami tidak hanya berbagi langkah-langkah dalam memasak, tetapi juga cerita di balik
                setiap resep, menambahkan sentuhan pribadi yang membuat setiap hidangan menjadi lebih istimewa.
                Mari bergabung dalam petualangan kuliner ini, dan temukan inspirasi untuk menciptakan sajian
                lezat di dapur Anda sendiri. Selamat memasak dan menikmati setiap detik di meja makan bersama
                keluarga dan teman-teman!</p>
            <p>Kami tidak hanya berbagi langkah-langkah dalam memasak, tetapi juga cerita di balik
                setiap resep, menambahkan sentuhan pribadi yang membuat setiap hidangan menjadi lebih istimewa.
                Mari bergabung dalam petualangan kuliner ini, dan temukan inspirasi untuk menciptakan sajian
                lezat di dapur Anda sendiri. Selamat memasak dan menikmati setiap detik di meja makan bersama
                keluarga dan teman-teman!</p>

            <hr>

            <div class="container marketing">
            <h2 class="mb-4">Here's Some Recomendation</h2>
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                            <image xlink:href="images/makananringan.webp" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                        <h2 class="fw-normal">Makanan Ringan</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel.
                            This is the first column.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                            <image xlink:href="images/westernfood.webp" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                        <h2 class="fw-normal">Western Food</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                            second column.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                            <image xlink:href="images/indonesiafood.webp" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                        <h2 class="fw-normal">indonesian food</h2>
                        <p>And lastly this, the third column of representative placeholder content.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                                class="text-body-secondary">It’ll blow your mind.</span></h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                            exciting prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                            <image xlink:href="images/belanja.webp" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />

                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                                class="text-body-secondary">See for yourself.</span></h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                            of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                            <image xlink:href="images/gambarmasak.jpg" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                                class="text-body-secondary">Checkmate.</span></h2>
                        <p class="lead">And yes, this is the last block of representative placeholder content. Again,
                            not really intended to be actually read, simply here to give you a better view of what this
                            would look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                            <image xlink:href="images/makan2.jpg" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>