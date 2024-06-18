@extends('partials.main')
@section('content')
<div class="contact" id="contact">
<h1 class="titleIntro">Edit Contact</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="fullname">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="email">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{ old('email', $contact->email) }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="message">
            <label for="message">Message:</label>
            <textarea id="message" name="message">{{ old('message', $contact->message) }}</textarea>
            @error('message')
                <div>{{ $message }}</div>
            @enderror
        </div>

    </form>
</div>
@endsection