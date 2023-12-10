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
        if (profileNavigation.classList.contains("slide-out-left")) {
            profileNavigation.classList.remove("slide-out-left");
            profileNavigation.classList.add("slide-in-left");
            profileNavigation.style.display = "flex";
        } else {
            profileNavigation.classList.remove("slide-in-left");
            profileNavigation.classList.add("slide-out-left");
            setTimeout(() => {
                profileNavigation.style.display = "none";
            }, 400);
        }
    });
}

var adminUploadShow = function() {
    if (document.getElementById("adminUploadOptions")) {
        var adminUploadOptions = document.getElementById("adminUploadOptions");
        if (adminUploadOptions.classList.contains('slide-out-down')) {
            adminUploadOptions.classList.replace('slide-out-down', 'slide-in-down')
            adminUploadOptions.classList.replace('d-none', 'd-flex')
        }
    }
}

var adminUploadHide = function() {
    if (document.getElementById("adminUploadOptions")) {
        var adminUploadOptions = document.getElementById("adminUploadOptions");
        if (adminUploadOptions.classList.contains('slide-in-down')) {
            adminUploadOptions.classList.replace('slide-in-down', 'slide-out-down')
        }
        setTimeout(() => {
            adminUploadOptions.classList.replace('d-flex', 'd-none')
        }, 500);
    }
}
