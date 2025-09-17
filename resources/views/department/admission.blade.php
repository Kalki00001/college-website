@extends('layouts.department')

@section('title', 'Admission Activities')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-400 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Admission Activities</h1>
            <p class="text-xl text-blue-100">Join Our Computer Science Community</p>
        </div>
    </div>
</section>

<!-- Admission Overview -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Process</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We welcome talented students who are passionate about computer science and 
                    technology. Our admission process is designed to identify students with 
                    strong academic potential and a genuine interest in the field.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We offer various programs at undergraduate, graduate, and doctoral levels, 
                    each designed to provide comprehensive education and research opportunities.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#admission-requirements" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Admission Requirements
                    </a>
                    <a href="#admission-coordinator" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                        Admission Coordinator
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-blue-600 text-8xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Admission Statistics -->
<section class="py-16 bg-gray-50/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Statistics</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our admission statistics reflect the competitive nature of our programs and the quality of our students.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">5000+</div>
                <div class="text-gray-600">Applications Received</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">300</div>
                <div class="text-gray-600">Students Admitted</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">6%</div>
                <div class="text-gray-600">Acceptance Rate</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-red-600 mb-2">95%</div>
                <div class="text-gray-600">Student Retention Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Offered -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Programs Offered</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We offer comprehensive programs designed to prepare students for successful careers in computer science.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Undergraduate Programs -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Undergraduate Programs</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Bachelor of Computer Science (4 years)</li>
                    <li>• Bachelor of Software Engineering (4 years)</li>
                    <li>• Bachelor of Information Technology (4 years)</li>
                </ul>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Intake:</strong> 200 students per year</p>
                    <p><strong>Duration:</strong> 4 years</p>
                    <p><strong>Eligibility:</strong> 10+2 with Mathematics</p>
                </div>
                <a href="#" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-center block">
                    Apply Now
                </a>
            </div>

            <!-- Graduate Programs -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user-graduate text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Graduate Programs</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Master of Computer Science (2 years)</li>
                    <li>• Master of Software Engineering (2 years)</li>
                    <li>• Master of Data Science (2 years)</li>
                </ul>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Intake:</strong> 100 students per year</p>
                    <p><strong>Duration:</strong> 2 years</p>
                    <p><strong>Eligibility:</strong> Bachelor's in CS/IT</p>
                </div>
                <a href="#" class="w-full bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 text-center block">
                    Apply Now
                </a>
            </div>

            <!-- Doctoral Programs -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200 card-hover">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user-tie text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Doctoral Programs</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• PhD in Computer Science (3-5 years)</li>
                    <li>• PhD in Software Engineering (3-5 years)</li>
                    <li>• PhD in Information Technology (3-5 years)</li>
                </ul>
                <div class="text-sm text-gray-600 mb-4">
                    <p><strong>Intake:</strong> 50 students per year</p>
                    <p><strong>Duration:</strong> 3-5 years</p>
                    <p><strong>Eligibility:</strong> Master's in CS/IT</p>
                </div>
                <a href="#" class="w-full bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300 text-center block">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Admission Requirements -->
<section id="admission-requirements" class="py-16 bg-gray-50/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Requirements</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Detailed requirements for each program level to help you prepare your application.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Undergraduate Requirements -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Undergraduate Programs</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Academic Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• 10+2 or equivalent with minimum 60% marks</li>
                            <li>• Mathematics as a compulsory subject</li>
                            <li>• Physics and Chemistry recommended</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Entrance Examination:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• University entrance test (UET)</li>
                            <li>• JEE Main scores accepted</li>
                            <li>• Minimum 50% in entrance exam</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Additional Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Statement of purpose</li>
                            <li>• Letters of recommendation (2)</li>
                            <li>• English proficiency test (if applicable)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Graduate Requirements -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Graduate Programs</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Academic Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Bachelor's degree in CS/IT or related field</li>
                            <li>• Minimum GPA of 3.0/4.0 or 60%</li>
                            <li>• Strong foundation in programming</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Entrance Examination:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Graduate entrance test (GET)</li>
                            <li>• GATE scores accepted</li>
                            <li>• GRE scores for international students</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Additional Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Research proposal (for thesis track)</li>
                            <li>• Letters of recommendation (3)</li>
                            <li>• Statement of purpose</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Process</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Our streamlined admission process ensures a smooth experience for all applicants.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-blue-600 font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Application</h3>
                <p class="text-gray-600 text-sm">Submit online application with required documents</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-green-600 font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Entrance Exam</h3>
                <p class="text-gray-600 text-sm">Appear for entrance examination or submit test scores</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-purple-600 font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Interview</h3>
                <p class="text-gray-600 text-sm">Personal interview and technical assessment</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-red-600 font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Admission</h3>
                <p class="text-gray-600 text-sm">Receive admission offer and complete enrollment</p>
            </div>
        </div>
    </div>
