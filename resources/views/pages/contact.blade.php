@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mt-4">
    <h2>Get in Touch</h2>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" class="form-control" placeholder="John Doe">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" id="email" class="form-control" placeholder="email@example.com">
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Contact</label>
            <textarea id="message" rows="4" class="form-control" placeholder="Write your message..."></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary">Send Message</button>
        </div>
    </form>
</div>
@endsection
