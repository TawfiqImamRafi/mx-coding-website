        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    {{-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1> --}}
                    <img id="logo-1" src="{{ $settings ?asset($settings->logo) : '' }}" alt="Logo">
                    <img id="logo-2" src="{{ $settings ?asset($settings->logo_scroll) : '' }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about-us') }}" class="nav-item nav-link {{ (request()->is('about-us')) ? 'active' : '' }}">About</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link {{ (request()->is('services')) ? 'active' : '' }}">Services</a>
                        <a href="{{ route('courses') }}" class="nav-item nav-link {{ (request()->is('courses')) ? 'active' : '' }}">Courses</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                    </div>
                    {{-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> --}}
                </div>
            </nav>


        <!-- Navbar & Hero End -->
