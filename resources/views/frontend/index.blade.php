@extends('layouts.frontend_app')

@section('title')
Home | PAL
@endsection

@section('frontend_content')
<!-- ****** Welcome Area Start ****** -->
@include('frontend.includes.slider')
<!-- ****** Welcome Area End ****** -->

<!-- ****** Category Us Area Start ****** -->
@include('frontend.includes.category')
<!-- ****** Category Us Area End ****** -->

<!-- ****** Dish Menu Area Start ****** -->
@include('frontend.includes.menu')
<!-- ****** Dish Menu Area End ****** -->

<!-- ****** Awards Area Start ****** -->
@include('frontend.includes.award')
<!-- ****** Awards Area End ****** -->

<!-- ****** Testimonials Area Start ****** -->
@include('frontend.includes.testimonial')
<!-- ****** Testimonials Area End ****** -->

<!-- ****** Reservation Area Start ****** -->
@include('frontend.includes.reservation')
<!-- ****** Reservation Area End ****** -->
@endsection
