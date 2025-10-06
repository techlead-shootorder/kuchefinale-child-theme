    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Kuchefinale</h3>
                    <p>Curating world-class products to complete your dream kitchen. Guided by expertise and passion, we partner with you to create a space that is uniquely yours.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Our Brands</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/siemens/' ) ); ?>">Siemens</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/caesarstone/' ) ); ?>">Caesarstone</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/schock/' ) ); ?>">Schock</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>Email: info@kuchefinale.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">FB</a>
                        <a href="#" aria-label="Instagram">IG</a>
                        <a href="#" aria-label="LinkedIn">LI</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>