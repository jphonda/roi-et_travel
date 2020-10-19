@extends('admin.app')
@section('contents')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ตารางรายการข่าวสาร</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>รูป</th>
                                <th>ชื่อรูป</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>รูป</th>
                                <th>ชื่อรูป</th>
                                <th>จัดการ</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if($gallerys->count())
                            @foreach ($gallerys as $gallery)
                            <tr>
                                <td>{{$gallery->id}}</td>
                                <td><img width="10%" src="{{ asset('avatar/'.$gallery->image) }}" ></td>
                                <td>{{$gallery->name}}</td>

                                <td class="text-center">
                                    <a href="{{ route('del-gallerys', ['id' => $gallery->id])}}" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection