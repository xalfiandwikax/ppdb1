<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Landing Page</title>
  <!-- ini bagian load bootstrap css file -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- selesai load bootstrap css file -->
  <link href="<?php echo base_url('assets/css/mycss.css'); ?>" rel="stylesheet">
  <!-- load css saya -->
</head>

<body>

  <!-- section navbar -->
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
      <div class="container">
        <a class="navbar-brand">PKBM <sup>Langgeng Ikhlas</sup></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#visi">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kbm">KBM</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-warning" type="button" href="<?php echo base_url('Auth'); ?>">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  <!-- Jumbotron -->

  <section id="jumbotron mb-5 mt-5">
    <div class="jumbotron text-center">
      <img src="<?php echo base_url('assets/img/logo.png'); ?>"  width="200"
        class="rounded-circle img-thumbnail mt-5 mb-5">
      <h1 class="display-4">PKBM - LANGGENG IKHLAS</h1>
      <p class="lead">PKBM (Pusat Kegiatan Belajar Masyarakat) adalah lembaga nonformal yang menyelenggarakan program pendidikan bagi masyarakat, terutama yang tidak terjangkau oleh lembaga pendidikan formal. 
        PKBM berperan dalam memberikan kesempatan belajar bagi masyarakat dewasa, baik untuk mengejar pendidikan formal maupun kejar paket.</p>
    </div>
  </section>

  
  <!-- akhir jumbotron -->
  
  <!-- section Visi-misi -->
  <section id="visi" class="misi"  style="background-color: #f2f2f2;">
    <div class="container text-center  ">
      <div class="row ">
        <div class="col">
          <h2> Visi-Misi</h2>
        </div>
      </div>
      <div class="row justify-content-between fs-5 text-center">
        <div class="col-4">
          <H3>VISI</H3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum non deleniti ipsam facere eius, assumenda
            tempora voluptatibus nulla quia dolores.</p>
        </div>
        <div class="col-4">
          <H3>MISI</H3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione molestiae ad fugiat repellendus suscipit
            repellat optio delectus officia facilis aliquid!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir Visi-Misi -->

  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L13.3,250.7C26.7,245,53,235,80,240C106.7,245,133,267,160,234.7C186.7,203,213,117,240,85.3C266.7,53,293,75,320,112C346.7,149,373,203,400,197.3C426.7,192,453,128,480,101.3C506.7,75,533,85,560,101.3C586.7,117,613,139,640,138.7C666.7,139,693,117,720,138.7C746.7,160,773,224,800,218.7C826.7,213,853,139,880,96C906.7,53,933,43,960,80C986.7,117,1013,203,1040,229.3C1066.7,256,1093,224,1120,224C1146.7,224,1173,256,1200,224C1226.7,192,1253,96,1280,69.3C1306.7,43,1333,85,1360,106.7C1386.7,128,1413,128,1427,128L1440,128L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>

  <!-- KBM -->

  <section class="kbm" id="kbm">
    <div class="container text-center">
      <div class="row">
        <h2>Kegiatan Belajar Mengajar</h2>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('assets/img/kbm (1).jpg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('assets/img/kbm (2).jpg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('assets/img/kbm (3).jpg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1"
      d="M0,160L48,176C96,192,192,224,288,218.7C384,213,480,171,576,154.7C672,139,768,149,864,144C960,139,1056,117,1152,117.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  


  <!-- ini bagian load jquery js file -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>
