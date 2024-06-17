const burger = document.querySelector(".buttonNav");
const sidebar = document.querySelector(".container-sidebar");
if (burger) {
    burger.addEventListener("click", () => {
        burger.classList.toggle("active");
        sidebar.classList.toggle("active");
    });
}
