@extends('layouts.layout')
@section('content')


<div class="container pb-5">
    <div class="row">
        <div class="col-12 text-center mt-5 pt-5">
            <h1 class="Page-Title" style="font-size: 3.5rem;">Packaging</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-4 col-md-6 col-12 px-1 mt-4 mt-4">
            <div class="wrap6">

                <div class="front6">
                    <div class="card mx-auto">
                        <div class="position-relative">
                            <img src="{{asset('assets/Images/img-x13.png')}}" class="card-img-top">
                            <div class="position-absolute top-50 start-0 w-100 h-100">
                                <div class="text-center title-packaging">
                                    <h4>
                                        <span>Primary Packaging</span>                             
                                    </h4>
                                    <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                                </div>
                            </div>
                        </div>         
                        <div class="card-body bg-f1">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Pouch.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Stand up pouch.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Wicket bag.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="back6">
                    <div class="position-absolute top-50 start-0 w-100 h-100">
                        <div class="text-center img-packaging">
                            <h5>
                                <span>Primary Packaging</span>                             
                            </h5>
                            <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-xl-4 col-md-6 col-12 px-1 mt-4 mt-4">
            <div class="wrap6">

                <div class="front6">
                    <div class="card mx-auto">
                        <div class="position-relative">
                            <img src="{{asset('assets/Images/img-x13.png')}}" class="card-img-top">
                            <div class="position-absolute top-50 start-0 w-100 h-100">
                                <div class="text-center title-packaging">
                                    <h4>
                                        <span>Secondary Packaging</span>                             
                                    </h4>
                                    <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                                </div>
                            </div>
                        </div>         
                        <div class="card-body bg-f1">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Luxiry packaging.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Gift set.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Shopping bag.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="back6">
                    <div class="position-absolute top-50 start-0 w-100 h-100">
                        <div class="text-center img-packaging">
                            <h5>
                                <span>Secondary Packaging</span>                             
                            </h5>
                            <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-xl-4 col-md-6 col-12 px-1 mt-4 mt-4">
            <div class="wrap6">

                <div class="front6">
                    <div class="card mx-auto">
                        <div class="position-relative">
                            <img src="{{asset('assets/Images/img-x13.png')}}" class="card-img-top">
                            <div class="position-absolute top-50 start-0 w-100 h-100">
                                <div class="text-center title-packaging">
                                    <h4>
                                        <span>Tertiary Packaging</span>                             
                                    </h4>
                                    <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                                </div>
                            </div>
                        </div>         
                        <div class="card-body bg-f1">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Paper tray.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Paper pallet.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/Images/Parcel box.jpg')}}" class="w-100 sub-img position-relative rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="back6">
                    <div class="position-absolute top-50 start-0 w-100 h-100">
                        <div class="text-center img-packaging">
                            <h5>
                                <span>Tertiary Packaging</span>                             
                            </h5>
                            <p class="px-3">The Packaging in direct contact with the product itself such as flexible packaging and Rigid packaging</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        

    </div>

</div>

<style>
    .bg-f1{
        background: #f1f2f2;
    }

    .card {
        border-radius: 1.25rem;
    }

    .card-img-top {
        border-top-left-radius: 1.25rem!important;
        border-top-right-radius: 1.25rem!important;
        border-bottom: 7px solid #ee5222;
    }

    .card-body {
        border-bottom-left-radius: 1.25rem!important;
        border-bottom-right-radius: 1.25rem!important;
        padding-bottom: 0.5rem;
    }

    .sub-img {
        z-index: 10;
    }

    .title-packaging {
        color: #FFF;
    }

    .title-packaging h4 {
        font-family: "SCG Bold";
    }

    .title-packaging h4 span {
        border-bottom: 2px solid #FFF;
        text-transform: uppercase;
    }

    .title-packaging p {
        font-family: "SCG Regular";
        font-size: 0.9rem;
    }

    .img-packaging {
        color: #FFF;
        border-bottom: 5px solid #ee5222;
        padding-bottom: 0.5rem;
    }

    .img-packaging h5 {
        font-family: "SCG Bold";
    }

    .img-packaging h5 span {
        border-bottom: 2px solid #FFF;
        text-transform: uppercase;
    }

    .img-packaging p {
        font-family: "SCG Regular";
        font-size: 0.9rem;
    }

    .back6{
        opacity:0;
        background-image: url('assets/Images/hover-thumbnail.png');
        background-size: 100% 100%;
        position:absolute;
        overflow:hidden;
        top:0;
        left:0;
        transition:all .4s linear;
    }

    .title-packaging h5 span {
        border-bottom: 2px solid #FFF;
        text-transform: uppercase;
    }

    

</style>

@endsection

@section('script')
@endsection