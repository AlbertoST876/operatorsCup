function sortTable(n)
{
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("sortable");
    switching = true;
    dir = "asc";

    while (switching)
    {
        switching = false;
        rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++)
        {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("td")[n];
            y = rows[i + 1].getElementsByTagName("td")[n];
            rows[i].getElementsByTagName("td")[0].innerHTML = "#" + i;
            rows[i + 1].getElementsByTagName("td")[0].innerHTML = "#" + (i + 1);

            if (dir == "asc")
            {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase())
                {
                    shouldSwitch = true;
                    break;
                }
            }
            else if (dir == "desc")
            {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase())
                {
                    shouldSwitch = true;
                    break;
                }
            }
        }

        if (shouldSwitch)
        {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        }
        else
        {
            if (switchcount == 0 && dir == "asc")
            {
                dir = "desc";
                switching = true;
            }
        }
    }
}
