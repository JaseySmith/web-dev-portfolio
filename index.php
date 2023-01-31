<?php include 'action.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script src="https://kit.fontawesome.com/fbe66ddc41.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Jasey Smith | Web developer</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Q10X3PLR1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0Q10X3PLR1');
  </script>
</head>
<body>
  <div>
    <div id="header">
      <div class="container">
        <a id="logo" href="index.php">
          <div class="j">J</div>
          <div class="s">S</div>
        </a>
        <div class="nav">
          <a href="#home" onclick="linkClick()" class="text hover-effect">Home</a>
          <a href="#about" onclick="linkClick()" class="text hover-effect">About</a>
          <a href="#projects" onclick="linkClick()" class="text hover-effect">Projects</a>
          <a href="#contact" onclick="linkClick()" class="text hover-effect">Contact</a>
          <label id="toggle" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <i class="fa-solid fa-circle-half-stroke"></i>
          </label>
        </div>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
    </div>
    <section id="home">
      <div id="particles-js">
        <div class="content">
          <h1>Hi, I'm Jasey Smith.</h1>
          <p class="text">I am a <span class="font-weight">front-end web developer</span> located in Northern California.<br> I enjoy turning ideas into <span class="font-weight">exceptional digital experiences.</span></p>
          <a href="#projects" class="btn">View projects</a>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="scroll-element js-scroll fade-in-bottom">
        <h2 class="text-align-left">About Me</h2>
        <hr class="line">
      </div>
      <div class="container scroll-element js-scroll fade-in-bottom">
        <div class="column">
          <p class="text">Hello, my name is Jasey. I enjoy turning ideas and businesses into exceptional digital experiences. My interest in computer science started back in 2020 when I first stumbled across the world of code. Almost immediately I began my education and started coding!<br><br>Fast-forward to today, and I've had the privelage of working on and and building dozens of web experiences. I recieved my education through a series of certifications from freecodecamp.org. I'm currently learning more about back-end development and APIs.<br><br>When I'm not coding, you can find me on a hiking trail, out of bounds on a golf course, or snowboarding in the Sierra Nevada.</p>
        </div>
        <div class="column">
          <div class="graphic" href="index.php">
            <div class="circle1"><img src="img/self-portrait.webp"></div>
            <div class="circle2"></div>
          </div>
        </div>
      </div>
    </section>
    <section id="projects">
      <div class="scroll-element js-scroll fade-in-bottom">
        <h2>Projects</h2>
        <hr class="line">
      </div>
      <div class="container scroll-element js-scroll fade-in-bottom">
        <div class="card first-half">
          <a href="http://scaryplacesnearme.com/" target="_blank"><img src="img/scary-places.webp"></a>
        </div>
        <div class="card mq-padding text-overlap">
          <p class="text green">Featured Project</p>
          <h3>Web Application</h3>
          <p class="text description">A project of mine that supports a micro-brand I started back in 2019. The front-end is CSS, JS, and jQuery. I am still developing the back-end for searching a database of scary places.</p>
          <ul class="text tech-list">
            <li>CSS</li>
            <li>JavaScript</li>
            <li>jQuery</li>
          </ul>
          <div class="project-links">
            <a href="https://github.com/JaseySmith/scary-places-website" target="_blank"><i class="fab fa-github social-link" aria-hidden="true"></i></a>
            <a href="http://scaryplacesnearme.com/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
        <div class="card mq-padding alt-overlap">
          <p class="text green">Featured Project</p>
          <h3>E-commerce Website</h3>
          <p class="text description">A shopify e-commerce website I developed for a client needing a platform to sell her custom clay earrings. Built using the Debut theme with some custom HTML/CSS and plug-ins for some extra customization.</p>
          <ul class="text tech-list">
            <li>Shopify</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>E-commerce</li>
          </ul>
          <div class="project-links">
            <a href="https://haysclaysco.com/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
        <div class="card second-half">
          <a href="https://haysclaysco.com/" target="_blank"><img src="img/hays-clays-co.webp"></a>
        </div>
        <div class="card first-half last-row">
          <a href="http://jaseysmith.com/" target="_blank"><img src="img/jasey-smith.webp"></a>
        </div>
        <div class="card mq-padding text-overlap last-row">
          <p class="text green">Featured Project</p>
          <h3>Portfolio Website</h3>
          <p class="text description">The front-end is developed with CSS, JS, and jQuery. The back-end includes a PHP script that sends form submissions to my phone. I also used particles.js for creating the particles.</p>
          <ul class="text tech-list">
            <li>CSS</li>
            <li>JavaScript</li>
            <li>jQuery</li>
            <li>PHP</li>
          </ul>
          <div class="project-links">
            <a href="https://github.com/JaseySmith/web-dev-portfolio" target="_blank"><i class="fab fa-github social-link" aria-hidden="true"></i></a>
            <a href="http://jaseysmith.com/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="scroll-element js-scroll fade-in-bottom">
        <h2>Say Hello!</h2>
        <p class="text margin-top">Have a question or want to work together?</p>
      </div>
      <div class="container scroll-element js-scroll fade-in-bottom">
        <form class="form" method="POST" action="index.php#contact">
          <input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
          <?php echo $nameAlert; ?>
          <input type="text" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>">
          <?php echo $emailAlert; ?>
          <textarea name="message" placeholder="How may I help?"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?></textarea>
          <?php echo $error; ?>
          <div class="center">
            <input type="submit" name="submit" class="btn text" id="btn" value="Send Message">
          </div>
        </form>
      </div>
    </section>
    <footer>
      <div class="container">
        <nav>
          <ul>
            <li><a href="https://www.instagram.com/jaseyhsmith/" target="_blank"><i class="fab fa-instagram social-link"></i></a></li>
            <li><a href="https://github.com/JaseySmith" target="_blank"><i class="fab fa-github social-link"></i></a></li>
            <li><a href="mailto:jaseyhsmith@gmail.com"><i class="fa-solid fa-envelope social-link"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jasey-smith-34594a15b/" target="_blank"><i class="fab fa-linkedin-in social-link"></i></a></li>
            <li><a href="https://codepen.io/JaseySmith" target="_blank"><i class="fab fa-codepen social-link"></i></a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>