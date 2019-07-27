<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <title>Knit Finland</title>
</head>

<body>
    <i id="icon-menu" class="fa fa-bars"></i>
    <i id="icon-menu-close" class="fa fa-times"></i>
    <nav id="menu">
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#about_me">About me</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <header id="header" class="main">

        <div id="title">
            <h1>Knit Finland</h1>
        </div>

        <div class="image-presentation">
            <img src="../contents/images/header/header.jpg">
        </div>

        <div class="article introduction">
            <p>Hello and Welcome to my page dedicated to my book about finnish knitting. I had the idea to combine the amazing country i used to live in for 10 years with my passion for knitting. This book presents finnish knitting in an inconventional way, with a new  eye, a modern one. 
I intend to open some awareness on this country through its knitting and crochet culture, an art that is widely practiced in Finland and very present in its life style. I’m writing this book because the knitting i have discovered there is beautiful, neat, natural and in harmony with finnish people’s life. Their knittings are at their image.You will find in this book traditionnal works, 
unavoidable ones, but also my interpretation of trends that i have found there, bearing the marks of every season.</p>
        </div>

    </header>

    <section id="gallery" class="main">

        <div id="image-wrapper" class="hidden">
            <img id="image-destination" src="">
        </div>

        <h2>Gallery</h2>
        <div class="article pictures">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=1">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=2">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=3">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=4">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=5">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=6">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=7">
            <img class="image-gallery" src="https://picsum.photos/600/800?random=8">
        </div>
    </section>


    <section id="about_me" class="main">
        <h2>About me</h2>
        <div class="article text">
            <p>My name is Eloïse. I am a french woman obsessed with crochet and knitting. 

From 2004 until 2014, I have lived in Finland. There, I fell in love with its stunning nature, its quietness and with its crafts. Finland is definitely a country for crafters, with a subtle and minimalistic approach.
 
I knit and crochet a lot, I also make make my own designs. I am also a Graphic Designer, which is my first profession. The idea of this book came almost the same day I have reconnected with knitting. That day, i was hosting one of my dearest friends, Niina, who started knitting... I felt like a boom in my heart and asked her to teach me the continental method. In France, knitting is taught with the English method and i could never really cope with it. I also had no idea another technique existed! Ever since, I could not be stopped and immediately started to build this idea about writting about finnish knitting, the idea behind being to modernize some classicals, using new colors and new combinations.</p>
        </div>
    </section>

    <section id="contact" class="main">
        <h2>Contact</h2>
        <div class="article contact">
            <form method="post" action="index.php?action=sendMessage">
                <div class="divInput">
                    <label for="name">Full name :</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>

                <div class="divInput">
                    <label for="email">Your email :</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="divInput">
                    <label for="subject">Subject :</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject" required>
                </div>

                <div class="divInput">
                    <label for="message"> Message :</label>
                    <textarea name="message" id="message" required></textarea>
                </div>

                <div class="divInput">
                    <button type="submit">Send</button>
                </div> 
            </form>
        </div>
    </section>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>