function ajax(){

    let username = document.getElementById('username').value;
    //alert(username);

    let xhttp = new XMLHttpRequest();
    //xhttp.open('get', 'upload.php?username='+username, true);
    xhttp.open('post', 'upload.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('username='+username);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('head').innerHTML = this.responseText;
        }
    }

}