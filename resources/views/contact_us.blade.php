@extends('layouts.layout')
@section('title', 'Contact Us')

@section('content')

    <div class="site-wrapper-reveal">
        <!--====================  Contact Us Section Start ====================-->
        <div class="contact-us-section-wrapper section-space--pt_100 section-space--pb_70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">Get In Touch</h3>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" id="contact-info">
                    <div class="col-lg-6">
                        <div class="contact-us-wrap-one mb-30">
                            <h5 class="heading mb-20">62/1, Tejturi Bazar Chowk Lane, East Rajabazar, Dhaka</h5>
                            <h5 class="heading mb-20">innovatech.frm@gmail.com</h5>
                            <h5 class="heading mb-20">+8801737988070</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-wrap">
                            <div id="contact-form">
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input id="con_name" name="con_name" type="text" required placeholder="Name *">
                                            <span class="error-message" style="color:red; display:none;">Name is required.</span>
                                        </div>
                                        <div class="contact-inner">
                                            <input id="con_email" name="con_email" type="email" required placeholder="Email *">
                                            <span class="error-message" style="color:red; display:none;">Email is required.</span>
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        <input id="con_phone" name="con_phone" type="text" required placeholder="Phone*">
                                        <span class="error-message" style="color:red; display:none;">Phone is required.</span>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea id="con_message" name="con_message" required placeholder="Please describe what you need."></textarea>
                                        <span class="error-message" style="color:red; display:none;">Message is required.</span>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                        <p class="form-message"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="success-message">
                    <div class="col-md-10 mx-auto">
                        <div class="success-message" style="display:none;">
                            <h4>Thank you! We have received your message and will contact you soon.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#contact-form button[type="submit"]').on('click', function(e) {
                e.preventDefault();
                // Reset error messages
                $('.error-message').hide();
                // Validate fields
                let isValid = true;
                if ($('#con_name').val().trim() === '') {
                    $('#con_name').next('.error-message').show();
                    isValid = false;
                }
                if ($('#con_email').val().trim() === '') {
                    $('#con_email').next('.error-message').show();
                    isValid = false;
                }
                if ($('#con_phone').val().trim() === '') {
                    $('#con_phone').next('.error-message').show();
                    isValid = false;
                }
                if ($('#con_message').val().trim() === '') {
                    $('#con_message').next('.error-message').show();
                    isValid = false;
                }

                if (isValid) {
                    $('#contact-info').fadeOut(500, function() {
                        $(this).remove();
                        $('#success-message .success-message').fadeIn(800);
                    });
                }
            });
        });
    </script>
@endsection
