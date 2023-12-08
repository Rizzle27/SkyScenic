var loadFile = function (event) {
    var output = document.getElementById("img_path_output");
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src);
    };
};

function showPass() {
    var password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

if (document.getElementById("profileNavContainer")) {
    var profileNavigation = document.getElementById("profileNavContainer");
    var showProfileNavBtn = document.getElementById("optionButton");

    showProfileNavBtn.addEventListener("click", () => {
        if (profileNavigation.classList.contains("slide-out-down")) {
            profileNavigation.classList.remove("slide-out-down");
            profileNavigation.classList.add("slide-in-down");
            profileNavigation.style.display = "flex";
        } else {
            profileNavigation.classList.remove("slide-in-down");
            profileNavigation.classList.add("slide-out-down");
            setTimeout(() => {
                profileNavigation.style.display = "none";
            }, 400);
        }
    });
}

