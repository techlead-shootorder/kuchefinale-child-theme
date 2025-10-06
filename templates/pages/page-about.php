<?php
get_header();
?>

<main id="primary" class="site-main about-page">
    <section class="page-hero">
        <div class="container">
            <div class="hero-content">
                <h1>About Kuchefinale</h1>
                <p class="hero-subtitle">Your Partner in Creating the Perfect Kitchen</p>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Curating Excellence for Your Dream Kitchen</h2>
                    <p>At Kuchefinale, we believe that the kitchen is the heart of the home—a space where memories are made, creativity flourishes, and life unfolds. Our mission is to partner with you in creating a kitchen that is not just functional, but truly extraordinary.</p>
                    <p>With expertise built over years of experience and a passion for quality, we carefully curate only the finest products from world-renowned brands. Every appliance, every surface, every detail is selected to meet our exacting standards for performance, durability, and design.</p>
                </div>
                <div class="intro-stats">
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Years of Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>1000+</h3>
                        <p>Happy Customers</p>
                    </div>
                    <div class="stat-item">
                        <h3>3</h3>
                        <p>Premium Brands</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-story">
        <div class="container">
            <h2>Our Story</h2>
            <div class="story-content">
                <p>Founded with a vision to transform the way people experience their kitchens, Kuchefinale began as a passion project rooted in the belief that exceptional quality should be accessible to those who appreciate fine craftsmanship.</p>
                <p>Our journey started with a simple observation: too many homeowners were settling for compromise in their most important living space. We set out to change that by partnering with the world's most innovative manufacturers and bringing their finest products to discerning customers.</p>
                <p>Today, we're proud to be the trusted partner for customers who refuse to settle for anything less than extraordinary in their kitchens.</p>
            </div>
        </div>
    </section>

    <section class="our-values">
        <div class="container">
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Quality First</h3>
                    <p>We never compromise on quality. Every product in our collection meets the highest standards for performance, durability, and craftsmanship.</p>
                </div>
                
                <div class="value-item">
                    <h3>Expert Curation</h3>
                    <p>Our team of experts carefully selects each product, ensuring that our customers have access to only the finest options available.</p>
                </div>
                
                <div class="value-item">
                    <h3>Personalized Service</h3>
                    <p>We understand that every kitchen is unique. Our personalized approach ensures that your vision becomes reality.</p>
                </div>
                
                <div class="value-item">
                    <h3>Long-term Partnership</h3>
                    <p>Our relationship doesn't end at installation. We're here to support you throughout the lifetime of your kitchen.</p>
                </div>
                
                <div class="value-item">
                    <h3>Innovation Focus</h3>
                    <p>We stay at the forefront of kitchen technology and design, bringing you the latest innovations from leading manufacturers.</p>
                </div>
                
                <div class="value-item">
                    <h3>Sustainable Choices</h3>
                    <p>We prioritize environmentally responsible products and practices in everything we do.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-brands">
        <div class="container">
            <h2>Our Curated Brands</h2>
            <div class="brands-content">
                <p>We've carefully selected three exceptional brands that represent the pinnacle of kitchen innovation:</p>
                <div class="brands-showcase">
                    <div class="brand-highlight">
                        <h3>Siemens</h3>
                        <p>German engineering excellence in smart appliances that transform cooking and living experiences.</p>
                        <a href="<?php echo esc_url( home_url( '/siemens/' ) ); ?>">Learn More</a>
                    </div>
                    
                    <div class="brand-highlight">
                        <h3>Caesarstone</h3>
                        <p>Premium quartz surfaces that combine natural beauty with engineered performance and durability.</p>
                        <a href="<?php echo esc_url( home_url( '/caesarstone/' ) ); ?>">Learn More</a>
                    </div>
                    
                    <div class="brand-highlight">
                        <h3>Schock</h3>
                        <p>Advanced composite sinks that serve as elegant centerpieces while delivering uncompromising functionality.</p>
                        <a href="<?php echo esc_url( home_url( '/schock/' ) ); ?>">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-process">
        <div class="container">
            <h2>Our Process</h2>
            <div class="process-steps">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <h3>Consultation</h3>
                    <p>We begin by understanding your vision, lifestyle, and specific requirements for your dream kitchen.</p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">2</div>
                    <h3>Design & Selection</h3>
                    <p>Our experts help you select the perfect combination of appliances and surfaces that align with your vision.</p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">3</div>
                    <h3>Planning & Coordination</h3>
                    <p>We coordinate every detail of your project, ensuring seamless integration and professional installation.</p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">4</div>
                    <h3>Installation & Support</h3>
                    <p>Professional installation and ongoing support ensure your kitchen performs beautifully for years to come.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Create Your Dream Kitchen?</h2>
                <p>Let's start the conversation about bringing your vision to life with world-class products and expert guidance.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-button">Get Started</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>