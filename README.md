# Guessing Number Game

This is a simple number guessing game implemented in PHP. The game randomly selects a number between 1 and 100, and the player has 10 attempts to guess the correct number.

## How to Play

1. Open `guess.php` in your web browser.
2. You will see a form where you can enter your guess.
3. Enter a number between 1 and 100 into the input field and click the "Guess" button.
4. You will receive feedback on your guess.
   - If your guess is correct, you win the game and can play again.
   - If your guess is incorrect, you will be told if the target number is higher or lower than your guess, and you'll see how many attempts you have left.
5. You have a total of 10 attempts to guess the correct number.
6. If you run out of attempts, the game will reveal the correct number, and you can start a new game.

### Getting Started

To run this game on your local server, follow these steps:

1. **Install a Local Web Server:**

   You can use a local web server stack like XAMPP, WAMP, MAMP, or a similar alternative depending on your operating system. These stacks provide a web server (Apache), PHP, and MySQL (though you don't need MySQL for this project).

2. **Create a Project Directory:**

   Create a directory on your computer where you'll place your PHP and CSS files. You can name this directory whatever you like.

3. **Place Your Files:**

   Place your `guess.php` PHP file and `theme.css` CSS file in the project directory.

4. **Start the Local Web Server:**

   Start your local web server stack (e.g., XAMPP) and make sure Apache and PHP are running.

5. **Access Your Website:**

Open your web browser and navigate to the following URL, replacing `"project-directory"` with the actual path to your project directory: http://localhost/project-directory/guess.php
   
For example, if your project directory is named "guessing-game," you would use:
http://localhost/guessing-game/guess.php

6. **Play the Game:**

You should now be able to access and play the guessing number game through your web browser. The PHP file will interact with the server to process guesses, and the CSS file will style the game's appearance.


## Game Logic

- The game uses PHP sessions to store the random number and the number of attempts.

- When you submit a guess, the PHP script will check if the guess is correct or not and provide appropriate feedback.

- If you win or run out of attempts, the game will display a message and allow you to start a new game by refreshing the page.

This project is open-source and available under the [MIT License](LICENSE).
Enjoy playing the game! If you have any suggestions or improvements, feel free to contribute or reach out to the developer.
