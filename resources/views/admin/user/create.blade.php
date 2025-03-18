@extends('layouts.frontend.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Create User</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="mb-3">
                  <label for="is_admin" class="form-label">Role</label>
                  <select class="form-select" id="is_admin" name="is_admin">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
