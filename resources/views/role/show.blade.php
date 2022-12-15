@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            {{-- <img src="{{ asset('/img/'.$viewData["role"]->getImage()) }}" class="img-fluid rounded-start"> --}}
            <img src="{{ asset('/storage/'.$viewData["role"]->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["role"]->getName() }}
                </h5>
                <p class="card-text">{{ $viewData["role"]->getDescription() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection