<?php
/**
 * Template part for displaying product highlights
 */
?>

<section id="products" class="highlights container">
    <h1>Curating World-Class Products to <br>Complete Your Dream Kitchen</h1>
    <p class="subtitle">At the heart of every great kitchen is the perfect convergence of precision appliances and sublime countertop. Guided by expertise and passion, we partner with you to give life to a space that is uniquely yours—a true finale for your Kitchen.</p>
    
    <div class="grid cards">
        <article class="card">
            <div class="media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/caesarstone.png" alt="Caesarstone quartz surfaces" loading="lazy" />
            </div>
            <div class="media-content">
                <h3>Caesarstone</h3>
                <p>More than a surface, Caesarstone quartz offers lasting durability and timeless elegance, creating a refined foundation for everyday living.</p>
                <div class="divider"></div>
                <a class="cardbutton" href="<?php echo esc_url( home_url( '/caesarstone/' ) ); ?>">Learn more</a>
            </div>
        </article>
        
        <article class="card">
            <div class="media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/siemens.png" alt="Siemens premium appliances" loading="lazy" />
            </div>
            <div class="media-content">
                <h3>Siemens</h3>
                <p>Siemens appliances blend smart technology with precision design, delivering effortless performance that transforms cooking and care.</p>
                <div class="divider"></div>
                <a class="cardbutton" href="<?php echo esc_url( home_url( '/siemens/' ) ); ?>">Learn more</a>
            </div>
        </article>
        
        <article class="card">
            <div class="media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/schock.png" alt="Schock composite sinks" loading="lazy" />
            </div>
            <div class="media-content">
                <h3>Schock</h3>
                <p>Crafted from advanced quartz composite, Schock sinks combine bold style, durability, and hygiene, an elegant centerpiece for the modern kitchen.</p>
                <div class="divider"></div>
                <a class="cardbutton" href="<?php echo esc_url( home_url( '/schock/' ) ); ?>">Learn more</a>
            </div>
        </article>
    </div>
</section>