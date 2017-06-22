
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Management</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo $this->Url->build('/'); ?>bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo $this->Url->build('/'); ?>" class="brand-logo">Management</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo $this->Url->build('/'); ?>users/signup">Signup</a></li>
      </ul>

      
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  

<center> <?= $this->Flash->render(); ?></center>
  <div class="container">
    <?php echo $this->fetch('content'); ?>
  </div>

  


  <!--  Scripts-->
  <script src="<?php echo $this->Url->build('/');?>bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo $this->Url->build('/'); ?>bower_components/materialize/dist/js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
