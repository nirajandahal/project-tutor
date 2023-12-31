<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Poppins:wght@200;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    @stack('css')

    <title>Project Tutor</title>
</head>
<body>

@include('home.common.header')

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel"><img src="{{asset('home/img/project-tutor-logo.png')}}"></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar list-unstyled m-0 p-0 d-block">
      
       <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                
        <li class="nav-item"><a href="" class="nav-link pt-cta-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</a></li>
    </ul>
  </div>
</div>



<!-- banner section -->
<section class="hero-section">
  <div class="container">
    <div class="row flex-column-reverse flex-sm-row">
      <div class="col-12 col-sm-7 col-md-7 my-auto">
        <h1 class="fw-bold display-5 mb-4">We can help you with your <span class="primary-color">assignments.</span> </h1>
        <!-- <p>We are a team of developers committed to take care of your projects. We have an expert team of developers
          that have collective experience of over 18 years. Needless to say, we have a pool of projects you can select 
          from, or you can customize a project as per your requirement. </p> -->
          <div class="project-list-section mb-4 row">
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
            <div class="col-6 col-sm-4">
              <a href="project-detail.html">Sales and Marketing</a>
            </div>
          </div>
          <p class="mb-0">Get started rightaway! Sooner you start working on the project, the more time you and us get for preparation. You also don't want writes to be occupied with other projects.</p>
        <a href="index.html#contact-section" class="pt-cta-btn fw-bold">Click here!</a>
      </div>
      <div class="col-12 col-sm-5 col-md-4 offset-md-1 banner-image">
         <img src="{{asset('home/img/dissertation.png')}}">
      </div> 
       
      </div>
    </div>
  </div>
</section>
<!-- banner section -->


<!-- speciality section -->
<section class="our-speciality-section">
  <div class="container">
    <div class="services-list row row-cols-sm-3 row-cols-md-4 g-2 ">
      <div class="col">
        <div>
          <a href="about-us.html">
            <i class="bi bi-people"></i>
            <h6 class="text-center mt-3">Customer Support</h6>
            <p>34 Projects Completed</p>
          </a>
          </div>
       </div>
       <div class="col">
        <div>
          <a href="about-us.html">
            <i class="bi bi-people"></i>
            <h6 class="text-center mt-3">Quick Results</h6>
            <p>34 Projects Completed</p>
          </a>
          </div>
       </div>
       <div class="col">
        <div>
          <a href="about-us.html">
            <i class="bi bi-people"></i>
            <h6 class="text-center mt-3">24x7 Support</h6>
            <p>34 Projects Completed</p>
          </a>
          </div>
       </div>
       <div class="col">
        <div>
          <a href="about-us.html">
            <i class="bi bi-people"></i>
            <h6 class="text-center mt-3">All Papers Double Checked</h6>
            <p>34 Projects Completed</p>
          </a>
          </div>
       </div>
       
    </div>
  </div>

</section>
<!-- speciality section -->

<!-- projects section -->

<section class="projects-section py-5 mb-5">
  <div class="container">
    <div class="row">

      <div class="section-heading my-5">
        <h1 class="fw-bold display-5 text-center">Project Expertise</h1>
        </div>


      <ul class="services-list list-unstyled row row-cols-2 row-cols-sm-3 row-cols-md-4 g-2 ">
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-people"></i>
            <h6 class="text-center mt-3">Sales and Marketing</h6>
            <p>34 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-clipboard-plus"></i>
            <h6 class="text-center mt-3">Bsc Nursing</h6>
            <p>10 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-car-front"></i>
            <h6 class="text-center mt-3">Mechanical Engineering</h6>
            <p>18 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-file-medical"></i>
            <h6 class="text-center mt-3">Hotel Management</h6>
            <p>18 Projects Completed</p>
          </a>
          </div>
        </li>
        
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-building-check"></i>
            <h6 class="text-center mt-3">Real Estate and Marketing</h6>
            <p>18 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-hospital"></i>
            <h6 class="text-center mt-3">Architecture and Structural Engineering</h6>
            <p>3 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-clipboard2-pulse"></i>
            <h6 class="text-center mt-3">Shares and Finance</h6>
            <p>18 Projects Completed</p>
          </a>
          </div>
        </li>
        <li class="col">
          <div>
          <a href="project-detail.html">
            <i class="bi bi-clouds"></i>
            <h6 class="text-center mt-3">Sustainable Development and Climate Change</h6>
            <p>78 Projects Completed</p>
          </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- projects section -->


<!-- featured resources section -->
<section class="py-5 cta-section">
  <div class="container py-5">
    <div class="row text-center">
      <h1 class="fw-bold display-5 mb-2 py-4">Need a project urgently?</h1>
      
      
      <p class="mb-4">Contact our team directly and dicuss your requirements for quick processing. </p>
      <p><a href="" class="pt-cta-btn fw-bold">Urgent Request!</a> </p>
      <p><a href= "" class="primary-color">Extra charges applied.</a></p>
    </div>
    
  </div>
</section>
<!-- featured resources section -->


