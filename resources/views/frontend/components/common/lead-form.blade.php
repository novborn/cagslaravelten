<section id="main-form" class="pt-lg-5">
    <div class="container">
        <div class="row pt-lg-4">
            <div class="col-lg-8">
                <div class="d-flex flex-column">
                    <div class="section-heading text-white mb-3">Give your child the Crimson Edge</div>
                    <p class="text-white">Empowering Young Minds for a Bright Future</p>
                </div>

                <form id="lead_form" method="POST" action="{{ route('leads.store') }}" class="d-flex flex-column gap-4 mt-lg-4">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="d-flex gap-3">
                        <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name*">
                        <input type="text" class="form-control" id="parent_name" name="parent_name" placeholder="Parent Name*">
                        <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Email ID*">
                    </div>

                    <div class="d-flex gap-3">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number*">
                        <input type="date" class="form-control" id="student_dob" name="student_dob" placeholder="Date of Birth*">
                        <select class="form-control" id="class_name" name="class_name" required>
                            <option disabled selected hidden>Select Class</option>
                            <option value="Class 1">Class 1</option>
                            <option value="Class 2">Class 2</option>
                            <option value="Class 3">Class 3</option>
                        </select>
                    </div>

                    <div class="d-flex gap-3 mb-lg-4">
                        <select class="form-control" id="class_session" name="class_session">
                            <option disabled selected hidden>Select Session*</option>
                            <option value="2023-24">2023-24</option>
                            <option value="2024-25">2024-25</option>
                            <option value="2025-26">2025-26</option>
                        </select>

                        <select class="form-control" id="school_branch_name" name="school_branch_name">
                            <option disabled selected hidden>Select Branch*</option>
                            <option value="Main">Main</option>
                            <option value="Secondary">Secondary</option>
                            <option value="Tertiary">Tertiary</option>
                        </select>

                        <select class="form-control" id="source" name="source">
                            <option disabled selected hidden>Select Source*</option>
                            <option value="Website">Website</option>
                            <option value="Advertisement">Advertisement</option>
                            <option value="Word of Mouth">Word of Mouth</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn web-btn">
                        Submit <img src="{{ asset('frontend/img/whte-arrow.svg') }}" class="ms-2" alt="icon">
                    </button>
                </form>
            </div>
            <div class="col">
                <img src="{{ asset('frontend/img/form-img.png') }}" class="w-100" alt="Lead form thumbnail">
            </div>
        </div>
    </div>
</section>


@push('lead_form_srcipts')
<script>
    jQuery(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery('form#lead_form').on('submit', function (e) {
            e.preventDefault();  // Prevent normal form submission

            const formData = {
                student_name: $('#student_name').val(),
                parent_name: $('#parent_name').val(),
                email_id: $('#email_id').val(),
                mobile_no: $('#mobile_no').val(),
                student_dob: $('#student_dob').val(),
                class_name: $('#class_name').val(),
                class_session: $('#class_session').val(),
                school_branch_name: $('#school_branch_name').val(),
                source: $('#source').val(),
                _token: $('input[name="_token"]').val() // CSRF Token
            };


           
            // Perform the AJAX request
            $.ajax({
                url: "{{ route('leads.store') }}",
                method: "POST",
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                        $('form')[0].reset();
                    } else {
                        alert('Error occurred.');
                    }
                },
                error: function (xhr) {
                    // Log the response to check the structure
                    //console.log(xhr.responseJSON); // This will help you see the structure of the response
                    
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = 'Validation errors:\n';
                        $.each(errors, function (key, value) {
                            errorMessage += `${value}\n`;
                        });
                        alert(errorMessage);
                    } else {
                        // Handle the case where responseJSON is not available
                        alert('An unexpected error occurred.');
                    }
                }
            });

        });
    });
</script>


@endpush