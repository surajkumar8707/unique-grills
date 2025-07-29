@extends('layouts.app')
@section('title', 'Contact Page')
@section('content')
    <div class="relative">
        <img alt="A stylish room with concrete wall panels, a leather armchair, a small table, and a yellow boat in the background."
            class="w-full h-auto"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCxeUNdR28ujjmzhVmiobxzfudXzHNxaxYXta54AUU1f5p5CbOmkPM1_wTDFQMQYvCSUL5kyAEc5RrcNgsUrRB-CmAL0XVdkyKkAYrUl5kcEvQuO7h8IXTDNkgKT7BXdwFxzX7gBnEYmQ58NIofkhCz83s2zeobL_zVqr9mXBZGFH5wiZcuMkVNBMP50jyETzQaDIWHLzEbwd_yEu5VhC3RuvnZXA-X8N3FDLYXQfRKbQPqZt6jyCV1NAvNQUwjvhV3DyeCf0erM6L" />
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 -mt-64 relative z-10">
        <div class="bg-white shadow-lg p-8 lg:p-12 flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/3 pr-0 lg:pr-12 mb-12 lg:mb-0">
                <div class="flex items-start mb-8">
                    <div class="bg-gray-100 p-3 rounded-full mr-6">
                        <span class="material-icons text-gray-500">location_on</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Physical Address</h3>
                        <p class="text-gray-600 mt-2">Hey Concrete<br />Bedla, Bargaon rural,<br />Udaipur -
                            313011,<br />Rajasthan, India</p>
                    </div>
                </div>
                <div class="flex items-start mb-8">
                    <div class="bg-gray-100 p-3 rounded-full mr-6">
                        <span class="material-icons text-gray-500">email</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Email Address</h3>
                        <p class="text-gray-600 mt-2">info@heyconcrete.com</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-gray-100 p-3 rounded-full mr-6">
                        <span class="material-icons text-gray-500">phone</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Phone Numbers</h3>
                        <p class="text-gray-600 mt-2">+91 810 771 9987</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-2/3">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Send us a message</h2>
                <form>
                    <div class="flex flex-col sm:flex-row sm:space-x-4 mb-4">
                        <div class="w-full sm:w-1/2 mb-4 sm:mb-0">
                            <label class="block text-sm font-medium text-gray-700" for="first-name">Name <span
                                    class="text-red-500">*</span></label>
                            <input
                                class="mt-1 block w-full border-b border-gray-300 focus:ring-0 focus:border-gray-500 py-2"
                                id="first-name" placeholder="First Name" type="text" />
                        </div>
                        <div class="w-full sm:w-1/2">
                            <label class="block text-sm font-medium text-gray-700" for="last-name"> </label>
                            <input
                                class="mt-1 block w-full border-b border-gray-300 focus:ring-0 focus:border-gray-500 py-2"
                                id="last-name" placeholder="Last Name" type="text" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="phone">Phone <span
                                class="text-red-500">*</span></label>
                        <div class="mt-1 flex">
                            <div class="relative">
                                <select
                                    class="pl-10 pr-2 py-2 border-b border-gray-300 focus:ring-0 focus:border-gray-500 bg-transparent">
                                    <option>+91</option>
                                </select>
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span>🇮🇳</span>
                                </div>
                            </div>
                            <input
                                class="block w-full border-b border-gray-300 focus:ring-0 focus:border-gray-500 py-2 ml-2"
                                id="phone" type="tel" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="city">City <span class="text-red-500">*</span></label>
                        <input class="mt-1 block w-full border-b border-gray-300 focus:ring-0 focus:border-gray-500 py-2"
                            id="city" type="text" />
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700" for="message">Your Message</label>
                        <textarea class="mt-1 block w-full border-b border-gray-300 focus:ring-0 focus:border-gray-500 py-2" id="message"
                            rows="4"></textarea>
                    </div>
                    <button
                        class="bg-black text-white font-semibold py-3 px-8 rounded-full hover:bg-gray-800 transition duration-300"
                        type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
