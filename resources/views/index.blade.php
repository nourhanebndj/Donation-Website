<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
    <!-- IMPORT BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- IMPORT font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="{{ asset('mainassets/images/donation.png') }}">
    <title>Donation</title>
</head>
<body>
    <header class="navbar">
        <a href="/" class="logo">
            <img src="{{ asset('mainassets/images/donation.png') }}" alt="Donation Logo" style="height: 30px;">
        </a>
        <nav role="navigation">
            <a href="#why-donation">Why Donation</a>
            <a href="#contact">Contact</a>
            <a href="#FAQs">FAQs</a>
        </nav>
        <div class="buttons">
            <form action="{{ route('payment.process') }}" method="POST">
                @csrf
                <button type="submit" class="donation">Donate Now</button>
            </form>
        </div>
        <button class="hamburger" aria-label="Toggle menu" onclick="toggleMenu()">&#9776;</button> 
    </header>
    
    <main>
        <div class="container">
            <img src="{{ asset('mainassets/images/hero-section.png') }}" alt="Hero Image">
            <div class="hero-text">
                <h1>Join Us in Making a Difference</h1>
                <p>Your support empowers our mission to bring hope and assistance to those in need. Every donation, big or small, makes a meaningful difference.</p>
                <div class="buttons-donation">
                    <form action="{{ route('payment.process') }}" method="POST">
                        @csrf
                        <button type="submit" class="donation">Donate Now</button>
                    </form>
                </div>      
            </div>
        </div>
    </main>

    <section class="partenarship">
        <div class="partenarship-title">
            <h3>Together for Impact: Our Valued Partners</h3>
        </div>
        <div class="logos">
            <div class="logos-slide">
                <img src="{{ asset('mainassets/images/logos/logo1.png') }}" alt="Partner Logo 1"/>
                <img src="{{ asset('mainassets/images/logos/logo3.png') }}" alt="Partner Logo 3"/>
                <img src="{{ asset('mainassets/images/logos/logo2.png') }}" alt="Partner Logo 2"/>
                <img src="{{ asset('mainassets/images/logos/logo4.png') }}" alt="Partner Logo 4"/>
                <img src="{{ asset('mainassets/images/logos/logo5.png') }}" alt="Partner Logo 5"/>
            </div>
            <div class="logos-slide">
                <img src="{{ asset('mainassets/images/logos/logo1.png') }}" alt="Partner Logo 1"/>
                <img src="{{ asset('mainassets/images/logos/logo3.png') }}" alt="Partner Logo 3"/>
                <img src="{{ asset('mainassets/images/logos/logo2.png') }}" alt="Partner Logo 2"/>
                <img src="{{ asset('mainassets/images/logos/logo4.png') }}" alt="Partner Logo 4"/>
                <img src="{{ asset('mainassets/images/logos/logo5.png') }}" alt="Partner Logo 5"/>
            </div>
        </div>
    </section>

    <section class="features" id="why-donation">
        <h1>Why Donations</h1>
        <div class="feature-container">
            <div class="feature">
                <img src="{{ asset('mainassets/images/icons/icon1.png') }}" alt="Supporting Causes You Care About">
                <h2>Supporting Causes You Care About</h2>
                <p>Donating allows you to support issues and causes that are close to your heart. Whether it's helping children, supporting disaster relief, or funding medical research, your donation can make a real difference in areas that matter to you.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('mainassets/images/icons/icon2.png') }}" alt="Making a Positive Impact">
                <h2>Making a Positive Impact</h2>
                <p>Donations help fund vital projects and services. For many nonprofits and charity organizations, donations are what keep them running and make their work possible, impacting countless lives.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('mainassets/images/icons/icon3.png') }}" alt="Promoting Generosity in Your Community">
                <h2>Promoting Generosity in Your Community</h2>
                <p>When you donate, you set a precedent and encourage others to also contribute. This can create a culture of generosity in your community, leading to greater communal support and resilience.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('mainassets/images/icons/icon4.png') }}" alt="Personal Satisfaction">
                <h2>Personal Satisfaction</h2>
                <p>Many people find that donating gives them a profound sense of personal satisfaction. Knowing that you are contributing to a better world can enhance your personal joy and fulfillment.</p>
            </div>
        </div>
    </section>

    <section class="donations" id="donation">
        <div class="donation">
            <h3>Empower Transformative Change: Support Our Mission with Your <span>Donation</span></h3>
            <div class="buttons">
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf
                    <button type="submit" class="get-started">Donate Now</button>
                </form>
            </div>       
             <p><i>Your support can transform lives—join us in making an impact with your donation now!</i></p>
        </div>
    </section>

    <section class="faq" id="FAQs">
        <div class="faq-heading">
            <h3>FAQs</h3>
            <p>Everything you need to know about making a donation and how your support helps.</p>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">How can I make a donation?</button>
                <div class="faq-answer">
                    <p>You can make a donation by clicking on the "Donate Now" button on our website. You will be redirected to a secure payment page where you can choose your preferred payment method.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is my donation tax-deductible?</button>
                <div class="faq-answer">
                    <p>Yes, your donation is tax-deductible. We will provide you with a receipt that you can use for tax purposes.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Where does my donation go?</button>
                <div class="faq-answer">
                    <p>Your donation goes directly towards funding our various projects and initiatives aimed at helping those in need. You can read more about our projects on our website.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can I donate anonymously?</button>
                <div class="faq-answer">
                    <p>Yes, you can choose to donate anonymously. Simply select the anonymous option during the donation process.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How can I get involved beyond donating?</button>
                <div class="faq-answer">
                    <p>There are many ways to get involved beyond donating. You can volunteer your time, participate in our events, or help spread the word about our mission. Visit our "Get Involved" page for more information.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Reach out to us—we're here to help!</p>
            <div class="contact-content">
                <div class="contact-image">
                    <div class="image"> 
                        <img src="{{ asset('mainassets/videos/Contactus.webp') }}" alt="Donation">
                    </div>
                </div>
                <form class="contact-form" action="#" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/213658934340"><i class="fab fa-whatsapp"></i></a>
        <span>Contact Us</span>
    </div>

    <footer class="main-footer">
        <section class="top-footer">
            <div class="logo-box">
                <div class="logo">
                    <img src="{{ asset('mainassets/images/donation_white.png') }}" alt="Donation Logo" style="height: 50px;">
                </div>
                <p>Your support empowers our mission to bring hope and assistance to those in need. Every donation, big or small, makes a meaningful difference.</p>
            </div>

            <div class="label-menu-box">
                <h3 class="label-menu">Links</h3>
                <ul class="menu-box">
                    <li><a href="#why-donation">Why Donation</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#FAQs">FAQs</a></li>
                </ul>
            </div>

            <div class="label-menu-box">
                <h3 class="label-menu">Contact</h3>
                <ul class="menu-box">
                    <li>
                        <i class="bx bx-map"></i>
                        <a href="#">Annaba, Algeria</a>
                    </li>
                    <li>
                        <i class="bx bx-envelope"></i>
                        <a href="mailto:nourhanebndj@gmail.com">nourhanebndj@gmail.com</a>
                    </li>
                    <li>
                        <i class="bx bx-phone"></i>
                        <a href="tel:+213658934340">+213658934340</a>
                    </li>
                </ul>
            </div>

            <div class="label-menu-box payment-methods">
                <h3 class="label-menu">Payment Methods</h3>
                <p class="payment-description">We accept secure payments via Paypal,Visa and MasterCard.</p>
                <div class="payment-icons">
                    <img src="{{ asset('mainassets/images/payment/paypal_logo.png') }}" alt="Paypal Payment">
                    <img src="{{ asset('mainassets/images/payment/visa_logo.jpg') }}" alt="Visa Payment">
                    <img src="{{ asset('mainassets/images/payment/mastercard_logo.png') }}" alt="Master Card Payment">

                </div>
            </div>
        </section>
        
        <section class="bottom-footer">
            <p class="copyright-txt">© 2025 Bendjeddou Nourhane. All Rights Reserved.</p>
            <div class="social-media">
                <a href="https://github.com/nourhanebndj"><i class='bx bxl-github'></i></a>
                <a href="https://www.facebook.com/profile.php?id=100027476321541"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.linkedin.com/in/nourhane-bendjeddou-a4252625b/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://wa.me/213658934340"><i class='bx bxl-whatsapp'></i></a>

            </div>
        </section>
    </footer>

    <script src="{{ asset('mainassets/js/script.js') }}"></script>
</body>
</html>