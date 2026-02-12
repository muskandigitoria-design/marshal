<?php
/**
 * Marshal Tradings - High-Performance Landing Page
 * Language: PHP 8+
 */

// Configuration Variables
$brandName     = "MARSHAL TRADINGS";
$telegramLink  = "https://telegram.me/+QdBxdgFHnG0xNWE1";
$logoUrl       = "https://mahakalx.sbs/wp-content/uploads/2026/02/marsshall.jpg";
$agencyLink    = "https://t.me/+TRlJl628l-FkMWE9";
$currentYear   = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brandName; ?> | Master the Art of Trading</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        :root {
            --primary: #0088cc; /* Telegram Blue */
            --accent: #00d4ff;
            --dark-bg: #030712;
            --card-glass: rgba(255, 255, 255, 0.03);
            --border-glass: rgba(255, 255, 255, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--dark-bg);
            color: #ffffff;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Animated Grid Background */
        .bg-grid {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: 
                linear-gradient(rgba(0, 136, 204, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 136, 204, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: -1;
        }

        /* Centered Header/Logo */
        header {
            padding: 60px 20px 20px;
            text-align: center;
            width: 100%;
        }

        .logo-box {
            display: inline-block;
            opacity: 0; /* Animated by GSAP */
            transform: translateY(20px);
        }

        .logo-img {
            width: 110px;
            height: 110px;
            border-radius: 28px;
            border: 4px solid var(--accent);
            box-shadow: 0 0 35px rgba(0, 212, 255, 0.3);
            object-fit: cover;
            margin-bottom: 15px;
        }

        .brand-text {
            display: block;
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 2px;
            background: linear-gradient(to bottom, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero Content */
        .hero {
            max-width: 850px;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: clamp(2.5rem, 8vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            opacity: 0;
        }

        .hero p {
            color: #94a3b8;
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0;
        }

        /* Telegram Button */
        .btn-telegram {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--primary);
            color: white;
            padding: 20px 45px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 10px 40px rgba(0, 136, 204, 0.4);
            opacity: 0;
            transition: 0.3s ease;
        }

        .btn-telegram:hover {
            transform: scale(1.05);
            background: #00a2f3;
            box-shadow: 0 15px 50px rgba(0, 136, 204, 0.6);
        }

        /* Stats Section */
        .stats-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
            opacity: 0;
        }

        .stat-card {
            background: var(--card-glass);
            border: 1px solid var(--border-glass);
            padding: 25px 40px;
            border-radius: 20px;
            min-width: 150px;
        }

        .stat-card h2 {
            color: var(--accent);
            font-size: 2.2rem;
            font-weight: 800;
        }

        /* Footer */
        footer {
            margin-top: auto;
            padding: 60px 20px 40px;
            text-align: center;
            width: 100%;
        }

        .agency-link {
            color: #fbbf24;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .agency-link:hover { opacity: 1; text-decoration: underline; }

        @media (max-width: 600px) {
            .stats-container { flex-direction: column; align-items: center; }
            .stat-card { width: 80%; }
        }
    </style>
</head>
<body>

    <div class="bg-grid"></div>

    <header>
        <div class="logo-box" id="logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" class="logo-img">
            <span class="brand-text"><?php echo $brandName; ?></span>
        </div>
    </header>

    <main class="hero">
        <h1 id="title">Master the Art of Trading</h1>
        <p id="subtitle">Expert education for serious traders. Join thousands of students mastering Price Action and Risk Management.</p>
        
        <a href="<?php echo $telegramLink; ?>" class="btn-telegram" id="cta">
            <i class="fab fa-telegram-plane"></i> JOIN FREE TELEGRAM
        </a>

        <div class="stats-container" id="stats">
            <div class="stat-card">
                <h2>90%</h2>
                <p>Accuracy</p>
            </div>
            <div class="stat-card">
                <h2>5K+</h2>
                <p>Members</p>
            </div>
        </div>
    </main>

    <footer>
        <p>Ads Managed by <a href="<?php echo $agencyLink; ?>" class="agency-link">Nexgroww Agency</a></p>
        <p style="margin-top: 15px; font-size: 0.8rem; color: #475569;">&copy; <?php echo $currentYear; ?> Marshal Tradings Education.</p>
    </footer>

    <script>
        // GSAP "Node-Style" Smooth Animations
        window.addEventListener('DOMContentLoaded', () => {
            const tl = gsap.timeline({ defaults: { ease: "power4.out", duration: 1.2 } });

            tl.to("#logo", { opacity: 1, y: 0 })
              .to("#title", { opacity: 1, y: 0 }, "-=0.8")
              .to("#subtitle", { opacity: 1, y: 0 }, "-=1")
              .to("#cta", { opacity: 1, scale: 1 }, "-=0.8")
              .to("#stats", { opacity: 1, y: 0 }, "-=1");

            // Continuous "Floating" animation for the logo
            gsap.to(".logo-img", {
                y: -10,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        });
    </script>
</body>
</html>
