# Repository Overview

This repository contains customer front end for the business written in HTML, CSS and JavaScript. The backend is in PHP. This is an extention of the "frontend interface" repository created by @Gastritus. Everything in the HomeScreen folder was developed by them with only a few minor tweaks made by me.

# Try it for yourself

## Here is how you can run the interface on your computer in Visual Studio:

### Step 1 - Install Node.js

To check if you have Node.js is installed on your Windows system, open up the console and run the `command node --version`. If you don't have Node.js installed on your system already, head over to (https://nodejs.org/en), download and install it.

Also ensure that you have installed **npm**.

### Step 2 - Install extentions

You will require the following extentions inside Visual Studio:

- HTML CSS Support
- Live Server
- JavaScript (ES6) code snippets
- Code Runner

You can install these by clicking the "Extentions" tab on the sidebar and seraching them up

### Step 3 - Download the project

Clone the repository to your computer and open inside Visual Studio.

### Step 4 - Run it

Make sure you have the latest version of Docker installed. Type in the following command in the command line:

`docker compose up --build`

Once the command is finished running, open up your browser of choice and type in `localhost:8080/frontend_home.php`

You can access the database by searching for `localhost:8000` in your browser. The username is _root_ and the password is _strongpass_.

To stop the program, open the console and press _CTRL + C_ and then type `docker compose down`
