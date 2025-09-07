<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Booking, Contact, Gallery, ProductEnquiry, Project, Room};

class FrontController extends Controller
{
    public function home()
    {
        $sliders = getAllSlider(1);
        $galleries = Gallery::where('status', 1)->take(3)->get();
        // dd($galleries->toArray());
        // dd($sliders->toArray());
        // return view('home', compact('sliders', 'galleries'));
        return view('home', compact('sliders', 'galleries'));
    }

    public function roomDetailPage($id)
    {
        $room = Room::findOrFail($id); // Use findOrFail to handle cases where the room is not found
        return view('rooms_details', compact('room'));
    }

    public function openRoomBookingPage($id = null)
    {
        $rooms = Room::where('status', 1)->get();
        $room = Room::find($id); // Use findOrFail to handle cases where the room is not found
        return view('rooms_booking', compact('room', 'rooms'));
    }

    public function roomBookingStore(Request $request)
    {
        $validateData = $request->validate([
            'room_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'arrival' => 'required|date',
            'departure' => 'required|date',
        ]);

        // Save the booking (assuming you have a Booking model)
        Booking::create($validateData);

        // Redirect with success message
        return redirect()->route('front.room')->with('success', 'Your room has been booked successfully!');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function kedarnath()
    {
        return view('kedarnath');
    }
    public function tungnathChandrashila()
    {
        return view('tungnath_chandrashila');
    }
    public function nagTibba()
    {
        return view('nag_tibba');
    }
    public function valleyOfFlowers()
    {
        return view('valley_of_flowers');
    }
    public function harsilValley()
    {
        return view('harsil_valley');
    }
    public function chardhamYatra()
    {
        return view('chardham_yatra');
    }
    public function room()
    {
        $rooms = Room::where('status', 1)->get();
        return view('room', compact('rooms'));
    }
    public function gallery()
    {
        // $mivans = Gallery::where(['status' => 1, 'type' => 'mivan'])->get();
        // $post_tensionings = Gallery::where(['status' => 1, 'type' => 'post_tensioning'])->get();
        $galleries = Gallery::where('status', 1)->get();
        // dd($mivans->toArray(), $post_tensionings->toArray());
        return view('gallery', compact('galleries'));
    }
    public function construction()
    {
        return view('construction');
    }
    public function interior()
    {
        return view('interior');
    }
    public function rentProperty()
    {
        return view('rent_property');
    }
    public function blog()
    {
        return view('blog');
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function termsCondition()
    {
        return view('terms_condition');
    }

    public function shippingPolicy()
    {
        return view('shipping_policy');
    }

    public function refundCancellationPolicy()
    {
        return view('refund_cancellation_policy');
    }

    public function services()
    {
        return view('services');
    }

    public function vision()
    {
        return view('vision');
    }

    public function projects()
    {
        $projects = Project::status(true)->get(); // this is correct usage
        // dd($projects);
        return view('projects', compact('projects'));
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function saveContactUs(Request $request)
    {
        // dd($request->toArray());
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'city' => 'nullable',
            // 'subject' => 'nullable',
            'message' => 'required',
        ]);

        $create = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            // 'subject' => $request->subject,
            'message' => $request->message,
        ];
        $contact = Contact::create($create);
        // dd($contact);
        return redirect()->back()->with('success', "Thank you for contacting US");
    }

