document.getElementById('signupButton').addEventListener('click', function() {
    window.location.href = 'login.html';
});

document.querySelector('.menu-bar').addEventListener('click', function() {
    const dropdown = document.querySelector('.dropdown-menu');
    dropdown.style.display = dropdown.style.display === 'flex' ? 'none' : 'flex';
});
