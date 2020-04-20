<?php

session_start();
header('Content-Type: text/xml');
date_default_timezone_set('Asia/Colombo');
require_once('connectioni.php');

if ($_GET["Command"] == "getdtt") {
    $tb = "";
    $tb = "<marquee style=\"width:560px;\" direction=\"up\" behavior=\"scroll\" scrollamount=\"2\" scrolldelay=\"5\" height=\"550px\" onmousedown=\"this.stop();\" onmouseup=\"this.start();\" >";
    $tb .= "<table class='table table-hover' height: 350px;\"\>";


//    $sql = "SELECT * FROM comment  where c_name = '" . $_SESSION["UserName"] . " ' order by c_date desc  ";
    $sql = "SELECT * FROM comment order by c_date desc limit 10";

    $i = 0;
    $result = mysqli_query($GLOBALS['dbinv'], $sql);
    while ($row = mysqli_fetch_array($result)) {

        $idd = "comm" . $row['id'];

        $tb .= "<tr>";
        $tb .= "<td>" . $row['c_name'] . "</td>";
        $tb .= "<td class=\"col-sm-2\">" . $row['c_date'] . "</td>";
        $tb .= "<td class=\"col-sm-9\" onClick=\"postlink('" . $row['cmnt'] . "')\">" . substr($row['cmnt'], 0, 40) . "</td>";

        $tb .= "</tr>";
    }
    $tb .= "</table>";
    $tb .= "</marquee>";
    echo $tb;
}


//
//if ($_GET["Command"] == "sub_comment") {
//
//    $sql = "insert into sub_comment (main_comment,subcomment,user_nm ) values ('" . $_GET['cmnt'] . "','" . $_GET['subcom'] . "','" . $_SESSION["UserName"] . "')  ";
//    echo $sql;
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//}
//
//if ($_GET["Command"] == "viewAd") {
//    $_SESSION["ad_user"] = $_GET["adusername"];
//    $_SESSION["ad_serial"] = $_GET["serial"];
//    echo "ad details added to session";
//}
//
//if ($_GET["Command"] == "comment") {
//    $cmnt = $_GET["cmnt"];
//
//    $sql = "insert into comment (c_name, cmnt, c_date) values ('" . $_SESSION["UserName"] . "', '$cmnt', '" . date("Y-m-d H:i:s") . "' ) ";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//
//    echo "comment added";
//}
//
//if ($_GET["Command"] == "del_item") {
//
//    $sql = "delete from comment where id = '" . $_GET['id'] . "'";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//
//    $sql = "delete from sub_comment where main_comment = '" . $_GET['id'] . "'";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//}
//
//if ($_GET["Command"] == "del_item1") {
//
//
//    $sql = "delete from sub_comment where id = '" . $_GET['id'] . "'";
//    $result = mysqli_query($GLOBALS['dbinv'], $sql);
//}
//
//if ($_GET["Command"] == "search") {
//    $_SESSION["search_phrase"] = $_GET["filter"];
//    echo "search phrase added to session";
//}
//
//mysqli_close($GLOBALS['dbinv']);
?>
