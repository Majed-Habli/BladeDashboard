$("#close-button").click(function () {
    var x = document.getElementById("modal");
    x.style.display = "none";
});

$("#create-new").click(function () {
    var mapContainer = $("#chart-container:first").clone();
    $("#bd-container").append(mapContainer);
});

let newContainer = document.getElementById("right");
let root = document.querySelector("[drag-root]");
root.querySelectorAll("[drag-item]").forEach((el) => {
    el.addEventListener("dragstart", (e) => {
        console.log("start");
        e.target.setAttribute("dragging", true);

        root.addEventListener("dragover", function (e) {
            e.preventDefault();

            console.log("im on the other side in the rooty");
        });

        root.addEventListener("drop", function (e) {
            console.log("being dropped in the parent root");
            root.appendChild(e.target);
        });
    });

    el.addEventListener("drop", (e) => {
        console.log("drop");
        e.target.classList.remove("bg-yellow-100");

        let draggingEl = root.querySelector("[dragging]");

        e.target.before(draggingEl);
    });

    el.addEventListener("dragenter", (e) => {
        console.log("enter");
        e.target.classList.add("bg-yellow-100");
        e.preventDefault();
    });

    el.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    el.addEventListener("dragleave", (e) => {
        e.target.classList.remove("bg-yellow-100");

        console.log("leave");
    });

    el.addEventListener("dragend", (e) => {
        console.log("end");
        e.target.removeAttribute("dragging");
    });
});
