<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . "/wearwise/config/config.php";
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/wearwise";


$isLoggedIn = isset($_SESSION["user_id"]);


if ($isLoggedIn) {
    $userId = $_SESSION["user_id"]; // Get user ID from session
    $userName = getUserName($userId); // Fetch user name from DB
    $initial = getInitials($userName);
} else {
    $userName = null;
    $initial = null;
}

function getInitials($name)
{
    return $name ? strtoupper($name[0]) : ''; // Get first letter in uppercase
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearWise</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/styles.css">
    <script src="<?php echo $base_url; ?>/assets/js/auth.js" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        /* Slider Container */
        .slider-container {
            width: 100%;
            max-width: 100vw;
            height: 60vh;
            overflow: hidden;
        }

        /* Zoom Effect */
        .swiper-slide img {
            transition: transform 10s ease-in-out;
        }

        /* Default Zoom Effect (Only for Auto Mode) */
        .swiper-slide-active.auto-zoom img {
            transform: scale(1.10);
        }

        /* Text Overlay */
        .text-overlay {
            position: absolute;
            bottom: -100px;
            left: 10%;
            right: 10%;
            text-align: left;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 8px;
            color: white;
            transition: bottom 1s ease-in-out, opacity 1s ease-in-out;
            opacity: 0;
        }

        /* Active Text Animation */
        .swiper-slide-active .text-overlay {
            bottom: 10%;
            opacity: 1;
        }

        /* Full-width background for Ethical Brands Section */
        .ethical-brands {

            padding: 3rem 0;
            width: 100%;
        }

        .container-15 {
            max-width: 70%;
            margin: 0 auto;
        }

        @media (max-width: 1024px) {
            .container-15 {
                max-width: 85%;
            }
        }

        @media (max-width: 768px) {
            .container-15 {
                max-width: 95%;
            }
        }

        /* text style best text style user every where in ourwebsite text that need style  */
        .textstyle {
            font-family: 'EB Garamond', serif;
            font-weight: 600;
            line-height: 1em;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const usernameInput = document.querySelector("#username");
            const usernameMsg = document.querySelector("#username-msg");

            if (usernameInput) {
                usernameInput.addEventListener("input", function() {
                    let username = usernameInput.value.trim();

                    if (username.length > 2) {
                        fetch("<?php echo $base_url; ?>/auth/check_username.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/x-www-form-urlencoded"
                                },
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
    </script>

</head>

<body class="bg-[#F5F3F1]">



    <!-- Navbar -->
    <?php if ($isLoggedIn): ?>

        <nav class="flex items-center justify-between px-5 pt-3 pb-2 bg-[rgb(34,34,34)]">

        <?php else: ?>

            <nav class="flex items-center justify-between px-5 py-4 bg-[rgb(34,34,34)]">

            <?php endif; ?>

            <!-- Logo -->
            <div class="flex items-center ml-6">
                <svg width="35" height="29" xmlns="http://www.w3.org/2000/svg" data-svg="logo" fill="white">
                    <path d="M26.76 21.82c-2.68 2.65-6 4.12-9.37 4.12-3.72 0-7.45-1.73-10.26-4.73A15.6 15.6 0 0 1 2.91 9.4c.39-3.99 2.94-6.57 6.5-6.57a6.19 6.19 0 0 1 6 3.97c.27.6.51 1.25.76 1.9.65 1.66 1.31 3.38 2.37 4.9a8.63 8.63 0 0 0 10.59 2.86c.52-.23 1.06-.5 1.59-.8-.85 2.3-2.2 4.41-3.96 6.16M25.45 2.83c3.4.08 6.08 2.9 6.3 6.5 0 .34-.03.77-.16 1.2-.55 1.75-2.06 2.64-3.63 3.35a5.75 5.75 0 0 1-7.07-1.9c-.77-1.1-1.52-2.29-1.89-3.79-.03-.2-.01-.39.01-.55a6.44 6.44 0 0 1 6.44-4.8M25.52 0a9.37 9.37 0 0 0-8.17 4.35A9.01 9.01 0 0 0 9.4 0C4.35 0 .59 3.67.06 9.15a18.43 18.43 0 0 0 4.97 13.98c3.35 3.58 7.85 5.64 12.36 5.64 4.13 0 8.18-1.76 11.4-4.95a19.86 19.86 0 0 0 5.84-14.05C34.62 4.41 30.61.12 25.52 0" fill-rule="evenodd"></path>
                </svg>
            </div>

            <!-- Logo Text -->
            <div class="absolute left-[40%]">
                <div class="logo">
                    <span class="wear">Wear</span>
                    <span class="wise">Wise</span>
                </div>
            </div>

            <!-- Navbar Links -->
            <div class="flex space-x-8 mr-6 items-center">
                <a href="<?php echo $base_url; ?>/index.php" class="hover:text-gray-400 text-gray-300">Home</a>
                <a href="<?php echo $base_url; ?>/pages/personal_styling.php" class="hover:text-gray-400 text-gray-300">Personal Styling</a>

                <div class="relative group ">
                    <a href="<?php echo $base_url; ?>/pages/shop_sustainable.php" class="hover:text-gray-400 text-gray-300 flex items-center">
                        Shop Sustainable
                    </a>
                    <!-- Dropdown Menu -->
                    <div class="absolute py-2 z-10 left-0 mt-2 w-40 bg-[#F5F3F1] border rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="<?php echo $base_url; ?>/pages/shop_sustainable.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">All</a>
                        <a href="<?php echo $base_url; ?>/pages/asia.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Asia</a>
                        <a href="<?php echo $base_url; ?>/pages/india.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">India</a>
                        <a href="<?php echo $base_url; ?>/pages/europe.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Europe</a>
                        <a href="<?php echo $base_url; ?>/pages/north_america.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">North America</a>
                    </div>
                </div>

                <a href="<?php echo $base_url; ?>/pages/about.php" class="hover:text-gray-400 text-gray-300">About</a>

                <?php if ($isLoggedIn): ?>
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button onclick="toggleDropdown()" class="focus:outline-none">
                            <?php if ($userName): ?>
                                <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-black bg-[#3498db] text-gray-200 font-bold text-lg">
                                    <?= htmlspecialchars($initial); ?>
                                </div>
                            <?php else: ?>
                                <div class="w-10 h-10 rounded-full border-2 border-black  ">

                                    <img src="<?php echo $base_url; ?>\assets\images\profile_img.jpg" alt="Default Profile Picture" class="w-full h-full rounded-full   ">
                                </div>
                            <?php endif; ?>
                        </button>

                        <div id="dropdownMenu" class="hidden z-10 absolute right-0  w-40 bg-[#F5F3F1] rounded-md shadow-lg py-2">
                            <a href="<?php echo $base_url; ?>/profile.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                            <a href="<?php echo $base_url; ?>/auth/logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
                        </div>
                    </div>

                    <script>
                        function toggleDropdown() {
                            document.getElementById('dropdownMenu').classList.toggle('hidden');
                        }
                        document.addEventListener('click', function(event) {
                            var dropdown = document.getElementById('dropdownMenu');
                            if (!event.target.closest('button')) {
                                dropdown.classList.add('hidden');
                            }
                        });
                    </script>

                <?php else: ?>
                    <a id="login-main" onclick="openPopup('login-popup')" class="hover:text-gray-400 text-gray-300 cursor-pointer">Login</a>
                <?php endif; ?>

            </div>
            </nav>



            <div id="login-popup" class="popup text-black-300">
                <div class="login-container">
                    <span class="close" onclick="closePopup('login-popup')">&times;</span>
                    <h2>Login</h2>

                    <form action="<?php echo $base_url; ?>/auth/login_process.php" method="POST">
                        <div class="input-group">
                            <input type="text" name="user_input" placeholder="Username or Email" required>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" required>
                            <span class="material-icons eye-icon" style="font-size: 18px;" onclick="togglePassword(event)">visibility_off</span>
                        </div>
                        <a href="views/password_reset.php" class="forgot-password">Forgot password?</a>
                        <button type="submit" class="login-btn">Login</button>
                    </form>

                    <p class="signup-link">Don't have an account? <a href="#" onclick="switchPopup('login-popup', 'signup-popup')">Signup</a></p>

                    <div class="or-divider"><span>Or</span></div>

                    <!-- Social Login Forms -->
                    <div class="social-login">

                        <form action="<?php echo $base_url; ?>/auth/google_login.php" method="POST">
                            <button type="submit" class="social-btn google-btn">
                                <img src="<?php echo $base_url; ?>/assets/images/google-icon.svg" alt="Google">Continue with Google
                            </button>
                        </form>
                    </div>
                </div>
            </div>



            <div id="signup-popup" class="popup">
                <div class="signup-container">
                    <span class="close" onclick="closePopup('signup-popup')">&times;</span>
                    <h2>Signup</h2>

                    <!-- Manual Signup Form -->
                    <form action="<?php echo $base_url; ?>/auth/register_process.php" method="POST">
                        <div class="input-group">
                            <input type="text" id="username" name="username" placeholder="username" required>
                            <span id="username-msg" class="pt-10 pl-10"></span>
                        </div>
                        <span id="username-msg"></span>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group">
                            <input type="password" name="password" placeholder="Create password" required>
                            <span class="material-icons eye-icon" style="font-size: 18px;" onclick="togglePassword(event)">visibility_off</span>
                        </div>

                        <button type="submit" class="signup-btn">Signup</button>
                    </form>

                    <p class="login-link">Already have an account? <a href="#" onclick="switchPopup('signup-popup', 'login-popup')">Login</a></p>

                    <div class="or-divider"><span>Or</span></div>

                    <!-- Social Signup Forms -->
                    <div class="social-login">

                        <form action="<?php echo $base_url; ?>/auth/google_login.php" method="POST">
                            <button type="submit" class="social-btn google-btn">
                                <img src="<?php echo $base_url; ?>/assets/images/google-icon.svg" alt="Google"> Continue with Google
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Signup End -->