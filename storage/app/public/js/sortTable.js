let lastTh = 5;

window.onload = function() {
    let ths = document.querySelectorAll("#sortable th");

    if (ths.length > 0) ths[lastTh].style.textDecoration = "underline";
}

function sortTable(n) {
    let i, shouldSwitch, switchCount = 0;
    let table = document.getElementById("sortable");
    let switching = true;

    let ths = document.querySelectorAll("#sortable th");
    ths[lastTh].style.textDecoration = "none";
    ths[n].style.textDecoration = "underline";
    lastTh = n;

    while (switching) {
        switching = false;
        let rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            let x = rows[i].getElementsByTagName("td")[n];
            let y = rows[i + 1].getElementsByTagName("td")[n];
            rows[i].getElementsByTagName("td")[0].innerHTML = "#" + i;
            rows[i + 1].getElementsByTagName("td")[0].innerHTML = "#" + (i + 1);

            if (Number(x.textContent) < Number(y.textContent)) {
                shouldSwitch = true;
                break;
            }
        }

        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchCount++;
        } else if (switchCount == 0) {
            switching = false;
        }
    }
}
