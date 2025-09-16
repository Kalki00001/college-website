@extends('layouts.department')

@section('title', 'Home')

@section('content')
<!-- Hero Section with College Background -->
<section class="relative bg-cover bg-center bg-no-repeat text-white min-h-[600px]" 
         style="background-image: url('{{ asset('images/gmu.jpeg') }}');">
    <div class="bg-black/50 min-h-[700px] flex items-center"> <!-- overlay for readability and vertical centering -->
        <div class="w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Department of Data Science
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">
                        Excellence in Education, Research & Innovation
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('department.about') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                            Learn More
                        </a>
                        <a href="{{ route('department.programs') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                            Our Programs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Quick Navigation -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Explore Our Department</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- About -->
            <a href="{{ route('department.about') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-info-circle text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">About Us</h3>
                    <p class="text-gray-600 text-sm">Learn about our department's history, mission, and values</p>
                </div>
            </a>

            <!-- Faculty -->
            <a href="{{ route('department.faculty') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Faculty</h3>
                    <p class="text-gray-600 text-sm">Meet our distinguished faculty members and researchers</p>
                </div>
            </a>

            <!-- Programs -->
            <a href="{{ route('department.programs') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Programs</h3>
                    <p class="text-gray-600 text-sm">Discover our academic programs and courses</p>
                </div>
            </a>

            <!-- Research -->
            <a href="{{ route('department.research') }}" class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-flask text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Research</h3>
                    <p class="text-gray-600 text-sm">Explore our research initiatives and publications</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="py-16 bg-gray-50/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Department at a Glance</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">10+</div>
                <div class="text-gray-600">Faculty Members</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">100+</div>
                <div class="text-gray-600">Students</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">20+</div>
                <div class="text-gray-600">Research Papers</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-red-600 mb-2">95%</div>
                <div class="text-gray-600">Placement Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Latest News & Updates</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                    <!-- Image with click-to-enlarge (no modal, just CSS) -->
                    <img 
                        src="{{ asset('images/news/gmu_promo.jpg') }}" 
                        alt="gmu_promo" 
                        class="transition-transform duration-300 ease-in-out transform hover:scale-150 rounded-lg object-cover w-full h-full cursor-zoom-in"
                    />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Gmu promotion drive</h3>
                <p class="text-gray-600 text-sm mb-4">Team visits PU Colleges in harpanahalli</p>
                <!-- <span class="text-blue-600 text-sm font-medium">Read More →</span> -->
            </div>
            <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                 <img src="{{ asset('images/news/gmu_volleyball.jpg') }}"
                  alt="gmu_volleyball" 
                  class="transition-transform duration-300 ease-in-out transform hover:scale-150 rounded-lg object-cover w-full h-full cursor-zoom-in" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Taluk-level volleyball games</h3>
                <p class="text-gray-600 text-sm mb-4">Our department hosted the annual Taluk-level Volleyball Games, bringing together students from various colleges to compete in a spirit of sportsmanship and teamwork. The event fostered camaraderie, healthy competition, and showcased outstanding athletic talent.</p>
                <!-- <span class="text-blue-600 text-sm font-medium">Read More →</span> -->
            </div>
            <div class="card-hover bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                <img src="{{ asset('images/news/new_batch.jpg') }}" 
                alt="gmu_new_batch" 
                class="transition-transform duration-300 ease-in-out transform hover:scale-150 rounded-lg object-cover w-full h-full cursor-zoom-in" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">New Batch Announcement</h3>
                <p class="text-gray-600 text-sm mb-4">We are excited to welcome our new batch of students! Embark on your academic journey with us and become part of a vibrant, innovative, and supportive community. Wishing you all a successful and enriching experience ahead.</p>
                <!-- <span class="text-blue-600 text-sm font-medium">Read More →</span> -->
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 gradient-bg/50 text-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-6" style="color: #0b0401ff;">Ready to Join Our Community?</h2>
        <p class="text-xl mb-8 text-blue-100">Apply now and be part of our innovative computer science program</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('department.admission') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                Apply Now
            </a>
            <a href="{{ route('department.about') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
