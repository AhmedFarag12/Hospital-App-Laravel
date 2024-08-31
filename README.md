# 🏥 Hospital Management System

## Overview
 System that allows the user to register with his own email, and the user can book the clinic he wants, choose the doctor he wants through the website, and set the appointment.

## Features
- **User Authentication**: Secure login for patients, doctors, and administrators.
- **Patient Registration**: Register new patients and manage their profiles.
- **Appointment Scheduling**: Patients can book appointments with available doctors, and doctors can view their schedules.
- **Doctor Management**: Admins can manage doctor profiles, specialties, and availability.
- **Department Management**: Manage different hospital departments and assign doctors accordingly.
- **Patient History**: View and manage the medical history of patients.
- **Billing System**: Generate and manage bills for patients based on services provided.
- **Admin Dashboard**: Comprehensive dashboard for admins to manage all aspects of the hospital system.
- **Responsive Design**: Fully responsive and mobile-friendly interface.

## Technology Stack
- **Backend**: Laravel (PHP Framework)
- **Database**: MySQL
- **Frontend**: Blade Templating Engine, Bootstrap, HTML5, CSS3, JavaScript
- **Version Control**: Git

## Installation

### Prerequisites
- PHP >= 7.3
- Composer
- MySQL
- Git

### Steps

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/hospital-management-system.git
    cd hospital-management-system
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set Up Environment Variables**
    - Copy the `.env.example` file to `.env`
    ```bash
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials and other configuration settings:
    ```env
    DB_DATABASE=hospital_db
    DB_USERNAME=root
    DB_PASSWORD=yourpassword
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

6. **Seed the Database**
    - You can use database seeders to populate your database with sample data.
    ```bash
    php artisan db:seed
    ```

7. **Serve the Application**
    ```bash
    php artisan serve
    ```
    - The application will be available at `http://localhost:8000`.

## Usage

1. **Admin Login**: Admins can log in to the dashboard to manage doctors, departments, and overall hospital operations.
2. **Patient Registration**: Patients can sign up and manage their profiles.
3. **Book Appointments**: Patients can book appointments with doctors based on availability.
4. **Billing**: Generate and manage bills for services provided to patients.


## Acknowledgements
- Laravel Documentation
- Bootstrap for responsive UI components
- The open-source community for providing valuable resources and inspiration.
"""
