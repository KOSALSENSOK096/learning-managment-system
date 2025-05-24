<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | University LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        .error-container {
            position: relative;
            z-index: 10;
        }

        .number-404 {
            font-size: 180px;
            line-height: 1;
            background: linear-gradient(45deg, #4F46E5, #818CF8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            display: inline-block;
        }

        .number-404::after {
            content: '404';
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0.1;
            transform: translateX(-10px) translateY(10px);
            background: linear-gradient(45deg, #4F46E5, #818CF8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .clock {
            position: absolute;
            font-size: 24px;
            color: #4F46E5;
            opacity: 0.2;
            animation: clockRotate 10s infinite linear;
        }

        @keyframes clockRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            animation: float 6s infinite ease-in-out;
            opacity: 0.1;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }

        .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.2) 50%,
                rgba(255,255,255,0) 100%
            );
            transition: all 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
            border-color: currentColor;
        }

        .search-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .search-box:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: #4F46E5;
        }

        /* Add new animations */
        .glow-effect {
            animation: glow 2s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { text-shadow: 0 0 5px #4F46E5, 0 0 10px #4F46E5, 0 0 15px #4F46E5; }
            50% { text-shadow: 0 0 10px #4F46E5, 0 0 20px #4F46E5, 0 0 30px #4F46E5; }
        }

        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .floating-icon {
            position: absolute;
            font-size: 2rem;
            opacity: 0.1;
            animation: floatIcon 8s infinite ease-in-out;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(0) rotate(0deg) scale(1); }
            50% { transform: translateY(-30px) rotate(180deg) scale(1.2); }
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #4F46E5;
            border-radius: 50%;
            animation: particleFloat 20s infinite linear;
        }

        @keyframes particleFloat {
            0% { transform: translate(0, 0) rotate(0deg); opacity: 0; }
            50% { opacity: 0.5; }
            100% { transform: translate(100vw, -100vh) rotate(360deg); opacity: 0; }
        }

        /* New cool animations */
        .neon-text {
            text-shadow: 0 0 5px #4F46E5,
                        0 0 10px #4F46E5,
                        0 0 20px #4F46E5,
                        0 0 40px #4F46E5;
            animation: neonPulse 2s infinite;
        }

        @keyframes neonPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .cool-icon {
            font-size: 2rem;
            background: linear-gradient(45deg, #4F46E5, #818CF8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes iconFloat {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-10px) scale(1.1); }
        }

        .tech-badge {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .tech-badge:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            color: #4F46E5;
        }

        .social-icon:hover {
            transform: translateY(-5px) rotate(360deg);
            background: #4F46E5;
            color: white;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            margin: 1rem 0;
        }

        /* Enhanced animations and effects */
        .floating-clock {
            animation: clockFloat 6s ease-in-out infinite;
            filter: drop-shadow(0 0 10px rgba(79, 70, 229, 0.5));
        }

        @keyframes clockFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(90deg); }
            50% { transform: translateY(0) rotate(180deg); }
            75% { transform: translateY(15px) rotate(270deg); }
        }

        .glowing-border {
            position: relative;
            overflow: hidden;
        }

        .glowing-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, 
                #4F46E5, #EC4899, #8B5CF6, #10B981, 
                #F59E0B, #4F46E5, #EC4899, #8B5CF6);
            background-size: 400%;
            z-index: -1;
            animation: glowingBorder 20s linear infinite;
            filter: blur(10px);
            opacity: 0.5;
        }

        @keyframes glowingBorder {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }

        .tech-icon {
            font-size: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .tech-icon::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: currentColor;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.1;
            transform: scale(0);
            transition: transform 0.3s ease;
        }

        .tech-icon:hover::after {
            transform: scale(1.5);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #4F46E5, #818CF8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .loading-bar {
            height: 4px;
            width: 100%;
            background: rgba(79, 70, 229, 0.1);
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            margin: 1rem 0;
        }

        .loading-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 30%;
            background: linear-gradient(90deg, #4F46E5, #818CF8);
            animation: loading 2s ease-in-out infinite;
        }

        @keyframes loading {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(400%); }
        }

        .pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
