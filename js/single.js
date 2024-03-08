document.querySelector("#figure-img").addEventListener("click", (e)=> {
    document.querySelector("#figure-viewer-zoom").setAttribute("src",e.target.getAttribute("src"));
    document.querySelector(".figure-viewer").classList.toggle("figure-viewer-active");      
  });
  document.querySelector(".figure-viewer").addEventListener("click", ()=> {
    document.querySelector(".figure-viewer").classList.toggle("figure-viewer-active"); 
  });