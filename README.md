# 🌈 Mood Tracker Web Application

## 📌 Description
This is a simple Mood Tracker Web App built using PHP, MySQL, HTML, and CSS. Users can register, login, and track their daily mood.

## 🚀 Features
- User Registration & Login
- Secure Password Hashing
- Add Mood (Happy, Sad, Angry, Relaxed)
- View Mood History
- Delete Mood
- Session Management

## 🛠️ Technologies Used
- PHP
- MySQL
- HTML
- CSS

## 🗄️ Database Setup
Create a database named `mood_db` and run:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE moods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    mood VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## 📸 Screenshots

### Registration Page
![Register](screenshots/register.png)

### Login Page
![Login](screenshots/login.png)

### Dashboard
![Dashboard](screenshots/dashboard.png)
# 🌈 Mood Tracker Web Application

## 📌 Overview
A full-stack web application that allows users to track their daily mood. Built with PHP and MySQL, it includes authentication and CRUD operations.

## 🚀 Features
- 🔐 User Registration & Login
- 📊 Mood Tracking System
- 🗂️ View Mood History
- ❌ Delete Mood Entry
- 🔒 Session Management

## 🛠️ Tech Stack
- PHP
- MySQL
- HTML
- CSS

## 📸 Screenshots

### 📝 Registration Page
![Register](screenshots/register.png)

### 🔐 Login Page
![Login](screenshots/login.png)

### 📊 Dashboard
![Dashboard](screenshots/dashboard.png)

### ➕ Add Mood
![Add Mood](screenshots/add-mood.png)

### ❌ Delete Mood
![Delete](screenshots/delete.png)

## ⚙️ Setup Instructions
1. Install XAMPP
2. Move project to htdocs
3. Start Apache & MySQL
4. Import database
5. Run in browser

## 👩‍💻 Author
Mandira Mahata
