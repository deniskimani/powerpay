@extends('layouts.app', ['activePage' => 'borrowers', 'titlePage' => __('Pending Loans')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Clearance') }}</h4>
                <p class="card-category"> <i>{{ __('Clear clients') }}</i></p>
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
                {{--<div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                  </div>
                </div>--}}
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-danger">
                      <th>
                        {{ __('ID') }}
                      </th>
                      <th>
                        {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Phone') }}
                      </th>
                      <th>
                        {{ __('Product') }}
                      </th>
                      <th>
                        {{ __('Price') }}
                      </th>
                      
                      <th class="text-right">
                        {{ __('Actions') }}<br>Clear
                      </th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->response_id }}
                          </td>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->msisdn }}
                          </td>
                          <td>
                            {{ $user->product_name }}
                          </td>
                          <td>
                            {{ $user->product_amount }}
                          </td>
                          
                          
                          <td class="td-actions text-right">
                            
                             <form action="{{ route('cleared.update', $user->response_id) }}" method="post">
                                  @csrf
                                  {{ method_field('PUT')}}
                                  <input type="hidden" name="action" value="clear">
                                  <button type="submit" value="{{ $user->response_id }}" class="btn btn-success btn-link" data-original-title="" title="">
                                      <i class="material-icons">check_circle</i>
                                      <div class="ripple-container"></div>
                                  </button>
                                </form>

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