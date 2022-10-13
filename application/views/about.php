<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Outfit:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">
  
  <!-- Baguette Box -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js" async></script>
</head>

<body>
  <!-- SCROLLBAR -->
  <div class="scrollbar scrollbar-secondary">
    <div class="force-overflow">

      <div id="navbar" style="top: -100px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('home')?>">
              <img src="<?= base_url('/assets/img/Logo_Cakrawala.png');?>" width="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto mb-2">
                <a class="ta nav-link m-2" href="<?php echo base_url('home')?>">Home</a>
                <a class="ta nav-link m-2" aria-current="page" href="<?php echo base_url('services')?>">Services</a>
                <a class="ta nav-link active fw-bold m-2" href="<?php echo base_url('about')?>">About</a>
                <a class="ta nav-link m-2" href="<?php echo base_url('contact')?>">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <section id="visimisi">
        <div class="container my-4">
          <div class="row">
            <div class="col-md-6 float-end d-flex align-items-center justify-content-center">
              <img src="<?= base_url('/assets/img/Logo_Cakrawala.png');?>" width="300" alt="">
            </div>
            <div class="col-md-6 float-start p-4 d-flex align-items-center justify-content-center">
              <div class="text">
                <h1>Visi</h1>
                <p>being drafted...</p>
                <br>
                <h1>Misi</h1>
                <ol class="list-group list-group-numbered borderless">
                  <li class="list-group-item borderless">being drafted...</li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="team" class="bg-info">
        <div class="container-fluid text-center my-2">
          <div class="row py-5 my-2">
            <div class="col-sm text-uppercase">
              <h1 class="text-white">
                board of director
              </h1>
            </div>
          </div>
          <div class="row py-2">
            <div class="col-sm">
              <img src="<?= base_url('/assets/img/bod fix/pak yudi.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-75 p-2">Yudi Ekayanto</h3>
            </div>
            <div class="col-sm">
              <img src="<?= base_url('/assets/img/bod fix/bu peni.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-75 p-2">Woro Supeni</h3>
            </div>
            <div class="col-sm">
              <img src="<?= base_url('/assets/img/bod fix/pak beni.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-75 p-2">DR R.Benny Kisworo</h3>
            </div>
          </div>
          <div class="row py-5 my-2">
            <div class="col-sm bg-info text-uppercase">
              <h1 class="text-white">
                senior manager
              </h1>
            </div>
          </div>
          <div class="row py-2">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <h2 class="text-white">Human Resources</h2>
              <img class="mt-4" src="<?= base_url('/assets/img/sm fix/hrd.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-75 p-2">Maitsa Valenska Pristiyanty</h3>
            </div>
            <div class="col-md-5">
              <h2 class="text-white">Operational</h2>
              <img class="mt-4" src="<?= base_url('/assets/img/sm fix/operasional.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-50 p-2">Asti Prastista</h3>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row py-4 my-2">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <h2 class="text-white">Marketing</h2>
              <img class="mt-4" src="<?= base_url('/assets/img/sm fix/marketing.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-50 p-2">Sri Wahyuningsih</h3>
            </div>
            <div class="col-md-5">
              <h2 class="text-white">Finance</h2>
              <img class="mt-4" src="<?= base_url('/assets/img/sm fix/finance.gif');?>" height="300px" alt="" style="object-fit: cover;">
              <h3 class="border rounded-pill bg-white mx-auto w-50 p-2">Titah K Gondo</h3>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </section>

      <section id="fasilitas">
        <div class="container-fluid text-center my-4">
          <div class="row">
            <div class="col-sm bg-inf0 text-uppercase">
              <h1>
                facilities
              </h1>
            </div>
          </div>

          <div class="baguetteBoxFive gallery">
            <div class="row">
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/pantry.jpeg');?>">
                  <img src="<?= base_url('/assets/img/pantry.jpeg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Ruang Pantry" />
                </a>
              </div>
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/parkiran.jpeg');?>">
                  <img src="<?= base_url('/assets/img/parkiran.jpeg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Parkiran" />
                </a>
              </div>
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/play room.jpeg');?>">
                  <img src="<?= base_url('/assets/img/play room.jpeg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Play Room" />
                </a>
              </div>
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/rto.jpeg');?>">
                  <img src="<?= base_url('/assets/img/rto.jpeg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Ruang RTO" />
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/meeting.jpeg');?>">
                  <img src="<?= base_url('/assets/img/meeting.jpeg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Ruang Meeting" />
                </a>
              </div>
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/Masjid.JPG');?>">
                  <img src="<?= base_url('/assets/img/Masjid.JPG');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Masjid" />
                </a>
              </div>
              <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/home.JPG');?>">
                  <img src="<?= base_url('/assets/img/home.JPG');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Gedung Graha Krista Aulia" />
                </a>
              </div>
              <!-- <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 p-2">
                <a href="<?= base_url('/assets/img/DSC_6458.jpg');?>">
                  <img src="<?= base_url('/assets/img/DSC_6458.jpg');?>" 
                  class="w-100 shadow-1-strong rounded mb-2"
                   alt="Sisa ber 3" />
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </section>

      <footer class="bg-dark text-center text-lg-start text-white">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4">
            <h4 class="text-center fw-bold">SIPRAMA CAKRAWALA</h4>
              <p class="text-center">Don't Limit Your Challenges,<br>
                Challenge Your Limits
              </p>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center fw-bold">ADDRESS</h4>
              <p class="text-center">Jl. Andara Raya No.20, RT.2/RW.3, <br>
                Pangkalan Jati Baru Kec. Cinere, <br>
                Kota Depok, Jawa Barat, 16513</p>
            </div>
              <div class="col-lg-4">
                <h4 class="text-center fw-bold">CONTACT</h4>
                <ul class="list-group text-center" style="list-style: none;">
                  <li><i class="bi bi-telephone"></i>&nbsp;(021) 27813599</li>
                  <li><i class="bi bi-envelope"></i>&nbsp;info@spcakrawala.com</li>
              </ul>
              </div>
          </div>
        </div>
      
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright: SIPRAMA CAKRAWALA
        </div>
      </footer>
    </div>
  </div>
  <!-- SCROLLBAR END-->

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>

    <!-- Baguette Box -->
    <script>
    baguetteBox.run('.baguetteBoxFive', {
      captions: function (element) {
        return element.getElementsByTagName('img')[0].alt;
      }
    });
  </script>
</body>
</html>