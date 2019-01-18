<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <style>
        .contact {
            font-size: 1cm; text-decoration: none;
            color: blanchhedalmond; padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease; font-family:sans-serif;
        }
        .contact :hover{
            background-color: tomato; color: black;
            border: 2px solid tomato; border-radius: 40px;
            transition-duration: 0.5s;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style="margin: 0; padding: 0; font-family: fantasy; background: linear-gradient(135deg,
#325adf 0%, #e753Of 100%); text-align: center">
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
    <img style="width: 200px; margin-bottom: 95px;" src="" alt="">
    <br>
    <a href="" class="contact">Silakan contact dibawah ini</a><br>
    <a href="" class="contact">WA : 0812345678910</a>
    <a href="" class="contact">IG : @cortmusicindonesia</a>
</body>
</html>
