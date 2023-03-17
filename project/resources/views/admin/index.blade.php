@extends('layouts.admin.app')
@section('content')
    @if(auth()->guard('admin')->user()->can('can view earning status'))
        <div class="row grid-margin">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{__('Card')}}</h4>
                
              </div>
            </div>
          </div>
        </div>
    @endif
        <div class="row">
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-warning text-white text-center card-shadow-success">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-info text-white text-center card-shadow-info">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"> </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"> </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-info text-white text-center card-shadow-info">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"> </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
              <div class="card-body">
                <h6 class="font-weight-normal">{{__('Card!')}}</h6>
                <h2 class="mb-0"> </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row grid-margin">
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{__('Table')}}</h4>
                <div class="table-responsive mt-2">
                  <table class="datatable table mt-3 border-top">
                    <thead>
                      <tr>
                        <th>{{__('Coloum')}}</th>
                        <th>{{__('Coloum')}}</th>
                        <th>{{__('Coloum')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="badge order- badge-fw"></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{__('Recent Customer')}}</h4>
                <div class="table-responsive mt-2">
                  <table class="datatable table mt-3 border-top">
                    <thead>
                      <tr>
                        <th>{{__('Coloum ')}}</th>
                        <th>{{__('Coloum')}}</th>
                        <th>{{__('Coloum')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td><a href="" class="btn btn-info btn-sm">View</td></a>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row grid-margin">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{__('Recent Products')}}</h4>
                <div class="table-responsive mt-2">
                  <table class="datatable table mt-3 border-top">
                    <thead>
                        <tr>
                            <th>{{ __('Coloum') }}</th>
                            <th>{{ __('Coloum') }}</th>
                            <th>{{ __('Coloum') }}</th>
                            <th>{{ __('Coloum') }}</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                          <img src="">
                        </td>
                        <td></td>
                        <td>
                          
                        </td>
                        <td></td>
                          <td>
                              <a href="" class="badge badge-dark">
                                <i class="mdi mi-eye">55</i> 
                              </a>
                          </td>
                        </tr>
                    </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title"></h1>
                  
              </div>
            </div>
          </div>
        </div>
@endsection
@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection