<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.js"></script>


	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.mouse.js"></script>
	<script src="js/jquery.ui.sortable.js"></script>
    
	<script src="js/jquery.collapser.js" type="text/javascript"></script>
	
	<script src="js/nestedSortable.js" type="text/javascript"></script>
<style>
body{
	background-color: #eee;
	background-image: url(images/bg.png);
	background-repeat: repeat;
	direction:;tr;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
}
#wrap{
	margin:0 auto;
	width:960px;
	padding:5px;
}
#header{
	padding: 5px;
	height: 200px;
	border: 3px double #3366FF;
}
#content{
	min-height:435px;
	background: url(images/bgcontent.png);
}
#rightbar{
	border: 1px solid;
    float: right;
    min-height: 400px;
    padding: 10px;
    width: 65%;
}
#leftbar{
	border: 1px solid #3366CC;
    float: left;
    min-height: 400px;
    width: 30%;
	padding: 10px;
}
#searchtxt{
	
}
#contact_form{
	width:200px;
	height:100px;
}
#footer{
	height:50px;
	border: 3px double #3366FF;
}
.desc{
	 color: #FFF;
	margin:5px;
	padding: 5px;
	min-height: 50px;
	border: 1px dotted #F00;
	background: url(images/grid-8.png) #6E899F;
	-moz-border-radius: 0 10px 10px;
	-wbkit-border-radius: 0 10px 10px;
	border-radius: 0 10px 10px;
}
.drgimg{
	float:left;
	cursor:move;
}
.clear{
	clear:both;
}
#lst1{
	background: url(images/munes.png) no-repeat;
	padding: 0 20px;
}
</style>
</head>

<body>
<div id="wrap">
	<div id="header"></div>
    
    <div id="content">
        <div id="rightbar">
           <div id="sortable1"  class="connectedSortable">           
             <div id="title1" class="desc">
               <img class="drgimg" src="images/cursor_drag_arrow.png" width="20px" height="20px" />
             	??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.
                ??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.
                ??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.
             </div>
             <div id="title2" class="desc">
             	<img class="drgimg" src="images/cursor_drag_arrow.png" width="20px" height="20px"/>
            	 ??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.
                  ??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.
             </div>
                <div id="title3" class="desc">
                <img class="drgimg" src="images/cursor_drag_arrow.png" width="20px" height="20px" />
                ??????? ????? ???.??????? ????? ???.??????? ????? ???.??????? ????? ???.</div>
           </div>
		   <h3>Demo 1</h3>
			<!-- Demo 2 -->
			<ul>
				<a href="#" class="demo2">Collapse List</a>
				<li>List 1</li>
				<li>List 2
				  <ul>
					<a href="#" class="demo2">Collapse List</a>
					<li>Sub List 1</li>
					<li>Sub list 2</li>
					<li>Sub list 3
					  <ul>
						  <a href="#" class="demo2">Collapse List</a>
						  <li>Sub sub List 1</li>
						  <li>Sub sub List 2</li>
						  <li>Sub sub List 3</li>
					  </ul>
					</li>
				  </ul>
				</li>
				<li>List 3 </li>
				<li>List 4 </li>
			</ul>
			<!-- End Demo 2 -->
			<hr/><h3>Demo 2</h3>
			<!-- Demo 3 -->
			<div id="list">
				<div id="lst1"><h4>title one</h4>
					<ul id="sortlist1" class="connectedSortable">
						<li>subtilte1-1</li>
						<li>subtilte1-2</li>
						<li>subtilte1-3</li>
					</ul>
				</div>
				<div id="lst2"><h4>title tow</h4>
					<ul id="sortlist2" class="connectedSortable">
						<li>subtilte2-1</li>
						<li>subtilte2-2</li>
						<li>subtilte2-3</li>
					</ul>
				</div>
				<div id="lst3"><h4>title three</h4>
					<ul id="sortlist3" class="connectedSortable">
						<li>subtilte3-1</li>
						<li>subtilte3-2</li>
					</ul>
				</div>
			</div>
			<!-- End Demo 3 -->
			<hr/><h3>Demo 3</h3>
		   <ol class="sortable">
				<li><div>Some content</div></li>
				<li>
					<div>Some content</div>
					<ol>
						<li><div>Some sub-item content</div></li>
						<li><div>Some sub-item content</div></li>
					</ol>
				</li>
				<li><div>Some content</div></li>
			</ol>
        </div>  
        <div id="leftbar">
            <ul id="sortable2" class="connectedSortable">
                <li><h4>????? ???</h4></li>
              <li><h4>????? ???</h4></li>
              <li><h4>????? ???</h4></li>
            </ul>	
      </div>
	  <div class="clear" ></div>
    </div>
    <div id="footer"></div>
</div>
</body>
<script>
	$(function() {
		$( "#sortable1, #sortable2 ,#sortlist1 ,#sortlist2 ,#sortlist3,#lst1 h4" ).sortable({connectWith: ".connectedSortable"}).disableSelection();
	});
	/** Demo 2 ***********************************/

	$('.demo2').collapser({
		target: 'siblings',
		effect: 'slide'
	});
	/** Demo 3 ****************/
	$(function(){
		$("#lst1 h4").click(function(){
		$("#sortlist1").slideToggle(function(){
		  var visible = $(this).is(':visible');//document.write(visible);
		    if( visible ){

				$('#lst1').css('background','url(images/munes.png) no-repeat');

			}else{

				$('#lst1').css('background','url(images/plus.png)  no-repeat');

             }
		});
		});
		
	});
	$(function(){
		$("#lst2 h4").click(function(){
		$("#sortlist2").slideToggle("slow");
	});
	});
	$(function(){
		$("#lst3 h4").click(function(){
		$("#sortlist3").slideToggle("slow");
	});
	});
	/*  Demo  4 ********************/
	
	
	
	$(document).ready(function(){

		$('ol.sortable').nestedSortable({
			disableNesting: 'no-nest',
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			maxLevels: 3,
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: '> div'
		});

		

	});

	</script>

</html>
