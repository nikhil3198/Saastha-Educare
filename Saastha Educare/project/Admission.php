<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="../project/css/footer.css">
    <link rel="stylesheet" href="../project/css/js.css">
    <link rel="stylesheet" href="../project/css/header.css">
    <title>Admission</title>
    <style>
     @font-face{
      font-family: touch; 
      src:url('../project/Fredoka_One/FredokaOne-Regular.ttf');
    }
body{
            margin:0;
            padding:0;
            display: block;
            background-color: #F7F7F6;
        }
        * {
            box-sizing: border-box;
           
  
        }
    
        body {
            background-image: url("../project/images/admission.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            //background-position: 50% -118px;
        }

        .fourcol {
            width: 52%;
            float: right;
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
        }

        .eightcol {
            margin-top: 100px;
            width: 48%;
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
            float: left;
        }

        #applynow-form {
            padding: 20px;
            background-color: white;
            margin: 78px;
            border-radius: 5px;
        }

        select {
            margin: 0 auto !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 38px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type=submit] {
            background-color: #67bcdb;
            border-color: #67bcdb;
            color: white;
            font-weight: bold;
        }

        @media only screen and (min-width:1025px) {
            .fourcol {
                width: 45%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
            }

            .eightcol {
                margin-top: 100px;
                width: 55%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
                float: left;
            }
        }

        @media only screen and (max-width:1023px) {

            .fourcol {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
            }

            .eightcol {
                margin-top: 100px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
                float: left;
            }


            input[type=submit] {
                background-color: #67bcdb;
                border-color: #67bcdb;
                color: white;
                font-weight: bold;
                width: 50%;
                margin: auto;
            }
        }

        @media (max-width:767px) and (min-width:319px) {
            .fourcol {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
            }

            .eightcol {
                margin-top: 100px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                position: relative;
                float: left;
            }

            #applynow-form {
                padding: 20px;
                background-color: white;
                margin: 0px;
                width: 100%;
            }
			
        }
		span.error{
			color:#ff0000;
			}
    </style>
