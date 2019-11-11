<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="main.css"> 
</head>
<body>

<div id="header">
  <span>swing your fists</span>
</div>

<!--navigation bar-->
<nav id="container">
  <ul id="nav-bar">
    <li class="navLink"><a href="?page=home">Diego</a></li>
    <li class="navLink"><a href="?page=drumming">Drums</a></li>
    <li class="navLink"><a href="?page=column">Column</a></li>
    <li class="navLink"><a href="?page=art">Art</a></li>
    <li class="navLink"><a href="?page=photos">Photos</a></li>  
  </ul>
  <div id="navbarSupportedContent">
        <form id="searchForm">
            <input type="hidden" name="page" value="search">
            <input type="text" name="q" id="search" placeholder="Search posts">
            <button type="submit" id="searchButton"></button>
        </form>
  </div><!--'#navbarSupportedContent'-->
</nav><!--'.navbar'-->

<script src="main.js"></script>