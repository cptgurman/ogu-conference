@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Список форм участия</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Список форм участия</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="row p-3">
            <div class="content">
                <div class="container-fluid">
                    <a href="{{ route('admin.conference.create') }}" type="button" class="btn btn-primary">Добавить</a>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content -->

        <div class="row p-3">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h3 class="card-title">Список факультетов</h3>
                    </div> --}}

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr class="text-center">
                                    <th>№</th>
                                    <th>Название</th>
                                    <th>Дата проведения</th>
                                    <th>Начало регистрации</th>
                                    <th>Окончание регистрации</th>
                                    <th>Тип участия</th>
                                    <th>Кол-во участников</th>
                                    <th>Статус</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($conferences as $conference)
                                    <tr class="text-center">
                                        <td>{{ $conference->id }}</td>
                                        <td>{{ $conference->name }}</td>
                                        <td>{{ $conference->conf_date }}</td>
                                        <td>{{ $conference->reg_date_start }}</td>
                                        <td>{{ $conference->reg_date_end }}</td>
                                        <td>{{ $event_types[$conference->event_type_id] }}</td>
                                        <td>0</td>
                                        <td>{{ $statuses[$conference->status_id] }}</td>
                                        <td>
                                            <a href="{{ route('admin.conference.show', $conference->id) }}"> <i
                                                    class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.conference.edit', $conference->id) }}"> <i
                                                    class="fa fa-pen text-green"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
