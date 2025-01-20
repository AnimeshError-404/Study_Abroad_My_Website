<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="{{url('frontend/style.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">LOGO</div>
            <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Services <span class="dropdown-symbol" style="color: #ffffff;">▼</span></a>
    <ul>
      <li><a href="#">Adventure</a></li>
      <li><a href="#">Relaxation</a></li>
    </ul>
  </li>
  <li><a href="#">Pages <span class="dropdown-symbol" style="color: #ffffff;">▼</span></a>
    <ul>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </li>
  <li><a href="#">FAQ</a></li>
  <li><a href="#">News <span class="dropdown-symbol" style="color: #ffffff;">▼</span></a></li>
  <li><a href="#">Contact</a></li>
</ul>
            <a href="{{url('form')}}" class="buy-now">Apply Now</a>
        </div>
        <div></div>
        <div class="main-content">
            <h1>Study In CANADA</h1>
            <p> Known for its world-renowned and top-ranked universities, Canada stands as a beacon of academic excellence, offering a diverse and inclusive environment along with a global perspective that attracts students from all over the world. </p>
            <a href="#" class="btn">Continue Reading</a>
        </div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        
        <div class="search-bar" style="margin-top: 870px; height: 200px;">
            <!-- Include Font Awesome Library -->
            <div class="button-container">
                <button class="responsive-button">
                <i class="fas fa-passport"></i> Tourist Visa
                </button>
                <button class="responsive-button">
                <i class="fas fa-graduation-cap"></i> Student Visa
                </button>
                <button class="responsive-button">
                <i class="fas fa-plane-departure"></i> Immigrant Visa
                </button>
                <button class="responsive-button">
                <i class="fas fa-bed"></i> Air Ticket & Hotel Booking
                </button>
                <button class="responsive-button">
                <i class="fas fa-envelope"></i> Inquire Now
                </button>
            </div>

        </div>
    </header>
</body>
<body>

    <section class="container"style="margin-top: 200px;">
        <div class="section-header">
            <div class="explore-header2">
                <span></span>
                <h3>About visapass</h3>
            </div>
            <h2 class="main-heading" style="margin-right: 500px;">
  <span style="color: #E48216;">14+</span> Years of Your Trust and Recommendation
