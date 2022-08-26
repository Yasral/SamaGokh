<x-connexion-layout>

    <section>

        <div class="flex flex-col items-center justify-center px-6 py-8 container md:h-screen mx-auto lg:py-0">

            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="{{ asset('images/SamaGokh.svg') }}" alt="logo">
                SamaGokh   
            </a>

            {{-- <div class="w-full flex justify-center"> --}}

            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-3xl xl:p-0">

                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl py-4">
                        Votre avis compte. Creez un compte 
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="#">

                        <div class="py-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nom</label>
                            <input type="text" name="name" id="name" placeholder="DIATTA" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nom utilisateur" required="">
                        </div>

                        <div class="py-5">
                            <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900">Prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Djibril" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>

                        <div class="py-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" placeholder="monemail@gmail.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>

                        <div class="py-5">
                            <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900">Telephone</label>
                            <input type="number" name="telephone" id="telephone" placeholder=".221773029099." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>

                        <div class="flex items-center justify-between py-3">

                            <div class="flex items-start">

                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                                </div>

                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500">I accept the <a class="font-medium text-primary-600 hover:underline" href="#">Terms and Conditions</a></label>
                                </div>

                            </div>

                        </div>

                        <button type="submit" class="w-full text-white bg-blue-900 hover:bg-secondaryColor focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Inscription</button>
                        
                        <p class="text-sm font-light text-gray-500">
                            Vous disposez d'un compte? <a href="#" class="font-medium text-primary-600 hover:underline">Connexion</a>
                        </p>

                    </form>
                </div>
            </div>
                
            {{-- </div> --}}
        </div>
    </section>

</x-connexion-layout>