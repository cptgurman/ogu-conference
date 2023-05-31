@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Список экспертов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Список экспертов</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        {{-- <div class="row p-3">
            <div class="content">
                <div class="container-fluid">
                    <a href="{{ route('admin.application.create') }}" type="button" class="btn btn-primary">Добавить</a>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div> --}}
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
                                    <th>Эксперт</th>
                                    <th>Кол-во заявок</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experts as $expert)
                                    <tr class="text-center">
                                        <td>{{ $expert->name }}</td>
                                        <td>{{ $expert->application->count() }}</td>
                                        <td>
                                            <a href="{{ route('admin.expert.show', $expert->id) }}"> <i
                                                    class="fa fa-eye pr-3"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- /.card-body -->
                </div>

                <div class="">
                    {{-- {{ $expert->links() }} --}}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
