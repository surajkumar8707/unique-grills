@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')
    <br><br><br>
    <h1 class="text-center text-5xl font-bold mb-12">Terms & Conditions</h1>
    <div class="max-w-4xl mx-auto space-y-4" data-id="6c83d3a"
        data-element_type="widget" data-widget_type="text-editor.default">
        <p>Welcome to {{ getSettings()->app_name }}! These Terms and Conditions (“Terms”) govern your use of our website located at <a
                href="https://heyconcrete.com">www.heyconcrete.com</a> (the “Website”) and the purchase of products from us.
            By accessing or using our Website, you agree to comply with and be bound by these Terms. Please read them
            carefully before using our Website.</p>
        <ol>
            <li><strong> Acceptance of Terms</strong></li>
        </ol>
        <p>By using our Website, you agree to these Terms and any additional terms and conditions that may apply to specific
            sections of the Website or to products and services we offer. If you do not agree with these Terms, please do
            not use the Website.</p>
        <ol start="2">
            <li><strong> Changes to Terms</strong></li>
        </ol>
        <p>{{ getSettings()->app_name }} reserves the right to modify or update these Terms at any time. Any changes will be effective
            immediately upon posting on the Website. Your continued use of the Website after any changes constitutes your
            acceptance of the revised Terms.</p>
        <ol start="3">
            <li><strong> Products and Services</strong></li>
        </ol>
        <p>{{ getSettings()->app_name }} specializes in manufacturing and selling concrete products. While we strive to ensure that product
            descriptions and images on our Website are accurate, we do not guarantee that they are error-free or complete.
            The availability of products and services is subject to change without notice.</p>
        <ol start="4">
            <li><strong> Ordering and Payment</strong></li>
        </ol>
        <p>To place an order, you must be at least 18 years old. When you place an order, you agree to provide accurate and
            complete information. All orders are subject to acceptance by {{ getSettings()->app_name }}. We reserve the right to refuse or
            cancel any order at our discretion. Payment must be made through the methods provided on our Website. Prices are
            subject to change without notice.</p>
        <ol start="5">
            <li><strong> Shipping and Delivery</strong></li>
        </ol>
        <p>Shipping and delivery times are estimates and are not guaranteed. {{ getSettings()->app_name }} is not responsible for any delays
            caused by shipping carriers or customs. Shipping costs will be calculated based on the delivery address and
            included at checkout. Please ensure that the shipping information provided is accurate to avoid delays or
            additional charges.</p>
        <ol start="6">
            <li><strong> Returns and Refunds</strong></li>
        </ol>
        <p>Our products are made to order, and we do not accept returns or exchanges unless the product is defective or
            damaged upon delivery. If you receive a defective or damaged product, please contact us within 3-5 days of
            receipt with photographic evidence, and we will assist you with a replacement or refund. Custom orders are
            non-refundable.</p>
        <ol start="7">
            <li><strong> Intellectual Property</strong></li>
        </ol>
        <p>All content on the Website, including but not limited to text, images, logos, and designs, is the property of Hey
            Concrete or its licensors and is protected by intellectual property laws. You may not use, reproduce, or
            distribute any content from the Website without our prior written consent.</p>
        <ol start="8">
            <li><strong> User Conduct</strong></li>
        </ol>
        <p>You agree to use the Website only for lawful purposes and in accordance with these Terms. You must not:</p>
        <ul>
            <li>Engage in any activity that disrupts or interferes with the Website’s functionality.</li>
            <li>Attempt to gain unauthorized access to any part of the Website or its systems.</li>
            <li>Post or transmit any content that is unlawful, defamatory, obscene, or otherwise objectionable.&nbsp; &nbsp;
            </li>
        </ul>
        <ol start="9">
            <li><strong> Limitation of Liability</strong></li>
        </ol>
        <p>To the fullest extent permitted by law, {{ getSettings()->app_name }} is not liable for any indirect, incidental, special, or
            consequential damages arising from your use of the Website or the purchase of our products. Our liability is
            limited to the amount paid for the product or service in question.</p>
        <ol start="10">
            <li><strong> Indemnification</strong></li>
        </ol>
        <p>You agree to indemnify and hold harmless {{ getSettings()->app_name }}, its officers, directors, employees, and agents from and
            against any claims, liabilities, damages, losses, and expenses arising out of or related to your use of the
            Website or violation of these Terms.</p>
        <ol start="11">
            <li><strong> Governing Law</strong></li>
        </ol>
        <p>These Terms and your use of the Website will be governed by and construed in accordance with the laws of India,
            without regard to its conflict of law principles. Any disputes arising from these Terms will be subject to the
            exclusive jurisdiction of the courts located in PAN India.</p>
        <ol start="12">
            <li><strong> Contact Us</strong></li>
        </ol>
        <p>If you have any questions about these Terms or our products, please contact us at:</p>
        <p>{{ getSettings()->app_name }}</p>
        <p>Email: <a href="mailto:info@heyconcrete.com">info@heyconcrete.com</a></p>
        <p>Phone: 8107719987</p>
        <p>Thank you for choosing {{ getSettings()->app_name }}. We appreciate your business!</p>
    </div>
@endsection
