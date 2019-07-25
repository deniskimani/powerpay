@extends('layouts.app', ['activePage' => 'borrowers', 'titlePage' => __('Pending Loans')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Pending Loans') }}</h4>
                <p class="card-category"> {{ __('Here you can manage requests') }}</p>
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
                      <th>
                        {{ __('Request Date') }}
                      </th>
                      
                      <th class="text-center">
                        {{ __('Actions') }}
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
                          <td>
                            {{ $user->created_at }}
                          </td>
                          
                          
                          <td class="td-actions text-right">
                            
                             <form action="{{ route('users.update', $user->response_id) }}" method="post">
                                  @csrf
                                  {{ method_field('PUT')}}
                                  <input type="hidden" name="action" value="approve">
                                  <button type="submit" value="{{ $user->response_id }}" class="btn btn-success " data-original-title="" title="">
                                      Approve
                                  </button>
                                  
                             <div style="float:right; padding-left:3px;"></form>
                             <form action="{{ route('users.update', $user->response_id) }}" method="post">   
                                  @csrf
                                  {{ method_field('PUT')}}
                                  <input type="hidden" name="action" value="decline">
                                  <button type="submit" value="{{ $user->response_id }}" class="btn btn-danger " data-original-title="" title="">
                                      Decline
                                  </button>
                              </form></div>

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