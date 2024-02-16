@extends('layout.layout')

@section('title', 'Terms')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.sidebar-box')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad, incidunt provident aut, commodi
                excepturi eos amet blanditiis sit, reiciendis id? Tempora placeat debitis nulla rem eaque. Placeat
                dignissimos
                culpa accusantium perspiciatis, sint praesentium blanditiis porro magnam velit excepturi illo quas, neque
                doloremque cumque earum odio animi ratione vel! Saepe.
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
