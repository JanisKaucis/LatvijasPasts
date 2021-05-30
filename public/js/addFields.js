var counterIzglitiba = 0;
function addIzglitiba() {
    counterIzglitiba++;
    if (counterIzglitiba > 8){
        alert('Maksimums 8 izglitibas');
        return;
    }
    var newFields = document.getElementById('izglitiba').cloneNode(true);
    newFields.id = '';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i=0;i<newField.length;i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counterIzglitiba;
    }
    var insertHere = document.getElementById('addIzglitiba');
    insertHere.parentNode.insertBefore(newFields,insertHere);
}
// window.onload = addIzglitiba;
var counterDarbs = 0;
function addDarbs() {
    counterDarbs++;
    if (counterDarbs > 8) {
        alert('Maksimums 8 darbavietas');
        return;
    }
    var newFields = document.getElementById('darbs').cloneNode(true);
    newFields.id = '';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i=0;i<newField.length;i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counterDarbs;
    }
    var insertHere = document.getElementById('addDarbs');
    insertHere.parentNode.insertBefore(newFields,insertHere);
}
var counterValoda = 0;
function addValoda() {
    counterValoda++;
    if (counterValoda > 8) {
        alert('Maksimums 8 valodas');
        return;
    }
    var newFields = document.getElementById('valoda').cloneNode(true);
    newFields.id = '';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i=0;i<newField.length;i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counterValoda;
    }
    var insertHere = document.getElementById('addValoda');
    insertHere.parentNode.insertBefore(newFields,insertHere);
}
