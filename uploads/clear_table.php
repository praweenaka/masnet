
<HTML> 
<HEAD>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=browse_files.php">
</HEAD>

</HTML>
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

/*
*	Before this script is executed make sure that you have the proper settings in 
*	sql_data.php.
*/

	include "sql_comm_helper.php";	
	
	if ($_POST['delete_this'])
	{
		login_mysql();
		select_db(true);
		clear_upload_table();
		echo ("If no errors reported above the uploaded files are deleted!");
	}
	else if ($_POST['delete_checkboxes_button'])
	{
		login_mysql();
		select_db(true);	
		// Delete entry.
		if ($_POST['fid_delete'])
		{		
			foreach ($_POST['fid_delete'] as $cb)
			{
				echo "Deleting entry $cb<br>";
				delete_fid_from_upload_table($cb);
			}
		}
		// Delete file only.
		if ($_POST['fid_delete_upload_only'])
		{		
			foreach ($_POST['fid_delete_upload_only'] as $cb)
			{
				echo "Deleting file $cb<br>";
				delete_fid_file_only_from_upload_table($cb);
			}
		}
	}	
	else
	{
		echo ("ERROR! This file will only be executed if called from admin.php!");
	}
?>