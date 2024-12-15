menuBtn = document.getElementById("checkbox");
navbar = document.getElementById("navbar");

menuShown = false;

menuBtn.addEventListener("click", () => {
    if (menuBtn.checked){
        navbar.style.transform = "translateY(0)";
    }
    else{
        navbar.style.transform = "translateY(-4rem)";
    }

    menuShown = !menuShown;
});