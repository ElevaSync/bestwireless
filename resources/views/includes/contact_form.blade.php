<div class="contact-form-text-area">
    <form id="contactForm">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="form-check">
                        <div class="help-block with-errors gridCheck-error"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <button class="default-button" type="submit"><span>Send Message</span></button>
                <div id="msgSubmit" class="h6 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
</div>

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();
                let name = $('#name').val();
                let email = $('#email').val();
                let phone_number = $('#phone_number').val();
                let msg_subject = $('#msg_subject').val();
                let message = $('#message').val();
                let _token = '{{ csrf_token() }}';
                let url = "{{ route('contact.store') }}";
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        phone: phone_number,
                        subject: msg_subject,
                        message: message,
                        _token: _token
                    },
                    success: function (response) {
                        if (response) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Your message has been sent successfully!',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });
                            $('#contactForm').trigger("reset");
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong!',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                });
            });
        });
    </script>
@endsection
