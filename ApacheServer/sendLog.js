function submitLog() {
    var username = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    var email = document.getElementById('email').value;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState = 4 && this.status == 200) {
            document.getElementById('display').innerHTML = this.responseText;
        }
    };

    xhttp.open('POST', 'http://localhost/testServer/insert.php', true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username + "&password=" + pass + "&email=" + email);
}
