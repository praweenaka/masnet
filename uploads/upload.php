<html>
<head>
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
?>
<h2>File upload</h2>
<form enctype="multipart/form-data" [ccc] action="upload_to_sql.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="2097152"><br> <!-- 2048*1024 is 2MB file -->
<input name="fileData" type="file" /><br />
Description of file:<br>
<textarea name="descript" cols="30" rows="5" size="255"></textarea><br>
Name:<br>
<input name="userName" type="text" size="40"><br>
Street address:<br>
<input name="userStreet" type="text" size="40"><br>
City:<br>
<input name="userCity" type="text" size="40"><br>
Country:<br>
<input name="userCountry" type="text" size="40"><br>
E-mail:<br>
<input name="userEmail" type="text" size="40"><br>
Phone:<br>
<input name="userPhone" type="text" size="40"><br>
Info1: <input name="userInfo1isValid" type="checkbox"><br>
<input name="userInfo1" type="text" size="40"><br>
Info2: <input name="userInfo2isValid" type="checkbox"><br>
<input name="userInfo2" type="text" size="40"><br>
Info3: <input name="userInfo3isValid" type="checkbox"><br>
<input name="userInfo3" type="text" size="40"><br><br>
<input type="reset" value="Reset Form">
<input type="submit" name="submit" value="Upload now">
</form>
</body>
</html>
