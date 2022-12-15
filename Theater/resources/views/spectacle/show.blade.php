@extends('layouts.app')
{{-- Здесь стояло @section('layouts.app') 
из-за чего страница не отображалась --}}
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["spectacle"]->getName() }} (${{ $viewData["spectacle"]->getBudget() }})
                </h5>
                <p class="card-text">{{ $viewData["spectacle"]->getAfisha() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection