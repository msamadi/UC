/* Globals */
var query_id = 0;
//Edited by Vahid
var session_id=0;


var unique_count = 0;

$(document).ready(function(){
    //More Link to expand the texts
    expand_text();
    //End of "more" to expand texts
/////////////////////////////////////////////////////////////////////////////////////////////////
    //Hide and Show the Similar Plans in right side
    $('.similars').click(function(){
    $(this).children('ul').toggle();
    });
});
//End of Hide and Show the Similar Plans in right side
		//To save updated $_SESSION['id']

$("#step").hide();
$('#selectpre').hide();
$("#pre").click(function() {
    var i = $("#pre").attr('checked');
    if(i == true) {
        $('#selectpre').show();
        $('#tranc h3').each(function(index) {
            var textop = $(this).text();
            var textid =  $(this).attr("id");
            $('#selectpre').append('<option value="' + textid + '">'+ textop +'</option>' );
        });
    }else{
        $('#selectpre').hide();
        $('#selectpre option').remove();
    }
});

//Change the class of the dragged li from right side :)
$('#sortable2').hover(function(){
    $('#sortable2 ul li').attr('class',session_id);
});

//Change the class inside the blue box
$('#sortable2').sortable({
    out: function() {
	alert("aa");
    }
});

//start(function(){
///    alert("aaaaaaaaaa");
//    $('#sortable1 div').attr('id','step_in_basic_plan'+unique_count);
//    $('#sortable1 div').attr('class','editable');
    //$('.step_in_basic_plan'+unique_count).editable(function(value, settings) { 
//	$('.step_in_basic_plan'+unique_count).html = value;
//	return(value);
  //  }, { 
//	type    : 'textarea',
//	submit  : 'OK',
  //  });
//    unique_count++;
//});

$(function() {
    $.ajax({
        type: "POST",
        url: "data.php",
        data: {action: "list_queries"},
        dataType: "json",
        success: function(data) {
            var options = $("#queries");
            $.each(data, function() {
                options.append($("<option />").val(this.query_id).text(this.query_id + ". " + this.category.replace("&amp;", "&") + " - " + this.query));
            });
            query_id = getParameterByName("query_id"); // Store the current query ID in the global.
            $("#queries").val(query_id);
            load_query(query_id);
        }
    });
    $("#queries").change(function(e) { 
        window.location = "./?query_id=" + $(this).val();
    });
});

$(function() {
    $("#add").click(function() {
        $("#toggle").slideToggle("slow");
        $('#step').hide();
        $('#titletxt').val("");
        $('#add').hide();
    });
});

/* ajax*/
//Create by Vahid
$(function() {
    $("#addtranc").click(function() {
	var ss="";
        var mytranc = new Array();
        var myid = new Array();
        var mystyle = new Array();
        var myclass = new Array();
        $('#tranc h3').each(function(index) {
            mytranc[index] = $(this).text();
        });
        $('#tranc input[type=checkbox]').each(function(index) {
            myid[index] = $(this).attr("id");
            mystyle[index] = $(this).attr("style");
            myclass[index] = $(this).attr("class");
        });
        if(session_id==0){
            set_session(1);
	    ss="<div><input type='checkbox' checked='checked' style='float:left'  onclick='aaa("+session_id+")' id='"+session_id+"'/>&nbsp;&nbsp;";
	    ss=ss+"<h3 style='display:inline' id='h"+session_id+"'>"+$("#titletxt").val()+" </h3>";
	    ss=ss+'&nbsp;&nbsp;<a href="#" onclick="$(this).parent().remove()">remove</a></div>';
	}else{
	    session_id=session_id+1;
	    var su = 1;
	    $.each(myid,function(name,value){
		ss=ss+'<div><input type="checkbox" checked="checked" class="'+myclass[name]+'" onclick="aaa('+value+')" style="'+mystyle[name]+'" id="'+value+'" />';
		ss=ss+'&nbsp;&nbsp;<h3 style="display:inline" id="h'+value+'">'+mytranc[name]+'</h3>&nbsp;&nbsp;<a href="#" onclick="$(this).parent().remove()">remove</a><br />';
		
		if($("#pre").is(':checked')){
		    var id="h"+value;
		    if(($("#selectpre").val())==id){
			ss=ss+'<input type="checkbox" checked="checked" class="'+value+'" onclick="aaa('+session_id+')" style="float:left;margin-left:20px" id="'+session_id+'" /><h3 id="h'+session_id+'">'+$("#titletxt").val()+'</h3>';
			su=0;  
		    }else{su = 1;}
		}
	    });
	    if(su==1){
		ss=ss+"<br /><input type='checkbox' checked='checked' style='float:left' onclick='aaa("+session_id+")' id='"+session_id+"'/>&nbsp;&nbsp;";
		ss=ss+"<h3 style='display:inline' id='h"+session_id+"'>"+$("#titletxt").val()+" </h3>";
		ss=ss+'&nbsp;&nbsp;<a href="#" onclick="$(this).parent().remove()">remove</a></div>';	
	    }
	}
        var dataString = $("#form1").serialize() + "&mytranc=" + mytranc + "&myid=" + myid+ "&mystyle=" + mystyle+ "&myclass=" + myclass;
		
        $('#tranc').html(ss);
        $("#toggle").hide();
        $('#selectpre option').remove();
        $('#step span').html("<br />");
        $("#step").fadeIn(1500, function() {});
        $('#titletxt').val("");
        return false;
    });
});

/* add step */
$("#addstep").click(function() {
    // validate and process form here
    var mytext = $('#step b').text();
    var dataString = $("#form2").serialize();
		var h= "<li class="+session_id+"><div>"+$("#ins1").val()+"</div></li>";
            $(".sortable").append(h);
    $('#ins1').val("");
    return false;
});

function set_session(sess_id){
    session_id = sess_id;
}

function expand_text(){
    //More Link to expand the texts
    var showChar = 50;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.more').each(function() {
        var content = $(this).html();
        for(showChar = 50; showChar < content.length; showChar++){
            if(content.charAt(showChar) == ' ')
                break;
        }
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar + 1);
            var html = c + '<span class="moreelipses">' + ellipsestext + '</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';
            $(this).html(html);
        }
    });
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
    //End of "more" to expand texts
}
function aaa(gid){
    var id = $("#" + gid).attr('checked');
    if(id == true) {
        $(".basic ." + gid).show();
        //Something changed
    }else{
        $(".basic ." + gid).hide();
        $('#tranc input[type=checkbox]').each(function(index) {
            if($(this).attr("class") == gid){
                $($(this)).removeAttr('checked');
                $(".basic ." + $(this).attr("id")).hide();
            }
        });
    }
}

//Using AJAX to show Data of xml file
function showData(){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    /*
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("sortable2").innerHTML = xmlhttp.responseText;
        }
    }*/
    xmlhttp.open("GET","getData.php", false);
    xmlhttp.send(null);
    document.getElementById("sortable2").innerHTML = xmlhttp.responseText;
}

$(document).ready(function(){
    showData();
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
var str;
$(function(){
    $("#sortable1,#sortable2 ul").sortable({
        connectWith: "#sortable1"

    }).disableSelection();
});
