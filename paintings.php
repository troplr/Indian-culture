<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: courier;
            font-size: 80%;
            text-align: center;
        }
        
        header {
            margin-top: 3%;
            border-top: 1px inset rgba(229, 223, 223, 0.63);
            border-bottom: 1px outset rgba(229, 223, 223, 0.24);
            height: 300px;
            background-color: #eee;
        }
        
        header h1 {
            font-size: 50px;
        }
        
        header a {
            margin: 0px;
            margin-top: 5%;
            font-size: 23px;
            display: inline-block;
            padding: 5px 15px;
            background-color: grey;
            text-decoration: none;
            color: #eee;
            border-radius: 100px;
        }
        
        header a:hover {
            transition: .3s;
            transform: scale(1.1);
            background-color: rgba(156, 198, 235, 0.71);
        }
        
        section {
            padding: 0;
            margin: 0;
            position: relative;
            top: -15px;
            text-align: center;
            margin: 0px 20%;
            background-color: #eee;
            height: auto;
        }
        
        section img {
            margin: auto;
            text-align: center;
            display: block;
            width: 700px;
            height: 600px;
            padding: 30px;
            padding-bottom: 50px;
            border: 1px double lightgrey;
        }
        
        section img:hover {
            transition: .3s;
            cursor: pointer;
            opacity: .5;
        }
        
        section h1 {
            font-size: 23px;
            text-shadow: 3px 3px 30px grey;
        }
        
        section p {
            margin: auto;
            font-size: 23px;
        }
        
        footer {
            height: 450px;
            background-repeat: no-repeat;
            text-align: center;
            background-color: lavender;
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
        
        #f2 h1 {
            color: firebrick;
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
    <header>
        <h1>Paintings</h1>
        <a href="#1">1.Padmapani & Vajrapani</a>
        <a href="#2">2.Sikh Gurus</a>
        <a href="#3">3.Nataraja</a>
        <a href="#4">4.Amar Singh</a>
        <a href="#5">5.Raja Sarabhoji</a>
        <a href="#6">6.Rama & Hanuman</a>

    </header>
    <section>
        <div>
            <br>
            <br>
            <h1 id="1">1.Padmapani & Vajrapani</h1>
            <br>
            <br>
            <img src="web_project/myphotos/Ajanta_Padmapani.jpg" style="width:400;float:right;margin:0;margin-left:30px;border-bottom:0px;">
            <img src="web_project/myphotos/ajanta.jpg" style="width:400px;margin:0;border-bottom:0px;">
            <p class="a" style="border:1px solid lightgrey;padding:14px 170px;">Paintings of Padmapani and Vajrapani on either side of the Buddha in Cave 1</p>
            <br>
            <br>
            <br>
            <br>

            <!-- ===============   -->

            <h1 id="2">2.Sikh Gurus</h1>
            <br>
            <img src="web_project/myphotos/Sikh_Gurus_with_Bhai_Bala_and_Bhai_Mardana.jpg" style="width:500px;padding-bottom:100px">
            <p class="a" style="position:relative;bottom:60px;font-size:20px;max-width:500px;">Sikh Gurus with Bhai Bala and Bhai Mardana - 20th century</p>
            <br>
            <br>
            <br>
            <br>

            <!-- ===============   -->

            <h1 id="3">3.Nataraja</h1>
            <br>
            <img src="web_project/myphotos/Venugopala_Tanjore_glass_painting.jpg" style="padding-bottom:100px;">
            <p class="a" style="position:relative;bottom:50px;font-weight:550;">Nataraja flanked by Sivagami, circa 19th century</p>
            <br>
            <br>
            <br>
            <br>

            <!-- ===============   -->

            <h1 id="4">4.Amar Singh</h1>
            <br>
            <img src="web_project/myphotos/xxx.jpg" style="width:700px;height:700px;padding-bottom:150px;">
            <p class="a" style="position:relative;bottom:80px;font-size:20px;max-width:700px;">
                Processional scene with Amar Singh, ruler of Thanjavur (1787-98) and Sarabhoji (1798-1832) - note the gilded chariots being pulled by Bulls
            </p>
            <br>
            <br>
            <br>
            <br>

            <!-- ===============   -->

            <h1 id="5">5.Raja Sarabhoji</h1>
            <br>
            <img src="web_project/myphotos/Raja_Sarabhoji_of_Tanjore.jpg" style="padding-bottom:100px;width:800px;height:800px;">
            <p class="a" style="position:relative;bottom:50px;font-weight:550;">Tanjore Glass painting of Raja Sarabhoji</p>
            <br>
            <br>
            <br>
            <br>

            <!-- ===============   -->

            <h1 id="6">6.Rama & Hanuman</h1>
            <br>
            <img src="web_project/myphotos/ram.jpg" style="padding-bottom:100px;width:800px;height:800px;">
            <p class="a" style="position:relative;bottom:70px;max-width:800;">Rama and Hanuman fighting Ravana, an album painting on paper, c1820 - British Museum Collection</p>
            <br>
        </div>
    </section>
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
