<?php
  session_start();

  if(isset($_SESSION["user"])) {
    $status = "you're logged in.";
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Session based login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="description" content="...">
  <meta name="keywords" content="Freelancer, Portsa, Port Arthur Turku, Turku, Turku Suomi, Suomi, Media, IT, Tietotekniikka, Ohjelmointi, Palvelu, Jussi, Jokinen, Jussi Jokinen, n00bsaiboth, Hobitti, Hobbit">
  <meta name="author" content="Jussi Jokinen">

  <link rel="stylesheet" href="../__/css/bootstrap.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-md static-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Session based login</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <?php if(!isset($_SESSION["user"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>          
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <section>
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-6">Welcome to simple session based login</h1>
        <hr class="my-4">        
        <?php
          if(isset($status)) {
            echo htmlspecialchars($status);
          } else {
            echo "you're not currently logged in.";
          }
        ?>
      </div>
    </div>
  </section>

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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="../__/js/bootstrap.min.js"></script>
</body>
</html>