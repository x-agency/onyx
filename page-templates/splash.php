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
    <img src="/wp-content/themes/onyx/img/texture-bg.jpg" class="bg">
    <div class="custom-border"></div>
    <div class="content">
        <h2>COMING SOON</h2>
        <img src="/wp-content/themes/onyx/img/logo.png" alt="The Onyx Group: Management Services Organization" class="logo">
        <p>The Onyx Group, a joint venture between MUSC Health and a team of independent physicians, is a comprehensive healthcare management services organization (MSO) based in the Upstate of South Carolina. Our integrative approach combines scalable, turn-key business administration services with premium practice management consulting to provide a single-source solution for our clients.</p>
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
                <li>Practice Start-Up</li>
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
        <p><a class="simple-link" href="https://xagency.io">Made By X</a> <span>•</span> <a rel="noreferrer" href="https://www.google.com/maps/dir//145+E+Poinsett+St,+Greer,+SC+29651/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x88582a9a015312ff:0xd0a62863cdbe335d?sa=X&ved=2ahUKEwjX9qb2so_vAhUIZKwKHYSQAMwQwwUwAHoECAYQAw" class="simple-link" target="_blank">145 East Poinsett Street, Greer, SC 29651</a> <span>•</span> <a class="simple-link" href="tel:864.516.1785">864.516.1785</a> <span>•</span> <a class="simple-link" href="mailto:info@onyxgroupsc.org">info@onyxgroupsc.org</a></p>
    </div>
</footer>

<script>
    jQuery(document).ready(function($) {
        $('.content .btn, .close').click(function() {
            $('#modal').toggleClass('open');
        });

        $('#modal .btn').click(function(e) {
            e.preventDefault();

            var formData = $('#frm_form_5_container form').serialize();
            var decodedFormData = decodeURIComponent(formData);
            // Submit form via Formidable API
            $.ajax({
                url: 'https://onyxgroupsc.wpserver.cloud/wp-json/frm/v2/entries?',
                type: 'post',
                data: decodedFormData,
                headers: {
                    Authorization: 'Basic NTIzWi04VlNWLTk4UkgtQjJRMTp4'
                },
                success: function() {
                    $('.frm_error_style').remove();
                    $('.frm_message').remove();
                    $('#frm_form_5_container').prepend('<div class="frm_message">Your responses were successfully submitted. Thank you!</div>');
                }
            }).fail(function(jqXHR) {
                console.log(jqXHR.responseJSON.message);
                $('.frm_error_style').remove();
                $('#frm_form_5_container').prepend('<div class="frm_error_style">' + JSON.stringify(jqXHR.responseJSON.message) + '</div>');
            });
        });
    });
</script>

<?php wp_footer(); ?>