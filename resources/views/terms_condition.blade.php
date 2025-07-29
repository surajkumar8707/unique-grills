@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')

    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold theme-text mb-4">Terms & Conditions</h1>

            <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using our website
                or booking a trip with <strong>{{ $settings->app_name }}</strong>.</p>

            <h4 class="mt-4 fw-semibold">1. Booking Policy</h4>
            <ul>
                <li>All bookings must be made through our official website or verified agents.</li>
                <li>A booking is considered confirmed only after full payment or as agreed by both parties.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">2. Payment Terms</h4>
            <ul>
                <li>Payments can be made via secure online payment gateways, UPI, or bank transfer.</li>
                <li>Prices are subject to change without prior notice until the booking is confirmed.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">3. Cancellation & Refund Policy</h4>
            <ul>
                <li>Cancellations made 15 days before the trip will be refunded 70% of the amount.</li>
                <li>No refund will be provided for cancellations within 7 days of the trip.</li>
                <li>In case of weather or natural calamities, rescheduling may be offered.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">4. Travel Insurance</h4>
            <p>We strongly recommend all participants have valid travel insurance covering medical emergencies and
                cancellations.</p>

            <h4 class="mt-4 fw-semibold">5. Responsibilities</h4>
            <ul>
                <li>Participants are responsible for their belongings and fitness to undertake the trek.</li>
                <li>{{ $settings->app_name }} is not liable for any injury, loss, or damage during the trip caused by unforeseen
                    events.</li>
            </ul>

            <h4 class="mt-4 fw-semibold">6. Code of Conduct</h4>
            <p>All participants must follow the instructions of the guide and maintain discipline during the journey.
                Misbehavior may result in removal from the group without refund.</p>

            <h4 class="mt-4 fw-semibold">7. Use of Media</h4>
            <p>We may use photographs or videos taken during the trip for promotional purposes. Please inform us if you wish
                to opt out.</p>

            <h4 class="mt-4 fw-semibold">8. Changes to Itinerary</h4>
            <p>{{ $settings->app_name }} reserves the right to modify the itinerary due to weather, safety, or operational concerns.
            </p>

            <p class="mt-4"><strong>Last Updated:</strong> June 2025</p>
        </div>
    </section>

@endsection
