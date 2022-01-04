@extends('layouts.layout')
@section('content')
<section>
	<div id="top-carousel" class="owl-carousel owl-theme top-carousel-owl position-relative">
	    <div class="item"><img class="w-100" src="{{asset('assets/Images/Hero-banner.png')}}"/></div>
	   	<div class="item"><img class="w-100" src="{{asset('assets/Images/Hero-banner.png')}}"/></div>
	</div>
</section>

<section  style="background: url('assets/Images/Upper-BG.png');background-repeat: no-repeat; background-size:100% 100%;">
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 py-5" data-aos="fade-up" data-aos-duration="1000">
				<h5 class="text-center txt-detail-top">
					A leading multinational consumer<br/>
					packaging solutions provider<br/>
					through innovative and sustainable offerings
				</h5>
			</div>
		</div>
	</div>
	<div class="container pb-5">
		<div class="row text-center pb-5 box-show-card" data-aos="fade-up" data-aos-duration="2000">
			<h1 class="txt-blue pb-4" data-aos="fade-up" data-aos-duration="1000">PRODUCT & SERVICE</h1>
			<div class="col-md-3 my-2">
				<div class="wrap">
				  <div class="front">
				    <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x1.png')}}"/>
				    <p class="entypo-mobile text-uppercase">PACKAGING</p>
				  </div>
				  <div class="back ">
				     <h1 class="entypo-mobile text-uppercase">PACKAGING</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="wrap">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x2.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">Innovative <br>Product</p>
				  </div>
				  <div class="back">
				     <h1 class="entypo-mobile text-uppercase">Innovative <br>Product</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="wrap">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x3.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">Foodservice Product</p>
				  </div>
				  <div class="back">
				     <h1 class="entypo-mobile text-uppercase">Foodservice Product</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="wrap">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x1.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">Paper and pulp</p>
				  </div>
				  <div class="back">
				     <h1 class="entypo-mobile text-uppercase">Paper and pulp</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 my-2">
				<div class="wrap2">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x4.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">Design service</p>
				  </div>
				  <div class="back2">
				     <h1 class="entypo-mobile text-uppercase">Design service</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 my-2">
				<div class="wrap2">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x5.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">Marketing and Event</p>
				  </div>
				  <div class="back2">
				     <h1 class="entypo-mobile text-uppercase">Marketing and Event</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 my-2">
				<div class="wrap2">
				  <div class="front">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x6.png')}}"/>
				   	 <p class="entypo-mobile text-uppercase">SCGP Recycle</p>
				  </div>
				  <div class="back2">
				     <h1 class="entypo-mobile text-uppercase">SCGP Recycle</h1>
				     <hr>
				    <p>Fiber-based packaging and
					perfermance and
					polymer packaging</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container-fluid " data-aos="fade-up" data-aos-duration="1000">
		<div class="row ">
			<div class="col-md-6 px-0" style="background: url('assets/Images/img-x9.png');background-repeat: no-repeat;background-size: cover; background-position-x: right;">
				
			</div>
			<div class="col-md-6 box-show-card py-4" data-aos="fade-up" data-aos-duration="2000">
				<h1 class="txt-blue pt-4" >SOLUTION</h1>
				<div class="">
					  <a class="txt-blue2 mb-0  px-0  set-a" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					   Circular economy solutions
					  </a>
						<div class="collapse show" id="collapseExample">
						  <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>				

				<div>
					  <a class="txt-blue2 mb-0 set-a" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
					  Small lot solutions
					  </a>
						<div class="collapse" id="collapseExample1">
						 <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>
				<div>
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
					  Convenience solutions
					  </a>
						<div class="collapse" id="collapseExample5">
						 <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>
				<div>
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
					  Smart and functional solutions
					  </a>
						<div class="collapse" id="collapseExample2">
						  <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>
				<div>
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
					  E-commerce solutions
					  </a>
						<div class="collapse" id="collapseExample3">
						 <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>
				<div>
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
					  Marketing event solutions
					  </a>
						<div class="collapse" id="collapseExample4">
						  <div class="card card-fix card-body">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
								<button class="btn btn-grad">Read mord</button>
						  </div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials">
	<div class="container py-5" data-aos="fade-up" data-aos-duration="1000">
	<div class="row pt-5 box-show-card" data-aos="fade-up" data-aos-duration="2000" >
		<h1 class="txt-blue text-center">BUSINESS SPOTLIGHT</h1>
	</div>
      <div class="row">
        <div class="owl-slider py-5">
			<div id="carousel" class="owl-carousel owl-carousel-product">
				<div class="item box-card-product wrap3">
					<div class="front3">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x13.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="entypo-mobile">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back3">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
				<div class="item box-card-product wrap3">
					<div class="front3">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x12.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="entypo-mobile">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back3">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
				<div class="item box-card-product wrap3">
					<div class="front3">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x11.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="entypo-mobile">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back3">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
				<div class="item box-card-product wrap3">
					<div class="front3">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x10.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="entypo-mobile">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back3">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
				<div class="item box-card-product wrap3">
					<div class="front3">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x10.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="entypo-mobile">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back3">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
			</div>
		</div>
      </div> 
      <div class="row  pb-5">
      	<div class="col-md-12 text-center">
      		<button class="btn btn-read-more">Read more</button>
      	</div>
      </div>
    </div>
