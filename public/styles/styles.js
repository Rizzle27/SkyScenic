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

var adminUploadShow = function () {
    if (document.getElementById("adminUploadOptions")) {
        var adminUploadOptions = document.getElementById("adminUploadOptions");
        if (adminUploadOptions.classList.contains("slide-out-down")) {
            adminUploadOptions.classList.replace(
                "slide-out-down",
                "slide-in-down"
            );
            adminUploadOptions.classList.replace("d-none", "d-flex");
        }
    }
};

var adminUploadHide = function () {
    if (document.getElementById("adminUploadOptions")) {
        var adminUploadOptions = document.getElementById("adminUploadOptions");
        if (adminUploadOptions.classList.contains("slide-in-down")) {
            adminUploadOptions.classList.replace(
                "slide-in-down",
                "slide-out-down"
            );
        }
        setTimeout(() => {
            adminUploadOptions.classList.replace("d-flex", "d-none");
        }, 500);
    }
};

if (document.getElementById("slide1")) {
    slide1 = document.getElementById("slide1");
    slide2 = document.getElementById("slide2");
    slideHeader1 = document.getElementById("slideHeader1");
    slideHeader2 = document.getElementById("slideHeader2");
}

function changeSlideState() {
    if (slide2.classList.contains("active")) {
        setTimeout(() => {
            slideHeader1.classList.add("active-slide-header");
            slideHeader2.classList.remove("active-slide-header");
        }, 500);
    } else {
        setTimeout(() => {
            slideHeader1.classList.remove("active-slide-header");
            slideHeader2.classList.add("active-slide-header");
        }, 500);
    }
}
