const menuEl = document.getElementById("menu");
const sidebarEl = document.getElementById("sidebar");

menuEl.addEventListener("click", () => {
  sidebarEl.classList.toggle("active")
});


const btnEl = document.getElementById("p-d");

btnEl.addEventListener("click", myFunction)


function myFunction() {
  let dropdownContent = document.getElementById("dropdown-content");
  if (dropdownContent.style.display === "none") {
    dropdownContent.style.display = "block";
  } else {
    dropdownContent.style.display = "none";
  }
}

/*
document.addEventListener('click', function handleClickOutsideBox(event) {
  const sidebar = document.getElementsByClassName('sidebar');

  if (!sidebar.contains(event.target)) {
    sidebarEl.style.display = 'none';
  }
});
*/

/*
let dropdownEl = document.getElementsById("p-d");


for (let i = 0; i < dropdownEl.length; i++) {
  dropdownEl[i].addEventListener("click", ()=>{
    dropdownEl.classList.toggle("active");
    let dropdownContent = document.querySelector(".dropdown-content");
    if (dropdownCocntent.style.display === "block") {
      dropdownContent.style.display === "none"
    } else {
      dropdownContent.style.display === "block"
    }
  })
} 
*/