<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script stlye="text/javascript" src="./js/jquery.js"></script>
    <script stlye="text/javascript" src="./js/easing.js"></script>
    <link rel="stylesheet" href="./css/lobby.css">
    <title>Lobby</title>
</head>
<body>


   
<!--____________________HEADER____________________-->

<header>
    <div class="left"><img src="./images/logo.png"></div>

    <div class="mid"></div>

    <div class="right"></div>

</header>

<!--____________________MAIN____________________-->
<div class="main">
    <?php while($c = $cat -> fetch()){?>
    <div class="col">
        <span><?php echo $c['nom'];?></span>
    </div>
    <?php } ?> 
</div>

<!--____________________FOOTER____________________-->

<div class="popup">
    <?php include("form_inscription.php"); ?>
</div>

<script type="text/javascript" src="./js/inscription.js"></script> 
</body>
</html>