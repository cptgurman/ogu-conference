@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Список заявок</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Список заявок</li>
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
                    <a href="{{ route('admin.application.create') }}" type="button" class="btn btn-primary">Добавить</a>
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
                                    <th>Конференция</th>
                                    <th>Участник</th>
                                    <th>Дата подачи</th>
                                    <th>Файл</th>
                                    <th>Приглашение</th>
                                    <th>Отель</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr class="text-center">
                                        <td>
                                            <a
                                                href="{{ route('admin.application.show', $application->id) }}">{{ $application->id }}</a>
                                        </td>
                                        <td>{{ $application->conference->name }}</td>
                                        <td>{{ $application->user->name }}</td>
                                        <td>{{ $application->created_at }}</td>
                                        <td><a href="{{ asset('storage/' . $application->file) }}">Скачать</a></td>
                                        <td>{{ $application->invitation ? 'Да' : 'Нет' }}</td>
                                        <td>{{ $application->hotel ? 'Да' : 'Нет' }}</td>
                                        <td>
                                            <a href="{{ route('admin.application.show', $application->id) }}"> <i
                                                    class="fa fa-eye pr-3"></i></a>

                                            <a href="{{ route('admin.application.edit', $application->id) }}"> <i
                                                    class="fa fa-pen text-gray"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- /.card-body -->
                </div>

                <div class="">
                    {{ $applications->links() }}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
