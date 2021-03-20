import {
    toggleBurgerNav,
    resizeTextarea,
    chatFunctionalities,
} from "./components";

const loggedOutPaths = ["/", "/register", "/login"];
const chatPaths = ["/chats"];

loggedOutPaths.forEach((path) => {
    if (window.location.pathname === path) {
        toggleBurgerNav();
    }
});

chatPaths.forEach((path) => {
    if (window.location.pathname === path) {
        // resizeTextarea();
        chatFunctionalities();
    }
});
