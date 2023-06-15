# Flowerstore.ph
## Technologies 
    Laravel Breeze
    Tailwind CSS
    jQuery
    JavaScript
## How to run app
- Configure database **before** migration
- Create **flowerstore** db 
### Commands 💻 
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve
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
