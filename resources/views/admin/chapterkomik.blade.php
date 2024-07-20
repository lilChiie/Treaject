<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter Komik</title>
</head>
<body>
@include('components.headeradmin')
<main class="font-serif dark:bg-black ps-2 pr-2 sm:ps-[288px] sm:pt-12 sm:pr-10">
    <a href="/admin/DetailKomik">
        <svg  class=" mb-6 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
        </svg>
    </a>
    <!-- content start -->
    <section class="flex flex-col justify-center items-center">
        <img src="{{ url('images/komik1.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik2.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik3.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik4.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik5.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik6.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik7.jpg') }}" class="w-1/2" alt="Komik">
        <img src="{{ url('images/komik8.jpg') }}" class="w-1/2" alt="Komik">
    </section>
    <!-- content end -->
    <!-- panah start -->
    <section>
       
    </section>
     <!-- panah end -->
</main>

@include('components.footeradmin')
</body>
</html>