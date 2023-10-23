<!DOCTYPE html>
<html class="no-js" lang="ZXX">


<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Site keywords here">
<meta name="description" content="#">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Homeco - Real Estate HTML Template.</title>

<link rel="icon" href="<?= base_url();?>img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url();?>css/bootstrap.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/animate.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/aos.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/font-awesome-all.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/swiper-slider.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/flex-slider.css">

<link rel="stylesheet" href="<?= base_url();?>css/select2-min.css">

<link rel="stylesheet" href="<?= base_url();?>css/video-popup.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/jquery-ui.min.css">

<link rel="stylesheet" href="<?= base_url();?>css/theme-default.css">
<link rel="stylesheet" href="<?= base_url();?>css/style.css">
</head>
<body>
<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<section class="ecom-wc ecom-wc__full ecom-bg-cover" style="background-image: url('<?=base_url(); ?>img/credential-bg.html');">
<div class="container-fluid p-0">
<div class="row g-0">
<div class="col-lg-6 col-12">
<div class="ecom-wc__form">
<div class="ecom-wc__form-inner">
<h3 class="ecom-wc__form-title ecom-wc__form-title__one">Create Account <span>Your email address will not be published. Required fields are marked *</span></h3>

<form class="ecom-wc__form-main p-0" action="<?= site_url('site/signup_verify') ?>" method="post">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">First Name*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" type="text" name="firstname" placeholder="First Name" value="<?= set_value('firstname') ?>" required="required">
	<?php echo  form_error('firstname'); ?>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">Last Name*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" type="text" name="lastname" placeholder="Last Name" value="<?= set_value('lastname') ?>" required="required">
	<?php echo  form_error('lastname'); ?>
</div>
</div>
</div>
<div class="col-xxl-12 col-lg-6 col-12">
<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">Phone Number*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" type="text" name="phone" placeholder="Phone Number" value="<?= set_value('phone') ?>" required="required">
	<?php echo  form_error('phone'); ?>
</div>
</div>
</div>
<div class="col-xxl-12 col-lg-6 col-12">
<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">Email Address*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" type="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>" required="required">
	<?php echo  form_error('email'); ?>
</div>
</div>
</div>


<!-- 
	<div class="homec-submit-form mg-top-40">

<div class="homec-submit-form__inner">
	<p>Register As:</p>
<div class="form-group homec-form-input--list">

<div class="form-group homec-form-checkbox mg-top-15">
<input type="radio" id="item1" name="member" value="Agent" required>
<label class="homec-form-label" for="item1">Agent</label>
</div>
<div class="form-group homec-form-checkbox mg-top-15">
<input type="radio" id="member1" name="member" value="User" required>
<label class="homec-form-label" for="member1">User</label>
</div>

</div>
</div>
</div> -->

<div class="col-lg-6 col-md-6 col-12">



<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">Confirm Password*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="password-field" type="password" name="password"  required="required">
	<?php echo  form_error('password'); ?>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="form-group homec-form-input">
<label class="ecom-wc__form-label mg-btm-10">Confirm Password*</label>
<div class="form-group__input">
<input class="ecom-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="confirm-password-field" type="password" name="cpassword" maxlength="8" required="required">
	<?php echo  form_error('cpassword'); ?>
</div>
</div>
</div>
</div>

<div class="form-group form-mg-top-30">
<div class="ecom-wc__button ecom-wc__button--bottom">
<button class="homec-btn homec-btn__second" type="submit"><span>Signup</span></button>
<button class="homec-btn homec-btn__second homec-btn__social" type="submit"><span class="ntfmax-wc__btn-icon"><img src="<?= base_url();?>img/google.svg" alt="#"></span><span>Sign In with Google</span></button>
</div>
</div>

<div class="form-group mg-top-20">
<div class="ecom-wc__bottom">
<p class="ecom-wc__text">Already have Account? <a href="<?= site_url('login');?>">Log In</a></p>
</div>
</div>
</form>

</div>
</div>
</div>
<div class="col-lg-6 col-12 d-none d-lg-block ">
<div class="ecom-wc__inner homec-bg-cover" style="background-image: url('<?=base_url(); ?>img/welcome-bg.svg');">

<div class="ecom-wc__logo">
<a href="<?= base_url();?>index-2.html"><img src="<?= base_url();?>img/welcome-logo.png" alt="#"></a>
</div>
<div class="ecom-wc__inside">

<div class="ecom-wc__middle">
<a href="<?= base_url();?>index-2.html"><img src="<?= base_url();?>img/welcome-inner.png" alt="#"></a>
<div class="ecom-wc__countdown--title">100<span>Brunches</span></div>
<div class="ecom-wc__countdown--title ecom-wc__countdown--title--v2">150k<span>Built Hose</span></div>
</div>
<div class="ecom-wc__footer">
<ul class="ecom-wc__footer--list list-none">
<li><a href="<?= base_url();?>#">Terms & Condition</a></li>
<li><a href="<?= base_url();?>#">Privacy Policy</a></li>
<li><a href="<?= base_url();?>#">Help</a></li>
</ul>
<div class="ecom-wc__footer--languages">
<select class="ecom-wc__footer--language">
<option data-display="english">English</option>
<option value="2">Bengali</option>
<option value="3">Frances</option>
</select>
</div>
</div>
<p class="ecom-wc__footer--text">@ 2023 HomeCo. All Right Reserved. </p>
</div>
</div>
</div>
</div>
</div>
</section>


<a href="#" class="scrollToTop">Up Now<i class="fa-solid fa-angle-right"></i></a>

<script src="<?= base_url();?>js/jquery.min.js"></script>
<script src="<?= base_url();?>js/jquery-migrate.js"></script>
<script src="<?= base_url();?>js/jquery-ui.min.js"></script>

<script src="<?= base_url();?>js/bootstrap.min.js"></script>

<script src="<?= base_url();?>js/aos.min.js"></script>

<script src="<?= base_url();?>js/ckeditor.min.js"></script>

<script src="<?= base_url();?>js/select2-js.min.js"></script>

<script src="<?= base_url();?>js/video-popup.min.js"></script>

<script src="<?= base_url();?>js/swiper-slider.min.js"></script>

<script src="<?= base_url();?>js/flex-slider.js"></script>

<script src="<?= base_url();?>js/waypoints.min.js"></script>

<script src="<?= base_url();?>js/jquery.counterup.min.js"></script>

<script src="<?= base_url();?>js/easing.min.js"></script>

<script src="<?= base_url();?>js/active.js"></script>
<script>
			var swiper = new Swiper(".homec-slider-agent", {
				autoplay: { 
					 delay: 344500,
				},
				navigation: {
				  nextEl: ".swiper-button-next",
				  prevEl: ".swiper-button-prev",
				},
				mousewheel: true,
				keyboard: true,
				loop: true,
				grabCursor: true,
				spaceBetween: 30,
				centeredSlides: false,
				pagination: {
					el: '.swiper-pagination__agent',
					type: 'bullets',
					clickable: true,
				},
				slidesPerView: "4",
				breakpoints: {
				  320: {
					slidesPerView: "1",
				  },
				  428: {
					slidesPerView:"2",
				  },
				  640: {
					slidesPerView: "2",
				  },
				  768: {
					slidesPerView: "3",
				  },
				  1024: {
					slidesPerView: "4",
				  },
				},
			});	
		 </script>
</body>

</html>