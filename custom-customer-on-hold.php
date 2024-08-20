<?php
defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
// add_action('woocommerce_email_header', function ($email_heading, $email) {
//     echo '<div style="background-color: #0081c7; padding: 20px; color: #ffffff;">';
//     echo '<h1>' . esc_html($email_heading) . '</h1>';
//     echo '</div>';
// }, 10, 2);

do_action('woocommerce_email_header', $email_heading, $email); ?>

<p><?php printf(esc_html__('Dear %s,', 'woocommerce'), esc_html($order->get_formatted_billing_full_name())); ?></p>
<p><?php esc_html_e('Congratulations, you are registered for the Social Media Conference Suriname 2024. Thank you for registering!', 'woocommerce'); ?></p>
<p><?php esc_html_e('Join us for an exciting journey into the world of social media, online marketing, and beyond. With over 40+ speakers, 20+ sessions, and 500+ participants, this is the ultimate event for social media marketers, business owners, and social media enthusiasts. This event will be held at Torarica Resort. More information will follow the upcoming weeks.', 'woocommerce'); ?></p>

<p><strong><?php esc_html_e('Event Dates:', 'woocommerce'); ?></strong></p>
<ul>
    <li><?php esc_html_e('November 4, 5 & 6: All-Access Pass holders', 'woocommerce'); ?></li>
    <li><?php esc_html_e('November 5 & 6: Community Pass holders', 'woocommerce'); ?></li>
</ul>

<p><?php esc_html_e('The price you purchased your ticket will remain valid for one week after your date of purchase. Please note that ticket payments made after this date will be billed at the rate valid on the particular date. Kindly send us your proof of transfer as a response to this email.', 'woocommerce'); ?></p>

<p><strong><?php esc_html_e('Below you will find the necessary banking information:', 'woocommerce'); ?></strong></p>
<p><?php esc_html_e('Hakrinbank:', 'woocommerce'); ?></p>
<ul>
    <li><?php esc_html_e('SRD: 209605401 (currency 34)', 'woocommerce'); ?></li>
    <li><?php esc_html_e('USD: 208538964', 'woocommerce'); ?></li>
</ul>
<p><?php esc_html_e('In the name of: INEFFABLE NV', 'woocommerce'); ?></p>
<p><?php esc_html_e('Description: SMCS2024 - [Your Name] - [Your Type of Ticket]', 'woocommerce'); ?></p>

<p><?php esc_html_e('With your registration, you are automatically subscribed for the Social Media Conference Newsletter with updates. Don’t forget to follow us on social media for more frequent updates, general info, Social Media facts and more fun.', 'woocommerce'); ?></p>

<p><?php esc_html_e('Any further questions or concerns can be sent to this email address.', 'woocommerce'); ?></p>

<p><?php esc_html_e('P.S Fulfilling your pass payment means that you are officially registered by name for the event. To participate you will receive a badge with your name, so please come with your photo I.D. It is required to wear your badge at all times during the conference & conference events.', 'woocommerce'); ?></p>

<p><?php esc_html_e('We can’t wait to see you there!', 'woocommerce'); ?></p>

<?php
/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
