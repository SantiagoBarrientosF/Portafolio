<!DOCTYPE html>
<html lang="es" id="html-root">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  @vite('resources/css/app.css')
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 min-h-screen flex flex-col">
  <header class="bg-white dark:bg-gray-800 shadow-md p-6 flex justify-between items-center">
    <button id="dark-mode-toggle" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">{{__('Profile.dark_mode')}}</button>
    <div class="relative inline-block text-left">
      <button id="dropdownButton" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">
        {{__('Profile.language') }}
        <svg class="w-4 h-4 inline-block ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7M5 9l7 7 7-7" />
        </svg>
      </button>
      <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-white dark:bg-gray-700 border rounded-lg shadow-lg">
        <a href="{{ route('lang.switch',['locale' => 'es']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Español</a>
        <a href="{{ route('lang.switch',['locale' => 'es']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">English</a>
      </div>
    </div>
  </header>
  <!-- Main content -->
  <main class="flex flex-wrap justify-center items-start gap-6 p-6 flex-1">
    <div class="order-first w-full flex flex-col items-center bg-white dark:bg-gray-800 text-black dark:text-white rounded-xl shadow-lg p-6">
      <div class="flex items-center justify-center mb-4">
        <img src="/img/pixel.png" alt="Santiago Barrientos" class="rounded-full w-32 h-32 mb-4 shadow-lg" />
      </div>
      <div class="flex flex-col items-left mb-4">
        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:scale-105">
          <a href="{{route('download_cv')}}">{{__('Profile.download_cv')}}</a>
        </button>
      </div>
      <h1 class="text-lg font-bold mb-2">{{__('Profile.rol')}}</h1>
      <p class="text-sm text-gray-700 dark:text-gray-300">{{__('Profile.me')}}</p>
      <p class="text-lg text-gray-500 dark:text-gray-400">{{__('Profile.phrase')}}</p>
    </div> 
    <!-- Profile sections -->
    <section class="flex-1 min-w-[280px] max-w-md h-64 bg-white dark:bg-gray-800 text-black dark:text-white rounded-xl shadow-lg p-6 hover:scale-110">
      <h2 class="text-2xl font-semibold mb-4 text-center">{{__('Profile.about_me')}}</h2>
      <p class="text-base leading-relaxed">
        {{__('Profile.about_me_text')}}
      </p>
    </section>
    <section class="flex-1 min-w-[280px] max-w-md h-64 bg-white dark:bg-gray-800 text-black dark:text-white rounded-xl shadow-lg p-6 hover:scale-110">
      <h2 class="text-2xl font-semibold mb-4 text-center">{{__('Profile.technologies')}}</h2>
      <div class="flex flex-wrap justify-center gap-4">
        <img src="/img/Github.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/tailwindcss.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/django.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/laravel.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/postgresql.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/postman.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/mongodb.svg" class="w-10 h-10 hover:scale-120" />
        <img src="/img/javascript.svg" class="w-10 h-10 hover:scale-120"/>
        <img src="/img/flask.svg" class="w-10 h-10 hover:scale-120"/>
      </div>
    </section>
    <section class="flex-1 min-w-[280px] max-w-md h-64 bg-white dark:bg-gray-800 text-black dark:text-white rounded-xl shadow-lg p-6 hover:scale-110">
      <h2 class="text-2xl font-semibold mb-4 text-center">{{__('Profile.education')}}</h2>
      <ul class="list-none list-inside">
        <li class="mb-2"><strong>{{__('Profile.technology')}}</strong></li>
        <li class="mb-2">{{__('Profile.technology_text')}}</li>
        <li class="mb-2"><strong>{{__('Profile.technician')}}</strong></li>
        <li class="mb-2">{{__('Profile.technician_text')}}</li>
      </ul>
    </section>
  </main>
  <section class="p-6 bg-white dark:bg-gray-800 text-black dark:text-white">
    <h2 class="text-3xl font-semibold text-center mb-6">{{__('Profile.projects')}}</h2>
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-4">
        <h3 class="text-xl font-bold mb-2">{{__('Profile.la_union_api')}}</h3>
        <p class="mb-4">{{__('Profile.la_union_text')}}</p>
        <a href="#" class="text-blue-600 hover:underline" onclick="toggleModal('modal_la_union','open')">{{__('Profile.view_more')}}</a>
      </div>
      <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-4">
        <h3 class="text-xl font-bold mb-2">{{__('Profile.hands_detection')}}</h3>
        <p class="mb-4">{{__('Profile.hands_detection_text')}}</p>
        <a href="#" class="text-blue-600 hover:underline" onclick="toggleModal('modal_hands_detection','open')">{{__('Profile.view_more')}}</a>
      </div>
      <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-4">
        <h3 class="text-xl font-bold mb-2">{{__('Profile.file_processor_system')}}</h3>
        <p class="mb-4">{{__('Profile.file_processor_text')}}</p>
        <a href="#" class="text-blue-600 hover:underline" onclick="toggleModal('modal_processor','open')">{{__('Profile.view_more')}}</a>
      </div>
    </div>
  </section>
  <section class="text-center p-6 bg-white dark:bg-gray-800 text-black dark:text-white rounded-xl shadow-lg m-6">
    <h2 class="text-2xl font-semibold mb-4">{{__('Profile.contact')}}</h2>
    <p>{{__('Profile.contact_text')}} <a href="mailto:barrientosantiago1090@gmail.com" class="text-blue-600 hover:underline">barrientosantiago1090@gmail.com</a></p>
  </section>
  <!-- Modals for projects details -->
  <div id="modal_la_union" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-semibold mb-4">{{__('Profile.la_union_api')}}</h2>
      <p class="mb-4">{{__('Profile.la_union_text')}}</p>
      <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="toggleModal('modal_la_union','close')">{{__('Profile.close')}}</button>
    </div>
  </div>
  <div id="modal_hands_detection" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-semibold mb-4">{{__('Profile.hands_detection')}}</h2>
      <p class="mb-4">{{__('Profile.hands_detection_text')}}</p>
      <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="toggleModal('modal_hands_detection','close')">{{__('Profile.close')}}</button>
    </div>
  </div>  
  <div id="modal_processor" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-md w-full flex flex-col items-center">
      <div class="flex items-center justify-center mb-4">
        <img src="/img/Procesador.png" alt="File Processor System" class="rounded-full w-32 h-32 mb-4 shadow-lg" />
      </div>
        <h2 class="text-xl font-semibold mb-4">{{__('Profile.file_processor_system')}}</h2>
        <p class="mb-4">{{__('Profile.file_processor_text')}}</p>
        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="toggleModal('modal_processor','close')">{{__('Profile.close')}}</button>
    </div>
  </div>    
  <footer class="bg-gray-200 dark:bg-gray-900 text-center text-sm p-4 text-gray-800 dark:text-gray-300">
    <p>© {{__('Profile.rights')}}</p>
  </footer>
  <script>
    const toggle = document.getElementById("dark-mode-toggle");
    const htmlRoot = document.getElementById("html-root");

    toggle.addEventListener("click", () => {
      htmlRoot.classList.toggle("dark");
      console.log("Modo oscuro activado:", htmlRoot.classList.contains("dark"));
    });
  </script>
  <script>
    const btn = document.getElementById('dropdownButton');
    const menu = document.getElementById('dropdownMenu');

    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!btn.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('hidden');
      }
    });

    function toggleModal(modalId, action) {
      const modal = document.getElementById(modalId);
      if (action === 'open') {
        modal.classList.remove('hidden');
      } else if (action === 'close') {
        modal.classList.add('hidden');
      }
    }
  </script>  

</body>
</html>
