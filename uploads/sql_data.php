<?

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

/* Setup for your internet account  */
	$host="localhost"; // mySQL host.
	$user="root"; // mySQL user.
	$password=""; // mySQL password
	$connection="";
	$database="ulriksdatabas";  // Name of your database at your ISP.

/* Passwords for admin user */
	$admin_password="abc123";  // You need this password for downloading the uploaded files.

?>