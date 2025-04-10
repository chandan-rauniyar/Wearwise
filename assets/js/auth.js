 //  Don't make any change in this code wrt by Chandan Kumar Gupta 
function openPopup(id) {
    document.getElementById(id).style.display = 'block';
}

function closePopup(id) {
    document.getElementById(id).style.display = 'none';
}

function switchPopup(closeId, openId) {
closePopup(closeId);
openPopup(openId);
}

function togglePassword(event) {
    let passwordInput = event.target.previousElementSibling;  
    let eyeIcon = event.target;  

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.textContent = "visibility";  
    } else {
        passwordInput.type = "password";
        eyeIcon.textContent = "visibility_off";  
    }
}
//  End Here Login and sign Frontend Logic

// You car write here 

document.addEventListener("DOMContentLoaded", function () {
    const usernameInput = document.querySelector("#username");
    const usernameMsg = document.querySelector("#username-msg");

    if (usernameInput) {
        usernameInput.addEventListener("input", function () {
            let username = usernameInput.value.trim();

            if (username.length > 2) {
                fetch("../auth/check_username.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "username=" + encodeURIComponent(username),
                })
                .then(response => response.text())
                .then(data => {
                    if (data === "taken") {
                        usernameMsg.textContent = "Username already exists!";
                        usernameMsg.style.color = "red";
                    } else if (data === "available") {
                        usernameMsg.textContent = "Username available!";
                        usernameMsg.style.color = "green";
                    } else {
                        usernameMsg.textContent = "";
                    }
                });
            } else {
                usernameMsg.textContent = "";
            }
        });
    }
});
