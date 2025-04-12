# EC2-signin-form-
# Sign-in Form with PHP, MariaDB, Nginx on EC2

This project is a simple user feedback/sign-in form built using **HTML**, **PHP**, **MariaDB**, 
and hosted on **AWS EC2** using **Nginx**. When users submit the form, their data gets stored in a MariaDB database.

## 🚀 Tech Stack

- AWS EC2 (Ubuntu)
- Nginx Web Server
- PHP
- MariaDB
- HTML + CSS
- Git & GitHub

## 📸 Screenshots

### User Form UI
![2025-04-06_18-15](https://github.com/user-attachments/assets/5930ce87-851a-430f-8e02-dbcca0702e85)


### PHP Code to Insert Data
![2025-04-06_17-59](https://github.com/user-attachments/assets/59d3ab1b-8051-422a-a676-d09cbee03e37)
![2025-04-06_17-58](https://github.com/user-attachments/assets/5cb92740-106b-40fe-9b22-ec1dd9676908)


### MariaDB Table
![2025-04-06_17-55](https://github.com/user-attachments/assets/bbdba7f4-1f55-4f2e-b7ce-e282eb1c1b8d)


## 🛠️ Setup Instructions

### 1. Launch EC2 Instance
- OS: Ubuntu
- Open ports: 22 (SSH), 80 (HTTP)

### 2. Install Required Packages

```bash
sudo apt update
sudo apt install nginx mariadb-server php php-mysql git
