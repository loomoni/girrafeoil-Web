@extends('frontend/layouts/main')

@section('contents')


    <!-- Hero Section -->
      @include('frontend.components.Home.components.sliders')
      <!-- /Hero Section -->
  
      <!-- Get Started Section -->
      @include('frontend.components.Home.components.getstarted')
    <!-- /Get Started Section -->
  
      <!-- Constructions Section -->
    {{-- @include('frontend.components.Home.components.build') --}}
    <!-- /Constructions Section -->
  
      <!-- Services Section -->
     @include('frontend.components.Home.components.services')
      <!-- /Services Section -->
  
      <!-- Alt Services Section -->
       {{-- @include('frontend.components.Home.components.altServices') --}}
      <!-- /Alt Services Section -->
  
      <!-- Features Section -->
       {{-- @include('frontend.components.Home.components.features') --}}
      <!-- /Features Section -->
  
      <!-- Projects Section -->
      {{-- @include('frontend.components.Home.components.projects') --}}
      <!-- /Projects Section -->
  
      <!-- Testimonials Section -->
      @include('frontend.components.Home.components.testimonials')
      <!-- /Testimonials Section -->
  
      <!-- Recent Blog Posts Section -->

      @include('frontend.components.Home.components.recentBlogs')
     
      <!-- /Recent Blog Posts Section -->

@endsection