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
                            <h1>Slider</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('slider') }}">Slider</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="{{ route('slider.add.post') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Slider - Add </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Title</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Content</label>
                                        <input type="text" name="content" value="{{ old('content') }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Url</label>
                                        <input type="text" name="url" value="{{ old('url') }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="menu">Image</label>
                                      <input type="file" name="image" class="form-control" id="upload">
                                      {{-- <div id="image_show">
                                          <a href="{{ $slider->image }}">
                                              <img src="{{ asset(Storage::url($slider->image) )}}" width="100px">
                                          </a>
                                      </div> --}}
                                  </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Sort</label>
                                        <input type="number" name="sort" value="1" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Active</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                                            <label for="active" class="custom-control-label">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
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
                            <input type="submit" value="Add New Slider" class="btn btn-success ">
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
