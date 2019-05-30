@extends('layouts.admin_app')
@section('content')
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Data Tables</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">All Users</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Role</th>
                          <th scope="col" class="border-0">Created account</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                            @if($user->is_admin == 1)
                          <td>Admin</td>
                            @else
                                <td>User</td>
                            @endif
                          <td>{{ $user->created_at }}</td>
                            <td>
                                <form action="/admin/addpost/update" method="POST" enctype="multipart/form-data">
                                    <input type="submit" name="{{ $user->id }}" class="btn btn-primary" value="admin">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                      <div class="blog-pagination">
                          <ul class="pagination">
                              {{ $users->links() }}
                          </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">All Admins</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Role</th>
                          <th scope="col" class="border-0">Created account</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($admins as $admin)
                        <tr>
                          <td>{{ $admin->id }}</td>
                          <td>{{ $admin->name }}</td>
                          <td>{{ $admin->email }}</td>
                            @if($admin->is_admin == 1)
                                <td>Admin</td>
                            @else
                                <td>User</td>
                            @endif
                          <td>{{ $admin->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                      <div class="blog-pagination">
                          <ul class="pagination">
                              {{ $admins->links() }}
                          </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
          @endsection
