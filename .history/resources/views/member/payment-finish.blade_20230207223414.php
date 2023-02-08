<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('stream/assets/script/tailwind-config.js') }}"></script>
</head>

<body class="bg-stream-dark">

    <div class="font-poppins flex relative pt-20 px-3 h-screen">

        <!-- Ornament -->
        <span class="fixed -z-10 top-0 left-0">
            <img src="assets/images/success_ellipse_green.svg" alt="stream" />
        </span>
        <span class="fixed -z-10 bottom-0 right-0">
            <img src="assets/images/success_ellipse_red.svg" alt="stream" />
        </span>
        <!-- ./ -->

        <div class="flex flex-col items-center m-auto pb-20">
            <img src="assets/images/success_page_illustration.png" class="w-[610px] max-w-full" alt="stream" />
            <div class="text-white text-2xl font-semibold text-center mt-[70px]">
                Payment Finish
            </div>
            <p class="text-stream-gray text-base text-center leading-[30px] mb-10 mt-3">
                Time to enjoy yourself to watch great <br class="hidden md:block"> movies from around the world
            </p>
            <div>
                <a href="dashboard.html" class="py-3 px-[54px] text-center rounded-full bg-indigo-600">
                    <span class="text-white font-semibold text-base">
                        Watch Now
                    </span>
                </a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/script/script.js"></script>
</body>

</html>
