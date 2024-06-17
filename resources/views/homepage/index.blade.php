@extends('partials.main')
@section('content')
    <div class="hero" id="#home">
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

    <div class="about">
        <section>
            <h1 class="titleIntro">About Me</h1>
            <h3>Web Developer | UI UX Design</h3>
            <p>Welcome to my portfolio website, let me introduce myself, my name is Habib Ahmad, a bachelor's degree majoring in Information Systems. I have an interest in the world of programming, especially Web Development and Web Design, so if you need or have work with Web Development or Web Design, don't hesitate to contact me.
            </p>
            <a href="">Hello</a>
        </section>
        <section>
            <img src="{{ asset('img/profil1.png') }}" alt="" width="100px">
        </section>
    </div>

    <div class="contact">
        <h1 class="titleIntro">Contact Me</h1>
        <div class="fullname">
            <label for="#fullname">Fullname <span style="color: #fa1872">*</span></label>
            <input type="text" id="fullname" placeholder="Your Name">
        </div>
        <div class="email">
            <label for="#email">Email <span style="color: #fa1872">*</span></label>
            <input type="email" id="email" placeholder="Your Email">
        </div>
        <div class="message">
            <label for="#message">Message <span style="color: #fa1872">*</span></label>
            <textarea name="message" id="message" placeholder="Write Messages"></textarea>
        </div>
        <button type="submit" id="sendmessage">Send Message</button>
    </div>
@endsection