@extends('layouts.back')

@section('content')


<section style="min-height:100vh;" class="mt-5 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-responsive table-striped table-hover">
            <thead class="table-info">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $data)
              <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td class="nowrap">{{$data->name}}</td>
                <td class="nowrap">{{$data->email}}</td>
                <td class="nowrap">{{$data->type}}</td>
                <td class="nowrap">
                  <a href="#" class="btn btn-outline-success py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>
                  <a href="#" class="btn btn-outline-danger py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                </td>
              </tr>

              <!-- Edit{{$data->id}} -->
              <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Update Form</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('users/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">
                          <label for="type">Role *</label>
                          <select name="type" id="type" class="form-select my-2">
                            <option value="{{$data->type}}" hidden>{{$data->type}}</option>
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Delete{{$data->id}} -->
              <div class="modal fade" id="Delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center text-danger fs-3">
                      Are you sure ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="{{url('users/'.$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('delete')
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