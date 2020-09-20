@extends('layouts.app')

@section('content')
    <!-- ======= About Section ======= -->
    @include('contents.about')  

    <!-- ======= Counts Section ======= -->
    @include('contents.countdown')  

    <!-- ======= Services Section ======= -->
    @include('contents.timeline')  

    <!-- ======= Locations Section ======= -->
    @include('contents.location')  
    


    <!-- ======= Cta Section ======= -->
    @include('contents.cta')  

    <!-- ======= Invitation Section ======= -->
    @include('contents.invitation')  

    <!-- ======= Portfolio Section ======= -->
    @include('contents.portfolio')  

    <!-- ======= Invitation Section ======= -->
    @include('contents.gift')  
    
    <!-- ======= Testimonials Section ======= -->
    @include('contents.story')  
    
    <!-- ======= Team Section ======= -->
    @include('contents.team')  
    
    <!-- ======= Contact Section ======= -->
    @include('contents.contact')  
@endsection