# soding
The Web based system which is programed is consist of these files:
Mydatabase
Generate.php
Main.php
List.php
Create.php
Createexe.php
Edit.php
Editexe.php
Delete.php
The file “mydatabase” is the Sqlite database file which is generated when we execute the “generate.php” program for one time.
The “main.php” is the program of the main page for the system which presents two choices:
Create New Contact
List Contacts
The first choice “Create New Contact” links to “create.php” page which is designed to enter contact name and contact number for a new contact. “Add New” button links to “createexe.php” program that store the new contact into database. Then the page will navigate to main page.
The second choice “List Contacts” links to “list.php” page which list all the contacts stored in database with two choices for each contact. These two choices are “edit” and “delete”.
The choice “edit” links to “edit.php” page which presents the contact name and contact number where we can change their contents and by pressing on “save” button we call “editexe.php” to update the data in database. Then the page will navigate to main page.
The choice “delete” links to “delete.php” file which deletes the contact from database. Then the page will navigate to main page.
