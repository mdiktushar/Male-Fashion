
# Male Fashion
Male Fashions is an e-commerce project. The users are allowed to create their accounts and order the products. Users can use Visa, AMEX, and Mastercard for their payments.
If the user is an admin, he will be directly redirected to the admin dashboard after signing in. However, if the user is a normal customer, he will be redirected to the website's homepage.
The admins are allowed to see the user details and the order. They can also promote a user to an admin or a customer.

## Environment

| Products |  
| :-------- |  
| `php` |
| `Laravel` |
| `MySql` |
| `Stripe Payment Gateway` |

## Installation

1. Clone the GitHub repository:
    ```
    git clone repository-url
    ```
2. Change the working directory to your project folder:
    ```
    cd your-project-name
    ```
3. Install project dependencies:
    ```
    composer install
    ```
4. Create a `.env` file:
    ```
    cp .env.example .env
    ```
5. Generate an application key:
    ```
    php artisan key:generate
    ```
6. Run database migrations (if needed):
    ```
    php artisan migrate
    ```

## Features

- Authentacation.
- Email verification.
- Fullscreen mode.
- Payment gateway. 


## Demo Customer Section
- Homepage:
<img src='readme/homepage.gif' />
- Login & Register:
<img src='readme/auth.gif' />
- Store:
<img src='readme/store.gif' />

## Demo Admin Section
- Admin Controll:
<img src='readme/adminsite.gif' />

## Authors

- [@mdiktushar](https://www.github.com/mdiktushar)

