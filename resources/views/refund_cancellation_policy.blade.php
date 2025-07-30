@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')
    <br><br><br>
    <h1 class="text-center text-5xl font-bold mb-12">Refund & Cancellation Policy</h1>

    <div class="max-w-4xl mx-auto space-y-4" data-id="6c83d3a" data-element_type="widget"
        data-widget_type="text-editor.default">
        <div class="elementor-element elementor-element-6c83d3a elementor-widget elementor-widget-text-editor"
            data-id="6c83d3a" data-element_type="widget" data-widget_type="text-editor.default">
            <p><strong>Overview</strong></p>
            <p>{{ getSettings()->app_name }} values your satisfaction and strives to provide high-quality concrete products to you. We
                understand that there may be instances where you need to cancel or return your order. This policy outlines
                the terms and conditions for cancellations and refunds.</p>
            <p><strong>Cancellation Policy</strong></p>
            <ul>
                <li><strong>Before Shipment:</strong> If you cancel your order before it has been shipped, we will process a
                    full refund to your original payment method. Please notify us of your cancellation within 24 hours of
                    placing your order.</li>
                <li><strong>After Shipment:</strong> Once your order has been shipped, we cannot accept cancellations.
                    However, you may return the item(s) upon receipt for a refund subject to our return policy (see below).
                </li>
            </ul>
            <p><strong>Refund Policy</strong></p>
            <ul>
                <li><strong>Eligibility:</strong> Refunds are applicable for damaged, defective, or incorrect items
                    received.</li>
                <li><strong>Timeframe:</strong> Refund requests must be submitted within 3-5 days of receiving the item(s).
                </li>
                <li><strong>Processing Time:</strong> Once we receive your return and verify the eligibility, we will
                    process your refund within 1-2 business days. The refund will be issued to your original payment method.
                </li>
                <li><strong>Shipping Costs:</strong> Return shipping costs are the responsibility of the customer, unless
                    the item is damaged or defective due to our error.</li>
            </ul>
            <p><strong>Return Process</strong></p>
            <ol>
                <li><strong>Contact Us:</strong> If you wish to return an item, please contact our customer support team at
                    [email protected] or [phone number] within 3-5 days of receiving the item.</li>
                <li><strong>Authorization:</strong> You will receive instructions on how to return the item, including any
                    necessary authorization or documentation.</li>
                <li><strong>Packaging:</strong> Please ensure the item is securely packaged in its original or similar
                    packaging to prevent damage during transit.</li>
                <li><strong>Shipping:</strong> Ship the item to the return address provided by our customer support team.
                </li>
                <li><strong>Confirmation:</strong> Once we receive your return, we will inspect the item and notify you of
                    the status of your refund.</li>
            </ol>
            <p><strong>Additional Notes</strong></p>
            <ul>
                <li><strong>Custom Orders:</strong> Custom orders are generally non-refundable unless there is a
                    manufacturing defect or error on our part.</li>
                <li><strong>Sale Items:</strong> Sale items are typically final sale and not eligible for returns or
                    refunds.</li>
                <li><strong>Damaged or Defective Items:</strong> If you receive a damaged or defective item, please notify
                    us within 24 hours of receipt and follow the return process outlined above.</li>
            </ul>
            <p><strong>Contact Information</strong></p>
            <p>For any questions or concerns regarding our refund and cancellation policy, please contact us at:</p>
            <ul>
                <li>Email: <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></li>
                <li>Phone: {{ $settings->contact }}</li>
            </ul>
            <p>We appreciate your understanding and cooperation.</p>
        </div>
    </div>
@endsection
