<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <style>
        body {
            background-color: white;
        }
        
        #main {
            width: 70%;
            height: auto;
            margin: auto;
            text-align: center;
            text-shadow: 3px 3px 30px gray;
            color: #fff5f0;
           }
        
        header {
            height: 100px;
            border: 1px solid lightgray;
             background-color: #eee;
            border-radius: 10px;
        }
        
        header h1 {
            position: relative;
            color: #454545;
            top: 10px;
        }
        
        section {
            height: auto;
        }
        
        section .personal_details {
            height: 300px;
            text-align: left;
            border: 1px solid #eee;
            margin: 5%;
            color: black;
            text-shadow: none;
            padding: 30px;
            background-color:#eee;
            border:1px solid lightgray;
            border-radius: 10px;
         }
        
        .personal_details img {
            float: right;
            border-radius: 30%;
            border: 1px inset lightgray;
        }
        
        #box {
            height: 100px;
            margin: 5%;
            border: 1px solid lightgray;
            background-color: #eee;
             border:1px solid lightgray;
            border-radius: 10px;
        }
        
        #box div {
            height: 50px;
            width: 200px;
            border: 1px inset lightgray;
            display: inline-block;
            margin: 2%;
            background-color: lightgray;
            border-radius: 10px;
        }
        
        #box div h1 {
            text-shadow: none;
            color: #454545;
            margin: .5%;
            position: relative;
            top: 10px;
        }
        
        #big-box {}
        
        #big-box div {
            border: 1px solid lightgray;
            height: 200px;
            width: 300px;
            margin: 1%;
            display: inline-block;
            padding: 30px;
            background-color: #eee;
            border-radius: 10px;
         }
        
        #big-box div h1 {
            margin: auto;
            color: #454545;
            text-shadow: none;
        }
        
        #big-box div h4 {
            color: #454545;
            text-shadow: none;
            margin: auto;
            text-align: justify;
        }
        
        footer {
            height: 100px;
            color: black;
            margin-top: 60px;
            background-color: #eee;
            border: 1px solid lightgray;
             border-radius: 10px;
        }

    </style>
</head>

<body>
    <div id="main">
        <header>
            <h1>About-Us</h1>
        </header>
        <section>
            <div class="personal_details">
                <img src="web_project/myphotos/vasu.JPG" width="400" height="300">
                <div>
                    <h1><ins>Vasu's Personal Details</ins></h1>
                    <h3><b>Date of Birth:</b>18-03-1997</h3>
                    <h3><b>Work Experiance:</b>none</h3>
                    <p><b>Small Intro : </b>I'm Vasu born and raised in Patan.
                    I have done my schooling in shantiniketan school, then I did my plus 12 from Eklavya school of science and now I'm pursuing my last-2 year B-Tech from LDRP.</p>
                    <h3><b>Mobile Number:</b>9978769628</h3>
                </div>
            </div>
            <div class="personal_details">
                <img src="web_project/myphotos/smit.jpeg" width="400" height="300">
                <div>
                    <h1><ins>Smit's Personal Details</ins></h1>
                    <h3><b>Date of Birth : </b>18-03-1997</h3>
                    <h3><b>Work Experiance :</b> none</h3>
                    <p><b>Small Intro : </b>  hi ! i am Smit savjiyani from Rajkot.
                        I have done my schooling in Rajkot now I'm pursuing my last-2 year B-Tech from Ldrp.

                    </p>
                    <h3><b>Mobile Number:</b>9913154655</h3>
                </div>
            </div>
        </section>
        <section>
             
        </section>
        <section>
            <div id="big-box">
                <div>
                    <h1><ins><p>ACADEMICS Details</p></ins></h1>
                    <h4>
                        We have reputed company and every project done by our seccessfull and powerful engineers so every year we will be done lots of projects.
                    </h4>
                </div>
                <div>
                    <h1><ins><p>WORk Experiance</p></ins></h1>
                    <h4>
                        In our firm every engineers have 5-10 years experience and we donot take any freshers in our company.
                    </h4>
                </div>
                <div>
                    <h1><ins><p>Technology Used</p></ins></h1>
                    <h4>
                        We are using latest technoly like java,python,HTML5,CSS3, etc
                        
                    </h4>
                </div>
            </div>
        </section>
        <footer>
            <h1>
                @copyright -2016
            </h1>
        </footer>
    </div>

</body>

</html>
