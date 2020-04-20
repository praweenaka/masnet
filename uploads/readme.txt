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

**************************************************
*** SQL file upload --- (c) hagstroms.eu, 2008 ***
**************************************************

Installation instructions:
=========================
1) UnZip all files in this package into a empty folder on your local PC.
2) Open file "sql_data.php" and configure password and more for your Internet 
   Service Provider (ISP). You should also setup a "admin" password for 
   being able to download the uploaded (hidden) files.
3) Upload all extracted *.php-files *EXCEPT* "uninstall.php", typically via FTP 
   to your ISP account (place all files in same folder).
4) Use your browser and open (browse) "install.php" - if OK the required table 
   in the database will be created.
5) If no errors are displayed the installation is complete.

How to use
==========
1) To upload files link user to "upload.php". All user can do is to upload a file.
2) To download the uploaded files link a admin-user to admin.php. From here 
   the user can download the uploaded files.

How to uninstall
================
1) Upload file "uninstall.php" next to other project file.
2) Use your browser and open (browse) "uninstall.php" - if OK the required table 
   in the database be deleted.
3) Delete all php files on the web-server.
   
Support the project
===================
If you want to sponsor the project, please do it here:

Ulrik Hagström
Smyckegatan 4
426 50 Västra Frölunda
Sweden

Thank you in advance!


Support
=======
See www.hagstroms.eu for details.