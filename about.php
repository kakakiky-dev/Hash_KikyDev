<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" href="assets\css\fontawesome-free\css\all.min.css">
      <link rel="stylesheet" href="assets\css\style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
      <title>Data Editor</title>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand font-weight-bold" href="index.php">
         <i class="fa fa-fire">
         </i>
         DATA EDITOR
         </a>
         <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
         <span class="navbar-toggler-icon">
         </span>
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
      <!-- End Navbar -->
      <!-- Bagian Card About Me -->
      <h1 class="display-1 text-light" style="text-align:center; margin-top: 50px; margin-bottom: 20px;">ABOUT ME</h1>
      <div class="container">
         <div class="card bg-dark" style="max-width: 100%; margin-bottom:100px;">
            <div class="row no-gutters">
               <div class="col-md-4">
                  <img src="assets/img/kiky.png" class="card-img" alt="...">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                     <h5 class="card-title text-light">M. Rizki Riswandi</h5>
                     <p class="card-text text-light">Assalamu'alaikum! Hai sobat, perkenalkan nama saya M. Rizki Riswandi.<br>Lahir dari keluarga sederhana di kota Medan pada tanggal 22 Januari tahun 2000.<br>Saya adalah seorang mahasiswa jurusan Informatika Fakultas Matematika dan Ilmu Pengetahuan alam, Universitas Syiah Kuala. Saat ini saya sedang menmpuh pendidikan semester 4 di perkuliahan.<br><br>Saya sangat menyukai dunia desain dan editing video, ya walaupun belum bisa dikatakan sebagai seorang yang professional. Martial Arts atau seni bela diri juga merupakan salah satu hobi yang saya sukai.<br><br>
                        Saya Juga memiliki sebuah blog yang saya rawat seperti anak sendiri. Dalam blog tersebut saya sering membagikan berbagai macam hal bermanfaat yang berhubungan dengan dunia pendidikan. Jika kalian tertarik, kalian bisa mencoba untuk mengunjungi blog saya melalui link: www.kakakiky.id
                     </p>
                     <a type="button" href="https://github.com" class="btn btn-success">
                     <i class="fa fa-github"></i>
                     OPEN MY GITHUB CODE</a>
                     <br>
                     <br>
                     <a href="https://www.facebook.com/LetkolRizki/" class="badge badge-primary">
                     <i class="fa fa-facebook-official"></i>    
                     Facebook</a>
                     <a href="https://www.instagram.com/kakakiky.id/" class="badge badge-primary">
                     <i class="fa fa-instagram"></i>    
                     Instagram</a>
                     <a href="https://twitter.com/kakakiky_id" class="badge badge-primary">
                     <i class="fa fa-twitter-square"></i>    
                     Instagram</a>
                     <p class="card-text"><small class="text-muted">Thanks for visitting my page</small></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- akhir bagian Card About Me -->
      <script src="assets\bootstrap\js\jquery.min.js"></script>
      <script src="assets\bootstrap\js\bootstrap.min.js"></script>
      <script>
         let loading = '<img class="text-center" alt="loading......" class="ml-auto" src="assets\\img\\loading.gif" width="30%">'
         $(".result").html(loading);
         loadData();
         
         function loadData() {
             $.get('core/get.php?q=show', function(data) {
                 $(".result").html(data);
             });
         }
      </script>
      <script src="assets\bootstrap\js\jquery.min.js"></script>
      <script src="assets\bootstrap\js\bootstrap.min.js"></script>
      <footer class='site-footerme' id='downeclipse' itemscope='itemscope' role='contentinfo'>
         <div class='site-infoku' role='contentinfo'>
            <h5 class="display-7 text-light" style="text-align:center; margin-top: 10px;">
               Copyright &#169; <script type='text/javascript'>document.write(creditsyear.getFullYear());</script>
               LAB Struktur Data 2020 <br/>
            </h5>
            Made with <i class='fa fa-heart'></i> by M. Rizki Riswandi
         </div>
      </footer>
   </body>
</html>