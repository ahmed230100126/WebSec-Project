<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tea Haven - Premium Tea Selection</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-background text-text antialiased">
    <header class="relative">
        <nav class="absolute top-0 left-0 right-0 z-50 px-6 py-4">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-white">Tea Haven</a>
                <div class="space-x-6">
                    <a href="#" class="text-white hover:text-accent transition-colors">Shop</a>
                    <a href="#" class="text-white hover:text-accent transition-colors">About</a>
                    <a href="#" class="text-white hover:text-accent transition-colors">Contact</a>
                </div>
            </div>
        </nav>
        
        <div class="relative h-screen">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-secondary/90"></div>
            <img src="https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg" 
                 alt="Tea plantation" 
                 class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 flex items-center justify-center text-center">
                <div class="max-w-3xl px-6">
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Discover the World's Finest Teas</h1>
                    <p class="text-xl text-white/90 mb-8">Experience the perfect blend of tradition and taste with our carefully curated selection of premium teas</p>
                    <a href="#" class="btn-primary">Explore Our Collection</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Featured Categories -->
        <section class="py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Our Tea Collections</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/1417945/pexels-photo-1417945.jpeg" 
                             alt="Green Tea" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                        />
                        <h3 class="text-xl font-semibold mb-2">Green Tea</h3>
                        <p class="text-text/80 mb-4">Discover our selection of premium Japanese and Chinese green teas.</p>
                        <a href="#" class="btn-outline">Shop Green Tea</a>
                    </div>

                    <div class="card">
                        <img src="https://images.pexels.com/photos/1793035/pexels-photo-1793035.jpeg" 
                             alt="Black Tea" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                        />
                        <h3 class="text-xl font-semibold mb-2">Black Tea</h3>
                        <p class="text-text/80 mb-4">Classic black teas from India, Sri Lanka, and beyond.</p>
                        <a href="#" class="btn-outline">Shop Black Tea</a>
                    </div>

                    <div class="card">
                        <img src="https://images.pexels.com/photos/1494920/pexels-photo-1494920.jpeg" 
                             alt="Herbal Tea" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                        />
                        <h3 class="text-xl font-semibold mb-2">Herbal Tea</h3>
                        <p class="text-text/80 mb-4">Caffeine-free blends made with natural herbs and flowers.</p>
                        <a href="#" class="btn-outline">Shop Herbal Tea</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="bg-primary/5 py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                        <p class="text-lg mb-6">Tea Haven was born from a passion for exceptional tea and a desire to share the world's finest varieties with tea enthusiasts everywhere. We carefully source our teas from sustainable farms and traditional tea gardens around the globe.</p>
                        <a href="#" class="btn-primary">Learn More</a>
                    </div>
                    <div class="relative h-[400px]">
                        <img src="https://images.pexels.com/photos/230477/pexels-photo-230477.jpeg" 
                             alt="Tea ceremony" 
                             class="w-full h-full object-cover rounded-xl"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 px-6 bg-secondary text-white">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Join Our Tea Community</h2>
                <p class="text-lg mb-8">Subscribe to receive updates about new teas, brewing tips, and exclusive offers.</p>
                <form class="flex gap-4 max-w-md mx-auto">
                    <input type="email" 
                           placeholder="Enter your email" 
                           class="flex-1 px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-accent"
                    />
                    <button type="submit" class="bg-accent hover:bg-accent/90 text-secondary px-6 py-3 rounded-lg font-medium transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-text text-white py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Tea Haven</h3>
                <p class="text-white/80">Bringing the world's finest teas to your cup.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Shop</h4>
                <ul class="space-y-2 text-white/80">
                    <li><a href="#" class="hover:text-accent transition-colors">Green Tea</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Black Tea</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Herbal Tea</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Company</h4>
                <ul class="space-y-2 text-white/80">
                    <li><a href="#" class="hover:text-accent transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Contact</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Wholesale</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Contact</h4>
                <ul class="space-y-2 text-white/80">
                    <li>1234 Tea Street</li>
                    <li>Tea City, TC 12345</li>
                    <li>contact@teahaven.com</li>
                    <li>(555) 123-4567</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>