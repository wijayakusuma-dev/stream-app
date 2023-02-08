<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="assets/script/tailwind-config.js"></script>

    <style type="text/tailwindcss">
        @layer components{
            .side-link{
                @apply flex items-center font-normal text-stream-gray text-base w-full p-4 rounded-2xl gap-[10px] transition-all;
            }
            .side-link.active{
                @apply bg-softpur font-semibold text-white;
            }
        }
    </style>
</head>

<body class="bg-stream-dark font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto max-w-screen hidden lg:block">

        <!-- START: Content -->
        <div class="ml-[410px] pr-[50px] overflow-hidden">
            <div class="py-[70px] flex flex-col gap-[50px]">
                <!-- Navbar -->
                <div class="flex justify-between items-center">
                    <div class="flex flex-col gap-[10px]">
                        <div class="font-bold text-[32px] text-white">
                            Watch Today
                        </div>
                        <p class="mb-0 text-stream-gray text-base">Our selected movies for your mood</p>
                    </div>
                    <div class="flex items-center gap-[26px]">
                        <span class="text-white text-base">Welcome, Miranda Nur</span>
                        <!-- user avatar -->
                        <div class="collapsible-dropdown flex flex-col gap-2 relative">
                            <a href="#!"
                                class="outline outline-2 outline-stream-gray p-[6px] rounded-full w-[60px] dropdown-button"
                                data-target="#dropdown-stream">
                                <img src="assets/images/photo.png" class="rounded-full object-cover w-full"
                                    alt="stream" />
                            </a>
                            <div class="bg-white rounded-2xl text-stream-dark font-medium flex flex-col gap-1 absolute z-[999] right-0 top-[80px] min-w-[180px] hidden overflow-hidden"
                                id="dropdown-stream">
                                <a href="dashboard.html" class="transition-all hover:bg-sky-100 p-4">Watch</a>
                                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Settings</a>
                                <a href="sign_in.html" class="transition-all hover:bg-sky-100 p-4">Sign Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Navbar -->

                <!-- Featured -->
                <div>
                    <div class="font-semibold text-[22px] text-white mb-[18px]">Featured</div>
                    <div class="grid grid-cols-2 gap-5 xl:gap-12">
                        <div class="col-span-1 relative overflow-hidden group">
                            <img src="assets/images/featured-1.png" class="object-cover rounded-[30px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Avatar New Era</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="dashboard-movie_details.html" class="inset-0 absolute z-50"></a>
                        </div>
                        <div class="col-span-1 relative overflow-hidden group">
                            <img src="assets/images/featured-2.png" class="object-cover rounded-[30px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Death on the Nile</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="dashboard-movie_details.html" class="inset-0 absolute z-50"></a>
                        </div>
                    </div>
                </div>
                <!-- /Featured -->

                <!-- Continue Watching -->
                <div>
                    <div class="font-semibold text-[22px] text-white mb-[18px]">Continue Watching</div>
                    <div class="watched-movies hidden">
                        <!-- Movies 1 -->
                        <div class="relative group overflow-hidden mr-[30px]">
                            <img src="assets/images/film-5.png"
                                class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Uncharted</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="watching.html" class="inset-0 absolute z-50"></a>
                        </div>
                        <!-- Movies 2 -->
                        <div class="relative group overflow-hidden mr-[30px]">
                            <img src="assets/images/film-4.png"
                                class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Strange</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="watching.html" class="inset-0 absolute z-50"></a>
                        </div>
                        <!-- Movies 3 -->
                        <div class="relative group overflow-hidden mr-[30px]">
                            <img src="assets/images/film-3.png"
                                class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Fornite</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="watching.html" class="inset-0 absolute z-50"></a>
                        </div>
                        <!-- Movies 4 -->
                        <div class="relative group overflow-hidden mr-[30px]">
                            <img src="assets/images/film-2.png"
                                class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">King's Queen</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="watching.html" class="inset-0 absolute z-50"></a>
                        </div>
                        <!-- Movies 5 -->
                        <div class="relative group overflow-hidden mr-[30px]">
                            <img src="assets/images/film-1.png"
                                class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">Morbius</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="assets/images/ic_play.svg" class="" width="80" alt="">
                            </div>
                            <a href="watching.html" class="inset-0 absolute z-50"></a>
                        </div>
                    </div>
                </div>
                <!-- /Continue Watching -->

            </div>
        </div>
        <!-- END: Content -->
    </div>

    <div class="mx-auto px-4 w-full md:w-7/12 h-screen block lg:hidden flex">
        <div class="text-white text-2xl text-center leading-snug font-medium my-auto">
            Sorry, this page only supported on 1024px screen or above
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/script/script.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.watched-movies').removeClass('hidden').flickity({
                // options
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
</body>

</html>
