<footer>
    <div class="footer-container">
        <div class="footer-col">
            <h3>ADAMS & MAGOMA</h3>
            <p>For over 25 years, we have provided exceptional legal services with integrity, dedication, and an unwavering commitment to client success. Our legacy of excellence continues to define the standard for legal representation.</p>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h3>Practice Areas</h3>
            <ul class="footer-links">
                <li><a href="{{ route('practice-areas.corporate-law') }}">Corporate Law</a></li>
                <li><a href="{{ route('practice-areas.real-estate-law') }}">Real Estate Law</a></li>
                <li><a href="{{ route('practice-areas.family-law') }}">Family Law</a></li>
                <li><a href="{{ route('practice-areas.estate-planning') }}">Estate Planning</a></li>
                <li><a href="{{ route('practice-areas.litigation') }}">Litigation</a></li>
                <li><a href="{{ route('practice-areas.employment-law') }}">Employment Law</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#attorneys">Our Attorneys</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Contact Us</h3>
            <ul class="footer-links">
                <li><i class="fas fa-map-marker-alt"></i> <a href="#">123 Justice Avenue, Nairobi, Kenya</a></li>
                <li><i class="fas fa-phone"></i> <a href="#">+254 700 123 456</a></li>
                <li><i class="fas fa-envelope"></i> <a href="#">info@adamsmagoma.com</a></li>
                <li><i class="fas fa-clock"></i> <a href="#">Mon-Fri: 8:00 AM - 6:00 PM</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Adams & Magoma Advocates. All Rights Reserved. | <a href="#" style="color: var(--text-gray);">Privacy Policy</a> | <a href="#" style="color: var(--text-gray);">Terms of Use</a></p>
    </div>
</footer>
