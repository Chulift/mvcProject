<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <style>
      H1 {
          font-size: 56px;
          margin-bottom: 18px;
          font-family: 'Pacifico', cursive;
      }
    </style>
    <title><?= $title ?></title>
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login">LOG IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<?= $content ?>
</body>
</html>
