# 🤖 Robot Arm Control Panel

This project is a simple web-based interface to control and store robotic arm positions. The system allows users to adjust six motor values using sliders, save each pose into a MySQL database, view all saved poses, and delete them as needed.

## 📌 Features

- Adjust 6 motors using interactive sliders
- Save the current pose to the database
- View all saved poses in a dynamic table
- Delete poses from the database
- Simple and clean user interface

## 🛠️ Technologies Used

- HTML, CSS, JavaScript
- PHP (Backend interaction with MySQL)
- MySQL (Database for saving poses)
- XAMPP (Local development environment)

## 🧩 Database Schema

Database: robot_arm

Table: poses

| Column   | Type      | Description               |
|----------|-----------|---------------------------|
| id       | INT       | Auto-increment primary key |
| motor1   | INT       | Motor 1 position (0–180)   |
| motor2   | INT       | Motor 2 position (0–180)   |
| motor3   | INT       | Motor 3 position (0–180)   |
| motor4   | INT       | Motor 4 position (0–180)   |
| motor5   | INT       | Motor 5 position (0–180)   |
| motor6   | INT       | Motor 6 position (0–180)   |
| status   | INT       | Default = 1 (can be used for execution tracking) |

## 🚀 How to Run

1. Clone or download the project files.
2. Move the project folder to htdocs inside your XAMPP directory.
3. Start Apache and MySQL from the XAMPP control panel.
4. Create the database and table using phpMyAdmin.
5. Open your browser and go to: