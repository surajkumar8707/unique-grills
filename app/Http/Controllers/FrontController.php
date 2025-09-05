<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Room;
use Illuminate\Http\Request;

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

    public function showCategories($category)
    {
        // Assuming you have a method to get categories by slug
        $category = \App\Models\Categories::with('products')->where('slug', $category)->firstOrFail();
        return view('categories.show', compact('category'));
    }

    public function showProducts($category, $product)
    {
        // Assuming you have a method to get products by category slug and product slug
        $category = \App\Models\Categories::where('slug', $category)->firstOrFail();
        $product = \App\Models\Product::where('slug', $product)->where('category_id', $category->id)->firstOrFail();
        return view('products.show', compact('category', 'product'));
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
