<div class="header_section header_bg">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ url('/') }}">
         <img src="{{ asset('image/logo1.jpg') }}" style="width: 100px; height: auto;">
     </a>
     <div class="customer_right">
      <h3 class="customer_name">Music Class</h3>
   </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/classes') }}">Classes</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
            <div class="login_bt">
               <ul>
                  <li>Bookings Open</li>
                  <li><a href="#">(+62)81345674366</a></li>
               </ul>
            </div>
         </form>
      </div>
   </nav>
</div>
