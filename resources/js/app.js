import "./bootstrap";
import "flowbite";

window.onload = function() {
    let lastTh = 5;
    const ths = document.querySelectorAll("#sortable th");

    if (ths.length > 0) {
        ths.forEach((th, i) => {
            if (i > 1) {
                th.onclick = function() {
                    sortTable(i);
                };
            }
        });

        setThDecoration(lastTh, ths);
    }

    function setThDecoration(index, ths) {
        ths[lastTh].style.textDecoration = "none";
        ths[index].style.textDecoration = "underline";
        lastTh = index;
    }

    function sortTable(n) {
        const table = document.getElementById("sortable");
        const ths = document.querySelectorAll("#sortable th");

        setThDecoration(n, ths);

        let rows = Array.from(table.rows).slice(1);

        rows.sort((a, b) => {
            let x = a.cells[n].textContent;
            let y = b.cells[n].textContent;

            return Number(y) - Number(x);
        });

        rows.forEach((row, index) => {
            row.cells[0].innerHTML = "#" + (index + 1);
        });

        rows.forEach(row => table.appendChild(row));
    }
};
