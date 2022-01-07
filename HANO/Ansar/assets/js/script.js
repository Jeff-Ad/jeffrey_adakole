let active = document.querySelectorAll('button');
active.forEach(active => {
    active.addEventListener('click', fumction () {
        active.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
    });
});