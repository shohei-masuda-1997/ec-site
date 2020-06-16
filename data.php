<?php
require_once("menus.php");
$t_shirts= new Menus("T-shirts","new","https://images.unsplash.com/photo-1564584217132-2271feaeb3c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80","2500");
$denim_pants= new Menus("Denim-pants","new","https://images.unsplash.com/photo-1565084888279-aca607ecce0c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80","4900");
$sneaker= new Menus("Sneaker","used","https://images.unsplash.com/photo-1565379793984-e65b51b33b37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80","9500");
$jacket= new Menus("Jacket","used","https://images.unsplash.com/photo-1551028719-00167b16eac5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=375&q=80","12000");
$cap=new Menus("Cap","new","https://images.unsplash.com/photo-1521369909029-2afed882baee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80","2900");
$socks=new Menus("Socks","new","https://images.unsplash.com/photo-1535488407783-1c7c7152e48a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80","1000");
$menus=array($t_shirts,$denim_pants,$sneaker,$jacket,$cap,$socks);

?>
