=== Cost Calculator Builder PRO ===

Contributors: StylemixThemes
Donate link: https://stylemixthemes.com/
Tags: cost calculator, calculator, calculator form builder
Requires at least: 4.6
Tested up to: 6.2
Stable tag: 3.1.13
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Changelog ==
= 3.1.13 =
- Fixed: Date Picker was not visible while customizing the calculator appearance.
- Fixed: Hidden Formula elements were visible in Email and PDF Quote.
- Fixed: Calculations did not add to the cart with Woo Checkout and the loader was displayed.

= 3.1.12 =
- Fixed: Elements with zero values did not display in Emails, WooCommerce checkout, and Order details.
- Fixed: The "Payment methods" label was displayed in the PDF Quote when the Contact form was disabled.
- Fixed: Conditions did not copy to the translated version of the calculator with WPML.

= 3.1.11 =
- Fixed: The email template did not apply to users with Gmail.

= 3.1.10 =
- Update: Revised some texts on the plugin dashboard to improve clarity and user experience.
- Fixed: Changes on option values of duplicated elements affected to the original one.

= 3.1.9 =
- New: Option to assign several WooCommerce Categories to a single calculator for WooProducts.
- Update: Added the option to make any field required.
- Fixed: Hidden by default Formula elements were visible in PDF Quote and Order details.
- Fixed: The arrow of the Image Drop down field was not clickable.
- Fixed: Payment details were displayed in PDF Quote and Order details when Payment methods were disabled.

= 3.1.8 =
- Fixed: Zero values of the Checkbox and Image Checkbox did not display in the PDF Quote.
- Fixed: Some letters did not display when PDF was generated in languages other than English.
- Fixed: Date Picker is overlapped on mobile view when the Two Columns Box Style is used.

= 3.1.7 =
- New: Personalized styles for Options of Toggle, Radio, Radio with Image, Checkbox, Checkbox With Image, DropDown, and DropDown With Image Fields.

= 3.1.6 =
- Update: Added option to disable Plugin branding in footer section for the Email template.

= 3.1.5 =
- New: Form Estimation Email Template has been added for easy personalization of outgoing emails.
- Update: Compatibility with WordPress 6.2.

= 3.1.4 =
- Update: Added global settings for Sender Email and Sender Name for outgoing emails.

= 3.1.3 =
- New: Conditions depending on the value of the Formula element.
- New: The Orders modal window will be closed when clicking on any area outside.
- Update: The Logic of the "is inferior" and "is superior" are changed for the Elements with Options, and the conditions should be set again.
- Fixed: The Uploaded file did not arrive in the WooCommerce orders.
- Fixed: Unpaid PayPal order displayed in Complete status.
- Fixed: The Value of the Hidden by Default Elements that was selected by the User was reset when they showed with Conditions.

= 3.1.2 =
- New: An allowed number of options to select is added for Image Checkbox field.
- New: The ability to add one WooCommerce product multiple times to the cart with different calculator options.
- New: The ability to stay on the page after adding a WooCommerce product to the cart to make a different calculation.
- Fixed: Submit button form Contact 7 did not apply accent color from Calculator Customizer.
- Fixed: The quantity field did not work with fractional numbers when the Hidden by default option was enabled.

= 3.1.1 =
- New: Option to make Total Summary Sticky is added to Grand total settings.
- Fixed: Global currency settings did not apply for the Currency symbol.

= 3.1.0 =
- New: Image Radio and Image Checkbox elements are added.
- Removed: "Not selected" option of reCaptcha was removed from global settings.
- Fixed: PayPal IPN History returned ERROR 500.
- Fixed: Incompatibility issues with PHP 8.

= 3.0.9 =
- New: Option to select the type of label for Dropdown with image field in Total.

= 3.0.8 =
- New: Added order creation date in Orders section.
- Fixed: Incorrect logic of WooCommerce Add To Cart toggle button in Calculator settings.

= 3.0.7 =
- New: Send PDF Quote form added.

= 3.0.6 =
- Fix: Get PDF button has not appeared before making payment using WooCoomerce checkout.
- Fix: The link of the attached file PDF invoice was redirected to the orders instead of downloading it.
- Fix: Selected values of the elements were reset, when conditions with the Checkbox and Toggle field is used.
- Fix: An error notice did not appear while making payment when the Grand Total was equal to 0.
- Fix: An empty notice appeared after a successful payment with Stripe.

= 3.0.5 =
- New: PDF Entries allow exporting the Total summary of calculations in a .pdf document.

= 3.0.4 =
- Fix: Emails from the default contact form were not translated.

= 3.0.3 =
- New: Quick premium support button in WP dashboard (for applying the issue tickets) and personal support account creation.

= 3.0.2 =
- Fix: File uploads are not displayed in WooCoommerce orders when WooCheckout is used.
- Fix: WooCoommerce orders are duplicated when WooCheckout is used.

= 3.0.1 =
- New: Select the Preloader icon through Calculator Appearance.
- Update: Added feedback button to the calculator dashboard to leave reviews.
- Fix: The Total summary was stretched when checkbox and toggle elements are used.

