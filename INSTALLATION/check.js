document.addEventListener("DOMContentLoaded", function() {
    document.forms["installation"]["continue"].addEventListener("onclick", function(evento) {
        validateContent();
        evento.preventDefault();
    })
});

errors = document.getElementById("errors");

function validateContent() {
    let comp = true;

    comp = validateLocation();
    comp = validateDatabase();
    comp = validateUsername();
    comp = validatePassword();

}

function validateDatabase() {

}

function validateUsername() {

}

function validatePassword() {

}