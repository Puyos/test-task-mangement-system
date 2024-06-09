document.getElementById('goBackButton').addEventListener('click', function() {
    window.location.href = 'Signup.html'; // Assuming index.html is the previous page
  });

  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var rememberMe = document.getElementById('rememberMe').checked;

    // Simple client-side validation
    if (email === "" || password === "") {
      alert("Please enter both email and password.");
      return;
    }

    // Dummy authentication process
    if (email === "user@example.com" && password === "password") {
      alert("Login successful!");
      // Redirect to a different page or perform other actions
    } else {
      alert("Invalid email or password.");
    }
  });