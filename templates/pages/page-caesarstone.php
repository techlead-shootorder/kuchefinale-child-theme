<?php
get_header();
?>

<main id="primary" class="site-main brand-page caesarstone-page">
    <section class="brand-hero">
        <div class="container">
            <div class="brand-hero-content">
                <h1>Caesarstone</h1>
                <p class="brand-tagline">More Than a Surface. Lasting Durability. Timeless Elegance.</p>
            </div>
        </div>
    </section>

    <section class="brand-intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Redefining Surfaces</h2>
                    <p>Caesarstone quartz surfaces represent the perfect marriage of natural beauty and engineered performance. Each slab is carefully crafted to deliver lasting durability while maintaining the timeless elegance that makes every kitchen unique.</p>
                    <p>From the initial design to the final installation, Caesarstone offers unparalleled quality and consistency, creating a refined foundation for everyday living that stands the test of time.</p>
                </div>
                <div class="intro-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/caesarstone.png" alt="Caesarstone Quartz Surfaces" />
                </div>
            </div>
        </div>
    </section>

    <section class="product-categories">
        <div class="container">
            <h2>Caesarstone Collections</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <h3>Classico Collection</h3>
                    <p>Timeless designs inspired by natural stone with consistent patterns and neutral tones.</p>
                    <ul>
                        <li>Organic Quartz</li>
                        <li>London Grey</li>
                        <li>Pure White</li>
                        <li>Smoky Marble</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Motivo Collection</h3>
                    <p>Bold patterns and dramatic veining that make a statement in any space.</p>
                    <ul>
                        <li>Statuario Maximus</li>
                        <li>Calacatta Nuvo</li>
                        <li>Emperador Extreme</li>
                        <li>Pietra Grey</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Supernatural Collection</h3>
                    <p>Ultra-thin 12mm slabs offering design flexibility without compromising strength.</p>
                    <ul>
                        <li>Supernatural Ultra-thin</li>
                        <li>Flexible application</li>
                        <li>Curved installations</li>
                        <li>Reduced weight</li>
                    </ul>
                </div>
                
                <div class="category-card">
                    <h3>Outdoor Collection</h3>
                    <p>UV-resistant surfaces designed specifically for outdoor kitchen and living spaces.</p>
                    <ul>
                        <li>Weather resistant</li>
                        <li>Fade protection</li>
                        <li>Temperature stable</li>
                        <li>Easy maintenance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="technical-specs">
        <div class="container">
            <h2>Technical Excellence</h2>
            <div class="specs-grid">
                <div class="spec-item">
                    <h3>Composition</h3>
                    <p>93% natural quartz, 7% polymer resins and pigments for optimal strength and beauty.</p>
                </div>
                
                <div class="spec-item">
                    <h3>Hardness</h3>
                    <p>Mohs scale rating of 7, making it one of the hardest surfaces available for countertops.</p>
                </div>
                
                <div class="spec-item">
                    <h3>Non-Porous</h3>
                    <p>Engineered to be non-porous, eliminating the need for sealing and preventing bacterial growth.</p>
                </div>
                
                <div class="spec-item">
                    <h3>Heat Resistance</h3>
                    <p>Withstands temperatures up to 80°C (176°F) for everyday cooking confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-features">
        <div class="container">
            <h2>Why Choose Caesarstone?</h2>
            <div class="features-list">
                <div class="feature-item">
                    <h3>Unmatched Durability</h3>
                    <p>Engineered to resist scratches, stains, and impacts while maintaining its original beauty for decades.</p>
                </div>
                
                <div class="feature-item">
                    <h3>Hygienic Surface</h3>
                    <p>Non-porous surface prevents bacteria and viruses from penetrating, making it ideal for food preparation.</p>
                </div>
                
                <div class="feature-item">
                    <h3>Design Versatility</h3>
                    <p>Available in over 40 colors and patterns to complement any design style from contemporary to traditional.</p>
                </div>
                
                <div class="feature-item">
                    <h3>Sustainable Choice</h3>
                    <p>Made from recycled materials and manufactured using environmentally responsible processes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="care-maintenance">
        <div class="container">
            <h2>Care & Maintenance</h2>
            <div class="care-content">
                <p>Caesarstone surfaces are designed for easy maintenance while preserving their natural beauty:</p>
                <ul>
                    <li>Daily cleaning with mild soap and water</li>
                    <li>No sealing required</li>
                    <li>Resistant to most household chemicals</li>
                    <li>Professional restoration available if needed</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Create Your Perfect Surface</h2>
                <p>Discover how Caesarstone can transform your kitchen with surfaces that combine natural beauty with engineered performance.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-button">Explore Options</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>