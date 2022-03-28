@extends('layouts.frontend.app')
@section('title')
    Visi dan Misi
@endsection

@section('content')
    @section('about')
        <div class="container">
            <div class="row about-page1-inner" style="margin-top: 5%">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-page-content-holder">
                        <div class="content-box">
                            <h2>VISI</h2>
                            <p>{{$visimisi->visi}}</p>
                        </div>
                        <div class="content-box">
                            <h2>MISI</h2>
                            <p>{{$visimisi->misi}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-page-img-holder">
                        <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection