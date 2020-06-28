<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kyle Huber's Portfolio</title>
  <link rel="shortcut icon" href="/resources/img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap">
  <link rel="stylesheet" href="/resources/css/style.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="/resources/img/logo.png" alt="The brand logo of Kyle Huber.">
    </div>
    <button class="nav-toggle" aria-label="toggle navigation">
      <span class="hamburger"></span>
    </button>
    <nav class="nav">
      <ul class="nav__list">
        <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
        <li class="nav__item"><a href="#skills" class="nav__link">About Me</a></li>
        <li class="nav__item"><a href="https://www.github.com/Huberdoggy" target="about__blank"
            class="nav__link">Featured Projects</a></li>
        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
      </ul>
    </nav>


  </header>

  <section class="intro" id="home">
    <h1 class="section__title section__title--intro">Hey, my name's <strong>Kyle</strong>
    </h1>

    <img src="/resources/img/arizona.jpg" alt="picture of Kyle Huber with a desert mountain background."
      class="intro__img">
    <p class="section__subtitle section__subtitle--intro">Aspiring Back-End Developer</p>

    <img src="" alt="">
  </section>

  <section class="soft-skills" id="skills">
    <h2 class="section__title section__title--skills"><i class="ion-android-contacts"></i> Soft Skills</h2>
    <div class="skills">

      <div class="skill">
        <h3><i class="ion-thumbsup"></i> Adaptability</h3>
        <p>I'm able to quickly and efficiently allocate resources for a given problem, and adjust
          my work-style
          according to my findings.
        </p>
      </div>
      <div class="skill">

        <h3><i class="ion-thumbsup"></i> Team-Player</h3>
        <p>Although I thrive in solo and remote environments, when coming together as part of a team, I try to keep
          everybody organized and implement our mutually agreed upon solutions for tackling a challenge.</p>
      </div>
      <div class="skill">
        <h3><i class="ion-thumbsup"></i> Dedication</h3>
        <p>From a young age, I embraced the mantra <q><i>you 'own' your work.</i></q> As such, I frequent long hours
          ensuring that each task I complete is executed to the highest standard possible. </p>
      </div>

    </div>
    <a class="skills btn" href="https://www.github.com/Huberdoggy" target="about__blank">Check Out My Work</a>


  </section>


  <section class="contact" id="contact">
    <img src="/resources/img/author.jpg" alt="Picture of Kyle Huber pointing at the user." class="contact__img">
    <h2 class="section__title section__title--contact"><i class="ion-android-contacts"></i> Get In Touch</h2>
    <p class="section__subtitle section__subtitle--contact">Let's link up soon!</p>

    <!-- <div class="contact__body">
      <p></p>
      <p></p>

    </div>-->
    <div class="row">
      <div class="row" id=inform-user>
        <form method="post" action="mailer.php" class="contact-form">
          <div class="row">

            <?php
              if($_GET['success'] == 1) {
                echo "<div class=\"form-messages success\">
                  Thank you! Your message has been sent.
                </div>";
              }
              if($_GET['success'] == -1) {
                echo "<div class=\"form-messages error\">
                  Oops! Something went wrong. Please try again.
                </div>";
              }
              ?>
          </div>


          <div class="col span-1-of-3">
            <label for="name">Name</label>
          </div>
          <div class="col span-2-of-3">
            <input type="text" name="name" id="name" placeholder="Your name" required>
          </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label for="email">Email</label>
        </div>
        <div class="col span-2-of-3">
          <input type="text" name="name" id="email" placeholder="Your email" required>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label>Message</label>
        </div>
        <div class="col span-2-of-3">
          <textarea rows="5" cols="20" name="message" id="message" placeholder="How can I help?" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label></label>
        </div>
        <div class="col span-2-of-3">
          <input type="submit" name="submit" id="submit">
        </div>
      </div>
      </form>
    </div>




  </section>

  <footer class="footer">
    <a href="mailto:kyleyqps@kylejamesmyfilenames.com" class="footer__link">huberdoggy@gmail.com</a>
    <ul class="social-list">
      <li class="social-list__item"><a class="social-list__link" href="https://www.github.com/Huberdoggy"
          target="about__blank"><i class="ion-social-github"></i></a>
      </li>
      <li class="social-list__item"><a class="social-list__link" href="https://www.instagram.com/kylehuber92"
          target="about__blank"><i class="ion-social-instagram"></i></a>
      </li>
    </ul>
  </footer>

  <script src="/resources/js/index.js"></script>

</body>

</html>