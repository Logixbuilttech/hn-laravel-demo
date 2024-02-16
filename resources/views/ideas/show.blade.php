@extends('layout.layout')
@section('title', 'Veiw Ideas')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.sidebar-box')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                @include('shared.error-message')
                <hr>
                <div class="mt-3">
                    @include('ideas.shared.idea-card')
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')
            </div>
        </div>
    </div>
@endsection
