/* sidebar dropdown */
const dropdown = document.querySelectorAll("#sidebar .side-dropdown");

dropdown.forEach(item => {
    const box_drop_a = item.parentElement.querySelector("a:first-child");
    box_drop_a.addEventListener("click", (e)=>{
        e.preventDefault();
        item.classList.toggle("show");
    })
});


/* profile dropdown */

const imgProfile = document.querySelector(".profile-img");
const dropdownProfile = document.querySelector(".profile-link");

imgProfile.addEventListener("click", ()=>{
    dropdownProfile.classList.toggle("show");
})


window.addEventListener("click", (e)=>{
    if(e.target !== imgProfile){
        if(e.target !== dropdownProfile){
            if(dropdownProfile.classList.contains("show")){
                dropdownProfile.classList.remove("show");
            }
        }
    }
})