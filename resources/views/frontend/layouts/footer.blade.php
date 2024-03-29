        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>{{ $settings ? $settings->address : '' }}</p>
                        <p><i class="fa fa-phone-alt me-3"></i>{{ $settings ? $settings->phone : '' }}</p>
                        <p><i class="fa fa-envelope me-3"></i>{{ $settings ? $settings->email : '' }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href=" {{ $settings ? $settings->twitter : '' }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href=" {{ $settings ? $settings->facebook : '' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href=" {{ $settings ? $settings->youtube : '' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href=" {{ $settings ? $settings->instagram : '' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href=" {{ $settings ? $settings->linkedin : '' }}" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="{{ route('about-us') }}">About Us</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                        <a class="btn btn-link" href="{{ route('privacy') }}">Privacy Policy</a>
                        <a class="btn btn-link" href="{{ route('terms') }}">Terms & Condition</a>
                        {{-- <a class="btn btn-link" href="">Career</a> --}}
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Latest Courses</h5>
                        @if ($course_footers)
                            @foreach ($course_footers as $key => $course)
                                <a class="btn btn-link" href="{{ route('course-details', $course->slug) }}">{{ $course->title}}</a>
                            @endforeach
                        @endif
                        {{-- <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                        <a class="btn btn-link" href="{{ route('privacy') }}">Privacy Policy</a>
                        <a class="btn btn-link" href="{{ route('terms') }}">Terms & Condition</a> --}}
                        {{-- <a class="btn btn-link" href="">Career</a> --}}
                    </div>
                    {{-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Courses</h5>
                        @if ($course_footers)
                            <div class="row g-2">
                                @foreach ($course_footers as $key => $course)
                                    <a class="col-4" href="{{ route('course-details', $course->slug) }}">
                                        <img class="img-fluid" src="{{ asset($course->image) }}" alt="Image">
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div> --}}
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Sign up to our newsletter and get all the information about our work.</p>
                        <div class="position-relative w-100 mt-3">
                            <form action="{{ route('newsletter.submit') }}" method="post">
                                @csrf
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                    name="email" placeholder="Your Email" style="height: 48px;" required>
                                <button type="submit" onclick="formSubmit(this, event)"
                                    class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                        class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            {{-- &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. --}}
                            {{ $settings ? $settings->footer_text : '' }}

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            | Powered By <a class="border-bottom" href="https://machinextreme.com/" target="_blank">Machine Xtreme
                                IT</a>
                        </div>
                        {{-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
