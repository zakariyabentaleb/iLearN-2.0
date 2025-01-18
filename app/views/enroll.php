<?php
session_start();
require_once("C:\Users\youco\Desktop\iLearN-platform\app\controller\impl\StudentControllerimpl.php");
$enroll = new StudentModuleimpl() ;
$studentId=$_SESSION["user"]["id"];
$courseId=$_GET["courseId"];
$s=$enroll->enroll( $studentId,$courseId);
var_dump($s);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy Platform </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.svg">
    <script src="./assets/scripts/main.js" defer></script>
    <style>
        .text-gradient {
            background: linear-gradient(to right, #f2b212, #fadf10);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>

    <div class="min-h-screen flex flex-col">

        <div class="hidden md:block w-full bg-blue-600 text-white">
            <div class="container mx-auto px-4 py-2">
                <div class="flex justify-between items-center text-sm">
                    <div class="flex items-center space-x-6">
                        <span class="flex items-center">
                            <i class="ri-phone-line mr-2"></i> +212 772508881
                        </span>
                        <span class="flex items-center">
                            <i class="ri-mail-line mr-2"></i> contact@youdemy.com
                        </span>
                    </div>
                    <span class="flex items-center">
                        <i class="ri-map-pin-line mr-2"></i> Massira N641 Safi, Morocco
                    </span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="border-b bg-white">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <a href="../index.php">
                        <img src="../../assets/images/LOGO.svg" alt="Youdemy Platform">
                    </a>
                    <nav class="hidden md:flex items-center space-x-6">
                        <?php   ?>
                            <a href="" class="text-gray-900 hover:text-blue-500 transition-colors">
                               
                            </a>
                        <?php   ?>
                    </nav>
                    <div class="flex items-center space-x-4">
                    <?php
                    if (!isset($_SESSION["user"])) {
                        ?>
                            <button
                                class="p-2 px-4 bg-blue-400 text-white rounded-full hover:bg-white hover:text-blue-400 hover:border hover:border-blue-400 transition-colors">
                                <a href="./login.php">Login</a>
                            </button>
                            <button
                                class="p-2 px-4 border border-blue-400 text-blue-400 rounded-full hover:bg-blue-400 hover:text-white transition-colors">
                                <a href="./register.php">Register</a>
                            </button>

                        <?php } else { ?>
                            <button
                                class="p-2 px-4 bg-red-700 text-white rounded-full hover:bg-white hover:text-red-700 hover:border hover:border-red-700 transition-colors">
                                <a href="./logout.php">Logout</a>
                            </button>
                        <?php   ?>
                        <button id="mobile-menu-btn" class="p-2 hover:text-blue-500 transition-colors md:hidden">
                            <i class="ri-menu-4-fill text-2xl"></i>
                        </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>

        <!--Enrollment Status -->
        <section class="hero flex flex-col items-center text-center justify-center mt-24">
            <div class="mb-6">
                <?php  ?>
                    <div>
                        <img src="../../assets/images/ll.png" alt="Success" height="400" width="400" class="mx-auto">
                    </div>
                    <p class="text-xl font-semibold text-green-600 mb-4"></p>
                    <div class="flex justify-center space-x-4">
                        <a href="./mycourses.php"
                            class="px-6 py-3 bg-blue-400 text-white font-semibold rounded-full hover:bg-blue-500 transition">
                            Go to My Courses
                        </a>
                        <a href="./courses.php"
                            class="px-6 py-3 bg-blue-400 text-white font-semibold rounded-full hover:bg-blue-500 transition">
                            Enroll in New Course
                        </a>
                    </div>
                <?php    ?>
                    <div>
                        <img src="../../assets/images/warning.png" height="400" width="400" class="mx-auto">
                        <p class="text-red-700 text-xl font-bold mb-4"></p>
                    </div>
                    <div class="flex justify-center w-full ">
                        <a href="./courses.php"
                            class="px-6 mt-2 py-3 bg-blue-400 text-white font-semibold rounded-full hover:bg-blue-500 transition">
                            Go Back To Courses
                        </a>
                    </div>
                <?php   ?>
            </div>
        </section>




    </div>

    </div>


    <!-- Footer Section -->

    <footer class="bg-blue-10 py-16 ">
        <div class="px-10">
            <div class="mb-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                    <div
                        class="bg-blue-50 p-6 rounded-lg text-center hover:bg-transparent hover:border hover:border-blue-400 hover:scale-95 transition-transform duration-300">
                        <i class="ri-team-line text-2xl text-blue-500 mb-2"></i>
                        <p class="font-medium">Community</p>
                    </div>
                    <div
                        class="bg-blue-50 p-6 rounded-lg text-center hover:bg-transparent hover:border hover:border-blue-400 hover:scale-95 transition-transform duration-300">
                        <i class="ri-link text-2xl text-blue-500 mb-2"></i>
                        <p class="font-medium">Referrals</p>
                    </div>
                    <div
                        class="bg-blue-50 p-6 rounded-lg text-center hover:bg-transparent hover:border hover:border-blue-400 hover:scale-95 transition-transform duration-300">
                        <i class="ri-book-2-line text-2xl text-blue-500 mb-2"></i>
                        <p class="font-medium">Assignments</p>
                    </div>
                    <div
                        class="bg-blue-50 p-6 rounded-lg text-center  hover:bg-transparent hover:border hover:border-blue-400 hover:scale-95 transition-transform duration-300">
                        <i class="ri-medal-line text-2xl text-blue-500 mb-2"></i>
                        <p class="font-medium">Certificates</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="../../assets/images/LOGO.svg" height="200" width="200">
                    </div>
                    <p class="text-gray-600 mb-6">Eros in cursus turpis massa tincidunt Faucibus scelerisque eleifend
                        vulputate sapien nec sagittis.</p>
                    <div class="flex gap-4">
                        <div
                            class="h-9 w-9 bg-blue-400 flex justify-center items-center rounded-lg hover:border hover:border-blue-400 hover:bg-transparent hover:text-blue-400">
                            <a href="#" class="p-2 transition-colors">
                                <i class="ri-facebook-fill text-xl "></i>
                            </a>
                        </div>

                        <div
                            class="h-9 w-9 bg-blue-400 flex justify-center items-center rounded-lg hover:border hover:border-blue-400 hover:bg-transparent hover:text-blue-400">
                            <a href="#" class="p-2 transition-colors">
                                <i class="ri-instagram-line text-xl "></i>
                            </a>
                        </div>

                        <div
                            class="h-9 w-9 bg-blue-400 flex justify-center items-center rounded-lg hover:border hover:border-blue-400 hover:bg-transparent hover:text-blue-400">
                            <a href="#" class="p-2 transition-colors">
                                <i class="ri-youtube-fill text-xl "></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Pages</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Courses</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">My Account</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Pricing</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Features</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Sign In / Register</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Our Newsletter</h3>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Enter Your Email"
                            class="flex-1 px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-blue-500">
                        <button
                            class="px-6 py-2 bg-blue-400 text-white rounded-lg hover:bg-blue-500 transition-colors">Submit</button>
                    </div>
                    <p class="text-sm text-gray-600 mt-4">
                        By clicking "Subscribe", you agree to our
                        <a href="#" class="text-gray-900 hover:underline">Privacy Policy</a>.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-12 mt-12 border-t border-gray-200">
                <p class="text-gray-600">&copy; 2024. All Rights Reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Terms & Conditions</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Privacy policy</a>
                </div>
            </div>
        </div>
    </footer>

</body>



</html>