<!-- about.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the rich flavors of Nads Latte. Your one-stop destination for premium coffee and latte experiences.">
    <title>About Us - Nads Latte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .image-parallax {
            transition: transform 0.5s ease;
        }
        .image-parallax:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-[#F7F1E3]">
    <!-- Announcement Bar -->
    <div class="bg-[#8B5E3C] text-white">
        <div class="announcement-scroll py-2 px-4">
            <p>Free shipping on orders over $50 | Taste the difference with Nads Latte!</p>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-[#FFF7E6] shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex-shrink-0">
                    <img src="/images/nads-logo.png" alt="Nads Latte Logo" class="h-12">
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-[#8B5E3C] hover:text-[#D1A074]">Home</a>
                    <a href="/menu" class="text-[#8B5E3C] hover:text-[#D1A074]">Menu</a>
                    <a href="/about.html" class="text-[#8B5E3C] hover:text-[#D1A074] font-semibold">About Us</a>
                    <a href="/shop" class="text-[#8B5E3C] hover:text-[#D1A074]">Shop</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-[#8B5E3C] hover:text-[#D1A074]">Login</a>
                    <a href="/register" class="text-[#8B5E3C] hover:text-[#D1A074]">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- About Us Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h1 class="text-4xl font-bold text-[#8B5E3C] mb-8">About Us</h1>
                    <p class="text-[#5C4033] leading-relaxed mb-6">
                        Nads Latte was born from a love of coffee and a dream to create the perfect latte. Starting in 2025 as a small cafe in Yogyakarta, we quickly became a favorite spot for coffee enthusiasts. Today, our journey continues with a focus on quality, sustainability, and community.
                    </p>
                    <h2 class="text-2xl font-semibold text-[#8B5E3C] mb-4">Our Mission</h2>
                    <p class="text-[#5C4033] leading-relaxed">
                        At Nads Latte, our mission is simple: to bring joy through the art of coffee. We believe every sip should tell a story, and we’re here to share that story with you.
                    </p>
                </div>
                <div class="image-parallax">
                    <img src="/images/nads-cafe.jpg" alt="Nads Latte Cafe" class="rounded-xl shadow-xl w-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#8B5E3C] text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h3 class="text-lg font-semibold">About Nads Latte</h3>
                <p class="text-sm mt-4">
                    Experience the art of coffee at Nads Latte. From our signature lattes to our sustainable practices, we’re dedicated to serving you the best.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="/menu" class="hover:underline">Menu</a></li>
                    <li><a href="/shop" class="hover:underline">Shop</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Contact Us</h3>
                <p class="text-sm mt-4">Email: hello@nadslatte.com</p>
                <p class="text-sm">Phone: +62 812 3456 7890</p>
                <p class="text-sm">Address: 42 Coffee Street, Yogyakarta</p>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-white pt-4">
            &copy; 2025 Nads Latte. All rights reserved.
        </div>
    </footer>
</body>
</html>
