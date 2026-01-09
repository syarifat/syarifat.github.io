document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, observerOptions);

    const hiddenElements = document.querySelectorAll(".fade-in");
    hiddenElements.forEach((el) => observer.observe(el));

    // --- LANGUAGE TOGGLE LOGIC (BARU) ---
    const langToggle = document.getElementById('langToggle');
    if(langToggle) {
        langToggle.addEventListener('change', function() {
            if(this.checked) {
                // Switch to English
                window.location.search = '?lang=en';
            } else {
                // Switch to Indonesia
                window.location.search = '?lang=id';
            }
        });
    }

    // --- FILTER PROJECT LOGIC (LAMA) ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filterValue = btn.getAttribute('data-filter');

            projectItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (filterValue === 'all' || filterValue === itemCategory) {
                    item.classList.remove('hide');
                    item.classList.add('fade-in'); 
                } else {
                    item.classList.add('hide');
                }
            });
        });
    });
});