
$('#inputEmail').change(function (e) {
    e.preventDefault();
    var pass1 = $('#inputName').val();
    var pass2 = $('#inputEmail').val();
    if (pass1 != pass2) {
        alert("Passwords do not match!")
    }
});
$('#inputName').change(function(){
    let a = $('#inputName').val();
    if (a > 8) {
        alert('Password length should not be less than 8 characters!');
    }
})
