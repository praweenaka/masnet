<?php
session_start();
?>
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
//session_start();
session_unset ();
session_unregister ( $user_password );
//session_destroy(); // This page also works as the logout page.
?>
<h2>Adminstation page</h2>
<form action="browse_files.php" method="post" enctype="multipart/form-data">
Enter admin password:<br>
<input type="password" size="20" name="password">
<input type="submit" value="Login">
</form>
</body>
</html>
