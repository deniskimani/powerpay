@extends('layouts.app', ['activePage' => 'products', 'titlePage' => __('Product')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Products') }}</h4>
                <p class="card-category"><i> {{ __('Here are some of the products offered') }}</i></p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">{{ __('Add Product') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-danger">
                      <th>
                        {{ __('Product ID') }}
                      </th>
                      <th>
                        {{ __('Type') }}
                      </th>
                      <th>
                        {{ __('Product Name') }}
                      </th>
                      <th>
                        {{ __('Price') }}
                      </th>
                      <th>
                        {{ __('Period') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($product as $products)
                        <tr>
                          <td>
                            {{ $products->product_id }}
                          </td>
                          <td>
                            {{ $products->type }}
                          </td>
                          <td>
                            {{ $products->product_name }}
                          </td>
                          <td>
                            {{ $products->amount }}
                          </td>
                          <td>
                            {{ $products->period }}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection