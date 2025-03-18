@extends('layouts.frontend.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="d-flex">
                <h5 class="card-title fw-semibold mb-4">Data User</h5>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="{{ route('admin.user.create') }}">Add User</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Username</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Email</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Role</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Actions</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $user->id }}</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">{{ $user->username }}</h6>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">{{ $user->email }}</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge {{ $user->is_admin ? 'bg-danger' : 'bg-primary' }} rounded-3 fw-semibold">
                          {{ $user->is_admin ? 'Admin' : 'User' }}
                        </span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                      <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                      </form>
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
