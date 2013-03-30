MADCMS
======

Aim / Objective

Using a CMS ensures that the client is saved from time consuming extra efforts. There is no longer any need to hard-code the website as the CMS takes care of everything.  After installing the script client is presented with a neat coded website, modifying the code is easy and can be done as the user finds fit. Furthermore, it is easy to administrate. Our aim is to provide such a kind of WCMS solution to ensure that the client doesn’t have to be from technical field to manage and satisfies client’s needs.

Technologies used

This project will be using the following technology stack:

a)  HTML : As markup language
b)	CSS : As style sheet language
c)	PHP : As programming language
d)	SQL :  For data management
e)	JavaScript : As scripting language 






Module Introduction 
1.	Login Module

This module enables access to the admin panel. User must be logged in to make any operations to the page. The function login($user, $pass) available in functions.php gets triggered when user submits the login form. Below is how the function works.

a)	The function accepts 2 variables $user and $pass.
b)	Undesired characters in username and password are stripped and converted into binary form using mysql_real_escape_string() function.
c)	Password is transformed to the respective md5 hash using md5() function.
d)	A query is executed using SELECT to find if the username and password is available and is a combination.
e)	If the query returns true the user is redirected to admin panel.
2.	Registration Module

This module adds the ability for a user to register himself on our site. There is a form a user should fill up from which the credentials are retrieved and are stored in the database which are used later in the login module.
                 All the entries are inserted to the database class ‘members’. After this the user can login to the administration panel. The function register($user, $pass, $eid) in functions.php is called when the user clicks the register button. Below is how the function works.

a)	After the user clicks the register button, the password field is matched with the verify password field.
b)	If they match the function register($user, $pass, $eid) is called.
c)	The above mentioned function accepts 3 variables $user, $pass, $eid referring to username, password and e-mail id of the user respectively.
d)	Using the INSERT INTO command the information is inserted into the database.
e)	The user is redirected to the admin panel.
  
3.	Sidebar Module

Sidebar is the area under the logo and in the extreme left. It is defined in a php file of its own called ‘sidebar.php’ available in the root. It is called via ‘index.php’ using a simple php function ‘include()’. 
Its position is fixed as declared in the CSS file and does not move even on scrolling. Currently it contains a weather widget. It does not have any function other than an id in CSS to style it. It can be used to show some constant data on all pages. 
Examples: Advertisements.



4.	Comment Module


Each of the blog that would be posted by the user will have comments posted on it. This module adds the ability for a guest user to add a comment that can be a review or a feedback to the published post. It only works when opened page is any other page than the homepage.

It has 2 subparts :

Add Comment Module : A function comment($id,$name,$cmt) defined in functions.php is used to initiate it whenever a comment is added. This adds the comment inserted by the user into our database table ‘comment’.

Display Comment Module : It is triggered when a user opens a page other than the home page. The function is used to retrieve comments is commentdisplay($id). The $id refers to the page id.

5.  Admin Module

This blog application has a complete admin panel for performing administration. The administration is done for post management such as adding new post, deleting a published post and editing a published post. It centralizes all the operations from a single page and makes the WCMS easy to manage. The UI is as simple as it could be so that a non-technical person can easily administrate. All the files are stored in root/admin folder. It can be extended by adding  modifications in code such as managing comments, adding or removing users, inbuilt editor for php files, etc. 

Some sub modules are addpage, deletepage and editpage located in root/admin. 



