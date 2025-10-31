window.initReactionsEvents = function(){
    document.querySelectorAll('.reactions-button').forEach(button => {
        const reactionMenu = button.querySelector('.reactions-menu');

        button.addEventListener('click', e => {
            e.stopPropagation();
            reactionMenu.classList.toggle('hidden');
        });

        button.addEventListener('mouseleave', () => {
            reactionMenu.classList.add('hidden');
        });
    });
};
document.addEventListener('DOMContentLoaded', window.initReactionsEvents);