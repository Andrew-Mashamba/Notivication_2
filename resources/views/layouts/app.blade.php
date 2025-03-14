<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>NOTIFICATIONS CENTER</title>

        <!-- Styles -->
        @livewireStyles


        <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('build/assets/app-117a17d7.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}" type="text/css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="https://cdn.tailwindcss.com"></script>




        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>


        <link
                href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
                rel="stylesheet" />
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    fontFamily: {
                        sans: ["Roboto", "sans-serif"],
                        body: ["Roboto", "sans-serif"],
                        mono: ["ui-monospace", "monospace"],
                    },
                },
                corePlugins: {
                    preflight: false,
                },
            };
        </script>

        @mapstyles

<style>
    .gradient-1 {
        height: 100vh;
        background: linear-gradient(to bottom, #DD0035, #005AA9, #FFFFFF);
    }
    .gradient-2 {
        height: 100vh;
        background: linear-gradient(to right, #DD0035, #DD0035, #FFFFFF);
    }
    .gradient-3 {
        height: 100vh;
        background: radial-gradient(circle, #DD0035, #DD0035, #DD0035);
    }
    .gradient-4 {
        height: 100vh;
        background: linear-gradient(to bottom right, #DD0035, #005AA9, #FFFFFF);
    }
    .gradient-5 {
        height: 100vh;
        background: linear-gradient(to bottom, #DD0035 0%, #DD0035 33%, #005AA9 33%, #005AA9 66%, #FFFFFF 66%, #FFFFFF 100%);
    }

    .gradient-6 {
        height: 100vh;
        background: linear-gradient(to bottom right, #DD0035, #FFFFFF, #FFFFFF, #FFFFFF);
    }

    .bg-custom {
        background-color: #DD0035;
    }
    .bg-custom-accent {
        background-color: #DD0035;
    }
    input {
        border-color: #DD0035;
    }
    .custom-text::placeholder {
        color: #DD0035;
        opacity: 1;
    }
    .yellow{
        color: #DD0035;
    }

</style>



    </head>
    <body
        class="font-inter antialiased bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >


        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <!-- Page wrapper -->
        <!-- Page wrapper -->
        <div class="flex h-screen overflow-hidden">

            @if(auth()->user()->current_team_id == 1)
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="bg-gray-50 p-2 rounded-xl mb-4">
                        <div class="bg-white p-4 rounded-xl">
                            @livewire('profile.update-password-form')
                        </div>
                    </div>
                @endif
            @else

                <livewire:sidebar.sidebar/>
                <!-- Content area -->
                <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">
                    <x-app.header />
                    <main>
                        {{ $slot }}
                    </main>

                </div>

            @endif
        </div>

        @livewireScripts

        @livewire('livewire-ui-modal')


        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/app2.js') }}"></script>
        <script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>



        <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- Add Firebase SDKs -->
        <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script> <!-- For Realtime Database -->
        <!-- Or -->
        <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-firestore.js"></script> <!-- For Firestore -->

        <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.4/firebase-app.js";
            // TODO: Add SDKs for Firebase products that you want to use
            // https://firebase.google.com/docs/web/setup#available-libraries

            // Your web app's Firebase configuration
            const firebaseConfig = {
                apiKey: "AIzaSyB9zXHdDZWlkzsAgdU_tXYeltFTESGWj-Y",
                authDomain: "collateral-manager-f7cfa.firebaseapp.com",
                projectId: "collateral-manager-f7cfa",
                storageBucket: "collateral-manager-f7cfa.appspot.com",
                messagingSenderId: "515890011500",
                appId: "1:515890011500:web:a3fd75fd476bf57ecc2749"
            };

            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
        </script>

        @mapscripts
    </body>
</html>
