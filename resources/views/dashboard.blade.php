@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="fa fa-users "></i>
              </div>
              <p class="card-category">Customers</p>
              <h3 class="card-title"><p>{{ $customers }}</p>
                
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">content_copy</i>
                Number of customers...
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="fa fa-credit-card-alt   "></i>
              </div>
              <p class="card-category">Loans Taken</p>
              <h3 class="card-title">{{ $taken }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">date_range</i> {{ $result }} /= worth of goods have been loaned out.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Loans Pending</p>
              <h3 class="card-title">{{ $pending }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">error</i> {{ $untracked }} /= worth of goods pending approval.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <p class="card-category">Products</p>
              <h3 class="card-title">{{ $products  }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">update</i> Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div><hr></div>
     {{-- <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">--}}
        
        <div class="col-lg- col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Lonees Stats</h4>
              <p class="card-category">Registered borrowers</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-danger">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>ID Number</th>
                  <th>Phone</th>
                </thead>
                <tbody>
                   @foreach ($loanee as $row)                      
                  <tr>
                      <td>
                         {{$row->id}}
                        </td>
                        <td>
                          {{$row->name}}
                        </td>
                        <td>
                          {{$row->email}}
                        </td>
                        <td>
                          {{$row->id_number}}
                        </td>
                        <td>
                          {{$row->msisdn}}
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
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush