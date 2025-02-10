<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Learning App</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> <!-- Futuristic Font -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }

        /* Header Styles */
        header {
            background: #6A1B9A; /* Purple */
            color: white;
            padding: 2rem 4rem;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        header h1 {
    margin: 0;
    font-size: 3.5rem; /* Increased font size */
    font-family: 'Orbitron', sans-serif; /* Futuristic font */
    cursor: pointer;
    text-decoration: none;
    color: white; /* White color */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3), 0 0 5px rgba(0, 0, 0, 0.3); /* Softer text shadow */
    animation: glow 1.5s infinite alternate; /* Animation */
}

@keyframes glow {
    0% {
        text-shadow: 1px 1px 3px rgba(255, 255, 255, 1), 0 0 5px rgba(255, 255, 255, 0.6); /* Softer glow at the start */
    }
    100% {
        text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.9), 0 0 10px rgba(255, 255, 255, 0.8); /* Softer glow at the end */
    }
}

header h1:hover {
    color: #f9f9f9;
}

        /* Navigation buttons styling */
        header .nav-buttons {
            position: absolute;
            top: 8px;
            right: 10px;
            display: flex;
            gap: 1rem;
        }

        header .nav-buttons button {
            background: #fff;
            color: #6A1B9A; /* Purple */
            border: none;
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        header .nav-buttons button:hover {
            background-color: #ab47bc; /* Lighter purple */
            color: #fff;
        }

        /* Hero Section */
        .hero {
            position: relative;
            color: white;
            padding: 6rem 2rem;
            text-align: center;
            overflow: hidden;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        /* Background Image Styling */
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/img.jpg'); /* Use local image */
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.5); /* Fallback colour */
            z-index: -1;
        }

        .hero-content {
            position: relative;
            z-index: 1; /* Ensure content is above the background */
            text-align: center;
            color: white;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ffffff; /* White color for better visibility */
            font-family: 'Orbitron', sans-serif; /* Futuristic font */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Text shadow for depth */
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #ffffff; /* White color for better visibility */
            font-family: 'Verdana', sans-serif;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Text shadow for depth */
        }

        .hero button {
            background-color: #6A1B9A; /* Purple */
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: #ab47bc; /* Lighter purple */
        }

        /* Flags Section */
        .flags {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }

        .flag-container {
            margin: 0 1rem;
            text-align: center;
        }

        .flag {
            font-size: 2rem; /* Adjust size as needed */
        }

        /* Main Content */
        main {
            padding: 4rem 2rem;
            text-align: center;
        }

        .feature-cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .feature-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 1rem 0;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .feature-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        /* Footer Links */
        .hover-links {
            margin-top: 4rem;
        }

        .hover-links a {
            color: #6A1B9A; /* Changed to purple */
            font-size: 1.2rem;
            text-decoration: none;
            margin: 0 1rem;
            transition: color 0.3s;
        }

        .hover-links a:hover {
            color: #333;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            padding: 1.5rem;
            z-index: 1000;
        }

        .modal.active {
            display: block;
        }

        .modal h3 {
            margin-top: 0;
        }

        .modal form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .modal input {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .modal button {
            background-color: #6A1B9A; /* Changed to purple */
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        .modal button:hover {
            background-color: #ab47bc; /* Lighter purple */
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }

        /* Scroll to Bottom Button */
        .scroll-to-bottom {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #6A1B9A; /* Purple */
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: none; /* Hidden by default */
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .scroll-to-bottom:hover {
            background-color: #ab47bc; /* Lighter purple */
        }

        .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .modal.active {
        display: block;
    }

    .close-modal {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
        color: #333;
    }

    .close-modal:hover {
        color: #ff0000;
    }

    #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    #overlay.active {
        display: block;
    }

    </style>
</head>
<body>
    <header>
        <h1 onclick="goToDashboardpage()">Language Learning App</h1>
        <div class="nav-buttons">
        <button id="user-login-btn">User Login</button> <!-- New User Login Button -->
            <button id="login-btn">Admin Login</button>
            <button id="register-btn">Register</button>
        </div>
    </header>
    
 <!-- Register Modal -->
<div class="modal" id="register-modal">
    <h3>Register</h3>
    <span class="close-modal" id="close-register">&times;</span>

    <form id="register-form" method="POST" action="{{ route('register') }}">
        @csrf 
        <input type="text" placeholder="Name" name="name" required>
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
    <button type="submit">Register</button>
    </form>
    <p style="text-align: center; margin-top: 1rem;">
        Already have an account? 
        <a href="#" id="switch-to-login" style="color: #6A1B9A; text-decoration: none;">Login</a>
    </p>
</div>

@if(session('success'))
    <p style="color: green; text-align: center;">{{ session('success') }}</p>
@endif

<script>
    const registerBtn = document.getElementById('register-btn');
    const registerModal = document.getElementById('register-modal');

    registerBtn.addEventListener('click', () => openModal(registerModal));
</script>

    <section class="hero">
        <!-- Background Image -->
        <div class="hero-background"></div>
        <!-- Hero Content -->
        <div class="hero-content">
            <h2>Unlock the World with Language</h2>
            <p>Explore new cultures and connect with people globally.</p>
            <button id="start-learning-btn">Start Your Journey</button>
        </div>
    </section>

    <!-- Languages Section -->
    <h3 style="text-align: center; margin-top: 2rem;">Languages We Offer</h3>
    <div class="flags">
        <div class="flag-container">
            <span class="flag">🇬🇧</span>
            <p>English</p>
        </div>
        <div class="flag-container">
            <span class="flag">🇪🇸</span>
            <p>Spanish</p>
        </div>
        <div class="flag-container">
            <span class="flag">🇩🇪</span>
            <p>German</p>
        </div>
        <div class="flag-container">
            <span class="flag">🇮🇳</span>
            <p>Hindi</p>
        </div>
        <div class="flag-container">
            <span class="flag">🇫🇷</span>
            <p>French</p>
        </div>
    </div>

    <main>
        <h2>Why Choose Us?</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <h3>Interactive Lessons</h3>
                <p>Engaging lessons with quizzes, games, and practical exercises to enhance your learning experience.</p>
            </div>
            <div class="feature-card">
                <h3>Community-Driven Content</h3>
                <p>Contribute to and benefit from a thriving language-learning community with shared content.</p>
            </div>
            <div class="feature-card">
                <h3>Instant Feedback</h3>
                <p>Get immediate feedback on your progress, helping you improve faster and learn more effectively.</p>
            </div>
        </div>

    </main>

<!-- Login Modal -->
<div class="modal" id="login-modal">
    <h3>Login</h3>
    <span class="close-modal" id="close-login">&times;</span>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf  <!-- CSRF protection -->
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <div class="text-center mt-4">
            <p class="text-gray-400">Don't have an account? 
            <a href="#" id="openRegisterFromLogin" class="text-cyan-400 hover:underline">Create New Account</a>
            </p>
        </div>
</div>

<div id="overlay"></div>

<!-- User Login Modal -->
<div class="modal" id="user-login-modal">
    <h3>User Login</h3>
    <span class="close-modal" id="close-user-login">&times;</span>
    <form method="POST" action="{{ route('user.login') }}">
        @csrf  <!-- CSRF protection -->
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p style="text-align: center; margin-top: 1rem;">
        Don't have an account? 
        <a href="#" id="switch-to-register-from-login" style="color: #6A1B9A; text-decoration: none;">Register</a>
    </p>
</div>

<script>
const userLoginBtn = document.getElementById('user-login-btn');
const userLoginModal = document.getElementById('user-login-modal'); // The modal for user login

userLoginBtn.addEventListener('click', () => openModal(userLoginModal)); // Open user login modal

// Function to open modals
function openModal(modal) {
    modal.classList.add('active');
    overlay.classList.add('active');
}

// Close the modal
function closeModal() {
    document.querySelectorAll('.modal').forEach(modal => modal.classList.remove('active'));
    overlay.classList.remove('active');
}

</script>
    <!-- Start Learning Modal -->
    <div class="modal" id="start-learning-modal">
        <h3>Start Learning</h3>
        <form>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Get Started</button>
        </form>
    </div>

    <div class="overlay" id="overlay"></div>

    <!-- Scroll to Bottom Button -->
    <button class="scroll-to-bottom" id="scrollToBottomBtn">⬇️</button>

    <script>
        const loginBtn = document.getElementById('login-btn');
        
        const startLearningBtn = document.getElementById('start-learning-btn');
        const loginModal = document.getElementById('login-modal');
        const adminLoginModal = document.getElementById('admin-login-modal');
        const startLearningModal = document.getElementById('start-learning-modal');
        const overlay = document.getElementById('overlay');
        const scrollToBottomBtn = document.getElementById('scrollToBottomBtn');

        function openModal(modal) {
            modal.classList.add('active');
            overlay.classList.add('active');
        }

        function closeModal() {
            document.querySelectorAll('.modal').forEach(modal => modal.classList.remove('active'));
            overlay.classList.remove('active');
        }

        loginBtn.addEventListener('click', () => openModal(loginModal));
        
       
        // Scroll to Bottom Functionality
        scrollToBottomBtn.addEventListener('click', () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        });

        // Show the scroll button when scrolling down
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollToBottomBtn.style.display = 'flex';
            } else {
                scrollToBottomBtn.style.display = 'none';
            }
        });

        document.getElementById('openRegisterFromLogin').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behaviour

    // Close login modal
    document.getElementById('login-modal').classList.remove('active');

    // Open register modal
    document.getElementById('register-modal').classList.add('active');

    // Ensure the overlay remains active
    document.getElementById('overlay').classList.add('active');
});

