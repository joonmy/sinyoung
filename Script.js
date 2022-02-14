function whiteVersion(){
    document.getElementById('body').className = 'white';
    var a = document.getElementsByTagName('table');
    var b = document.getElementsByTagName('tr');
    var c = document.getElementsByTagName('th');
    var d = document.getElementsByTagName('td');

    for(var i = 0; i<a.length; i++){
        a[i].style.border = "1px solid black"
    }
    for(var i = 0; i<b.length; i++){
        b[i].style.border = "1px solid black"
    }
    for(var i = 0; i<c.length; i++){
        c[i].style.border = "1px solid black"
    }
    for(var i = 0; i<d.length; i++){
        d[i].style.border = "1px solid black"
    }

    
}
function blackVersion(){
    document.getElementById('body').className = 'black';
    var a = document.getElementsByTagName('table');
    var b = document.getElementsByTagName('tr');
    var c = document.getElementsByTagName('th');
    var d = document.getElementsByTagName('td');

    for(var i = 0; i<a.length; i++){
        a[i].style.border = "1px solid white"
    }
    for(var i = 0; i<b.length; i++){
        b[i].style.border = "1px solid white"
    }
    for(var i = 0; i<c.length; i++){
        c[i].style.border = "1px solid white"
    }
    for(var i = 0; i<d.length; i++){
        d[i].style.border = "1px solid white"
    }
}