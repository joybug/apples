<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회사 소개 - Fresh Apples</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap');
        body {
            font-family: 'Noto Sans KR', sans-serif;
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
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #DC2626, #EA580C);
            transform: translateX(-50%);
        }
        
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
            text-align: right;
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            left: auto;
            right: -20px;
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            left: -20px;
            width: 20px;
            height: 20px;
            background: #DC2626;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 0 0 4px #DC2626;
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
                    <a href="index.php" class="text-gray-700 hover:text-apple-red transition-colors">홈</a>
                    <a href="products.php" class="text-gray-700 hover:text-apple-red transition-colors">제품</a>
                    <a href="about.php" class="text-apple-red font-semibold">소개</a>
                    <a href="index.php#contact" class="text-gray-700 hover:text-apple-red transition-colors">연락처</a>
                    <a href="index_en.php" class="text-gray-700 hover:text-apple-red transition-colors">English</a>
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
                    <a href="index.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">홈</a>
                    <a href="products.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">제품</a>
                    <a href="about.php" class="block px-3 py-2 text-apple-red font-semibold">소개</a>
                    <a href="index.php#contact" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">연락처</a>
                    <a href="index_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">English</a>
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
                        우리의<br>
                        <span class="text-apple-light-red">이야기</span>
                    </h1>
                    <p class="text-xl mb-8 text-red-100">
                        30년간 사과 재배에 전념해온 우리는 자연과의 조화를 통해 
                        최고 품질의 사과를 생산하고 있습니다.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#our-story" class="bg-white text-apple-red px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-center">
                            이야기 더 보기
                        </a>
                        <a href="index.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-apple-red transition-colors text-center">
                            홈으로 돌아가기
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
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">우리의 이야기</h2>
                <p class="text-xl text-gray-600">자연과 함께하는 30년의 여정</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg text-gray-600 mb-6">
                        1994년, 강원도 영월군의 작은 마을에서 시작된 우리의 사과 재배 여정은 
                        자연과의 조화를 통해 최고 품질의 사과를 생산한다는 신념으로 시작되었습니다.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        깨끗한 환경과 유기농 방식으로 재배된 우리의 사과는 
                        건강과 맛을 동시에 만족시킵니다. 매년 새로운 기술과 방법을 도입하여 
                        더 나은 품질의 사과를 제공하기 위해 노력하고 있습니다.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-apple-red mb-2">30+</div>
                            <div class="text-gray-600">재배 경력</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-apple-red mb-2">10,000+</div>
                            <div class="text-gray-600">만족한 고객</div>
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
                <h2 class="text-4xl font-bold text-gray-900 mb-4">우리의 여정</h2>
                <p class="text-xl text-gray-600">30년간의 성장과 발전 과정</p>
            </div>
            <div class="relative">
                <div class="timeline-item mb-12">
                    <div class="timeline-content bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto relative">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-apple-red mb-2">1994</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">시작</h3>
                            <p class="text-gray-600">강원도 영월군에서 첫 사과나무를 심고 재배를 시작했습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item mb-12">
                    <div class="timeline-content bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto relative">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-apple-red mb-2">2000</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">유기농 인증</h3>
                            <p class="text-gray-600">자연 친화적 재배 방식을 도입하여 유기농 인증을 받았습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item mb-12">
                    <div class="timeline-content bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto relative">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-apple-red mb-2">2010</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">품질 향상</h3>
                            <p class="text-gray-600">최신 재배 기술을 도입하여 사과의 품질을 크게 향상시켰습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item mb-12">
                    <div class="timeline-content bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto relative">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-apple-red mb-2">2020</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">디지털 전환</h3>
                            <p class="text-gray-600">온라인 판매 시스템을 구축하여 더 많은 고객에게 서비스를 제공합니다.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto relative">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-apple-red mb-2">2024</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">미래 준비</h3>
                            <p class="text-gray-600">지속 가능한 농업을 위한 새로운 기술과 방법을 연구하고 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">우리의 가치</h2>
                <p class="text-xl text-gray-600">Fresh Apples가 추구하는 핵심 가치</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">자연 친화</h3>
                    <p class="text-gray-600">자연과 조화를 이루며 지속 가능한 농업을 실천합니다.</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">품질 우선</h3>
                    <p class="text-gray-600">최고의 품질을 위해 끊임없이 연구하고 개선합니다.</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">고객 만족</h3>
                    <p class="text-gray-600">고객의 만족을 최우선으로 생각하며 서비스를 제공합니다.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">우리 팀</h2>
                <p class="text-xl text-gray-600">사과 재배에 열정을 가진 전문가들</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="농장장" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">김영수</h3>
                        <p class="text-apple-red font-semibold mb-2">농장장</p>
                        <p class="text-gray-600">30년간 사과 재배에 전념해온 전문가입니다.</p>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="품질관리팀장" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">이미영</h3>
                        <p class="text-apple-red font-semibold mb-2">품질관리팀장</p>
                        <p class="text-gray-600">엄격한 품질 관리로 최고의 사과를 보장합니다.</p>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden text-center">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="기술개발팀장" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">박준호</h3>
                        <p class="text-apple-red font-semibold mb-2">기술개발팀장</p>
                        <p class="text-gray-600">최신 재배 기술을 연구하고 적용합니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Farm Info Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">농장 정보</h2>
                <p class="text-xl text-gray-600">최고 품질의 사과가 자라는 우리 농장</p>
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
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">위치</h3>
                                <p class="text-gray-600">강원도 영월군 사과농장 123번지<br>깨끗한 환경과 적절한 기후 조건</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">규모</h3>
                                <p class="text-gray-600">총 50헥타르의 넓은 농장<br>연간 500톤의 사과 생산</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-apple-light-red w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">인증</h3>
                                <p class="text-gray-600">유기농 인증, GAP 인증<br>식품안전관리인증기준(HACCP) 준수</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Farm Aerial View" class="w-96 h-96 apple-circle apple-blend shadow-lg">
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
                    <p class="text-gray-400">자연의 선물, 프리미엄 사과를 만나보세요.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">inventory_2</span>
                        제품
                    </h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products.php#fresh-apples" class="hover:text-white transition-colors">신선 사과</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products.php#processed-products" class="hover:text-white transition-colors">가공 제품</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="products.php#gift-sets" class="hover:text-white transition-colors">선물 세트</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">business</span>
                        회사
                    </h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#our-story" class="hover:text-white transition-colors">소개</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="index.php#contact" class="hover:text-white transition-colors">연락처</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#" class="hover:text-white transition-colors">채용</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 flex items-center">
                        <span class="material-icons mr-2 text-apple-red">share</span>
                        팔로우
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
