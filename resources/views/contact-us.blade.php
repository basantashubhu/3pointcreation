@extends('layouts.master')

@section('content')
<!-- contact section -->
<section class="contact_section py-5">
    <div class="container">
        <div class="heading_container heading_center mb-5">
            <h2>
                Get In <span>Touch</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <form action="#" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">
                                    Please provide your name.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter your message.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-paper-plane mr-2"></i>Send Message
                            </button>
                        </form>
                        <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                          'use strict';
                          window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                              form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                  event.preventDefault();
                                  event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                              }, false);
                            });
                          }, false);
                        })();
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-sm h-100 border-left border-primary">
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="h4 font-weight-bold mb-4 text-primary">Contact Information</h3>
                            <p class="mb-3 d-flex align-items-center">
                                <i class="fa fa-map-marker text-primary mr-3 fa-lg"></i>
                                <span>123 Main Street, City, Country</span>
                            </p>
                            <p class="mb-3 d-flex align-items-center">
                                <i class="fa fa-phone text-primary mr-3 fa-lg"></i>
                                <span>+1 234 567 8900</span>
                            </p>
                            <p class="mb-3 d-flex align-items-center">
                                <i class="fa fa-envelope text-primary mr-3 fa-lg"></i>
                                <span>info@example.com</span>
                            </p>
                        </div>
                        <div class="mt-4">
                            <h4 class="h5 font-weight-bold mb-3">Follow Us</h4>
                            <a href="#" class="btn btn-outline-primary mr-2"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#" class="btn btn-outline-info mr-2"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#" class="btn btn-outline-secondary mr-2"><i class="fa fa-linkedin fa-lg"></i></a>
                            <a href="#" class="btn btn-outline-danger"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

@endsection
