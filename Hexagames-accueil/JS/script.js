function montreConcept() {
   let conceptElt = document.querySelector(".concept");
    if (conceptElt.style.display === "none" || !conceptElt.style.display) {
        conceptElt.style.display = "block";
    }else{
        conceptElt.style.display = "none";
    };
};