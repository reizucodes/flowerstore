# Flowerstore.ph
## Technologies 
    Laravel Breeze
    Tailwind CSS
    jQuery
    JavaScript
## How to run app
- Configure database **before** migration
- Create **_flowerstore_** db 
### Initial Commands  💻 
    1. composer install
    2. cp .env.example .env
    3. php artisan key:generate
    4. php artisan migrate
    5. php artisan db:seed
    6. php artisan serve
## Dummy Credentials
    admin@gmail.com
    password
    user@gmail.com
    password
    user2@gmail.com
    password
## Admin
### Dashboard
- Simple greeting msg
### Products
- CRUD Table
    - create new product
    - view product
    - edit product
    - delete product
    - status changer feature
### Orders
- All existing orders from users
## User
### Products
- Product Cards
    - only **active** products are listed
    - view product info
    - quantity changer
    - working add to cart button
    - items left refreshes based on how many items you added to cart
### Orders
- Shoppping Cart
    - Orders listed
    - Checkout Button
        - Order Summary
        - Place order does nothing
    - Cancel Order Button
        - Cancels order and deletes it from order table
        - Items in cart goes back to products quantity

[reizucodes](https://github.com/reizucodes)
