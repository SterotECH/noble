const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const lightTheme = document.querySelector(".light");
const darkTheme = document.querySelector(".dark");

// Show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

// close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});
window.onscroll = () => {
    sideMenu.style.display = 'none';
};
//change Theme
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    if (localStorage.getItem("theme") == "light") {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

if (localStorage.getItem("theme") == "light") {
    themeToggler.classList.remove("dark-theme-variables");
    document.body.classList.remove("dark-theme-variables");
    lightTheme.classList.add('active');
    darkTheme.classList.remove('active');
}
else if (localStorage.getItem("theme") == "dark") {
    themeToggler.classList.add("dark-theme-variables");
    document.body.classList.add("dark-theme-variables");
    lightTheme.classList.remove('active');
    darkTheme.classList.add('active');
}
else {
    localStorage.setItem("theme", "light");
}
