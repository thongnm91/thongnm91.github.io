// Returns a random integer from 1 to 100:
const randomNumber = Math.floor(Math.random() * 100) + 1;
console.log(randomNumber);
let attempts = 0;

function checkGuess() {
  const userGuess = parseInt(document.getElementById('guess').value);
  attempts++;

//Comparison operators equal value and equal type
  if (userGuess === randomNumber) {
    displayMessage(`Congratulations! You guessed the number in ${attempts} attempts.`);
	document.getElementById('message').style.color = "green";
  } else if (userGuess < randomNumber) {
    displayMessage('Too low! Try again.');
  } else {
    displayMessage('Too high! Try again.');
  }
}

function displayMessage(message) {
  document.getElementById('message').textContent = message;
}
