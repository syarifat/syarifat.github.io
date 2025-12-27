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
    // --- FILTER PROJECT LOGIC ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // 1. Hapus class 'active' dari semua tombol
            filterBtns.forEach(b => b.classList.remove('active'));
            // 2. Tambahkan class 'active' ke tombol yang diklik
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            // 3. Loop semua project card
            projectItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                if (filterValue === 'all' || filterValue === itemCategory) {
                    // Tampilkan item
                    item.classList.remove('hide');
                    item.classList.add('fade-in'); // Trigger animasi ulang (opsional)
                } else {
                    // Sembunyikan item
                    item.classList.add('hide');
                }
            });
        });
    });
});