// Back to top button functionality
export function initBackToTop() {
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (!backToTopBtn) return;
    
    // Show/hide button based on scroll position
    const toggleBackToTopButton = () => {
        requestAnimationFrame(() => {
            backToTopBtn.style.display = window.scrollY > 300 ? "block" : "none";
        });
    };
    
    window.addEventListener("scroll", toggleBackToTopButton);
    
    // Scroll to top on click
    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
}