
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2 class="big-title">Application Form</h2>
                    <p class="heading-sub">Please tell us a little about what you need so we can help!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-wrap">
                 <div class="col-md-4 col-sm-6">
                    <div class="row">
                        <div class="contact-box contact-page">
                            <div class="icon-box">
                                <i class="fa fa-4x fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="contact-inner">
                                <h4>Phone</h4>
                                <p>1234567890</p>
                            </div>
                        </div>
                        <div class="contact-box contact-page">
                            <div class="icon-box">
                                <i class="fa fa-4x fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="contact-inner">
                                <h4>Email</h4>
                                <p>contact@capital.com</p>
                            </div>
                        </div>
                        <div class="contact-box contact-page">
                            <div class="icon-box">
                                <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="contact-inner">
                                <h4>Address</h4>
                                <p>8 Corporate Park # 35, Irvine, CA 92606</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-8 col-sm-12 form-wrap">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form id=application-form action="" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="businessName" placeholder="Legal Business Name" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="businessAddress" placeholder="Business Address" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::select('state', $states, null, ['class' => 'form-control', 'placeholder' => 'Select a state']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="zipcode" placeholder="Zip Code" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="loanAmount" placeholder="Loan Amount Requested" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="howSoon" placeholder="How Soon Do You Need The Money" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::select('reason', $reasons, null, ['class' => 'form-control', 'id' => 'loan-reason', 'placeholder' => 'How would you use the loan?']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-info" id="submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>