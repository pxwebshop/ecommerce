<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="{{ route('user.edit.post', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">User - Add </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" value="{{ $user->name }}" name="name" id="inputName"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Email</label>
                                        <input type="mail" value=" {{ $user->email }}" name="email" id="inputName"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Phone</label>
                                        <input type="text" value="{{ $user->phone }}" name="phone" id="inputName"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control custom-select" name="role">
                                            <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                                            <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>User</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-success ">
                            {{-- <a href="#" class="btn btn-secondary">Cancel</a> --}}
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

       @include('admin.layouts.footer')
</body>

</html>
