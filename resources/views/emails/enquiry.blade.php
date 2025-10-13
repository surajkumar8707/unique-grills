@component('mail::message')
# New Product Enquiry Received

**Product:** {{ $enquiry['product_name'] ?? 'N/A' }}
**Category:** {{ $enquiry['category_name'] ?? 'N/A' }}

**Customer Details:**
- **Name:** {{ $enquiry['first_name'] }} {{ $enquiry['last_name'] ?? '' }}
- **Email:** {{ $enquiry['email'] ?? 'N/A' }}
- **Phone:** {{ $enquiry['phone'] }}
- **City:** {{ $enquiry['city'] }}
- **Country:** {{ $enquiry['country'] ?? 'N/A' }}

**Message:**
{{ $enquiry['message'] ?? 'No message provided.' }}

@component('mail::button', ['url' => config('app.url')])
Go to Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
