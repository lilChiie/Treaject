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
    <!-- Navigasi atas -->

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
        <div class="flex justify-center mt-5">
            <a href="">
                <div class="flex mx-5">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ababab" d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29l0-320c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3l0 41.7 0 41.7L459.5 440.6zM256 352l0-96 0-128 0-32c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29l0-64z"/>
                    </svg>
                    <p class=" mx-4 text-gray-500 uppercase">previous</p>
                </div>
            </a>

            <div>
                <p class=" font-medium text-[18px] mx-6">#1</p>
            </div>

            <a href="" class="hover:bg-merah hover:text-white rounded-xl group">
  <div class="flex mx-5">
    <p class="mx-4 text-gray-600 uppercase group-hover:text-white">NEXT</p>
    <svg class="w-7 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path fill="#ababab" d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416L0 96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4L224 214.3l0 41.7 0 41.7L52.5 440.6zM256 352l0-96 0-128 0-32c0-12.4 7.2-23.7 18.4-29s24.5-3.6 34.1 4.4l192 160c7.3 6.1 11.5 15.1 11.5 24.6s-4.2 18.5-11.5 24.6l-192 160c-9.5 7.9-22.8 9.7-34.1 4.4s-18.4-16.6-18.4-29l0-64z"/>
    </svg>
  </div>
</a>

        </div>
    </section>
     <!-- panah end -->
</main>

@include('components.footeradmin')


</body>
</html>