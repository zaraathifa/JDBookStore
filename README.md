## The following is a list to run JDBookStore instructors:
- Make sure that XAMPP is properly installed
- Clone the project from github and place it in the "C:\xampp\htdocs" folder.
- Then run XAMPP. Open the XAMPP installation folder at "C:\xampp\", then double-click the "xampp-control.exe" file, click the Start button in the Action column for the Apache and MySQL menu.
- Open “http://localhost/phpmyadmin” on the browser and create new database with the name “jdbookstore_db”
- To open the website, open the “JDBookStore” folder in htdocs, click the address bar, and type in "cmd".
- When command prompt opened, type "php artisan migrate". Then, type "php artisan migrate:fresh --seed" to create new faker data in seeder. 
- Lastly type "php artisan serve" and copy the shown link into the browser
