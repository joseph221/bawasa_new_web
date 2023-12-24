@extends('layouts.master')

@section('title')
    Bawasa | Users
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Name</th>
                      <th>Email Address</th>
                      <th>Action</th>
                      
                    </thead>
                    <tbody>
                        @foreach( $users as $u )
                            <tr>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email}}</td>
                                <td>
                                    <div class="btn btn-success">edit</div>
                                    <div class="btn btn-danger">delete</div>
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