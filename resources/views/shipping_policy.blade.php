@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')
    <br><br><br>
    <h1 class="text-center text-5xl font-bold mb-12">Shipping Policy</h1>

    <div class="max-w-4xl mx-auto space-y-4" data-id="6c83d3a"
        data-element_type="widget" data-widget_type="text-editor.default">
        <p><strong>{{ getSettings()->app_name }}</strong> is committed to delivering your order promptly and securely. We understand the
            excitement of receiving your new concrete products, and we strive to ensure a smooth shipping experience.</p>
        <p><strong>Shipping Timeframes</strong></p>
        <ul>
            <li><strong>Standard Shipping:</strong> Orders typically ship within 1-2 business days from receipt of payment.
                Please allow 9-15 business days for delivery within PAN India.</li>
        </ul>
        <p><strong>Shipping Charges</strong></p>
        <ul>
            <li>Shipping charges are calculated based on the weight and dimensions of your order and your shipping address.
                You will see the estimated shipping cost during the checkout process.</li>
        </ul>
        <p><strong>Shipping Destinations</strong></p>
        <ul>
            <li>We currently ship within PAN India.</li>
        </ul>
        <p><strong>Order Tracking</strong></p>
        <ul>
            <li>Once your order has shipped, you will receive an email with a tracking status. We will keep you updated
                regarding the status of your order and delivery.</li>
        </ul>
        <p><strong>Damaged or Lost Shipments</strong></p>
        <ul>
            <li>If your order arrives damaged, please contact us within 48 hours of receipt. We will arrange for a
                replacement or refund.</li>
            <li>In the event of a lost shipment, we will investigate the matter with the courier and either resend your
                order or provide a refund.</li>
        </ul>
        <p><strong>International Shipping</strong></p>
        <ul>
            <li>We are currently exploring options for international shipping. Please check back for updates.</li>
        </ul>
        <p><strong>Custom Duties and Taxes</strong></p>
        <ul>
            <li>For international orders, please note that you may be subject to import duties and taxes upon receipt of
                your order. These charges are the responsibility of the customer.</li>
        </ul>
        <p><strong>Returns and Exchanges</strong></p>
        <ul>
            <li>Our returns and exchanges policy can be found <a href="/refund-and-cancellation-policy/">[here]</a>.</li>
        </ul>
        <p>If you have any questions about our shipping policy, please contact us at <a
                href="mailto:info@heyconcrete.com">info@heyconcrete.com</a> or 8107719987.</p>
        <p>We appreciate your business and look forward to serving you!</p>
        <p><strong>{{ getSettings()->app_name }}</strong></p>
        <p><a href="https://heyconcrete.com/">https://heyconcrete.com/</a></p>
    </div>
@endsection
