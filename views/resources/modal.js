let modal = document.querySelector(".modal-overlay");
let btn = document.querySelector("#new_todo")


btn.addEventListener('click', () => {
    modal.style.display = "flex";
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

