<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../project/css/footer.css">
<link rel="stylesheet" href="../project/css/header.css">
	<title>Contact Us</title>
	<style type="text/css">
		  @font-face{
      font-family: touch; 
      src:url('../project/Fredoka_One/FredokaOne-Regular.ttf');
    }
a{
            text-decoration: none !important;
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

        .div1{

        	margin-left: 364px;
        	margin-right: 364px;
        }
        #touch{
        	text-align: center;
         font-family:touch;
        	font-size: 30px;
          font-weight: 50;
        }
      	hr{
      		border-color: #67bcdb;
      		border-width: 0.4px;	
      	}
      	#contact{

      		 background-image: url('../project/images/contact.jpg');
      		 background-size: 100% 100%;
            overflow:hidden;
            text-align: center;
            display: flex;
            margin-top:50px;
  			flex-flow: row wrap;
      	}

      	.innerdiv{
      		 text-align: center;
      		 width: 100%;
      		margin-bottom: 50px;
      		display: flex;
      		flex-flow: row wrap;
      	}

.add1{
    color:white	;
    font: 1.3em "Open Sans", sans-serif !important;
}
.add1:hover{
    color:#ddd;
}


      	.ul {
  width: 33.33%
}
.ul > li {
  
}
.heading {
 font-size: 22px !important;
    font-weight: normal;
    padding: 5px;
    color:white;
   font: 1.3em "Open Sans", sans-serif;
}

.form{
			padding: 20px;
            background-color: white;
            margin: 50px 415px 20px 415px;
             box-shadow: 3px 3px 4px #B4B0AF;
}
       

       input[type=submit] {
            background-color: #67bcdb;
            border-color: #67bcdb;
            color: white;
            font-weight: bold;
            cursor: pointer;
            width: 50%;

        }   
        input[type=submit]:hover{
        	background-color: #23bbf3;
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

        textarea{
 height: 95px !important;

        }

        .label{
        	font-weight: bold;
        	font-size: 14px;
        }

        .asterix{
        	color: red;
        }

        @media only screen and (max-width: 1033px) {
        			.form{
			padding: 20px;
            background-color: white;
            margin: 80px 300px 20px 300px;
             box-shadow: 3px 3px 4px #B4B0AF;

}


             .div1{

             	margin-right: 233px;
             	margin-left: 233px;
             }

}
@media only screen and (max-width: 768px) {
  #contact{
text-align: left;

  }
.form{
			padding: 20px;
            background-color: white;
            margin: 80px 200px 20px 200px;
             box-shadow: 3px 3px 4px #B4B0AF;
}
  .heading {
    font-size: 1.5em !important;
  }

     .div1{

             	margin-right: 110px;
             	margin-left: 110px;
             }

  }
 @media only screen and (max-width: 375px) {
  #map{

    width: 125% !important;
  }

 }
  @media only screen and (max-width: 568px) {
  
  .ul {
    width: 100%;
   
  }
  .heading {
    font-size: 1.5em !important;
    padding: 0;

  }
  .form{
			padding: 0px;
            background-color: transparent;
            margin: 0px 5px 20px 5px;
            
}


.div1{

             	margin-right: 10px;
             	margin-left: 10px;
             }
}

li{
	list-style: none;
}
span.error{
color:red;
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
            
            <div class="dropdown-content">
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
		<div class="div1">
			<h1 id="touch" style="">GET IN TOUCH WITH US</h1>
			<hr>
			<div style="text-align: center;">If you have any questions regarding programs, facilities or have requests or suggestions to make, feel free to give us a call or fill out the form below. Request for a campus visit by submitting the form below.</div>
		</div>

		

		<div id="contact">
		<div  class="innerdiv" style="">
	<ul class="ul">
    <li>
      <h4 class="heading">OUR LOCATION</h4></li>
      <p class="add1 p">SAASTHA Educare Services Pvt. Ltd.<br>
      27, Bull Temple Road,<br>
       Basavanagudi, <br>
       Bengaluru, Karnataka, 560004
        </p>
  </ul>


			 <ul class="ul">

    <li>
      <h4 class="heading">CONTACT US</h4></li>
  	 <p class="add1 p">
  	 Phone: 080-4260 4600<br>
	Mobile: +91-9538141504
      
        </p>
    
  </ul>
  
  <ul class="ul">
    <li >
      <h4 class="heading">STAFFED HOURS</h4></li>
     <p class="add1 p">
  	Monday to Saturday<br>
9-30am to 6-30pm
      
        </p>
   
  </ul>
</div>
</div>


<div class="form">
<?php
  $name = $email = $mobile = $message= "";

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
  
  
  $message= test_input($_POST["message"]);
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>


	<form action="contactus.php" method="post"   style="margin:20px;">

		<div>
							<label class="label">Name<span class="asterix">*</span></label>
                            <input type="text" class="form-control" name="name" maxlength="30" required>
							<span class="error"><?php echo $nameErr;?></span>

        </div>
          <div>
          					<label class="label">Email<span class="asterix">*</span></label>
                            <input type="email" class="form-control" name="email"  required>
							<span class="error"><?php echo $emailErr;?></span>

            </div>
             <div>            
             				<label class="label">Phone No.<span class="asterix">*</span></label>
                            <input type="tel" class="form-control" name="mobile"  required maxlength="10">
							<span class="error"><?php echo $mobileErr;?></span>

            </div>
             <div>
             				<label class="label">Message<span class="asterix">*</span></label>
                            <textarea type="text" class="form-control" name="message" ></textarea>
              </div> 

               <div align="center">
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
                          //  echo("conection established!<br>");
                            

                            //$q = "CREATE DATABASE admission"; // will just create a querry
                            // var_dump(mysqli_query($c,$q));
                             //$query = "CREATE TABLE feedback(ID INT(30)AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30),Email VARCHAR(30),Mobile_No BIGINT(30),Message VARCHAR(300))";
                           // var_dump(mysqli_query($c,$query));
							 if($nameErr !=""|| $emailErr!="" ||$mobileErr!="")
							 {
							 echo("Try Again!!!<br>");
							 echo("<a href=\"contactus.html\">Click here</a>");
							 }
							 else{
                            $q = "INSERT INTO feedback (Name,Email,Mobile_No,Message) values ('$name','$email',$mobile,'$message')";
                             $ret=mysqli_query($c,$q);
							 if($ret)
							 {
							 echo("Feedback Successfully Submitted!!!");
							 }
							}
							}
                             
?>
           </div> 
		
	</form>

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

 <p>&nbsp&nbsp&nbsp© Saastha Educational Services Private Limited 2017  | All Rights Reserved</p>
</div>
		<a id="go-to-top" href="#" onclick="topFunction()" title="Back to top" ></a>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("go-to-top").style.display = "block";
    } else {
        document.getElementById("go-to-top").style.display = "none";
    }
}

function topFunction() {

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</footer> 

</body>
</html>