    public function saveEnquiryStore(Request $request)
    {
        // dd($request->all());
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name'  => 'nullable|string|max:255',
                'email'      => 'nullable|email|max:255',
                'phone'      => 'required|string|max:20',
                'city'       => 'required|string|max:255',
                'country'    => 'nullable|string|max:255',
                'message'    => 'nullable|string',
                'product_id' => 'required|exists:products,id',
                'category_id' => 'required|exists:categories,id',
            ]);
            ProductEnquiry::create($validated);
            return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error :'. $e->getMessage());
        }
    }
    // public function saveEnquiryStore(Request $request){
    //     $countries_json = '[
    //         {"name": "Afghanistan", code: "AF"},
    //         {"name": "Åland Islands", code: "AX"},
    //         {"name": "Albania", code: "AL"},
    //         {"name": "Algeria", code: "DZ"},
    //         {"name": "American Samoa", code: "AS"},
    //         {"name": "AndorrA", code: "AD"},
    //         {"name": "Angola", code: "AO"},
    //         {"name": "Anguilla", code: "AI"},
    //         {"name": "Antarctica", code: "AQ"},
    //         {"name": "Antigua and Barbuda", code: "AG"},
    //         {"name": "Argentina", code: "AR"},
    //         {"name": "Armenia", code: "AM"},
    //         {"name": "Aruba", code: "AW"},
    //         {"name": "Australia", code: "AU"},
    //         {"name": "Austria", code: "AT"},
    //         {"name": "Azerbaijan", code: "AZ"},
    //         {"name": "Bahamas", code: "BS"},
    //         {"name": "Bahrain", code: "BH"},
    //         {"name": "Bangladesh", code: "BD"},
    //         {"name": "Barbados", code: "BB"},
    //         {"name": "Belarus", code: "BY"},
    //         {"name": "Belgium", code: "BE"},
    //         {"name": "Belize", code: "BZ"},
    //         {"name": "Benin", code: "BJ"},
    //         {"name": "Bermuda", code: "BM"},
    //         {"name": "Bhutan", code: "BT"},
    //         {"name": "Bolivia", code: "BO"},
    //         {"name": "Bosnia and Herzegovina", code: "BA"},
    //         {"name": "Botswana", code: "BW"},
    //         {"name": "Bouvet Island", code: "BV"},
    //         {"name": "Brazil", code: "BR"},
    //         {"name": "British Indian Ocean Territory", code: "IO"},
    //         {"name": "Brunei Darussalam", code: "BN"},
    //         {"name": "Bulgaria", code: "BG"},
    //         {"name": "Burkina Faso", code: "BF"},
    //         {"name": "Burundi", code: "BI"},
    //         {"name": "Cambodia", code: "KH"},
    //         {"name": "Cameroon", code: "CM"},
    //         {"name": "Canada", code: "CA"},
    //         {"name": "Cape Verde", code: "CV"},
    //         {"name": "Cayman Islands", code: "KY"},
    //         {"name": "Central African Republic", code: "CF"},
    //         {"name": "Chad", code: "TD"},
    //         {"name": "Chile", code: "CL"},
    //         {"name": "China", code: "CN"},
    //         {"name": "Christmas Island", code: "CX"},
    //         {"name": "Cocos (Keeling) Islands", code: "CC"},
    //         {"name": "Colombia", code: "CO"},
    //         {"name": "Comoros", code: "KM"},
    //         {"name": "Congo", code: "CG"},
    //         {"name": "Congo, The Democratic Republic of the", code: "CD"},
    //         {"name": "Cook Islands", code: "CK"},
    //         {"name": "Costa Rica", code: "CR"},
    //         {"name": "Cote D\"Ivoire", code: "CI"},
    //         {"name": "Croatia", code: "HR"},
    //         {"name": "Cuba", code: "CU"},
    //         {"name": "Cyprus", code: "CY"},
    //         {"name": "Czech Republic", code: "CZ"},
    //         {"name": "Denmark", code: "DK"},
    //         {"name": "Djibouti", code: "DJ"},
    //         {"name": "Dominica", code: "DM"},
    //         {"name": "Dominican Republic", code: "DO"},
    //         {"name": "Ecuador", code: "EC"},
    //         {"name": "Egypt", code: "EG"},
    //         {"name": "El Salvador", code: "SV"},
    //         {"name": "Equatorial Guinea", code: "GQ"},
    //         {"name": "Eritrea", code: "ER"},
    //         {"name": "Estonia", code: "EE"},
    //         {"name": "Ethiopia", code: "ET"},
    //         {"name": "Falkland Islands (Malvinas)", code: "FK"},
    //         {"name": "Faroe Islands", code: "FO"},
    //         {"name": "Fiji", code: "FJ"},
    //         {"name": "Finland", code: "FI"},
    //         {"name": "France", code: "FR"},
    //         {"name": "French Guiana", code: "GF"},
    //         {"name": "French Polynesia", code: "PF"},
    //         {"name": "French Southern Territories", code: "TF"},
    //         {"name": "Gabon", code: "GA"},
    //         {"name": "Gambia", code: "GM"},
    //         {"name": "Georgia", code: "GE"},
    //         {"name": "Germany", code: "DE"},
    //         {"name": "Ghana", code: "GH"},
    //         {"name": "Gibraltar", code: "GI"},
    //         {"name": "Greece", code: "GR"},
    //         {"name": "Greenland", code: "GL"},
    //         {"name": "Grenada", code: "GD"},
    //         {"name": "Guadeloupe", code: "GP"},
    //         {"name": "Guam", code: "GU"},
    //         {"name": "Guatemala", code: "GT"},
    //         {"name": "Guernsey", code: "GG"},
    //         {"name": "Guinea", code: "GN"},
    //         {"name": "Guinea-Bissau", code: "GW"},
    //         {"name": "Guyana", code: "GY"},
    //         {"name": "Haiti", code: "HT"},
    //         {"name": "Heard Island and Mcdonald Islands", code: "HM"},
    //         {"name": "Holy See (Vatican City State)", code: "VA"},
    //         {"name": "Honduras", code: "HN"},
    //         {"name": "Hong Kong", code: "HK"},
    //         {"name": "Hungary", code: "HU"},
    //         {"name": "Iceland", code: "IS"},
    //         {"name": "India", code: "IN"},
    //         {"name": "Indonesia", code: "ID"},
    //         {"name": "Iran, Islamic Republic Of", code: "IR"},
    //         {"name": "Iraq", code: "IQ"},
    //         {"name": "Ireland", code: "IE"},
    //         {"name": "Isle of Man", code: "IM"},
    //         {"name": "Israel", code: "IL"},
    //         {"name": "Italy", code: "IT"},
    //         {"name": "Jamaica", code: "JM"},
    //         {"name": "Japan", code: "JP"},
    //         {"name": "Jersey", code: "JE"},
    //         {"name": "Jordan", code: "JO"},
    //         {"name": "Kazakhstan", code: "KZ"},
    //         {"name": "Kenya", code: "KE"},
    //         {"name": "Kiribati", code: "KI"},
    //         {"name": "Korea, Democratic People\"S Republic of", code: "KP"},
    //         {"name": "Korea, Republic of", code: "KR"},
    //         {"name": "Kuwait", code: "KW"},
    //         {"name": "Kyrgyzstan", code: "KG"},
    //         {"name": "Lao People\"S Democratic Republic", code: "LA"},
    //         {"name": "Latvia", code: "LV"},
    //         {"name": "Lebanon", code: "LB"},
    //         {"name": "Lesotho", code: "LS"},
    //         {"name": "Liberia", code: "LR"},
    //         {"name": "Libyan Arab Jamahiriya", code: "LY"},
    //         {"name": "Liechtenstein", code: "LI"},
    //         {"name": "Lithuania", code: "LT"},
    //         {"name": "Luxembourg", code: "LU"},
    //         {"name": "Macao", code: "MO"},
    //         {"name": "Macedonia, The Former Yugoslav Republic of", code: "MK"},
    //         {"name": "Madagascar", code: "MG"},
    //         {"name": "Malawi", code: "MW"},
    //         {"name": "Malaysia", code: "MY"},
    //         {"name": "Maldives", code: "MV"},
    //         {"name": "Mali", code: "ML"},
    //         {"name": "Malta", code: "MT"},
    //         {"name": "Marshall Islands", code: "MH"},
    //         {"name": "Martinique", code: "MQ"},
    //         {"name": "Mauritania", code: "MR"},
    //         {"name": "Mauritius", code: "MU"},
    //         {"name": "Mayotte", code: "YT"},
    //         {"name": "Mexico", code: "MX"},
    //         {"name": "Micronesia, Federated States of", code: "FM"},
    //         {"name": "Moldova, Republic of", code: "MD"},
    //         {"name": "Monaco", code: "MC"},
    //         {"name": "Mongolia", code: "MN"},
    //         {"name": "Montserrat", code: "MS"},
    //         {"name": "Morocco", code: "MA"},
    //         {"name": "Mozambique", code: "MZ"},
    //         {"name": "Myanmar", code: "MM"},
    //         {"name": "Namibia", code: "NA"},
    //         {"name": "Nauru", code: "NR"},
    //         {"name": "Nepal", code: "NP"},
    //         {"name": "Netherlands", code: "NL"},
    //         {"name": "Netherlands Antilles", code: "AN"},
    //         {"name": "New Caledonia", code: "NC"},
    //         {"name": "New Zealand", code: "NZ"},
    //         {"name": "Nicaragua", code: "NI"},
    //         {"name": "Niger", code: "NE"},
    //         {"name": "Nigeria", code: "NG"},
    //         {"name": "Niue", code: "NU"},
    //         {"name": "Norfolk Island", code: "NF"},
    //         {"name": "Northern Mariana Islands", code: "MP"},
    //         {"name": "Norway", code: "NO"},
    //         {"name": "Oman", code: "OM"},
    //         {"name": "Pakistan", code: "PK"},
    //         {"name": "Palau", code: "PW"},
    //         {"name": "Palestinian Territory, Occupied", code: "PS"},
    //         {"name": "Panama", code: "PA"},
    //         {"name": "Papua New Guinea", code: "PG"},
    //         {"name": "Paraguay", code: "PY"},
    //         {"name": "Peru", code: "PE"},
    //         {"name": "Philippines", code: "PH"},
    //         {"name": "Pitcairn", code: "PN"},
    //         {"name": "Poland", code: "PL"},
    //         {"name": "Portugal", code: "PT"},
    //         {"name": "Puerto Rico", code: "PR"},
    //         {"name": "Qatar", code: "QA"},
    //         {"name": "Reunion", code: "RE"},
    //         {"name": "Romania", code: "RO"},
    //         {"name": "Russian Federation", code: "RU"},
    //         {"name": "RWANDA", code: "RW"},
    //         {"name": "Saint Helena", code: "SH"},
    //         {"name": "Saint Kitts and Nevis", code: "KN"},
    //         {"name": "Saint Lucia", code: "LC"},
    //         {"name": "Saint Pierre and Miquelon", code: "PM"},
    //         {"name": "Saint Vincent and the Grenadines", code: "VC"},
    //         {"name": "Samoa", code: "WS"},
    //         {"name": "San Marino", code: "SM"},
    //         {"name": "Sao Tome and Principe", code: "ST"},
    //         {"name": "Saudi Arabia", code: "SA"},
    //         {"name": "Senegal", code: "SN"},
    //         {"name": "Serbia and Montenegro", code: "CS"},
    //         {"name": "Seychelles", code: "SC"},
    //         {"name": "Sierra Leone", code: "SL"},
    //         {"name": "Singapore", code: "SG"},
    //         {"name": "Slovakia", code: "SK"},
    //         {"name": "Slovenia", code: "SI"},
    //         {"name": "Solomon Islands", code: "SB"},
    //         {"name": "Somalia", code: "SO"},
    //         {"name": "South Africa", code: "ZA"},
    //         {"name": "South Georgia and the South Sandwich Islands", code: "GS"},
    //         {"name": "Spain", code: "ES"},
    //         {"name": "Sri Lanka", code: "LK"},
    //         {"name": "Sudan", code: "SD"},
    //         {"name": "Suriname", code: "SR"},
    //         {"name": "Svalbard and Jan Mayen", code: "SJ"},
    //         {"name": "Swaziland", code: "SZ"},
    //         {"name": "Sweden", code: "SE"},
    //         {"name": "Switzerland", code: "CH"},
    //         {"name": "Syrian Arab Republic", code: "SY"},
    //         {"name": "Taiwan, Province of China", code: "TW"},
    //         {"name": "Tajikistan", code: "TJ"},
    //         {"name": "Tanzania, United Republic of", code: "TZ"},
    //         {"name": "Thailand", code: "TH"},
    //         {"name": "Timor-Leste", code: "TL"},
    //         {"name": "Togo", code: "TG"},
    //         {"name": "Tokelau", code: "TK"},
    //         {"name": "Tonga", code: "TO"},
    //         {"name": "Trinidad and Tobago", code: "TT"},
    //         {"name": "Tunisia", code: "TN"},
    //         {"name": "Turkey", code: "TR"},
    //         {"name": "Turkmenistan", code: "TM"},
    //         {"name": "Turks and Caicos Islands", code: "TC"},
    //         {"name": "Tuvalu", code: "TV"},
    //         {"name": "Uganda", code: "UG"},
    //         {"name": "Ukraine", code: "UA"},
    //         {"name": "United Arab Emirates", code: "AE"},
    //         {"name": "United Kingdom", code: "GB"},
    //         {"name": "United States", code: "US"},
    //         {"name": "United States Minor Outlying Islands", code: "UM"},
    //         {"name": "Uruguay", code: "UY"},
    //         {"name": "Uzbekistan", code: "UZ"},
    //         {"name": "Vanuatu", code: "VU"},
    //         {"name": "Venezuela", code: "VE"},
    //         {"name": "Viet Nam", code: "VN"},
    //         {"name": "Virgin Islands, British", code: "VG"},
    //         {"name": "Virgin Islands, U.S.", code: "VI"},
    //         {"name": "Wallis and Futuna", code: "WF"},
    //         {"name": "Western Sahara", code: "EH"},
    //         {"name": "Yemen", code: "YE"},
    //         {"name": "Zambia", code: "ZM"},
    //         {"name": "Zimbabwe", code: "ZW"}
    //         ]';
    //     $countries = json_decode($countries_json, true);
    //     dd($request->all(), $countries);
    // }
    public function showCategories($category)
    {
        // Assuming you have a method to get categories by slug
        $category = \App\Models\Categories::with("products")->where('slug', $category)->firstOrFail();
        return view('categories.show', compact('category'));
    }

    public function showProducts($category, $product)
    {
        // Assuming you have a method to get products by category slug and product slug
        $countries = \App\Models\Country::get();
        $category = \App\Models\Categories::where('slug', $category)->firstOrFail();
        $product = \App\Models\Product::where('slug', $product)->where('category_id', $category->id)->firstOrFail();
        return view('products.show', compact('countries', 'category', 'product'));
    }

    public function showSingleCategories($slug)
    {
        try {
            $category = \App\Models\Categories::with('products')->where('slug', $slug)->firstOrFail();
            // dd($category);
            return view('categories.single', compact('category'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Category not found.');
        }
    }
}
