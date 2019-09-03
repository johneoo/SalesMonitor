@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success: </strong>{{ session('message') }}
                        </div>
                    @endif

                    @if ($products->count())
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">Minimum Prince (&#x20a6;)</th>
                              <th scope="col">...</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($products as $product)
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{ $product->product_name }}</td>
                                  <td>&#x20a6;{{ number_format($product->min_price, 2, ".", ",") }}</td>
                                  <td>
                                      <a href="{{ route('products.edit', ['product' => $product->id ]) }}">&#9998;</a>
                                  </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
