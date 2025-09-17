<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Department of Data Science') - {{ config('app.name', 'University') }}</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- AOS Animation CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">


    <!-- Custom Styles -->
    <style>
        .gradient-bg {
           background: linear-gradient(135deg, #3b82f6, #9333ea);
        }
        body {
        font-family: 'Orbitron', sans-serif;  /* change Orbitron to any chosen font */
        font-size: 18px;
        line-height: 1.5;
        color: #e0e0e0; /* lighter text looks more hacker-style */
        background-color: #0a0a0a; /* optional dark background */
        }


        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        h1,h2,h3,h4,h5,h6 {
            font-family: 'Share Tech Mono', monospace;
            letter-spacing: 4px;
            color: #080808b3;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #3b82f6;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;

        /* Floating Animation for Title */
       .hero-title {
        animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
        }

        }
    </style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-cover bg-center bg-no-repeat"
      style="background-image: url('{{ asset('images/backgrounds/background.jpeg') }}');">

    <!-- Floating Logo -->
    <div class="fixed bottom-6 right-8 z-50 bg-grey/90 rounded-full shadow-2xl p-2 ring-4 ring-blue-300">
        <a href="{{ route('department.index') }}">
            <img src="{{ asset('images/college logo.jpg') }}" alt="College Logo" class="h-20 w-20 object-contain rounded-full cursor-pointer">
        </a>
    </div>

    <!-- Header -->
            <header class="bg-gradient-to-r from-blue-400 to-palepink-600 shadow-lg py-1 md:py-4">  <!-- sticky top-0 z-50 -->

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('department.index') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/college logo.jpg') }}" alt="College Logo" class="h-12 w-auto rounded-lg shadow">
            <div>
                <span class="block text-lg font-bold leading-tight" style="color: #343232dd;">Department of Data science</span>
                <span class="block text-xs text-black-500" style="color: #050505ff;">Excellence in Education &amp; Research</span>
            </div>
            </a>
        </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('department.index') }}" class="nav-link {{ request()->routeIs('department.index') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Home
                    </a>
                    <a href="{{ route('department.about') }}" class="nav-link {{ request()->routeIs('department.about') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        About
                    </a>
                    <a href="{{ route('department.faculty') }}" class="nav-link {{ request()->routeIs('department.faculty') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Faculty
                    </a>
                    <a href="{{ route('department.programs') }}" class="nav-link {{ request()->routeIs('department.programs') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Programs
                    </a>
                    <a href="{{ route('department.research') }}" class="nav-link {{ request()->routeIs('department.research') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Research
                    </a>
                    <a href="{{ route('department.placement') }}" class="nav-link {{ request()->routeIs('department.placement') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Placement
                    </a>
                    <a href="{{ route('department.alumni') }}" class="nav-link {{ request()->routeIs('department.alumni') ? 'active text-blue-600' : 'text-gray-700 hover:text-red-600' }} font-medium">
                        Alumni
                    </a>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-data="{ mobileMenuOpen: false }" x-show="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('department.index') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Home</a>
                <a href="{{ route('department.about') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">About</a>
                <a href="{{ route('department.faculty') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Faculty</a>
                <a href="{{ route('department.programs') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Programs</a>
                <a href="{{ route('department.research') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Research</a>
                <a href="{{ route('department.placement') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Placement</a>
                <a href="{{ route('department.alumni') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-yellow-50 rounded-md">Alumni</a>
            </div>
        </div>
    </header>

    

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Featured Content Block -->
    <div class="block-content block-content--type-featured-content-custom block-content--25142 block-content--view-mode-full block-content--with-header bg-gradient-to-r from-yellow-100 via-pink-100 to-blue-100 rounded-xl shadow-lg mx-auto my-8 max-w-4xl p-8">
        <h2 class="text-2xl font-bold mb-2 text-blue-900">Featured: AI &amp; Machine Learning Lab</h2>
        <p class="text-gray-700 mb-2">
            Our state-of-the-art AI and Machine Learning lab is now open for students and researchers.
        </p>
        <a href="{{ route('department.research') }}" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Learn More</a>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-purple-900 via-yellow-900 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Department Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                           <img src="{{ asset('images/logo.png') }}" alt="College Logo" class="h-12 w-auto rounded-lg shadow">
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-bold" style="color: #fb7624ff;">Department of Data Science</h3>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Committed to excellence in Data science education, research, and innovation. 
                        Preparing the next generation of technology leaders.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/p/GM-University-61554085324048/?locale=nl_BE" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="https://twitter.com/GMUniversity" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://share.google/Ic7C1q9pKOCkQZJ6r" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/gm_university_gmu/?hl=en" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" style="color: #fb7624ff;">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('department.about') }}" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="{{ route('department.programs') }}" class="text-gray-300 hover:text-white">Programs</a></li>
                        <li><a href="{{ route('department.faculty') }}" class="text-gray-300 hover:text-white">Faculty</a></li>
                        <li><a href="{{ route('department.research') }}" class="text-gray-300 hover:text-white">Research</a></li>
                        <li><a href="{{ route('department.admission') }}" class="text-gray-300 hover:text-white">Admission</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" style="color: #fb7624ff;">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>G M University, Davanagere</p>
                        <p><i class="fas fa-phone mr-2"></i>+91 6364259993</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@gmu.ac.in</p>
                        <p><i class="fas fa-globe mr-2"></i>www.gmu.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Department of Data Science. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vanilla Tilt for 3D effect -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".tilt"), {
        max: 25,    // maximum tilt
        speed: 400, // speed of tilt
        glare: true, // optional glare effect
        "max-glare": 0.3
    });
</script>

<!-- AOS Animation JS -->
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Apply AOS to headings
      document.querySelectorAll("h1, h2, h3, h4, h5, h6").forEach(el => {
          if (!el.hasAttribute("data-aos")) {
              el.setAttribute("data-aos", "fade-up");
          }
      });

      // Apply AOS to paragraphs
      document.querySelectorAll("p").forEach(el => {
          if (!el.hasAttribute("data-aos")) {
              el.setAttribute("data-aos", "fade-up");
          }
      });

      // ✅ Now initialize AFTER attributes are added
      AOS.init({
          once: true,
          duration: 1000,
          easing: 'ease-in-out'
      });
  });
</script>




</body>
</html>