</head>
<body>
<div id="abc">
            <div class="logo" style="background-image:url('../project/images/WOOD.jpg');background-repeat: no-repeat;background-size: 100% 100%;">
                <a href="#logo"><img id="logo" src="../project/images/Saastha Logo.jpg" alt="Saastha" style="width:150px;height:108px;"></a>
                
                
            </div>
            <div class="topnav" id="myTopnav">
                <div style="margin-bottom: 40px">
                    <a href="Main.html">
                        <i class="fa fa-home"></i>
                    Home</a>
                    <a href="aboutus.html"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;About Us</a>
                    
                    <div id="mydropdown" class="dropdown">
                        <button  class="dropbtn"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Courses
                        </button>
                        
                        <div class="dropdown-content" style="position: fixed;">
                            <a href="SaasthaAdv.html">IIT-JEE</a>
                            <a href="medical.html">Medical</a>
                            <a href="crashcourse.html">CET / Crash Course</a>
                        </div>
                    </div>
                    <a href="Admission.html"><i class="fa fa-adn" aria-hidden="true"></i>&nbsp;Admission</a>
                    <a href="centers.html"><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;Centers</a>
                    <a href="contactus.html"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;Contact Us</a>
                    <a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</a>
                    <a href="javascript:void(0);" style="font-size:22px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
            </div>
            <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
            x.className = "topnav";
            }
            var y = document.getElementById("mydropdown");
            if (y.className === "dropdown") {
            y.className += " responsive";
            } else {
            y.className = "dropdown";
            }
            }
            </script>
        </div>
    <div id="a">

        <div class=" eightcol">
            <h1 style="text-align:center;color:white;margin-bottom:55px;font-family: touch;font-weight: 100;">GET IN TOUCH WITH US</h1>
            <h4 style="text-align:center;color:white;margin-bottom:20px;"> For any queries please call us at 080-4260 4600 or at +91-9538141504 or write to us at enquiry@Saastha-edu.in</h4>
        </div>
        <div class=" fourcol last">
            <div id="applynow-form">
                <h3 style="color:#000 !important; text-align:center; padding-bottom:10px;">Apply Now</h3>
                <div>
				<?php
											$name = $email = $mobile = $city= $class =$course = "";

  $name = test_input($_POST["name"]);
  $nameErr="";
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
  $email = test_input($_POST["email"]);
  $emailErr="";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  $mobile = test_input($_POST["mobile"]);
  $mobileErr="";
  if(!preg_match("/^[789]\d{9}$/",$mobile)){
  $mobileErr="Enter Valid Mobile Number";}
  $city= test_input($_POST["city"]);
  $class = test_input($_POST["class"]);
  $course = test_input($_POST["course"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}

				?>
                    <form action="Admission.php" method="post">
                        <!--<div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="949">
                            <input type="hidden" name="_wpcf7_version" value="4.9">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f949-p348-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="348"> 
                        </div>-->
                        <div>
                            <input type="text" class="form-control" name="name" placeholder="Student Name*" required maxlength="30 " required>
							<span class="error"><?php echo $nameErr;?></span>
                        </div>
                        <div>

                            <input type="email" class="form-control" name="email"  placeholder="Email*" required>
							<span class="error"><?php echo $emailErr;?></span>
                        </div>
                        <div>

                            <input type="tel" class="form-control" name="mobile"  placeholder="Mobile No*" maxlength="10" required>
							<span class="error"><?php echo $mobileErr;?></span>
                        </div>
                        <div>

                            <input type="text" class="form-control" name="city"  placeholder="City*" required>

                        </div>
                        <div>

                            <select name="class" class="form-control" required>
                                <option value="">Select Class</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>

                        </div>
                        <p></p>
                        <div>

                            <select name="course" class="form-control" required>
                                <option value="">Select Course</option>
                                <option value="IIT-JEE">IIT-JEE</option>
                                <option value="CET">CET</option>
                                <option value="Medical">Medical</option>
                                <option value="Foundation">Foundation</option>
                                <option value="Mock NEET">Mock NEET</option>
                                <option value="Mock CET">Mock CET</option>
                                <option value="Others">Others</option>
                            </select>

                        </div>
                        <p></p>
                       <!-- <div class="g-recaptcha " data-sitekey="6Lc5CyoUAAAAAMhQ217CNsLy5n0wgp7w9gyBiD9A">
                            <div style="width: 304px; height: 78px;">
                                <div>
                                    <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6Lc5CyoUAAAAAMhQ217CNsLy5n0wgp7w9gyBiD9A&amp;co=aHR0cDovL3d3dy5iYXNlLWVkdS5pbjo4MA..&amp;hl=en&amp;v=r20171003155951&amp;size=normal&amp;cb=ep64xta2nxv1" title="recaptcha widget" width="304" height="78" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                            </div>
                        </div>-->
                        <p></p>
                        <div>
                            <input type="submit" class="form-control" value="SUBMIT">
							<?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname="admission";

                            $c = mysqli_connect($servername,$username,$password,$dbname);//forth parameter is when you what to connect to only one database
                            if(!$c)
                            {
                            echo("conection failed!<br>");
                            }
                            else
                            {
                            //echo("conection established!<br>");
                            

                            //$q = "CREATE DATABASE admission"; // will just create a querry
                            // var_dump(mysqli_query($c,$q));
                            // $query = "CREATE TABLE Register(ID INT(30)AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30),Email VARCHAR(30),Mobile_No BIGINT(30),City VARCHAR(30),Class VARCHAR(20),Course VARCHAR(20))";
                            //var_dump(mysqli_query($c,$query));
							 if($nameErr !=""|| $emailErr!="" ||$mobileErr!="")
							 {
							 echo("Registration failed<br>");
							 echo("To Try again <a href=\"Admission.html\">Click here</a>");
							 }

							 else{
                             $q = "INSERT INTO register (Name,Email,Mobile_No,City,Class,Course) values ('$name','$email',$mobile,'$city','$class','$course')";
                             $ret=mysqli_query($c,$q);
							 if($ret)
							 {
							 echo("Successfully Registered!!!");
							 }
							}
							}
                             
?>

                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div></div>
    <p></p>
    <div class="col-sm-12 col-md-12 effectdiv " style="">
        <div style="margin-top:40px">
            <div class=" imgdivs">

                <div class=" container1">
                    <img src="../project/images/bestresults.jpg" alt="BestResults" class="image" style="width:100%;height:40%;">
                    <div class="middle">
                        <div class="text">Best Results</div>
                    </div>
                </div>

                <div class="paradivs">
                    <h3>Best Results</h3>
                    <hr />
                    <p class="para">At Saastha students have been consistently bagging top ranks in competitive exams like AIPMT, IIT-JEE, CET & Olympiads.</p>
                </div>
            </div>

            <div class="imgdivs">

                <div class="container1">
                    <img src="../project/images/topclass.jpg" alt="TopClass" class="image" style="width:100%;height:40%;">
                    <div class="middle">
                        <div class="text">Top Class Study Material</div>
                    </div>
                </div>

                <div class="paradivs">
                    <h3>Top Class Study Material</h3>
                    <hr />
                    <p class="para">Specifically designed study materials and test papers by subject experts on the basis of latest pattern of entrance exams, are provided.</p>
                </div>

            </div>
            <div class="imgdivs">

                <div class="container1">
                    <img src="../project/images/compensatory.jpg" alt="CompensatoryClasses" class="image" style="width:100%;height:40%;">
                    <div class="middle">
                        <div class="text">Compensatory Classes</div>
                    </div>
                </div>

                <div class="paradivs">
                    <h3>Compensatory Classes</h3>
                    <hr />
                    <p class="para">These classes, through video lectures, are provided to students to cover the topics, they have missed while absenting from the classes.</p>
                </div>

            </div>
        </div>
    </div>

<footer class="flex">
  
  <ul class="footer-list-top">

    <li>
      <h4 class="footer-list-header">QUICK LINKS</h4></li>
     
    <li><a href='aboutus.html' class="list footer-list-anchor" >About Us</a></li>
    <li><a href='contactus.html' class="list footer-list-anchor" >Contact Us</a></li>
    <li><a href='Admission.html' class="list footer-list-anchor" >Admission</a></li>

    <li><a href='centers.html'  class="list footer-list-anchor">Centres</a></li>

    
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">CONTACT US</h4></li>
      <p class="add footer-list">27, Bull Temple Road, Basavanagudi, <br>
            Bengaluru, Karnataka, 560004<br>
        080-4260 4600, +91-9538141504<br>
        customercare@saastha-edu.in</p>
  </ul>
  <ul class="footer-list-top">
    <li >
      <h4 class="footer-list-header">COURSES</h4></li>
    <li><a href='SaasthaAdv.html' class="list footer-list-anchor" >IIT - JEE</a></li>
    <li><a href='medical.html' class="list footer-list-anchor" >MEDICAL</a></li>
    <li><a href='CrashCourse.html' class="list footer-list-anchor" >CET / Crash Course</a></li>
   
  </ul>

<section class="social-section flex-rw">
      <span class="social-overlap social-connect">
      CONNECT <span class="social-small">with</span> US
      </span>
      <span class="social-overlap social-icons-wrapper">
      <a href="https://www.facebook.com/public/Saastha-Educare" class="list" target="_blank" title="Facebook" ><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/" class="list" target="_blank" title="Twitter" ><i class="fa fa-twitter"></i></a>
      <a href="https://instagram.com/" class="list" target="_blank" title="Instagram" ><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/" class="list" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/" class="list" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
      </span>
  </section>

<div class="footer-bottom-wrapper">  

 <p>&nbsp&nbsp&nbsp&nbsp&nbsp© Saastha Educational Services Private Limited 2017  | All Rights Reserved</p>
</div>
</footer>
</body>
</html>