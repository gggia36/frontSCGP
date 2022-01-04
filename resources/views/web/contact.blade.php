@extends('layouts.layout')
@section('content')
	<link rel="stylesheet" href="{{asset('assets/css/fix-select2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<div id="box__contact" style="background-color: #fff;">
	<p class="head__section"><span>CONTACT US</span></p>

	<div class="box__archive">
		<div class="info">
			<div class="row no-gutters justify-content-lg-center">
				<div class="col-lg-auto">
					<div class="form-group">
						<p class="icon-search"><img src="{{asset('assets/Images/search.png')}}" alt=""/></p>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<select class="dropdown input-contact" name="country">
							 <option selected>Open this select menu</option>
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<select class="dropdown input-contact" name="province">
							 <option selected>Open this select menu</option>
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<select class="dropdown input-contact" name="branch_title">
							 <option selected>Open this select menu</option>
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="col-lg-auto">
					<div class="form-group">
						<button class="submit" type="submit" id="btnSearchBranch"><span>Submit</span></button>
					</div>
				</div>
			</div>  
		</div>
	</div>


	<div class="box__map">
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1054872.8877017128!2d99.78457435245119!3d13.994588197022455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c7325f1aba5%3A0xe9265dc861de9d3c!2z4Lia4Lih4LiILiDguYDguK3guKrguIvguLXguIjguLUg4LmB4Lie4LiE4LmA4LiB4LiI4LiI4Li04LmJ4LiHIFNDRyBQYWNrYWdpbmcgUExD!5e0!3m2!1sth!2sth!4v1640191980169!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>


	<div class="box__info">
		<div class="container">
			<div class="form__info">
					<div class="row no-gutters">
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Interest</p>
								<div class="info">
									<select class="dropdown input-contact" name="to_email" required>
										<option value="scgpackaging@scg.com" selected>SCG Packaging</option>
										<option value="siwapork@scg.com">Packaging</option>
										<option value="siwapork@scg.com">Innovative Packaging</option>
										<option value="tpcwebmaster@scg.com">ผลิตภัณฑ์ภาชนะบรรจุอาหาร</option> 
										<option value="natthayn@scg.com">Packaging Paper</option>
										<option value="tpcwebmaster@scg.com">Graphic Paper</option>
										<option value="tpcwebmaster@scg.com">Copy Paper</option>
										<option value="tpcwebmaster@scg.com">Specialty Paper</option>
										<option value="tpcwebmaster@scg.com">Pulp</option>
										<option value="nungrutt@scg.com,parkpook@scg.com">Forestry Business</option>
										<option value="siwapork@scg.com">Design Service</option>
										<option value="siwapork@scg.com">Marketing and Event</option>
									</select>

									<input type="hidden" name="interest" value="SCG Packaging>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<p class="text">Name</p>
								<div class="info">
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<p class="text">Company</p>
								<div class="info">
									<input type="text" class="form-control" name="company" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Address</p>
								<div class="info">
									<textarea class="form-control" name="address" required></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Email</p>
								<div class="info">
									<input type="email" class="form-control" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Phone Number</p>
								<div class="info">
									<input type="text" class="form-control" name="phone_number" pattern=".{10,15}" mimlength="10" maxlength="15" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Detail</p>
								<div class="info">
									<textarea class="form-control" name="detail" required></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Quantity</p>
								<div class="info">
									<input type="text" class="form-control" name="quantity">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p class="text">Attach File : .pdf only, Limit 5 MB</p>
								<div class="info">
									<div class="upload">
										<a class="toggle"><label></label><span>Choose File</span></a>
										<input type="file" name="attach_file[]" accept="application/pdf">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="form-group">
								<input type="hidden" name="recaptcha_status" value="0">
								<div id="reCap"></div>
								<small for="reCap" class="text-captcha text-danger mt-1" style="display: none;">Check the box to prove your identity</small>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="box__button">
								<button class="submit" type="submit" disabled><span>Send</span></button>
							</div>
						</div>
					</div>   
			</div>
		</div>
	</div>

</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<img class="w-100" src="{{asset('assets/Images/logo-cus.jpg')}}" alt="" />
		</div>
	</div>
</div>



@endsection
@section('script')
@endsection