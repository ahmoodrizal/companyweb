<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SofTech | Tech Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <section class="h-full w-full border-box transition-all duration-500 linear relative" style="
    background-image: linear-gradient(
     to bottom,
     rgba(39, 59, 86, 1),
     rgba(36, 49, 66, 1)
    );
   ">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .header-3-1 .card {
                background-color: #f5f5f5;
                transition: 0.4s;
                top: 0px;
                left: 0px;
                position: relative;
            }

            .header-3-1 .card:hover {
                top: -3px;
                left: -3px;
                position: relative;
                transition: 0.4s;
            }

            .header-3-1 .btn-sign,
            .header-3-1 .nav-text,
            .header-3-1 .caption-text {
                color: #e8f1ff;
                transition: 0.2s;
            }

            .header-3-1 .bg-white-1 {
                background-color: #e8f1ff;
            }

            .header-3-1 .btn-sign:hover {
                color: #ffffff;
                transition: 0.3s;
            }

            .header-3-1 .btn-outline:hover {
                border: 1px solid #7166ff;
                color: #7166ff;
                transition: 0.3s;
            }

            .header-3-1 .navigation .active {
                position: relative;
                padding-bottom: 3px;
                padding-top: 3px;
                transition: 0.3s;
            }

            .header-3-1 .navigation .active:before {
                content: "";
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                text-align: center;
                bottom: 0;
                height: 0px;
                width: 80%;
                border-bottom: 2px solid #7166ff;
                transition: 0.3s;
            }

            .header-3-1 .btn-fill {
                border: 1px solid #7166ff;
                background-color: #7166ff;
                transition: 0.3s;
            }

            .header-3-1 .btn-fill:hover {
                background-color: #857df8 border: 1px solid #857df8 transition: 0.3s;
            }

            .header-3-1 .btn-outline {
                border: 1px solid #5d6e86;
                color: #5d6e86;
                transition: 0.3s;
            }

            .header-3-1 .btn-outline:hover div path {
                fill: #857df8;
            }

            .header-3-1 .btn-outline:hover div rect {
                stroke: #857df8;
            }

            .header-3-1 .navigation a:hover {
                color: #ffffff !important;
                font-weight: 500;
                transition: 0.3s;
            }

            .header-3-1 #form {
                width: 100%;
            }

            .header-3-1 #form input[type="text"] {
                width: 100%;
                background-color: #e8f1ff;
                box-sizing: border-box;
                font-size: 14px;
                padding: 0.375rem 0.5rem;
                -webkit-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
            }

            .header-3-1 .search-icon:hover path {
                fill: #ffffff;
            }

            .header-3-1 .title-font {
                color: #fefefe;
                line-height: 1.25;
            }

            .header-3-1 .text-gray-1 {
                color: #aaa6a6;
            }

            @media (max-width: 1023px) {
                .header-3-1 .backdrop-background {
                    background-image: linear-gradient(to bottom right,
                            rgba(39, 59, 86, 1),
                            rgba(36, 49, 66, 1));
                }

                .header-3-1 #form input[type="text"] {
                    width: 100%;
                }
            }

            @media (min-width: 1024px) {
                .header-3-1 .center-search {
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                }

                .header-3-1 #form {
                    width: 320px;
                }
            }

        </style>

        <!-- Navbar -->
        <div class="header-3-1" style="font-family: 'Poppins', sans-serif">
            <header x-data="{ open: false }"
                class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img src="{{ asset('image/logo.png') }}" class ="object-contain h-20 w-96" alt="" />
                    </a>
                    <div class="flex justify-end items-center lg:hidden cursor-pointer">
                        <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="#FFFFFF"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </div>
                <!-- Backdrop -->
                <!-- Backdop  -->
                <div :class="{'hidden': !open}"
                    class="bg-white fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
                </div>
                <nav :class="{'flex': open, 'hidden': !open}"
                    class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 backdrop-background">
                    <a href="#">
                        <img class="m-0 lg:hidden mb-3"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-4.png"
                            alt="" />
                    </a>
                    <a href="#"
                        class="nav-text text-sm text-white font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative active">Home</a>
                    <a href="#benefits" class="nav-text text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Benefits</a>
                    <a href="#pricing" class="nav-text text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Pricing</a>
                    <a href="#contact" class="nav-text text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Contact</a>

                    <div class="flex items-center justify-end w-full lg:hidden mt-3">
                        <a href="{{ route('login') }}"
                            class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                            Sign In
                        </a>
                    </div>
                    <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden"
                        fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </nav>
                <div class="hidden items-center justify-end lg:flex">
                    <a href="{{ route('login') }}"
                        class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                        Sign In
                    </a>
                </div>
            </header>
            <div class="lg:px-24 md:px-16 sm:px-8 px-8">
                <hr style="border-color: #2e425c" />
            </div>

            <!-- Hero -->
            <div id="home">
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold">
                            Ready to Compete<br class="lg:block hidden" />
                            <span style="color: #7166ff"> in The Digital Age ?</span>
                            Contacts Us Now !
                        </h1>
                        <p class="caption-text text-base font-light leading-6 tracking-wide mb-12 lg:mb-20">
                            Sejak 2019. Kami mengubah bisnis agar mudah beradaptasi <br class="sm:block hidden" /> dengan <b>Digital Solutions</b> untuk memenuhi kebutuhan dimasa depan
        
                            
                        </p>
                        <div
                            class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <button
                                class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                                Find More
                            </button>
                            
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="lg:absolute lg:block hidden bottom-0 right-0"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-1.png"
                            alt="" />
                        <img class="absolute top-20 lg:block hidden lg:right-25 md:right-15 sm:right-8 right-8"
                            src="{{ asset('image/gambar.png') }}"
                            alt="" />

                    </div>
                </div>
            </div>
    </section>
    <section id="benefits" class="h-full w-full px-8 py-20 bg-white">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-1 .circle {
                background-color: #7166ff;
            }

            .content-3-1 .caption {
                color: #565656;
            }

            .content-3-1 .btn-fill {
                background-color: #7166ff;
                transition: 0.3s;
            }

            .content-3-1 .btn-fill:hover {
                background-color: #857df8;
                transition: 0.3s;
            }

            .content-3-1 .text-medium-black {
                color: #121212;
            }

        </style>
        <div id="benefits" class="content-3-1 flex lg:flex-row flex-col items-center" style="font-family: 'Poppins', sans-serif">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                <img id="hero" src="{{ asset('image/undraw_personal_finance_tqcd.png') }}" alt="" />
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-4xl text-3xl font-semibold mb-10 tracking-tight text-medium-black">
                    4 Keys Benefit
                </h2>
                <ul>
                    <li class="mb-8">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">1</span>
                            Trusted Mentor
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            We have provided highly experienced mentors<br class="sm:inline-block hidden" />
                            for several years.
                        </p>
                    </li>
                    <li class="mb-8">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">2</span>
                            Trusted Mentor
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            We have provided highly experienced mentors<br class="sm:inline-block hidden" />
                            for several years.
                        </p>
                    </li>
                    <li class="mb-8">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">3</span>
                            Access Forever
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            Are you busy at work so it's hard to consult? don't<br class="sm:inline-block hidden" />
                            worry because you can access anytime.
                        </p>
                    </li>
                    <li class="mb-16">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">4</span>
                            Halfpenny
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            We provide economical packages for those of you<br class="sm:inline-block hidden" />
                            who are still in school or workers.
                        </p>
                    </li>
                </ul>
                <button
                    class="btn-fill px-10 py-4 text-base text-white font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section id="contact" class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear"
        style="background-color: #232347">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .footer-2-3 .list-footer li a {
                color: #707092;
            }

            .footer-2-3 .list-footer li a:hover {
                color: #FFFFFF;
            }

            .footer-2-3 .border-color {
                color: #707092;
            }

            .footer-2-3 .footer-link:hover {
                color: #FFFFFF;
            }

            .footer-2-3 .social-media-c:hover circle,
            .footer-2-3 .social-media-p:hover path {
                fill: #FFFFFF;
            }

        </style>

        <footer class="footer-2-3" style="font-family: 'Poppins', sans-serif;">
            <div class="lg:pb-24 pb-16 mx-auto">
                <div class="grid lg:grid-cols-4 sm:grid-cols-2 lg:gap-0 gap-y-6">
                    <div class="">
                        <div class="mb-5">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png"
                                alt="">
                        </div>
                        <nav class="list-none list-footer space-y-5">
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Benefits</a>
                            </li>
                            <li>
                                <a href="">Pricing</a>
                            </li>
                            <li>
                                <a href="">Help</a>
                            </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-semibold text-2xl mb-5 text-white">Product</h2>
                        <nav class="list-none list-footer space-y-5">
                            <li>
                                <a href="">Image Recognition</a>
                            </li>
                            <li>
                                <a href="">CRUD Laravel</a>
                            </li>
                            <li>
                                <a href="">Journal Web</a>
                            </li>
                            <li>
                                <a href="">Mobile Apps</a>
                            </li>
                            <li>
                                <a href="">Editing</a>
                            </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-semibold text-2xl mb-5 text-white">Company</h2>
                        <nav class="list-none list-footer space-y-5">
                            <li>
                                <a href="">Contact Us</a>
                            </li>
                            <li>
                                <a href="">Portofolio</a>
                            </li>
                            <li>
                                <a href="">Location</a>
                            </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-semibold text-2xl mb-5 text-white">Support</h2>
                        <nav class="list-none list-footer space-y-5">
                            <li>
                                <a href="">Getting Started</a>
                            </li>
                            <li>
                                <a href="">Help Center</a>
                            </li>
                            <li>
                                <a href="">Server Status</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="border-color mx-auto">
                <div class="">
                    <hr style="border-color: #2E2E5A;">
                </div>
                <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                    <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5"
                        style="cursor: pointer;">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#707092" />
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z"
                                    fill="#141432" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#707092" />
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                                    fill="#141432" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                fill="#707092" />
                            <path
                                d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                fill="#707092" />
                            <path
                                d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z"
                                fill="#707092" />
                        </svg>
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#707092" />
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z"
                                    fill="#141432" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5">

                    </nav>
                    <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                        <p>Copyright © 2022 - Ahmad || Alam || Thariq</p>
                    </nav>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>
