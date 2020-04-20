<?php
session_start();
?>
<html>
<head>
<title>Upload script for mySQL by www.hagstroms.eu</title>
</head>
<body>
<script language="javascript">
function verify()
{
	if (confirm("Are you sure that you want to delete?"))
	{
		return confirm("Are you absolutely sure?");
	}
	return false;
}
</script> 

<?php
/*
    Script for uploading/downloading files to SQL database via web-browser.
    Copyright (C) 2008 Ulrik Hagstrom (ulrik@hagstroms.eu)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
	//session_start();
	include "sql_comm_helper.php";
	include "sql_data.php";  // File that contains the SQL connection information.

	
	function createDeleteButton($fid)
	{
		$ret = 	'<form method="post" action="clear_table.php">';
		$ret .= '<input type="hidden" name="fid_to_delete" value="' .$fid. '">';
		$ret .= '<input type="submit" name="delete_list_item" value="Delete"></form>';
		return $ret;
	}
	
	function createDeleteEntryCheckBox($fid)
	{
		return '<input type="checkbox" name="fid_delete[]" value="'.$fid.'">';
	}
	
	function createDeleteUploadOnlyCheckBox($fid)
	{
		return '<input type="checkbox" name="fid_delete_upload_only[]" value="'.$fid.'">';
	}
	
	if (isset($_SESSION[$user_password]) == false 
				|| $_SESSION[$user_password] != $admin_password)
	{
		if ($_POST['password'] != $admin_password)
		{
			//session_destroy(); 
			die ("Wrong password! (Hacking attempts are logged!)"); // qqq: Fix a logger.
		}
		$_SESSION[$user_password] = $_POST['password'];
	}	 
	echo "<h2>List of uploaded files</h2>\n";
	login_mysql();
	select_db(FALSE);
	$sql = "SELECT fid, fileName, fileSize, description, userName, userStreetAddress";
	$sql .= ",userCity,userCountry,userEmail,userPhone,userInfo1,userInfo2,userInfo3,ipLog FROM upload";
	$result = mysql_query($sql) or die (mysql_error());
	echo '<form method="post" action="clear_table.php">'."\n";
	while ($rad=mysql_fetch_array($result)) 
	{
	/*
		echo "<table border=0>\n";
		echo "<tr bgcolor=\"#AAAAAA\"><td>FileName</td><td>Size</td><td>Description</td><td>Name</td>";
		echo "<td>Street</td><td>City</td><td>Country</td><td>E-mail</td><td>Phone</td><td>Info1</td><td>Info2</td>";
		echo "<td>Info3</td><td>IP log</td></tr>\n";
		$chkBox = createCheckBox($rad[0]);
		echo "<tr bgcolor=\"#EEEEEE\">\n";
		echo "<td>$chkBox <a href=\"download.php?fid=$rad[0]\">$rad[1]</a></td>";
		echo "<td>$rad[2]</td><td>$rad[3]</td><td>$rad[4]</td><td>$rad[5]</td><td>$rad[6]</td><td>$rad[7]</td>";
		echo "<td>$rad[8]</td><td>$rad[9]</td><td>$rad[10]</td><td>$rad[11]</td><td>$rad[12]</td><td>$rad[13]</td>\n";
		echo "</tr></table>\n";
	*/
		$check_box_delete_entry = createDeleteEntryCheckBox($rad[0]);
		$check_box_delete_file_only = createDeleteUploadOnlyCheckBox($rad[0]);
		echo "<table border=1>\n";
		echo "<tr><th>FileName</th><td><a href=\"download.php?fid=$rad[0]\">$rad[1]</a></td></tr>";
		echo "<tr><th>Size</th><td>$rad[2]</td></tr>";
		echo "<tr><th>Description</th><td>$rad[3]</td></tr>";
		echo "<tr><th>Name</th><td>$rad[4]</td></tr>";
		echo "<tr><th>Street</th><td>$rad[5]</td></tr>";
		echo "<tr><th>City</th><td>$rad[6]</td></tr>";
		echo "<tr><th>Country</th><td>$rad[7]</td></tr>";
		echo "<tr><th>E-mail</th><td>$rad[8]</td></tr>";
		echo "<tr><th>Phone</th><td>$rad[9]</td></tr>";
		echo "<tr><th>Info1</th><td>$rad[10]</td></tr>";
		echo "<tr><th>Info2</th><td>$rad[11]</td></tr>";
		echo "<tr><th>Info3</th><td>$rad[12]</td></tr>";
		echo "<tr><th>IP log</th><td>$rad[13]</td></tr>";
		echo "<tr><th>Admin</th><td>$check_box_delete_entry Delete entry $check_box_delete_file_only Delete file only</td></tr>";
		echo "</table>\n";
		echo "<br>\n";		
	}
	echo '<input type="submit" name="delete_checkboxes_button" value="Delete checked" onclick="return verify()">';
	echo '</form>';	
	logout_mysql();
?>

<a href="admin.php">Logout</a> 
</body>
</html>
