<html>
<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=getting_started.html">
<title>Upload script for mySQL by www.hagstroms.eu</title>
</head>
<body>
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
include "sql_data.php";  // File that contains the SQL connection information.
include "sql_comm_helper.php";

function parseInfo($checkBox, $infoText)
{
	if ($checkBox == "on")
	{
		return $infoText;
	}
	else if ($infoText != NULL)
	{
		$ret = "Not confirmed: " . $infoText;
		return $ret;
	}
	else
	{
		return "N/A";
	}
}

if (isset($_FILES['fileData'])) {
	if ($fileSize > (2048*1024)) // 2MB
	{
		echo ("File too big, max size is: " . ini_get('post_max_size') . "<br>");
		die ("Please try again with a smaller file!");
	}
	switch ($_FILES['fileData']['error'])
	{
		case UPLOAD_ERR_OK:
			echo ("File transfered to server OK... Trying to save file... <br>");
			break;
		case UPLOAD_ERR_INI_SIZE:
			echo ("The uploaded file exceeds the upload_max_filesize directive in php.ini");
			break;
		case UPLOAD_ERR_FORM_SIZE:
			echo ("The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.");
			break;
		case UPLOAD_ERR_PARTIAL:
			echo ("The uploaded file was only partially uploaded.");
			break;
		case UPLOAD_ERR_NO_FILE:
			echo ("No file was uploaded.");
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			echo ("Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.");
			break;
		case UPLOAD_ERR_CANT_WRITE:
			echo ("Failed to write file to disk. Introduced in PHP 5.1.0.");
			break;
		case UPLOAD_ERR_EXTENSION:
			echo ("File upload stopped by extension. Introduced in PHP 5.2.0.");
			break;
		default;
			echo ("Unknown upload error occured! : " . $_FILES['fileData']['error']);
			break;
	}	
	if (is_uploaded_file($_FILES['fileData']['tmp_name'])) {
		if (empty($_POST['descript']))
		{
			die ("A description is required, upload aborted, try again!");
		}
		else
		{
			$descr = $_POST['descript'];
		}
		$userName 		= $_POST['userName'];
		$userStreet 	= $_POST['userStreet'];
		$userCity 		= $_POST['userCity'];
		$userEmail 		= $_POST['userEmail'];
		$userCountry 	= $_POST['userCountry'];
		$userInfo1CB 	= $_POST['userInfo1isValid'];
		$userInfo2CB 	= $_POST['userInfo2isValid'];
		$userInfo3CB 	= $_POST['userInfo3isValid'];
		$userInfo1 		= $_POST['userInfo1'];
		$userInfo2 		= $_POST['userInfo2'];
		$userInfo3 		= $_POST['userInfo3'];

		$userInfo1 = parseInfo($userInfo1CB, $userInfo1);
		$userInfo2 = parseInfo($userInfo2CB, $userInfo2);
		$userInfo3 = parseInfo($userInfo3CB, $userInfo3);	
		$ipLog = "IP:" . $GLOBALS['REMOTE_ADDR'] . "<br>" . date("D M j G:i:s T Y");

		login_mysql();
		select_db(FALSE);

		$tmpFileName = $_FILES['fileData']['tmp_name'];
		$fileType = $_FILES['fileData']['type'];
		$fileSize = filesize($tmpFileName);
		

		$fileData =addslashes (file_get_contents($tmpFileName));
		$realFileName = $_FILES['fileData']['name'];
		
		$sql = "INSERT INTO upload (fileName, fileType, fileSize, fileData, description";
		$sql .= ", userName, userStreetAddress, userCity, userEmail, userPhone, userCountry";
		$sql .= ", userInfo1, userInfo2, userInfo3, ipLog)";
		$sql .= " VALUES ('$realFileName','$fileType','$fileSize','$fileData','$descr'";
		$sql .= ",'$userName','$userStreet','$userCity','$userEmail','$userPhone','$userCountry'";
		$sql .= ",'$userInfo1','$userInfo2','$userInfo3','$ipLog')";
		mysql_query($sql) or die (mysql_error());			
		$fil_id = mysql_insert_id();
			
		echo "<h3>Sucessful registration!</h3><br>";
		logout_mysql();
	}
	else
	{
		echo ("A problem occured during the upload. Is the file to big ? <br>");
		
	}
}
else
{
	die ("No file selected. Try again.");
}
?>
</body>
</html>
