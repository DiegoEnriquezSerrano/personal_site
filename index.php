<?php 

    include("functions.php");

    include("views/header.php");

    if(isset($_GET['page'])){

        if ($_GET['page'] == 'home') {

            include("views/home.php");

        } else if ($_GET['page'] == 'drumming') {

            include("views/drumming.php");

        } else if ($_GET['page'] == 'column') {

            include("views/column.php");

        } else if ($_GET['page'] == 'art') {

            include("views/art.php");

        } else if ($_GET['page'] == 'photos') {

            include("views/photos.php"); 

        } else if ($_GET['page'] == 'search') {

            include("views/search.php");

        }

    }else {

        include("views/home.php");

    }

    include("views/footer.php");

?>