<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
      <link href="assets\bootstrap\css\bootstrap.min.css" rel="stylesheet">
      <link href="assets\css\fontawesome-free\css\all.min.css" rel="stylesheet">
      <link href="assets\css\style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
      <title>
         Tampilkan Editor
      </title>
      </link>
      </link>
      </link>
      </meta>
      </meta>
      </meta>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand font-weight-bold" href="index.php">
         <i class="fa fa-fire">
         </i>
         Tentang Saya
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
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="result d-flex justify-content-center mt-4"></div>
            </div>
         </div>
      </div>
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