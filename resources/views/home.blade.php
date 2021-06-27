<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-gray-900 text-gray-600 work-sans leading-normal text-base tracking-normal">
    {{-- Carousel Section --}}
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3 bg-gray-900">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 text-xl " href="#">
                    DEVLOOK
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">
            </div>
        </div>
    </nav>

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="modal-open carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://i.ibb.co/s9XZyHt/Screenshot-2021-06-27-103115.png');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-gray-700">
                            <p class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 text-2xl my-4">Laravel, Website Framework</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="modal-open carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://i.ibb.co/3dsK4zG/Screenshot-2021-06-27-115904.png');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-gray-700">
                            <p class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 text-2xl my-4">W3schools, Website Online Course</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    {{-- Essential Section --}}
    <div class=" pl-8 py-8 bg-gray-900">
        <span class="bg-clip-text text-transparent text-4xl bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
            Programmer's Essentials!
        </span>
        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
    </div>

    <div class="flex items-center justify-start pl-8 bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <tbody>
                        <tr class="modal-open bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover" src="https://cdn.iconscout.com/icon/free/png-256/laravel-226015.png" alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Laravel</div>
                                        <div class="text-gray-500">https://laravel.com/</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Website  dari Framework aplikasi berbasis web yang paling umum digunakan
                            </td>
                            <td class="p-3 pl-5">
                                <span class="bg-green-400 text-gray-50 rounded-md px-2">Framework</span>
                            </td>
                        </tr>
                        <tr class="modal-open bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEhUPDxIWEBAWFRgWFRYVFRYVEBIVFRcXFx4XGBUYHyggGBolGxgYITEiJSkuLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGzIlHyUuLS8tLSstLS0tLS0tLS0tLy0rLS0tLS0wLSsvLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALQAtAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIEBQYDB//EAEIQAAEDAQUFBgMFBgQHAQAAAAEAAgMRBAUSITEGQVFhcRMiMoGRoVLB0SNTYnKxFBZCkrLhQ4Ki8CQzNHOj0vEV/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAMBAgUEBv/EADURAAIBAgMFBwIEBwEAAAAAAAABAgMRBCExBRJBUXETImGRodHwgcEyseHxFBUjQlJicjP/2gAMAwEAAhEDEQA/APcUIQgAQhCABCEIAELnJI1oq4ho4nJVVqv+NuTBj56BKq16dP8AG7fn5akNpalymkgZnJZG033O7R2EcBl76qulne41c4k8ySuCptSC/DFv092U7RG7daYxq9o8wk/bIvvGfzD6rz8uKYXLn/m0v8PX9CvavkejMlacg4HoQV0XmeIjepEF6Tx+GQgcK1HoVeO2F/dDyfvYO18D0RCyFk2reMpWB/Md0/RX1hviCbJr6O+E5O/v5Luo42hVdoyz5PJ/OgxTTLFCELrLAhCEACEIQAIQhAAhCEACEJCaZoAVVV4XwyPus77/AGH1UO9b2JqyM0bvO8/QKjcVlYrH27tLz9vcXKfI6Wq1vkNXuJ/QdBuUcpSmFZEm27sUIUwpxTSlkCFcynEphKoyBpSEoKYVRkASm1QSkZG5xwsaXO4NBJ9AqPPIgvLp2lkio2WskfPxNHI7+h9lsbFbI5m443Yhv4g8CNyw0GzNrfngDB+JwB9BVWN37O2yBwfHLG07x3iCOBFM1t4KtjIWU4OUfHVdL5vo/MdBzWqNihcosVBioHUzp4a8q7l1W8PBCEIAEIQgAQhCABZ2+7zqTGw90akbz9FMvy3dm3A3xu9h/v5rLErKx+Kt/Sj9fb3FzlwFcUhKaSglZDYoCmEoJTSVVgIU0pSUwlUZAhKQoKYVRlRCmEp5KlXRd5tEojGTdXngB8zoiMHOSjHVha+R2uS5H2k4jVkQObt7jwb9VtrFYooW4Ymho3n+I8ydSusMTWNDGDC0CgA0AXRenwmDhh1lnLi/bw+O51RgoghUt9bQxWfuD7SX4Qcm/mO7pqsnatpbY81EnZjg0AD1NSqYjaNCg91u75L78CsqkY5HoxCAfVefWHay0xkdoRM3eCAD5OHzWyu28I7SwSxHTVp8TTvaQmYXHUcRlB58nqTGpGWhYoSA1zSrsLghCEAC5yvDQXHQCp8l0VLtLacMYYNXHPoP709EqvU7Om58vi9SG7K5n7baTI8vO8+g4LiSmVSVXmHJt3Zz3FJSEpCU0lUACUhXSzQmR7Y20xONBXTQn5K0OzM/FnqmU6FSorwjcLNlISmkqded2SWfD2lDirTCSdOoUAlKqQlCW7JWZDAlNKQlNJSmVBy22ydi7OHtCO/J3ueHcPn5rDuV6zayZoDQxlAABroPNdmz61GjUc6nLLK+uvzxZem0ndm2VHtPfBs7A2M/av0/C3e76KlO2Fo+Bnv9VTXpeD7Q/tZKB1BkK0AHXqV34ratN0mqL7z8GrefHkXlVVu6Q3GuZzJ1JzJPVNKUppXmmcw0q32Tt5htDR/BIQ1w66HyP6lVBXSx17RlNcYp1xBNw1RwqxkuDXzyJTs7nq7TRxbuOY67x8/Vd1wtFaVGozHzHpVdQQcxmvdHcOQhCABVl8Xe2VjiB9oB3T0NaeefqrNIVSpCM47stAauec1S1VrtJd5if2rR9m45/hcfkVT1XlqtOVKbhLVfL/X5nc5mrOw6qaSm1SxRue4MYC5x0ASvAgttl4C+fFuYCT1OQ+fotkq+5ruFnjw6vObzxPDoFYL0uCoujSUXrq+v6aHRBWRTbVWfHAXDVhDvLQ+x9liar0yRgcC1wqCCCOIOS86vGyOgkdE7d4T8QOhWbtajaSqrjk/t5oXVXE4EppKSqaSsa4gR5Wqg2Ra5rXOkcCQCRQZEjRUlw2A2iYNp3G5vO6g3eZy9V6MtbZmDhVjKdRXWi+/t9B1OCebMx+5sf3p/lCyNthwSPjrXC4ivGhIqvVgvKLdLjkkf8TyfIklRtbDUaMIunGzbIqxUbWOBTSUoqchmfddGWSV2TY3E8g76LDUZS0TfQQcCVa7L2EzWhmXdYQ9x3ANNQPM091IsGylqlPfHYt4uoXeTQf1ottdV2RWZmCMc3OPiceJWtgNm1JVFOorRWeert4DadNt3ZOXKzaFvwkjy1HsQuq4MNJHCurQ4DpUE/wBK9QdRJQhCAEKQrnaHlrS4CpAJpxoCVGu+8o5xVh7w8TTq3+3NUdSKkot5si+diVLG14LXAOaciDoVmbbsw8GsDgW/C8kEf5gM1qUJVfDU6y769/noEop6mTs+y8pP2jw0fhq53uAAtBd93RQCkbc97jm49SpiFWjhKVHOKz5vN/OhCiloCFytM7I2l8jg1o1J/wB6rFXrtDLJIHREsYw1aPiPF30UYnF08Ou9ryWvzr0CU1E3Srr3uplpbR3dePC4ajlzHJLdF6x2ltW5PHiZXNv1HNWCb/TrU+cX8+cUycmjz+07PWphpg7QcWkEehzCfYNmbTIe+OyZvLtfJo+a3qFwLZNBSvd25X+P1F9lEiXdd8dnZ2cYy1JPiceJKloUG9L0iszcUhz/AIWjxO6D5rR7lKHKK8kMySIu094iCB1D9o8FrOOep8h8l5ypl6XjJaJDJJ0a3cwcB9VCK8ltDF/xFS8fwrJfd/X8rcTkqT3mT9nz/wAVD+deory24P8AqYf+41en9qz4h6ha+w//ABl/19kOoaMchAQtkcC4H/mD8h9nN+q7ri/xt/K7+piAJCEIUgcp2VaRxBHqKLzjtHMdVpLXA5EGhC9KdosLbLqlfPIyJtQ11ak0DQcxmeSx9rUpS3HFXd2stef2FVU3axMsO1T292duMfE3J3mNCrmHaGyO/wASnJwI+SxtvuyaEB0je6dHAhwrwqE6wXTPOMUbe78ROFp6cVy08bjIS7Nx3nyaz+eLv1KKc1kbN9+2UCvbDyBJ9AFWWza2MCkDC88Xd0empWctF3SwvY2ZlAXZbw4ZVoVd3/c0ss57CMBuBtTk1uKp96UTni8XUjLdVmmlazcs/rb0J35sobfb5Z3YpXYuA0DegUeqfa7NJE8xyNLXjdrWulKaqwZs7ay3F2YG+hcAfRZKp1qsnZNvjk2/r8v9lWbZWRyuYQ5ji1w0INCFoLFtdI3KZgkHxDuu8xofZZ50Tw7sy0464cNO9XhRWLtm7ZhxdmNK4cQxeivhZ4mLfYJ5a2V19V+zJi5f2mkZtdZD4i5nVtf0qmzbXWUDu4nngG4fdyo9j4WutBbI0GjDkRochod+qrrPdss0j2QtrhJrmAGippUnou/+PxbpRnGzcm0kou+X1LdpOxaW7a6d+UTREOPid75BZ6WVzyXPcXOOpJJJ8ypl4XPaIGh8je4csQIc2vMjRV9VlYqriJStXvfk8vJafUXJyb7wFIUJFxlQTSwcE9CLImxKsN6WiA1jkcB8JJLT1aclv9n76Za2E0wyN8beFdCORXmhVnstazFao6aOOF3MOy/Wi1dnY6dOooSd4vLp0+WGU5NM9PUck9ryDM+pdl+h9FIUWz0L3u/Fh8mAfMuXrDqJiEIQAhVHfUzI2uErC+B+UjmmjmkUAJ5EYdOfFXqgXkHhjuzDXOIya4VDiNxG+oqOpCVWi5QaWvS/pxvo16oh6GXtlka6yufZJnOga6ro3gZEEaEiopUGmhT9pHFtms4jNIi3OmQJwtpX/Uqq3X1LIzsqMijrUtjbQHrmUWG/JoWdkMMke5r24gOmYXnXiqD3oK6TildJ2TTvlG91Hwuc29HNEhr7U6GIvzgEgwk+KtfWmqlbZ2h4na0OIDWtcADQAkuz9gqm8L3mnLS8gBpq1oFGgjfSq5XneElof2kmEOoBkCAAK8SeJS6uKh2MqcW2+7ZvwvfouS5EOSs10NbegabdZcW9rvUAke6ob7tE4tjqF3aB4EYBOlBSg4H6qHeN6yzua95AcwANLQRShrXU51U1u1Noyq2NzgKB5acY80ytiqNZzTk4pyUk0v8AVRtbVPK6LSmnfqaOVkf/AOgw5YuyJP5tB50qszZ7RL+3au7TtSCKnw55U4YVWPt0pk7YvPa1ri31Hy3UVqdq7RrhjD6Uxhvf9dPZWnjqNZ3k3C095WV7+Gqs/HNIhzT87l7ZA0XlJh+6qfzUbX5Knuy2dm2cSwufZXOpI5poWEkjjmNOiqrBessMpnaQ6Qggl9TXFQ7iN4CW774mgLizC4Pze1wxNcelVCx9OTTzXem3lfKWl+afFLPVkb6fr6lybA2WzP8A2CcmIOGKFwAGKoNA46bjwKr/AN17b91/rZ9VztW0Ezmdm1rIm1DsMbcIcQQc8zvC9IhkD2h40cAR0IqnUsNhcbLJtbqWmS46J71kuWheMYzPPBspbfux/Oz6qmcCCQciCQeRGS9fXn22l2GKbtWj7OXPkH7x56+qVtDZkKNPtKV8tb8iJ091XRQJElUErEFiFTbijLrTCBr2gPk01PsFBK1+wl1GptTxQULY+e4u+XquzA0XVrxS4O76LMtBXkjZTyhjS46AVXOyRlrQDqBnStMWpIruqSuNrfV7Yxu7513eEV/NnTg0qaxtBRe0OschCEACZKyoonoQB55tRd5ik7Ro7jya8GuzJHnqPPgqNemXvYmysLXCrSM+IO5w5g/TevOrZZXRPMb6VG8aOB0I5H+y8vtXBulU7WK7svR/rw/Y5asLO6ONU1CFjigSISKAFQhCgASISKSQK3exN5iSLsHH7SPTiWbvTT0WEXWyWl8TxJGcL2moPyPEFduBxTw9Xf4aPoXhLddz1xRbwsUc8ZikFWn1B3EcwoFx7QxWkBp7k29h382neFcr18JwqwvHNP5b9DqTTR5fetw2izuzaXs3PAJaetPCeqgRWaV5wsY554NBJXsCQLKlsWk5XUmly19RTormYi5Nj3Eh9ryb92DmfzEaDkFsnuaxulGgUAA8gAPai6qtMnbOBae4PDzOmI9MwPXhXSw+Fp0I7tNe7GRio6HSxRkkvdm4mp0yNPCDvA09TvVgmRsoKJ66CwIQhAAhCEAIRVZ+/rnbO2nhcM2O+E8Dxad48xz0Ka9oORVZwjOLjJXTBq6seS2iF8bjHIMLxqPmDvB4rlVeg31c7JRRwOVcLh42V3jiORyPI5rEXhd0sB+0FWHIPFcBPA/C7XI+VRmvKY7Zs6D3oZw9V19/OxyTpuOmhFqhCFliwSIQgmwISJUABTSlQVJI3n/9Curv2ptcIDS4StG59S7+YZ+tVTJqdSr1KTvBtEptaG3h24i/xInNP4S1w96KSdtLJSv2nTB/dYACpAAJJNAAKucTuAGZK0dy7MlxD7QOkXDnIRv/AAjz3hbWExmNry3YWtxbWS8teg2MpvQ0FlvQ2xtWRvZCdC6gdL0wnJnPfoN5F1ZoMI5pLNZw3XVSVvxTSs8x4IQhSAIQhAAhCEACEIQAhFVAtdgDgcgQdQQC0jgQciFYIQBgrz2ZpUwnAc+46pYdcmu1bwzr1Cz9ssssJpKws4HWM9Hjun1XrMkQdqFDksGuE0rkeY4HiszE7KoVndd1+Gnl+wuVKLPLELcWzZqFxqYwDvMf2Z9B3fZVU+y9KlkjhwD2Nf6vaW/0rJqbFxEfwtP0/PL1FOkzOoV0Nm5fvIx1Dx+gKX92pfvY/wDy/wDouf8AleL/AMPVe5HZy5FGkor6LZmQnvSADi1hcfQkKfZ9lY8sXaSHfUhrD/laKj+YpsNj4mWqS6v2uSqcjIE7t/DefJWtj2ftElMY7Fv4xV+u6PUH81FtbDc7YxSNrYhocIo4g7i7xO8yVZQWNrdy06Gxqcc6r3vBZL3GKkuJR3NcMcWbGnEdXuoXnKlK0GEa5ADXOq0EEAaMl1ASrXjFRW7FWXJDbAhCFYAQhCABCEIAEIQgAQhCABCEIAEIQgBE0xjghCAGGBvBH7OzghCAHCFvBPwoQgBUIQgAQhCABCEIAEIQgAQhCAP/2Q==" alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">W3Schools</div>
                                        <div class="text-gray-500">https://www.w3schools.com/</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Website dengan Online Course lengkap dengan dokumentasi dan tutorialnya
                            </td>
                            <td class="p-3 pl-5">
                                <span class="bg-blue-400 text-gray-50 rounded-md px-2">Online Course</span>
                            </td>
                        </tr>
                        <tr class="modal-open bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover" src="https://www.labkommat-unm.net/wp-content/uploads/2020/03/1200px-Visual_Studio_Code_1.35_icon.svg_.png" alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Visual Studio Code</div>
                                        <div class="text-gray-500">https://code.visualstudio.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Salah satu Text Editor paling flexibel untuk programming
                            </td>
                            <td class="p-3 pl-5">
                                <span class="bg-purple-400 text-gray-50 rounded-md px-2">Text Editor</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Category Selection Section --}}

    <div class=" pl-8 py-8 bg-gray-900">
        <span class="bg-clip-text text-transparent text-4xl bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
            Find your sites!
        </span>
        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
    </div>

    <div class="grid mt-8  gap-8 grid-cols-2 md:grid-cols-3 xl:grid-cols-3 bg-gray-900">
        <div class="flex flex-col">
            <div class="bg-gray-800 shadow-md  rounded-3xl p-4">
                <div class="modal-open flex-none lg:flex">
                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                        <img class="rounded-full h-12 w-12  object-cover" src="https://cdn.iconscout.com/icon/free/png-256/laravel-226015.png" alt="unsplash image">
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">
                            <div class="w-full flex-none">
                                <span class="bg-green-400 text-gray-50 rounded-md px-2">Framework</span>
                            </div>
                            <h2 class="flex-auto text-lg text-white font-medium">Laravel</h2>
                        </div>
                        <div class="flex py-4 text-sm text-gray-600">
                            <div class="flex-1 inline-flex items-center">
                                <p class="">Website  dari Framework aplikasi berbasis web yang paling umum digunakan</p>
                            </div>
                        </div>
                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
    <div class="modal-overlay absolute w-full h-full bg-gray-800 opacity-50"></div>

    <div class="modal-container bg-gray-800 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Website Details</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <div class="flex-none lg:flex">
            <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                <img class="rounded-full h-12 w-12  object-cover" src="https://cdn.iconscout.com/icon/free/png-256/laravel-226015.png" alt="unsplash image">
            </div>
            <div class="flex-auto ml-3 justify-evenly py-2">
                <div class="flex flex-wrap ">
                    <div class="w-full flex-none">
                        <span class="bg-green-400 text-gray-50 rounded-md px-2">Framework</span>
                    </div>
                    <h2 class="flex-auto text-lg text-white font-medium">Laravel</h2>
                </div>
                <div class="flex py-4 text-sm text-gray-600">
                    <div class="flex-1 inline-flex items-center">
                        <p class="">Website  dari Framework aplikasi berbasis web yang paling umum digunakan</p>
                    </div>
                </div>
                <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
            </div>
        </div>

        <!--Footer-->
        <div class="flex justify-center pt-2">
            <div class="text-gray-500">
                <a href="https://laravel.com/">https://laravel.com/</a>
                </div>
        </div>

      </div>
    </div>
  </div>
</body>

<style>
    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }

    .table tr {
        border-radius: 20px;
    }

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }

    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
</style>
<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };


    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }


  </script>


</html>
