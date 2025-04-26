// Dashboard.js
document.addEventListener('DOMContentLoaded', () => {
    const username = sessionStorage.getItem('username');
    document.getElementById('welcomeMessage').innerText = `Welcome, ${username}!`;
  });
  