- Laravel Livewire CRUD Operation and contact us form create & send mail 

## Laravel Livewire CRUD Operation Step

- Step 1: Install Laravel 
        - Get the fresh laravel project using command,so oprn your terminal and command prompt then run the command.
            ## composer create-project laravel/laravel livewire 

- Step 2: Create Migration and Model
        - Create database migration for "posts" table and create model for file table.
            ## php artisan make:migration create_posts_table
            ## php artisan migrate
            ## php artisan make:model Post

- Step 3: Install Livewire
        - We will simply install livewire to our laravel project using bellow command:
            ## composer require livewire/livewire

- Step 4: Create Post Component
        - Create livewire component using command so run bellow command to create post crud application component.
            ## php artisan make:livewire posts
        - Now they created files so you can see the path:
            - app/Http/Livewire/Posts.php
            - resources/views/livewire/posts.blade.php

- Step 5: Update Component File
        - Now we will write render(), resetInputFields(), store(), edit(), cancel(), update() and delete() method our   CRUD app.
        - So, let, update app/Http/Livewire/Posts.php file.

- Step 6 Update Blade Files
        - resources/views/livewire/posts.blade.php
        - resources/views/livewire/create.blade.php
        - resources/views/livewire/update.blade.php

- Step 7: Update Welcome Blade File
        - Update laravel default welcome blade file so it will load CRUD example on our main url.
        - We will update welcome.blade.php file in this file we will use @livewireStyles, @livewireScripts and @livewire('contact-form') so let's add it.
        - resources/views/welcome.blade.php

- Step 8: Run our project 
        - php artisan serve