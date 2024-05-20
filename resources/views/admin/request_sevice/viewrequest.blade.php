@extends('layouts.master')

@section('title')
    Bawasa | View request
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Customer Details</h5>
        </div>
        <div class="card-body">

          <p><strong>Customer Name:</strong> <span class="px-5">{{ $request->first_name." ".$request->middle_name." ".$request->last_name }}</span> </p>
          <p><strong>Street Name:</strong><span class="px-5">{{ $request->mtaa }}</span></p>
          <p><strong>Plot Number:</strong><span class="px-5">{{ $request->prot_number }}</span></p>
          <p><strong>House Number:</strong><span class="px-5">{{ $request->house_no }}</span></p>
          <p><strong>NIDA Number:</strong><span class="px-5">{{ $request->nida }}</span></p>
          <hr>
          <h5 class="title">Customer Location</h5>
          <p><strong>Location:</strong><span class="px-5">{{ $request->location }}</span></p>
          <p><strong>Location Status:</strong><span class="px-5">{{ $request->location_status }}</span></p>
          <p><strong>Site Plan Available:</strong><span class="px-5">{{ $request->site_plan_available }}</span></p>
          <hr>
          <h5 class="title">Customer Contacts</h5>
          <p><strong>Phone Number:</strong> <span class="px-5">{{ $request->mobile_number }}</p>
          <p><strong>Email:</strong> <span class="px-5">{{ $request->email }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Request Status</h5>
        </div>
        <div class="card-body">
          <p>
            <div class="d-flex ">
                <strong class="">Opened:</strong>
                <div class="px-5">
                    <div class="d-flex justify-content-center" style="width:90px; height:20px; background-color: rgb(0, 115, 0); border:1; border-radius:25px; color:aliceblue;">
                        <span>opened</span>
                    </div>
                </div>

            </div>

          </p>
          <p>
            <div class="d-flex ">
                <strong class="">processed:</strong>
                <div class="px-5">
                    @if ($request->processed_request == 0)
                        <div class="d-flex justify-content-center" style="width:90px; height:20px; background-color: rgb(4, 88, 156); border:1; border-radius:25px; color:aliceblue;">
                            <span>On process</span>
                        </div>
                    @else
                        <div class="d-flex justify-content-center" style="width:90px; height:20px; background-color: rgb(0, 115, 0); border:1; border-radius:25px; color:aliceblue;">
                            <span>processed</span>
                        </div>
                    @endif

                </div>
         </p>

        </div>

        <hr>
            <div class="text-center mt-5 mb-3">
                @if ($request->processed_request == 1)
                    <a href="/rollbackOnprocess/{{ $request->id }}" class="btn btn-sm btn-secondary">rollback request</a>
                @else
                    <a href="/editOnprocess/{{ $request->id }}" class="btn btn-sm btn-warning">complete request</a>
                @endif

            </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

@endsection
