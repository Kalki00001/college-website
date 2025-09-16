
@extends('layouts.department')

@section('title', 'Faculty')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-palepink-600/90 text-black-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-black font-bold mb-4">Faculty Profile</h1>
            <p class="text-xl text-black-100">Meet Our Distinguished Faculty</p>
        </div>
    </div>
</section>

<!-- Faculty Categories -->
<section class="py-16 bg-white/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty Categories</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our faculty members are categorized based on their expertise and roles within the department.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Professors</h3>
                <div class="text-3xl font-bold text-blue-600">5+</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-graduate text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Associate Professors</h3>
                <div class="text-3xl font-bold text-green-600">10</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Assistant Professors</h3>
                <div class="text-3xl font-bold text-purple-600">10</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-teacher text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Lecturers</h3>
                <div class="text-3xl font-bold text-red-600">5</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Faculty -->
<section class="py-16 bg-white/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Featured Faculty</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet some of our distinguished faculty members who are leading experts in their fields.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Faculty Member 1 -->
            <div class="bg-gradient-to-br from-purple-200 to-blue-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/faculty/f.jpg') }}" alt="Firoz Khan" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Mr. Firoz Khan</h3>
                    <p class="text-blue-600 font-semibold">Asst.Professor & HoD</p>
                    <p class="text-gray-600 text-sm">Information Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">Ph.D.</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Machine Learning</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Deep Learning</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">NLP</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>firozk@gmu.ac.in </p>
                    <p><i class="fas fa-phone mr-2"></i>+91 8105093624</p>
                </div>
                <!-- <a href="#" class="w-full bg-pink-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>
            <!-- Faculty Member 2 -->
            <div class="bg-gradient-to-br from-pink-200 to-yellow-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-pink-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/faculty/va.jpg') }}" alt="Dr. Sreevani Maddukuri" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Dr Sreevani Maddukuri</h3>
                    <p class="text-pink-600 font-semibold">Professor</p>
                    <p class="text-gray-600 text-sm">Data Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">Ph.D. </p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Natural Language Processing</span>
                        <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Computer Vision</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>sreevanim.fet.scst@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 8790018470</p>
                </div>
                <!-- <a href="#" class="w-full bg-pink-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-pink-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 3 -->
            <div class="bg-gradient-to-br from-purple-200 to-blue-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/faculty/Im.jpg') }}" alt="Imran Khan" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Mr. Imran Khan</h3>
                    <p class="text-blue-600 font-semibold">Assistant Professor </p>
                    <p class="text-gray-600 text-sm">Data Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">M.Tech,(PhD)</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Resource person for FDP on Wireshark </span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Co-Coordinator for ATAL FDP on cybersecurity</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Resource person for varios student training program like Python, Java, Data strutures, C programming,</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>imrank@gmit.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 8073109504</p>
                </div>
                <!-- <a href="#" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 4 -->
            <div class="bg-gradient-to-br from-purple-200 to-blue-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="{{ asset('images/faculty/as.jpg') }}" alt="Ashwin  G T" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Mrs. Ashwini G T </h3>
                    <p class="text-green-600 font-semibold">Assistant Professor</p>
                    <p class="text-gray-600 text-sm">Data Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">M.Tech,(PhD)</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Served as the Co-Coordinator for the Online ATAL FDP on Advancing Frontiers in Supercomputing, AI, and Quantum Computing Innovations, Applications, and Integration at GM Institute of Technology from 9th December 2024 to 14th December 2024, and successfully secured a fund of rupees 1lakh for the event </span>
                
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>ashwinigt.fet.scst@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 9739630606</p>
                </div>
                <!-- <a href="#" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 5 -->
            <div class="bg-gradient-to-br from-purple-200 to-blue-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="{{ asset('images/faculty/ya.jpg') }}" alt="Yashodha M S" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Ms. Yashodha M S</h3>
                    <p class="text-purple-600 font-semibold">Assistant Professor</p>
                    <p class="text-gray-600 text-sm">Data Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">MCA</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Big Data</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Analytics</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Visualization</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>yasodams.fet.scst.ise@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 7676544885</p>
                </div>
                <!-- <a href="#" class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 6 -->
            
            <div class="bg-gradient-to-br from-yellow-200 to-orange-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="{{ asset('images/faculty/ja.jpg') }}" alt="Jayalakshmi" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Ms. Jayalakshmi S N</h3>
                    <p class="text-yellow-600 font-semibold">Tutor</p>
                    <p class="text-gray-600 text-sm">Data science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">B.E(CS) </p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Neural Networks</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Robotics</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>jayalaxmin.fet.scst.ise@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 9620934106</p>
                </div>
                <!-- <a href="#" class="w-full bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 7 -->
            <div class="bg-gradient-to-br from-red-200 to-pink-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-red-400 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="{{ asset('images/faculty/ma.jpg') }}" alt="Manoj" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Mr. Manoj P</h3>
                    <p class="text-red-600 font-semibold">Tutor </p>
                    <p class="text-gray-600 text-sm">Data science </p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm"> B.E(TCE)</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Cloud Security</span>
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">IoT Security</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>manojp.fet.scst.ise@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 9886529313</p>
                </div>
                <!-- <a href="#" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 8 -->
            <div class="bg-gradient-to-br from-green-200 to-teal-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-teal-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="{{ asset('images/faculty/a.jpg') }}" alt="Ananya" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Mrs. Ananya H Doddagoudar</h3>
                    <p class="text-green-600 font-semibold">Tutor </p>
                    <p class="text-gray-600 text-sm">Data Science</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">B.E(ECE) </p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Predictive Analytics</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Data Mining</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>ananyahdoddagoudar.fet.scst@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 9972035565</p>
                </div>
                <!-- <a href="#" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>

            <!-- Faculty Member 9 -->
            <div class="bg-gradient-to-br from-purple-200 to-blue-100 p-6 rounded-xl shadow-lg card-hover">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                      <img src="{{ asset('images/faculty/que.jpg') }}" alt="Ms. Ramya B N" class="object-cover w-24 h-24 rounded-full">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Ms. Ramya B N </h3>
                    <p class="text-indigo-600 font-semibold">Assistant Professor </p>
                    <p class="text-gray-600 text-sm">Data Science </p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Education:</h4>
                    <p class="text-gray-600 text-sm">M.Tech(DE)</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Research Interests:</h4>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs">Agile Methods</span>
                        <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs">Software Testing</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mb-4">
                    <p><i class="fas fa-envelope mr-2"></i>ramyaannigere.fet.scst@gmu.ac.in</p>
                    <p><i class="fas fa-phone mr-2"></i>+91 </p>
                </div>
                <!-- <a href="#" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 text-center block">
                    View Profile
                </a> -->
            </div>
        </div>
    </div>
