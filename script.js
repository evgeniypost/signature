function addTel() {
    document.getElementById('tel').innerHTML =
        document.getElementById('tel').innerHTML +
        "<input type='tel' name='tel[]' placeholder='Телефон' style='margin-top: 10px'><br/>";
}

function addEmail() {
    document.getElementById('email').innerHTML =
        document.getElementById('email').innerHTML +
        "<input type='email' name='email[]' placeholder='Email' style='margin-top: 10px'><br/>";
}