# Times of India RSS Feed Display

This project fetches and displays RSS feed data from the Times of India using Laravel. The data is displayed in a table with searching, sorting, and pagination functionalities.

## Requirements

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- Node.js and npm
- jQuery version 3.6.0
- DataTables version 1.11.5, which relies on jQuery for the data table functionality (searching, sorting, pagination).

## Install PHP dependencies
composer install

## Install JavaScript dependencies
npm install

## Setup Instructions
```bash
### Step 1: Clone the Repository
git clone https://github.com/Susmitha-IT/Times-of-India-RSS-Feed-Display.git
cd display

### Step 2: Serve the application

php artisan serve

### By default, the application will be available at http://127.0.0.1:8000.
```
## Project Structure

- web.php: Defines the route for the home page.
- DataController.php: Handles fetching and processing the RSS feed data.
- layout/app.blade.php: Base layout file with DataTables integration.
- welcome.blade.php: Main view file displaying the RSS feed data.

## Project Snapshots
![image](https://github.com/Susmitha-IT/Times-of-India-RSS-Feed-Display/assets/154817866/93f491a0-387c-4508-be5b-a5bf3330e88e)
![image](https://github.com/Susmitha-IT/Times-of-India-RSS-Feed-Display/assets/154817866/6d9a57d3-3607-45c3-88d8-7c95fd7604de)

