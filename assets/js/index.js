const dropdown = document.querySelectorAll("#sidebar .side-dropdown");


dropdown.forEach(item => {
    const box_drop_a = item.parentElement.querySelector("a:first-child");
    box_drop_a.addEventListener("click", (e)=>{
        e.preventDefault();
        item.classList.toggle("show");
    })
});