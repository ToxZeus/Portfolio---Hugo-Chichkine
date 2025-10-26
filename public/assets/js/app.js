// Main application script
import { initLanguageSwitcher } from './languageSwitcher.js';
import { initNavigationHighlight } from './navigation.js';
import { initBackToTop } from './backToTop.js';

// Initialize all features when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initLanguageSwitcher();
    initNavigationHighlight();
    initBackToTop();
});