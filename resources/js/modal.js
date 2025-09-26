document.addEventListener('DOMContentLoaded', function () {
    const projectCards = document.querySelectorAll('.project-card');
    const modal = document.getElementById('project-modal');
    const modalContent = document.getElementById('project-modal-content');

    if (!modal || !modalContent) {
        console.error('Modal elements not found!');
        return;
    }

    let hideTimeout;
    const HIDE_DELAY = 500;

    function showModal(card) {
        clearTimeout(hideTimeout);

        document.getElementById('modal-title').textContent = card.dataset.title;
        document.getElementById('modal-description').textContent = card.dataset.description;
        document.getElementById('modal-image').src = card.dataset.image;

        const techContainer = document.getElementById('modal-technologies');
        const techData = card.querySelector('.project-technologies-data');
        if (techContainer && techData) {
            techContainer.innerHTML = techData.innerHTML;
        }

        updateLink('modal-project-url', card.dataset.projectUrl);
        updateLink('modal-source-url', card.dataset.sourceUrl);
        updateLink('modal-notion-url', card.dataset.notionUrl);

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-95');
    }

    function startHideTimer() {
        clearTimeout(hideTimeout);
        hideTimeout = setTimeout(() => {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.add('scale-95');
        }, HIDE_DELAY);
    }

    function cancelHideTimer() {
        clearTimeout(hideTimeout);
    }

    projectCards.forEach(card => {
        card.addEventListener('mouseenter', () => showModal(card));
        card.addEventListener('mouseleave', startHideTimer);
    });

    modalContent.addEventListener('mouseenter', cancelHideTimer);
    modalContent.addEventListener('mouseleave', startHideTimer);

    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            startHideTimer();
        }
    });

    function updateLink(elementId, url) {
        const link = document.getElementById(elementId);
        if (link) {
            if (url && url !== 'null' && url.trim() !== '') {
                link.href = url;
                link.classList.remove('hidden');
            } else {
                link.classList.add('hidden');
            }
        }
    }
});