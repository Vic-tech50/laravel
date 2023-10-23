<section class="breadcrumbs__content" style="background-image: url(<?= base_url();?>img/bread-overlay.jpg);">

<div class="container">
<div class="row">

<div class="col-12">
<div class="breadcrumb-content">
<ul class="breadcrumb__menu list-none">
<li><a href="index-2.html">Home</a></li>
<li class="active"><a href="add-property.html">Upload Property</a></li>
</ul>
<h2 class="breadcrumb__title m-0">Upload Property</h2>
</div>
</div>
</div>
</div>
</section>

<section class="pd-top-80 pd-btm-80">
<div class="container">
<div class="row">
<div class="col-12">

	

  	                          <?php 
                    if($this->session->flashdata('info')){
                      echo "<div class = 'alert alert-success alert-dismissible'>".' <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('info'). "</div>";
                    }
                ?> 
                <!-- <?php echo $error;?> -->
<!-- <form action="<?= site_url('site/upload_property') ?>" method="post" enctype="multipart/form-data"> -->
	<?php echo form_open_multipart('site/upload_property'); ?>
<div class="homec-submit-form">
<h4 class="homec-submit-form__title">Property Information</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Property Title*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Title"  name="title" value="<?= set_value('title') ?>">
</div>
</div>
</div>
<div class="col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Slug*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="slug"  name="slug" value="<?= set_value('slug') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Property Type*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border" name=type value="<?= set_value('type') ?>">
<option data-display="Select Catagory">Select Property Type</option>
<option value="Apartment">Apartment</option>
<option value="House">Family House</option>
<option value="Villa">Modern Villa</option>
<option value="Land">Land</option>
<option value="Car">Car</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Purpose*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border" name="purpose" value="<?= set_value('purpose') ?>">
<option data-display="Select Catagory">Select Purpose</option>
<option value="Sale">For Sale</option>
<option value="Rent">For Rent</option>
<option value="Lease">For Lease</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Rent Period*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border" name="rent_period" value="<?= set_value('rent_period') ?>">
<option data-display="Select Catagory">Select Period</option>
<option value="Daily">Daily</option>
<option value="Monthly">Monthly</option>
<option value="Yearly">Yearly</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Property Price(&#8358;)*</h4>
<div class="form-group homec-form-input">
<input type="number" placeholder="Price"  name="price" value="<?= set_value('price') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Area (Sq: Ft)*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here"  name="area" value="<?= set_value('area') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Unit*</h4>
<div class="form-group homec-form-input">
<input type="number"  name="unit" value="<?= set_value('unit') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Bedroom*</h4>
<div class="form-group homec-form-input">
<input type="number"  name="bedroom" value="<?= set_value('bedroom') ?>"> 
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Bathroom*</h4>
<div class="form-group homec-form-input">
<input type="number"  name="bathroom" value="<?= set_value('bathroom') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Garage*</h4>
<div class="form-group homec-form-input">
<input type="number"  name="garage" value="<?= set_value('garage') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Total Kitchen*</h4>
<div class="form-group homec-form-input">
<input type="number"  name="kitchen" value="<?= set_value('kitchen') ?>">
</div>
</div>
</div>
</div>

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Description*</h4>
<div class="form-group homec-form-input">
<textarea placeholder="Description" id="ckdesc1"  name="description" value="<?= set_value('description') ?>"></textarea>
</div>
</div>
</div>
</div>
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Property Image</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-20">
<p class="homec-img-video-label mg-btm-10">Thumbnail Image* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<label class="homec-image-video-upload__label" for="input-video1">
<!-- <img src="<?= base_url();?>img/upload-file.svg" alt="#"> -->
<input type="file" name = "thumbnail" value="<?= set_value('thumbnail') ?>">

</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-20">
<p class="homec-img-video-label mg-btm-10">Slider Image* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<!-- <input type="file" class="btn-check" name="options" id="input-video1"> -->
<label class="homec-image-video-upload__label" for="input-video1">
<!-- <img src="<?= base_url();?>img/upload-file.svg" alt="#"> -->
<input type="file" name = "image" value="<?= set_value('image') ?>">
<!-- <span class="homec-image-video-upload__title">Drag & Drop or <span class="homec-primary-color">Choose File</span> to upload </span> -->
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Property Video</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-20">
<p class="homec-img-video-label mg-btm-10">Upload Video* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<!-- <input type="file" class="btn-check" name="options" id="input-video1"> -->
<label class="homec-image-video-upload__label" for="input-video1">
<!-- <img src="<?= base_url();?>img/upload-file.svg" alt="#"> -->
<!-- <span class="homec-image-video-upload__title">Drag & Drop or <span class="homec-primary-color">Choose File</span> to upload </span> -->
<input type="file" name = "video" value="<?= set_value('video') ?>">
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Youtube Video id* </h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Title"  name="youtube_video" value="<?= set_value('youtube_video') ?>">
</div>
</div>

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Video Description*</h4>
<div class="form-group homec-form-input">
<textarea placeholder="Description"  name="video_description" value="<?= set_value('video_description') ?>"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Property Location</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">City*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border" name="city" value="<?= set_value('city') ?>">
<option data-display="Select Catagory">Select City</option>
<option value="Dhaka">Dhaka</option>
<option value="Chittagong">Chittagong</option>
<option value="Khulna">Khulna</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Address*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here"  name="address" value="<?= set_value('address') ?>">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Address Details*</h4>
<div class="form-group homec-form-input">
<textarea placeholder="Description"  name="address_detail" value="<?= set_value('address_detail') ?>"></textarea>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Google Map*</h4>
<div class="form-group homec-form-input">
<textarea  name="map" value="<?= set_value('map') ?>"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Amenities</h4>
<div class="homec-submit-form__inner">
<div class="form-group homec-form-input--list">
<div class="form-group homec-form-checkbox mg-top-15">
<input type="checkbox" id="item1" name="item1" value="breakfast">
<label class="homec-form-label" for="item1">Breakfast</label>
</div>
<div class="form-group homec-form-checkbox mg-top-15">
<input type="checkbox" id="item2" name="item2" value="lunch">
<label class="homec-form-label" for="item2">Lunch</label>
</div>
<div class="form-group homec-form-checkbox mg-top-15">
<input type="checkbox" id="item3" name="item3" value="free wifi">
<label class="homec-form-label" for="item3">Free Wifi</label>
</div>
<div class="form-group homec-form-checkbox mg-top-15">
<input type="checkbox" id="item4" name="item4" value="swimming pool">
<label class="homec-form-label" for="item4">Swimming Pool</label>
</div>
<div class="form-group homec-form-checkbox mg-top-15">
<input type="checkbox" id="item5" name="item5" value="cleaning">
<label class="homec-form-label" for="item5">Cleaning</label>
</div>
</div>
</div>
</div>
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Nearest Location</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Nearest Location*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border" name="nearest_location" value="<?= set_value('nearest_location') ?>">
<option data-display="Select Catagory">Select Location</option>
<option value="Dhaka">Dhaka</option>
<option value="Chittagong">Chittagong</option>
<option value="Khulna">Khulna</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Distance(KM)*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here"  name="distance" value="<?= set_value('distance') ?>">
<!-- <button class="homec-form-add__button"><img src="<?= base_url();?>img/plus-icon.svg"> </button> -->
</div>
</div>
</div>
</div>
<!--
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Nearest Location*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border">
<option data-display="Select Catagory">Select Location</option>
<option value="2">Dhaka</option>
<option value="3">Chittagong</option>
<option value="4">Khulna</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Distance(KM)*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here" >
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Nearest Location*</h4>
<div class="form-group homec-form-input">
<select class="homec-form-select homec-border">
<option data-display="Select Catagory">Select Location</option>
<option value="2">Dhaka</option>
<option value="3">Chittagong</option>
<option value="4">Khulna</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Distance(KM)*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here" >
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>
-->
</div>
</div>
<!--
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Additional Information</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Key*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here" >
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Value*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here" >
<button class="homec-form-add__button"><img src="<?= base_url();?>img/plus-icon.svg"></button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Key*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here" >
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Value*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here" >
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Key*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here" >
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">Value*</h4>
<div class="form-group homec-form-input homec-form-add">
<input type="text" placeholder="Type Here" >
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">Property Plan</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-30">
<p class="homec-img-video-label mg-btm-10">Thumbnail Image* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<!-- <input type="file" class="btn-check" name="options" id="input-video1">
<label class="homec-image-video-upload__label" for="input-video1">
<img src="<?= base_url();?>img/upload-file.svg" alt="#"> -->
<!-- <span class="homec-image-video-upload__title">Drag & Drop or <span class="homec-primary-color">Choose File</span> to upload </span> -->
<input type="file" name = "plan" value="<?= set_value('plan') ?>">

</label>
</div>
</div>
</div>



<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Youtube Video id* </h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Title"  name="plan_video" value="<?= set_value('plan_video') ?>">
</div>
</div>

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Video Description*</h4>
<div class="form-group homec-form-input homec-form-add">
<textarea placeholder="Description"  name="plan_description"></textarea>
<!-- <button class="homec-form-add__button"><img src="<?= base_url();?>img/plus-icon.svg"></button> -->
</div>
</div>
</div>
</div>
<!--

<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-30">
<p class="homec-img-video-label mg-btm-10">Thumbnail Image* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<input type="file" class="btn-check" name="options" id="input-video1">
<label class="homec-image-video-upload__label" for="input-video1">
<img src="<?= base_url();?>img/upload-file.svg" alt="#">
<span class="homec-image-video-upload__title">Drag & Drop or <span class="homec-primary-color">Choose File</span> to upload </span>
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Youtube Video id* </h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Title" >
</div>
</div>

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Video Description*</h4>
<div class="form-group homec-form-input homec-form-add">
<textarea placeholder="Description" ></textarea>
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="mg-top-30">
<p class="homec-img-video-label mg-btm-10">Thumbnail Image* <span>(Max. limit 10 & Max. Size 10MB)</span></p>

<div class="homec-image-video-upload homec-border">
<input type="file" class="btn-check" name="options" id="input-video1">
<label class="homec-image-video-upload__label" for="input-video1">
<img src="<?= base_url();?>img/upload-file.svg" alt="#">
<span class="homec-image-video-upload__title">Drag & Drop or <span class="homec-primary-color">Choose File</span> to upload </span>
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Youtube Video id* </h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Title" >
</div>
</div>

<div class="mg-top-30">
<h4 class="homec-submit-form__heading">Video Description*</h4>
<div class="form-group homec-form-input homec-form-add">
<textarea placeholder="Description" ></textarea>
<button class="homec-form-add__button homec-form-add__button--delete"><img src="<?= base_url();?>img/delete-icon.svg"></button>
</div>
</div>
</div>
</div>
-->
</div>
</div>

<!--
<div class="homec-submit-form mg-top-40">
<h4 class="homec-submit-form__title">SEO Information and Others</h4>
<div class="homec-submit-form__inner">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">SEO Title*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here" >
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">

<div class="mg-top-20">
<h4 class="homec-submit-form__heading">SEO Description*</h4>
<div class="form-group homec-form-input">
<input type="text" placeholder="Type Here" >
</div>
</div>
</div>
</div>
</div>
</div>

-->
<div class="row">
<div class="col-12 d-flex justify-content-end mg-top-40">
<button type="submit" class="homec-btn homec-btn__second"><span>Add Property Now</span></button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>

