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
                            <h1>Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('category') }}">Category</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="{{ route('category.edit.post',  $category->id) }}" method="post">
                  @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Category - Edit </h3>

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
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Parent Category</label>
                                        <select class="form-control" name="parent_id" id="">
                                            <option value="0" {{$category->parent_id == 0 ? 'selected' : ''}}>Parent_Category</option>
                                            @foreach ($categories as $categoryParent)
                                                <option value="{{$categoryParent->id}}" 
                                                    {{$category->parent_id == $categoryParent->id ? 'selected' : ''}}
                                                >
                                                    {{$categoryParent->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <input type="text" name="description" value="{{ $category->description }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Active</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" value="1" type="radio" id="active"
                                                name="active" {{ $category->active == 1 ? 'checked' : '' }}>
                                            <label for="active" class="custom-control-label">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" value="0" type="radio" id="no_active"
                                                name="active" {{ $category->active == 0 ? 'checked' : '' }}>
                                            <label for="no_active" class="custom-control-label">No</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Update Category" class="btn btn-success ">
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
