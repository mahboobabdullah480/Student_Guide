document.addEventListener("DOMContentLoaded", () => {

  const navBtn = document.getElementById("nav-toggle");
  const navLinks = document.getElementById("nav-links");

  if(navBtn && navLinks){
    navBtn.addEventListener("click",()=>{
      navLinks.classList.toggle("active");
    });
  }

  const themeBtn =
    document.getElementById("toggle-mode");

  const body = document.body;

  const savedTheme =
    localStorage.getItem("theme");

  if(savedTheme==="dark"){
      body.classList.add("dark-mode");
      if(themeBtn)
        themeBtn.innerHTML="☀️";
  }

  if(themeBtn){
      themeBtn.addEventListener("click",()=>{

        body.classList.toggle("dark-mode");

        const isDark =
          body.classList.contains("dark-mode");

        localStorage.setItem(
          "theme",
          isDark ? "dark" : "light"
        );

        themeBtn.innerHTML =
          isDark ? "☀️" : "🌙";
      });
  }

});