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
                            <h1>Product List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Product List</li>
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
                        <h3 class="card-title">Product List</h3>

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
                                <tr class="text-center">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Thumb
                                    </th>
                                    <th>
                                        Import_price
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Sale_Price
                                    </th>
                                    <th>
                                        Active
                                    </th>
                                    <th>
                                        Special_Product
                                    </th>
                                    <th>
                                        Special Offer
                                    </th>
                                    <th>
                                        Create At
                                    </th>
                                    <th>
                                        Last Update
                                    </th>
                                    <th class="text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('product.add') }}">
                                            <i class="fa-solid fa-plus"></i>
                                            Add New
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="text-center">
                                        <td>
                                            {{ $product->id }}
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            {{ $product->category->name }}
                                        </td>
                                        <td>
                                            @if (Storage::exists($product->thumb))
                                                <img src="{{ asset(Storage::url($product->thumb)) }}" width="50px">
                                            @endif
                                            <img width="50px" src="{{ $product->thumb }}" alt="">
                                        </td>
                                        <td>
                                            {{ number_format($product->import_price) }} <sup>đ</sup>
                                        </td>
                                        <td>
                                            {{ number_format($product->price) }} <sup>đ</sup>
                                        </td>
                                        <td>
                                            {{ number_format($product->sale_price) }} <sup>đ</sup>
                                        </td>
                                        <td class="project-state">
                                            @if ($product->active == 1)
                                                <span class="badge badge-success">active</span>
                                            @else
                                                <span class="badge badge-danger">active</span>
                                            @endif
                                        </td>
                                        <td class="project-state">
                                            @if ($product->special_product == 1)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>
                                        <td class="project-state">
                                            @if ($product->special_offer == 1)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $product->created_at }}
                                        </td>
                                        <td>
                                            {{ $product->updated_at }}
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ route('product.edit', $product->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"
                                                href="./product/delete/{{ $product->id }}">
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
                <div class="c-paginate">
                    {{ $products->links() }}
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.layouts.footer')
</body>

</html>
