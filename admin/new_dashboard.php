<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <title>dashboard</title>
    <style>
    .sector {
        background-image: url(images/4.jpeg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }
    </style>
</head>

<body class="h-screen w-full flex flex-col bg-blue-100 justify-between ">
    <div class="w-full h-[90%] flex">
        <div class="w-[20%] h-screen rounded-tr-[50px]  shadow-2xl p-10 bg-white ">
            <div class="w-full h-10 flex justify-start items-center gap-3 text-center text-xl font-extrabold">
                <div class="w-[40px] h-[20px] ml-2 rounded-full bg-gray-800 text-center"></div>
                <h1 class="text-blue-600 ">matokeoApp</h1>
            </div>
            <div class="w-full h-auto flex flex-col gap-4 mt-10  ">
                <div
                    class=" text-md font-normal text-gray-700 px-3 flex gap-3  items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-home text-blue-500 flex justify-center items-center"></i>
                    <h1>Home</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex gap-3 items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-apps text-blue-500 flex justify-center items-center"></i>
                    <h1>Dashboard</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex  gap-3 items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-users-alt text-blue-500 flex justify-center items-center"></i>
                    <h1>Students</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex gap-3 items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-edit text-blue-500 flex justify-center items-center"></i>
                    <h1>Results</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex gap-3 items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-comment-alt text-blue-500 flex justify-center items-center"></i>
                    <h1>Community</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex gap-3 items-center  w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-user-gear text-blue-500 flex justify-center items-center"></i>
                    <h1>Settings</h1>
                </div>
                <div
                    class="text-md font-normal text-gray-700 px-3 flex gap-3   items-center w-full h-[40px] bg-white   hover:bg-blue-100 hover:border-r-3 hover:border-blue-600">
                    <i class="fi fi-sr-user-logout  text-blue-500 flex justify-center items-center"></i>
                    <h1>Logout</h1>
                </div>

            </div>
        </div>
        <div class="w-[90%] h-screen relative pt-20 flex flex-col gap-8 ">

            <div
                class=" relative bg-blend-multiply bg-gradient-to-br from-blue-500 to-blue-900 text-white  w-[80%]  h-[30%] mx-auto rounded-2xl shadow-2xl p-14 items-center  flex justify-between ">
                <div class="absolute inset-0 sector rounded-2xl opacity-10 h-[100%] w-full bg-cover"></div>
                <div class="flex flex-col gap-0.5">
                    <h1 class="relative text-3xl font-bold  bg-gradient-to-r ;">Welcome Again</h1>
                    <p class=" relative text-md font-normal "> Musa Malya Mtaita</p>
                </div>

            </div>
            <div class="w-[80%]  flex gap-6 mx-auto mt-4 z-10">
                <div
                    class="w-[50%] h-auto flex justify-between items-center mx-auto bg-white rounded-lg shadow-2xl p-10 ">
                    <h1 class="text-[1.2rem] text-gray-600 font-medium">Wanafunzi Waliopo</h1>
                    <h1 class="text-5xl font-bold text-yellow-400">40</h1>
                </div>
                <div
                    class="w-[50%] h-auto flex justify-between items-center mx-auto bg-white rounded-lg shadow-2xl p-10 ">
                    <h1 class="text-[1.2rem] text-gray-600 font-medium">Matokeo Yaliyoingizwa</h1>
                    <h1 class="text-5xl font-bold text-yellow-400">10</h1>
                </div>
            </div>
        </div>
    </div>

    <div
        class="w-full items-end h-[50px] flex justify-between pb-3 px-14    bg-gradient-to-bl from-blue-500 to-blue-700">
        <div class="flex gap-4 text-white  ">
            <i class="fi fi-brands-facebook "></i>
            <i class="fi fi-brands-youtube"></i>
            <i class="fi fi-brands-linkedin"></i>
            <i class="fi fi-brands-instagram"></i>
        </div>
        <div class="text-white">
            <h1>Copyright &copy; 2025</h1>
        </div>
    </div>
</body>

</html>