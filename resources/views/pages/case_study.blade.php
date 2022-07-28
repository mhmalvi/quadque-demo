@extends('layout.master')
@section('title', 'Career - Quadque Digital')
@push('styles')
<style>
    .card img.card-img-top{

       
        height:348px;
    }
    .title{
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 0px;

    }

    .case_study_gallery{
         margin: 80px 0;
    }

    .card-text{
            font-size: 15px !important;
            font-weight: 600 !important;
            line-height: 20px !important;
    }


</style>
@endpush

@section('content')


<!-- page header - start -->
<div class=" container page-header mb-5">

    <div class="row d-flex justify-content-center">

        <h1 class="page-title">Case Study</h1>

    </div>
</div>
<!-- page header - end -->

<!-- Career galaery  start -->
<div class=" container ">
    <div class="row  case_study_gallery">
        <div class="col-md-4">
            <div class="card">
                <a href="">
                <img class="card-img-top" src="{{ asset('assets/images/recent_works/alpha_training_recognitions.jpg') }}" alt="Card image cap">

                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text">Alpha Training and Recognitions</p>
                </div>

                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
             <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/unique_college_technology.jpg') }}" alt="Card image cap">

                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text">Unique College of Technology</p>

                </div>
             </a>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
             <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/training_education.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text">International Training & Education Counsel</p>
                </div>
            </a>

            </div>

        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
             <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/zaker_dairy.jpg') }}" alt="Card image cap">

                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text">ZAKER DAIRY</p>

                </div>
             </a>
            </div>

        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
             <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/BRIGHT-COLLEGE-AUSTRALIA.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text">BRIGHT COLLEGE AUSTRALIA</p>


                </div>
            </a>
            </div>

        </div>
        

        <div class="col-md-4 mt-3">
           
             <div class="card">
              <a href="">

                 <img class="card-img-top" src="{{ asset('assets/images/recent_works/NOBLE-TRAINING-ACADEMY.jpg') }}" alt="Card image cap">

                 <div class="card-body">
                     <p class="title">Web</p>
                     <p class="card-text"> NOBLE TRAINING ACADEMY</p>

                 </div>
               </a>
             </div>

        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
              <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/crush_station.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text"> CRUSH STATION</p>

                </div>
              </a>
            </div>

        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
             <a href="">

                <img class="card-img-top" src="{{ asset('assets/images/recent_works/CLEANOVATIVE.jpg') }}" alt="Card image cap">

                <div class="card-body">
                    <p class="title">Web</p>
                    <p class="card-text"> CLEANOVATIVE</p>


                </div>
            </a>
            </div>

        </div>
    </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-3">
                <a class="button" href="{{ route('case.study') }}">
                    Load More
                </a>
            </div>

        </div>

</div>
<!-- Career galaery  end -->

<!-- cta - start -->
<div class="cta">
    <div class="cta-wrapper position-relative bg-main">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-6">
                    <h3 class="heading heading-large dark-1">
                        Have an idea?<br>Let’s get it done right!
                    </h3>
                </div>
                <div class="col-md-6 d-md-inline-flex justify-content-md-end">
                    <div class="button-wrapper">
                        <a class="button button-2" href="contact.html">
                            Let's Work Together
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="artwork artwork-4">
            <img src="{{asset('assets/images/art_1.svg')}}" alt="artwork">
        </div>
    </div>
</div>
<!-- cta - end -->


@endsection

