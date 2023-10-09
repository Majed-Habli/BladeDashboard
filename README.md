# BladeDashboard

- [Project philosophy](#project-philosophy)
- [User Types](#user-types)
- [User Stories](#features-of-the-app)
- [Tech Stack](#tech-stack)
  - [Stacks](#stacks) 
  - [Libraries](#libraries) 
- [Demo](#Demo)
- [How to Run](#how-to-run)
  - [Installation](#installation)

<br><br>

<!-- project philosophy -->
<a name="project-philosophy"></a>

<a name="description"></a>

> BladeDashboard is a site that allows the users to add customizable widgets to their dashboards.
> Its main focus to to allow the user to visually gather all the data that they might want to see on a single page
> and display them to the user with the added bonus of allowing customization.
> user can change
> Chart colors
> Chart title
> Chart axis labels
> Chart type
>

<a name="user-types"></a>
### User Types

11. General user

<a name="features-of-the-app"></a>
### User Stories
- As a user, I want to view create a widget.
- As a user, I want to change the  widget type.
- As a user, I want to change the widget color.
- As a user, I want to change the widget title.
- As a user, I want to change the widget axis lavel.

<br><br>

<!-- Tech stack -->
<a name="tech-stack"></a>

<a name="stacks"></a>
###  BladeDashboard is built using the following technologies:

- This project uses the [Laravel](https://www.electronjs.org/). Laravel is a free and open-source PHP web framework that is designed with expressive, elegant syntax, enabling the development of web applications and APIs
- This project uses the [MySQL](https://www.mysql.com/). MySQL is a widely used open-source relational database management system (RDBMS). It is used as the database for storing and managing data.

###  BladeDashboard also uses the following libraries:

<a name="libraries"></a>
#### Website
- chart.js
- moment.js

<br><br>

<!-- Demo -->
<a name="Demo"></a>

### Website interactions
| Register screen  | Profile screen 
| ---| ---|
| ![Landing](./readme/demo/website/web-gif/web-login.gif) | ![fsdaf](./readme/demo/website/web-gif/web-upload.gif) 
| Profile interactions screen |  Profile-Edit screen |
| ![fsdaf](./readme/demo/website/web-gif/web-carousel.gif) | ![fsdaf](./readme/demo/website/web-gif/web-profile-update.gif) |

<br><br>

<!-- How to run -->
<a name="how-to-run"></a>

> To set up BladeDashboard locally, follow these steps:
>

### Prerequisites
<a name="prerequisites"></a>

Mentioned bellow is the list of dependancies you'll need to use to run the project on your device.

* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation
<a name="installation"></a>

1. Ensure you have Node.js installed. We recommend using the latest LTS version available.
  
2. Clone the repo
   ```sh
   git clone https://github.com/Majed-Habli/BladeDashboard.git
   ```
3. Navigate to
   ```sh
   cd BladeDashboard/BLINKmetrics-Dashboard
   ```
4. Run composer install
   ```sh
   composer install
   ```
5. Initialize the database
   ```sh
   php artisan migrate
   ```
6. Initialize the seed
   ```sh
   php artisan db:seed
   ```
6. Serve to start the server
   ```sh
   php artisan serve
   ```

Now, you should be able to run BladeDashboard locally and explore its features.
