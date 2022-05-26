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
                            <h1>Category List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Category List</li>
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
                        <h3 class="card-title">Category List</h3>

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
                                    <th style="width: 5%">
                                        ID
                                    </th>
                                    <th style="width: 35%">
                                        Name
                                    </th>
                                    <th style="width: 15%">
                                        Active
                                    </th>
                                    <th style="width: 15%">
                                        Create At
                                    </th>
                                    <th style="width: 15%">
                                        Last Update
                                    </th>
                                    <th style="width: 15%" class="text-right">
                                        <a href="/admin/category/add" class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-plus"></i>
                                            </i>
                                            Add New
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- $category->parent_id == $parent_id --}}
                                {{-- @foreach ($categories as $category)
                    @if (true)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{ $category->parent_id }}
                            </td>
                            <td class="project-state">
                                @if ($category->active == 1)
                                <span class="badge badge-success">active</span>
                                @else
                                <span class="badge badge-danger">active</span>
                                @endif 
                            </td>
                            <td>
                            {{ $category->created_at }}
                            </td>
                            <td>
                            {{ $category->updated_at }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="./category/edit/{{ $category->id }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')" href="./category/delete/{{ $category->id}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        
                    @endif
                @endforeach --}}
                                {!! \App\Helpers\Helper::category($categories) !!}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{-- <div class="c-paginate">
            {{ $categories->links() }}
        </div> --}}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.layouts.footer')
</body>

</html>
