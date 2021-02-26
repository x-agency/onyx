<?php
   /*
    Template Name: Splash
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
    
<?php get_header(); ?>

<section id="splash">
    <div class="custom-border"></div>
    <div class="content">
        <h2>COMING SOON</h2>
        <img src="/wp-content/themes/onyx/img/logo.png" alt="The Onyx Group: Management Services Organization" class="logo">
        <p>The Onyx Group, a joint venture between MUSC Health and a team of independent physicians, is a comprehensive healthcare management services organization (MSO) based in the Upstate of South Carolina. Our integrative approach combines scalable, turn-key business administration services with premium practice management consulting to provide a single source solution for our clients.</p>
        <h3>Our Services</h3>
        <div class="list">
            <ul>
                <li>Revenue Cycle Management</li>
                <li>Information Technology & EMR Support</li>
                <li>Credentialing & Licensing</li>
                <li>Finance and Accounting</li>
                <li>Human Resources</li>
                <li>Payroll Processing</li>
            </ul>
            <ul>
                <li>Purchasing and Procurement</li>
                <li>Clinical Informatics</li>
                <li>Business Intelligence and Analytics</li>
                <li>Practice Start Up</li>
                <li>Practice Management Consulting</li>
                <li>Strategic Planning</li>
            </ul>
        </div>
        <button class="btn">CONTACT US</button>
    </div>
</section>

<section id="modal">
    <div class="modal-inner">
        <div class="close">+</div>
        <div class="custom-border"></div>
        <img src="/wp-content/themes/onyx/img/logo-alt.png" alt="" class="logo">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) ); ?>
    </div>
    
</section>

<footer>
    <img src="/wp-content/themes/onyx/img/people.png" class="people">
    <div class="contact">
        <p>© Copyright 2021 <span>•</span> The ONYX Group</p>
        <p>145 East Poinsett Street, Greer, SC 29651 <span>•</span> 864.516.1785 <span>•</span> info@onyxgroupsc.org</p>
    </div>
</footer>

<script>
    jQuery(document).ready(function($) {
        $('#content .btn, .close').click(function() {
            $('#modal').toggleClass('open');
        })
    });
</script>

<?php wp_footer(); ?>