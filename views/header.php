<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
<!--    <link rel="stylesheet" href="assets/css/style.css">-->
    <style>
        /*h1*/
        /* {*/
        /*     background-color: red;*/
        /*     color: white;*/
        /*     font-size:70px;*/
        /* }*/
        /*.test*/
        /*{*/
        /*    background-color: red;*/
        /*    color: white;*/
        /*    font-size:70px;*/
        /*}*/
        /***/
        /*{*/
        /*    background-color: red;*/
        /*    color: white;*/
        /*    font-size:70px;*/
        /*}*/
    </style>

</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button type="button" class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li>
                    <a href="web.php?page=home" class="nav-link ">Home</a>
                </li>
                <li>
                    <a href="web.php?page=about" class="nav-link ">About</a>
                </li>
                <li>
                    <a href="web.php?page=contact" class="nav-link ">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php foreach ($categories as $category) { ?>
                        <li><a href="web.php?page=category&&id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="web.php?page=gallery" class="nav-link ">Gallery</a></li>
                <li><a href="" class="nav-link ">Career</a></li>
                <li><a href="" class="nav-link ">Gallery</a></li>
                <li><a href="" class="nav-link ">Career</a></li>

            </ul>
            <ul class="navbar-nav">
                <li><a href="web.php?page=login" class="nav-link ">Login</a></li>
                <li><a href="web.php?page=logout" class="nav-link ">Logout</a></li>
                <li><a href="" class="nav-link ">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--compiler of html is browser-->
<!--css is class based stylesheet language.
css class basic syntax:
selector
{
property:value;
property:value;
property:value;
}

selector can be:
html tag,user define,special syntax


css class example:

.html,.css,.php
html tags block label and inline.
h1 and p is block label.
a and span inline. jototuku content tototuku.float:left make inline
height:300px,border:300px,padding:300px; equal to height:300px dile egula value pay
box-sizing:border-box; height er padding border bad dey
---------->






<!--<ul class="menu">-->
<!--    <li><a href="web.php?page=home">Home</a></li>-->
<!--    <li><a href="web.php?page=about">About</a></li>-->
<!--    <li><a href="web.php?page=contact">Contact</a></li>-->
<!--</ul>-->
<!---->
<!--<br/>-->
<!--<br/>-->










