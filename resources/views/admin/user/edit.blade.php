@extends('layouts.frontend.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Edit User</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{ $user->username }}" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">New Password (Leave blank to keep current password)</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                </div>
                <div class="mb-3">
                  <label for="is_admin" class="form-label">Role</label>
                  <select class="form-select" id="is_admin" name="is_admin">
                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User</option>
                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
