<?php

session_start();

date_default_timezone_set('Asia/Colombo');
require_once('connectioni.php');

if ($_GET["Command"] == "getdt") {

    $tb = "";
    $tb .= "<table class='table table-hover' style=\"width:550px;\">";


//    $sql = "SELECT * FROM comment  where c_name = '" . $_SESSION["UserName"] . " ' order by c_date desc  ";
    $sql = "SELECT * FROM comment order by c_date desc limit 10";

    $i = 0;
    $result = mysqli_query($GLOBALS['dbinv'], $sql);
    while ($row = mysqli_fetch_array($result)) {

        $idd = "comm" . $row['id'];

        $tb .= "<tr>";
        $tb .= "<td>" . $row[''] . "</td>";
        $tb .= "<td class=\"col-sm-2\">" . $row['c_date'] . "</td>";
        $tb .= "<td class=\"col-sm-7\" onClick=\"postlink('" . $row['cmnt'] . "')\">" . substr($row['cmnt'], 0, 40) . "</td>";
        $tb .= "<td><a class=\"btn btn-default btn-xs\" onClick=\"del_item('" . $row['id'] . "')\"> <span class='glyphicon glyphicon-trash'></span></a></td>";
//        $tb .=  "<td>"break;"</td>";"
        $tb .= "</tr>";

        $tb .= "<tr>";
        $tb .= "<td></td>";
        $tb .= "<td>  <a href=\"#DIV\" onclick=\"myFunction()\">Reply</a></td>";

        $t = 0;
        $sql = "SELECT * FROM sub_comment  where main_comment = '" . $row['id'] . " '";
        $result_v = mysqli_query($GLOBALS['dbinv'], $sql);
        while ($row_v = mysqli_fetch_array($result_v)) {

            if ($t == 0) {
                 $tb .= "<td>" . $row_v['user_nm'] . "</td>";
                $tb .= "<td>" . $row_v['subcomment'] . "</td>";
                $tb .= "<td><a class=\"btn btn-default btn-xs\" onClick=\"del_item1('" . $row_v['id'] . "')\"> <span class='glyphicon glyphicon-trash'></span></a></td>";
            } else {
                $tb .= "<tr>";
                $tb .= "<td colspan='2'></td>";
                 $tb .= "<td>" . $row_v['user_nm'] . "</td>";
                $tb .= "<td>" . $row_v['subcomment'] . "</td>";
                $tb .= "<td><a class=\"btn btn-default btn-xs\" onClick=\"del_item1('" . $row_v['id'] . "')\"> <span class='glyphicon glyphicon-trash'></span></a></td>";
                $tb .= "</tr>";
            }

            $t = $t + 1;
        }

        if ($t != 0) {
            $tb .= "<tr>";
            $tb .= "<td colspan='2'></td>";
        }

        $tb .= "<td><input  id=\"$idd\" type=\"text\" class=\"col-sm-7\"></td>";
        $tb .= "<td><input  onclick=\"gotpost(" . $row["id"] . ");\" id=\"DIV1\" class=\"col-sm-25\" type=\"button\" value=\"Reply\"></td>";
        $tb .= "</tr>";
        $i = $i + 1;
    }
    $tb .= "</table>";

    echo $tb;
}

if ($_GET["Command"] == "getdt2") {
    header('Content-Type: text/xml');
    $ResponseXML = "";
    $ResponseXML .= "<salesdetails>";

    $prev = "";

    $sql = "select * from docs order by id desc limit 10";
    $result_v = mysqli_query($GLOBALS['dbinv'], $sql);
    while ($row2 = mysqli_fetch_array($result_v)) {

        $filetype = pathinfo($row2['loc'], PATHINFO_EXTENSION);
        $filetype = "application/" . $filetype;

        $prev .= "<div data-fileindex='3' width='160px' height='160px' id='" . $row2['id'] . "'  class='col-sm-12 well'>
                    
                
                    <object width='460px' height='360px' type='" . $filetype . "' data='" . $row2['loc'] . "'>
                        <div  class='file-preview-other '>
                            
                        </div>
                    </object>                        
                      
                    <div width='160px' class='file-thumbnail-footer '>
                        <div  title='" . $row2['file_name'] . "' style=\"margin-top:10px;\"  class='file-footer-caption'>" . $row2['file_name'] . "</div>
                        <div  title='" . $row2['c_date'] . "' style=\"margin-top:10px;\"  class='file-footer-caption'>" . $row2['c_date'] . "</div>
                        <div  class='file-actions'>
                            <div class='file-footer-buttons '>
                                
                                <a href='" . $row2['loc'] . "' download='" . $row2['file_name'] . "'><i class='glyphicon glyphicon glyphicon-save-file'></i></a>
                                <a onclick='removefile(" . $row2['id'] . ")'><i class='glyphicon glyphicon glyphicon-trash'></i></a>
                                <div class='col-md-12'> 
                                    <label class=\"col-sm-2\">" . $row['c_date'] . "</label>;
                                </div>
                            </div>
                            <div class='clearfix'></div>
                        </div>
                    </div>
                </div> ";
    }


    $ResponseXML .= "<filebox><![CDATA[" . $prev . "]]></filebox>";


    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}


if ($_GET["Command"] == "sub_comment") {

    $sql = "insert into sub_comment (main_comment,subcomment,user_nm ) values ('" . $_GET['cmnt'] . "','" . $_GET['subcom'] . "','" . $_SESSION["UserName"] . "')  ";
    echo $sql;
    $result = mysqli_query($GLOBALS['dbinv'], $sql);
}

if ($_GET["Command"] == "viewAd") {
    $_SESSION["ad_user"] = $_GET["adusername"];
    $_SESSION["ad_serial"] = $_GET["serial"];
    echo "ad details added to session";
}

if ($_GET["Command"] == "comment") {
    $cmnt = $_GET["cmnt"];

    $sql = "insert into comment (c_name, cmnt, c_date) values ('" . $_SESSION["UserName"] . "', '$cmnt', '" . date("Y-m-d H:i:s") . "' ) ";
    $result = mysqli_query($GLOBALS['dbinv'], $sql);

    echo "comment added";
}

//if ($_GET["Command"] == "fileupload") {
//    $upload = $_GET["upload"];
//
//    $sql = "insert into docs (c_name, loc,file_name, c_date) values ('" . $_SESSION["UserName"] . "', '$upload', '" . date("Y-m-d H:i:s") . "' ) ";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//
//    echo "file added";
//}

if ($_GET["Command"] == "del_item") {

    $sql = "delete from comment where id = '" . $_GET['id'] . "'";
    $result = mysqli_query($GLOBALS['dbinv'], $sql);

    $sql = "delete from sub_comment where main_comment = '" . $_GET['id'] . "'";
    $result = mysqli_query($GLOBALS['dbinv'], $sql);
}

if ($_GET["Command"] == "del_item1") {


    $sql = "delete from sub_comment where id = '" . $_GET['id'] . "'";
    $result = mysqli_query($GLOBALS['dbinv'], $sql);
}

if ($_GET["Command"] == "search") {
    $_SESSION["search_phrase"] = $_GET["filter"];
    echo "search phrase added to session";
}

//
//if ($_GET["Command"] == "remove") {
//
//    $sql = "delete from docs where id = '" . $_GET['id'] . "'";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//}

mysqli_close($GLOBALS['dbinv']);
?>
