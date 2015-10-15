# LaravelFindMe
Simple laravel lost and found application.

## Installation
1) Clone the repository  
2) In a terminal run: composer update  
3) Create a database (i use findme as the name)  
4) Edit the .env file and set the DB settings to match those on your own machine.  
5) In a terminal run: php artisan migrate  
6) In a terminal run: php artisan db:seed  

## Notes
For the site to work on your server you must enable the respective URL rewrite module.
In Apache, this is called mod_rewrite. 

