const dropdownButton = document.querySelector('.dropdown-button');
const dropdownMenu = document.querySelector('.dropdown-menu');
  
  dropdownButton.addEventListener('click', () => {
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
  });
  
  window.addEventListener('click', function(event) {
    if (!event.target.closest('.dropdown')) {
      dropdownMenu.style.display = 'none';
    }
  });