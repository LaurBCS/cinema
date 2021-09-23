@extends('layout.layout')

@section('content')

    <main>
        <div class="hero w-100 d-flex justify-content-center align-items-center position-relative">
            <h1 class="fs-1 text-uppercase fw-light text-white">Contact Us</h1>
        </div>

        <section class="contact mx-auto my-0">
            <h2 class="text-uppercase position-relative fs-4 fw-light">Send a message</h2>
            <div class="wrapper d-flex flex-column flex-xl-row align-items-start justify-content-between">
                <form class="d-flex flex-column justify-content-between">
                    <label for="first-name" class="fs-6 fw-light text-uppercase">First Name</label>
                    <input type="text" id="first-name" name="first_name">
                    <label for="last-name" class="fs-6 fw-light text-uppercase">Last Name</label>
                    <input type="text" id="last-name" name="last_name">
                    <label for="e-mail" class="fs-6 fw-light">E-mail</label>
                    <input type="text" id="e-mail" name="email">
                    <label for="subject" class="fs-6 fw-light text-uppercase">Subject</label>
                    <input type="text" id="subject" name="subject">
                    <label for="message" class="fs-6 fw-light text-uppercase">Message</label>
                    <textarea id="message" name="message" placeholder="You can write here.."></textarea>
                    <input type="submit" value="Send Message" class="button text-uppercase">
                </form>

                <address>
                    <div class="d-flex flex-column justify-content-center align-items-start w-100 mt-3">
                        <i class="fas fa-map-marker-alt fs-2"></i>
                        <h3 class="fs-5 fw-light">Address</h3>
                        <p class="fs-6 fw-light">342 Sloane ST, London, W1D 3Ne</p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-start w-100">
                        <i class="fas fa-envelope-open fs-2"></i>
                        <h3 class="fs-5 fw-light">Email</h3>
                        <p class="fs-6 fw-light">info@movie.co</p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-start w-100">
                        <i class="fas fa-phone-alt fs-2"></i>
                        <h3 class="fs-5 fw-light">Telephone</h3>
                        <p class="fs-6 fw-light">+44 0330 123 4567</p>
                    </div>
                </address>
            </div>
        </section>

        <section class="address">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe d-block mx-auto my-0" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=342 Sloane ST, London, W1D 3Ne&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </section>
    </main>
    
@endsection
