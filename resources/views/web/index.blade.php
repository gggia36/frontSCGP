@extends('layouts.layout')
@section('content')
<section class="position-relative mBottom-minus80" style="z-index: -1;">
	<div id="top-carousel" class="owl-carousel owl-theme top-carousel-owl backdropHeader">
	    <div class="item"><img class="w-100" src="{{asset('assets/Images/Hero-banner.png')}}"/></div>
	   	<div class="item"><img class="w-100" src="{{asset('assets/Images/Hero-banner.png')}}"/></div>
	</div>
	<button type="button" class="btn btn-primary btn-carousel">Read More</button>
</section>

<section id="bg-consumer">
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 py-5" data-aos="fade-up" data-aos-duration="1000">
				<h5 class="text-center txt-detail-top lh-1">
					A leading multinational consumer<br/>
					packaging solutions provider<br/>
					through innovative and sustainable offerings
				</h5>
			</div>
		</div>
	</div>
	<div class="container pb-5 px-0">
		<div class="row text-center pb-5 box-show-card" data-aos="fade-up" data-aos-duration="2000">
			<h1 class="txt-blue pb-4" data-aos="fade-up" data-aos-duration="1000">PRODUCT & SERVICE</h1>
			<div class="col-md-3 my-2">
				<div class="wrap">
				  <div class="front position-relative">
				    <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/Packaging.jpg')}}" />
					<div class="front-title-solution"></div>
					<p class="entypo-mobile text-uppercase">PACKAGING</p>		   
				  </div>
				  <div class="back">
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
				  <div class="front0 position-relative">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x1.png')}}"/>
					 <div class="front-title-solution"></div>
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
				  <div class="front0 position-relative">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x2.png')}}"/>
					 <div class="front-title-solution"></div>
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
				  <div class="front position-relative">
				     <img class="w-100 img-thumbnail-product" src="{{asset('assets/Images/img-x3.png')}}"/>
					 <div class="front-title-solution"></div>
				   	 <p class="entypo-mobile text-uppercase a1">Paper and pulp</p>
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
				  <div class="front position-relative">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x4.png')}}"/>
					 <div class="front-title-solution"></div>
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
				  <div class="front position-relative">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x5.png')}}"/>
					 <div class="front-title-solution"></div>
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
				  <div class="front position-relative">
				     <img class="w-100 img-thumbnail-product-2" src="{{asset('assets/Images/img-x6.png')}}"/>
					 <div class="front-title-solution"></div>
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
		<div class="row" id="collapseSolution">
			<div class="col-md-6 col-12 px-0 bg-image-solutions">
				
			</div>
			<div class="col-md-6 col-12 box-show-card py-4" data-aos="fade-up" data-aos-duration="2000">
				<h1 class="txt-blue pt-4" >SOLUTIONS</h1>
				<div class="font-solution">
					  <a class="txt-blue2 mb-0  px-0  set-a" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					   Circular economy solutions
					  </a>
						<div class="collapse show" id="collapseExample" data-bs-parent="#collapseSolution">
						  <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/ci.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>				

				<div class="font-solution">
					  <a class="txt-blue2 mb-0 set-a" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
					  Small lot solutions
					  </a>
						<div class="collapse" id="collapseExample1" data-bs-parent="#collapseSolution">
						 <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/small.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>
				<div class="font-solution">
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
					  Convenience solutions
					  </a>
						<div class="collapse" id="collapseExample5" data-bs-parent="#collapseSolution">
						 <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/img-x7.png')}}">
									<img src="{{asset('assets/Images/img-x8.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>
				<div class="font-solution">
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
					  Smart and functional solutions
					  </a>
						<div class="collapse" id="collapseExample2" data-bs-parent="#collapseSolution">
						  <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/smart.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>
				<div class="font-solution">
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
					  E-commerce solutions
					  </a>
						<div class="collapse" id="collapseExample3" data-bs-parent="#collapseSolution">
						 <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/e-com.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>
				<div class="font-solution">
					  <a class="txt-blue2 mb-0  set-a" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
					  Marketing event solutions
					  </a>
						<div class="collapse" id="collapseExample4" data-bs-parent="#collapseSolution">
						  <div class="card card-fix card-body px-0 pb-0">
						   <p class="txt-org mb-0">SCGP is committed to incorporating Circular Economy <br>principles into the product and service design process...</p>
						   <div class="d-flex">
									<img src="{{asset('assets/Images/mar.png')}}">
								</div>
						  </div>
						  <button class="btn btn-grad mx-0 my-2">Read More</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials bg-white">
	<div class="container py-5 px-0" data-aos="fade-up" data-aos-duration="1000">
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
							<p class="entypo-mobile front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
							<p class="entypo-mobile front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
							<p class="entypo-mobile front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
							<p class="entypo-mobile front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
							<p class="entypo-mobile front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
	<div class="container px-0" data-aos="fade-up" data-aos-duration="1000">
	<div class="row pt-3 box-show-card" data-aos="fade-up" data-aos-duration="2000">
		<h1 class="text-white text-center">NEWS</h1>
	</div>
      <div class="row">
        <div class="owl-slider">
			<div id="carousel-new" class="owl-carousel owl-carousel-new">
				<div class="item box-card-product2 wrap4">
					<div class="front4">
						<img class="img-product-fix" src="{{asset('assets/Images/img-x10.png')}}">
						<div class="h-box pt-3 ps-2">
							<p class="front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
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
							<p class="front-to-slide">SCGP makes inroads into
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
							<p class="front-to-slide">SCGP tops up its success
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
							<p class="front-to-slide">SCGP tops up its success in
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
							<p class="front-to-slide">Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
						</div>
					</div>
					<div class="back4">
							<p>Pro May : "INSPIRATION"...can be Created & Passed Forward</p>
					</div>
				</div>
			</div>
		</div>
      </div> 
      <div class="row">
      	<div class="col-md-12 text-center">
      		<button class="btn btn-read-more2 mt-3">Read more</button>
      	</div>
      </div>
    </div>
