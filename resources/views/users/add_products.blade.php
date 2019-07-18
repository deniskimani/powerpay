@extends('layouts.app', ['activePage' => 'products', 'titlePage' => __('Products')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('product.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Product') }}</h4>
                <p class="card-category"><i>Create a new product</i></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Product ID') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('product_id') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('product_id') ? ' is-invalid' : '' }}" name="product_id" id="input-product_id" type="number" placeholder="{{ __('Product ID') }}" value="{{ old('product_id') }}" required />
                      @if ($errors->has('product_id'))
                        <span id="product_id-error" class="error text-danger" for="input-product_id">{{ $errors->first('product_id') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="input-type" type="text" placeholder="{{ __('Type') }}" value="{{ old('type') }}" required />
                      @if ($errors->has('type'))
                        <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Product Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('product_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" name="product_name" id="input-product_name" type="text" placeholder="{{ __('Product name') }}" value="{{ old('product_name') }}" required />
                      @if ($errors->has('product_name'))
                        <span id="product_name-error" class="error text-danger" for="input-product_name">{{ $errors->first('product_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" id="input-amount" type="number" placeholder="{{ __('Amount') }}" value="{{ old('amount') }}" required />
                      @if ($errors->has('amount'))
                        <span id="amount-error" class="error text-danger" for="input-amount">{{ $errors->first('amount') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label" >{{ __(' Period') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('period') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('period') ? ' is-invalid' : '' }}" input type="period" name="period" id="input-period" placeholder="{{ __('Period') }}" value="" required />
                      @if ($errors->has('period'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('period') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Product') }}</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection