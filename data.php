<?php
    try {
        switch ($_POST["action"]) {
            case "list_queries":
                $fh = fopen("files/queries.json", "r");
                $response = "";
                while(!feof($fh)) { 
                    $line = fgets($fh);
                    if (strlen($line) < 5) continue;
                    //$query = json_decode($line,true);
                    //echo $query["query"] . ',' . $query["query"] '<br />';
                    if ($response == "")
                        $response = $line;
                    else
                        $response = $response . "," . $line;
                }
                fclose($fh);
                echo "[" . $response . "]";
                //echo file_get_contents("files/queries.json");
                break;
            case "read_query":
                $filename = "files/" . intval($_POST["query_id"]) . ".json";
                if (file_exists($filename))
                    echo file_get_contents($filename);
                else
                    echo "{ \"success\": false, \"message\": \"No such query.\"}";
                break;
            case "write_query":
                $fh = fopen("files/" . $_POST['query_id'] . ".json","w");
                fwrite($fh, $_POST["content"]);
                fclose($fh);
                echo "{ \"success\": true }";
                break;
        }
    } catch (Exception $e) {
        echo "{ \"success\": true, \"message\": \"" . $e->getMessage() . "\"}";
    }
?>