document.getElementById('switch-to-login').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behaviour

    // Close register modal
    document.getElementById('register-modal').classList.remove('active');

    // Open login modal
    document.getElementById('login-modal').classList.add('active');

    // Ensure the overlay remains active
    document.getElementById('overlay').classList.add('active');
});

document.getElementById('start-learning-btn').addEventListener('click', function() {
    document.getElementById('register-modal').classList.add('active'); // Open Register Modal
    document.getElementById('overlay').classList.add('active'); // Show overlay
});

 // Close Register Modal
 document.getElementById('close-register').addEventListener('click', function() {
        document.getElementById('register-modal').classList.remove('active');
        document.getElementById('overlay').classList.remove('active');
    });

    // Close Login Modal
    document.getElementById('close-login').addEventListener('click', function() {
        document.getElementById('login-modal').classList.remove('active');
        document.getElementById('overlay').classList.remove('active');
    });



    document.getElementById("register-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent normal form submission

    let formData = new FormData(this);

    fetch("{{ route('register') }}", {
        method: "POST",
        body: formData,
        headers: {
            "X-Requested-With": "XMLHttpRequest", // Tells Laravel it's an AJAX request
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        }
    })
    .then(response => response.json()) 
    .then(data => {
        if (data.success) {
            alert("Registration successful!");
            window.location.href = "/dashboard"; // Redirect after success
        } else {
            alert("Error: " + (data.message || "Something went wrong"));
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Error: " + error.message);
    });
});

document.getElementById('switch-to-register-from-login').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behaviour

    // Close login modal
    document.getElementById('user-login-modal').classList.remove('active');

    // Open register modal
    document.getElementById('register-modal').classList.add('active');

    // Ensure the overlay remains active
    document.getElementById('overlay').classList.add('active');
});

// Close User Login Modal
document.getElementById('close-user-login').addEventListener('click', function() {
    document.getElementById('user-login-modal').classList.remove('active');
    document.getElementById('overlay').classList.remove('active');
});


    </script>
</body>
</html>