</section>

<!-- Admission Coordinator -->
<section id="admission-coordinator" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Admission Coordinator</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Meet our Admission Coordinator who oversees all admission activities and provides guidance to prospective students.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. James Taylor</h3>
                        <p class="text-green-600 font-semibold mb-4">Admission Coordinator</p>
                        <p class="text-gray-600 mb-4">
                            Dr. James Taylor leads our admission team and has extensive experience 
                            in student recruitment and program development. He has successfully 
                            guided thousands of students through the admission process.
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-envelope mr-2"></i>james.taylor@university.edu</p>
                            <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4573</p>
                            <p><i class="fas fa-map-marker-alt mr-2"></i>Admission Office, CS Building</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Dates -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Important Dates</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Key dates and deadlines for the admission process.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Undergraduate Dates -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Undergraduate Programs</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Application Opens</span>
                        <span class="font-semibold text-gray-900">January 1, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Application Deadline</span>
                        <span class="font-semibold text-gray-900">March 31, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Entrance Exam</span>
                        <span class="font-semibold text-gray-900">April 15, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Interview Dates</span>
                        <span class="font-semibold text-gray-900">May 1-15, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Results Declaration</span>
                        <span class="font-semibold text-gray-900">June 1, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Classes Begin</span>
                        <span class="font-semibold text-gray-900">August 1, 2024</span>
                    </div>
                </div>
            </div>

            <!-- Graduate Dates -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Graduate Programs</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Application Opens</span>
                        <span class="font-semibold text-gray-900">October 1, 2023</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Application Deadline</span>
                        <span class="font-semibold text-gray-900">December 31, 2023</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Entrance Exam</span>
                        <span class="font-semibold text-gray-900">January 15, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Interview Dates</span>
                        <span class="font-semibold text-gray-900">February 1-15, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Results Declaration</span>
                        <span class="font-semibold text-gray-900">March 1, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Classes Begin</span>
                        <span class="font-semibold text-gray-900">August 1, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Financial Aid -->
<section class="py-16 bg-gray-50/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Financial Aid & Scholarships</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We offer various financial aid options to help students pursue their education.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Merit Scholarships -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-award text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Merit Scholarships</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Full tuition waiver for top 10%</li>
                    <li>• 50% fee waiver for top 25%</li>
                    <li>• 25% fee waiver for top 50%</li>
                    <li>• Based on entrance exam scores</li>
                </ul>
            </div>

            <!-- Need-Based Aid -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-hand-holding-heart text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Need-Based Aid</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Income-based fee reduction</li>
                    <li>• Work-study programs</li>
                    <li>• Emergency financial assistance</li>
                    <li>• Family income verification required</li>
                </ul>
            </div>

            <!-- Research Assistantships -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-flask text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Research Assistantships</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Full tuition + monthly stipend</li>
                    <li>• Work on faculty research projects</li>
                    <li>• Available for graduate students</li>
                    <li>• 20 hours per week commitment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Admission Office -->
<section class="py-16 bg-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Admission Office</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Have questions about admission or need assistance with your application? 
                Contact our admission office for personalized guidance.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:admission@university.edu" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email Admission Office
                </a>
                <a href="tel:+15551234573" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    <i class="fas fa-phone mr-2"></i>Call Admission Office
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
