<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css" />
        <link rel="stylesheet" href="assets\css\fontawesome-free\css\all.min.css" />
        <link rel="stylesheet" href="assets\css\style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <title>Data Editor</title>
    </head>
    <body>
        <!-- Menu Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand font-weight-bold" href="index.php">
                <i class="fa fa-fire"> </i>
                DATA EDITOR
            </a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cari.php">
                            <i class="fa fa-search"></i>
                            PENCARIAN EDITOR
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="editor.php">
                            <i class="fa fa-github"></i>
                            TAMPILKAN EDITOR
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">
                            <i class="fa fa-user"></i>
                            ABOUT ME
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Menu Navbar -->

        <!-- Card Data Editor -->
        <h1 class="display-1 text-light" style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Data Editor</h1>
        <div class="container">
            <div class="card-deck text-light" style="margin-left: auto; margin-right: auto; margin-bottom: 120px;">
                <div class="card">
                    <img class="card-img-top" src="assets/img/informatika.jpg" alt="Card image cap" />
                    <div class="card-body bg-dark">
                        <h5 class="card-title">Data Editor</h5>
                        <p class="card-text">Silahkan klik tombol di bawah untuk melihat Daftar editor yang ada.</p>
                        <a href="editor.php" class="btn btn-primary">OPEN</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/img/statistika.jpg" alt="Card image cap" />
                    <div class="card-body bg-dark">
                        <h5 class="card-title">Cari Editor</h5>
                        <p class="card-text">Silahkan klik tombol di bawah untuk mencari editor yang ada.</p>
                        <a href="cari.php" class="btn btn-primary">OPEN</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/img/kiky2.png" alt="Card image cap" />
                    <div class="card-body bg-dark">
                        <h5 class="card-title">About Me</h5>
                        <p class="card-text">Silahkan klik tombol di bawah untuk melihat halaman tentang saya.</p>
                        <a href="about.php" class="btn btn-primary">OPEN</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card Data Editor -->

        <script src="assets\bootstrap\js\jquery.min.js"></script>
        <script src="assets\bootstrap\js\bootstrap.min.js"></script>
        <script>
            let loading = '<img class="text-center" alt="loading......" class="ml-auto" src="assets\\img\\loading.gif" width="30%">';
            $(".result").html(loading);
            loadData();

            function loadData() {
                $.get("core/get.php?q=show", function (data) {
                    $(".result").html(data);
                });
            }
        </script>
        <script src="assets\bootstrap\js\jquery.min.js"></script>
        <script src="assets\bootstrap\js\bootstrap.min.js"></script>
        <footer class="site-footerme" id="downeclipse" itemscope="itemscope" role="contentinfo">
            <div class="site-infoku" role="contentinfo">
                <h5 class="display-7 text-light" style="text-align: center; margin-top: 10px;">
                    Copyright &#169;
                    <script type="text/javascript">
                        document.write(creditsyear.getFullYear());
                    </script>
                    LAB Struktur Data 2020 <br />
                </h5>
                Made with <i class="fa fa-heart"></i> by M. Rizki Riswandi
            </div>
        </footer>
    </body>
</html>