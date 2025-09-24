@extends('layouts.back')

@section('content')

<section style="min-height:100vh;" class="mt-5 pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 mb-2 fs-5 fw-bold">
          Galleries
      </div>
      <div class="col-6 text-end mb-2">
          <a href="#" class="btn btn-outline-primary py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Add">Add New</a>
      </div>
      <!-- Add -->
      <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Create Gallery Item</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="afterSubmitForm" action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data"> @csrf
            <div class="modal-body">
              <div class="row">

                <div class="col-12 mb-3">
                    <label for="title">Title <span class="text-danger fw-bold">*</span></label>
                    <input type="text" name="title" id="title" required class="form-control my-2">
                </div>
                <div class="col-12 mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control my-2" rows="3"></textarea>
                </div>
                <div class="col-12 mb-3">
                    <label for="image">Image <span class="text-danger fw-bold">*</span></label>
                    <input type="file" name="image" id="image" required class="form-control my-2" accept="image/*">
                </div>
                <div class="col-12 mb-3">
                    <label for="status">Status <span class="text-danger fw-bold">*</span></label>
                    <select name="status" id="status" required class="form-select my-2">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
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
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($galleries as $gallery)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td><img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="height:40px; width:auto;" class="rounded"></td>
                <td class="nowrap">{{ $gallery->title }}</td>
                <td class="nowrap">{{ Str::limit($gallery->description, 50) }}</td>
                <td class="nowrap">
                  <span class="badge bg-{{ $gallery->status == 'active' ? 'success' : 'secondary' }}">
                    {{ ucfirst($gallery->status) }}
                  </span>
                </td>
                <td class="nowrap">
                   <a href="#" class="btn btn-outline-success py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Edit{{ $gallery->id }}">Edit</a>
                  <a href="#" class="btn btn-outline-danger py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Delete{{ $gallery->id }}">Delete</a>
                </td>
              </tr>

              <!-- Edit{{ $gallery->id }} -->
              <div class="modal fade" id="Edit{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Update Gallery Item</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="afterSubmitForm2" action="{{ route('galleries.update', $gallery->id) }}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="modal-body">
                      <div class="row">

                        <div class="col-12 mb-3">
                            <label for="title">Title <span class="text-danger fw-bold">*</span></label>
                            <input type="text" name="title" value="{{ $gallery->title }}" id="title" required class="form-control my-2">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control my-2" rows="3">{{ $gallery->description }}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="image">Image (leave empty to keep current)</label>
                            <input type="file" name="image" id="image" class="form-control my-2" accept="image/*">
                            <small class="text-muted">Current: <img src="{{ asset('storage/' . $gallery->image) }}" alt="image" style="height:120px; width:auto;" class="rounded mt-1"></small>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="status">Status <span class="text-danger fw-bold">*</span></label>
                            <select name="status" id="status" required class="form-select my-2">
                                <option value="active" {{ $gallery->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $gallery->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
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
              <!-- Delete{{ $gallery->id }} -->
              <div class="modal fade" id="Delete{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="afterSubmitForm3" action="{{ route('galleries.destroy', $gallery->id) }}" method="post" enctype="multipart/form-data"> @csrf @method('delete')
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