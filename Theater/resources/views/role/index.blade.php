@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['roles'] as $role)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    {{-- <img src="{{ asset('/img/' . $role->getImage()) }}" class="card-img-top img-card"> --}}
                    <img src="{{ asset('/storage/'.$role->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('role.show', ['id' => $role->getId()]) }}"
                            class="btn bg-primary text-white">{{ $role->getName()}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
