<?php
session_start();
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
      <a class="navbar-brand js-scroll" href="#page-top">VardRZ</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
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
          <p class="intro-subtitle"><span class="text-slider-items">Backend Web Developer,Junior Web Developer</span><strong class="text-slider"></strong></p>
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
                <div class="row">
                  <div class="col-sm-3 d-flex justify-content-center">
                    <div class="about-img d-flex justify-content-center">
                      <img src="img/me.jpg" class="img-fluid rounded-circle b-shadow-a" />
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <table width="100%" style="font-size: 17px;">
                      <tr>
                        <td><ion-icon name="person"></ion-icon></td>
                        <td>Farid Fatkhurrozak</td>
                      </tr>
                      <tr>
                        <td><ion-icon name="code-slash"></ion-icon></td>
                        <td>Junior Web Developer</td>
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
                <div class="skill-mf mt-3">
                  <p class="title-s h5 mb-3">Programming Skills</p>
                  <div class="row">
                    <div class="col-sm-4">
                      <span style="font-size: 15px;">Languages</span>
                      <div class="d-flex align-items-center mt-1">
                        <img src="https://stack-icons.showwcase.com/PHP.jpg" width="25px" style="border-radius: 15px;"><span class="ml-2" style="font-size: 15px;">PHP</span>
                      </div>
                      <div class="d-flex align-items-center mt-2">
                        <img src="https://stack-icons.showwcase.com/JavaScript.png" width="25px" style="border-radius: 10px;"><span class="ml-2" style="font-size: 15px;">JavaScript</span>
                      </div>
                      <div class="d-flex align-items-center mt-2 mb-3">
                        <img src="https://stack-icons.showwcase.com/Dart.png" width="25px" style="border-radius: 15px;"><span class="ml-2" style="font-size: 15px;">Dart</span>
                      </div>
                    </div>

                    <div class="col-sm-8">
                      <span style="font-size: 15px;">Web Dev</span>
                      <div class="d-flex align-items-center mt-1">
                        <img src="https://stack-icons.showwcase.com/CodeIgniter.png" width="25px" style="border-radius: 15px;"><span class="ml-2" style="font-size: 15px;">CodeIgniter</span>
                      </div>
                      <div class="d-flex align-items-center mt-2">
                        <img src="https://stack-icons.showwcase.com/Laravel.jpg" width="25px" style="border-radius: 15px;"><span class="ml-2" style="font-size: 15px;">Laravel</span>
                      </div>
                      <div class="d-flex align-items-center mt-2 mb-3">
                        <img src="https://stack-icons.showwcase.com/expressjs.png" width="25px" style="border-radius: 15px;"><span class="ml-2" style="font-size: 15px;">Express.js</span>
                      </div>
                    </div>


                    <!-- <div class="col-sm-4">
                      <span style="font-size: 15px;">CSS Frameworks</span>
                      <div class="d-flex align-items-center mt-1 mb-3">
                        <img src="https://stack-icons.showwcase.com/Bootstrap.png" width="25px" style="border-radius: 15px;"><span class="ml-2">Bootstrap</span>
                      </div>
                    </div> -->

                    <div class="col-sm-4">
                      <span style="font-size: 15px;">Databases</span>
                      <div class="d-flex align-items-center mt-1">
                        <img src="https://stack-icons.showwcase.com/MySQL.png" width="25px" style="border-radius: 15px;"><span class="ml-2">MySQL</span>
                      </div>
                      <div class="d-flex align-items-center mt-2 mb-3">
                        <img src="https://stack-icons.showwcase.com/MongoDB.png" width="25px" style="border-radius: 15px;"><span class="ml-2">MongoDB</span>
                      </div>
                    </div>

                    <div class="col-sm-8">
                      <span style="font-size: 15px;">Android Dev</span>
                      <div class="d-flex align-items-center mt-1">
                        <img src="https://stack-icons.showwcase.com/Flutter.png" width="25px" style="border-radius: 15px;"><span class="ml-2">Flutter</span>
                      </div>
                      <div class="d-flex align-items-center mt-2 mb-3">
                        <img src="https://stack-icons.showwcase.com/React.png" width="25px" style="border-radius: 15px;"><span class="ml-2">React Native</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2 mb-4">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    <?= preg_replace('/\n/', '<br>', $data['deskripsi']); ?>
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
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
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
                      <h2 class="w-title"><a style="cursor: pointer;" data-toggle="modal" data-target="#sipema"><?= $p['title']; ?></a></h2>
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

  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col text-center">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Contact
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      You can contact me using email or via social media.
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
  <div id="preloader"></div>

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
            <p class="mt-2">
              <b>Demo :</b> <a href="<?= $p['demo']; ?>" target="_blank" class="text-primary">Lihat</a>
            </p>
            <center>
              <?php
              $image = explode(',', $p['img']);
              echo "<img src='img/" . $image[0] . "' alt='" . $p['tag'] . "' class='img-fluid mt-2'><br/>";
              for ($i = 1; $i < count($image); $i++) {
                echo "<img src='img/" . $image[$i] . "' alt='" . $p['tag'] . "' class='img-fluid mt-2' width='40%'>";
              }
              ?>
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="<?= $p['demo']; ?>" target="_blank" class="btn btn-primary">Demo</a>
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
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>