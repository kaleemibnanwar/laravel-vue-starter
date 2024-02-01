# Project Setup Documentation

### Clone Project:
> git clone git@github.com:kaleemibnanwar/talenthub.git

### Setup Configurations in ENV

#### Update database information
"""
DBCONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=<your_database_name>

DB_USERNAME=root

DB_PASSWORD=
"""

### Install Laravel Packages

> composer install

composer update  #(only if composer install doesn't work) 

### Migrate Database

> php artisan migrate:fresh --seed

### Install Node Packages

> npm i

### Run build

> npm run build

### Generate Secret Key 
 
 > php artisan key:generate

### Start Laravel Project

> php artisan serve 



### For Development on Frontend Side use Watch script instead of Build.
> npm run watch 




## Login/Default Testing SuperUser
##### login
> superadmin@admins.com
##### password
> 12345678