</head>
<body class="flex items-center justify-center px-4">
    <!-- Add more floating elements -->
    <div class="floating-icons">
        @foreach(['🎓', '📚', '💻', '🎯', '🚀', '💡', '⭐', '🌟'] as $index => $icon)
            <div class="floating-icon" 
                 style="left: {{ rand(0, 100) }}%; 
                        top: {{ rand(0, 100) }}%; 
                        animation-delay: -{{ $index * 1.5 }}s;">
                {{ $icon }}
            </div>
        @endforeach
    </div>

    <!-- Add particles -->
    <div class="particles">
        @for($i = 0; $i < 30; $i++)
            <div class="particle" 
                 style="left: {{ rand(0, 100) }}%; 
                        top: {{ rand(0, 100) }}%; 
                        animation-delay: -{{ rand(0, 20) }}s;">
            </div>
        @endfor
    </div>

    <!-- Add more clocks with different styles -->
    <div class="floating-elements">
        @foreach(['clock', 'clock-rotate-left', 'clock-rotate-right', 'hourglass', 'hourglass-half', 'calendar-alt'] as $icon)
            <div class="clock glow-effect" 
                 style="left: {{ rand(0, 100) }}%; 
                        top: {{ rand(0, 100) }}%; 
                        animation-delay: -{{ rand(0, 10) }}s;">
                <i class="fas fa-{{ $icon }}"></i>
            </div>
        @endforeach
    </div>

    <div class="error-container text-center">
        <!-- Enhanced 404 Section -->
        <div class="mb-8 glowing-border p-8 rounded-2xl">
            <h1 class="number-404 font-bold mb-4 neon-text">404</h1>
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">Page Not Found</h2>
            <p class="text-xl text-gray-600 mb-8">The page you're looking for seems to have vanished in time...</p>
            
            <div class="loading-bar"></div>
        </div>

        <!-- Feature Grid -->
        <div class="feature-grid">
            <div class="feature-item">
                <i class="fas fa-rocket feature-icon"></i>
                <h3 class="font-semibold mb-2">Fast Loading</h3>
                <p class="text-sm text-gray-600">Optimized performance</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h3 class="font-semibold mb-2">Secure</h3>
                <p class="text-sm text-gray-600">Enterprise security</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-paint-brush feature-icon"></i>
                <h3 class="font-semibold mb-2">Beautiful UI</h3>
                <p class="text-sm text-gray-600">Modern design</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-mobile-alt feature-icon"></i>
                <h3 class="font-semibold mb-2">Responsive</h3>
                <p class="text-sm text-gray-600">Mobile-friendly</p>
            </div>
        </div>

        <!-- Enhanced Tech Stack -->
        <div class="tech-stack">
            <span class="tech-badge glowing-border">
                <i class="fab fa-laravel tech-icon"></i>
                Laravel
            </span>
            <span class="tech-badge glowing-border">
                <i class="fab fa-vuejs tech-icon"></i>
                Vue.js
            </span>
            <span class="tech-badge glowing-border">
                <i class="fab fa-node-js tech-icon"></i>
                Node.js
            </span>
            <span class="tech-badge glowing-border">
                <i class="fas fa-database tech-icon"></i>
                MySQL
            </span>
        </div>

        <!-- Enhanced Clock Section -->
        <div class="floating-elements">
            @foreach(['clock', 'clock-rotate-left', 'clock-rotate-right', 'hourglass', 'hourglass-half', 'calendar-alt'] as $icon)
                <div class="floating-clock" 
                     style="left: {{ rand(0, 100) }}%; 
                            top: {{ rand(0, 100) }}%; 
                            animation-delay: -{{ rand(0, 10) }}s;">
                    <i class="fas fa-{{ $icon }} pulse"></i>
                </div>
            @endforeach
        </div>

        <div class="space-y-6">
            <!-- Search Box -->
            <div class="max-w-md mx-auto mb-8">
                <div class="relative">
                    <input type="text" 
                           class="search-box w-full px-4 py-3 rounded-lg text-gray-700 focus:outline-none"
                           placeholder="Try searching for something...">
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-indigo-600">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/') }}" 
                   class="btn bg-indigo-600 text-white px-8 py-3 rounded-lg flex items-center">
                    <i class="fas fa-home mr-2"></i>
                    Return Home
                </a>
                <a href="javascript:history.back()" 
                   class="btn bg-gray-100 text-gray-800 px-8 py-3 rounded-lg flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </a>
            </div>

            <!-- Help Links -->
            <div class="mt-8 text-sm text-gray-500">
                <p>Need help? Try these links:</p>
                <div class="flex justify-center gap-4 mt-2">
                    <a href="{{ url('/contact') }}" class="text-indigo-600 hover:text-indigo-700 flex items-center">
                        <i class="fas fa-envelope mr-1"></i> Contact Support
                    </a>
                    <a href="{{ url('/sitemap') }}" class="text-indigo-600 hover:text-indigo-700 flex items-center">
                        <i class="fas fa-sitemap mr-1"></i> Sitemap
                    </a>
                    <a href="{{ url('/faq') }}" class="text-indigo-600 hover:text-indigo-700 flex items-center">
                        <i class="fas fa-question-circle mr-1"></i> FAQ
                    </a>
                </div>
            </div>

            <!-- Enhanced Support Section -->
            <div class="mt-12 p-6 bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-xl glowing-border">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Connect With Us</h3>
                
                <div class="social-icons justify-center">
                    <a href="https://github.com/KOSALSENSOK096" class="social-icon glowing-border" target="_blank">
                        <i class="fab fa-github tech-icon"></i>
                    </a>
                    <a href="https://www.youtube.com/@SokCodeing" class="social-icon glowing-border" target="_blank">
                        <i class="fab fa-youtube tech-icon"></i>
                    </a>
                    <a href="https://t.me/kosalsensok06" class="social-icon glowing-border" target="_blank">
                        <i class="fab fa-telegram tech-icon"></i>
                    </a>
                    <a href="mailto:kosalsensok065@gmail.com" class="social-icon glowing-border" target="_blank">
                        <i class="fas fa-envelope tech-icon"></i>
                    </a>
                </div>

                <div class="flex justify-center items-center gap-6 mt-6">
                    <a href="https://www.buymeacoffee.com/kosalsensok" target="_blank" 
                       class="btn bg-[#FFDD00] text-gray-900 px-6 py-2 rounded-lg flex items-center glowing-border">
                        <i class="fas fa-coffee mr-2"></i>
                        Buy me a coffee
                    </a>
                    <a href="https://t.me/kosalsensok06" target="_blank"
                       class="btn bg-[#2AABEE] text-white px-6 py-2 rounded-lg flex items-center glowing-border">
                        <i class="fab fa-telegram mr-2"></i>
                        Join Community
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add random movement to clocks
        document.querySelectorAll('.clock').forEach(clock => {
            setInterval(() => {
                const x = Math.random() * 20 - 10;
                const y = Math.random() * 20 - 10;
                clock.style.transform = `translate(${x}px, ${y}px) rotate(${Date.now() / 50}deg)`;
            }, 3000);
        });

        // Add parallax effect to floating elements
        document.addEventListener('mousemove', (e) => {
            const elements = document.querySelectorAll('.floating-element');
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;

            elements.forEach(element => {
                const speed = Math.random() * 20 + 10;
                element.style.transform = `translate(${mouseX * speed}px, ${mouseY * speed}px)`;
            });
        });

        // Add 3D rotation effect to floating icons
        document.querySelectorAll('.floating-icon').forEach(icon => {
            setInterval(() => {
                const rotateX = Math.random() * 360;
                const rotateY = Math.random() * 360;
                const rotateZ = Math.random() * 360;
                icon.style.transform = `rotate3d(1, 1, 1, ${rotateX}deg)`;
            }, 3000);
        });

        // Add particle system
        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            document.querySelector('.particles').appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 20000);
        }

        setInterval(createParticle, 1000);

        // Add cool icon animations
        document.querySelectorAll('.cool-icon').forEach(icon => {
            icon.addEventListener('mouseover', () => {
                icon.style.transform = 'scale(1.2) rotate(10deg)';
            });
            icon.addEventListener('mouseout', () => {
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Add random colors to tech badges
        document.querySelectorAll('.tech-badge').forEach(badge => {
            const colors = ['#4F46E5', '#EC4899', '#8B5CF6', '#10B981', '#F59E0B'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            badge.addEventListener('mouseover', () => {
                badge.style.borderColor = randomColor;
                badge.style.boxShadow = `0 5px 15px ${randomColor}66`;
            });
            badge.addEventListener('mouseout', () => {
                badge.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                badge.style.boxShadow = 'none';
            });
        });

        // Enhanced animations for feature items
        document.querySelectorAll('.feature-item').forEach((item, index) => {
            item.style.animationDelay = `${index * 0.2}s`;
            item.addEventListener('mouseover', () => {
                item.querySelector('.feature-icon').style.transform = 'scale(1.2) rotate(10deg)';
            });
            item.addEventListener('mouseout', () => {
                item.querySelector('.feature-icon').style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Add floating animation to tech icons
        document.querySelectorAll('.tech-icon').forEach(icon => {
            setInterval(() => {
                const y = Math.random() * 10 - 5;
                const rotate = Math.random() * 20 - 10;
                icon.style.transform = `translateY(${y}px) rotate(${rotate}deg)`;
            }, 2000);
        });

        // Add glowing effect to borders
        document.querySelectorAll('.glowing-border').forEach(element => {
            element.addEventListener('mouseover', () => {
                element.style.filter = 'brightness(1.2)';
            });
            element.addEventListener('mouseout', () => {
                element.style.filter = 'brightness(1)';
            });
        });
    </script>
</body>
</html> 