<?php
get_header();
?>

<main id="primary" class="site-main brand-page siemens-page">
    <section class="brand-hero">
        <div class="container">
            <div class="brand-hero-content">
                <h1>Siemens</h1>
                <p class="brand-tagline">Smart Technology. Precision Design. Effortless Performance.</p>
            </div>
        </div>
    </section>

    <section class="brand-intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Innovation Meets Excellence</h2>
                    <p>Siemens appliances represent the pinnacle of German engineering and design. Each product seamlessly blends cutting-edge smart technology with precision craftsmanship, delivering an effortless cooking and living experience that transforms your daily routine.</p>
                    <p>From intelligent ovens that adapt to your cooking style to refrigerators that keep your food fresher for longer, Siemens continues to push the boundaries of what's possible in the modern kitchen.</p>
                </div>
                <div class="intro-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/siemens.png" alt="Siemens Premium Kitchen Appliances" />
                </div>
            </div>
        </div>
    </section>

    <section class="product-categories">
        <div class="container">
            <h2>Siemens Product Range</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <h3>Built-in Ovens</h3>
                    <p>Precision cooking with intelligent sensors and steam functions for perfect results every time.</p>
                    <ul>
                        <li>activeClean self-cleaning technology</li>
                        <li>cookControl automatic programs</li>
                        <li>Steam cooking functions</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Induction Cooktops</h3>
                    <p>Responsive and energy-efficient cooking surfaces with precise temperature control.</p>
                    <ul>
                        <li>flexInduction zones</li>
                        <li>powerBoost function</li>
                        <li>Touch controls</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Refrigerators</h3>
                    <p>Advanced cooling technology that keeps food fresh longer while saving energy.</p>
                    <ul>
                        <li>noFrost technology</li>
                        <li>hyperFresh plus compartments</li>
                        <li>Smart connectivity</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Dishwashers</h3>
                    <p>Efficient cleaning with intelligent sensors that adjust water and energy consumption.</p>
                    <ul>
                        <li>varioSpeed Plus</li>
                        <li>Intelligent dosing</li>
                        <li>Whisper-quiet operation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-features">
        <div class="container">
            <h2>Why Choose Siemens?</h2>
            <div class="features-list">
                <div class="feature-item">
                    <h3>Smart Technology</h3>
                    <p>Connect your appliances to the Home Connect app for remote control and monitoring, recipe suggestions, and intelligent maintenance alerts.</p>
                </div>
                
                <div class="feature-item">
                    <h3>German Engineering</h3>
                    <p>Over 175 years of innovation and precision manufacturing ensure lasting quality and reliable performance in every product.</p>
                </div>
                
                <div class="feature-item">
                    <h3>Energy Efficiency</h3>
                    <p>Leading energy ratings and innovative technologies that reduce consumption without compromising performance.</p>
                </div>
                
                <div class="feature-item">
                    <h3>Design Excellence</h3>
                    <p>Sleek, modern aesthetics that complement any kitchen design while maximizing functionality and user experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Siemens?</h2>
                <p>Discover how Siemens appliances can transform your kitchen into a space of effortless performance and smart living.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-button">Get In Touch</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>