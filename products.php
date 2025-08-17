<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제품 소개 - Fresh Apples</title>
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
        
        .product-hero {
            position: relative;
            overflow: hidden;
        }
        
        .product-hero::before {
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
                    <a href="index.php" class="text-gray-700 hover:text-apple-red transition-colors">홈</a>
                    <a href="products.php" class="text-apple-red font-semibold">제품</a>
                    <a href="about.php" class="text-gray-700 hover:text-apple-red transition-colors">소개</a>
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
                    <a href="products.php" class="block px-3 py-2 text-apple-red font-semibold">제품</a>
                    <a href="about.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors">소개</a>
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
                        <span class="text-apple-light-red">프리미엄 제품</span>
                    </h1>
                    <p class="text-xl mb-8 text-red-100">
                        최고급 품질의 다양한 사과 제품을 만나보세요. 
                        각각의 특별한 맛과 영양을 경험해보세요.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#product-list" class="bg-white text-apple-red px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-center">
                            제품 둘러보기
                        </a>
                        <a href="index.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-apple-red transition-colors text-center">
                            홈으로 돌아가기
                        </a>
                    </div>
                </div>
                <div class="flex justify-center product-hero">
                    <div class="apple-gradient-container">
                        <img src="apple.png" alt="Fresh Apple" class="w-80 h-80 apple-circle apple-blend">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">제품 카테고리</h2>
                <p class="text-xl text-gray-600">다양한 종류의 사과 제품을 만나보세요</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">신선 사과</h3>
                    <p class="text-gray-600 mb-6">직접 재배한 신선한 사과를 다양한 품종으로 제공합니다.</p>
                    <a href="#fresh-apples" class="inline-block bg-apple-red text-white px-6 py-3 rounded-lg hover:bg-apple-dark-red transition-colors">
                        자세히 보기
                    </a>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">가공 제품</h3>
                    <p class="text-gray-600 mb-6">사과를 활용한 다양한 가공 제품을 만나보세요.</p>
                    <a href="#processed-products" class="inline-block bg-apple-red text-white px-6 py-3 rounded-lg hover:bg-apple-dark-red transition-colors">
                        자세히 보기
                    </a>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                    <div class="bg-apple-light-red w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-apple-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">선물 세트</h3>
                    <p class="text-gray-600 mb-6">특별한 날을 위한 프리미엄 선물 세트를 준비했습니다.</p>
                    <a href="#gift-sets" class="inline-block bg-apple-red text-white px-6 py-3 rounded-lg hover:bg-apple-dark-red transition-colors">
                        자세히 보기
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fresh Apples Section -->
    <section id="fresh-apples" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">신선 사과</h2>
                <p class="text-xl text-gray-600">최고 품질의 신선한 사과를 다양한 품종으로 제공합니다</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="홍로 사과" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">홍로 사과</h3>
                        <p class="text-gray-600 mb-4">달콤하고 아삭한 맛이 특징인 인기 품종</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★★★☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★☆☆</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩15,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="양광 사과" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">양광 사과</h3>
                        <p class="text-gray-600 mb-4">새콤달콤한 균형잡힌 맛의 프리미엄 품종</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★★★☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★★☆</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩18,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="아오리 사과" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">아오리 사과</h3>
                        <p class="text-gray-600 mb-4">신선하고 깔끔한 맛의 건강한 선택</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★★☆☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩12,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="쓰가루 사과" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">쓰가루 사과</h3>
                        <p class="text-gray-600 mb-4">향긋하고 달콤한 일본 품종</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★★☆☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★★☆</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩22,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="골든딜리셔스" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">골든딜리셔스</h3>
                        <p class="text-gray-600 mb-4">부드럽고 달콤한 노란 사과</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★☆☆☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★☆☆</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩20,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="그래니스미스" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">그래니스미스</h3>
                        <p class="text-gray-600 mb-4">새콤하고 아삭한 녹색 사과</p>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">당도</span>
                                <span class="text-gray-700">★★☆☆☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">아삭함</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">보관기간</span>
                                <span class="text-gray-700">★★★★★</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩16,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processed Products Section -->
    <section id="processed-products" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">가공 제품</h2>
                <p class="text-xl text-gray-600">사과를 활용한 다양한 가공 제품을 만나보세요</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="사과 주스" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">사과 주스</h3>
                        <p class="text-gray-600 mb-4">100% 천연 사과로 만든 신선한 주스</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩8,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="사과 잼" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">사과 잼</h3>
                        <p class="text-gray-600 mb-4">천연 사과로 만든 달콤한 잼</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩12,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="사과 칩" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">사과 칩</h3>
                        <p class="text-gray-600 mb-4">건조한 사과의 맛을 그대로</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩15,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gift Sets Section -->
    <section id="gift-sets" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">선물 세트</h2>
                <p class="text-xl text-gray-600">특별한 날을 위한 프리미엄 선물 세트를 준비했습니다</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="기본 선물 세트" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">기본 선물 세트</h3>
                        <p class="text-gray-600 mb-4">홍로, 양광, 아오리 사과 각 2kg</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩45,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="프리미엄 선물 세트" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">프리미엄 선물 세트</h3>
                        <p class="text-gray-600 mb-4">모든 품종 사과 + 가공 제품</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩80,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
                    </div>
                </div>
                <div class="apple-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex justify-center p-6">
                        <div class="apple-gradient-container">
                            <img src="apple.png" alt="럭셔리 선물 세트" class="w-48 h-48 apple-circle apple-blend">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">럭셔리 선물 세트</h3>
                        <p class="text-gray-600 mb-4">최고급 품종 + 특별 포장</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-apple-red">₩120,000</span>
                            <button class="bg-apple-red text-white px-4 py-2 rounded-lg hover:bg-apple-dark-red transition-colors">
                                구매하기
                            </button>
                        </div>
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
                            <a href="#fresh-apples" class="hover:text-white transition-colors">신선 사과</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#processed-products" class="hover:text-white transition-colors">가공 제품</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons mr-2 text-sm">fiber_manual_record</span>
                            <a href="#gift-sets" class="hover:text-white transition-colors">선물 세트</a>
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
                            <a href="index.php#about" class="hover:text-white transition-colors">소개</a>
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

        // Form submission handling
        document.querySelectorAll('button').forEach(button => {
            if (button.textContent === '구매하기') {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('상품이 장바구니에 추가되었습니다!');
                });
            }
        });
    </script>
</body>
</html>
