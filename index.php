<?php
if (stripos($_SERVER['HTTP_USER_AGENT'], "trident")) {
    header('Location: redirect.html', TRUE, 301);
}
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Nicolas Schutz">
  <title>Nicolas Schutz | Front end web developer</title>
  <meta name="description" content="Nicolas Schutz, étudiant à l'université Savoie Mont Blanc au Bourget-du-Lac, spécialisé dans le front-end web development.Je suis disponible pour vos projets">
  <meta name=”twitter:card” content="summary_large_image">
  <meta name=”twitter:site” content="@Nicolas Schutz">
	<meta name="twitter:title" content="Nicolas Schutz | Front end web developer">
  <meta name=”twitter:description” content="Nicolas Schutz, étudiant à l'université Savoie Mont Blanc au Bourget-du-Lac, spécialisé dans le front-end web development.Je suis disponible pour vos projets">
  <meta name="twitter:url" content="https://mmi.univ-smb.fr/~schutzn/Portfolio">
  <meta name=”twitter:image” content=”https://where-your-image-is-hosted/name.jpg“> <meta property="og:type" content="website">
  <meta property="og:url" content="https://mmi.univ-smb.fr/~schutzn/Portfolio" />
  <meta property="og:title" content="Nicolas Schutz | Front end web developer">
  <meta property="og:description" content="Nicolas Schutz, étudiant à l'université Savoie Mont Blanc au Bourget-du-Lac, spécialisé dans le front-end web development.Je suis disponible pour vos projets" />
  <meta property="og:image" content="https://mmi.univ-smb.fr/~schutzn/Portfolio/img/social.png" />
  <meta property="og:site_name" content="Nicolas Schutz | Front end web developer">
  <meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
  <link rel="manifest" href="./manifest.json">
  <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#303030">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap">
  <link rel=" stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <div id="loader">
    <img src="./img/loader.gif" width="256" height="192" alt="A grandpa skateboarding">
  </div>
  <!-- page content -->
  <div class="container-grid">
    <!-- header -->
    <header>
      <a href="./index.html" class="ml12">Nicolas Schutz</a>
      <nav>
        <div class="fade-right-1">
          <a href="./index.html" id="active">Work</a>
        </div>
        <div class="fade-right-2">
          <a href="./about.html" class="animation-hover">About</a>
        </div>
        <div class="fade-right-3">
          <a href="./contact.html" class="animation-hover">Contact</a>
        </div>
      </nav>
    </header>
    <!-- main content -->
    <main>
      <section>
        <!-- description of the project -->
        <!-- 1 project -->
        <div class="container-project">
          <div class="items fade-up">
            <h2>01 / Huff</h2>
            <p>Huffpost is a student project in the first year of DUT MIT (Multimedia and Internet Technologies).
              The main purpose of this integration was to choose HTML tags and their semantics wisely. This integration also allowed me to use the CSS grids.
            </p>
            <span>HTML | CSS | Responsive design | Visual Studio Code</span>
            <div class="project__link-animation">
              <a href="./work/Huff/index.html" target="_blank" class="animation-link-1px">Discover the project</a>
            </div>
          </div>
          <!-- illustration of the project -->
          <div class="illustration-project fade-down">
            <a href="./work/Huff/index.html" target="_blank"><img src="./img/wedding.jpg" alt="A wedding with the woman raising a bouquet of flowers" width="640" height="300"></a>
          </div>
        </div>
        <!-- 2 project -->
        <div class="container-project">
          <div class="items" data-aos="fade-up" data-aos-duration="1000">
            <h2>02 / Ollie</h2>
            <p>Ollie is a student project in the first year of DUT MIT (Multimedia and Internet Technologies).
              This integration allowed me to learn more about responsive design and media queries.This integration also allowed me to use CSS flex-box.
            </p>
            <span>HTML | CSS | Responsive design | Visual Studio Code</span>
            <div class="project__link-animation">
              <a href="./work/Ollie/index.html" target="_blank" class="animation-link-1px">Discover the project</a>
            </div>
          </div>
          <div class="illustration-project" data-aos="fade-down" data-aos-duration="1000">
            <a href="./work/Ollie/index.html" target="_blank"><img src="./img/ollie.png" alt="Illustration representing a web page" width="640" height="300"></a>
          </div>
        </div>
        <!-- 3 project -->
        <div class="container-project">
          <div class="items" data-aos="fade-up" data-aos-duration="1000">
            <h2>03 / Cooksy</h2>
            <p>Cooksy is a web integration from a figma model as part of a personal project. This is my first web integration in mobile First.
              This integration was interesting because it allowed me to use animations in CSS for the first time.
            </p>
            <span>HTML | CSS | Responsive design | Visual Studio Code</span>
            <div class="project__link-animation">
              <a href="./work/Cooksy/index.html" target="_blank" class="animation-link-1px">Discover the project</a>
            </div>
          </div>
          <div class="illustration-project" data-aos="fade-down" data-aos-duration="1000">
            <a href="./work/Cooksy/index.html" target="_blank"><img src="./img/wedding.jpg" alt="A woman doing meditation" width="640" height="300"></a>
          </div>
        </div>
        <!-- 4 project -->
        <div class="container-project">
          <div class="items" data-aos="fade-up" data-aos-duration="1000">
            <h2>04 / Spotify</h2>
            <p>This web integration is a personal project in which I tried to integrate the UI of the home page of the Spotify application.
              Unfortunately it is not responsive for small and medium screens. This integration was interesting because it gave me a good understanding of how flex boxes work.
            </p>
            <span>HTML | CSS | Visual Studio Code</span>
            <div class="project__link-animation"><a href="./work/Spotify/index.html" target="_blank" class="animation-link-1px">Discover the project</a></div>
          </div>
          <div class="illustration-project" data-aos="fade-down" data-aos-duration="1000">
            <a href="./work/Spotify/index.html" target="_blank"><img src="./img/spotify1.png" alt="the logo of spotify" width="640" height="300"></a>
          </div>
        </div>
      </section>
    </main>
    <!-- footer -->
    <footer><span>©2021 - Nicolas Schutz</span></footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="./js/load.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>