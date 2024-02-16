@extends('layout.layout')
@section('title', 'Edit Profile')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.sidebar-box')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                @include('shared.error-message')
                <div class="mt-3">
                    @include('users.shared.user-edit-card')
                </div>
                <hr>
                @forelse ($ideas as $idea)
                    <div class="mt-3">
                        @include('ideas.shared.idea-card')
                    </div>
                @empty
                    <h3 class="text-center my-4">No Results found</h3>
                @endforelse
                <div class="mt-3">
                    {{ $ideas->withQueryString()->links() }}
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')
            </div>
        </div>
    </div>
@endsection
