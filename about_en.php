<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Fresh Apples</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'apple-red': '#DC2626',
                        'apple-dark-red': '#991B1B',
                        'apple-light-red': '#FEE2E2',
                        'apple-orange': '#EA580C'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #DC2626 0%, #EA580C 100%);
        }
        .apple-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .apple-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.3);
        }
        
        .apple-circle {
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .apple-gradient-container {
            position: relative;
            display: inline-block;
        }
        
        .apple-gradient-container::before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, 
                rgba(220, 38, 38, 0.8) 0%, 
                rgba(234, 88, 12, 0.6) 25%, 
                rgba(220, 38, 38, 0.4) 50%, 
                rgba(234, 88, 12, 0.2) 75%, 
                transparent 100%);
            border-radius: 50%;
            z-index: -1;
            animation: gradientRotate 4s linear infinite;
        }
        
        @keyframes gradientRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .apple-circle:hover {
            transform: scale(1.05);
        }
        
        .apple-blend {
            filter: drop-shadow(0 0 15px rgba(220, 38, 38, 0.3));
        }
        
        .about-hero {
            position: relative;
            overflow: hidden;
        }
        
        .about-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(220, 38, 38, 0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #DC2626, #EA580C);
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: -4px;
            top: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #DC2626;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #DC2626;
        }
        
        .timeline-item:last-child::before {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Apple Logo" class="h-10 w-10 mr-3 apple-circle">
                    </div>
                    <span class="text-2xl font-bold text-apple-red">Fresh Apples</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="index_en.php" class="text-gray-700 hover:text-apple-red transition-colors">Home</a>
                    <a href="products_en.php" class="text-gray-700 hover:text-apple-red transition-colors">Products</a>
                    <a href="about_en.php" class="text-apple-red font-semibold">About</a>
                    <a href="index_en.php#contact" class="text-gray-700 hover:text-apple-red transition-colors">Contact</a>
                    <a href="index.php" class="text-gray-700 hover:text-apple-red transition-colors">한국어</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-apple-red">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
                    <a href="index_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Home</a>
                    <a href="products_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Products</a>
                    <a href="about_en.php" class="block px-3 py-2 text-apple-red font-semibold">About</a>
                    <a href="index_en.php#contact" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Contact</a>
                    <a href="index.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">한국어</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        Our<br>
                        <span class="text-apple-light-red">Story</span>
                    </h1>
                    <p class="text-xl mb-8 text-red-100">
                        We have been dedicated to apple cultivation for 30 years, producing the highest quality apples 
                        through harmony with nature.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#our-story" class="bg-white text-apple-red px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-center">
                            Learn More
                        </a>
                        <a href="index_en.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-apple-red transition-colors text-center">
                            Back to Home
                        </a>
                    </div>
                </div>
                <div class="flex justify-center about-hero">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Apple Farm" class="w-80 h-80 apple-circle apple-blend">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="our-story" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        We have been dedicated to apple cultivation for 30 years, producing the highest quality apples 
                        through harmony with nature.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Our apples, cultivated in a clean environment with organic methods, 
                        satisfy both health and taste simultaneously.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-apple-red mb-2">30+</div>
                            <div class="text-gray-600">Years of Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-apple-red mb-2">10,000+</div>
                            <div class="text-gray-600">Satisfied Customers</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Apple Farm" class="w-96 h-96 apple-circle apple-blend shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Journey</h2>
                <p class="text-xl text-gray-600">The path we've walked together with nature</p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="space-y-12">
                    <div class="timeline-item">
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-apple-red mr-4">1994</span>
                                <h3 class="text-xl font-semibold text-gray-900">Company Founded</h3>
                            </div>
                            <p class="text-gray-600">Started apple cultivation in Yeongwol-gun, Gangwon-do with a small orchard.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-apple-red mr-4">2000</span>
                                <h3 class="text-xl font-semibold text-gray-900">Organic Certification</h3>
                            </div>
                            <p class="text-gray-600">Obtained organic certification and expanded cultivation area to 10 hectares.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-apple-red mr-4">2010</span>
                                <h3 class="text-xl font-semibold text-gray-900">Premium Brand Launch</h3>
                            </div>
                            <p class="text-gray-600">Launched 'Fresh Apples' brand and started direct sales to consumers.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-apple-red mr-4">2020</span>
                                <h3 class="text-xl font-semibold text-gray-900">Digital Transformation</h3>
                            </div>
                            <p class="text-gray-600">Launched online platform and expanded product line to processed products.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-apple-red mr-4">2024</span>
                                <h3 class="text-xl font-semibold text-gray-900">Future Vision</h3>
                            </div>
                            <p class="text-gray-600">Continuing to innovate and provide the highest quality apples to our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
                <p class="text-xl text-gray-600">The principles that guide our every decision</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Nature-Friendly</h3>
                    <p class="text-gray-600">We respect nature and cultivate apples in harmony with the environment.</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Quality First</h3>
                    <p class="text-gray-600">We never compromise on quality and always strive for excellence.</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Customer Satisfaction</h3>
                    <p class="text-gray-600">Customer satisfaction is our top priority and driving force.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Team</h2>
                <p class="text-xl text-gray-600">Meet the passionate people behind Fresh Apples</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Farm Manager" class="w-32 h-32 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Kim Min-soo</h3>
                        <p class="text-apple-red font-medium mb-2">Farm Manager</p>
                        <p class="text-gray-600">30 years of experience in apple cultivation. Expert in organic farming methods.</p>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Quality Control Manager" class="w-32 h-32 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Park Ji-yeon</h3>
                        <p class="text-apple-red font-medium mb-2">Quality Control Manager</p>
                        <p class="text-gray-600">Ensures every apple meets our high quality standards through rigorous inspection.</p>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Technology Development Manager" class="w-32 h-32 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Lee Seung-hyun</h3>
                        <p class="text-apple-red font-medium mb-2">Technology Development Manager</p>
                        <p class="text-gray-600">Develops new cultivation techniques and product innovations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Farm Information Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Farm Information</h2>
                <p class="text-xl text-gray-600">Learn about our farm and cultivation environment</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Location</h3>
                                <p class="text-gray-600">Yeongwol-gun, Gangwon-do, South Korea<br>Altitude: 300-500m above sea level</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Farm Size</h3>
                                <p class="text-gray-600">Total area: 25 hectares<br>Apple orchard: 20 hectares</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Certifications</h3>
                                <p class="text-gray-600">Organic certification (2000)<br>GAP certification (2015)<br>HACCP certification (2020)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Climate</h3>
                                <p class="text-gray-600">Temperate climate with four distinct seasons<br>Ideal conditions for apple cultivation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Farm Landscape" class="w-96 h-96 apple-circle apple-blend shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Apple Logo" class="h-8 w-8 mr-2 apple-circle">
                        </div>
                        <span class="text-xl font-bold">Fresh Apples</span>
                    </div>
                    <p class="text-gray-400">Discover nature's gift, premium apples.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">inventory_2</span>
                        Products
                    </h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products_en.php" class="hover:text-white transition-colors">Fresh Apples</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products_en.php#processed-products" class="hover:text-white transition-colors">Processed Products</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products_en.php#gift-sets" class="hover:text-white transition-colors">Gift Sets</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">business</span>
                        Company
                    </h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="about_en.php" class="hover:text-white transition-colors">About</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="index_en.php#contact" class="hover:text-white transition-colors">Contact</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#" class="hover:text-white transition-colors">Careers</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">share</span>
                        Follow
                    </h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="material-icons text-2xl">facebook</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="material-icons text-2xl">twitter</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="material-icons text-2xl">pinterest</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Fresh Apples. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
