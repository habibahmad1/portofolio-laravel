@extends('partials.main')
@section('content')
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
    <div class="hero" id="home">
        <section>
            <h1 class="titleIntro">Habib Ahmad</h1>
            <h3>Web Developer | UI UX Design</h3>
            <p>Welcome to my portfolio website, let me introduce myself, my name is Habib Ahmad, a bachelor's degree majoring in Information Systems. I have an interest in the world of programming, especially Web Development and Web Design, so if you need or have work with Web Development or Web Design, don't hesitate to contact me.
            </p>
            <a href="">Let's Talk</a>
            <a href="">Download CV</a>
        </section>
        <section>
            <img src="{{ asset('img/profil.png') }}" alt="">
        </section>
    </div>

    <div class="about" id="about">
        <section>
            <h1 class="titleIntro">About Me</h1>
            <h3>Web Developer | UI UX Design</h3>
            <p>Welcome to my portfolio website. My name is Habib Ahmad, and I hold a bachelor's degree in Information Systems. I am passionate about programming, particularly in Web Development and Web Design. If you have any projects or need assistance in these areas, please feel free to reach out to me.</p>
            <a href="">Hello</a>
        </section>
        <section>
            <img src="{{ asset('img/profil1.png') }}" alt="" width="100px">
        </section>
    </div>

    <div class="contact" id="contact">
        <h1 class="titleIntro">Contact Me</h1>
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="fullname">
                <label for="#fullname">Fullname <span style="color: #fa1872">*</span></label>
                <input type="text" id="fullname" placeholder="Your Name" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="email">
                <label for="#email">Email <span style="color: #fa1872">*</span></label>
                <input type="email" id="email" placeholder="Your Email" name="email" required value="{{ old('email') }}">
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="message">
                <label for="#message">Message <span style="color: #fa1872">*</span></label>
                <textarea name="message" id="message" placeholder="Write Messages" required value="{{ old('message') }}"></textarea>
                @error('message')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" id="sendmessage">Send Message</button>
        </form>

        <div class="messageContact" style="display: none">
            @foreach ($contact as $item)
                <p>Name: {{ $item["name"] }}</p>
                <p>Email: {{ $item["email"] }}</p>
                <p>Message: {{ $item["message"] }}</p>
                <a href="{{ route('contact.show', $item->name) }}">detail</a>
                <a href="{{ route('contact.edit', $item->name) }}">edit</a>
                <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
                @method('delete')
                @csrf
                    <button type="submit" onclick="return confirm('delete?')">Delete</button>
                </form>
                <br>
            @endforeach
        </div>
    </div>
@endsection