</h2>

            <p class="description" style="margin-left: 500px; margin-top: -100px; margin-right: 300px;">
                For the past 14 years, we have supported students, business professionals, tourists, and clients with medical needs. While many variations of travel services exist, we focus on delivering unaltered, high-quality experiences tailored to our clients' specific needs.
            </p>
            <div class="more-destination" style="margin-bottom: 20px;margin-left: -20px;">
                <button>Read More</button>
            </div>
        </div>
        </div>

        <div class="destination-grid">
            <div class="destination-card">
                <img src="{{url('frontend/img/img1.jpg')}}" alt="Thailand" style="height: 650px;">
                <div class="card-overlay">
                    <span class="location">THAILAND</span>
                    <h3>Disney Land</h3>
                    <p>★★★★★</p>
                </div>
            </div>
            <div class="destination-card">
                <img src="{{url('frontend/img/img2.jpg')}}" alt="Norway" style="height: 650px;">
                <div class="card-overlay">
                    <span class="location">NORWAY</span>
                    <h3>Besseggen Ridge</h3>
                    <p>★★★★★</p>
                </div>
            </div>
            <!-- New vertical column -->
            <div class="destination-list">
                <div class="destination-card1" style="margin-bottom: 20px;">
                    <img src="{{url('frontend/img/img3.jpg')}}" alt="New Zealand" style="height: 325px;">
                    <div class="card-overlay">
                        <span class="location">NEW ZEALAND</span>
                        <h3>Oxolotan City</h3>
                        <p>★★★★★</p>
                    </div>
                </div>
                <div class="destination-card1">
                    <img src="{{url('frontend/img/img4.jpg')}}" alt="Singapore" style="height: 325px;">
                    <div class="card-overlay">
                        <span class="location">SINGAPORE</span>
                        <h3>Marina Bay Sand City</h3>
                        <p>★★★★★</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-destination">
            <button>More Destination</button>
        </div>
    </section>
    <section class="popular-packages" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="explore-header">
            <span></span>
            <h3>Explore Our courses</h3>
        </div>
        <h2>Our Courses</h2>
        <p>Explore great places. Mollit voluptatem perspiciatis convalis elementum corporis vero veritatis.</p>
        <div class="package-grid">
            <div class="package-card">
                <div class="package-info">
                    <h1 class="package-title" style="font-size: 25px;">Diploma Programs</h1>
                    <p class="package-description" style="font-size: 18px;">Diploma programs provide specialized, hands-on training in various fields, equipping students with practical skills for quick entry into the workforce. These programs focus on job-ready expertise.</p>
                    <div class="package-buttons">  
                    </div>
                    <div class="more-destination" style="margin-left: 100px;">
                        <button>Enroll Now</button>
                    </div>
                </div>
            </div>
            <div class="package-card">
            <div class="package-info">
                    <h1 class="package-title" style="font-size: 25px;">Undergraduate Programs</h1>
                    <p class="package-description" style="font-size: 18px;">Undergraduate programs offer comprehensive education, equipping students with practical skills for quick entry into the workforce. These programs focus on job-ready expertise.</p>
                    <div class="package-buttons">  
                    </div>
                    <div class="more-destination" style="margin-left: 100px;">
                        <button>Enroll Now</button>
                    </div>
                </div>
            </div>
            <div class="package-card">
                <div class="package-info">
                    <h1 class="package-title" style="font-size: 25px;">Graduate Programs</h1>
                    <p class="package-description" style="font-size: 18px;">Graduate programs provide advanced education and research, equipping students with practical skills for quick entry into the workforce. These programs focus on job-ready expertise. </p>
                    <div class="package-buttons">  
                    </div>
                    <div class="more-destination" style="margin-left: 100px;">
                        <button>Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-destination" style="margin-top: 50px;">
            <button>View All Packages</button>
        </div>
    </section>

    <section class="callback-section">
        <div class="image-container">
            <img src="{{url('frontend/img/img12.jpg')}}" alt="Travel Image">
            <div class="play-button">▶</div>
        </div>
        <div class="content-container">
            <div class="explore-header1">
                <span></span>
                <h3 style="color: #ffffff;">Callback for more</h3>
            </div>
            <h2>Talk To Advisor For Profile Assessment.</h2>
            <p>By dealing with data, select tools that help you automate time-consuming processes.</p>
            <div class="stats">
                <div class="stat-item">
                    <img src="{{url('frontend/img/icon1.png')}}" alt="Icon">
                    <span>500K+</span>
                    <p>Satisfied Clients</p>
                </div>
                <div class="stat-item">
                    <img src="{{url('frontend/img/icon2.png')}}" alt="Icon">
                    <span>250K+</span>
                    <div>Satisfied Clients</div>
                </div>
                <div class="stat-item">
                    <img src="{{url('frontend/img/icon3.png')}}" alt="Icon">
                    <span>15K+</span>
                    <p>Satisfied Clients</p>
                </div>
                <div class="stat-item">
                    <img src="{{url('frontend/img/icon4.png')}}" alt="Icon">
                    <span>10K+</span>
                    <p>Satisfied Clients</p>
                </div>

            </div>
            <div class="contact-box">
                <img src="{{url('frontend/img/icon5.png')}}" alt="Phone Icon">
                <h4>Our 24/7 Emergency Phone Services</h4>
                <span>Call: 123-456-7890</span>
            </div>

        </div>
    </section>

    <section class="callback-section" style="margin-top: 150px;margin-bottom: 150px; background-color: white;">
        <div class="image-container">
            <img src="{{url('frontend/img/Map-1024x614.png')}}" alt="Travel Image" style="height: 400px; width: 700px;">
            
        </div>
        <div class="content-container">
            <div class="explore-header1">
                <span></span>
                <h2 style="margin-left: 20px;color: #000000;">We're Global Partner of
                    580+ Universities</h2>
            </div>
            <p style="margin-left: 80px; margin-right: 200px; text-align: left;color: #000000;">We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. Besides, we also help with other family and provide counseling services for immigration</p>
            <div class="more-destination"style="margin-left: 80px;">
                <button>Our Partners</button>
            </div>
            
        </div>
        
    </section>


    <section class="activity-section">
        <div class="section-header">
            <div class="explore-header">
                <span></span>
                <h3>Featured Services</h3>
            </div>
            <h2>Education Services</h2>
            <p>University Admission and other programs in higher education is designed for professionals seeking to make an impact on the student affairs track</p>
        </div>
        <div class="activity-grid">
            <div class="activity-card">
                <img src="{{url('frontend/img/icon6.png')}}" alt="Adventure Icon">
                <h4>University Admission</h4>
                <p>15 Destination</p>
            </div>
            <div class="activity-card">
                <img src="{{url('frontend/img/icon10.png')}}" alt="Trekking Icon">
                <h4>Work Permit</h4>
                <p>12 Destination</p>
            </div>
            <div class="activity-card">
                <img src="{{url('frontend/img/icon9.png')}}" alt="Camp Fire Icon">
                <h4>Health Insurance</h4>
                <p>7 Destination</p>
            </div>
            <div class="activity-card">
                <img src="{{url('frontend/img/icon8.png')}}" alt="Off Road Icon">
                <h4>Scholarship</h4>
                <p>15 Destination</p>
            </div>
            <div class="activity-card">
                <img src="{{url('frontend/img/icon7.png')}}" alt="Camping Icon">
                <h4>Education Loan</h4>
                <p>13 Destination</p>
            </div>
            <div class="activity-card">
                <img src="{{url('frontend/img/icon11.png')}}" alt="Exploring Icon">
                <h4>Visa Process</h4>
                <p>25 Destination</p>
            </div>
        </div>
    </section>
    <section class="special-offer-section">
        <div class="section-header">
            <div class="explore-header">
                <span></span>
                <h3>Course Offer & Discount</h3>
            </div>
            <h2>Special Course Offer</h2>
            <p>You can browse more than 71.000 Master’s programmes from all over the world. Now you have your top programs shortlisted, you can pick the ones that fit you the best.</p>
        </div>
        <div class="offer-grid">
            <div class="offer-card">
                <img src="{{url('frontend/img/img9.jpg')}}" alt="Canada Glacier">
                <div class="discount-badge">20% off</div>
                <div class="offer-content">
                    <h4>Canada</h4>
                    <h3>Experience the natural beauty of glacier</h3>
                    <p><span>$1500</span> <span class="price-current">$1200</span></p>
                </div>
            </div>
            <div class="offer-card">
                <img src="{{url('frontend/img/img10.jpg')}}" alt="New Zealand Camp">
                <div class="discount-badge">15% off</div>
                <div class="offer-content">
                    <h4>New Zealand</h4>
                    <h3>Trekking to the mountain camp site</h3>
                    <p><span>$1300</span> <span class="price-current">$1105</span></p>
                </div>
            </div>
            <div class="offer-card">

                <img src="{{url('frontend/img/img11.jpg')}}" alt="Malaysia Lakeside">
                <div class="discount-badge">15% off</div>

                <div class="offer-content">
                    <h4>Malaysia</h4>
                    <h3>Sunset view of beautiful lakeside city</h3>
                    <p><span>$1800</span> <span class="price-current">$1476</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="shared-photos-section">
        <div class="gallery-container">


            <div class="photo-grid">
                <div class="row">
                    <div class="column">
                        <div class="explore-header">
                            <span></span>
                            <h3>OUR TOUR GALLERY</h3>
                        </div>
                        <h1>SATIFIED APPLICANTS SHARED PHOTOS</h1>
                        <p style="text-align: left;">
                        Open-minded companions present, tricks, corrupt seasoning of hardships, layers of the plate itself for the arc. To enjoy? This? Or ours, graceful hints provide a training of dislike for hatreds of pleasures too, all.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{url('frontend/img/img13.jpg')}}" alt="Traveler Photo 2">
                    </div>
                    <div class="column">
                        <img src="{{url('frontend/img/img14.jpg')}}" alt="Traveler Photo 3">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="{{url('frontend/img/img15.jpg')}}" alt="Traveler Photo 1">
                    </div>
                    <div class="column">
                        <img src="{{url('frontend/img/img15.jpg')}}" alt="Traveler Photo 4">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="recent-posts-section">
        <div class="section-header">
            <div class="explore-header">
                <span></span>
                <h3>Recent Blog</h3>
            </div>
            <h2>Recent Updates of Visa
            And Immigration</h2>
            <p>In order to improve and speed up the customer experience on the date of interview, the online DS-160 application form must be completed, submitted online and the DS-160 number needs to be included in your profile, no earlier than one year and no later than one week before the interview date.</p>
        </div>
        <div class="posts-grid">
            <div class="post-card">
                <img src="{{url('frontend/img/img17.jpg')}}" alt="Post 1">
                <div class="post-content">
                    <h3>Life is a beautiful journey not a destination</h3>
                    <p class="meta">Demoteam | August 17, 2021 | No Comments</p>
                </div>
            </div>
            <div class="post-card">
                <img src="{{url('frontend/img/img18.jpg')}}" alt="Post 2">
                <div class="post-content">
                    <h3>Take only memories, leave only footprints</h3>
                    <p class="meta">Demoteam | August 17, 2021 | No Comments</p>
                </div>
            </div>
            <div class="post-card">
                <img src="{{url('frontend/img/img19.jpg')}}" alt="Post 3">
                <div class="post-content">
                    <h3>Journeys are best measured in new friends</h3>
                    <p class="meta">Demoteam | August 17, 2021 | No Comments</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="testimonial-slider">
            <div class="testimonial-slide active">
                <img src="{{url('frontend/img/img20.png')}}" alt="Testimonial 1">
                <p>"Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates"</p>
                <h4>Johny English</h4>
                <span>Travel Agent</span>
            </div>
            <div class="testimonial-slide">
                <img src="{{url('frontend/img/img21.jpg')}}" alt="Testimonial 2">
                <p>"Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates"</p>
                <h4>Jane Doe</h4>
                <span>Explorer</span>
            </div>
            <div class="testimonial-slide">
                <img src="{{url('frontend/img/img22.jpg')}}" alt="Testimonial 3">
                <p>"Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates
                <span>Adventurer</span>
            </div>
        </div>
        <div class="testimonial-navigation">
            <span class="active" onclick="showSlide(0)"></span>
            <span onclick="showSlide(1)"></span>
            <span onclick="showSlide(2)"></span>
        </div>
    </section>

    <section class="contact-section">
        <div class="image-container">
            <img src="{{url('frontend/img/img12.jpg')}}" alt="Contact Image">
        </div>
        <div class="info-container">
            <div class="info-item">
                <img src="{{url('frontend/img/icon12.png')}}" alt="Email Icon">
                <p style="text-align: left;">support@gmail.com<br>info@domain.com<br>name@company.com</p>
            </div>

            <div class="info-item">
                <img src="{{url('frontend/img/icon13.png')}}" alt="Phone Icon">
                <p style="text-align: left;">+88012345678<br>+88012895678<br>+880155645678</p>
            </div>
            <div class="info-item">
                <img src="{{url('frontend/img/icon14.png')}}" alt="Location Icon">
                <p style="text-align: left;">752/2 Shewrapara,<br>(5th floor of City Bank)<br>Begum Rokeya Sharani, Dhaka, Bangladesh</p>
            </div>
            <div class="horizontal-line1"></div>
            <p style="text-align: left;font-weight: bolder;">LET'S JOIN US FOR MORE UPDATE !!</p>
            <div class="cta">

                <a href="#">Learn More</a>

            </div>
        </div>
    </section>
    <footer class="footer-section">
        <div class="footer-container">
            <div class="footer-item">
                <h3>About us</h3>
                <p>For the last 14 years, We have helped students, business persons, tourists, clients with medical needs. There are many variations of passages of Lorem Ipsum available.</p>
                <div class="logo-container">
                    <img src="{{url('frontend/img/logo2.png')}}" alt="Award Logo">
                    <img src="{{url('frontend/img/logo6.png')}}" alt="Nature Magazine">
                </div>
            </div>
            <div class="footer-item">
                <h3>Contact Information</h3>
                <p>
                    <span class="icon">&#9742;</span> <!-- Phone Icon -->
                    <strong>Phone:</strong> +8801898879777
                </p>
                <p>
                    <span class="icon">&#9993;</span> <!-- Email Icon -->
                    <strong>Email:</strong> company@domain.com
                </p>
                <p>
                    <span class="icon">&#127970;</span> <!-- Address Icon -->
                    <strong>Address:</strong> Begum Rokeya Ave, Dhaka
                </p>
            </div>
            <div class="footer-item">
                <h3>Latest Post</h3>
                <a href="#">Life is a beautiful journey not a destination</a>
                <p>August 17, 2021 | No Comments</p>
                <a href="#">Take only memories, leave only footprints</a>
                <p>August 17, 2021 | No Comments</p>
            </div>
            <div class="footer-item">
                <h3>Subscribe Us</h3>
                <p>Sat - Thu : 10:00 AM - 6:00 PM</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Your Email">
                    <button>Subscribe Now</button>
                </form>
            </div>
            <div class="horizontal-line"></div>
        </div>

    </footer>
    <div class="footer-bottom">
        <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a> | <a href="#">FAQ</a>
        <span class="logo">LOGO</span>
        <span>Copyright © 2024 Eye Level Tourism & Study Abroad . All Rights Reserved</span>
    </div>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.testimonial-navigation span');

        function showSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        setInterval(() => {
            let nextSlide = (currentSlide + 1) % slides.length;
            showSlide(nextSlide);
        }, 5000);
    </script>
</body>
</html>