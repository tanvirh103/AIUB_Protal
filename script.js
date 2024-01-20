function search(str){
    if(str==""){
        document.getElementById('message').innerHTML="Please search any name";
        return;
    }
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','../Controller/search-student-controller.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText
    }
}

function searchfaculty(str){
    if(str==""){
        document.getElementById('message').innerHTML="Please search any name";
        return;
    }
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','../Controller/search-faculty-controller.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText
    }
}


