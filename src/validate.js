const founds = JSON.parse(localStorage.getItem("founds")) || {};

const setSuccess = (index) => {
    document.getElementById(index).classList.add("success");
    document.getElementById(index + "-title").classList.add("success");
    document.getElementById(index + "-title").innerHTML = "Réponse correcte";
    document.getElementById(index + "-title").style.color = "green";
    document.getElementById(index + "-btn").classList.add("secondary");
    document.getElementById(index + "-btn").innerHTML = "Re-vérifier";
};

const isValid = async (index, value) => {
    try {
        const req = await fetch("/validate.php?index=" + index + "&value=" + value);
        const data = await req.text();
        return data === "success";
    } catch (e) {
        return false;
    }
};

document.querySelectorAll(".validate").forEach(async (input) => {
    const index = input.id;

    if (founds[index]) {
        if (await isValid(index, founds[index])) {
            return setSuccess(index);
        } else {
            // Remove found from localStorage
            delete founds[index];
            localStorage.setItem("founds", JSON.stringify(founds));
        }
    }

    const validate = async () => {
        if (await isValid(index, input.value)) {
            // Add found to localStorage
            founds[index] = input.value;
            localStorage.setItem("founds", JSON.stringify(founds));

            return setSuccess(index);
        } else {
            input.value = "";
            input.classList.add("danger");

            const error = document.createElement("p");
            error.classList.add("danger");
            error.innerHTML = "Réponse incorrecte";
            input.parentNode.insertBefore(error, input.nextSibling);

            setTimeout(() => {
                input.classList.remove("danger");
                error.remove();
            }, 2000);
        }
    };

    // On click
    document.getElementById(index + "-btn").addEventListener("click", () => {
        validate();
    });

    // On enter
    input.addEventListener("keyup", (event) => {
        if (event.keyCode === 13) {
            validate();
        }
    });
});

document.querySelector("#hard_reset").addEventListener("click", () => {
    localStorage.removeItem("founds");
    location.reload();
});
