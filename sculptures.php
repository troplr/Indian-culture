<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}
?><html>

<head>
    <style>
        body {
            background-color: aliceblue;
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: courier;
            font-size: 20px;
            background-attachment: fixed;
        }
        
        #header {
            text-shadow: 3px 3px 30px grey;
            font-weight: bolder;
            margin: auto;
            font-size: 35px;
            position: relative;
            top: 10%;
            left: -33%;
        }
        
        #main {
            margin: auto;
            margin-top: 5%;
            border: 1px solid lightgrey;
            width: 1500px;
            height: auto;
            background-color: #eee;
            background-attachment: fixed;
        }
        
        #main .back-image {
            background-image: url(web_project/myphotos/Sculptures/Column,_Sanchi.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
        }
        
        #main .back-image img {
            height: inherit;
        }
        
        .image {
            display: inline-block;
            margin: auto;
        }
        
        .image img {
            padding: 20px;
            margin: 30px;
            border: 3px outset lightgray;
            background-color: azure;
            width: 300px;
            height: 300px;
            border-radius: 10px;
            box-shadow: 1px 1px 2px 1px lightgray;
        }
        
        img:hover {
            cursor: pointer;
            background-color: #d6d6d6;
            transition: .3s;
         }
        
        figcaption {
            position: relative;
            bottom: 20px;
            background-color: azure;
            margin: auto;
            width: 300px;
            padding: 20px;
            border: 1px solid lightgrey;
            border-radius: 20px;
            box-shadow: 1px 1px 5px grey;
        }
        
        figcaption:hover {
            font-weight: 800;
            border-color: #454545;
            cursor: pointer;
            transform: scale(1.1);
            transition: .3s;
        }
        
        footer {
            height: 300px;
            background-color: #d6d6d6;
            border-top: 1px solid #c9c2c2;
        }
        
        footer a {
            text-decoration: none;
            border: 1px solid lightgrey;
            border-radius: 100px;
            padding: 5px 30px;
        }
        
        footer a:hover {
            color: Black;
            transition: .3s;
            font-weight: bolder;
            background-color: azure;
        }

    </style>
    <script>
        function change(x) {
            x.style.transform = "scale(1.3);"
        }

    </script>
</head>

<body>
    <div id="header">
        Sculpture
    </div>
    <div id="main">
        <div class="back-image">
        </div>
        <div id="image-box">
            <h4 style="font-style:italic;text-shadow:3px 3px 30px grey;font-size:23px;
                        "><b>- The first known sculpture in the Indian subcontinent is from the Indus Valley civilization (3300–1700 BC), found in sites at Mohenjo-daro and Harappa in modern-day Pakistan.</b></h4>
            <br>
            <br>
            <br>
            <br>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Asokanpillar-crop.jpg" onmouseover="change(this);">
                <figcaption>Ashoka Pillar, Vaishali, Bihar, c. 250 BCE</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Bouddha_Hadda_Guimet_181171.jpg">
                <figcaption>Buddha head from Hadda, Afghanistan, 3rd–4th centuries</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Buddha_from_Sarnath.jpg">
                <figcaption>Buddha from Sarnath, 5–6th century CE</figcaption>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Column,_Sanchi.jpg">
                <figcaption>Torana or stupa gateway at Sanchi, c. 100 CE or perhaps earlier, with densely packed reliefs</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Dancing_Girl_of_Mohenjo-daro.jpg">
                <figcaption>The "dancing girl of Mohenjo Daro", 3rd millennium BCE (replica)</figcaption>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Gandhara_Buddha_(tnm).jpeg">
                <figcaption>One of the first representations of the Buddha, 1st-2nd century CE, Gandhara</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Jaisalmer_Jain_Temple_6.jpg">
                <figcaption>Marble figure, Jaisalmer Jain Temple, Rajasthan</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/Sculptures/Jar,_Indus_Valley_Tradition,_Harappan_Phase,_Quetta,_Southern_Baluchistan,_Pakistan,_c._2500-1900_BC_-_Royal_Ontario_Museum_-_DSC09717.jpg">
                <figcaption>Indus Valley pottery, 2500–1900 BCE</figcaption>
            </div>

            <br>
            <br>
            <br>

        </div>
        <footer>
            <h1>About</h1>
            <a href="#">Owner Info</a>
            <br>
            <br>
            <a href="#">licence Agreement</a>
        </footer>
    </div>

</body>

</html>
