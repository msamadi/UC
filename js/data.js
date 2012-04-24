$(document).ready(function(){

});

function save_query(query_id) {
    var content = "{\"query_id\":" + query_id + ", \"layers\": \"" + $("#tranc").html().replace(/\"/g,"\\\"").trim()  + "\", \"steps\":\"" + $(".basic").html().replace(/\"/g,"\\\"").trim() + "\"}";
    $.ajax({
        type: "POST",
        url: "data.php",
        data: {action: "write_query", query_id: query_id, content: content},
        dataType: "json",
        success: function(data) {
            if (data.success) 
                alert("Saving succeeded!");
            else
                alert("Saving failed!");
        }
    });
}

function load_query(query_id) {
    $.ajax({
        type: "POST",
        url: "data.php",
        data: {action: "read_query", query_id: query_id},
        dataType: "json",
        success: function(data) {
            if (!data.success) {
                $(".basic").html(data.steps.replace(/\\\"/g,"\""));
                $("#tranc").html(data.layers.replace(/\\\"/g,"\""));
            }
        }
    });
}