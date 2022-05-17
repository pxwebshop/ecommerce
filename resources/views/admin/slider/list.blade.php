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
            <h1>Slider List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Slider List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Slider List</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 34%">
                          Title
                      </th>
                      <th style="width: 10%">
                          Sort
                      </th>
                      <th style="width: 10%" class="text-center">
                          Active
                      </th>
                      <th style="width: 15%">
                        Create At
                      </th>
                      <th style="width: 15%">
                        Last Update
                      </th>
                      <th style="width: 15%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                  <tr>
                    <td>
                        {{ $slider->id }}
                    </td>
                    <td>
                        {{ $slider->title }}
                    </td>
                    <td>
                        {{ $slider->sort }}
                    </td>
                    <td class="project-state">
                      @if ($slider->active == 1)
                      <span class="badge badge-success">active</span>
                      @else
                      <span class="badge badge-danger">active</span>
                      @endif 
                    </td>
                    <td>
                      {{ $slider->created_at }}
                    </td>
                    <td>
                      {{ $slider->updated_at }}
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="./slider/edit/{{ $slider->id }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm"
                          onclick="return confirm('Are you sure?')" href="./slider/delete/{{ $slider->id}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
</body>
</html>
