<?php
 $headline = array();    
   $story = array();
   $timestamp = array();
   $page = 1;
   $page = $_GET['page'];
  
   $now_rows = 0;
   $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
       /*
            if(!$link){
                       echo('Error connecting to the database: ' . $mysql_error());
                         exit();
                       }   
                   */
    $query = "SELECT id, headline, timestamp, story FROM news ORDER BY timestamp DESC";
            $result = $link->query($query);
            if(!$result){
                         echo('Error selecting news: ' . $mysql_error());
                         exit();
                          }
                $num_rows = $result->num_rows;
                $totalpages = ($num_rows-$num_rows%10)/10 +1;
  
                if($page == $totalpages) //最後一頁
                {
                   $now_rows = $num_rows%10;
                }
                else
                {
                	$now_rows = 10;
                }
                
                $k = ($page-1)*10;
                for($j = 0;$j<$k;$j++)
                {
                     $row = mysqli_fetch_assoc($result);
                }
                if($now_rows>0)
                {
                    for($i =0;$i<$now_rows;$i++)
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
<title>Business Solutions</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll.js"></script>
</head>
<body>
    <div id="backToTop" style="position:fixed;  top:85%;left: 90%; z-index:1;"><img src="images/up.png"></img></div>

	<div id="header">
			<div id="logo">
				<a href="index.php"><img src="logo/LOGO2.jpg" alt="." /></a>		
			</div>	
            <div >
           <p style="padding-left: 380px;font-size: 38px;margin: 10px;font-family: Calibri"><span style="color: #00ff00">JOIN</span>tech International Co., Ltd</p>       
          </div>
			<ul>
                  
				<li class="selected"><a href="index.php"><span>Home</span></a></li>
				<li  ><a href="about.html"><span>About us</span></a></li>
                <li><a href="approval.html"><span>Approvals</span></a></li>
                <li><a href="medical.html"><span>Medical </span></a></li>
				<li><a href="contact.html"><span>Contact us</span></a></li>			
			</ul>
	</div>
	<div id="body">
		<div class="about" style="width: 1100px;">
			<h1>News</h1>
			<div >
                    <?php  
                       for($i=0;$i<$now_rows;$i++)
                       { 
                             echo('<li>         
					        <h3>'.$headline[$i].'</h3>		
					        <p>'.$story[$i].'</p>		
					        <span>'.$timestamp[$i].',| 99 Views | 69 Comments</span></li>'
                            );
                       } 
                    ?>

			</div>

            <nav style="margin-left: 40%">
                     <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>

                    </li>
                         <?php  
                       for($i=0;$i<$totalpages;$i++)
                       { 
                             echo('<li><a href="allnews.php?page='.($i+1).'">'.($i+1).'</a></li>');
                       } 
                    ?>               

                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
            </nav>
			
		</div>
	</div>
		<div id="footer" style="text-align: right">
		<div >
			<div>
				<h3>asia-Taiwan</h3>
				<ul>
					<li>+886-2-2225-0350  TEL</li>				
					<li>886-2-2223-2477 FAX</li>
				</ul>			
			</div>	
            <div>
				<h3>asia-China</h3>
				<ul>
					<li>+86-755-8374-2865  TEL</li>		
                    <li>+86-755-8374-2949 FAX</li>		
				</ul>			
			</div>	
            <div>
				<h3>asia-HongKong</h3>
				<ul>
					<li>+886-926-170-803  TEL</li>
           		
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
	</div>
	</body>
</html>
