@extends('layouts.back')

@section('content')


<section style="min-height:100vh;" class="mt-5 pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 mb-2 fs-5 fw-bold">
          Orders
      </div>
      <div class="col-6 text-end mb-2">
          <!--<a href="#" class="btn btn-outline-primary py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Add">Add New</a>-->
      </div>
      <!-- Add -->
      <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Create Form</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('orders')}}" method="post" enctype="multipart/form-data"> @csrf
            <div class="modal-body">
              <div class="row">
                  
                  <div class="col-12 mb-3">
                      <label for="type">Type <span class="text-danger fw-bold">*</span></label>
                      <select name="type" id="type" required class="form-select my-2">
                          <option value="" hidden>Choose</option>
                          <option value="Residentials">Residentials</option>
                          <option value="Business">Business</option>
                      </select>
                  </div>
                  <div class="col-12 mb-3">
                      <label for="plan">Plan <span class="text-danger fw-bold">*</span></label>
                      <input type="text" name="plan" id="plan" required class="form-control my-2">
                  </div>
                  <div class="col-12 mb-3">
                      <label for="name">Name <span class="text-danger fw-bold">*</span></label>
                      <input type="text" name="name" id="name" required class="form-control my-2">
                  </div>
                  <div class="col-12 mb-3">
                      <label for="price">Price <span class="text-danger fw-bold">*</span></label>
                      <input type="number" name="price" id="price" required class="form-control my-2">
                  </div>
                  <div class="col-12 mb-3">
                      <label for="feature">Feature <span class="text-danger fw-bold">*</span></label>
                      <input type="text" name="feature" id="feature" required class="form-control my-2">
                  </div>
                  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success px-5">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-responsive table-striped table-hover">
            <thead class="table-info">
              <tr>
                <th scope="col">#</th>
                <th scope="col" class="nowrap">Date & Time</th>
                <th scope="col" class="nowrap">Package Information</th>
                <th scope="col" class="nowrap">Name</th>
                <th scope="col" class="nowrap">Email</th>
                <th scope="col" class="nowrap">Phone</th>
                <th scope="col" class="nowrap">Action</th> 
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $data)
              <tr>
                <th scope="row" class="nowrap">{{$loop->index+1}}</th>
                <td class="nowrap">{{ \Carbon\Carbon::parse($data->created_at)->setTimezone('Asia/Dhaka')->format('d M Y - h:i A') }}</td>
                <td class="nowrap">
                    {{$data->package->name}} -
                    {{$data->package->price}}৳
                </td>
                <td class="nowrap">{{$data->name}}</td>
                <td class="nowrap">{{$data->email}}</td>
                <td class="nowrap">{{$data->phone}}</td>
                <td class="nowrap">
                   <!--<a href="#" class="btn btn-outline-success py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a> -->
                  <a href="#" class="btn btn-outline-danger py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                </td>
              </tr>

              <!-- Edit{{$data->id}} -->
              <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Update Form</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('orders/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="modal-body">
                      <div class="row">
                          
                          <div class="col-12 mb-3">
                              <label for="type">Type <span class="text-danger fw-bold">*</span></label>
                              <select name="type" id="type" required class="form-select my-2">
                                  <option value="{{$data->type}}" hidden>{{$data->type}}</option>
                                  <option value="Residentials">Residentials</option>
                                  <option value="Business">Business</option>
                              </select>
                          </div>
                          <div class="col-12 mb-3">
                              <label for="plan">Plan <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="plan" value="{{$data->plan}}" id="plan" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="name">Name <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="name" value="{{$data->name}}" id="name" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="price">Price <span class="text-danger fw-bold">*</span></label>
                              <input type="number" name="price" value="{{$data->price}}" id="price" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="feature">Feature <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="feature" value="{{$data->feature}}" id="feature" required class="form-control my-2">
                          </div>
                          
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Delete{{$data->id}} -->
              <div class="modal fade" id="Delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('orders/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('delete')
                    <div class="modal-body text-center text-danger fs-3">
                      Are you sure ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection