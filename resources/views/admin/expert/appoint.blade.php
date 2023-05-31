@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-1">Добавить заявку</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.application.index') }}">Заявки </a>
                            </li>
                            <li class="breadcrumb-item active">Добавить заявку</li>
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
                <form action="{{ route('admin.application.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Участник</label>
                            <select name="user_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите участника</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $user->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Конференция</label>
                            <select name="conference_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите конференцию</option>
                                @foreach ($conferences as $conference)
                                    <option value="{{ $conference->id }}"
                                        {{ $conference->id == old('corpus_id') ? 'selected' : '' }}>
                                        {{ $conference->short_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Секция</label>
                            <select name="conference_section_id" class="select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите секцию</option>
                                @foreach ($conference_sections as $conference_section)
                                    <option value="{{ $conference_section->id }}"
                                        {{ $conference_section->id == old('conference_section_id') ? 'selected' : '' }}>
                                        {{ $conference_section->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Аннотация</label>
                            <textarea type="text" name="annotation" class="form-control" placeholder="Введите аннотацию">{{ old('annotation') }}</textarea>
                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" value="{{ old('keywords') }}"
                                placeholder="Введите через запятую (пример: 'математик, экономика')">

                            @error('name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group  w-25">
                            <label for="exampleInputFile">Файл</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  w-25">
                            <label>Форма участия</label>
                            <select name="participation_form_id" class="select2" style="width: 100%;">
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
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="invitation" id="customCheckbox2"
                                    value="1">
                                <label for="customCheckbox2" class="custom-control-label">Приглашение</label>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="hotel" id="customCheckbox"
                                value="1">
                            <label for="customCheckbox" class="custom-control-label">Отель</label>
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
