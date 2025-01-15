# RideHive

## Overview
A platform for users to rent bikes and scooters online. Vendors can list vehicles, and admins manage platform operations.

## MVP
- **Admin Module**: Manage users, vehicles, bookings, and feedback.
- **User Module**: Register, browse vehicles, book, and pay online.
- **Vendor Module**: Manage vehicle listings and bookings.
- **Payment Module**: Secure payment processing.

## Setup and Access the Application

- Open Windows Powershell and navigate to project folder 
- Run command to deploy on Podman `podman-compose up -d`
- To run any php related command, enter podman application container using `podman exec -it ridehive_manager_copy bash`
- To View Database in Podman, run command `podman exec -it mysql_db_copy mysql -u custom_user_copy -pcustom_password_copy ridehive_db_copy` 
- To Add admin Credentials:
    - Run command `podman exec -it ridehive_manager_copy bash`
    - Run command `php artisan db:seed --class=AdminSeeder`

## Access Links:
- Link `http://localhost:8000/`
