<!-- <!doctype html> -->
<?php
  $result="";

  if (isset($_POST['submit'])) {
      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      $mail->Host='smtp.gmail.com';
      $mail->PORT=587;
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='tls';
      $mail->Username='vandaleyindus@gmail.com';
      $mail->Password='123456Sf';

      $mail->setFrom($_POST['email'],$_POST['name']);
      $mail->addAddress('vandaleyindus@gmail.com');

      $mail->isHTML(true);
      $mail->Subject='Form Submission: '.$_POST['subject'];
      $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'<h1>';


      if(!$mail->send()){
          $result="Something went wrong. Please try again.";
      }
      else{
          $result="Thanks ".$_POST['name']." for getting in touch with. I'll get back to you soon!";
      }

  }
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Alomgir Hossain</title>
        <link rel="shortcut icon" type="image/x-icon" href="AHlogo_icon.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:700i" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <a href="#" id="scroll" style="display: none;"><span></span></a>
      <header id="headwrap">
        <h3 id="#">Welcome</h3>

        <nav>
          <ul>
            <li id="menu_li">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#test">Testimonials</a>
                <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>

        <div class="menu" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>

        <div id="mySidenav" class="sidenav">
          <a href="#about">About</a>
          <a href="#projects">Projects</a>
          <a href="#test">Testimonials</a>
          <a href="#contact">Contact</a>
        </div>
      </header>

    <section id="welcome" class="wrapper">
      <img id="welcomepic" src="images/alom.jpg">
      <h1>ALOMGIR HOSSAIN</h1>
    </section>

    <section id="about">
      <div class="wrapper">
        <h2>About</h2>
      </div>

      <div id="mediaAbout" class="wrapper">
        <p >After spending several years working as an aeronautical engineer, food entrepeneur, and then shifting to software quality assurance, my natural curiosity and desire to understand how each process at every level works led me to explore the world of software engineering and web development. The ability to program computers to handle multiple tasks and flawlessly execute complex functions to simplify the lives of others was of great interest to me. I’ve always been excited about the capability of computer technology and look forward on mastering the ability to implement new solutions to increase efficiency and beyond.</p>
      </div>
    </section>

    <section id="projects" class="wrapper">
      <div class="container">
        <h2 class="mt-3">Projects</h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" align="middle">
            <div class="carousel-item active">
              <a href="https://github.com/Alom310/DriveWayz">
              <img id="projectImg" src="images/drivewayz.png" alt="#">
              <p>DriveWayz is a website that helps users rent out their driveway to anyone seeking parking.</p>
              </a>
            </div>
            <div class="carousel-item">
              <a href="https://github.com/nassBouz/Project3-NeighborAlert">
                <img id="projectImg" src="images/neighboralert.png" alt="#">
                <p>NeighborAlert is a website that helps users post useful information or questions about any neighborhood.</p>
              </a>
            </div>
            <div class="carousel-item">
              <a href="https://lunchcrunch.herokuapp.com/">
                <img id="projectImg" src="images/lunchcrunch.png" alt="#">
                <p>LunchCrunch is an app for the lunch budget conscious person in mind.</p>
              </a>
            </div>
          </div>

          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span id="carousel-control"><</span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span id="carousel-control">></span>
            <span class="sr-only" >Next</span>
          </a>
        </div>
      </div>
    </section>

    <section id="test" class="wrapper">
      <div class="container">
        <h2>Testimonials</h2>
        <div id="testCarousel" class="carousel slide" data-ride="carousel">
          <ol id="test-carousel-indicators" class="carousel-indicators">
            <li data-target="#testCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#testCarousel" data-slide-to="1"></li>
            <li data-target="#testCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" align="middle">
            <div class="carousel-item active">
              <blockquote>
                  I have known Alom on both a personal and professional level for the past 8 years. He is versatile, extremely personable and dependable, seeing through his commitments responsibly. He always puts 110% into whatever projects he's working on and his reliability is amazing. Alom is very crafty, logical, and is adept with technology and mechanics technology. He has shown proficiency in automotive and computing knowledge and is always current with the latest technology. In addition to his capabilities and skills, he is very humble and amiable and just an absolute pleasure to be around. I've had some of my favorite memories and experiences with Alom. I can say with complete confidence that I can always count on Alom.
                  <cite>David Huang, former coworker</cite>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget leo nunc, nec tempus mi? Curabitur id nisl mi, ut vulputate urna. Quisque porta facilisis tortor, vitae bibendum velit fringilla vitae! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget leo nunc, nec tempus mi? Curabitur id nisl mi, ut vulputate urna. Quisque porta facilisis tortor, vitae bibendum velit fringilla vitae!
                  <cite>Somebody famous</cite>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget leo nunc, nec tempus mi? Curabitur id nisl mi, ut vulputate urna. Quisque porta facilisis tortor, vitae bibendum velit fringilla vitae! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget leo nunc, nec tempus mi? Curabitur id nisl mi, ut vulputate urna. Quisque porta facilisis tortor, vitae bibendum velit fringilla vitae!
                  <cite>Somebody famous</cite>
              </blockquote>
            </div>
          </div>
          
          <a class="carousel-control-prev" href="#testCarousel" role="button" data-slide="prev">
              <span id="carousel-control"><</span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testCarousel" role="button" data-slide="next">
              <span id="carousel-control">></span>
              <span class="sr-only" >Next</span>
          </a>
        </div>
      </div>
    </section>
    <div style="height:20px;" id="contact"></div>
    <section>
        <h2 class="mt-3">Get in touch</h2>
        <h5>?= $result; ?</h5>
        <form action="index.php" method="post" enctype="text/plain">
          <input type="text" name="name" placeholder="Full name" required>
          <input type="text" name="mail" placeholder="Your e-mail" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <textarea name="message" rows="10" placeholder="Comment" required></textarea>
          <button type="subimt">Submit</button>
        </form>
    </section>

    <footer class="wrap">
      <div>
        <a href="https://github.com/Alom310" class="fa fa-github"></a>
        <a href="https://www.linkedin.com/in/alomgir-hossain-6322677/" class="fa fa-linkedin-square"></a>
      </div>
      <p class="copyright mt-3">&copy;2019 Alomgir Hossain</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src='js/app.js'></script>
    </body>
</html>