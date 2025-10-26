// Language switcher functionality
export function initLanguageSwitcher() {
    const langSwitcher = document.getElementById('langSwitcher');
    if (!langSwitcher) return;

    langSwitcher.addEventListener('click', () => {
        const currentLang = document.body.classList.contains('lang-en') ? 'en' : 'fr';
        const newLang = currentLang === 'fr' ? 'en' : 'fr';
        
        document.body.classList.toggle('lang-en');
        langSwitcher.textContent = currentLang.toUpperCase();
        
        // Send AJAX request to update session
        fetch('/api/language', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ lang: newLang })
        });
    });
}