@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terms and Conditions')
@section('content')
    <br><br><br>
    <h1 class="text-center text-5xl font-bold mb-12">Privacy Policy</h1>
    <div class="max-w-4xl mx-auto space-y-4">
        <p>{{ getSettings()->app_name }} makes a firm commitment to protecting your privacy. As part of the Terms & Conditions, the following
            policy has to be agreed with by users while visiting our website, which provides details of how your information
            is treated. This policy may be subject to changes without notice. So please check the latest version
            periodically.</p>
        <div class="elementor-element elementor-element-6c83d3a elementor-widget elementor-widget-text-editor"
            data-id="6c83d3a" data-element_type="widget" data-widget_type="text-editor.default">
            <p><span style="font-weight: 400;">{{ getSettings()->app_name }} makes a firm commitment to protecting your privacy. As part of
                    the Terms &amp; Conditions, the following policy has to be agreed with by users while visiting our
                    website, which provides details of how your information is treated. This policy may be subject to
                    changes without notice. So please check the latest version periodically.</span></p>
            <p><strong>1. What information will be collected by the website?</strong></p>
            <p><span style="font-weight: 400;">We collect all the information you provide via contact forms, such as your
                    company name, address, contact person, telephone number, fax number, email, etc. This is to enforce the
                    agreement between you and {{ getSettings()->app_name }} to ensure that you are reachable by potential trade partners. In
                    addition to it, we also collect information recorded when you browse and visit our website, including
                    but not limited to cookies, IP address, etc. This information is not used to identify you but to avoid
                    being attacked by hackers and to make customized content services for users. Additionally, through
                    processing comprehensive statistical analysis, we endeavor to provide you with more and more efficient
                    functionalities to facilitate our service. Your browser has to be configured to accept cookies to visit
                    {{ getSettings()->app_name }}.</span></p>
            <p><span style="font-weight: 400;">Sometimes we may contract with third parties to offer you products or services
                    that we do not provide. To fully access and use such services, you may be asked to provide certain
                    information.</span></p>
            <p><strong>2. How will {{ getSettings()->app_name }} use your information?</strong></p>
            <p><span style="font-weight: 400;">Information, such as company name, address, contact person, telephone number,
                    etc., will be not posted publicly and accessible outside {{ getSettings()->app_name }} Offices. Users should thus
                    exercise caution when deciding to release any identifiable information to you. {{ getSettings()->app_name }} conducts
                    analysis and research on the above information regarding users’ distribution of industry, geographic
                    location, etc. This research aims to gain a better understanding of our users and is compiled and
                    analyzed on an aggregated basis. Made-in-China.com maintains the right to share analytic results with
                    its business partners.</span></p>
            <p><strong>3. What are your and {{ getSettings()->app_name }}’s individual responsibilities regarding privacy
                    protection?</strong></p>
            <p><span style="font-weight: 400;">Once receiving your information, we will make our best effort to ensure the
                    stability and security of our systems. Unfortunately, no data transmission over the Internet or any
                    wireless network can be guaranteed to be 100% secure from hacker attacks. Therefore, {{ getSettings()->app_name }} cannot
                    make any warranty on the security of the information you transmit to us, and you do so at your own risk.
                    We will disclose your information in good faith when we believe that it is necessary to:</span></p>
            <p><span style="font-weight: 400;">Enforce the provisions of {{ getSettings()->app_name }};</span></p>
            <p><span style="font-weight: 400;">Protect and defend the rights of {{ getSettings()->app_name }}, other users, or for public
                    interests;</span></p>
            <p><span style="font-weight: 400;">Contract with third-party parties to provide you with better value and
                    service;</span></p>
            <p><span style="font-weight: 400;">Conform to national regulations or legal processes.</span></p>
            <p><span style="font-weight: 400;">As a user, you are strongly recommended not to share any confidential data on
                    the {{ getSettings()->app_name }} website. To ensure the safety and security of your company and personal information, we
                    make it very clear we never ask for such information.</span></p>
            <p><strong>Disclaimer</strong></p>
            <p><span style="font-weight: 400;">We are not responsible for the privacy protection methods of other websites
                    linked to {{ getSettings()->app_name }}.</span></p>
            <p><strong>How to contact us?</strong></p>
            <p><span style="font-weight: 400;">Should you have any suggestions on our Privacy Policy, please get in touch
                    with us.</span></p>
        </div>
    </div>
@endsection
