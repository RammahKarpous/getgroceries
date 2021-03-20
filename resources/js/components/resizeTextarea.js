const resizeTextarea = () => {
    const textarea = document.querySelector("textarea");

    textarea.addEventListener("keypress", () => {
        textarea.style.height = textarea.scrollHeight;
    });
};

export default resizeTextarea;
