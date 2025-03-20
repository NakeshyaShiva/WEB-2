<?php
require_once("function/Callpage.php");
Callpage("header");
Callpage("navbar");
if (isset($_GET['page'])) {
    Callpage($_GET['page']);
}else {
    Callpage("home");
}
Callpage("footer");

?>