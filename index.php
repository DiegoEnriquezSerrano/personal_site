<?php 

include("functions.php");

include("views/header.html");

if(isset($_GET['page'])){
  if ($_GET['page'] == 'home') {
    include("views/home.html");
  } else if ($_GET['page'] == 'drumming') {
    include("views/drumming.html");
  } else if ($_GET['page'] == 'column') {
    include("views/column.html");
  } else if ($_GET['page'] == 'art') {
    include("views/art.html");
  } else if ($_GET['page'] == 'photos') {
    include("views/photos.html"); 
  } else if ($_GET['page'] == 'search') {
    include("views/search.php");
  }
} else {
  include("views/home.html");
}
include("views/footer.html");

?>