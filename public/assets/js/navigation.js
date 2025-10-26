// Navigation highlight functionality
export function initNavigationHighlight() {
    const sections = document.querySelectorAll("main section");
    const navLinks = document.querySelectorAll("nav a.nav-link");
    
    function activateNavLink() {
        const scrollPosition = window.scrollY + 120;
        
        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    link.removeAttribute("aria-current");
                });
                
                navLinks[index].classList.add("active");
                navLinks[index].setAttribute("aria-current", "page");
            }
        });
    }
    
    // Initial check
    activateNavLink();
    
    // Add scroll event listener
    window.addEventListener("scroll", () => {
        requestAnimationFrame(activateNavLink);
    });
    
    // Smooth scroll for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}