= 3.0.0 =
[Meet All-New Cost Calculator 3.0](https://stylemixthemes.com/wp/something-big-is-coming-meet-all-new-cost-calculator/)
* NEW: Cost Calculator Frontend UI was completely redesigned
* NEW: Redesigned and optimized Admin Dashboard
* NEW: Optimal navigation. Calculators list, orders, settings, and your accounts will be displayed in a horizontal panel.
* NEW: New calculator builder focused on a better user experience.
* NEW: Manage all points of the Contact Form in one place.
* NEW: Global settings for Payment Gateways.

= 2.2.8 =
- fixed: PayPal payment type didn’t work if the calculator’s fields contained more than 256 figures and symbols
- fixed: Drop Down with Image Field and File Upload Field were untranslatable
- fixed: Contact form was not submitted if any element's title had quotation marks
- fixed: Relevant notification to configure Calculator’s Settings
- fixed: Total Field issue with Stripe, PayPal and WooCommerce payments

= 2.2.7 =
- updated: Compatibility with WordPress 6.0
- fixed: Inappropriate load of graphical elements on "Contact Us" page

= 2.2.6 =
- updated: Security update

= 2.2.5 =
- fixed: Order can be created with empty custom fields, which have Required status
- fixed: WooCommerce Meta types in WooProducts Settings do not work with Quantity Custom Filed
- fixed: The confirmation text does not appear  after resending the message (when Send Form Feature is configured)
- fixed: 'This Filed is Required' notification is duplicated, when custom field with Required status is empty
- fixed: Badge "DELETED" appears on all calculator (Calculator Name Column) in Orders section
- fixed: Bug with Stripe payments
- fixed: After sending a message by using Send Form feature,  empty text area comes to email

= 2.2.4 =
- fixed: PayPal calculator field (set max 6)

= 2.2.3 =
- new: File Upload Custom Element
- new: Image Dropdown Custom Element
- fixed: Counters do not work on Image Dropdown Custom Element
- fixed: Keep the ID transaction from PayPal and Stripe
- fixed: Payments table not is separated from Orders Table (in database)
- fixed: Correct processing of PayPal and Stripe callbacks (if paid by the user, change the status of the order to complete with the date of payment)

= 2.2.2 =
- updated: You can choose multiple payment options in the form.
- fixed: WooCommerce cart data bug

= 2.2.1 =
- new: Show WooCommerce as third payment type if enabled
- new: "Show" action for hidden fields in Conditions
- new: Or/And logic for Condition added
- updated: Show multirange start and end values in Orders
- fixed: Correct calendar dropdown when date picker is at the bottom of the page
- fixed: Order details for WooCommerce orders
- fixed: Correct dropdown calendar translation
- fixed: Show cart data for all devices

= 2.2.0 =
- new: Order details section added in the dashboard
- new: PayPal feedback for payment status in order details
- new: Default contact form automatic usage with integrated payments methods (Stripe, PayPal)
- updated: Default contact form settings moved to separate section
- fixed: Minor bugs with Contact Form 7 plugin
- fixed: Datefield appearance in WooCommerce order details
- fixed: Required fields if option value equal to 0

= 2.1.9 =
- added: Date picker custom styles setup
- added: Wordpress date format for datepicker
- updated: Custom date picker
- updated: Date picker custom styles
- updated: Wordpress format for datepicker field
- updated: New date picker integrated
- updated:Refactoring of the conditions logic
- updated: Checkbox and toggles functionality updated
- new: Condition actions - Select Option, Select Option and Disable, Set date, Set date and disable, Set period , Set period and disable  added
- new: Can set period for date picker with range and multi range fields
- fixed: The elements removed from calculator stayed in condition section
- fixed: Required fields validation

= 2.1.8 =
- updated: Required option to Datepicker field
- added: Admin notifications

= 2.1.7 =
- fixed: Calculator displaying in WooCommerce if the product is out of stock
- fixed: Paypal currency symbol on redirect to Paypal checkout.
- fixed: The number of days is not counted for Date Picker field.
- fixed: Calculator title is not displayed in WooCommerce cart.

= 2.1.6 =
- fixed: Date format on Email.
- fixed: Captcha v2 does not work.
- fixed: Export/Import Calculators Condition bug.
- fixed: Multi-range is not displaying for Second Calculator on the same page.

= 2.1.5 =
- fixed: WooCommerce Cart Product Settings

= 2.1.4 =
- new: WooCommerce Products feature added
- fixed: WooCommerce Cart Product Variation bug

= 2.1.3 =
- fixed: Calendar Datepicker issue on Safari
- fixed: Deleting Calculator Product from Cart issue

= 2.1.2 =
- upd: Compatibility with Wordpress 5.7
- fixed: PayPal redirect issue
- fixed: Contact Form after submit bugs
- fixed: WooCommerce conflict when multiple Users add item to the cart at the same time

= 2.1.1 =
- Security update

= 2.1.0 =
- new: Hover effect settings added for Submit button (Customizer)
- fixed: Datepciker OK button appearance
- fixed: Condition link appearance in dashboard
- fixed: Set value action delay (Conditional system)
- fixed: HTML & Line elements disappear after set conditions to these elements
- fixed: Toggle to Drop Down condition bug
- fixed: Stripe 'Public key' typo

= 2.0.10 =
- upd: Watermark 'Powered by Stylemix' is not visible when Pro plugin activated
