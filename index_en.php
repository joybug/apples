<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Apples - Premium Apple Products</title>
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
        
        /* 원형 사과 이미지 스타일 - 색감 유지하면서 그라데이션 가장자리 */
        .apple-circle {
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            transition: all 0.3s ease;
        }
        
        /* 그라데이션 가장자리 효과를 위한 컨테이너 */
        .apple-gradient-container {
            position: relative;
            display: inline-block;
        }
        
        /* 그라데이션 가장자리 효과 */
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
        
        /* 그라데이션 회전 애니메이션 */
        @keyframes gradientRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .apple-circle:hover {
            transform: scale(1.05);
        }
        
        .apple-circle:hover + .apple-gradient-container::before {
            animation-duration: 2s;
        }
        
        /* 배경에 자연스럽게 어우러지는 효과 */
        .apple-blend {
            filter: drop-shadow(0 0 15px rgba(220, 38, 38, 0.3));
        }
        
        /* 히어로 배너 전용 스타일 - 확대 효과 제거 및 가장자리 페이드 효과 */
        .hero-apple {
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            transition: none;
        }
        
        .hero-apple:hover {
            transform: none;
        }
        
        /* 히어로 배너용 그라데이션 컨테이너 */
        .hero-gradient-container {
            position: relative;
            display: inline-block;
        }
        
        /* 히어로 배너용 가장자리 페이드 효과 */
        .hero-gradient-container::before {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            background: radial-gradient(circle, 
                rgba(220, 38, 38, 0.6) 0%, 
                rgba(220, 38, 38, 0.4) 30%, 
                rgba(220, 38, 38, 0.2) 60%, 
                rgba(220, 38, 38, 0.1) 80%, 
                transparent 100%);
            border-radius: 50%;
            z-index: -1;
            animation: none;
        }
        
        /* 히어로 배너용 블렌드 효과 */
        .hero-blend {
            filter: drop-shadow(0 0 20px rgba(220, 38, 38, 0.2));
            mask: radial-gradient(circle, 
                rgba(255, 255, 255, 1) 0%, 
                rgba(255, 255, 255, 0.9) 70%, 
                rgba(255, 255, 255, 0.7) 85%, 
                rgba(255, 255, 255, 0.3) 95%, 
                transparent 100%);
            -webkit-mask: radial-gradient(circle, 
                rgba(255, 255, 255, 1) 0%, 
                rgba(255, 255, 255, 0.9) 70%, 
                rgba(255, 255, 255, 0.7) 85%, 
                rgba(255, 255, 255, 0.3) 95%, 
                transparent 100%);
        }
        
        /* 그라데이션 배경과 자연스럽게 어우러지는 효과 */
        .apple-hero {
            position: relative;
            overflow: hidden;
        }
        
        .apple-hero::before {
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
                    <a href="#home" class="text-gray-700 hover:text-apple-red transition-colors">Home</a>
                    <a href="#products" class="text-gray-700 hover:text-apple-red transition-colors">Products</a>
                    <a href="#about" class="text-gray-700 hover:text-apple-red transition-colors">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-apple-red transition-colors">Contact</a>
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
                    <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Home</a>
                    <a href="#products" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Products</a>
                    <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">About</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">Contact</a>
                    <a href="index.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">한국어</a>
                </div>
            </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        Nature's Gift<br>
                        <span class="text-apple-light-red">Premium Apples</span>
                    </h1>
                    <p class="text-xl mb-8 text-red-100">
                        Experience the finest quality fresh apples directly. 
                        We preserve the natural taste and nutrition as nature intended.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-apple-red px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            View Products
                        </button>
                        <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-apple-red transition-colors">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="flex justify-center apple-hero">
                    <div class="hero-gradient-container">
                        <img src="apple.png" alt="Fresh Apple" class="w-80 h-80 hero-apple hero-blend">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Our Apples?</h2>
                <p class="text-xl text-gray-600">Our special efforts for the highest quality</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-apple-light-red w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Eco-Friendly Cultivation</h3>
                    <p class="text-gray-600">We preserve the natural taste by cultivating using organic methods.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-apple-light-red w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Strict Quality Control</h3>
                    <p class="text-gray-600">We ensure the highest quality through thorough inspection at each stage.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-apple-light-red w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Fresh Delivery</h3>
                    <p class="text-gray-600">We deliver fresh to customers within 24 hours after harvest.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h2>
                <p class="text-xl text-gray-600">Discover premium apples of various varieties</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Hongro Apple" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Hongro Apple</h3>
                        <p class="text-gray-600 mb-4">Popular variety known for its sweet and crisp taste</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">$15.00</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Yangkwang Apple" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Yangkwang Apple</h3>
                        <p class="text-gray-600 mb-4">Premium variety with balanced sweet and tart flavor</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">$18.00</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="Aori Apple" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Aori Apple</h3>
                        <p class="text-gray-600 mb-4">Fresh and clean taste for a healthy choice</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">$12.00</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        For 30 years, we have been dedicated to apple cultivation, 
                        producing the highest quality apples through harmony with nature.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Our apples, cultivated in a clean environment using organic methods, 
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

    <!-- Contact Section -->
    <section id="contact" class="py-20 gradient-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Contact Us</h2>
                <p class="text-xl text-red-100">Feel free to contact us anytime if you have any questions</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">contact_phone</span>
                        Contact Information
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="material-icons mr-3 text-apple-red">location_on</span>
                            <span>123 Apple Farm, Yeongwol-gun, Gangwon-do</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-icons mr-3 text-apple-red">phone</span>
                            <span>033-123-4567</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-icons mr-3 text-apple-red">email</span>
                            <span>info@freshapples.co.kr</span>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Name" class="w-full px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                        </div>
                        <div>
                            <textarea placeholder="Message" rows="4" class="w-full px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-white text-apple-red px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Send Message
                        </button>
                    </form>
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
                            <a href="#" class="hover:text-white transition-colors">Hongro Apple</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#" class="hover:text-white transition-colors">Yangkwang Apple</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#" class="hover:text-white transition-colors">Aori Apple</a>
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
                            <a href="#" class="hover:text-white transition-colors">About</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#" class="hover:text-white transition-colors">Contact</a>
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

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Message sent successfully!');
            this.reset();
        });
    </script>
</body>
</html> 