<?php
// 언어 설정 (기본값: 한국어)
$lang = isset($language) ? $language : 'ko';

// 언어별 텍스트 설정
$nav_texts = [
    'ko' => [
        'home' => '홈',
        'products' => '제품',
        'about' => '소개',
        'contact' => '연락처',
        'english' => 'English',
        'korean' => '한국어'
    ],
    'en' => [
        'home' => 'Home',
        'products' => 'Products',
        'about' => 'About',
        'contact' => 'Contact',
        'english' => 'English',
        'korean' => '한국어'
    ]
];

$current_texts = $nav_texts[$lang];
?>

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
                <a href="#home" class="text-apple-red font-semibold"><?php echo $current_texts['home']; ?></a>
                <?php if ($lang === 'ko'): ?>
                    <a href="products.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['products']; ?></a>
                    <a href="about.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['about']; ?></a>
                <?php else: ?>
                    <a href="products_en.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['products']; ?></a>
                    <a href="about_en.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['about']; ?></a>
                <?php endif; ?>
                <a href="#contact" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['contact']; ?></a>
                <?php if ($lang === 'ko'): ?>
                    <a href="index_en.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['english']; ?></a>
                <?php else: ?>
                    <a href="index.php" class="text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['korean']; ?></a>
                <?php endif; ?>
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
                <a href="#home" class="block px-3 py-2 text-apple-red font-semibold"><?php echo $current_texts['home']; ?></a>
                <?php if ($lang === 'ko'): ?>
                    <a href="products.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['products']; ?></a>
                    <a href="about.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['about']; ?></a>
                <?php else: ?>
                    <a href="products_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['products']; ?></a>
                    <a href="about_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['about']; ?></a>
                <?php endif; ?>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['contact']; ?></a>
                <?php if ($lang === 'ko'): ?>
                    <a href="index_en.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['english']; ?></a>
                <?php else: ?>
                    <a href="index.php" class="block px-3 py-2 text-gray-700 hover:text-apple-red transition-colors"><?php echo $current_texts['korean']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

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
