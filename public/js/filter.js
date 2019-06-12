function searchSupplement() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("supplementInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("selectSupplementTable");
    tr = table.getElementsByTagName("tr");


    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }

    }
}

function getSelected() {
    

    var checks = document.getElementsByClassName('checks');
    var str = "";

    for (i = 0; i < checks.length; i++) {
        if (checks[i].checked == true) {
            str+= checks[i].value + " ";
            var node = document.createElement("tr");
            node.setAttribute("class", "selectedS");
            node.setAttribute("name","test");
            node.setAttribute("value", checks[i].value);
            var textnode = document.createTextNode(checks[i].value);
            node.appendChild(textnode);
            document.getElementById("list").appendChild(node);
            

        }
        console.log(str);


    }
}

function deleteSelected(){
    var table = document.getElementById("selectedSupplementTable");
    for (var i = table.rows.length - 1; i > 0; i--) {
        table.deleteRow(i);
    }
}

function deleteRow(r){
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("selectedSupplementTable").deleteRow(i);
}

function calculate(){
    var calc = document.getElementsByClassName('selectedS');
    var str =[];
    for(i=0; i<calc.length; i++){
        
        str += calc[i].innerHTML;
    }
    console.log(str);

    

}