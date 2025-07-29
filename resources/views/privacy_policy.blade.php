@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')

    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold theme-text mb-4">Privacy Policy</h1>

            <p>At <strong>{{ $settings->app_name }}</strong>, we value your privacy and are committed to protecting the personal
                information you share with us. This Privacy Policy outlines how we collect, use, and safeguard your data.
            </p>

            <h4 class="mt-4 fw-semibold">1. Information We Collect</h4>
            <ul>
                <li>Personal Information: Name, email address, phone number, and city collected through booking or contact
                    forms.</li>
                <li>Payment Details: Securely processed through third-party gateways; we do not store card information.</li>
                <li>Website Usage: IP address, browser type, and interactions to help us improve our site and services.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">2. How We Use Your Information</h4>
            <ul>
                <li>To confirm bookings and respond to inquiries.</li>
                <li>To send updates, trip information, or promotional emails (you may opt out anytime).</li>
                <li>To improve user experience and website functionality.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">3. Data Security</h4>
            <p>Your information is stored securely and is only accessible to authorized personnel. We use encryption and
                secure technologies to protect your data.</p>

            <h4 class="mt-4 fw-semibold">4. Sharing of Information</h4>
            <p>We do not sell, trade, or rent your personal information. It may only be shared with service providers for
                the purpose of booking and logistics.</p>

            <h4 class="mt-4 fw-semibold">5. Cookies</h4>
            <p>We may use cookies to enhance user experience. You can disable cookies through your browser settings.</p>

            <h4 class="mt-4 fw-semibold">6. Third-Party Links</h4>
            <p>Our website may contain links to external websites. We are not responsible for the privacy policies of those
                sites.</p>

            <h4 class="mt-4 fw-semibold">7. Your Consent</h4>
            <p>By using our website, you consent to our privacy policy.</p>

            <h4 class="mt-4 fw-semibold">8. Changes to This Policy</h4>
            <p>We may update this policy occasionally. Any changes will be reflected on this page.</p>

            <p class="mt-4"><strong>Last Updated:</strong> June 2025</p>
        </div>
    </section>

@endsection
