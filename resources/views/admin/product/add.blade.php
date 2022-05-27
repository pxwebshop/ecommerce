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
                            <h1>Product</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('product') }}">Product</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="{{ route('product.add') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Product - Add </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="inputName">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="inputDescription">Category</label>
                                            {{-- <input type="text" name="category_id" value="{{ $product->category_id }}"
                                                class="form-control"> --}}
                                            <select class="form-control" name="category_id" id="">
                                                {{-- <option value="{{ $product->category_id }}" {{$product->category_id == 0 ? 'selected' : ''}}>{{ $product->category_id }}</option> --}}
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}" 
                                                        {{-- {{$product->category_id == $category->id ? 'selected' : ''}} --}}
                                                    >
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <input type="text" name="description" value="{{ old('description') }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu">Thumb</label>
                                        <input type="file" name="thumb" class="form-control" id="upload">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu">Images</label>
                                        <input type="file" name="images[]" class="form-control" id="upload" multiple>
                                        <div id="image_show">
                                            {{-- <a href="{{ $product->image }}">
                                                <img src="{{ asset(Storage::url($product->thumb) )}}" width="100px">
                                                <img src="{{ $product->image }}" width="100px">
                                            </a> --}}
                                            {{-- @if (Storage::exists($product->images))
                                                <img src="{{ asset(Storage::url($product->images)) }}" width="100px">
                                            @endif
                                            <img width="100px" src="{{ $product->images }}" alt=""> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="">Import Price</label>
                                            <input type="text" name="import_price"
                                                value="{{ old('import_price') }}" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Price</label>
                                            <input type="text" name="price" value="{{ old('price') }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Sale Price</label>
                                            <input type="text" name="sale_price" value="{{ old('sale_price') }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="">Quantity</label>
                                            <input type="text" name="quantity" value="{{ old('quantity') }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="inputDescription">SKU</label>
                                            <input type="text" name="sku" value="{{ old('sku') }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label>Special Offer</label>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="1" type="radio"
                                                    id="special_offer_active" name="special_offer"
                                                   >
                                                <label for="special_offer_active"
                                                    class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="0" type="radio"
                                                    id="special_offer_noactive" name="special_offer"
                                                    >
                                                <label for="special_offer_noactive"
                                                    class="custom-control-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Special Product</label>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="1" type="radio"
                                                    id="special_product_active" name="special_product"
                                                    >
                                                <label for="special_product_active"
                                                    class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="0" type="radio"
                                                    id="special_product_noactive" name="special_product"
                                                    >
                                                <label for="special_product_noactive"
                                                    class="custom-control-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Active</label>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="1" type="radio" id="active"
                                                    name="active" >
                                                <label for="active" class="custom-control-label">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="0" type="radio"
                                                    id="no_active" name="active"
                                                   >
                                                <label for="no_active" class="custom-control-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Specification</label>
                                        <textarea type="text" name="specification" class="ckeditor form-control">
                                            {{ old('specification') }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Info Delivery</label>
                                        <input type="text" name="info_delivery" value="{{   old('info_delivery') }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Add New" class="btn btn-success ">
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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

</html>
