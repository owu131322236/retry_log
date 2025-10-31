document.addEventListener("DOMContentLoaded", () => {
    const postFormButtons = document.querySelectorAll(
        "#postFormSelector button"
    );
    const postFormSelector = document.querySelector("#postFormSelector");
    const postFormIndicator = document.querySelector("#postFormIndicator");
    const postFormTypeInput = document.querySelector("#post_type");
    const defaultButton = document.getElementById("success");
    function postFormModeIndicator(btn) {
        const offsetLeft = btn.offsetLeft;
        const offsetWidth = btn.offsetWidth;
        postFormIndicator.style.left = offsetLeft + "px";
        postFormIndicator.style.width = offsetWidth + "px";
    }
    window.addEventListener("load", () => {
        // postFormModeIndicator(defaultButton);
        postFormTypeInput.value = defaultButton.id;
        defaultButton.classList.add("text-gray-900", "font-bold");
        postFormButtons[1].classList.remove("text-gray-900");
        postFormButtons[1].classList.add("text-gray-500");
    });
    postFormButtons.forEach((button) => {
        button.addEventListener("click", () => {
            postFormModeIndicator(button);
            postFormTypeInput.value = button.id;
            postFormButtons.forEach((btn) => {
                btn.classList.remove("text-gray-900");
                btn.classList.add("text-gray-500");
            });

            button.classList.remove("text-gray-500");
            button.classList.add("text-gray-900", "font-bold");
        });
    });
});
