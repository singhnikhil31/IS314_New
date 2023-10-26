<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>FAQ</title>

    <style>
 #top {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    text-align: center;
    overflow-y: auto;
}


        .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .faq-answer {
            display: none;
            margin-bottom: 20px;
        }

        .faq-item h2 {
    background-color: #f2f2f2; /* or any color you prefer */
    padding: 10px 20px;
    border-radius: 5px;

    border-bottom: 2px solid #3498db; /* or any color you prefer */
    margin-bottom: 10px; /* optional: adds some space between the heading and content */

    color: #3498db;
}


    </style>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo" style="width: 200px; height: 80px; overflow: hidden; display: block;">
                        <img src="assets/images/logo.jpg" alt="klassy cafe html template" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/') }}">About</a></li>
                        <li><a href="{{ url('/') }}">Menu</a></li>
                        <li><a href="{{ url('/') }}">Contact Us</a></li>

                        <li><a href="{{url('/helppage')}}">Help</a></li>
                        
                        <li class="scroll-to-section cart-menu">
                            @auth
                                <a href="{{ url('/showcart', Auth::user()->id) }}">
                                    Cart{{ $count }}
                                </a>
                            @endauth
                            
                            @guest
                                Cart[0]
                            @endguest
                        </li>
                        
                        
                        @if(Route::has('login'))
                            <li class="user-panel-wrapper">
                                <div class="user-panel sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                        <x-app-layout></x-app-layout>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                        
                                        @if(Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            </li>
                        @endif
                    </ul>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>


<div id="top">

<div class="faq-item"><h1>Frequently Asked Questions</h1></div>


<div class="faq-item">
        <h2>Get help / Getting started</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: How do I create an account?</div>
        <div class="faq-answer">A: Go to the Home page → Click the “Register” button on the top right corner → Sign-up page shows: Fill the required information with your personal email and choose a secured password → Click the “Register” button. Go to the personal email → Activate your account → Login to start placing an order.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: How do I login?</div>
        <div class="faq-answer">A: Go to the Home page → Click the “Login” button on the top right corner → Enter the personal email and password that you Sign up with → Click “Log in” button to access and place order.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Can I log in as a guest?</div>
        <div class="faq-answer">A: Guests are not required to log in as they can scroll through the website, view the menus and place an order. However, guests need to Sign up for an account to access more customized options of the food.</div>
    </div>

    <div class="faq-item">
        <h2>Access</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Why can’t I access the system?</div>
        <div class="faq-answer">A: It is either you are entering an invalid email or using the wrong password. Updates are required to enhance user experience, therefore sometimes the system gives lags due to changes.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Why can’t I access certain products in the system?</div>
        <div class="faq-answer">A: This is because you are still a Guest to the system therefore, to access certain products, users will need to Sign up to create an account.</div>
    </div>

    <div class="faq-item">
        <h2>Across the Board</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Can I do back orders?</div>
        <div class="faq-answer">A: No, we do not do back orders as sometimes the items and products are out of stock and not sure when will be in stock.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Where can I find the catalogue?</div>
        <div class="faq-answer">A: If you want to read through the catalogue, it is been placed on our Facebook page, do pay a visit to know more about us <a href="https://www.facebook.com/DamodarCinemasSuva/">Damodar Cinemas | Suva | Facebook</a></div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Is there any live chat support?</div>
        <div class="faq-answer">A: No, we do not offer live chat support but if you require any help do visit our nearest cinema or email us at marketing@damodar.com.fj</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Are there separate kids’ menu?</div>
        <div class="faq-answer">A: Currently, we do not have a separate menu for the kids but we are looking forward to making more improvements in our menus.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: How can I write a review on a product?</div>
        <div class="faq-answer">A: The website itself does have a customer feedback page where you can fill out reviews based on a product. Feedback can be made on a certain order after the payment is through.</div>
    </div>

    <div class="faq-item">
        <h2>Payment Information</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: What form of payment will be acceptable?</div>
        <div class="faq-answer">A: We are only accepting online payment and cash.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Can I pay with international credit cards?</div>
        <div class="faq-answer">A: Currently, we do not accept international credit cards.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: What can cause the delay in my order?</div>
        <div class="faq-answer">A: In peak hours, sometimes it might take a while for the staff to look into orders and prepare orders.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: If the order is delayed, will I have to pay less?</div>
        <div class="faq-answer">A: No, you will be paying the same amount.</div>
    </div>

    <div class="faq-item">
        <h2>Troubleshooting</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Why am I not receiving the order confirmation from the system?</div>
        <div class="faq-answer">A: It is either you forgot to click the order confirmation button or the system is having a lag in processing your order confirmation as there are other order confirmations coming through the system.</div>
    </div>

    <div class="faq-item">
        <h2>Other Questions</h2>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: What is the different role of the users in this system?</div>
        <div class="faq-answer">A: Users have a number of roles including placing the order, giving feedback, and browsing through the menu.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Who can be the user of the system?</div>
        <div class="faq-answer">A: Anyone who has an interest in viewing our website can be the user of our system.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Who can create an account?</div>
        <div class="faq-answer">A: Anyone can create an account while using the system, as there is no certain limit being placed.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: What are the relevant information required for me to create an account?</div>
        <div class="faq-answer">A: The only information required includes your name, phone number, personal email, and password. These information are needed while you are signing up for an account, however, they are being stored in a very secure database server.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Q: Can anyone else access my account?</div>
        <div class="faq-answer">A: Under our security feature, the users are only able to access their own accounts. No user can access other customer’s accounts.</div>
    </div>


</div>




       <!-- jQuery -->
       <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });


</script>

<script>
        // JavaScript to toggle visibility of answers
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';
            });
        });
    </script>

</body>
</html>