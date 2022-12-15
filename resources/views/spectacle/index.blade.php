@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['spectacles'] as $spectacle)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    {{-- <img src="{{ asset('/img/' . $role->getImage()) }}" class="card-img-top img-card"> --}}
                    <div class="card-body text-center"   class="btn bg-primary text-white">
                        <a href="#"$spectacle
                            >{{ $spectacle->getBudget()}} {{ $spectacle->getAfisha() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
