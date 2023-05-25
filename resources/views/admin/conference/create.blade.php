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
                            <li class="breadcrumb-item"><a href="{{ route('admin.conference.index') }}">Конференции </a>
                            </li>
                            <li class="breadcrumb-item active">Добавить конференцию</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <!-- Main content -->
        <div class="content">
            <div class="card card-primary mx-2">

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.conference.store') }}" method="POST" enctype="multipart/form-data">
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
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label for="exampleInputFile">Картинка для превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="preview_image" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  w-25">
                            <label for="exampleInputFile">Баннер</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" value="{{ old('image') }}"
                                        class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                        @error('name')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                        @enderror
                        <div class="form-group  w-25">
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
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label>Факультет</label>
                            <select name="faculty_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите факультет</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"
                                        {{ $faculty->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $faculty->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label>Форма участия</label>
                            <select name="event_type_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите форму участия</option>
                                @foreach ($event_types as $event_type)
                                    <option value="{{ $event_type->id }}"
                                        {{ $event_type->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $event_type->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('corpus_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label>Дата проведения</label>
                            <div class="input-group date" id="conf_date" data-target-input="nearest">
                                <input type="text" name="conf_date" class="form-control datetimepicker-input"
                                    data-target="#conf_date" value="{{ old('conf_date') }}" />
                                <div class="input-group-append" data-target="#conf_date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label>Дата начала регистрации</label>
                            <div class="input-group date" id="reg_date_start" data-target-input="nearest">
                                <input type="text" name="reg_date_start" class="form-control datetimepicker-input"
                                    data-target="#date_start_reg" value="{{ old('reg_date_start') }}" />
                                <div class="input-group-append" data-target="#reg_date_start"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label>Дата окончания регистрации</label>
                            <div class="input-group date" id="reg_date_end" data-target-input="nearest">
                                <input type="text" name="reg_date_end" class="form-control datetimepicker-input"
                                    data-target="#date_end_reg" value="{{ old('reg_date_end') }}" />
                                <div class="input-group-append" data-target="#reg_date_end" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>

                        <div class="card card-primary m-0">
                            <div class="card-header">
                                <h3 class="card-title">Список секций</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label> Секция №1</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="section_names[]" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <button type="button" data-add-conference-section data-count="1"
                                        class="btn btn-primary btn-sm">Добавить секцию</button>
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

    <template data-section-template>
        <div class="form-group">
            <label data-section-label></label>
            <div class="input-group input-group-sm">
                <input type="text" name="section_names[]" class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-danger btn-flat">Удалить</button>
                </span>
            </div>
        </div>
    </template>
    <!-- /.content-wrapper -->
@endsection
