<footer class="text-gray-600 body-font bg-grayFooter">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">MUNICIPALITE</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Le Maire</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Conseil Municipal</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Finances</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">COMMUNE</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Histoire</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Quartiers</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Organisation Administrative</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">DEMARCHES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Certificat De Mariage</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Bulletin De Naissance</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Acte De Naissance</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Certificat De Vie Collective</a>
            </li>
            <li>
                <a class="text-gray-600 hover:text-gray-800">Certificat De Deces</a>
              </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">NEWSLETTER</h2>
          <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
              <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">VALIDER</button>
          </div>

        </div>
      </div>
    </div>
    <div class="bg-primaryColor">
      <div class="container px-5 py-6 mx-auto flex justify-evenly items-center sm:flex-row flex-col">

        {{-- Insertion du logo --}}

        <p class="flex font-medium items-center md:justify-start justify-center text-gray-900">
          
          <img src="{{ asset('images/Logo.png') }}" alt="Le logo de la mairie" class="w-1/5">

          <span class="ml-3 text-xl">SamaGokh</span>

        </p>

        {{-- Insertion du copyright --}}

        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">
            © 2022 SamaGokh. Tous droits reserves
        </p>

        {{-- Les reseaux sociaux --}}

        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>

      </div>
    </div>
  </footer>