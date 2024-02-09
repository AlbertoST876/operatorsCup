import "./bootstrap";
import "flowbite";

window.onload = function() {
    const ths = document.querySelectorAll("#sortable th");
    let lastTh = 5;

    if (ths.length > 0) {
        ths.forEach((th, i) => {
            if (i > 1) {
                th.onclick = function() { sortTable(i); };
            }
        });

        setThDecoration(lastTh);
    }

    function setThDecoration(th) {
        ths[lastTh].style.textDecoration = "none";
        ths[th].style.textDecoration = "underline";
        lastTh = th;
    }

    function sortTable(n) {
        const table = document.getElementById("sortable");
        let rows = Array.from(table.rows).slice(1);

        setThDecoration(n);

        rows.sort((a, b) => {
            let x = a.cells[n].textContent;
            let y = b.cells[n].textContent;

            return Number(y) - Number(x);
        });

        rows.forEach((row, i) => {
            row.cells[0].innerHTML = "#" + (i + 1);
        });

        rows.forEach(row => table.appendChild(row));
    }
};
