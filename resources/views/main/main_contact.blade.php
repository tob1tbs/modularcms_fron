@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="container contact-us-container mt-4">
        <div class="contact-info">
            <div class="row">
                <div class="col-12">
                    <h2 class="ls-n-25 m-b-1 mb-5 mt-4 text-center font-neue">{{ trans('site.contact') }}</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fa fa-location-arrow"></i>
                        <div class="feature-box-content">
                            <h3 class="font-neue">{{ trans('site.our_address') }}</h3>
                            <h5 class="font-helvetica-regular">{{ $parametersArray['address'] }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt"></i>
                        <div class="feature-box-content">
                            <h3 class="font-neue">{{ trans('site.phone_number') }}</h3>
                            <h5 class="font-helvetica-regular">{{ $parametersArray['phone'] }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="far fa-envelope"></i>
                        <div class="feature-box-content">
                            <h3 class="font-neue">{{ trans('site.email') }}</h3>
                            <h5 class="font-helvetica-regular">{{ $parametersArray['email'] }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="far fa-calendar-alt"></i>
                        <div class="feature-box-content">
                            <h3 class="font-neue">{{ trans('site.working_hours') }}</h3>
                            <h5 class="font-helvetica-regular">{{ trans('site.everyday') }} 11:00 - 18:00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h2 class="mt-6 mb-2 font-neue">{{ trans('site.send_us_message') }}</h2>

                <form class="mb-0" action="#">
                    <div class="form-group">
                        <label class="mb-1" for="contact-name">Your Name
                            <span class="required">*</span></label>
                        <input type="text" class="form-control" id="contact-name" name="contact-name"
                            required />
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="contact-email">Your E-mail
                            <span class="required">*</span></label>
                        <input type="email" class="form-control" id="contact-email" name="contact-email"
                            required />
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="contact-message">Your Message
                            <span class="required">*</span></label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control"
                            name="contact-message" required></textarea>
                    </div>

                    <div class="form-footer mb-0">
                        <button type="submit" class="btn btn-dark font-weight-normal">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mb-8"></div>
</main>
@endsection

@section('js')

@endsection