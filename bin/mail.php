<?php
    $name = $_POST["Name"];
    $mail = $_POST["email"];
    $content = htmlspecialchars($_POST['content']);
    
     $con = new mysqli("140.120.13.241", "james840701", "james60809", "market");

   if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    } 
    
    $sql = "INSERT INTO contact (name,mail, content) VALUES ('.$name.','.$mail.','.$content.')";
    

   if ($con->query($sql) === TRUE) {
     echo "New record created successfully";
        } else {
         echo "Error: " . $sql . "<br>" . $con->error; 
          }
 


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"  />
        <title>城中市場</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <link href="css/mobanwang.css" rel="stylesheet" />
        <link href="css/navbar.css" rel="stylesheet" />
        <link href="input.css" rel="stylesheeet" />

    </head>
    <body style="background-image: url('images/红色背景-023.jpg');background-repeat:  repeat; ">
        <div id="all" style="width: 1600px;margin: 0px auto;height: 1300px;background-color:#fcefde;">
           <!-- 上方橫條 每頁不變-->
          <div id="topbar" style="height: 120px;">
                <div id="logo" style="float: left;width: 500px;">  
                     <h1 style="margin-top: 0px;" ><a href="index.php"><img src="images/logo.jpg"/></a></h1>
                </div>
               <div id="nav" style="float: right;background-image:url('images/nav.jpg');background-repeat:no-repeat;width: 1100px;"  >
                    <div id="nav-context" style="height: 120px;">
                         <ul style="height: 120px;">
      
                           <li><a href="intro.html" style="position: absolute;top:40px;left: 790px; ">市場簡介</a>　</li>

                           <li><a href="連結網址或檔案"style="position: absolute;top:40px;left: 1020px;">攤販位置</a></li>

                           <li><a href="trafficinfo.html"style="position: absolute;top:40px;left: 1250px;">交通資訊</a>　　</li>

                            <li><a href="contact.html"style="position: absolute;top:40px;left: 1450px;">聯絡我們</a></li>

                              
                         </ul>
                    </div>
                </div>
          </div>

          <!--##########################################################################################-->
           <div id="comment" style="width: 1600px;height:800px; "  > 
           
             <div  style="text-align: left;font-size: 30px;text-align: center;margin-top: 160px;">
　                <?php
                   echo "感謝";
                   echo $_POST["Name"];
                   echo "您的來信";
                   echo "</br>";
                 ?>
                 <button onclick="javascript:location.href='index.html'">回到首頁</button>
             </div>
           </div>

 


         
            
          <!--##############################################################################################-->  
             <div id="footer" style="border-top-style: solid;background-image: url('images/footer.jpg') ;"> 
        
           <h1>頁尾</h1>
        
        
           </div>
</body>
