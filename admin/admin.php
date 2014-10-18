<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style>
	ul li{
		cursor:pointer;
		padding-top:3px;
		padding-bottom:3px;
	}
		ul li:hover{
		color:#00F;
	}
	table{
			border-color:#CDCDCD;
	}
	#dialog{
	    display:none;
	}
</style>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"> </script>
<script type="text/javascript" src="./js/indexpage.js"></script>
<script>
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>admin </title>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../css/ui-lightness/jquery-ui-1.10.4.custom.css">
</head><body>

<div id="main_container">
	<div class="parrot"></div>
	<div class="main_content">
    	<div id="header">
        	<div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0"></a></div>
        </div>
        <div class="top_center_box"></div>
        <div class="center_box">
                <div id="menu_tab">                                     
                    <ul class="menu">                                                                               
                       
                    </ul>
            </div>
          <div style="clear:both"/>
            <div class="left_content">
            	<ul>
                	<li>เพื่มข้อมูล</li>
                    <ul>
                    	<li id="addTypeWrong"><a href="javascript:getAjax('./insertWrong.php')">เพิ่มประเภทอาการผิดปกต</a>ิ</li>
                        <li id="addWrong"><a href="javascript:getAjax('./insertSymptom.php')">เพิ่มอาการผิดปกติ</a></li>
                        <li id="addDisease"><a href="javascript:getAjax('./insertDisease.php')">เพิ่มโรค</a></li>
                        <li id="addTypeFood"><a href="javascript:getAjax('./insertTypeFood.php')">เพื่มประเภทอาหาร</a></li>
                        <li id="addFood"><a href="javascript:getAjax('./insertTypeComponent.php')">เพิ่มประเภทส่วนประกอบ</a></li>
                         <li id="addFood"><a href="javascript:getAjax('./insertComponent.php')">เพื่อส่วนประกอบ</a></li>
                         <li id="addFood"><a href="javascript:getAjax('./insertFood.php')">เพื่มอาหาร</a></li>
                    </ul>
                </ul>
                <ul>
                	<li>-ข้อมูล</li>
              		  <ul>
                    <li ><a href="javascript:getAjax('listTypeWrong.php')">ข้อมูลลประเภทอาการผิดปกติ</a></li>
                    <li><a href="javascript:getAjax('mainListSymptom.php')">ข้อมูลลอาการผิดปกติ</a></li>
                    <li ><a href="javascript:getAjax('listDisease.php')">ข้อมูลโรค</a></li>
                     <li><a href="javascript:getAjax('listTypeFood.php')">ข้อมูลประเภทอาหาร</a></li>
                      <li><a href="javascript:getAjax('listFood.php')">ข้อมูลอาหาร</a></li>
                      <li><a href="javascript:getAjax('listComponent.php')">ข้อมูลส่วนประกอบ</a></li>
                      <li><a href="javascript:openDialog()"> test </a></li>
                    </ul>
                  </ul>
            </div>
                  </div><!--end of left content-->
            <div class="right_content">
			
            </div><!--end of right content-->
 	<div id="footer">

    </div>
  </div> <!--end of center box-->
</div> <!--end of main content-->
</div> <!--end of main container-->

<div id="dialog">
 <div id="dialogMain"></div>
 <div id="dialogFooter"></div>
</div>
</body></html>
