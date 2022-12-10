 <!-- Topbar Start -->
 <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>kyawphyonaing.jobmail@gmail.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+95 09782877398</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{url('/')}}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>IT SOLUTIONS</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="{{url('/')}}" class="nav-item nav-link @if(Route::currentRouteName()=='home') active @endif ">Home</a>
            <a href="{{url('about')}}" class="nav-item nav-link @if(Route::currentRouteName()=='about') active @endif">About</a>
            <a href="{{url('service')}}" class="nav-item nav-link @if(Route::currentRouteName()=='service') active @endif">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url('blog')}}" class="dropdown-item">Blog Grid</a>
                    <a href="{{url('details')}}" class="dropdown-item">Blog Detail</a>
                    <a href="{{('feature')}}" class="dropdown-item">Features</a>
                    <a href="{{('quote')}}" class="dropdown-item">Quote Form</a>
                    <a href="{{('team')}}" class="dropdown-item">The Team</a>
                    <a href="{{('testimonial')}}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{url('contact')}}" class="nav-item nav-link @if(Route::currentRouteName()=='contact') active @endif ">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
