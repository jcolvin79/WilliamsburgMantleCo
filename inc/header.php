<html>
  <head>
    <title>Williamsburg Mantle Company</title>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <nav class="nav-left">
          <ul>
            <li class="home <?php if ($section == "home") {echo "on";} ?>"><a href="index.php">Home</a></li>
            <li class="shop <?php if ($section == "shop") {echo "on";} ?>"><a href="shop.php">Shop</a></li>
          </ul>
        </nav>
        <div class="logo">
          <a href="index.php"></a>
        </div>
        <nav class="nav-right">
          <ul>
            <li class="about <?php if ($section == "about") {echo "on";} ?>"><a href="about.php">About</a></li>
            <li class="contact <?php if ($section == "contact") {echo "on";} ?>"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </header>
