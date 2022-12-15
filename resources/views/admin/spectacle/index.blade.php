@extends('layouts.admin')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Добавить спектакль
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.spectacle.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Название:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Бюджет:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="budget" value="{{ old('budget') }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Дата выступления</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="date" value="{{ old('date') }}" type="date" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Подтвердить</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Управление спектакль
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Изменить</th>
                        <th scope="col">Удалить</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['spectacles'] as $spectacle)
                        <tr>
                            <td>{{ $spectacle->getId() }}</td>
                            <td>{{ $spectacle->getName() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.spectacle.edit', ['id' => $spectacle->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.spectacle.delete', $spectacle->getId()) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
