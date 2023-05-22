@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-1">Добавить конференцию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.academic_title.index') }}">Новая
                                    конференция </a></li>
                            <li class="breadcrumb-item active">Добавить конференцию</li>
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

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.academic_title.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Наименование</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Введите наименование типа участия" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Короткое наименование</label>
                            <input type="text" name="short_name" class="form-control"
                                placeholder="Введите наименование типа участия" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea name="description" id="summernote">
                                {{ old('description') }}
                              </textarea>
                        </div>
                        @error('name')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                        @enderror
                        <div class="form-group">
                            <label>Корпус</label>
                            <select name="corpus_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите корпус</option>
                                @foreach ($corpuses as $corpus)
                                    <option value="{{ $corpus->id }}"
                                        {{ $corpus->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $corpus->name }} ({{ $corpus->address }})
                                    </option>
                                @endforeach
                            </select>
                            @error('corpus_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Факультет</label>
                            <select name="corpus_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите факультет</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"
                                        {{ $faculty->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $faculty->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('corpus_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Дата начала</label>
                            <div class="input-group date" id="date_start" data-target-input="nearest">
                                <input type="text" name="conf_date_start" class="form-control datetimepicker-input"
                                    data-target="#date_start" />
                                <div class="input-group-append" data-target="#date_start" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Дата окончания</label>
                            <div class="input-group date" id="date_end" data-target-input="nearest">
                                <input type="text" name="conf_date_end" class="form-control datetimepicker-input"
                                    data-target="#date_end" />
                                <div class="input-group-append" data-target="#date_end" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Дата начала регистрации</label>
                            <div class="input-group date" id="date_start_reg" data-target-input="nearest">
                                <input type="text" name="reg_date_start" class="form-control datetimepicker-input"
                                    data-target="#date_start_reg" />
                                <div class="input-group-append" data-target="#date_start_reg" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Дата окончания регистрации</label>
                            <div class="input-group date" id="date_end_reg" data-target-input="nearest">
                                <input type="text" name="reg_date_end" class="form-control datetimepicker-input"
                                    data-target="#date_end_reg" />
                                <div class="input-group-append" data-target="#date_end_reg" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
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
