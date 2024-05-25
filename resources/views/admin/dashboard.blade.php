@extends('layouts.master')

@section('title')
    Dashboard | Bawasa
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card widget-card border-light shadow-sm">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title widget-card-title mb-3">Opened Request</h5>
                            <h4 class="card-subtitle text-body-secondary m-0">{{ count($openedRequest) }}</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="lh-1 text-white bg-info rounded-circle p-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-truck fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center mt-3">
                                <span
                                    class="lh-1 me-3 bg-danger-subtle text-danger rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right-short bsb-rotate-45"></i>
                                </span>
                                <div>
                                    <p class="fs-7 mb-0">+{{  (count($openedRequest)/count($requestService))*100  }}%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card widget-card border-light shadow-sm">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title widget-card-title mb-3">Processed Requests</h5>
                            <h4 class="card-subtitle text-body-secondary m-0">{{ count($processedRequest) }}</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="lh-1 text-white bg-success rounded-circle p-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center mt-3">
                                <span
                                    class="lh-1 me-3 bg-success-subtle text-success rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right-short bsb-rotate-n45"></i>
                                </span>
                                <div>
                                    <p class="fs-7 mb-0">+{{  (count($processedRequest)/count($requestService))*100  }}%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card widget-card border-light shadow-sm">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title widget-card-title mb-3">All Requests</h5>
                            <h4 class="card-subtitle text-body-secondary m-0">{{ count($requestService) }}</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="lh-1 text-white bg-warning rounded-circle p-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center mt-3">
                                <span
                                    class="lh-1 me-3 bg-success-subtle text-success rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right-short bsb-rotate-n45"></i>
                                </span>
                                <div>
                                    <p class="fs-7 mb-0">+69%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-category">Notifications</h5>
          <h4 class="card-title">Recent Notifications</h4>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
          </div>
        </div>
      </div>
    </div>
        <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">All Persons List</h5>
          <h4 class="card-title"> Users Status</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  User Type
                </th>
              </thead>
              <tbody>
                @foreach ( $users as $user )
                <tr>
                    <td>
                      {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->usertype }}
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
@endsection

@section('scripts')
@endsection
