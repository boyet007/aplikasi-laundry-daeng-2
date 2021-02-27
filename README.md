## List Perintah di console
- php artisan make:model Outlet -m
- php artisan make:migration add_relationships_users_to_outlets_table
- php artisan make:model Customer -m
- php artisan make:model Expense -m
- php artisan make:model LaundryType -m
- php artisan make:model LaundryPrice -m
- php artisan make:model Transaction -m
- php artisan make:model DetailTransaction -m
- php artisan migrate
- bower install fontawesome --save
- php artisan make:controller API/UserController
- php artisan make:controller API/OutletController
- php artisan make:resource UserCollection
- php artisan make:resource OutletCollection


- php artisan storage:link --> untuk menyimpan foto di folder storage dan bisa diakses oleh publik

- php artisan make:controller FrontController
- php artisan db:seed

- npm install
- npm install vuex --save
- npm install vue-router
- npm i vue bootstrap-vue bootstrap
- npm install axios

## Spatie Role User
- composer require spatie/laravel-permission
- php artisan permission:create-role superadmin
- php artisan permission:create-role admin
- php artisan permission:create-role finance
- php artisan permission:create-role courier

- php artisan permission:create-permission "read outlets"
- php artisan permission:create-permission "create outlets"
- php artisan permission:create-permission "edit outlets"
- php artisan permission:create-permission "delete outlets"

- php artisan permission:create-permission "read couriers"
- php artisan permission:create-permission "create couriers"
- php artisan permission:create-permission "edit couriers"
- php artisan permission:create-permission "delete couriers"

- php artisan permission:create-permission "read products"
- php artisan permission:create-permission "create products"
- php artisan permission:create-permission "edit products"
- php artisan permission:create-permission "delete products"

- php artisan make:controller API/RolePermissionController

- php artisan make:migration add_field_status_to_expenses_table


## Cara install bootstrap-vue older
- npm remove bootstrap-vue
- npm install bootstrap-vue@2.0.0 --save

## Catatan :
setelah bikin auth jangan lupa hapus Auth::routes() di route untuk menghindari redirect ke laravel login

untuk testing SANCTUM di postman :
- Header :
* Accept : application/json
* Authorization : Bearer 5|YAPa8QRpe0aoqKCUgXBxxZ20IYX7Nf2TEvdisDsw 

akses folder storage oleh public :
- php artisan storage:link
jangna lupa set vagrant sebagai admin dahulu 
