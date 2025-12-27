// Dropdown menu active state management
document.addEventListener('DOMContentLoaded', function() {
    // Dropdown open/close logic
    const navItems = document.querySelectorAll('.nav-item.has-dropdown');

    navItems.forEach(item => {
        const navLink = item.querySelector('.nav-link');
        const dropdownMenu = item.querySelector('.dropdown-menu');

        // Toggle dropdown on nav link click
        navLink.addEventListener('click', function(e) {
            e.preventDefault();
            // Close all other dropdowns
            navItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('dropdown-open');
                }
            });
            // Toggle this dropdown
            item.classList.toggle('dropdown-open');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        let clickedInsideDropdown = false;
        navItems.forEach(item => {
            if (item.contains(e.target)) {
                clickedInsideDropdown = true;
            }
        });
        if (!clickedInsideDropdown) {
            navItems.forEach(item => {
                item.classList.remove('dropdown-open');
            });
        }
    });

    // Existing active link logic
    const dropdownMenus = document.querySelectorAll('.dropdown-menu');
    dropdownMenus.forEach(menu => {
        const links = menu.querySelectorAll('.dropdown-link');
        if (links.length > 0) {
            links[0].classList.add('active');
        }
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
});
