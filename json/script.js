function ajax(){

    let username = document.getElementById('username').value;
    //alert(username);

    let data = {
        "username" : username,
        "password" : '123',
        "email" : 'abc@aiub.edu'
    };
    let user = JSON.stringify(data);

    let xhttp = new XMLHttpRequest();
    //xhttp.open('get', 'upload.php?username='+username, true);
    xhttp.open('post', 'upload.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('user='+user);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            let user = JSON.parse(this.responseText)
            document.getElementById('head').innerHTML = user.password;
        }
    }

}