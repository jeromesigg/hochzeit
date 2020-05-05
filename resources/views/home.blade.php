@extends('layouts.app')

@section('content')
    <!-- ======= About Section ======= -->
    @include('contents.about')  

    <!-- ======= Services Section ======= -->
    @include('contents.timeline')  
    
    <!-- ======= Counts Section ======= -->
    @include('contents.countdown')  

    <!-- ======= Cta Section ======= -->
    @include('contents.cta')  

    <!-- ======= Portfolio Section ======= -->
    @include('contents.portfolio')  
    
    <!-- ======= Testimonials Section ======= -->
    @include('contents.story')  
    
    <!-- ======= Team Section ======= -->
    @include('contents.team')  
    
    <!-- ======= Contact Section ======= -->
    @include('contents.contact')  
@endsection