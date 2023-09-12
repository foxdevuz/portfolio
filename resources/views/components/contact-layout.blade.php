<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>My Address</h3>
                    <p>Pop district, Namangan, Uzbekistan</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                        <a href="https://twitter.com/foxdevuz" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/foxdevuz" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/abdullajonov.pro" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://t.me/foxdevuz" ><i class="bi bi-telegram"></i></a>
                        <a href="https://github.com/foxdevuz" ><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>foxdevuz@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p>+998 90 750 71 05</p>
                </div>
            </div>
        </div>

        <form action="/send-Mail" method="GET" class="php-email-form mt-4">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">Your Message has been sent. Thank You!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>
</section>
