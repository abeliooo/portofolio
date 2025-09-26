document.addEventListener('DOMContentLoaded', () => {
    console.log("Oh Hi! Nice to meet you here :D");
    const projectCards = document.querySelectorAll('.project-card');
    const modal = document.getElementById('projectModal');
    
    const fadeInSections = document.querySelectorAll('.fade-in-section');
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");
    const scrollLinks = document.querySelectorAll(".scroll-spy-link");

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    const observerOptions = {
        root: null, 
        rootMargin: '0px',
        threshold: 0.4
    };

    fadeInSections.forEach(section => {
        fadeInObserver.observe(section);
    });

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute("id");
            }
        });

        scrollLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${current}`) {
                link.classList.add("active");
            }
        });
    });

    const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                const targetId = entry.target.getAttribute('id');
                const activeLink = document.querySelector(`.nav-link[href="#${targetId}"]`);

                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        sectionObserver.observe(section);
    });
});