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
        <div class="mb-8">
            <h1 class="number-404 font-bold mb-4">404</h1>
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">Page Not Found</h2>
            <p class="text-xl text-gray-600 mb-8">The page you're looking for seems to have vanished in time...</p>
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

            <!-- Support Section -->
            <div class="mt-12 p-6 bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-xl">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Support Our Work</h3>
                <div class="flex justify-center items-center gap-6">
                    <a href="https://www.buymeacoffee.com/kosalsensok" target="_blank" 
                       class="btn bg-[#FFDD00] text-gray-900 px-6 py-2 rounded-lg flex items-center">
                        <i class="fas fa-coffee mr-2"></i>
                        Buy me a coffee
                    </a>
                    <a href="https://t.me/kosalsensok06" target="_blank"
                       class="btn bg-[#2AABEE] text-white px-6 py-2 rounded-lg flex items-center">
                        <i class="fab fa-telegram mr-2"></i>
                        Join Telegram
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
    </script>
</body>
</html> 