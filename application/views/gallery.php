<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeri</title>
    <style>
        .container
{
    width: 1280px;
    margin: 70px auto 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.container .box
{
    width: 300px;
    height: 300px;
    margin: 10px;
    box-sizing: border-box;
    display: inline-block;
}
.container .box .imgBox
{
    position: relative;
    z-index: -1;
    overflow: hidden;
}
.container .box .imgBox img
{
    max-width: 100%;
    height: 300px;
    transition: transform 2s;
}
.container .box:hover .imgBox img
{
    transform: scale(1.2)
}
.container .box .details
{
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    font-family: sans-serif;
    text-align: center;
}
    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style="margin: 0; padding: 0; font-family: 'Century Gothic', sans-serif; background-color:
#ededed; text-align: center;">
<header class="ob">
        <div class="atas">
              <div id="logo"><h1 "font-family: sans-serif;"><img style="width: 125px;margin-left:20px;float: left;" src="<?=base_url()?>assets/img/logo (1).png" alt=""> </h1></div>
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/dashboard/Angga/Portofolio">Home</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
<section class="content">
        <h1>Koleksi foto Gitar dan bass</h1>
        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/gitar1.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/bass1.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/gitar2.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/bass2.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/gitar3.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/bass3.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/gitar4.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/img/bass4.jpg" alt="">
                </div>
            </div>
        </div>

</body>
</html>