</section>

<section class="section d-none d-md-block" >
	<div class="container">
		<div class="row text-center pt-3 pb-2" >
			<div class="col-12">
				<h5 class="txt-blue">SUBSIDIARIES AND JOINT VENTURES OF SCG PACKAGING</h5>
			</div>
			<div class="col-12">
				<img class="w-75" src="{{asset('assets/Images/img-customer.png')}}">
			</div>
		</div>
	</div>
</section>

<section class="section d-block d-md-none" >
	<div class="container">
		<div class="row text-center py-3" >
			<div class="col-12">
				<h5 class="txt-blue fix-fonttext-footer">SUBSIDIARIES AND JOINT VENTURES OF SCG PACKAGING</h5>
			</div>
			<div class="col-12">
				<img class="w-100" src="{{asset('assets/Images/img-customer-sm.png')}}">
			</div>
		</div>
	</div>
</section>




<style type="text/css">

.bg-image-solutions {
    background-image: url('assets/Images/img-x9.png');
    background-repeat: no-repeat;
    background-size: 90%;
    background-position-x: left;
    background-attachment: fixed !important;
    background-position: -40rem;
}

.back4{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail-slide.png');
  background-size: 100% 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .4s linear;
}
.back3{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail-slide.png');
  background-size: 100% 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .4s linear;
}
.back2{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail-long.png');
  background-size: 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .4s linear;
}
.back{
  opacity:0;
  background-image: url('assets/Images/hover-thumbnail.png');
  background-size: 100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  transition:all .4s linear;
}

/* .bg-image-solutions {
    background: url('assets/Images/img-x9.png');
    background-repeat: no-repeat;
    background-size: cover; 
    background-position-x: right;
} */

@media (max-width: 1199px) {
	.back2{
	  opacity:0;
	  background-image: url('assets/Images/hover-thumbnail.png');
	  background-size: 100%;
	  position:absolute;
	  overflow:hidden;
	  top:0;
	  left:0;
	  transition:all .4s linear;
	}
	.bg-image-solutions {
    background-image: url(assets/Images/img-x9.png);
    background-repeat: no-repeat;
    background-size: 100%;
    background-position-x: left;
    background-attachment: fixed !important;
    background-position: -34rem;
}
	
}

@media (max-width: 1920px) {
	.bg-image-solutions {
	    background-image: url(assets/Images/img-x9.png);
	    background-repeat: no-repeat;
	    background-size: 90%;
	    background-position-x: left;
	    background-attachment: fixed !important;
	    background-position: -50rem;
	}
}

@media (max-width: 768px) {
	
	.bg-image-solutions {
	    background-image: url('assets/Images/img-x9.png');
    	background-size: 150%;
	    background-repeat: no-repeat;
	    background-attachment: unset !important;
	    background-position: -12rem 
	}
}

</style>
@endsection

@section('script')
@endsection