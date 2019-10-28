<?php
    $name = $_POST["Name"];
    $mail = $_POST["email"];
    $content = htmlspecialchars($_POST['content']);
    
     $con = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");

   if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    } 
    
    $sql = "INSERT INTO contact (name,mail, content) VALUES ('".$name."','".$mail."','".$content."')";
    

   if ($con->query($sql) === TRUE) {
    // echo "New record created successfully";
        } else {
         echo "Error: " . $sql . "<br>" . $con->error; 
          }
 


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"  />
        <title>JntApproval</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    </head>
    <body>
     <div id="backToTop"><img src="images/up.png"></img></div>

	<div id="header">
			<div id="logo">
				<a href="index.php"><img src="logo/LOGO2.jpg" alt="." /></a>		
			</div>	
            <div>
           		<p><span>JOIN</span>tech International Co., Ltd</p>       
      		</div>
			<ul>
                  
				<li ><a href="index.php"><span>Home</span></a></li>
				<li><a href="about.html"><span>About us</span></a></li>
                <li><a href="approval.html"><span>Approvals</span></a></li>
                <li><a href="medical.html"><span>Medical </span></a></li>
                <li><a href="product.html"><span>Product</span></a></li>
				<li class="selected"><a href="contact.html"><span>Contact us</span></a></li>			
			</ul>
	</div>
	<div id="body">
	<div class="contact">
			 
            <h1>Contact Us </h1>
            
             <h2>Thank for your apply</h2>
              
             
        </div>
	</div>
		<div id="footer" style="text-align: right">
		<div >
			<div>
				<h3>asia-Taiwan</h3>
				<ul>
					<li>+886-2-2225-0350  TEL</li>				
					<li>+886-2-2223-2477 FAX</li>
                    <li>+886-926-170-803 SALES</li>
                    <li>Add: 1F,NO.1,LN637,Zhongcheng Rd., </li>
                    <li>Zhonghe dist.,23550,New Taipei City</li>
				</ul>			
			</div>	
           
            <div>
				<h3>asia-HongKong</h3>
				<ul>
					<li>+886-926-170-803  TEL</li>
           		
				</ul>			
			</div>		
             <div>
				<h3>asia-China</h3>
				<ul>
					<li>+86-755-8374-2865  TEL</li>		
                    <li>+86-755-8374-2949 FAX</li>		
                     <li>Add:深圳市福田區華強北路 </li>
                    <li>  寶華大廈A1502室</li>
				</ul>			
			</div>	
			
			<div>
				<h3>follow us:</h3>
				<a class="facebook" href="http://facebook.com/freewebsitetemplates" target="_blank">facebook</a>		
				<a class="twitter" href="http://twitter.com/fwtemplates" target="_blank">twitter</a>
			</div>	
		</div>
		<div>
			<p>&copy Copyright 2016. All rights reserved</p>
		</div>
	</div></body>