</section>
 



        <!-- Faculty by Specialization -->
        <section class="py-16 bg-white/70">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty by Specialization</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our faculty members specialize in various areas of computer science and technology.
                </p>
            </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            

          

            <!-- Data Science -->
            <div class="bg-purple-50/80 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-chart-bar text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Data Science</h3>
                </div>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Mr. Firoz Khan (Professor & HoD)</li>
                    <li>• Dr Sreevani Maddukuri (Professor)</li>
                    <li>• Mr. Imran Khan (Assistant Professor)</li>
                    <li>• Mrs. Ashwini G T (Assistant Professor)</li>
                    <li>• Ms. Yashodha M S (Assistant Professor)</li>
                    <li>• Ms. Ramya B N (Assistant Professor)</li>
                    <li>• Ms. Jayalakshmi S N (Tutor)</li>
                    <li>• Mr. Manoj P (Tutor)</li>
                    <li>• Mrs. Ananya H Doddagoudar (Tutor)</li>
                </ul>
            </div>

            <!-- Software Engineering -->
            <div class="bg-red-50/80 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-code text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Software Engineering</h3>
                </div>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Mr. Firoz Khan (Professor & HoD)</li>
                    <li>• Dr Sreevani Maddukuri (Professor)</li>
                    <li>• Mr. Imran Khan (Assistant Professor)</li>
                    <li>• Mrs. Ashwini G T (Assistant Professor)</li>
                    <li>• Ms. Yashodha M S (Assistant Professor)</li>
                    <li>• Ms. Ramya B N (Assistant Professor)</li>
                    <li>• Ms. Jayalakshmi S N (Tutor)</li>
                    <li>• Mr. Manoj P (Tutor)</li>
                    <li>• Mrs. Ananya H Doddagoudar (Tutor)</li>
                </ul>
            </div>

            <!-- Computer Networks -->
            <div class="bg-yellow-50/80 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-network-wired text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Computer Networks</h3>
                </div>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Mr. Firoz Khan (Professor & HoD)</li>
                    <li>• Dr Sreevani Maddukuri (Professor)</li>
                    <li>• Mr. Imran Khan (Assistant Professor)</li>
                    <li>• Mrs. Ashwini G T (Assistant Professor)</li>
                    <li>• Ms. Yashodha M S (Assistant Professor)</li>
                    <li>• Ms. Ramya B N (Assistant Professor)</li>
                    <li>• Ms. Jayalakshmi S N (Tutor)</li>
                    <li>• Mr. Manoj P (Tutor)</li>
                    <li>• Mrs. Ananya H Doddagoudar (Tutor)</li>
                </ul>
            </div>

            <!-- Human-Computer Interaction -->
            <div class="bg-indigo-50/80 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-mouse-pointer text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">HCI & UX</h3>
                </div>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Mr. Firoz Khan (Professor & HoD)</li>
                    <li>• Dr Sreevani Maddukuri (Professor)</li>
                    <li>• Mr. Imran Khan (Assistant Professor)</li>
                    <li>• Mrs. Ashwini G T (Assistant Professor)</li>
                    <li>• Ms. Yashodha M S (Assistant Professor)</li>
                    <li>• Ms. Ramya B N (Assistant Professor)</li>
                    <li>• Ms. Jayalakshmi S N (Tutor)</li>
                    <li>• Mr. Manoj P (Tutor)</li>
                    <li>• Mrs. Ananya H Doddagoudar (Tutor)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Faculty Achievements -->
<section class="py-16 bg-white/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Faculty Achievements</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our faculty members have received numerous awards and recognition for their contributions to computer science.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/80 p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">10+</div>
                <div class="text-gray-600">Research Papers Published</div>
            </div>
            <div class="bg-white/80 p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">10</div>
                <div class="text-gray-600">Patents Filed</div>
            </div>
            <div class="bg-white/80 p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">5+</div>
                <div class="text-gray-600">Awards Received</div>
            </div>
            <div class="bg-white/80 p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-red-600 mb-2">10+</div>
                <div class="text-gray-600">PhD Students Guided</div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Faculty -->
<section class="py-16 bg-white/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Our Faculty</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Interested in collaborating with our faculty or have questions about their research? 
                Feel free to reach out to them directly.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:faculty@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email Faculty
                </a>
                <a href="{{ route('department.research') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-flask mr-2"></i>View Research
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
