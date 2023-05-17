@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-1">Добавить факультет</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.faculty.index') }}">Факультеты</a></li>
                            <li class="breadcrumb-item active">Добавить факультет</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card card-primary mx-2">
                <div class="card-header">
                    <h3 class="card-title">Добавить факультет</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.faculty.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Наименование</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Введите наименование факультета" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Корпус</label>
                            <select name="corpus_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите корпус</option>
                                @foreach ($corpuses as $corpus)
                                    <option value="{{ $corpus->id }}"
                                        {{ $corpus->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $corpus->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
