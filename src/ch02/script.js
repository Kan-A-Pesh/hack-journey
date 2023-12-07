document.querySelector("button").addEventListener("click", () => {
    const user = document.querySelector("#username").value;
    const pass = document.querySelector("#password").value;

    if (user === "admin" && pass === "PasLeCodeDansLeJS!!!!!") {
        alert("Vous êtes connecté, vous pouvez utiliser le mot de passe pour valider le challenge");
    } else {
        alert("Mauvais identifiant ou mot de passe");
    }
});
