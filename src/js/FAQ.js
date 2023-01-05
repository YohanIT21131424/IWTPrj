var coll = document.getElementsByClassName("dropdown");
var j;

for (j = 0; j < coll.length; j++) {
  coll[j].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownAnswer = this.nextElementSibling;
    if (dropdownAnswer.style.display === "block") {
        dropdownAnswer.style.display = "none";
    } else {
        dropdownAnswer.style.display = "block";
    }
  });
}