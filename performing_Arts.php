<html>

<head>
    <style>
        body {
            background-color: aliceblue;
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: courier;
            font-size: 20px;
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
        }
        
        #main .back-image {
            background-image: url(web_project/myphotos/38.jpg);
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
            margin: 30px;
            border: 1px solid lightgrey;
            background-color: azure;
            width: 300px;
            height: 300px;
        }
        
        img:hover {
            transition: .5s;
            transform: scale(1.1);
            cursor: pointer;
        }
        
        figcaption {
            position: relative;
            bottom: 20px;
            background-color: azure;
            margin: auto;
            width: 300px;
            padding: 20px;
            border: 1px solid lightgrey;
        }
        
        footer {
            height: 550px;
            margin-top: 3%;
             background-repeat: no-repeat;
            text-align: center;
            background-color: #eee;
         }
        
        footer div {
            margin: auto;
            display: inline-block;
        }
        
        footer #f1 {
            max-height: auto;
            width: 200px;
            padding: 30px;
            margin: 0px 100px;
        }
        
        footer #f1 h2 {
            border-radius: 100px;
            color: firebrick;
        }
        
        footer #f1 a {
            border-radius: 10px;
        }
        
        footer #f1 a img:hover {
            transform: scale(1.3);
            transition: .3s;
        }
        
        footer #f1 a img {
            max-width: 50px;
            max-height: 50px;
            border-radius: 100px;
        }
        
        #f2 {
            padding: 30px;
            position: relative;
            top: -150px;
            right: 60px;
            text-align: justify;
        }
        #f2 h1{
            color:firebrick; 
        }
        
        #f2 a {
            color: dimgrey;
            font-size: 20px;
           }
        
        #f2 a:hover {
            text-decoration: underline;
            color: firebrick;
        }
        
        #f3 {
            padding: 30px;
            position: relative;
            left: 100px;
        }
        
        #f3 form {
            background-color: rgba(240, 248, 255, 0.65);
            border: 1px solid lightgray;
            padding: 20px;
            font-size: 20px;
            text-align: left;
             margin: 0;
        }
        
        #f3 h2 {
            font-size: 25px;
            background-color: rgba(240, 248, 255, 0.65);
            margin: 0;
             padding: 10px;
            color: firebrick;
            border: 2px solid lightgray;
        }
        
        #f3 form label {
            color: firebrick;
        }
        
        #f3 form input {
            font-size: 20px;
            padding: 5px;
            border: 1px solid black;
        }
        
        #f3 form input:hover {
            background-color: lightgray;
        }
        
        #button {
            color: aliceblue;
            background-color: gray;
        }
        
        #button:hover {
            background-color: lightgray;
            color: black;
        }


    </style>
</head>

<body>
    <div id="header">
        Performing Arts
    </div>
    <div id="main">
        <div class="back-image">
        </div>
        <div id="image-box">
            <h4 style="font-style:italic;text-shadow:3px 3px 30px grey;font-size:23px;
                        "><b> -- First chapter of Nātyaśāstra, sometime between 200BC -- 200AD</b></h4>
            <br>
            <br>
            <br>
            <br>
            <div class="image">
                <img src="web_project/myphotos/performing_Arts/27.jpg">
                <figcaption>Bhangra folk dance.</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Bharatanatyam_6.jpg">
                <figcaption>Indian has numerous dance-drama traditions </figcaption>
            </div>
            <br>

            <br>
            <br>
            <br>

            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Bharatanatyam_dancer.jpg">
                <figcaption>Bharatanatyam</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Classical_dances_of_India.jpg">
                <figcaption>Dance in India include classical (above), semiclassical, folk and tribal.</figcaption>
            </div>

            <br>
            <br>
            <br>

            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Kathakali_BNC.jpg">
                <figcaption>Kathakali</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Kuchipudi_Performer_DS.jpg">
                <figcaption>Kuchipudi</figcaption>
            </div>

            <br>
            <br>
            <br>

            <div class="image">
                <img src="web_project/myphotos/performing_Arts/Shiva_as_the_Lord_of_Dance_LACMA_edit.jpg">
                <figcaption>Shiva as Nataraja (Lord of Dance).</figcaption>
            </div>
            <div class="image">
                <img src="web_project/myphotos/performing_Arts/1.jpg">
                <figcaption>Odissi</figcaption>
            </div>

            <br>
            <br>
            <br>

        </div>
    </div>
        <footer>
            <div>
                <div id="f2">
                    <h1><ins>Popular Links</ins></h1>
                    <a href="https://en.wikipedia.org/wiki/Culture_of_India">- Culture of India</a>
                    <br>
                    <a href="http://www.culturalindia.net/">- For Enjoying Vacation</a>
                    <br>
                    <a href="http://www.livescience.com/28634-indian-culture.html">- Traditions and Customs of India</a>
                    <br>
                    <a href="http://www.mapsofindia.com/culture/">- map of india</a>
                </div>
                <div id="f1">
                    <h2><ins>Follow Us On:</ins></h2>
                    <a href="https://www.twitter.com"><img title="www.twitter.com" src="social_icons/twitter.jpg"></a>
                    <br>
                    <br>

                    <a href="https://www.fb.com"><img title="www.fb.com" src="social_icons/facebook.png.jpg"></a>
                    <br>
                    <br>

                    <a href="https://in.pinterest.com/"><img title="www.pintrest.com" src="social_icons/pin.png.jpg"></a>
                    <br>
                    <br>

                    <a href="https://www.tumblr.com/"><img title="www.tum.com" src="social_icons/tum.png.jpg"></a>
                    <br>
                    <br>
                </div>
                <div id="f3" onsubmit="return validate();">
                    <h2>Subscribe</h2>
                    <br>
                    <form action="form.php" name="myForm" onsubmit="return validate();" method="post" required>
                        <label>First_name:</label>
                        <br>
                        <input type="text" name="firstname" id="f_name" placeholder="type here..." required>
                        <br>
                        <br>
                        <label>Last_name:</label>
                        <br>
                        <input type="text" name="lastname" id="l_name" required>
                        <br>
                        <br>
                        <label>Email:</label>
                        <br>
                        <input type="email" name="email" id="email" required>
                        <br>
                        <br>
                        <input type="submit" name="submit" id="button" value="Subscribe">
                    </form>

                </div>
            </div>
        </footer>
        <script>
            function validate() {
                var x = document.forms["myForm"]["firstname"].value;
                var y = document.forms["myForm"]["lastname"].value;
                var z = document.forms["myForm"]["email"].value;
                var a = document.forms["myForm"]["number"].value;
                if (x == "" || x == null) {
                    alert("Please Enter First_Name");
                    return false;
                } else if (y == "" || y == null) {
                    alert("please Enter Last_Name");
                    return false;
                } else if (z == "" || z == null) {
                    alert("please Enter Email");
                    return false;
                } else if (a == "") {
                    alert("please Enter your mobile number");
                    return false;
                }
            }

        </script>
   

</body>

</html>
