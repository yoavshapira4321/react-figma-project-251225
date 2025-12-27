// Dropdown menu active state management
document.addEventListener('DOMContentLoaded', function() {
    // Get all dropdown menus
    const dropdownMenus = document.querySelectorAll('.dropdown-menu');
    
    dropdownMenus.forEach(menu => {
        const links = menu.querySelectorAll('.dropdown-link');
        
        // Set first link as active by default
        if (links.length > 0) {
            links[0].classList.add('active');
        }
        
        // Add click event to each link
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                // Remove active class from all links in this menu
                links.forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
            });
        });
    });
});
