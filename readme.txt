=== Quaderno Checkout ===
Author URI: http://quaderno.io
Contributors: polimorfico
Tags: stripe, paypal, braintree, paymill, stripe checkout, vat, eu vat, vatmoss, vat moss, european vat, eu tax, european tax, billing, invoicing, receipts
Requires at least: 3.7
Tested up to: 4.2
Stable tag: 1.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Send beautiful receipts to your customers and comply with the EU VAT rules for digital goods & services.

== Description ==

This plugin requires a [Quaderno](https://quaderno.io) account.

Quaderno Checkout is an embeddable payment form for desktop, tablet, and mobile devices. It works within your site—customers can pay instantly, without being redirected away to complete the transaction.

Quaderno Checkout **works with Stripe, PayPal, Braintree and Paymill accounts**. It calculate VAT rates for EU customers on-the-fly and sends beautiful PDF invoices to your customers automatically.

**Setup in less than 5 minutes**. Easy and quick!

1. Activate the plugin, go to Settings > Quaderno Checkout, then enter your Quaderno keys.
2. Edit the post or page where you want the payment button and checkout form to appear.
3. Add a simple shortcode.

Here are a few shortcode examples (amounts in U.S. cents):

`[quaderno amount="1000" description="Sample Product" redirect_url="thank-you-page.php"]`

`[quaderno amount="1000" description="Sample Product" gateway="paypal" redirect_url="thank-you-page.php"]`

`[quaderno amount="1000" description="Sample Product" panel_label="Now only {{amount}}!" redirect_url="thank-you-page.php"]`

[Shortcode Documentation](https://quaderno.io/docs/plugins/wordpress/)

== Installation ==

Following are the steps to install Quaderno Checkout

1. Unpack the entire contents of this plugin zip file into your wp-content/plugins/ folder locally.
2. Upload to your site.
3. Navigate to wp-admin/plugins.php on your site (your WP Admin plugin page).
4. Activate this plugin.
5. Configure the options from the Quaderno Menu.

OR you can just install it with WordPress by going to Plugins > Add New > and type this plugin's name

That's it! You can now be EU VAT compliant.

== Frequently Asked Questions ==

= Do I need to modify any code? =
Nope - we take care of everything you. Just install the plugin, add your API token and you’ll be good to go!

= Does Quaderno work with any themes? =
Yes, Quaderno works with any theme - whether free, commercial or custom. You just need EDD activated for Quaderno to work.

If you have any questions please get in touch with us at hello@quaderno.io.

== Screenshots ==

1. Checkout form
2. Copy your API keys from your Quaderno account
3. Paste it on the plugin settings page
4. Example of a receipt

== Changelog ==

= 1.2.1 =
* Hide VAT number is the customer belongs to certain country

= 1.2.1 =
* Send description to PayPal

= 1.2.0 =
* Set transaction type

= 1.1.0 =
* Ask for the customer billing address

= 1.0.0 =
* First version