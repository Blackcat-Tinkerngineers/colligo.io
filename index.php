<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cop-or-Not</title>

    <!-- stylesheet -->
    <link href="./assets/css/style2.css" rel="stylesheet">
    
    <!-- handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js" integrity="sha512-RNLkV3d+aLtfcpEyFG8jRbnWHxUqVZozacROI4J2F1sTaDqo1dPQYs01OMi1t1w9Y2FdbSCDSQ2ZVdAC8bzgAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script id="templateHB" type="text/x-handlebars-template">
      <img src="./assets/images/logo-2.svg">
      <h1>{{title}}</h1>
      <p>{{body}}</p>
      <a href="./swipe2.php">Click to begin</a>
    </script>
  </head>

  <body>
    <header>
      <section class="container">

        <nav>
          <ul class="navbar">
            <!-- current class styling -->
            <li class="current">
              <a href="./index.php">Home</a>
            </li>
            <li>
              <a href="./login.php">Login</a>
            </li>
            <li>
              <a href="./dashboard.php">Dashboard</a>
            </li>
            <li>
              <a href="./swipe2.php">Swipe Marketplace</a>
            </li>
            <li>
              <a href="./contact2.php">Contact us</a>
            </li>
          </ul>
        </nav>
      </section>
    </header>

    <article id="introduction">
      <section id="information" class="container">
        
      </section>
    </article>

    <footer>
      <p>&copy; Group Six</p>
    </footer>

    <script src="./no2.js"></script>
  </body>
</html>
