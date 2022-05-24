
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
        <div class="customer mt-3">
            <ul>
                <li>First Name: <strong>{{ $customer->firstName }}</strong></li>
                <li>Last Name: <strong>{{ $customer->lastName }}</strong></li>
                <li>Phone: <strong>{{ $customer->phone }}</strong></li>
                <li>Address: <strong>{{ $customer->address }}</strong></li>
                <li>Email: <strong>{{ $customer->email }}</strong></li>
                <li>Note: <strong>{{ $customer->note }}</strong></li>
            </ul>
        </div>
        <div class="carts">
            @php $total = 0; @endphp
            <table class="table">
                <tbody>
                <tr class="table_head">
                    <th class="column-1">IMG</th>
                    <th class="column-2">Product</th>
                    <th class="column-3">Price</th>
                    <th class="column-4">Quantity</th>
                    <th class="column-5">Total</th>
                </tr>
    
                @foreach($carts as $key => $cart)
                    @php
                        $price = $cart->price * $cart->pty;
                        $total += $price;
                    @endphp
                    <tr>
                        <td class="column-1">
                            <div class="how-itemcart1">
                                <a href="/product/detail/{{ $cart->product->id }}">
                                  @if (Storage::exists($cart->product->thumb))
                                    <img src="{{ asset(Storage::url($cart->product->thumb)) }}" width="100px">
                                  @endif
                                  <img width="100px" src="{{ $cart->product->thumb }}" alt="">
                                </a>
                            </div>
                        </td>
                        <td class="column-2">{{ $cart->product->name }}</td>
                        <td class="column-3">{{ number_format($cart->price) }} <sup>đ</sup></td>
                        <td class="column-4">{{ $cart->pty }}</td>
                        <td class="column-5">{{ number_format($price) }} <sup>đ</sup></td>
                    </tr>
                @endforeach
                    <tr>
                        <td colspan="4" class="text-right"><b>Total Money</b></td>
                        <td><b>{{ number_format($total) }} <sup>đ</sup></b></td>
                    </tr>
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
