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

1. Make sure you have a PHP-enabled web server installed (e.g., XAMPP, WAMP, or MAMP).

2. Download or clone the repository to your local machine.

3. Place the `guess.php` file in your web server's root directory.

4. Access the game by opening your web browser and navigating to `http://localhost/guess.php` (adjust the URL as needed based on your server configuration).

## Game Logic

- The game uses PHP sessions to store the random number and the number of attempts.

- When you submit a guess, the PHP script will check if the guess is correct or not and provide appropriate feedback.

- If you win or run out of attempts, the game will display a message and allow you to start a new game by refreshing the page.


Enjoy playing the game! If you have any suggestions or improvements, feel free to contribute or reach out to the developer.
