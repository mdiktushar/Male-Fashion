
# Male Fashion
An internet storefront called "Male Fashion" specializes in selling goods targeted to men. This project, which was created with the Laravel framework, incorporates several features to give customers a flawless shopping experience. The backend features have been built extensively, with an emphasis on elements like email verification, authentication, and payment gateway integration, while the interface uses a pre-designed framework.

Key Features:

1. Authentication:
 - Implemented secure authentication mechanisms to ensure user accounts are protected.
 - Users can securely register, log in, and manage their accounts.

2. Email Verification:
 - Integration of email verification functionality to authenticate user email addresses.
 - Upon registration, users receive a verification email to confirm their account.

3. Payment Gateway Integration:
 - Integrated a payment gateway to facilitate secure and seamless online transactions.
 - Users can safely make payments for their purchases using various payment methods supported by the gateway.

Technology Stack:
- Laravel Framework: Utilized for backend development, providing robust features and scalability.
- MySQL Database: Employed as the database management system for storing and managing project data.
- Frontend Template: Utilized a pre-designed template for the frontend interface, focusing development efforts on backend functionalities.
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

