<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>[Resume] Farid Fatkhurrozak</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="resume" name="keywords">
  <meta content="Resume Farid Fatkhurrozak" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll ml-2" href="#page-top">
        <span class="letterV">V</span>A<span class="letterA">A</span><span class="letterR">R</span>D
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link py-3 js-scroll" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-3 js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-3 js-scroll" href="#work">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-3 js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Farid Fatkhurrozak</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Flutter Developer,IoT Developer</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <div class="about-mf sect-pt4 route paralax-mf bg-image" style="background-image: url(img/bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container mt-5" id="about">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row px-3">
                  <div class="col-sm-3 d-flex justify-content-center">
                    <div class="about-img d-flex justify-content-center">
                      <img src="img/me.jpg" class="img-fluid rounded-circle b-shadow-a" />
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <table width="100%" style="font-size: 16px;">
                      <tr>
                        <td><ion-icon name="person"></ion-icon></td>
                        <td>Farid Fatkhurrozak</td>
                      </tr>
                      <tr>
                        <td><ion-icon name="code-slash"></ion-icon></td>
                        <td>Web Developer</td>
                      </tr>
                      <tr>
                        <td><ion-icon name="mail"></ion-icon></td>
                        <td><a href="mailto:<?= $data['email']; ?>"><?= $data['email']; ?></a></td>
                      </tr>
                      <tr>
                        <td><ion-icon name="logo-github"></ion-icon></td>
                        <td><a href="https://github.com/<?= $data['github']; ?>">Github.com/<?= $data['github']; ?></a></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="skill-mf p-3 mt-3">
                  <p class="title-s h5 mb-0">About</p>
                  <!-- <table class="table table-borderless"> -->
                  <p style="text-align: justify;">
                    <?= str_replace('I am proficient', '<br>I am proficient', $data['deskripsi']); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2 mb-4">
                    <h5 class="title-left text-center mb-5">
                      Tech Stack
                    </h5>
                  </div>
                  <p class="lead">
                  <div class="container">
                    <div class="row">
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" width="40" height="40">
                        <br><small>Google</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="html" width="40" height="40">
                        <br><small>HTML</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="css" width="40" height="40">
                        <br><small>CSS</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="php" width="40" height="40">
                        <br><small>PHP</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" alt="ci" width="40" height="40">
                        <br><small>CodeIgniter</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="laravel" width="40" height="40">
                        <br><small>Laravel</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40">
                        <br><small>JavaScript</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="node" width="40" height="40">
                        <br><small>NodeJS</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" alt="next" width="40" height="40">
                        <br><small>NextJS</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="react" width="40" height="40">
                        <br><small>React&nbsp;Native</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" alt="dart" width="40" height="40">
                        <br><small>Dart</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="flutter" width="40" height="40">
                        <br><small>Flutter</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/arduino/arduino-original.svg" alt="arduino" width="40" height="40">
                        <br><small>Arduino</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="mysql" width="40" height="40">
                        <br><small>MySQL</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="mongo" width="40" height="40">
                        <br><small>MongoDB</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="bootstrap" width="40" height="40">
                        <br><small>Bootstrap</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="figma" width="40" height="40">
                        <br><small>Figma</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="git" width="40" height="40">
                        <br><small>Git</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/azure/azure-original.svg" alt="azure" width="40" height="40">
                        <br><small>Azure</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original.svg" alt="apache" width="40" height="40">
                        <br><small>Apache</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nginx/nginx-original.svg" alt="nginx" width="40" height="40">
                        <br><small>NGINX</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg" alt="windows" width="40" height="40">
                        <br><small>Windows</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/debian/debian-original.svg" alt="debian" width="40" height="40">
                        <br><small>Debian</small>
                      </div>
                      <div class="col text-center mb-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain.svg" alt="ubuntu" width="40" height="40">
                        <br><small>Ubuntu</small>
                      </div>
                    </div>
                  </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
  <section class="portfolio-mf sect-pt4 route">
    <div class="container" id="work">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Project
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        foreach ($projek as $p) :
        ?>
          <div class="col-md-4">
            <div class="work-box">
              <a style="cursor: pointer;" data-toggle="modal" data-target="#<?= $p['tag']; ?>">
                <div class="work-img">
                  <?php $img = explode(',', $p['img']); ?>
                  <img src="img/<?= $img[0]; ?>" alt="<?= $p['tag']; ?>" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col">
                      <h2 class="w-title"><?= $p['title']; ?></h2>
                      <div class="w-more">
                        <span class="w-ctegory"><?= $p['build']; ?></span> / <span class="w-date"><?= $p['tgl']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php
        endforeach;
        ?>

      </div>
    </div>
  </section>

  <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col text-center mb-3">
                  <div class="title-box-2">
                    <h2>Contact</h2>
                    <div class="line-mf"></div>
                  </div>
                  <div class="more-info">
                    <p class="lead px-3">
                      You can reach me via email and social media.
                    </p>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="mailto:<?= $data['email']; ?>"><span class="ico-circle"><i class="ion-android-mail"></i></span></a></li>
                      <li><a href="https://wa.me/<?= $data['whatsapp']; ?>"><span class="ico-circle"><i class="ion-social-whatsapp"></i></span></a></li>
                      <li><a href="https://instagram.com/vard.rz"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <!-- <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p> -->
              <div class="credits">Vard<b>RZ</b></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Modal -->
  <?php
  foreach ($projek as $p) :
  ?>
    <div class="modal fade" id="<?= $p['tag']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $p['tag']; ?>" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?= $p['title']; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= $p['desk'];; ?>
            <?php
            if ($p['demo'] != null) {
              echo "<p class='mt-2'><b>Link :</b> <a href='" . $p['demo'] . "' target='_blank' class='text-primary'>Lihat</a></p>";
            }
            ?>
            <center>
              <?php
              $image = explode(',', $p['img']);
              echo "<img src='img/" . $image[0] . "' alt='" . $p['tag'] . "' class='img-fluid mt-2'><br/>";
              for ($i = 1; $i < count($image); $i++) {
                if ($p['build'] == 'React Native' or $p['build'] == 'Flutter') {
                  echo "<img src='img/" . $image[$i] . "' alt='" . $p['tag'] . "' class='img-fluid mt-2' width='40%'>";
                } else {
                  echo "<img src='img/" . $image[$i] . "' alt='" . $p['tag'] . "' class='img-fluid mt-2'>";
                }
              }
              ?>
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php
  endforeach;
  ?>

  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- Ion Icon -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>