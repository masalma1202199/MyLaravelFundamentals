create project :
write this code in laragon terminal
composer create-project laravel/laravel:^10.0 MyFirstLaravelProject


 
 create model
 php artisan make:model User
 
 migration 
 php artisan make:migration create_users_table
 
 create controller 
 php artisan make:controller UserController
 
 resource controller
 php artisan make:controller BlogController --resource
 
 Single Action Controllers
 php artisan make:controller AboutController --invokable

 Explore File and Folder Structure
 app: Contains the core code of your application, including controllers, models, and other PHP classes.
routes: Contains route definitions for your application.
public: Contains publicly accessible files, such as JavaScript, CSS, and media files.
resources: Contains your views, language files, and other resources.
storage: Contains files generated by the framework, such as logs, cache, and uploaded files.
