<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Exo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
    .raleway-font {
        font-family: "Raleway", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
    </style>
</head>

<body class="w-full h-auto flex bg-blue-100 flex-col">
    <section class="w-full h-screen flex gap-4 flex-col bg-blue-100 raleway-font ">
        <div class="w-full h-[10%] flex bg-white justify-between items-center p-5 ">
            <div class="w-[15%] h-auto flex justify-start items-center gap-3 text-center text-xl font-extrabold">
                <div class="w-[40px] h-[20px] ml-2 rounded-full bg-gray-800 text-center"></div>
                <a href="/">

                    <h1 class="text-blue-500 font-extrabold ">matokeoApp</h1>
                </a>
            </div>
            <div class="w-auto h-auto flex justify-end items-center">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold p-4 rounded-lg  w-auto h-[2.5rem] flex justify-center  items-center ">
                    <a href="/admin/login.php" class="pointer w-auto h-auto ">
                        Sign
                        In as
                        Admin
                    </a>
                </button>
            </div>
        </div>
        <h1 class="text-4xl text-center text-gray-700  font-black py-20 px-10 ">Clear Results, for a better EDUCATION
        </h1>

        <div class="relative w-full h-[800px]  pb-10 flex  flex-wrap  justify-center items-center gap-6 ">
            <a href="homeLinks/Courses.php">
                <div
                    class="group relative max-w-[15rem] p-3 h-[350px] flex flex-col bg-white rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:scale-105">

                    <!-- Image container -->
                    <div class="relative w-full h-[50%] mb-3  rounded-lg overflow-hidden">
                        <img src="admin/images/7.jpeg" alt="Image of a person"
                            class="rounded-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120">
                    </div>

                    <!-- Blue circle inside white circle -->
                    <div
                        class="absolute w-[3rem] top-[140px] h-[3rem] rounded-full bg-white left-8 flex justify-center items-center">
                        <div class="relative rounded-full w-[2.5rem] h-[2.5rem] bg-blue-500 grid place-content-center ">
                            <i class="fi fi-rr-users-alt text-white text-center"></i>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] p-5">
                        <h1 class="text-xl font-bold text-gray-800">Our Courses</h1>
                        <p class="text-sm font-medium text-gray-500">
                            Build your knowledge through expertly crafted lessons and engaging materials.
                        </p>
                    </div>
                </div>
            </a>
            <a href="homeLinks/bestStudents.php">

                <div
                    class="group relative max-w-[15rem] p-3 h-[350px] flex flex-col bg-white rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:scale-105">

                    <!-- Image container -->
                    <div class="relative w-full h-[50%] mb-3  rounded-lg overflow-hidden">
                        <img src="admin/images/8.jpeg" alt="Image of a person"
                            class="rounded-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120">
                    </div>

                    <!-- Blue circle inside white circle -->
                    <div
                        class="absolute w-[3rem] top-[140px] h-[3rem] rounded-full bg-white left-8 flex justify-center items-center">
                        <div
                            class="relative rounded-full w-[2.5rem] h-[2.5rem] bg-blue-500 flex justify-center items-center">
                            <i class="fi fi-rr-badget-check-alt text-center text-white"></i>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] p-5">
                        <h1 class="text-xl font-bold text-gray-800">Best Students </h1>
                        <p class="text-sm font-medium text-gray-500">
                            Honoring learners who inspire others through hard work and outstanding results.
                        </p>
                    </div>
                </div>
            </a>
            <a href="homeLinks/projects.php">

                <div
                    class="group relative max-w-[15rem] p-3 h-[350px] flex flex-col bg-white rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:scale-105">

                    <!-- Image container -->
                    <div class="relative w-full h-[50%] mb-3  rounded-lg overflow-hidden">
                        <img src="admin/images/11.jpeg" alt="Image of a person"
                            class="rounded-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120">
                    </div>

                    <!-- Blue circle inside white circle -->
                    <div
                        class="absolute w-[3rem] top-[140px] h-[3rem] rounded-full bg-white left-8 flex justify-center items-center">
                        <div class="relative rounded-full w-[2.5rem] h-[2.5rem] bg-blue-500 grid place-content-center">
                            <i class="fi fi-rr-computer text-center text-white"></i>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] p-5">
                        <h1 class="text-xl font-bold text-gray-800">Students Projects</h1>
                        <p class="text-sm font-medium text-gray-500">
                            Showcasing creative ideas and solutions developed by our talented students.
                        </p>
                    </div>
                </div>
            </a>
            <a href="admin/matokeo/matokeoList.php">
                <div
                    class="group relative max-w-[15rem] p-3 h-[350px] flex flex-col bg-white rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:scale-105">

                    <!-- Image container -->
                    <div class="relative w-full h-[50%] mb-3  rounded-lg overflow-hidden">
                        <img src="admin/images/10.jpeg" alt="Image of a person"
                            class="rounded-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120">
                    </div>

                    <!-- Blue circle inside white circle -->
                    <div
                        class="absolute w-[3rem] top-[140px] h-[3rem] rounded-full bg-white left-8 flex justify-center items-center">
                        <div class="relative rounded-full w-[2.5rem] h-[2.5rem] bg-blue-500 grid place-content-center">
                            <i class="fi fi-rr-books text-white text-center"></i>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] p-5">
                        <h1 class="text-xl font-bold text-gray-800">Exam Results</h1>
                        <p class="text-sm font-medium text-gray-500">
                            View exam results and track yours/ your child's academic progress.
                        </p>
                    </div>
                </div>
            </a>
            <a href="homeLinks/Events.php">

                <div
                    class="group relative max-w-[15rem] p-3 h-[350px] flex flex-col bg-white rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:scale-105">

                    <!-- Image container -->
                    <div class="relative w-full h-[50%] mb-3  rounded-lg overflow-hidden">
                        <img src="admin/images/9.jpeg" alt="Image of a person"
                            class="rounded-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120">
                    </div>

                    <!-- Blue circle inside white circle -->
                    <div
                        class="absolute w-[3rem] top-[140px] h-[3rem] rounded-full bg-white left-8 flex justify-center items-center">
                        <div class="relative rounded-full w-[2.5rem] h-[2.5rem] bg-blue-500 grid place-content-center">
                            <i class="fi fi-rr-calendar-lines text-center text-white"></i>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] p-5">
                        <h1 class="text-xl font-bold text-gray-800">School Events</h1>
                        <p class="text-sm font-medium text-gray-500">
                            Stay informed about all the activities, programs, and celebrations at school.
                        </p>
                    </div>
                </div>
            </a>



        </div>
    </section>

    <footer class="bg-white text-gray-800 ">

    </footer>

</body>

</html>