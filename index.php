<?php include 'contact-form.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link href="./img/favicon.png" rel="icon" type="image/png" />
    <link rel="stylesheet" href="./css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/layout.css" />
    <link rel="stylesheet" href="./css/logo.css" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/projects.css" />
    <link rel="stylesheet" href="./css/resume.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <link rel="stylesheet" href="./css/gallery.css" />
    <script src="./js/main.js" type="module" defer></script>
  </head>

  <body>
    <div class="container">
      <div class="logo">
        <h1 class="E">E</h1>
        <h1 class="A">A</h1>
        <h1 class="text">portfolio</h1>
      </div>
      <div class="about">
        <img src="./img/about.png" alt="About image" />
      </div>
      <div class="projects">
        <img src="./img/works.png" alt="Works image" />
      </div>
      <div class="resume">
        <img src="./img/resume.png" alt="Resume image" />
      </div>
      <div class="contact">
        <img src="./img/contact.png" alt="Contact image" />
      </div>
    </div>
    <div class="about-inner invisible">
      <div class="close">
        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      <img class="title" src="./img/about.png" alt="" />
      <div class="left-about">
        <img src="./img/photo.jpg" alt="" />
      </div>
      <div class="right-about">
        <div class="short-about">
          <h2>About me</h2>
          <div class="line"></div>
          <p class="about-text">
            Hello, my name is Eimantas. I'm a fresher full stack web developer
            from Lithuania. Eager for new job opportunities and challenges! At
            the moment self-learning .net technology.
          </p>
        </div>
        <div class="skills">
          <h2>Working with</h2>
          <div class="line"></div>
          <p class="about-text">C#, ASP.NET(WebApi, MVC), REACT</p>
        </div>
        <div class="social">
          <h2>Find me on</h2>
          <div class="line"></div>
          <div class="sociallinks">
            <a href="https://github.com/eimuc" target="_blank"
              ><i class="fa fa-github" aria-hidden="true"></i
            ></a>
            <a
              href="https://www.linkedin.com/in/eimantas-andrejevas-258bb51ba/"
              target="_blank"
              ><i class="fa fa-linkedin-square" aria-hidden="true"></i
            ></a>
            <a href="https://www.instagram.com/eimutis.a/" target="_blank"
              ><i class="fa fa-instagram" aria-hidden="true"></i
            ></a>
            <a
              href="https://www.facebook.com/eimantas.andrejevas"
              target="_blank"
              ><i class="fa fa-facebook-square" aria-hidden="true"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="projects-inner invisible">
      <div class="close">
        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      <img class="title" src="./img/works.png" alt="" />
      <div class="gallery"></div>
    </div>
    <div class="resume-inner invisible">
      <div class="close">
        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      <img class="title" src="./img/resume.png" alt="" />
      <div class="cv">
        <img src="./img/CV.png" alt="test" />
      </div>
      <div class="fullwidth">
        <a class="download" href="./img/CV.pdf" target="_blank">Download PDF</a>
      </div>
    </div>
    <div class="contact-inner invisible">
      <div class="close">
        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      <img class="title" src="./img/contact.png" alt="" />
      <?php
        if($message_sent):
            function_alert("Email was sent. Thank you!");
        else:
        ?>

      <div class="contact-form">
        <form action="index.php" method="POST">
          <input
            class="input"
            type="text"
            name="name"
            placeholder="Name"
            required
          />
          <br />
          <input
            class="input"
            type="email"
            name="email"
            placeholder="Email"
            required
          />
          <br />
          <textarea
            class="input textarea"
            name="message"
            rows="4"
            placeholder="Message"
            required
          ></textarea>
          <br />
          <input
            class="input form_button"
            type="submit"
            value="Send message"
            name="submit"
          />
        </form>
      </div>

      <?php
        endif;
        ?>
    </div>
  </body>
</html>
