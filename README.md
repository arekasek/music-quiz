# Music Quiz

Music Quiz is a web application that allows users to test their music knowledge by guessing song titles or artists based on audio clips. The application provides various quizzes and an option to add new songs to the database.

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Description

Music Quiz is an interactive quiz game where players listen to snippets of songs and try to guess the title or artist as quickly as possible. It's a fun way to test your music knowledge and discover new songs and artists.

## Features

- Play random snippets of songs
- Guess the song title or artist
- Add new songs to the database
- Interactive and user-friendly interface

## Requirements

- Apache server (e.g., XAMPP)
- PHP (version 7.x or newer)
- MySQL
- Node.js (version 12.x or newer)
- npm (version 6.x or newer)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/music-quiz.git
    cd music-quiz
    ```

2. **Set up the Apache server:**

    - Download and install [XAMPP](https://www.apachefriends.org/index.html).
    - Start Apache and MySQL from the XAMPP control panel.

3. **Set up the database:**

    - Import the `song.sql` file into your MySQL database. You can do this via phpMyAdmin:
        1. Open phpMyAdmin (http://localhost/phpmyadmin).
        2. Create a new database named `song`.
        3. Select the `song` database and go to the Import tab.
        4. Choose the `song.sql` file and click Go.

4. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

## Usage

1. **Start the application:**

    - Place the project files in the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\music-quiz`).
    - Open your web browser and navigate to `http://localhost/music-quiz`.

2. **Navigate through the application:**

    - Use the buttons on the home page to start different quizzes or add new songs.
    - Follow the on-screen instructions to play the quiz or add new songs to the database.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes. Make sure to follow the coding guidelines and include relevant tests.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
