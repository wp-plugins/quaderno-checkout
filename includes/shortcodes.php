<?php 

/**
* Shortcodes
*
* @package    Quaderno
* @copyright  Copyright (c) 2015, Quaderno
* @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since      1.0.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

function quaderno_checkout_shortcode( $attr, $content = null ) {
  extract(shortcode_atts(array(
  'type' => 'charge',
  'gateway' => 'stripe',
  'amount' => 500,
  'currency' => 'USD',
  'plan' => '',
  'description' => 'Checkout',
  'label' => 'Pay Now',
  'panel_label' => 'Pay {{amount}}',
  'locale' => 'en',
  'redirect_url' => ''
  ), $attr));

  if ( $type == 'charge' ) {
    $token = array(
      'iat' => time(),
      'amount' => $amount,
      'currency' => $currency
    );

    $transaction_info = 'data-charge="' . JWT::encode($token, get_option('quaderno_private_key')) . '"';
  } else {
    $transaction_info = 'data-plan="' . $plan . '"';    
  }

  $html = '<form action="' . $redirect_url . '" method="POST">
    <script
    src="https://checkout.quaderno.io/checkout.js" class="quaderno-button"
  data-key="' . get_option('quaderno_public_key') . '"
    data-type="' . $type . '"
    data-gateway="' . $gateway . '"
    data-description="' . $description . '"
    data-amount="' . $amount . '"
    data-currency="' . $currency . '"
    data-label="' . $label . '"
    data-panel-label="'. $panel_label . '"
    data-locale="' . $locale . '" ' . $transaction_info . '></script>
  </form>';

  return $html;
}
add_shortcode('quaderno', 'quaderno_checkout_shortcode');