<!-- contact us section -->
<section class="contact-us" id="contact-section">
  <div class="container">
      <div class="row flex-column-reverse flex-sm-row">
        <div class="col-md-6 col-sm-6 col-12">
          <form class="row g-3 contact-form" novalidate id="contact-form">
            <div class="col-md-6">
              <label class="form-label fw-bold">Project Idea</label>
              <input type="text" class="form-control" required>
            </div>            
            <div class="col-md-6">
              <label class="form-label fw-bold">Deadline</label>
              <input type="date">
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold">Project Category</label>
              <select class="form-select" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
            </div> 
            <div class="col-md-12">
              <label class="form-label fw-bold">Project Details</label>
              <textarea class="form-control" rows="5"></textarea>
            </div>
           
            
            
            <div class="col-md-6">
              <label class="form-label fw-bold">Upload required files for Project</label>
              <input type="file" class="form-control" required>
            </div>     
            <div class="col-md-12">
              <label class="form-label fw-bold">Additional Services</label>
              <div>
                <div class="form-check checkbox-div">
                  <input class="form-check-input" type="checkbox" required>
                  <label class="form-check-label">
                    Proofreading
                  </label>                
                </div>
                <div class="form-check checkbox-div">
                  <input class="form-check-input" type="checkbox" required>
                  <label class="form-check-label">
                    Plaigarism Check
                  </label>                
                </div>
              </div>  
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold">Reference Materials</label>
              <textarea class="form-control" rows="5"></textarea>
            </div>
            
            <div class="col-md-4">
              <label class="form-label fw-bold">Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label fw-bold">Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label fw-bold">Phone</label>
              <input type="number" class="form-control" required>
            </div>
            <div class="col-md-12">
              <label class="form-label fw-bold">Any special requirements / queries ?</label>
              <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label fw-bold">
                  I agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href="checkout.html" class="btn pt-cta-btn fw-bold" type="submit">Proceed to checkout</a>
            </div>
          </form>
        </div>
        <div class="offset-md-1 col-sm-5 col-md-5 col-10">
          <h2 class="contact-form-heading display-5 fw-bold mb-5">Need help in your project? <span class="primary-color">We're here to assist you.</span> </h2>
          <p>hello@projecttutor.com</p>
          <p>+977 9862155336</p>
          <p>Kathmandu, Nepal</p>
        </div>
      </div>
  </div>
</section>
<!-- contact us section -->

@include('home.common.footer')

<div class="modal fade ls-modal" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content px-4">
      <div class="modal-header">
        <h5 class="modal-title flex-fill text-center" >Insurance Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center mt-2 mb-4">Please enter your credentials to log in</p>
        <form>
          <div class="row mb-4">
            <label class="col-sm-2 col-form-label">Phone / Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-1">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          
          <div class="row mb-4">
            <div class="col-sm-5 offset-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" >
                <label class="form-check-label">
                  Remember me
                </label>
              </div>
            </div>
            <div class="col-sm-5 text-end">
              <a href="" class="fw-bold" data-bs-toggle="modal" data-bs-target="">Forgot Password?</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 offset-sm-2">
              <button type="submit" class="btn submit-button"  data-bs-toggle="modal" data-bs-target="">Proceed</button>
            </div>
          </div>
          
        </form>

        <div class="social-login-section py-3 text-center">
          <p class="text-center">OR</p>
          <button class="btn text-white google-btn mb-2 w-100 w-md-auto"><i class="bi bi-google"></i> Login with Google</button>
          <button class="btn text-white facebook-btn mb-2 w-100 w-md-auto"><i class="bi bi-facebook"></i> Login with Facebook</button>
        </div>

        
      </div>

    </div>
  </div>
</div> 

<div class="modal fade ls-modal" id="forgotPasswordModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content px-4">
      <div class="modal-header">
        <h5 class="modal-title flex-fill text-center" >Insurance Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center mt-2 mb-4">Enter your email and set a new password!</p>
        <form>
          <div class="row mb-4">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 offset-sm-2">
              <button type="submit" class="btn submit-button"  data-bs-toggle="modal" data-bs-target="#loginModal">Proceed</button>
            </div>
          </div>
          
        </form>

        <div class="social-login-section py-3 text-center">
          <p class="text-center">OR</p>
          <button class="btn text-white google-btn"><i class="bi bi-google"></i> Login with Google</button>
          <button class="btn text-white facebook-btn"><i class="bi bi-facebook"></i> Login with Facebook</button>
        </div>

        
      </div>

    </div>
  </div>
</div>

<div class="modal fade ls-modal" id="signupModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content px-4 ">
      <div class="modal-header">
        <h5 class="modal-title flex-fill text-center" >Insurance Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center mt-2 mb-5">Please enter your phone number and email address to signup</p>
        <form>
          <div class="row mb-4">
            <label class="col-sm-2 col-form-label">Phone </label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-4">
            <label class="col-sm-2 col-form-label">Email </label>
            <div class="col-sm-10">
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="row mb-4">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="row mb-1">
            <label class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          
          <div class="row mb-4">
            <div class="col-sm-10 offset-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" >
                <label class="form-check-label">
                  Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 offset-sm-2">
              <button type="submit" class="btn submit-button" >Proceed</button>
            </div>
          </div>
          
        </form>

        <div class="social-login-section py-3 text-center">
          <p class="text-center">OR</p>
          <button class="btn text-white google-btn"><i class="bi bi-google"></i> Login with Google</button>
          <button class="btn text-white facebook-btn"><i class="bi bi-facebook"></i> Login with Facebook</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade ls-modal" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content px-4 ">
      <div class="modal-header">
        <h5 class="modal-title flex-fill text-center" >Insurance Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="success-checkmark text-center display-6 text-success">
          <i class="bi bi-check-circle"></i>
        </div>        
        <p class="text-center mt-2 my-3">Account created. Please check your email for verification. </p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn submit-button w-100">Proceed</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade ls-modal" id="otpModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content px-4 ">
      <div class="modal-header">
        <h5 class="modal-title flex-fill text-center" >Insurance Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center mt-2 my-3">Please enter the OTP number you just received in your phone. </p>
        <form>
          <div class="row mb-4 mx-sm-4 px-5">
            
            <div class="col-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn w-100 submit-button">Proceed</button>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('.partners-slick').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay : true,
  autoplaySpeed : 500,
  responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
</script>


</body>
</html>