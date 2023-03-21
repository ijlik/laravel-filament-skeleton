@extends('layouts.default')

@section('content')
    <div class="container mx-auto">
        <div class="py-8">
            <h1 class="text-2xl font-bold mb-4">Welcome to My Website!</h1>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor sit amet ipsum ullamcorper sagittis. Pellentesque ultricies risus nec risus bibendum sodales.</p>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-lg font-medium mb-2">Blog</h2>
                <p class="text-gray-700">Check out our latest blog posts and stay up-to-date with our news and events.</p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Read more &rarr;</a>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-lg font-medium mb-2">Projects</h2>
                <p class="text-gray-700">Take a look at our portfolio of projects and see what we've been working on.</p>
                <a href="#" class="text-blue-500 hover:text-blue-700">View more &rarr;</a>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-lg font-medium mb-2">Contact Us</h2>
                <p class="text-gray-700">Have a question or comment? Get in touch with us today!</p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Contact us &rarr;</a>
            </div>
        </div>
    </div>
@endsection
