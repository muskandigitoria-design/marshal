<?php
/**
 * Marshal Tradings - Premium Landing Page
 * Optimized PHP Version
 */

// Configuration - Change these easily here
$pageTitle = "Marshal Tradings | Master the Markets";
$telegramLink = "https://telegram.me/+QdBxdgFHnG0xNWE1";
$agencyLink = "https://t.me/+TRlJl628l-FkMWE9";
$logoPath = "https://mahakalx.sbs/wp-content/uploads/2026/02/marsshall.jpg";
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        :root {
            --primary: #0088cc;
            --accent: #00d4ff;
            --dark-bg: #030712;
            --card-glass: rgba(255, 255, 255, 0.03);
            --border-glass: rgba(255, 255, 255, 0.08);
            --gold: #fbbf24;
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
        }

        /* Technical Background Grid */
        .bg-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(0, 136, 204, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 136, 204, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: -1;
        }

        .glow-overlay {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80vw;
            height: 80vh;
            background: radial-gradient(circle, rgba(0, 136, 204, 0.15) 0%, transparent 70%);
            z-index: -1;
            filter: blur(80px);
        }

        /* Hero Section (Centered) */
        header {
            padding: 60px 20px 20px;
            text-align: center;
        }

        .logo-container {
            display: inline-block;
            margin-bottom: 20px;
            opacity: 0; 
            transform: translateY(30px);
        }

        .logo-img {
            width: 120px;
            height: 120px;
            border-radius: 30px;
            border: 4px solid var(--accent);
            box-shadow: 0 0 40px rgba(0, 212, 255, 0.4);
            object-fit: cover;
        }

        .brand-text {
            display: block;
            font-size: 2rem;
            font-weight: 800;
            margin-top: 15px;
            letter-spacing: 3px;
            background: linear-gradient(to bottom, #ffffff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Content Area */
        .hero-content {
            flex: 1;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            padding: 0 20px;
        }

        h1 {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            font-weight: 800;
            line-height: 1;
            margin-bottom: 25px;
            opacity: 0;
            transform: scale(0.9);
        }

        .hero-description {
            color: #94a3b8;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0;
        }

        /* Main CTA */
        .main-btn {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background: var(--primary);
            color: #fff;
            padding: 22px 50px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 800;
            font-size: 1.2rem;
            box-shadow: 0 15px 45px rgba(0, 136, 204, 0.4);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .main-btn:hover {
            transform: translateY(-5px) scale(1.05);
            background: var(--accent);
            box-shadow: 0 20px 60px rgba(0, 212, 255, 0.5);
        }

        /* Feature Cards */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 80px;
            opacity: 0;
        }

        .card {
            background: var(--card-glass);
            border: 1px solid var(--border-glass);
            padding: 40px;
            border-radius: 32px;
            backdrop-filter: blur(12px);
            text-align: left;
            transition: 0.3s;
        }

        .card:hover {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.06);
            transform: translateY(-5px);
        }

        .card i {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 20px;
            display: block;
        }

        /* Footer */
        footer {
            padding: 80px 20px 40px;
            text-align: center;
        }

        .agency-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(251, 191, 36, 0.08);
            border: 1px solid rgba(251, 191, 36, 0.2);
            padding: 12px 25px;
            border-radius: 50px;
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        .copy {
            color: #475569;
            font-size: 0.85rem;
        }

        /* Mobile Adjustments */
        @media (max-width: 600px) {
            .logo-img { width: 100px; height: 100px; }
            .brand-text { font-size: 1.5rem; }
            .main-btn { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

    <div class="bg-grid"></div>
    <div class="glow-overlay"></div>

    <header>
        <div class="logo-container" id="logo">
            <img src="<?php echo $logoPath; ?>" alt="Marshal Tradings" class="logo-img">
            <span class="brand-text">MARSHAL TRADINGS</span>
        </div>
    </header>

    <main class="hero-content">
        <h1 id="title">Master Markets <br><span style="color: var(--accent);">With Precision.</span></h1>
        <p class="hero-description" id="desc">Professional SMC and Price Action education. Join the elite community taking their trading to the institutional level.</p>
        
        <a href="<?php echo $telegramLink; ?>" class="main-btn" id="cta">
            <i class="fab fa-telegram-plane"></i> JOIN THE TELEGRAM
        </a>

        <div class="features-grid" id="grid">
            <div class="card">
                <i class="fas fa-chart-area"></i>
                <h3>SMC Concepts</h3>
                <p>Learn to trade like the institutions, not like the retail crowd.</p>
            </div>
            <div class="card">
                <i class="fas fa-bolt"></i>
                <h3>Live Alerts</h3>
                <p>Get instant notifications on high-probability trade setups.</p>
            </div>
            <div class="card">
                <i class="fas fa-users-viewfinder"></i>
                <h3>Mentorship</h3>
                <p>Direct access to professional traders to refine your strategy.</p>
            </div>
        </div>
    </main>

    <footer>
        <a href="<?php echo $agencyLink; ?>" class="agency-badge">
            <i class="fas fa-bolt"></i> Managed by Nexgroww Agency
        </a>
        <p class="copy">&copy; <?php echo $currentYear; ?> Marshal Tradings Education. All rights reserved.</p>
        <p class="copy" style="font-size: 0.7rem; margin-top: 10px; opacity: 0.5;">Disclaimer: Forex/Stock trading carries high risk.</p>
    </footer>

    <script>
        // GSAP Animation Logic
        document.addEventListener("DOMContentLoaded", () => {
            const tl = gsap.timeline({defaults: {ease: "power3.out", duration: 1}});

            // Entrance sequence
            tl.to("#logo", {opacity: 1, y: 0})
              .to("#title", {opacity: 1, scale: 1}, "-=0.6")
              .to("#desc", {opacity: 1, y: -10}, "-=0.8")
              .to("#cta", {opacity: 1, scale: 1}, "-=0.8")
              .to("#grid", {opacity: 1, y: 0}, "-=0.6");

            // Continuous "Floating" movement for cards
            gsap.to(".card", {
                y: -15,
                duration: 2.5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                stagger: {
                    each: 0.3,
                    from: "start"
                }
            });

            // Pulse effect for the logo
            gsap.to(".logo-img", {
                boxShadow: "0 0 60px rgba(0, 212, 255, 0.6)",
                duration: 1.5,
                repeat: -1,
                yoyo: true,
                ease: "power1.inOut"
            });
        });
    </script>

</body>
</html>
