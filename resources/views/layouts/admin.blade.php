<!DOCTYPE html>
<html>
@include('partials.admin.head')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partials.admin.navbar')

        @include('partials.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{\App\Utilitys\MyFunctions::enlaceAdmin(Route::current()->getName())}}</h1>
                        </div><!-- /.col -->
                        {{--<div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>--}}<!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        @include('partials.admin.footer')

        @include('partials.admin.scripts')
    </div>
</body>
</html>
