<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

     $con = mysqli_connect("localhost", "james840701", "james60809", "market");
       if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
        }
    
    $sql = "SELECT * FROM annonce";
    $result = mysqli_query($con,$sql);
    $i = 0;
    $content = array();
    $date = array();
    if (mysqli_num_rows($result) > 0) {
                       // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
                      $content[$i] = $row["content"];
                      $date[$i] = $row["date"];
                      $i++;
               }
               }
      else {
            echo "0 results";
              }
    $con->close();

?>


<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"  />
        <title>城中市場</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <link href="css/mobanwang.css" rel="stylesheet" />
        <link href="css/navbar.css" rel="stylesheet" />
        <script src="run.js"></script>

        <style type="text/css">

</style>
        
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

                           <li><a href="position.html"style="position: absolute;top:40px;left: 1020px;">攤販位置</a></li>

                           <li><a href="trafficinfo.html"style="position: absolute;top:40px;left: 1250px;">交通資訊</a>　　</li>

                            <li><a href="contact.html"style="position: absolute;top:40px;left: 1450px;">聯絡我們</a></li>

                              
                         </ul>
                    </div>
                </div>
          </div>

          <!--跑馬燈-->
          <DIV id=idContainer2 class=container style="background-image: url('imagers/contain.jpg')">
<TABLE id=idSlider2 border=0 cellSpacing=0 cellPadding=0 style="background-image: url('imagers/contain.jpg')"">
  <TBODY>
  <TR>
    <TD class=td_f><A href="http://www.mobanwang.com/" target="_blank"><IMG src="images/01.jpg"></A></TD>
	<TD class=td_f><A href="http://www.mobanwang.com/" target="_blank"><IMG src="images/02.jpg"></A></TD>
	<TD class=td_f><A href="http://www.mobanwang.com/" target="_blank"><IMG src="images/03.jpg"></A></TD>
	<TD class=td_f><A href="http://www.mobanwang.com/" target="_blank"><IMG src="images/04.jpg"></A></TD>
	<TD class=td_f><A href="http://www.mobanwang.com/" target="_blank"><IMG src="images/05.jpg"></A></TD>
   </TR></TBODY></TABLE>
<UL id=idNum class=num></UL>
</DIV>

        <script>
	var forEach = function(array, callback, thisObject){
		if(array.forEach){
			array.forEach(callback, thisObject);
		}else{
			for (var i = 0, len = array.length; i < len; i++) { callback.call(thisObject, array[i], i, array); }
		}
	}
	
	var st = new SlideTrans("idContainer2", "idSlider2", 5, { Vertical: false });
	
	var nums = [];
	//插入数字
	for(var i = 0, n = st._count - 1; i <= n;){
		(nums[i] = $("idNum").appendChild(document.createElement("li"))).innerHTML = ++i;
	}
	
	forEach(nums, function(o, i){
		o.onmouseover = function(){ o.className = "on"; st.Auto = false; st.Run(i); }
		o.onmouseout = function(){ o.className = ""; st.Auto = true; st.Run(); }
	})
	
	//设置按钮样式
	st.onStart = function(){
		forEach(nums, function(o, i){ o.className = st.Index == i ? "on" : ""; })
	}
	st.Run();
</script>

        

          <div id="content" style="margin-top: 10px;height: 300px;">
                       
                <!-- 公告-->
             <div id="left-content">
                  <div class="panel panel-default" style="float: left;width: 1100px;">
                                <div class="panel-heading" style="font-size: 50px">公告事項</div>
                                <div class="panel-body">
                                   <?php 
                                     for($k= ($i-1); $k>($i-4);$k--)
                                     {
                                       
                                       echo "<h2>".$content[$k]."&nbsp&nbsp".$date[$k]."</h2>";                              
                                       echo "</br>";
                                     }
                                       ?>
                                    
                                    
                                </div>
                  </div>

            </div>
            

             <div id="right-content" style="float: right;">
                       <h1>test</h1>
             </div>
         </div>     
            
    


            
     </div>        
           <!--頁尾-->


           <div id="footer" style="backgbackground-image: url('images/红色背景-023.jpg') ;"> 
        
           <h1>頁尾</h1>
        
        
           </div>




    </body>
</html>
