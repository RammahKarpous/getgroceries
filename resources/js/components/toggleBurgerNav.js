const toggleBurgerNav = () => {
    const burger = document.querySelector(".nav-bar__toggle");
    const navList = document.querySelector(".nav-bar__list");

    console.log("Mounted");

    burger.addEventListener("click", () => {
        burger.classList.toggle("opened");
        navList.classList.toggle("show");
    });
};

export default toggleBurgerNav;
