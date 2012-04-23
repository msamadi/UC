<?php
    session_start();
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How to become a healthy person?</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.ui.mouse.js"></script>
<script src="js/jquery.ui.sortable.js"></script>
<script src="js/jquery.collapser.js" type="text/javascript"></script>
<script src="js/nestedSortable.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/pagestyle.css" >
</head>

<body>
<div id="wrap">
    <div id="header">
	<div>
		<div id="headerSearchBox">
			<form id="search" method="post" action="process__search.php">
			<input id="quickSearchBox" class="ui-autocomplete-input" type="search" onfocus="emptyField()" value="Search here..." name="query" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
			<input class="button" type="submit" value="Quick Search" name="searchButton">
			</form>
			</div>
			<div>
			<span id="allByCategoryFixedTab">
		</div>
	</div>
	<div id="headerUserContent">
		<p> mh.samadi@gmail.com </p>
		<a title="Profile" href="userProfile.php?id=mh.samadi@gmail.com">
		<img src="images/mh.samadi@gmail.com.jpg">
		</a>
		<a id="logOutButton" title="Log Out" href="process__logOut.php?url=http://tortobot.ayric.co/root/">
		<img src="images/icon_lock.png">
		</a>
		<a title="Edit Account" href="editAccount.php">
		<img src="images/icon_setting.png">
		</a>
		<a title="Home Page" href="index.php">
		<img src="images/icon_home.png">
		</a>
	</div>
    </div>
    <div id="content">
        <div id="leftbar"><div class="title"><h2 class="blk">Layers</h2></div>
		<div style="clear:both">
			<div class="contdiv" id="leftcv">
				<div id="tranc">
					
				</div>
			</div>
		</div>
		<div style="clear:both"> &nbsp;&nbsp;&nbsp;&nbsp;
		</div>
        	
		<div id="toggle1">
				<form id="form1" name="form1">
					<ul>
						<li>
						<input type="text" name="titletxt" id="titletxt" class="txtbox" />
						<input type="submit" id="addtranc" class="button" value="Add Layer" />
						</li>
						<li id="showpre">&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="pre" id="pre" />
							<label for="pre">It's a prerequisite</label>
						       <select id="selectpre" name="selectpre" class="multi"></select>
						</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					 </ul>
				</form>
			</div>
		</div>
        <div id="main"><div class="title" id="maintitle"><h2><select id="queries"></select></h2></div>
        	<div class="contdiv">
             <div class="basic">
                <ol class="sortable" id="sortable1" >
                </ol>
                 <div class="clear"></div>
             </div>
	     
             <div id="step">
             <span style="float:left"></span><b></b>
			 
             	<form id="form2" name="form2"  >
                 <ul>
                  <li style="clear: left" id="liinst1">
					  <input type="text" name="ins1" id="ins1" />
					  <input type="submit" class="button" id="addstep" value="Add Step" />     
				  </li> 
                 </ul>
                </form>
				
              </div>
            </div>	
         </div>
      <div id="rightbar">
      	<div class="title"><h2 class="blk">Similar Plans</h2></div>
       	<div class="contdiv" id="cdiv">
             <div id="sortable2" style="width:360px;float:left;font-size:12px;">
             	 <!-- XML file goes here -->
             </div>
        </div>
       </div>      
	  <div class="clear" ></div>
    </div>
    <div id="footer">
	<p align="center">
	    <a href="index.php">Home</a>
	    |
	    <a href="siteMap.php">Site Map</a>
	    |
	    <a href="about.php">About Parmid</a>
	    <br>
	    Copyright &copy; 2012 - Parmid.com
	</p>
    </div>
</div>
</body>
<script src="js/functions.js"></script>
</html>