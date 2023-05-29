@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-1"> {{ $conference->short_name }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.conference.index') }}">Конференции </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $conference->short_name }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card card-primary mx-2">

                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <label>Наименование</label>
                        <input disabled type="text" name="name" class="form-control"
                            placeholder="Введите наименование типа участия" value="{{ $conference->name }}">
                    </div>
                    <div class="form-group">
                        <label>Короткое наименование</label>
                        <input disabled type="text" name="short_name" class="form-control"
                            placeholder="Введите наименование типа участия" value="{{ $conference->short_name }}">

                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea name="description" id="summernote_disable">
                                {{ $conference->description }}
                              </textarea>

                    </div>
                    <div class="form-group  w-25">

                        <label for="exampleInputFile">Картинка для превью</label>
                        <div class="w-25 py-2">
                            <img class="rounded" src="{{ asset('storage/' . $conference->preview_image) }}"
                                alt="{{ $conference->preview_image }}" width="150px">
                        </div>

                    </div>
                    <div class="form-group  w-25">
                        <label for="exampleInputFile">Баннер</label>
                        <div class="w-25 py-2">
                            <img class="rounded" src="{{ asset('storage/' . $conference->image) }}"
                                alt="{{ $conference->image }}" width="150px">
                        </div>

                    </div>

                    <div class="form-group  w-25">
                        <label>Корпус</label>
                        <select disabled name="corpus_id" class="select2" style="width: 100%;">
                            <option value="" disabled selected>Выберите корпус</option>
                            @foreach ($corpuses as $corpus)
                                <option value="{{ $corpus->id }}"
                                    {{ $corpus->id == $conference->corpus_id ? 'selected' : '' }}>
                                    {{ $corpus->name }} ({{ $corpus->address }})
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group  w-25">
                        <label>Факультет</label>
                        <select disabled name="faculty_id" class="select2" style="width: 100%;">
                            <option value="" disabled selected>Выберите факультет</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}"
                                    {{ $faculty->id == $conference->faculty_id ? 'selected' : '' }}>
                                    {{ $faculty->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group  w-25">
                        <label>Форма участия</label>
                        <select disabled name="event_type_id" class="select2" style="width: 100%;">
                            <option value="" disabled selected>Выберите форму участия</option>
                            @foreach ($event_types as $event_type)
                                <option value="{{ $event_type->id }}"
                                    {{ $event_type->id == $conference->event_type_id ? 'selected' : '' }}>
                                    {{ $event_type->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group w-25">
                        <label>Дата проведения</label>
                        <input disabled type="text" name="name" class="form-control"
                            placeholder="Введите наименование типа участия" value="{{ $conference->conf_date }}">


                    </div>
                    <div class="form-group  w-25">
                        <label>Дата начала регистрации</label>
                        <input disabled type="text" name="name" class="form-control"
                            placeholder="Введите наименование типа участия" value="{{ $conference->reg_date_start }}">

                    </div>
                    <div class="form-group  w-25">
                        <label>Дата окончания регистрации</label>
                        <input disabled type="text" name="name" class="form-control"
                            placeholder="Введите наименование типа участия" value="{{ $conference->reg_date_end }}">

                    </div>

                    <div class="card card-primary m-0" data-sections>
                        <div class="card-header">
                            <h3 class="card-title">Список секций</h3>
                        </div>
                        <div class="card-body">
                            @foreach ($sections as $key => $section)
                                <div class="form-group" data-section-body>
                                    <label data-section-label> Секция №{{ ++$key }}</label>
                                    <div class="input-group input-group-sm">
                                        <input disabled type="text" name="section_names[]" value="{{ $section->name }}"
                                            class="form-control">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <template data-section-template>
        <div class="form-group" data-section-body>
            <label data-section-label></label>
            <div class="input-group input-group-sm">
                <input type="text" name="section_names[]" class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-danger btn-flat" data-delete-section>Удалить</button>
                </span>
            </div>
        </div>
    </template>
    <!-- /.content-wrapper -->
@endsection
