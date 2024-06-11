# Student Grades Management System

This project is a web application to manage and display student grades for various courses. It includes user authentication, grade display, and an AJAX-based interface for fetching and displaying grades.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [File Descriptions](#file-descriptions)

## Features

- **User Authentication**: Allows students to log in using their student number and password.
- **Grade Display**: Displays grades for different courses and evaluations.
- **AJAX Interface**: Provides an asynchronous interface for fetching and displaying grades without page reloads.
- **Highlighting Grades**: Grades are color-coded based on their values for better visualization.

## Prerequisites

- PHP (version 7.0 or higher)
- A web server (e.g., Apache, Nginx)
- Basic knowledge of PHP and HTML

## Installation

1. Clone the repository to your local machine:
    ```sh
    git clone https://github.com/cameliacharef/grading_system.git
    ```

2. Ensure your web server is configured to serve PHP files from the project directory.

3. Place the project files in your web server's root directory.

4. Make sure the `mots_de_passe.txt` and `notes.xml` files are in the correct location and accessible by the PHP scripts.

## Usage

1. Open your web browser and navigate to the project URL (e.g., `http://localhost/grading_system`).

2. Enter your student number and password to log in.

3. After logging in, you can view your grades for different courses.

4. Use the form to select a course and view detailed grades using AJAX.

## File Descriptions

- **debut_html.php**: Contains the function to generate the initial HTML structure.
- **sax_notes.php**: Defines the SAX parser class for reading the XML file containing grades.
- **authentifie.php**: Handles user authentication by checking student number and password.
- **affiche_notes.php**: Contains the function to display the student's grades.
- **reponse_ajax.php**: Handles AJAX requests for fetching and displaying course grades.
- **completerForm.js**: JavaScript for completing the form submission via AJAX.
- **construireQS.js**: JavaScript for constructing query strings for AJAX requests.
- **ajax.js**: JavaScript for sending AJAX requests.
- **notes.xml**: XML file containing student grades.
- **mots_de_passe.txt**: Contains student numbers and corresponding passwords for authentication.


