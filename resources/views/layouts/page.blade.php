
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.jdrconsultancy.in/about_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Apr 2022 06:30:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Migration Abroad</title>
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700%7cPT+Serif:400,400i,700,700i"
        rel="stylesheet">
    <!-- Style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/input-tel/css/intlTelInput.min.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('assets/country-flag/css/countrySelect.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles 
</head>

<body>
     
    <div class="topbar">
         <!-- topbar -->
         <div class="container">
             <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-sm-none d-lg-block d-xl-block">
                     <p class="welcome-text">Welcome to Migration Abroad</p>
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="header-block">
                         <span class="header-link d-none d-xl-block"><a href="#" class="anchor-link">Talk to Our Expert</a></span>
                         <span class="header-link">info@migrationabroad.in</span>
                         <span class="header-link"><a data-toggle="modal" data-target="#searchModal" class="btn btn-default btn-sm white_color">Enquiry Now</a></span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- /.topbar -->
     <div class="navigation-regular bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="navigation-regular" class="">
                        <!-- navigation -->
                      <ul class="ms-auto me-auto">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="{{route('services.free-counselling')}}">Free Counselling </a></li>
                                    <!-- <li><a href="#">Free Visa Filling </a></li>
                                    <li><a href="#">Flight Bookings </a></li> -->
                                </ul>
                            </li>
                            <li><a href="study_abroad.html">Immigration</a>
                                <ul>
                                    <li><a href="{{route('study-abroad.usa')}}">USA</a></li>
                                    <li><a href="#">Canada</a></li>
                                    <!-- <li><a href="#">STUDY IN NEW ZEALAND</a></li>
                                    <li><a href="#">STUDY IN AUSTRALIA </a></li> -->
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
     {{$slot}}
     <div class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <div class="widget-footer">
                        <h3 class="widget-title">About us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales scelerisque ipsum. Praesent ac arcu ultricies risus scelerisque vulputate. Etiam vel rutrum lacus.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Study Abroad</h3>
                        <ul class="listnone arrow-footer">
                            <li><a href="study_in_usa.html">USA</a></li>
                            <li><a href="study_in_uk.html">CANADA</a></li>
                            <!-- <li><a href="study_in_new_zealand.html">STUDY IN NEW ZEALAND</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Services</h3>
                        <ul class="listnone arrow-footer">
                            <li><a href="free_counselling.html">Free Counselling </a></li>
                            <!-- <li><a href="Free_visa_filling.html">Free Visa Filling </a></li>
                            <li><a href="flight_bookings.html">Flight Bookings </a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="widget-footer">
                        <h3 class="widget-title">Contact Us</h3>
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-envelope pr-2"></i> info@migrationabroad.com</a></li>
                            <li><a href="#"><i class="fa fa-envelope pr-2"></i> migrationabroad@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone pr-2"></i> +91 9513838585</a></li>
                            <li><a href="#"><i class="fa fa-map-marker pr-2"></i>1st FLOOR, 483, 8th CROSS, Jeevan Bhima Nagar Bengaluru, Karnataka, 560092</a></li>
                        </ul>
                        <ul class="listnone mt-2">
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook pr-2"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-linkedin pr-2"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram pr-2"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube pr-2"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- /.footer -->
     <div class="tiny-footer">
         <!-- tiny footer -->
         <div class="container">
             <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                     <p><b>Copyright © 2021 Migration Abroad. All Rights Reserved.</b></p>
                 </div>
             </div>
         </div>
     </div>
     <!-- /.tiny footer -->
     <a href="https://api.whatsapp.com/send?phone=919513838585" class="float" target="_blank">
         <i class="fa-brands fa-whatsapp my-float"></i>
     </a>
      <!-- Search Modal -->
     <div class="searchModal">
         <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-md" role="document">
                 <div class="modal-content">
                     <div class="modal-body">
                         <div class="enquiry-short-form">
                         <h2>Enter Your Information</h2>
                         <form class="" method="post" action="#">
                             <!-- Text input-->
                             <div class="form-group">
                                 <label class="control-label sr-only" for="yourname">Your Name</label>
                                 <div class="">
                                     <input id="name" name="name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                 </div>
                             </div>
                             <!-- Text input-->
                             <div class="form-group">
                                 <label class="control-label sr-only" for="email">Email</label>
                                 <div class="">
                                     <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                                 </div>
                             </div>
                             <!-- Text input-->
                             <div class="form-group">
                                 <label class="control-label sr-only" for="mobile">Mobile No</label>
                                 <div class="">
                                     <input id="mobile" name="mobile" type="number" placeholder="Mobile No" class="form-control input-md" required="">
                                 </div>
                             </div>
                             <div class="form-group">
                                     <label for="selectvisa" class="sr-only">Select Visa</label>
                                     <select class="form-control" id="selectvisa" name="selectvisa">
                                         <option value="Select Visa">Select Visa</option>
                                         <option value="Students Visa">Students Visa</option>
                                         <option value="Business Visa">Business Visa</option>
                                         <option value="Family Visa">Family Visa</option>
                                         <option value="Travel Visa">Travel Visa </option>
                                         <option value="Work Visa">Work Visa </option>
                                         <option value="Visitor Visa">Visitor Visa </option>
                                         <option value="Migrate Visa">Migrate Visa </option>
                                         <option value="PR Visa">PR Visa</option>
                                     </select>
                                 </div>
                             <!-- Textarea -->
                             <div class="form-group">
                                 <label class="control-label sr-only" for="message">Message</label>
                                 <div class="">
                                     <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-default btn-lg btn-block">Book My Free Assessment</button>
                         </form>
                         <span class="help-block">We will not spam your email.</span>
                     </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> <!-- /.Search Modal -->
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-carousel.js')}}"></script>
    <script src="{{asset('assets/js/menumaker.js')}}"></script>
    <script src="{{asset('assets/js/navigation.js')}}"></script>
    <script src="{{asset('assets/input-tel/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('assets/country-flag/js/countrySelect.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $("#country_selector").countrySelect({
            defaultCountry: "in",
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // responsiveDropdown: true,
            preferredCountries: ['ca', 'gb', 'us']
        });
    </script>

    <script>
        var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
    //   autoHideDialCode: true,
    //    autoPlaceholder: "9999999999",
    //    dropdownContainer: document.body,
      // excludeCountries: ["us"],
    //    formatOnDisplay: false,
    //   geoIpLookup: function(callback) {
    //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //       var countryCode = (resp && resp.country) ? resp.country : "";
    //       callback(countryCode);
    //     });
    //   },
      //hiddenInput: "full_number",
      initialCountry: "in",
      // localizedCountries: { 'de': 'Deutschland' },
    //   nationalMode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    //   placeholderNumberType: "9876543210",
      // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
      utilsScript: "{{asset('assets/input-tel/js/utils.js')}}",
    });
    </script>
 </body>

</html>