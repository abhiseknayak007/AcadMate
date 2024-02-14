// Initialize vote count
let voteCount =  0;

// Function to display the vote count
function displayVoteCount() {
  document.getElementById('voteCountDisplay').textContent = voteCount;
}

// Function to handle upvote action
function upvote() {
  voteCount++;
  displayVoteCount();
  disableButtonsTemporarily();
}

// Function to handle downvote action
function downvote() {
  voteCount--;
  displayVoteCount();
  disableButtonsTemporarily();
}

// Function to temporarily disable the buttons
function disableButtonsTemporarily() {
  let upvoteButton = document.getElementById('upvoteButton');
  let downvoteButton = document.getElementById('downvoteButton');
  upvoteButton.disabled = true;
  downvoteButton.disabled = true;
   
//   setTimeout(() => {
//     upvoteButton.disabled = false;
//     downvoteButton.disabled = false;
//   },  1000); // Re-enable after  1 second
}

// Attach event listeners to the buttons
document.getElementById('upvoteButton').addEventListener('click', upvote);
document.getElementById('downvoteButton').addEventListener('click', downvote);

// Display initial vote count
displayVoteCount();