@extends('admin.app')
@section('contents')


<div class="row">
    <div class="col-sm-12">
        <div class="">
            <div class="card mb-4 border-0 w-100" style="box-shadow: 1px 1px 5px 1px rgb(235, 235, 235)">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">จัดการผู้ใช้</h6>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#addModal">เพิ่มผู้ใช้</a>
                    <div class="m-1">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อผู้ใช้</th>
                                    <th>อีเมลล์</th>
                                    <th>สิทธิ์</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if($users->count())
                                @foreach($users as $key => $user)

                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delModal{{$user->id}}">
                                            ลบ
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ลบผู้ใช้</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        ยืนยันการลบผู้ใช้
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                        <form method="POST" action="{{ route('del-user', ['id' => $user->id])}}">
                                                            @csrf
                                                            @method('PUT')

                                                            <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="add-user">
                @csrf

                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">email</label>
                        <input type="email" class="form-control" name="email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">password</label>
                        <input type="password" class="form-control" name="password" autocomplete="off" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection