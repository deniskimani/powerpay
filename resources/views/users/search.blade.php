@extends('layouts.app', ['activePage' => 'approved', 'titlePage' => __('Pending Loans')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title " style="text-align:center">{{ __('Search resuslts') }}</h4>
                {{--<p class="card-category"> {{ __('Here you can manage users') }}</p>--}}
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
                
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Phone') }}
                      </th>
                     
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('ID NUMBER') }}
                      </th>
                      
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->msisdn }}
                          </td>
                         
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->id_number }}
                          </td>
                          <td class="td-actions text-right">

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