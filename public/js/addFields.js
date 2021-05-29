var counterIzglitiba = 0;
function addIzglitiba() {
    counterIzglitiba++;
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

var counterInfo = 0;
function addInfo() {
    counterInfo++;
    var newFields = document.getElementById('info').cloneNode(true);
    newFields.id = '';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i=0;i<newField.length;i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counterInfo;
    }
    var insertHere = document.getElementById('addInfo');
    insertHere.parentNode.insertBefore(newFields,insertHere);
}
