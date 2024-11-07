function validateForm() {
    var age = document.getElementById("age").value;
    if (age < 18) {
        alert("Usia harus 18 tahun atau lebih.");
        return false;
    }
    return true;
}
