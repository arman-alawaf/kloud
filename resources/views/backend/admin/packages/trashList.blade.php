@extends('layouts.back')

@section('content')


<section style="min-height:100vh;" class="mt-5 pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 mb-2 fs-5 fw-bold">
          Packages
      </div>
      <div class="col-6 text-end mb-2">
          <a href="{{url('packages')}}" class="btn btn-outline-dark py-0 px-1 fw-bold">Package List</a>
      </div>
      <!-- Add -->
      <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Create Form</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="afterSubmitForm" action="{{url('packages')}}" method="post" enctype="multipart/form-data"> @csrf
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
                      <label for="feature">Feature <span class="text-danger fw-bold"></span></label>
                      <input type="text" name="feature" id="feature" class="form-control my-2">
                  </div>
                  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="afterSubmitBtn btn btn-success px-5">Save</button>
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
                <th scope="col">Type</th>
                <th scope="col">Plan</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Feature</th>
                <th scope="col">Deleted Information</th>
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
              @foreach($packages as $data)
              <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td class="nowrap">{{$data->type}}</td>
                <td class="nowrap">{{$data->plan}}</td>
                <td class="nowrap">{{$data->name}}</td>
                <td class="nowrap">{{$data->price}}</td>
                <td class="nowrap">{{$data->feature}}</td>
                <td class="">
{{ $data->deleter->email ?? 'N/A' }}<br>
{{ \Carbon\Carbon::parse($data->deleted_at)->setTimezone('Asia/Dhaka')->format('d M Y - h:i A') }}
                </td>
                <td class="nowrap">
                   <a href="{{url('packages-restore/'.$data->id)}}" class="btn btn-outline-success py-0 px-1 fw-bold">Restore</a> 
                  <a href="{{url('packages-delete/'.$data->id)}}" class="btn btn-outline-danger py-0 px-1 fw-bold">Delete</a>
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
                    <form class="afterSubmitForm2" action="{{url('packages/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
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
                              <label for="feature">Feature <span class="text-danger fw-bold"></span></label>
                              <input type="text" name="feature" value="{{$data->feature}}" id="feature" class="form-control my-2">
                          </div>
                          
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="afterSubmitBtn2 btn btn-success">Save Changes</button>
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
                    <form class="afterSubmitForm3" action="{{url('packages/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('delete')
                    <div class="modal-body text-center text-danger fs-3">
                      Are you sure ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="afterSubmitBtn3 btn btn-danger">Yes</button>
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