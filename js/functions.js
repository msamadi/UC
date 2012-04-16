var count = 1;
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
var session_id;		//To save updated $_SESSION['id']

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
$('.basic').hover(function(){
    $('#sortable1 div').attr('class','anything');
});

$(function() {
    $("#add").click(function() {
        $("#toggle").slideToggle("slow");
        $('#step').hide();
        $('#titletxt').val("");
        $('#add').hide();
    });
});
/* ajax */
$(function() {
    $("#addtranc").click(function() {
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

        var dataString = $("#form1").serialize() + "&mytranc=" + mytranc + "&myid=" + myid+ "&mystyle=" + mystyle+ "&myclass=" + myclass;
        $.ajax({
            type: "POST",
            url: "tranc.php",
            data: dataString,
            success: function(data) {
                if(data != ""){
                    $('#tranc').html(data);
                    $("#toggle").hide();
                    $('#selectpre option').remove();
                    $('#step span').html("<br />");
                    $("#step").fadeIn(1500, function() {});
                }
            }
        });
        $('#titletxt').val("");
        return false;
    });
});

/* add step */
$("#addstep").click(function() {
    // validate and process form here
    var mytext = $('#step b').text();
    var dataString = $("#form2").serialize();
    $.ajax({
        type: "POST",
        url: "step.php/"+ mytext ,
        data: dataString,
        success: function(html) {
            $(".sortable").append(html);
        }
    });
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