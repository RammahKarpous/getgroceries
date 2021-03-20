const chatFunctionalities = () => {
    // const galleryBtn = document.querySelector(".showGallery");
    // const closeBtn = document.querySelector(".close-chat");
    const contactsPanel = document.querySelector(".contacts");
    const showContacts = document.querySelector(".chat-page__show-contacts");

    showContacts.addEventListener("click", (e) => {
        e.preventDefault();

        contactsPanel.classList.toggle("hidden");
        showContacts.classList.toggle("rotate");
    });

    // closeBtn.addEventListener("click", (e) => {
    //     e.preventDefault();
    //     chatRoom.classList.add("hidden");
    // });

    // galleryBtn.addEventListener("click", (e) => {
    //     e.preventDefault();
    //     console.log("show gallery");
    // });
};

export default chatFunctionalities;
