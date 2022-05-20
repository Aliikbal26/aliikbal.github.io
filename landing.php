<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- tilwinds -->
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/boo\tstrap-icons.css" />
  <link rel="stylesheet" href="bootstrap/css/style.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Ali Ikbal</title>

  <!-- live chat -->
  <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "1bb9fef5-b66d-436c-a198-b1c56cccbac5";
    (function() {
      d = document;
      s = d.createElement("script");
      s.src = "https://client.crisp.chat/l.js";
      s.async = 1;
      d.getElementsByTagName("head")[0].appendChild(s);
    })();
  </script>
</head>

<body id="home">
  <!-- Membuat NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" class="text-white">Ali Ikbal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link text-white" aria-current="page" href="#home">Home</a>
          <a class="nav-link text-white" href="#about">About</a>
          <a class="nav-link text-white" href="#project">Project</a>
          <a class="nav-link text-white" href="#learning">Learning</a>
          <a class="nav-link text-white" href="#contact">Contact</a>
          <a href="logout.php" type="button" class="btn btn-success">Logut</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <section class="jumbotron text-center">
    <img src="img/ali.jpg" width="170" class="rounded-circle img-thumbnail" alt="" />
    <h2 class="display-4 text-white">Ali Ikbal</h2>
    <p class="lead">Junior Web Developer</p>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <a href="https://www.instagram.com/aliikbal_26/">
            <i class="bi bi-instagram h2 text-danger pb-3"></i>

          </a>
          <a href="https://github.com/Aliikbal26">
            <i class="bi bi-github text-dark h2 pb-3"></i>
          </a>
          <a href="https://www.facebook.com/Alikbal26/">
            <i class="bi bi-facebook h2 text-white pb-3"></i>
          </a>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1" d="M0,160L34.3,176C68.6,192,137,224,206,224C274.3,224,343,192,411,181.3C480,171,549,181,617,202.7C685.7,224,754,256,823,240C891.4,224,960,160,1029,154.7C1097.1,149,1166,203,1234,213.3C1302.9,224,1371,192,1406,176L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container pb-1">
      <div class="row text-center">
        <div class="col-md">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-4">
          <p>
            Hallo World !!! perkenalkan nama saya Ali Ikbal saya seorang Web
            Developer, sudah menekuni Web Dev sejak tahun awal tahun 2020 dan
            sudah tersertifikasi oleh BNSP, bahasa pemrograman yang saya
            kuasai adalah PHP.
          </p>
        </div>
        <div class="col-md-4">
          <p>
            Saat ini saya sedang kuliah di salah satu kampus yang berada di
            daerah Cirebon yaitu STMIK IKMI Cirebon, saya mengambil prodi
            Teknik Informatika dan sekarang saya sedang menjalankan kuliah
            semester 3 (Tiga).
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <a href="about.html" class="btn btn-success">See Details</a>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#297cf8" fill-opacity="1" d="M0,32L34.3,48C68.6,64,137,96,206,96C274.3,96,343,64,411,74.7C480,85,549,139,617,176C685.7,213,754,235,823,208C891.4,181,960,107,1029,85.3C1097.1,64,1166,96,1234,112C1302.9,128,1371,128,1406,128L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>

  <!-- Project -->
  <section id="project">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2>My Project</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card shadow">
            <img src="img/project1 (3).jpg" class="card-img-top" alt="project3" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card shadow">
            <img src="img/project1 (2).jpg" class="card-img-top" alt="project2" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card shadow">
            <img src="img/project1 (1).jpg" class="card-img-top" alt="project1" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,240C274.3,213,343,139,411,138.7C480,139,549,213,617,245.3C685.7,277,754,267,823,229.3C891.4,192,960,128,1029,112C1097.1,96,1166,128,1234,154.7C1302.9,181,1371,203,1406,213.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>

  <!-- learning -->
  <section id="learning">
    <div class="container justify-content-center">
      <div class="row">
        <div class="col mb-4 text-center">
          <h2>Learning</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="d-flex justify-content-center col-md-3 mb-3">
          <div class="card shadow" style="width: 18rem">
            <img src="img/learning/learning (1).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">HTML Dasar</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="learninghtml.html" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center col-md-3 mb-3">
          <div class="card shadow" style="width: 18rem">
            <img src="img/learning/learning (3).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">PHP Dasar</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="learningphp.html" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center col-md-3 mb-3">
          <div class="card shadow" style="width: 18rem">
            <img src="img/learning/learning (2).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Bootstrap</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="learningBootstrap.html" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#297cf8" fill-opacity="1" d="M0,160L48,133.3C96,107,192,53,288,64C384,75,480,149,576,160C672,171,768,117,864,106.7C960,96,1056,128,1152,122.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- testimoni -->
  <section id="testimoni">
    <div class="container text-center">
      <div class="row mb-4">
        <div class="col">
          <h2>Testimonial</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="d-flex col-md-6 justify-content-center">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="col-md-3 carousel-item active">
                <img src="img/testimonial/1.jpg" class="text-center rounded-circle img-thumbnail" width="150" alt="..." />
                <h5 class="mt-2">Johnson</h5>
                <h6>Full Stack Developer</h6>
                <p class="text-white">
                  " Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Obcaecati, repudiandae. "
                </p>
              </div>
              <div class="col-md-3 carousel-item">
                <img src="img/testimonial/2.jpg" class="text-center rounded-circle img-thumbnail" width="150" alt="..." />
                <h5 class="mt-2">Enjelin</h5>
                <h6>UI/UX Developer</h6>
                <p class="text-white">
                  " Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Omnis, dolores! "
                </p>
              </div>
              <div class="col-md-3 carousel-item">
                <img src="img/testimonial/3.jpg" class="text-center rounded-circle img-thumbnail" width="150" alt="..." />
                <h5 class="mt-2">Johan</h5>
                <h6>Front-End Developer</h6>
                <p class="text-white">
                  " Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Expedita, voluptatum. "
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1" d="M0,160L34.3,176C68.6,192,137,224,206,224C274.3,224,343,192,411,181.3C480,171,549,181,617,202.7C685.7,224,754,256,823,240C891.4,224,960,160,1029,154.7C1097.1,149,1166,203,1234,213.3C1302.9,224,1371,192,1406,176L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>

  <!-- Contact  -->
  <section id="contact">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
          <!-- alert -->
          <div class="
                alert alert-form alert-primary alert-dismissible
                fade
                show
                d-none
              " role="alert">
            <strong>Success!</strong> Pesan anda sudah terkirim.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <form name="submit contact">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Nomor Whatsapp</label>
              <input type="text" name="wa" class="form-control" id="phone" aria-describedby="phone" />
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" id="" cols="30" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-kirim">
              Submit
            </button>
            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0d6efd" fill-opacity="1" d="M0,192L34.3,192C68.6,192,137,192,206,181.3C274.3,171,343,149,411,154.7C480,160,549,192,617,213.3C685.7,235,754,245,823,250.7C891.4,256,960,256,1029,250.7C1097.1,245,1166,235,1234,208C1302.9,181,1371,139,1406,117.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>

  <footer class="bg-primary text-center pb-2 pt-3">
    <p class="text-white">
      Created With <i class="bi bi-heart-fill text-danger"></i> By
      <a class="text-white fw-bold" href="https://www.facebook.com/Alikbal26/">Ali Ikbal</a>
    </p>
  </footer>

  <script src="bootstrap/js/bootstrap.js"></script>

  <!-- gsp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script>
    gsap.from(".jumbotron img", {
      duration: 1.5,
      y: -100,
      ease: "bounce"
    });
    gsap.from(".navbar-brand", {
      duration: 1,
      x: -100
    });
    gsap.from(".navbar-nav", {
      duration: 1.5,
      x: 100
    });
  </script>

  <!-- contact -->
  <script>
    const scriptURL =
      "https://script.google.com/macros/s/AKfycbwRk2-xYcd9LOu0W5RqGhJEpdGVDGRZUrfYEeiQJ40AYeMT_YOl1cTax3-DE1woFJQLng/exec";
    const form = document.forms["submit contact"];
    const btnKirim = document.querySelector(".btn-kirim");
    const btnLoadaing = document.querySelector(".btn-loading");
    const myAlert = document.querySelector(".alert-form");

    form.addEventListener("submit", (e) => {
      e.preventDefault();

      //tampilkan tombol loading
      btnLoadaing.classList.toggle("d-none");
      btnKirim.classList.toggle("d-none");
      fetch(scriptURL, {
          method: "POST",
          body: new FormData(form)
        })
        .then((response) => {
          btnLoadaing.classList.toggle("d-none");
          btnKirim.classList.toggle("d-none");
          //menampilkan alert
          myAlert.classList.toggle("d-none");
          //reset form
          form.reset();
          console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
    });

    //api key youtube AIzaSyBBs5lirOUjp2uJjo7hhR-CwbzFmDSD-7k
  </script>




</body>

</html>