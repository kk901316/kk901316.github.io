<?php
   $headline = array();    
   $story = array();
   $timestamp = array();
   $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
            if(!$link){
                       echo('Error connecting to the database: ' . $mysql_error());
                         exit();
                       }   
    $query = "SELECT headline, timestamp, story FROM news ORDER BY timestamp DESC LIMIT 10";
            $result = $link->query($query);
            if(!$result){
                         echo('Error selecting news: ' . mysqli_error($link));
                         exit();
                          }
             $num_rows = $result->num_rows;
             if($num_rows >2)
             {
                for($i =0;$i<3;$i++)
                {
                    $row = mysqli_fetch_assoc($result);
                    $headline[$i] = $row['headline'];
                    $story[$i] = $row['story'];
                    $timestamp[$i] = $row['timestamp'];
                }
             }
             else
             {
                 for($i=0;$i<$num_rows;$i++)
                 {
                    $row = mysqli_fetch_assoc($result);
                    $headline[$i] = $row['headline'];
                    $story[$i] = $row['story'];
                    $timestamp[$i] = $row['timestamp'];
                 }
             }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>JNTApproval.CO</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<script src="js/scroll.js"></script>
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
                  
				<li class="selected"><a href="index.php"><span>Home</span></a></li>
				<li><a href="product.html"><span>Product</span></a></li>
				<li><a href="about.html"><span>About us</span></a></li>                 
				<li><a href="certification.html"><span>Certification</span></a></li>
                <li><a href="approval.html"><span>Approvals</span></a></li>
                <li><a href="medical.html"><span>Medical </span></a></li>
                
				<li><a href="contact.html"><span>Contact us</span></a></li>			                
			</ul>
	</div>
	<div id="body">
		<div class="header">
			<div>
				<!-- <ul>
					<li><img src="images/america_dark.png" alt="." /></li>	
					<li><img src="images/flags2.png" alt="." /></li>
					<li><img src="images/graph.png" alt="." /></li>		
				</ul>	
                -->	
                                  <img src="images/indexbar.jpg" alt="." style="margin: 10px">
			</div>
		</div>
		
		<div class="footer">
			
		<div class="featured">
			<h2>News</h2>
            <ul>
         
				<li>
					<h3><?php echo $headline[0] ?> </h3>		
					<p><?php echo $story[0] ?></p>		
					<span><?php echo $timestamp[0]?>,| 99 Views | 69 Comments</span>
				</li>		
				<li>
					<h3><?php echo $headline[1] ?></h3></h3>
					<p><?php echo $story[1] ?></p>
					<span><?php echo $timestamp[1]?> | 99 Views | 69 Comments</span>
				</li>	
			</ul>
            <h3><a href="allnews.php?page=1">Reads More...</a></h3>		
		</div>
		<div class="section">
				
	          <a href="contact.html"><img src="images/request.jpg"style="padding-top: 30px;"></img></a>
            <img style="margin-left: 40px" src="images/appicon.JPG">
		</div>
		</div>
	</div>
	<div id="footer" style="text-align: right">
		<div >
			<div>
				<h3>asia-Taiwan (Jointech International Co.,Ltd)</h3>
				<ul>
					<li>+886-2-2225-0350  TEL</li>				
					<li>+886-2-2223-2477 FAX</li>
                    <li>SALES:+886-926-170-803,     jet@jntapproval.com</li>
                    <li>Add: 1F,NO.1,LN637,Zhongcheng Rd., </li>
                    <li>Zhonghe dist.,23550,New Taipei City  </li>  
                    <li> 新北市23550中和區中正路637巷1號1樓 </li>
				</ul>			
			</div>	
           
            <div>
				<h3>asia-HongKong(ZhongXu Co.Ltd)</h3>
				<ul>
					<li>+886-926-170-803  TEL</li>
           		
				</ul>			
			</div>		
             <div>
				<h3>asia-China SZ office</h3>
				<ul>
					<li>+86-755-8374-2865  TEL</li>		
                    <li>+86-755-8374-2949 FAX</li>		
                     <li>Add:深圳市福田區華強北路 </li>
                    <li>  寶華大廈A1502室</li>
				</ul>			
			</div>	
			
			<div>
				<h3>Contact via Email</h3>
				<a class="email">Jet@jntapproval.com</a>
				<a class="email">Aaron@jntapproval.com</a>			
			</div>	
		</div>
		<div>
			<p>&copy Copyright 2016. All rights reserved</p>
		</div>
	</div>
</body>
</html>