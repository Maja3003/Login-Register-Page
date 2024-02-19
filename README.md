# Login-Register-Page
This project implements a basic user authentication system using HTML forms and PHP scripting. It includes registration and login functionality, allowing users to create accounts and log in securely.

<p align="center">
  <img src="https://i.imgur.com/D4DN1cq.png" width=50%>
  <img src="https://i.imgur.com/PqlyVev.png" width=50%>
  <img src="https://i.imgur.com/bYSbJjA.png" width=50%>
  <img src="https://i.imgur.com/qf2VgFx.png" width=50%>
</p>

## Features

1. **Login Page (`login.php`):**
   - Users can input their username and password.
   - New users can navigate to the registration page using the provided link.
   - Form data is sent to `logged_in.php` for processing.

2. **Registration Page (`register.php`):**
   - Users can register by providing a username, password, and confirming the password.
   - Existing users can return to the login page using the provided link.
   - Passwords are confirmed to ensure accuracy.
   - Upon successful registration, the data is submitted to `submit.php` for database insertion.

3. **Registration Handling (`submit.php`):**
   - Connects to a MySQL database (`php3`) using credentials: localhost, root, no password.
   - Retrieves input data (username, password, confirm) from the registration form.
   - Checks if the entered passwords match. If so, inserts user data into the `users` table.
   - Displays a success message with a link to the login page if registration is successful; otherwise, notifies about password mismatch.

4. **Login Handling (`logged_in.php`):**
   - Connects to the same MySQL database.
   - Retrieves input data (username, password) from the login form.
   - Executes SQL queries to check if the provided username and password match any records in the `users` table.
   - If a match is found, displays a success message indicating a successful login; otherwise, notifies about incorrect username or password.

## Usage

- Clone the repository: `git clone <repository-url>`
- Set up a web server (e.g., Apache) to host the PHP files.
- Configure the MySQL database and update connection details in `submit.php` and `logged_in.php`.
- Access the application through your web browser.

## Requirements

- Web server with PHP support
- MySQL database
