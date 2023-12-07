document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const accountDropdown = document.querySelector('.account-dropdown');
  
    accountDropdown.addEventListener('click', function(event) {
      event.preventDefault();
      toggleSidebar();
    });
  
    function toggleSidebar() {
      sidebar.classList.toggle('sidebar-open');
    }
  });
  