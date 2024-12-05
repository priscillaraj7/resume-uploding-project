# Candidate Resume Upload System

This is a simple web application that allows users to upload their resumes along with their names. The uploaded resumes are stored in a MySQL database, and users can view a list of all candidates along with their downloadable resumes.

## Technologies Used

**HTML:** For creating the structure of the web pages.

**CSS:** For styling the HTML form and improving the user interface.

**PHP:** For handling server-side logic, including file uploads and database interactions.

**MySQL:** For storing candidate data and resume file information.

**XAMPP/WAMP/MAMP:** Local development environment for running PHP and MySQL server.

## Features

**Resume Upload:** Users can upload their resumes along with their name.

**Candidate List:** Users can view all candidates who have uploaded resumes with an option to download the resumes.

**Database Storage:** All candidate data (name and resume file) are stored in a MySQL database.

## Project Structure

**index.html:** The main form where users can enter their name and upload their resume.

**upload.php:** The PHP script that handles file uploads and stores the data in the database.

**list.php:** Displays a list of all candidates and provides download links for their resumes.

**uploads/:** Directory where uploaded resumes are stored.

**candidates_db:** The MySQL database that stores candidate information.

## Prerequisites

XAMPP/WAMP/MAMP (or any PHP, MySQL server setup) must be installed and running locally.

MySQL: To store the candidate data.

**Setup and Installation**

Follow the steps below to set up and run this application locally.

1. Install XAMPP/WAMP/MAMP (if not already installed)

   Download XAMPP from https://www.apachefriends.org/download.html and install it.

   Launch the XAMPP/WAMP/MAMP Control Panel and start both Apache (for PHP) and MySQL (for database).
   
2. Set Up MySQL Database
   
   Open phpMyAdmin by visiting http://localhost/phpmyadmin in your browser.
   
   Create a new database:
   
   Database Name: `candidates_db`
   
   Create a table to store the candidate data:
   
   Table Name: `candidates`
   
   Table Structure:
   
   `id (INT, AUTO_INCREMENT, PRIMARY KEY)
   name (VARCHAR(255), NOT NULL)
   resume (VARCHAR(255), NOT NULL)`
   
   Run the following SQL query in phpMyAdmin to create the database and table:

   ### sql
   Copy code

   `CREATE DATABASE candidates_db;`

   `USE candidates_db;`

   `CREATE TABLE candidates (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       resume VARCHAR(255) NOT NULL
   );`

3. Configure Database Connection in PHP

   In the upload.php and list.php files, make sure the following MySQL connection details are correct:

   ### php

   Copy code

   `$servername = "localhost"; // Default MySQL server`

   `$username = "root"; // Default username`

   `$password = ""; // Default password (if empty, leave as "")`

   `$dbname = "candidates_db"; // The name of your database`

4. Download the Project
   
   Download or clone the repository to your local machine.

   Copy code

   git clone <your-repository-url>

   Move the project folder to the htdocs directory of your XAMPP installation (usually located in C:\xampp\htdocs\).

5. Create uploads/ Directory
   
   Inside the project folder, create a directory called uploads/.
   
   This folder will store the uploaded resume files.
   
   Make sure that the folder has proper write permissions.

6. Run the Application

   Open your browser and navigate to http://localhost/resume-upload/index.html.
   
   Fill out the form with your name and resume, and click the Upload button.
   
   After uploading, you will see a success message and a link to view all candidates.
   
   Click the View All Candidates link to see a list of all uploaded resumes. You can click the resume name to download the file.

## Example URLs

Form page: http://localhost/candidate-resume-upload/index.html

Candidate list: http://localhost/candidate-resume-upload/list.php

**Troubleshooting**

Permission Errors: Ensure that the uploads/ folder has write permissions.

Database Connection Errors: Double-check the MySQL server details in the PHP scripts.

File Size Limit: If you encounter an issue with uploading large files, make sure to increase the upload_max_filesize and post_max_size in the php.ini file.


