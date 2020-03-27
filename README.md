# inventory
inventory management system with sales and orders

Not sure how this works?  Start with a clean ( empty ) database, then import **demo_inv.sql** and you've got some basic data to get started!

****
Modified by Cory J. Potter aka CoreConduit Consulting Services 2018 - 2019
***
The application was initially created by Siamon Hasan, using [php](http:php.net),
[mysql](https://www.mysql.com) and [bootstrap](http://getbootstrap.com).
****

# documentation
-Install L.A.M.P. stack: ( MySQL is now MariaDB ) ~ optionally install Wordpress
-https://projects.raspberrypi.org/en/projects/lamp-web-server-with-wordpress/

1. Download the latest version.

2. Import/load oswa_inv.sql into your mysql database. This should set up the basic structure of the database system.

3. Modify the includes/config.php and change the variables to match your host, database, username and passwords.

4. Change all Folder permission inside uploads folder either add them to group call `www` if available or `777`.

5. Then loging by typing **username** and **password**:


   Administrator        | Special User           | Default User
   ---------------------| -----------------------| -------------------
   **Username** : admin | **Username** : special | **Username** : user
   **Password** : admin | **Password** : special | **Password** : user
   
****
-Additional documentation and configuration for your Inventory Management System:
-https://coreconduit.com/2019/02/07/using-a-raspberry-pi-for-your-own-inventory-management-system/

# support
Contact Cory:  https://coreconduit.com/about/
