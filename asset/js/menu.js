var parent = document.getElementsByClassName("parent");
var i = 1

for (i = 0; i < parent.length; i++) {
    parent[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var childGroup = this.nextElementSibling;
        console.log(childGroup);
        if (childGroup.style.display === "block" && childGroup.className === "childGroup") {
            childGroup.style.display = "none";
        } else {
            childGroup.style.display = "block";
        }
    });
}