# schemebook
This program is designed to create a lesson plan, using my localhost.sql file.
Download localhost.sql and export to phpmyadmin database. 
This will create a "myscheme" database. Inside this database are Tables of subjects, which will be used by "grades.php" file, "scheme_book.php" file.
These files are linked together.
The "schemebook.php" generates lesson plans and send them to "get_scheme...php" file.
This file will then create a download instance, for the lesson plan. 
The file has these line of code in the header section of the code [//header("Content-Type: application/vnd.ms-word");
//header("Expires: 0"); //header("Cache-Control: must-revalidate , post-check = 0, pre-check = 0");
//header("content-disposition:attachment;filename=Myschemebook.docx");]
This is the section that creates the download. 
