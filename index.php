<?php 

$msg = "";

if (filter_has_var(INPUT_POST, "submit")){
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlentities($_POST["message"]);

  if (!empty($name) && !empty($email) && !empty($message)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL === false)){
      $msg = "Merci de revérifier votre email";
    }
    else{
      $toEmail = "wier.adam@gmail.com";
      $subject = "Contact Form";
      $body = "<h2>Contact form submitted</h2>
      <h4>Name</h4><p>$name</p>
      <h4>Email</h4><p>$email</p>
      <h4>Message</h4><p>$message</p>";

      $header = "MIME-Version: 1.0"."\r\n";
      $header .= "Content-Type:text/html;charset=UTF-8"."\r\n";
      $header .= "From: ".$name."<".$email.">"."\r\n";
      
      if (mail($toEmail, $subject, $body, $header)){
        $msg = "Votre email a été enovyé sans problème!";
      }
    }
  }
  else{
    $msg = "Merci de remplir tout le formulaire";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Adam Wier, Développeur Web</title>


  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.11/css/all.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quicksand'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Yeon+Sung'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nanum+Gothic'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Abril+Fatface'>

  <link rel="stylesheet" href="css/style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <!--Fix mobile responsiveness -->

  <div class="container-fluid">
    <header>
      <div class="navbar navbar-expand-md row d-flex" id="navigation">
        <nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-label="Navbar Button">

                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            
              </button>          
              <div class="collapse navbar-collapse" id="collapsibleNavbar">

  
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#about">À propos</a></li>
            <li class="nav-item"><a href="#certificates">Certificats</a></li>
            <li class="nav-item"><a href="#projects">Projets</a></li>
            <li class="nav-item"><a href="#contact">Contact</a></li>
          </ul>
          </div>
        </nav>
      </div>
    </header>
    <div class="main">
      <!-- Body -->
      <section id="about">
          <div class="element" id="first">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Adam Wier</h2>
            <h3>Développeur Web</h3>
            <br/>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
            <h4>Formation autodidacte en&nbsp:</h4>
            <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Accessibilité</li>
            <li>Flexbox</li>
            <li>CSS Grille</li>
          </ul>
          <h4>Notions de&nbsp:</h4>
          <ul>
            <li>Bootstrap</li>
            <li>jQuery</li>
            <li>SASS</li>
            <li>React/Redux</li>
            </ul>
            <h4>Logiciels&nbsp:</h4>
            <ul>
            <li>Visual Studio Code</li>
            <li>Git/GitHub</li>
          </ul>
          </div>
          <div class="col-md-6 col-12">
              <h4>Autres compétences et qualités&nbsp:</h4>
              <ul>
                <li>Diplomé en traduction et interprétation d'espagnol et anglais</li>
                <li>Bon niveau de français</li>
                <li>Notions de japonais</li>
                <li>Autonome</li>
                <li>Bon communicateur</li>
                <li>Bonne organisation</li>
                <li>Capable de travailler sous pression</li>
                <li>Motivé par l'enrichissement personnel</li>
              </ul>

              <h4>Hobbies&nbsp:</h4>
              <ul>
                <li>Langues et cultures</li>
                <li>Jeux vidéo, jeux de rôle, jeux de société</li>
                <li>Sport : musculation et footing</li>
              <li>Lecture : horreur, science-fiction, bandes-dessinées</li>
              </ul>
            </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                  <a href="../cv/cv-pdf.pdf"><br/>
                    <button type="button" class="btn big-button">Télécharger CV (PDF)
                      </button></a>
                      <a href="../cv/cv-word.docx"><br/>
                        <button type="button" class="btn big-button">Télécharger CV (DOCX)
                          </button></a>
        </div>
        </div>
      </section>
      <section id="certificates">
          <div class="element">
        <div class="row">
          <div class="col-12">
            <h2>Certificats</h2>
          </div>
          </div>
          <div class="row">
            <div class="col-12">
          <div id="certificate-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#certificate-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#certificate-carousel" data-slide-to="1"></li>
                  <li data-target="#certificate-carousel" data-slide-to="2"></li>
                  <li data-target="#certificate-carousel" data-slide-to="3"></li>
                </ol>  
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Les algorithmes et les structures des données en Javascript</h3>
                  <img class="certificate d-block img-fluid" src="../certificates/javascript.png" alt="Diplôme de JavaScript">
                  <div class="row">
                  <div class="col-md-6 col-12">
                    <h4>Thèmes Abordés&nbsp:</h4>
                  <ul>
                    <li>ES6</li>
                    <li>Expressions rationnelles</li>
                    <li>Programmation orientée objet</li>
                    <li>Programmation fonctionelle</li>
                    <li>Algorithmes</li>
                  </ul>
                </div>
                <div class="col-md-6 col-12 d-flex">
                  <a href="https://www.freecodecamp.org/certification/adamwier/javascript-algorithms-and-data-structures"  target="_blank" rel="noopener">
                    <button type="button" class="btn normal-button" aria-label="Voir Diplôme de JavaScript"><i class="fas fa-user-graduate"></i></button></a>
                </div>
              </div>
              </div>
                <div class="carousel-item">
                    <h3>Webdesign réactif</h3>
                    <img class="certificate d-block img-fluid" src="../certificates/responsive-web-design.png" alt="Diplôme de Webdesign Réactif">
                    <div class="row">
                    <div class="col-md-6 col-12">
                        <h4>Thèmes Abordés&nbsp:</h4>
                        <ul>
                          <li>HTML et CSS</li>
                          <li>Conception visuelle appliquée</li>
                          <li>Accessibilité appliquée</li>
                          <li>Flexbox</li>
                          <li>CSS Grid/Grille</li>
                        </ul>
                  </div>
                  <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.freecodecamp.org/certification/adamwier/responsive-web-design"  target="_blank" rel="noopener">
                        <button type="button" class="btn normal-button" aria-label="Voir Diplôme de Webdesign Réactif"><i class="fas fa-user-graduate"></i></button></a>
                  </div>
                </div>
                </div>
                <div class="carousel-item">
                    <h3>Introduction à la programmation interactive en Python (Partie 1)</h3>
                    <img src="../certificates/python-part-one.png" class="d-block certificate img-fluid" alt="Diplôme de Introduction à la programmation interactive en Python (Partie 1)">
                    <div class="row">
                    <div class="col-md-6 col-12">
                        <h4>Thèmes Abordés&nbsp:</h4>
                        <ul>
                          <li>Fonctions</li>
                          <li>Programmation évènementielle</li>
                          <li>Modélisation de mouvement </li>
                          <li>Canevas</li>
                          <li>Saisie clavier</li>
                        </ul>
                  </div>
                  <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.coursera.org/account/accomplishments/certificate/ZNFD72L43GGL"  target="_blank" rel="noopener">
                        <button type="button" class="btn normal-button" aria-label="Voir Diplôme de Introduction à la programmation interactive en Python (Partie 1)"><i class="fas fa-user-graduate"></i></button></a>
                  </div>
                </div>
                </div>
                <div class="carousel-item">
                    <h3>Introduction à la programmation interactive en Python (Partie 2)</h3>
                    <img src="../certificates/python-part-two.png" class="d-block certificate img-fluid" alt="Diplôme de Introduction à la programmation interactive en Python (Partie 2)">
                    <div class="row">
                    <div class="col-md-6 col-12">
                        <h4>Thèmes Abordés&nbsp:</h4>
                        <ul>
                          <li>Saisie souris</li>
                          <li>Dictionnaires</li>
                          <li>Sprites</li>
                          <li>Physiques des jeux vidéo</li>
                          <li>Animation</li>
                        </ul>
                  </div>
                  <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.coursera.org/account/accomplishments/certificate/X3PR44R9HUB5"  target="_blank" rel="noopener">
                        <button type="button" class="btn normal-button" aria-label="Voir Diplôme de Introduction à la programmation interactive en Python (Partie 2)"><i class="fas fa-user-graduate"></i></button></a>
                  </div>
                </div>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#certificate-carousel" role="button" data-slide="prev">
                <span ><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#certificate-carousel" role="button" data-slide="next">
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          </div>
            </div>
        </div>
      </section>
      <section id="projects">
    <div class="element">
    <div class="row">
      <div class="col-12">
        <h2>Projets</h2>
        </div>
      </div>
      <div class="row">
      <div class="col-12 text-center">
        <h4>Projets de développement web</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-4 sample">
        <h5>Page produit</h5>
        </div>
        <div class="col-4 sample">
            <h5>Chronomètre Pomodoro</h5>
            </div>
            <div class="col-4 sample">
                <h5>TwitchTV API</h5>
                </div>
                </div>
                <div class="row text-center">
                <div class="col-4">
        <img src="../images/simple-ricks.png" alt="Page de produit" class="preview-pic"><br/>
        <a href="https://codepen.io/donthatedontkill/full/VBVZyo" target="_blank" rel="noopener">
          <button type="button" class="btn normal-button" aria-label="Voir page de produit"><i class="fas fa-eye"></i></button></a>
            </div>
            <div class="col-4">
                <img src="../images/pomodoro.png" alt="Chronomètre Pomodoro" class="preview-pic"><br/>
                <a href="https://codepen.io/donthatedontkill/full/dgVdYe/" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button half-size" aria-label="Voir chronomètre pomodoro sur CodePen"><i class="fas fa-eye"></i></button></a>
                  <a href="https://chrome.google.com/webstore/detail/super-pomodoro-timer/jcfdgbccjkljjalphemlfnaahmnfilaa" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button half-size" aria-label="Voir chronomètre pomodoro sur Chrome Store"><i class="fab fa-chrome"></i></button></a>
            </div>
            <div class="col-4">
                <img src="../images/twitch.png" alt="Twitch API" class="preview-pic"><br/>
                <a href="https://codepen.io/donthatedontkill/full/vjrePv/" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button"  aria-label="Voir page de Twitch API"><i class="fas fa-eye"></i></button></a>
                </div>
                </div>
                <div class="row">
                  <div class="col-4">
            <h5>Objectifs&nbsp:</h5>
              <ul>
            <li>Flexbox</li>
            <li>Accessibilité</li>
          <li>Les requêtes médias</li>
        </ul>
      </div>
        <div class="col-4">
            <h5>Objectifs&nbsp:</h5>
            <ul>
            <li>React</li>
            <li>CSS Grid</li>
            <li>Deployement d'extension Chrome</li>
          </ul>
      </div>
      <div class="col-4">
          <h5>Objectifs&nbsp:</h5>
          <ul>
          <li>Javascript</li>
          <li>APIs/JSON</li>
          <li>Animation</li>
        </ul>
      </div>
     </div>
     <div class="row">
        <div class="col-12 text-center" id="codepen">
          <strong><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">
            <button type="button" class="btn normal-button"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>
            Plus de projets à voir sur mon profil Codepen</strong>
        </div>
      </div>
      <div class="row top-buffer">
          <div class="col-12 text-center">
            <h4>Projets en Python</h4>
              <h5>N'oubliez pas de cliquer <i class="fas fa-play"></i><br/>
              Google Chrome Exigé</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-4 sample">
            <h5>Astéroïdes</h5>
            </div>
            <div class="col-4 sample">
                <h5>Pong</h5>
                </div>
                <div class="col-4 sample">
                <h5>Blackjack</h5>
                </div>
                </div>
                <div class="row text-center">
                <div class="col-4">
            <img src="../images/asteroids.png" alt="Asteroids" class="preview-pic"><br/>
            <a href="http://www.codeskulptor.org/#user45_Kp9I2FikSN_9.py" target="_blank" rel="noopener">
                <button type="button" class="btn normal-button"  aria-label="Voir Astéroïdes"><i class="fas fa-eye"></i></button></a>
          </div>
          <div class="col-4">
              <img src="../images/pong.png" alt="Pong" class="preview-pic"><br/>
              <a href="http://www.codeskulptor.org/#user44_IZkCmVtC8l_3.py" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button"  aria-label="Voir Pong"><i class="fas fa-eye"></i></button></a>
            </div>
            <div class="col-4">
                <img src="../images/blackjack.png" alt="Blackjack" class="preview-pic"><br/>
                <a href="http://www.codeskulptor.org/#user44_Eep4ag07be_7.py" target="_blank" rel="noopener">
                    <button type="button" class="btn normal-button"  aria-label="Voir Blackjack"><i class="fas fa-eye"></i></button></a>
              </div>
          </div>
    </div>
  </section>
  <section id="contact">
    <div class="element">
    <div class="row">
      <div class="col-md-4 col-12">
        <h2>Contact</h2>
      </div>
      <div class="col-md-8 col-12">
        <div class="row text-center">
          <div class="col-lg-4">
            <a href="https://www.linkedin.com/in/adamwier/" target="_blank" rel="noopener"><button type="button" class="btn normal-button"><i class="fab fa-linkedin"></i>
                LinkedIn</button></a>
          </div>
          <div class="col-lg-4">
            <a href="https://www.freecodecamp.org/adamwier" target="_blank" rel="noopener"><button type="button" class="btn normal-button"><i class="fab fa-free-code-camp"></i></i>
                FreeCodeCamp</button></a>
          </div>
          <div class="col-lg-4">
            <a href="https://www.github.com/AdamWier" target="_blank" rel="noopener"><button type="button" class="btn normal-button"><i class="fab fa-github-square"></i>
                GitHub</button></a>
          </div>
        </div>
        <div class="row form-group no-break">
          <div class="col-12 text-center">
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact">
              <label for="name">Votre nom&nbsp: </label><br/>
              <input type="text" class="form-control" required name="name" placeholder="Votre nom ici" value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
              <label for="email">Votre adresse mail&nbsp: </label>
              <input type="email" class="form-control" required name="email" placeholder="Votre adresse mail ici" value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
              <label for="message">Votre message&nbsp: </label>
              <textarea name="message" class="form-control" required><?php echo isset($_POST["message"]) ? $message : ""; ?></textarea>            
            <button type="submit" class="btn big-button" name="submit"><i class="fas fa-at"></i>
                Email</button>
              </form>
              <?php if ($msg != ""): ?>
              <span><?php echo $msg; ?></span>
              <?php endif; ?>
              </div>
        </div>
      </div>
      </div>
    </section>
    </div>
</body>

</html>