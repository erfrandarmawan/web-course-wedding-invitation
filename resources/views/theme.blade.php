<html>
  <head>
    <title>{{ $data->title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
  </head>

  <body class="font-montserrat w-full h-auto min-h-screen flex flex-col">
    <!-- Main Section -->
    <section class="w-full h-screen flex flex-col items-center justify-center text-white bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url('{{ $data->main_image }}');">
      <div class="bg-black bg-opacity-50 w-full h-screen absolute">
      </div>

      <div class="z-10 flex flex-col items-center">
        <span class="uppercase font-extralight text-2xl">The Wedding Of</span>
        <span class="font-berkshire mt-5 text-6xl">{{ $data->groom_name }} & {{ $data->bride_name }}</span>
        <span class="font-extralight text-2xl mt-5">{{ formatDate($data->wedding_date, 'l, F jS Y') }}</span>
      </div>
    </section>
    <!-- ./Main Section -->

    <!-- Profile Section -->
    <section class="w-full h-auto bg-white flex flex-col items-center p-10 bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('images/theme_01_bg_profile.webp') }})">
      <img src="{{ asset('images/bismillah.webp') }}" alt='Bismillah' class="w-1/4 mt-5" />
      <span class="font-light text-xl mt-8">Assalamu'alaikum Warrahmatullahi Wabarakatuh</span>
      <span class="font-light text-xl mt-4">We are very happy to invite you to the wedding of</span>

      <!-- Groom Profile -->
      <img src="{{ $data->groom_photo }}" class="w-48 h-48 rounded-3xl mt-10 drop-shadow-lg" />
      <span class="font-bold font-berkshire text-5xl mt-8">{{ $data->groom_name }}</span>
      <span class="font-light text-lg mt-4">Putra dari</span>
      <span class="font-light text-lg mt-1">{{ $data->groom_father_name }}</span>
      <span class="font-light text-lg mt-1">&</span>
      <span class="font-light text-lg mt-1">{{ $data->groom_mother_name }}</span>
      <a href="{{ $data->groom_social_media }}" target="_blank" class="bg-black h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-2">
        <i class="fa-brands fa-instagram text-white text-xl"></i>
      </a>
      <!-- ./Groom Profile -->

      <span class="font-bold font-berkshire text-5xl my-20">&</span>

      <!-- Bride Profile -->
      <img src="{{ $data->bride_photo }}" class="w-48 h-48 rounded-3xl drop-shadow-lg" />
      <span class="font-bold font-berkshire text-5xl mt-8">{{ $data->bride_name }}</span>
      <span class="font-light text-lg mt-4">Putri dari</span>
      <span class="font-light text-lg mt-1">{{ $data->bride_father_name }}</span>
      <span class="font-light text-lg mt-1">&</span>
      <span class="font-light text-lg mt-1">{{ $data->bride_mother_name }}</span>
      <a href="{{ $data->bride_social_media }}" target="_blank" class="bg-black h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-2">
        <i class="fa-brands fa-instagram text-white text-xl"></i>
      </a>
      <!-- ./Bride Profile -->
    </section>
    <!-- ./Profile Section -->

    <!-- Wedding Information Section -->
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/theme_01_bg_info.webp') }})">
      <div class="w-2/3 h-auto bg-white flex flex-col rounded-[100px]">
        <!-- Countdown -->
        <div class="flex flex-col h-96 rounded-t-[100px] relative bg-cover bg-no-repeat" style="background-image: url('{{ $data->main_image }}');">
          <div class="bg-black bg-opacity-75 w-full h-96 absolute rounded-t-[100px] z-0">
          </div>

          <div class="flex flex-col w-full h-full text-white z-20 items-center justify-center gap-8">
            <span class="font-light text-7xl">Countdown</span>
            <span class="font-light text-6xl">{{ countdown($data->wedding_date) }} days</span>
          </div>
        </div>
        <!-- ./Countdown -->

        <!-- Akad -->
        <div class="flex flex-col py-20 items-center">
          <span class="font-extralight text-4xl">Akad</span>
          <span class="font-medium text-4xl mt-4">{{ formatDate($data->akad_start_date, 'l, F jS Y') }}</span>
          <span class="font-medium text-4xl mt-4">{{ formatDate($data->akad_start_date, 'H:i') }} - {{ formatDate($data->akad_end_date, 'H:i') }}</span>
          <span class="font-extralight text-xl mt-4">{{ $data->akad_place_name }}</span>
          <span class="font-extralight text-xl mt-4">{{ $data->akad_address }}</span>
          <a href="{{ $data->akad_maps }}" target="_blank" class="font-light text-lg mt-4 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See Location</a>
        </div>
        <!-- ./Akad -->

        <!-- Divider -->
        <div class="w-2/3 mx-auto border-[0.5px] border-black"></div>
        <!-- ./Divider -->

        <!-- Reception -->
        <div class="flex flex-col py-20 items-center">
          <span class="font-extralight text-4xl">Wedding Reception</span>
          <span class="font-medium text-4xl mt-4">{{ formatDate($data->reception_start_date, 'l, F jS Y') }}</span>
          <span class="font-medium text-4xl mt-4">{{ formatDate($data->reception_start_date, 'H:i') }} - {{ formatDate($data->reception_end_date, 'H:i') }}</span>
          <span class="font-extralight text-2xl mt-4">{{ $data->reception_place_name }}</span>
          <span class="font-extralight text-2xl mt-4">{{ $data->reception_address }}</span>
          <a href="{{ $data->reception_maps }}" target="_blank" class="font-light text-lg mt-4 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See Location</a>
        </div>
        <!-- ./Reception -->

        <!-- Divider -->
        <div class="w-2/3 mx-auto border-[0.5px] border-black"></div>
        <!-- ./Divider -->

        <!-- QR Image -->
        <div class="flex flex-col py-20 px-28 items-center">
          <span class="font-extralight text-4xl">Wedding Gift</span>
          <span class="font-extralight text-2xl text-center mt-5">Your prayers and your attendance at our wedding mean a lot to us. And if you want to give a gift to us, we provide Digital Envelopes to make it easier for you. Thank you very much</span>
          <img src="{{ $data->gift_qr_image }}" alt="QR Image" class="w-60 h-60 mt-10" />
        </div>
        <!-- ./QR Image -->
      </div>
    </section>
    <!-- ./Wedding Information Section -->

    <!-- Gallery Section -->
    @if(count($data->gallery) > 0)
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/theme_01_bg_profile.webp') }})">
      <span class="font-berkshire text-6xl">Couple Gallery</span>
      
      <div
        @class([
          'grid h-auto gap-5 px-10 mt-10',
          'grid-cols-1' => (count($data->gallery) == 1),
          'grid-cols-2' => (count($data->gallery) == 2),
          'grid-cols-3' => (count($data->gallery) > 2)
        ])>
        @foreach($data->gallery as $item)
          <div class="w-full group overflow-hidden">
            <img src="{{ $item['link'] }}" alt="Gallery Item" class="group-hover:scale-110 duration-300"/>
          </div>
        @endforeach
      </div>
    </section>
    @endif
    <!-- ./Gallery Section -->

    <!-- Journey Section -->
    @if(count($data->journey) > 0)
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/theme_01_bg_profile.webp') }})">
      <span class="font-berkshire text-6xl">Our Journey</span>
      
      <div class="flex flex-col px-10 mt-10 items-center w-full font-light">
        <div class="w-5 h-5 rounded-full bg-slate-500"></div>
        <div class="w-1 h-10 bg-slate-500"></div>

        @foreach($data->journey as $key => $item)
          <div class="flex flex-row w-full justify-center">
            @if($key % 2 == 0)
              <div class="w-1/3 text-end text-xl font-medium">
                {{ formatDate($item['date'], 'M Y') }}
              </div>
              
              <div class="w-1 min-w-1 h-auto bg-slate-500 mx-5"></div>
              
              <div class="w-1/3 h-fit text-xl bg-white flex flex-col rounded-md p-5 mb-10 -mt-5">
                <span class="font-medium">{{ $item['title'] }}</span>
                <span>{{ $item['story'] }}</span>
              </div>
            @else
              <div class="w-1/3 h-fit text-xl bg-white flex flex-col rounded-md p-5 mb-10 -mt-5">
                <span class="font-medium">{{ $item['title'] }}</span>
                <span>{{ $item['story'] }}</span>
              </div>
              
              <div class="w-1 min-w-1 h-auto bg-slate-500 mx-5"></div>

              <div class="w-1/3 text-xl font-medium">
                {{ formatDate($item['date'], 'M Y') }}
              </div>
            @endif
          </div>
        @endforeach
        
        <div class="w-5 h-5 rounded-full bg-slate-500"></div>
      </div>
    </section>
    @endif
    <!-- ./Journey Section -->

    <!-- Doa Section -->
    <section class="w-full h-screen bg-white flex flex-col items-center bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('images/theme_01_bg_doa.webp') }})">
      <div class="bg-white bg-opacity-90 w-full h-screen absolute">
      </div>  
      
      <div class="z-10 flex flex-col w-2/3 h-full items-center justify-center">
        <img src="{{ asset('images/doa.webp') }}" alt='Doa' class="w-fit" />

        <span class="text-xl font-light text-center italic tracking-wider mt-5">Wa min Aayaatihiii an khalaqa lakum min anfusikum azwaajal litaskunuuu ilaihaa wa ja'ala bainakum mawad datanw wa rahmah; inna fii zaalika la Aayaatil liqawminy yatafakkaruun</span>
        <span class="text-xl font-light text-center tracking-wider mt-5">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir</span>
        <span class="text-xl font-light text-center tracking-wider">(QS. Ar-Rum Ayat 21)</span>
      </div>
    </section>
    <!-- ./Doa Section -->

    <!-- Comment Section -->
    <section class="w-full h-auto min-h-screen flex flex-col items-center px-10 py-20 text-black bg-fixed bg-cover bg-no-repeat bg-center font-light" style="background-image: url('{{ asset('images/theme_01_bg_comments.webp') }}');">
      <span class="text-2xl">We hope to see you on our special day</span>

      <form action="/send-comment" method="POST" class="flex flex-col w-1/2 mt-10">
        @csrf
        <label for="name" class="text-xl">Nama (max 50 karakter)</label>
        <input id="name" name="name" type="text" maxlength="50" placeholder="Nama Tamu" class="p-3 outline-none rounded-md mt-2 drop-shadow-md" required/>

        <label for="comment" class="text-xl mt-5">Pesan (max 500 karakter)</label>
        <textarea id="comment" name="comment" rows="5" maxlength="500" class="p-3 outline-none rounded-md mt-2 resize-none drop-shadow-md" placeholder="Pesan Anda" required></textarea>

        <button type="submit" class="mt-10 bg-develobe-500 w-fit mx-auto px-5 py-3 rounded-md text-white font-normal hover:scale-110 duration-300 drop-shadow-md">Kirim Ucapan</button>
      </form>

      <div class="flex flex-col w-1/2 mt-10 gap-5">
        @foreach($data->comments as $item)
          <div class="flex flex-col w-full bg-white rounded-md drop-shadow-md p-3">
            <span class="font-medium">{{ $item['name'] }} | {{ formatDate($item['created_at'], 'j M Y H:i') }}</span>
            <span class="font-light">{{ $item['comment'] }}</span>
          </div>
        @endforeach
      </div>
    </section>
    <!-- ./Comment Section -->

    <!-- Footer Section -->
    <div class="w-full flex flex-col items-center font-poppins p-5">
      <span>
        Made by <a href="https://develobe.id/" target="_blank" class="text-develobe-500">DEVELOBE.ID</a>
      </span>
    </div>
    <!-- ./Footer Section -->
  </body>
</html>