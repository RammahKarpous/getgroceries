import { toggleBurgerNav } from "./components";

const paths = ["/", "/register", "/login"];

paths.forEach((path) => {
    if (window.location.pathname === path) {
        toggleBurgerNav();
    }
});
