function validasiLogin() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (!email.includes("@")) {
        alert("Email durung sesuai ! harus terdapat simbol @");
        return false;
    }

    if (password === "") {
        alert("Password wajib diisi!");
        return false;
    }

    return true;
}