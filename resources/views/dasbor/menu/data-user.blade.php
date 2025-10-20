@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Data User')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data User</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah User
                    </button>
                </div>

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $d)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->user_level }}</td>
                                    <td>{{ $d->status }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning"><i class="fas fa-edit text-white"></i></a>
                                        @if ($d->status == 'Nonaktif')
                                            <form action="{{ route('delete_user', $d->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin hapus data user?')">
                                                    <i class="fas fa-trash-alt text-white"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="mb-3" action="{{ url('#') }}" method="POST">

                        <div class="mb-3">
                            <label for="email" class="form-label"> Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your name" value="{{ old('name') }}" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" value="{{ old('email') }}" required />
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label><br />
                            <select class="form-select" aria-label="Default select example" name="user_level"
                                style="width: 100%;height: 45px;border-color: rgb(212, 212, 212);border-radius: 3px;">
                                <option selected disabled>Pilih Level</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Manager">Manager</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Admin Jepang">Admin Jepang</option>
                                <option value="Admin Korea">Admin Korea</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"> WhatsApp</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter your phone" required />
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"> Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter your address" required />
                        </div>
                        <input type="text" class="form-control" id="phone" name="user_foto" value="-"
                            placeholder="Enter your phone" hidden />
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" name="password" for="password"
                                    placeholder="Enter your password" required>Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="Enter your password" aria-describedby="password" />
                            </div>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" name="password_confirmation" for="password_confirmation"
                                    placeholder="Enter your password" required>Re
                                    Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password_confirmation" class="form-control"
                                    name="password_confirmation" placeholder="Enter your re password"
                                    aria-describedby="password" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
