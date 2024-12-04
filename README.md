# CRUD App with Authentication, Pagination, and Searching
## This project is a web application that includes essential features such as:
- Login Authentication: Secure access to user-specific functionalities.
- CRUD Operations: Full Create, Read, Update, and Delete functionality for managing data.
- Pagination: Efficient navigation through large datasets.
- Search Functionality: Quick and dynamic data filtering.

 ### Requirements
- Composer
- XAMPP
- PHP (8 or above)
- npm


### Set up database:
1. Open XAMPP, start apache and mysql
2. The database is located in app-crud/database/app-crud.sql
3. Open in your browser: localhost/phpmyadmin
4. Then create new database, name it: app-crud (this database name should match with DB_DATABASE inside .env file), and make sure inside the .env is: DB_CONNECTION=mysql
5. Then import app-crud.sql to the new database in localhost/phpmyadmin
NOTE: The data used in this crud app is in the product table inside the app-crud database.

### Set up server:
1. Open XAMPP, start apache and mysql
2. Download this project folder and place it in C:\xampp\htdocs
3. Then open the project in vscode(or other)
4. Open the terminal inside vs code
5. cd to the app-crud folder, which consist all the code
6. Run command: npm i
7. Then run command: npm run dev
8. Open another terminal, and run command: php artisan serve
9. To access it, open browser, type: localhost/8000 
note: make sure both terminal is on, and dont forget to cd to your folder project before run the command

Demo Video: https://drive.google.com/file/d/1JR4rRayNPpn5d-BVw7me3Pt0inCNeT5N/view?usp=sharing

In welcome page, please register first then login
