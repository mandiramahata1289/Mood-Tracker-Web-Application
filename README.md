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
