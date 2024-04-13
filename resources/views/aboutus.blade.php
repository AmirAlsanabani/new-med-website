<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Tailwind Flowbite -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->

        <!-- Darkmode -->
        <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>


        
    </head>
<body>
    <!-- -----------------------------------------nav bar--------------------------------------------------------- -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/index" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">موسوعة الأدوية الشاملة</span>
  </a>
  <div class="flex md:order-2">
    
    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>
      <span class="sr-only">Search</span>
    </button>
    <div class="relative hidden md:block">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
    </svg>
    <span class="sr-only">Search icon</span>
  </div>
  <input type="text" id="search-navbar1" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="البحث عن دواء..." list="autocomplete-options">
  <datalist id="autocomplete-options">
    <option value="Option 1">
    <option value="Option 2">
    <option value="Option 3">
  </datalist>
</div>
    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
    <div class="relative mt-3 md:hidden">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
    </svg>
  </div>
  <input type="text" id="search-navbar2" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="البحث عن دواء..." list="autocomplete-options">
  <datalist id="autocomplete-options">
    <option value="Option 1">
    <option value="Option 2">
    <option value="Option 3">
  </datalist>
</div>
      
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="index" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">الصفحه الرئيسيه</a>
        </li>
        <li>
          <a href="aboutus" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">عنا</a>
        </li>
        <li>
          <a href="q&a" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">الاسئله الشائعه</a>
        </li>
        <li>
          <a href="medicinecategory" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">فئات الأدوية </a>
        </li>
        <li>
        <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">المزيد <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
                </li>
        </li>
        <li></li>
        <li></li>
        <li></li>
        <li>
        <a href="signin" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">تسجيل الدخول</a>
        </li>
      </ul>
      
    </div>
    
  </div>
  <div id="mega-menu-full-dropdown" class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600 hidden" >
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
            <ul>
                <li>
                    <a href="foodinteraction" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">التعارض مع الاطعمه</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">للبحث على تعارضات (مشاكل) الأدوية مع الطعام</span>
                    </a>
                </li>
                <li>
                    <a href="illnessinteraction" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">التعارض مع الأمراض المزمنه</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">للبحث على تعارضات (مشاكل) الأدوية مع الأمراض المزمنه</span>
                    </a>
                </li>
                <li>
                    <a href="medicineinteraction" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">التعارض مع الأدوية الأخرى</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">للبحث على تعارضات (مشاكل) الأدوية مع الأدوية الأخرى</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="feedback-sideeffects" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">الابلاغ عن اعراض جانبيه</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">الابلاغ عن اي اعراض جانبيه لا يشملها الموقع</span>
                    </a>
                </li>
                <li>
                    <a href="feedback-website" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">الابلاغ عن مشكله في الموقع</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">الابلاغ عن اي مشكله تواجهها في الموقع</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>

<script>

// Get a reference to the search input fields
const searchInput1 = document.getElementById('search-navbar1');
const searchInput2 = document.getElementById('search-navbar2');

// Add event listeners to the search input fields
searchInput1.addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
    // Get the search query from the input field
    const query = searchInput1.value.trim();

    // Redirect to the search results page with the query as a parameter
    window.location.href = '/medicinesearch?query=' + encodeURIComponent(query);
  }
});

searchInput2.addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
    // Get the search query from the input field
    const query = searchInput2.value.trim();

    // Redirect to the search results page with the query as a parameter
    window.location.href = '/medicinesearch?query=' + encodeURIComponent(query);
  }
});



const searchInput = document.getElementById('search-navbar1');
    const autocompleteResults = document.getElementById('autocomplete-results1');

    // List of autocomplete suggestions
    const suggestions = [' ', 'Librax', 'Lisinopril', 'aspirin'];

    // Function to update the autocomplete results
    function updateAutocompleteResults() {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredSuggestions = suggestions.filter(suggestion =>
            suggestion.toLowerCase().startsWith(searchTerm)
        );

        // Clear previous results
        autocompleteResults.innerHTML = '';

        // Add filtered suggestions to the results
        filteredSuggestions.forEach(suggestion => {
            const suggestionElement = document.createElement('div');
            suggestionElement.textContent = suggestion;
            suggestionElement.classList.add('p-2', 'cursor-pointer');

            suggestionElement.addEventListener('click', () => {
                searchInput.value = suggestion;
                autocompleteResults.innerHTML = '';
            });

            autocompleteResults.appendChild(suggestionElement);
        });

        // Show/hide the autocomplete results
        if (filteredSuggestions.length > 0) {
            autocompleteResults.classList.remove('hidden');
        } else {
            autocompleteResults.classList.add('hidden');
        }
    }

    
</script>
    <!-- -----------------------------------------footer--------------------------------------------------------- -->
    <footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">الصفحات الرئيسيه</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="index" class=" hover:underline">الصفحه الرئيسيه</a>
                </li>
                <li class="mb-4">
                    <a href="aboutsus" class="hover:underline">عنا</a>
                </li>
                <li class="mb-4">
                    <a href="medicinecategory" class="hover:underline">فئات الأدوية</a>
                </li>
                <li class="mb-4">
                    <a href="q&a" class="hover:underline">الاسئله الشائعه</a>
                </li>

            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">صفحات التعارض</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="foodinteraction" class="hover:underline">التعارض مع الاطعمه</a>
                </li>
                <li class="mb-4">
                    <a href="ilnessinteraction" class="hover:underline">التعارض مع الأمراض المزمنه</a>
                </li>
                <li class="mb-4">
                    <a href="medicineinteraction" class="hover:underline">التعارض مع الأدوية الأخرى</a>
                </li>

            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">الصفحات الجانبية</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="feedback-sideeffects" class="hover:underline">الابلاغ عن اعراض جانبيه</a>
                </li>
                <li class="mb-4">
                    <a href="feedback-website" class="hover:underline">الابلاغ عن مشكله في الموقع</a>
                </li>
                <li class="mb-4">
                    <a href="advancedsearch" class="hover:underline">البحث المتقدم</a>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">©  <a href="/">موقع الأدوية الشاملة</a>٢٠٢٤ كل الحقوق محفوظه
        </span>
       
      </div>
    </div>
</footer>






<!-- scripts -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>


</body>
</html>