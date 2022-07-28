<?php include 'action.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a id="logo" href="index.php"><span>J</span>S</a>
        <div class="nav">
          <a href="#home" onclick="linkClick()" class="text hover-effect">Home</a>
          <a href="#about" onclick="linkClick()" class="text hover-effect">About</a>
          <a href="#projects" onclick="linkClick()" class="text hover-effect">Work</a>
          <a href="#contact" onclick="linkClick()" class="text hover-effect">Contact</a>
          <label id="toggle" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider"></div>
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
          <p class="text lighter-text">I'm a front-end web developer located in Sacramento, CA. I have a passion for turning ideas/businesses into exceptional digital experiences. Let's build something great together!</p>
          <a href="#projects" class="btn text">View my work</a>
        </div>
      </div>
    </section>
    <section id="about">
      <h2>About Me</h2>
      <p class="text margin-top lighter-text">All you need to know about my expertise and more.</p>
      <div class="container">
        <div class="half-column flex-icons">
          <div class="wrap">
            <i class="fa-brands fa-node-js"></i>
            <p class="text show">Node.js</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-html5"></i>
            <p class="text show">HTML5</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-sass"></i>
            <p class="text show">Sass</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-bootstrap"></i>
            <p class="text show">Bootstrap</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-js"></i>
            <p class="text show">JavaScript</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-git-alt"></i>
            <p class="text show">Git</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-react"></i>
            <p class="text show">React</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-css3-alt"></i>
            <p class="text show">CSS3</p>
          </div>
          <div class="wrap">
            <i class="fa-brands fa-php"></i>
            <p class="text show">PHP</p>
          </div>
        </div>
        <div class="half-column content">
          <div>
            <h3>Designer<i class="fa-solid fa-brush"></i></h3>
            <p class="text lighter-text">I believe in giving the user all the information they need, in a way they will enjoy. I achieve this through visual hierarchy, a color palette that aligns with the brand, and much more.</p>
          </div>
          <div>
            <h3>Developer<i class="fa-solid fa-file-code"></i></h3>
            <p class="text lighter-text">I enjoy watching ideas come to life in the browser. Whether you need a hand coded static website or a Shopify e-commerce site, I can provide just about any web solution for you.</p>
          </div>
          <div>
            <h3>Interests<i class="fa-solid fa-golf-ball-tee"></i></h3>
            <p class="text lighter-text">You can find me doing various outdoor activities when I'm not coding. I enjoy a nice hike, round of golf with friends, and snowboarding somewhere in the Sierra Nevada.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="projects">
      <h2>Recent Work</h2>
      <p class="text margin-top lighter-text">Here are a few projects I've worked on recently.</p>
      <div class="container">
        <div class="card">
          <a href="http://scaryplacesnearme.com/" target="_blank"><img src="img/project-one-img.webp"></a>
          <div class="overlay">
            <h3>Scary Places<i class="fa-solid fa-square-arrow-up-right"></i></h3>
            <p class="text lighter-text">Find scary places searching a database using Google Maps API.</p>
          </div>
        </div>
        <div class="card">
          <a href="https://haysclaysco.com/" target="_blank"><img src="img/project-two-img.webp"></a>
          <div class="overlay">
            <h3>Hays Clays Co<i class="fa-solid fa-square-arrow-up-right"></i></h3>
            <p class="text lighter-text">A Shopify e-commerce website with a customized debut theme.</p>
          </div>
        </div>
        <div class="card">
          <a href="http://jaseysmith.com/" target="_blank"><img src="img/project-three-img.webp"></a>
          <div class="overlay">
            <h3>Jasey Smith<i class="fa-solid fa-square-arrow-up-right"></i></h3>
            <p class="text lighter-text">My Static web portfolio built with a handful of JavaScript.</p>
          </div>
        </div>
      </div>
      <div class="center">
        <a href="https://github.com/JaseySmith" class="btn text" target="_blank">View Github<i class="fab fa-github social-link"></i></a>
      </div>
    </section>
    <section id="contact">
      <h2>Say Hello!</h2>
      <p class="text lighter-text">Have a question or want to work together?</p>
      <div class="container">
        <form class="form" method="POST" action="index.php#contact">
          <input class="scroll-element js-scroll fade-in" type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
          <?php echo $nameAlert; ?>
          <input class="scroll-element js-scroll fade-in" type="text" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>">
          <?php echo $emailAlert; ?>
          <textarea class="scroll-element js-scroll fade-in" name="message" placeholder="How may I help?"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?></textarea>
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
  <script src="scripts/particles.js"></script>
  <script src="scripts/dark_mode.js"></script>
  <script src="scripts/navbar.js"></script>
</body>
</html>