# <div align="center">Supermarket Inventory Management System
</div>

<div align="center"><img src="https://icon-library.com/images/inventory-icon-png/inventory-icon-png-11.jpg" alt="Image Description" width="300"></div>

<p align="justify">This practice project is designed to manage categories and products in a supermarket, facilitating effective inventory management and product organization. It features a robust categories management system that allows users to easily create, edit, and delete product categories, ensuring a well-organized inventory. Users can also manage products by adding, editing, and removing items, complete with detailed information such as name, price, quantity, and category assignment. The system includes inventory control functionalities to keep track of stock levels, aiding in inventory oversight and restocking processes. Additionally, the frontend is built with Tailwind CSS, providing a responsive and mobile-friendly user experience.</p>

## Technologies Used

- **Laravel:** PHP framework for building modern web applications.
- **MySQL or Sqlite:** Database management system to store categories and product information.
- **Blade:** Laravel's templating engine for building dynamic user interfaces. 
- **Tailwind CSS:** Utility-first CSS framework for a clean and responsive design.
- **Vite:** Development tool for fast builds and optimized asset bundling.
- **PHP:** Backend programming language.

## How to Use

1. **Clone the repository:**
```bash
git clone https://github.com/Riwi-io-Medellin/SupermarketLee.git
```
Clone the repository, preferably using the SSH security key or you can also use the HTTPS method.
<p align="center"><img src="https://happygitwithr.com/img/github-https-or-ssh-url-annotated.png" width="600" alt="ejemplo"></p>

2. **Navigate to the Project Directory:**
```bash
cd SupermarketLee
```
3. **Switch to Your Working Branch:**
```bash
git checkout -b yourBranchName
```
4. **If necessary, Fetch the Latest Changes:**
```bash
git pull origin develop
```
5. **Install Project Dependencies:**
```bash
composer install
npm install
```
6. **Set up the environment file:**
```bash
cp .env.example .env
```
7. **Generate the application key:**
```bash
php artisan key:generate
```
8. **Set up the database and run migrations:**
```bash
php artisan migrate
```
9. **If you want you can load the seed data:**
```bash
php artisan db:seed
```
10. **Run the development server and build the frontend:**
```bash
composer run dev
```

## Contributing

Contributions are welcome! If you have any suggestions, feature requests, or bug reports, please open an issue or submit a pull request to the branch ```develop```

## License

© 2024 Riwi. All rights reserved.

The content of this project, including but not limited to text, images, graphics, and code, is the property of Riwi and is protected by copyright laws. It may not be reproduced, distributed, modified, or transmitted in any form or by any means without the prior written permission of Riwi.

For inquiries regarding the use or distribution of this project, please contact Riwi at [formacion@riwi.com](mailto:formacion@riwi.com).