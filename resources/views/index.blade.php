<style>
.slider_section {
    background-color: transparent; /* Remove background color */
    background-image: url("{{asset('asset/images/logoom.jpg')}}"); /* Add background image */
    background-size: cover; /* Cover the entire section */
    background-position: center; /* Center the background image */
    /* Add any additional styling as needed */
}

  </style>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Om Education</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>Om Education</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{Route('Home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('About')}}"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('Service')}}">Crash Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('Price')}}">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('Contact')}}">Contact Us</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <form class="form-inline">
                <button class="btn   nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +91 9322308560
                </span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Om Education<br>
                      & Science Acadmey
                    </h1>
                    <p>
                      Om Education & science Academy is One of The best Teaching Education Acadmey</p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Crash Courses
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
        
            <div class="detail-box">
              <h4>
                MHT CET
              </h4>
              <p>
              The MHT-CET crash course is designed to give intensive preparation through classroom sessions. The class consists of over 150 hours of interactive lectures which cover difficult subjects as well as immediate clarification of misunderstandings by teachers who specialize in these areas. In order to help students learn more effectively high-standard notes and classwork sheets aimed at improving performance are given out.
              </p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a>
           

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
      
            <div class="detail-box">
              <h4>
                JEE
              </h4>
              <p>
              The JEE crash course at OM Education Academy is made specifically for in-person education for rigorous and focused preparation. This includes 150+ hours of intensive lectures with lots of audience participation, on topics that tend to be quite tough and are handled by renowned teachers who are quick in answering queries. To enhance comprehension, scholars are given well-thought notes and class assignments."  
              </p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
        
            <div class="detail-box">
              <h4>
                NEET
              </h4>
              <p>
              The NEET crash course at OM Education Academy is aimed at giving students all relevant knowledge from teachers in an organized manner. The course comprises 150 hours in which different subjects are taught through interactive lessons; confused students immediately get help from professionals. Involved notes which are better than any other accommodate comprehensive coursework during training sessions so that knowledge gaps cannot exist between classes.
              </p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="detail-box">
              <h4>
                Regualr Classes
              </h4>
              <p>
              Do you want to do well in exams? Consider signing up for our accelerated classes which have been specially designed to help you quickly learn important basics. At OM Education Academy we have normal groups for students in Grade 11 and 12 that are aimed at rapidly completing the whole syllabus. Our seasoned lecturers guarantee a full grasp of all items including problem solving days as well as trial examinations to test how much you have understood. Do not be dragged behind due to examination pressure; come take your place in the crash programme and perform better.”
              </p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
         
            <div class="detail-box">
              <h4>
                11th
              </h4>
              <p>
              The Grade 11 crash course at OM Education Academy is carefully planned to be comprehensive and focused through physical classroom presentations to equip our students. More than 150 hours of interactive classes that touch on the core syllabus areas are involved in this program. Our experienced teachers make sure that doubts are cleared there and then so that students understand complicated matters well. Good-quality notes and classwork sheets are availed to aid better understanding of subjects and hence boost students’ grades.
              </p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
           
            <div class="detail-box">
              <h4>
                12th
              </h4>
              <p>
              OM Education Academy offers a Grade 12 speed-up program. Essentially, the program entails over 150 hours that are interactively used for lectures aimed at teaching each subject deeply. Consequently, in case of any doubts, qualified teachers are there to help clarify the matter instantly with the aim of making students grasp complex topics better. Equally important, students are given notes or course work of high quality so as to enable them study better and thus improve their grades
              students are given notes or course work of high quality education</p>
              <a href="{{Route('Register')}}"> <button class="btn btn-primary">Register</button></a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            At OM Education & Science Academy, our specialties include JEE, CET and MET. We strive to provide world class education that will take our students nearer to their academic objectives. Through a dedicated team of tutors and proven record of success, we guarantee personalized help for each student enabling them achieve excellent exam results. </p>
           
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('asset/images/Template2.jpg')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- server section -->

  <section class="server_section">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
          <img src="{{asset('asset/images/crashcourse2.jpg')}}" alt="" style="height: 300px;">
        
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Let us manage your server
              </h2>
              <p>
                Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end server section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Pricing
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>49</span></h2>
            <h6>
              Startup
            </h6>
            <ul class="price_features">
              <li>
                2GB RAM
              </li>
              <li>
                20GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>99</span></h2>
            <h6>
              Standard
            </h6>
            <ul class="price_features">
              <li>
                4GB RAM
              </li>
              <li>
                50GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>149</span></h2>
            <h6>
              Business
            </h6>
            <ul class="price_features">
              <li>
                8GB RAM
              </li>
              <li>
                100GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- price section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Student Review
        </h2>
        <p>
         
"Educate to innovate, inspire, and ignite futures."
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{asset('asset/images/IMG_2433.JPG')}}" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Yash Khedkar
                          </h5>
                          <h6>
                            Student
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{asset('asset/images/pooja Kolpe.jpg')}}" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Pooja Kolpe
                          </h5>
                          <h6>
                            Student
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{asset('asset/images/pooja Kolpe.jpg')}}" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Rakesh Kolpe
                          </h5>
                          <h6>
                            Student
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
        @include('sweetalert::alert')
          <div class="form_container">
            <form action="{{url('/')}}/contact" method="Post">
            @csrf
              <div>
                <input type="text" name="name" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" name="mobileno" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" name="meassge" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Kolpewadi Kopargoan
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9322308560
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  siddhartthorat@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service.html">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="price.html">
                <img src="images/nav-bullet.png" alt="">
                Pricing
              </a>
              <a class="" href="contact.html">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              
"Educate to innovate, inspire, and ignite futures."
            </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Om Education </a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('asset/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('asset/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('asset/js/custom.js')}}"></script>


</body>

</html>