# Laravel Product Management

Simple **CRUD Product Management System** built with Laravel.
This project demonstrates backend development concepts such as routing, controllers, database migrations, search functionality, and CRUD operations.

---

## 📌 Project Overview

This project is a simple product management system that allows users to manage products through a web interface.

Users can:

* Create new products
* View product lists
* Search products
* Update product information
* Delete products

The purpose of this project is to practice fundamental web development concepts using Laravel.

---

## ⚙️ Tech Stack

* PHP
* Laravel
* MySQL
* Blade Template
* Bootstrap

---

## ✨ Features

* Create Product
* View Product List
* Search Product
* Edit Product
* Delete Product

---

## 🗂 Project Structure (Important Folders)

```
app/
 └── Http/
      └── Controllers/
           └── ProductController.php

resources/
 └── views/
      └── products/

routes/
 └── web.php

database/
 └── migrations/
```

---

## 🚀 Installation

### 1. Clone the repository

```
git clone https://github.com/your-username/your-repository-name.git
```

### 2. Go to project directory

```
cd your-repository-name
```

### 3. Install dependencies

```
composer install
```

### 4. Create environment file

```
cp .env.example .env
```

### 5. Generate application key

```
php artisan key:generate
```

### 6. Setup database

Edit `.env`

```
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migration

```
php artisan migrate
```

### 8. Start development server

```
php artisan serve
```

Open browser

```
http://127.0.0.1:8000
```

---

## 🔎 Search Feature

Users can search products by name using the search input.
The system filters product records from the database and displays matching results.

---

## 🧪 CRUD Functions

| Function | Description              |
| -------- | ------------------------ |
| Create   | Add new product          |
| Read     | View product list        |
| Update   | Edit product information |
| Delete   | Remove product           |
| Search   | Find products by keyword |

---

## 📚 Learning Purpose

This project was built to practice:

* Laravel MVC architecture
* Routing
* Controllers
* Blade templating
* Database migrations
* CRUD operations
* Search functionality

---

## 📄 Chirasuki

This project is open-source and available under the MIT License.
