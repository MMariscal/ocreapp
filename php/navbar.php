<?php
    session_start();
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="app/index.php"><b>OcreAPP</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <?php 
                    if (!isset($_SESSION["user_id"])){
                        echo '<li><a href="./registro.php">REGISTRO</a></li>';
                        echo '<li><a href="./login.php">LOGIN</a></li>';
                    }else{
                        echo '<li><a href="./php/logout.php">SALIR</a></li>';
                    }
                    if (isset($_SESSION["fullname"])){
                        echo '<li><a href="#">Ha iniciado sesión como: '.$_SESSION["fullname"].'</a></li>';
                    }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