</section>



<section id="bg-section-new">
	<div class="container py-5" data-aos="fade-up" data-aos-duration="1000">
	<div class="row pt-5 box-show-card" data-aos="fade-up" data-aos-duration="2000">
		<h1 class="text-white text-center">NEWS</h1>
	</div>
      <div class="row">
        <div class="owl-slider py-5">
			<div id="carousel-new" class="owl-carousel owl-carousel-new">
				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x10.png')}}">
						<div class="h-box pt-3 ps-2">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back4">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x14.png')}}">
						<div class="h-box pt-3 ps-2">
							<p>SCGP makes inroads into
							medical supplies and labware
							industry Signing of a share...</p>
						</div>
					</div>
					<div class="back4">
							<p>SCGP makes inroads into
							medical supplies and labware
							industry Signing of a share...</p>
					</div>
				</div>

				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x15.png')}}">
						<div class="h-box pt-3 ps-2">
							<p>SCGP tops up its success
							in Indonesia, expands
							investment...</p>
						</div>
					</div>
					<div class="back4">
							<p>SCGP tops up its success
							in Indonesia, expands
							investment...</p>
					</div>
				</div>

				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x16.png')}}">
						<div class="h-box pt-3 ps-2">
							<p>SCGP tops up its success in
							Indonesia, expands investment
							portfolio in downstream...</p>
						</div>
					</div>
					<div class="back4">
							<p>SCGP tops up its success in
							Indonesia, expands investment
							portfolio in downstream...</p>
					</div>
				</div>
				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x13.png')}}">
						<div class="h-box pt-3 ps-2">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back4">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
			</div>
		</div>
      </div> 
      <div class="row  pb-5">
      	<div class="col-md-12 text-center">
      		<button class="btn btn-read-more2">Read more</button>
      	</div>
      </div>
    </div>
</section>

<section class="section" >
	<div class="container">
		<div class="row text-center py-5" data-aos="zoom-in" data-aos-duration="1000">
			<div class="col-12">
				<h5 class="txt-blue">SUBSIDIARIES AND JOINT VENTURES OF SCG PACKAGING</h5>
			</div>
			<div class="col-12">
				<img class="w-75" src="{{asset('assets/Images/img-customer.png')}}">
			</div>
		</div>
	</div>
</section>




<style type="text/css">
.back4{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail-slide.png');
  background-size: 100% 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .7s linear;
}
.back3{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail-slide.png');
  background-size: 100% 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .7s linear;
}
.back2{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail.png');
  background-size: 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .7s linear;
}
.back{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail.png');
  background-size: 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .7s linear;
}
</style>
@endsection

@section('script')
@endsection