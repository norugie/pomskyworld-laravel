@extends ( 'layouts.layout' )

@section ( 'content' )
<!-- Map Section -->
<div class="section-block no-padding">
    <div class="row collapse full-width">
        <div class="column width-12 center">
            <div class="map-container" data-coordinates="[[40.723301,-74.002988],[40.723301,-73.990999]]" data-icon='"images/assets/map-marker.png","images/assets/map-marker-2.png"' data-info='"Downtown New York Office<br>44 St. West 32","The Brooklyn Office<br>East Village 55th St."' data-zoom-level="15" data-style="greyscale">
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
</div>
<!-- Map Section End -->
<!-- Contact Form -->
<div class="section-block replicable-content">
    <div class="row">
        <div class="column width-4">
            <h3 class="mb-30">Talk to us!</h3>
            <div class="row">
                <div class="column width-10">
                    <p>Aute veniam incididunt consectetur voluptate veniam ea. Voluptate excepteur anim cupidatat nisi quis laboris pariatur.</p>
                </div>
            </div>
            <h3 class="mb-30">Have questions?</h3>
            <div class="row">
                <div class="column width-10">
                    <p>Aute veniam incididunt consectetur voluptate veniam ea. Voluptate excepteur anim cupidatat nisi quis laboris pariatur. Ea amet non fugiat dolor duis sunt sunt eu laboris.</p>
                    <ul class="list-unstyled color-blue-light color-hover-blue-light">
                        <li><a href="/faq">Frequently Asked Questions</a></li>
                        <li><a href="/available-puppies">Available Puppies</a></li>
                        <li><a href="/prices">Adoption Prices</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column width-8 left">
            <div class="contact-form-container">
                <form class="contact-form" action="php/send-email.php" method="post" novalidate>
                    <div class="row">
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="fullname" class="form-fullname form-element rounded medium" placeholder="Full Name*" tabindex="1" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="subject" class="form-subject form-element rounded medium" placeholder="Subject*" tabindex="2" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="email" name="email" class="form-email form-element rounded medium" placeholder="Email address*" tabindex="3" required>
                            </div>
                        </div>
                        <div class="column width-6">
                            <div class="field-wrapper">
                                <input type="text" name="phone" class="form-phone form-element rounded medium" placeholder="Phone Number" tabindex="4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-12">
                            <div class="field-wrapper">
                                <textarea name="message" class="form-message form-element rounded medium" placeholder="Message*" tabindex="7" required></textarea>
                            </div>
                        </div>
                        <div class="column width-12">
                            <input type="submit" value="Send Email" class="form-submit button rounded medium bkg-blue-light bkg-hover-blue-light color-white color-hover-white">
                        </div>
                    </div>
                </form>
                <div class="form-response"></div>
            </div>
        </div>
    </div>
</div>
<!--Contact Form End -->
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9DLnnwY8lLPEuf6LFGqb9BuGN79CKM8"></script>
@endsection