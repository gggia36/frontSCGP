@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/fix-select2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
<section id="box__privacy-policy">
<div class="container">
	<div class="row mt-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">นโยบายความเป็นส่วนตัว</li>
			</ol>
		</nav>
	</div>
	<div class="row">
		<div class="col-12 mt-4">
			<h2 class="text-danger">นโยบายความเป็นส่วนตัว</h2>
		</div>
		
	</div>
	<div class="row">
		<div class="col-12">
			<div class="box__description">
				<ul class="list__info">
					<li>
						<div class="box">
							<div class="info">
								<p class="title">นโยบายความเป็นส่วนตัวสำหรับลูกค้า</p>
								<a href="public/frontend/assets/file/privacy-notice/TH/200521_TH_นโยบายความเป็นส่วนตัวสำหรับลูกค้า_PKG_V1.2.pdf" class="link" target="_blank">view</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<div class="info">
								<p class="title">นโยบายความเป็นส่วนตัวสำหรับคู่ธุรกิจและผู้เกี่ยวข้อง</p>
								<a href="public/frontend/assets/file/privacy-notice/TH/200521_TH_นโยบายความเป็นส่วนตัวสำหรับคู่ธุรกิจและผู้ที่เกี่ยวข้อง_PKG_V1.2.pdf" class="link" target="_blank">view</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<div class="info">
								<p class="title">นโยบายความเป็นส่วนตัวสำหรับผู้เข้าร่วมกิจกรรมหรือผู้มาเข้าติดต่อ</p>
								<a href="public/frontend/assets/file/privacy-notice/TH/200521_TH_นโยบายความเป็นส่วนตัวสำหรับผู้เข้าร่วมกิจกรรมหรือผู้เข้ามาติดต่อ_PKG_V1.2.pdf" class="link" target="_blank">view</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<div class="info">
								<p class="title">นโยบายความเป็นส่วนตัวสำหรับผู้ถือหุ้น ผู้ถือหุ้นกู้ และกรรมการ</p>
								<a href="public/frontend/assets/file/privacy-notice/TH/200521_TH_นโยบายความเป็นส่วนตัวสำหรับผู้ถือหุ้น_ผู้ถือหุ้นกู้_และกรรมการ_PKG_V1.2.pdf" class="link" target="_blank">view</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>


@endsection
@section('script')
@endsection