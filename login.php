<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="description" content="Server Project">
  <meta name="keywords" content="Infected-design, ID, Id, id, Freelancer, Media, IT, Tietotekniikka, Tietoturva, Ohjelmointi, Palvelu, Kotisivut, Kotisivuohjelmointi, Kotisivujen suunnittelu, Web-ohjelmointi, Webohjelmointi, Web, Web-design, Web-development, Web-devaus, Devaaminen, Developer, Git, GitHub, Project, Showcase, Project Showcase, Session based login, HTML5, CSS3, PHP7, HTML, CSS, PHP, jQuery, Bootstrap, Portsa, Port Arthur Turku, Turku, Turku Suomi, Suomi, Jussi, Jokinen, Jussi Jokinen, n00bsaiboth, Hobitti, Hobbit">
  <meta name="author" content="Jussi Jokinen">

  <link rel="stylesheet" href="../__/css/bootstrap.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-md static-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Login</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Frontpage</a>
          </li>
          <?php if(isset($_SESSION["user"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>     
          <?php } ?>     
        </ul>
      </div>
    </div>
  </nav>

  <section class="container">
    <div class="jumbotron">
      <?php
        if(!isset($_SESSION["user"])) {
      ?>
      <h2>Login</h2>
      <form action="login_process.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Insert your your username here.">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Insert your your password here.">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Send"> 
        <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Reset">   
      </form>
      <?php
        } else {
          echo "You're already logged in.";
        }
      ?>
    </div>
  </section>

  <?php
    if(!isset($_SESSION["user"])) {
  ?>

  <section>
    <div class="container">
      <article>
        <h3>Instructions</h3>
        <p>You can only login with an ["demo"] = "user" or ["pekka"] = "pouta", username and password combo.</p>
      </article>
    </div>
  </section>

  <?php
    }
  ?>


  <section>
    <div class="container">
      <article>
        <p>&nbsp;</a>
      </article>
    </div>
  </section>

  <footer class="py-4 bg-dark text-white-50">
    <div class="container">
      <small>Copyright &copy; 1984-2020 <a href="https://infected-design.net" target="_blank">infected-design.net</a>. </small>
    </div>
  </footer>
