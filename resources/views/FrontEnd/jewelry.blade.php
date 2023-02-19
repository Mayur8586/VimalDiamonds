@extends('FrontEnd\layout')
@section('content')
<style>
    .custom img {
        max-width: 100%;
        max-height: 100%;
        padding-bottom: 7%;
        display: block;
        position: relative;
        overflow: hidden;
    }
</style>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4"> Customized Jewelry</h1>

        </div>
        <div class="row">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row custom">
                    <div class="col-lg-6">
                        <img src="{{asset('FrontEnd/img/jewel 1.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('FrontEnd/img/jewel 2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="row custom">
                    <div class="col-lg-6">
                        <img src="{{asset('FrontEnd/img/jewel 3.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('FrontEnd/img/jewel 4.jpg')}}" alt="">
                    </div>
                </div>



            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row custom">

                    <div class="col-lg-12">
                        <img src="{{asset('FrontEnd/img/jewel 5.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="container-xxl my-1">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInDown" data-wow-delay="0.1s">
                    <h1 class="mb-4">How we work</h1>
                    <h6 class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp animated">
                        We design diamond jewellery, based on your requirement and customized design. Our diamond experts carefully attend to order to creating something truly remarkable.
                    </h6>
                    <h5 class="text-primary fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp animated">
                        Don't hesitate to <a href="/contact">contact us</a></p>
                    </h5>

                </div>

            </div>
        </div>
    </div>
</div>




@stop