@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование факультета</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Редактирование факультета</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.faculty.update', $faculty->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="faculty_id" value="{{ $faculty->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="name" class="form-control" placeholder="Введите название"
                                value="{{ $faculty->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Корпус</label>
                            <select name="corpus_id" class="select2" style="width: 100%;">
                                <option value="" disabled>Выберите корпус</option>
                                @foreach ($corpuses as $corpus)
                                    <option value="{{ $corpus->id }}"
                                        {{ $corpus->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $corpus->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('corpus_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
