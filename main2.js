const loadingScreen = document.getElementById('loader');

function hideLoadingScreen() {
    loadingScreen.style.display = 'none';
}

// Set a timeout to display the loading screen for 2 seconds, then hide it and redirect to index.html
setTimeout(hideLoadingScreen, 1500); // 2 seconds in milliseconds





// const loaderWrapper = document.querySelector('.loader-wrap');

// // Function to hide the loading screen and redirect to index.html
// function removeLoaderAndRedirect() {
//   loaderWrapper.style.display = 'none'; // Hide the loading screen
//   window.location.href = "index.php"; // Redirect to index.html
// }

// // Set a timeout to remove the loading screen and redirect after 2 seconds
// setTimeout(removeLoaderAndRedirect, 2000);