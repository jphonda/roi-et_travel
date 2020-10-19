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
                                <th>ชื่อข่าวสาร</th>
                                <th>จำนวนผู้เข้าชม</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>ชื่อข่าว</th>
                                <th>จำนวนผู้เข้าชม</th>
                                <th>จัดการ</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if($news->count())
                            @foreach ($news as $new)
                            <tr>
                                <td>{{$new->id}}</td>
                                <td>{{$new->name}}</td>
                                <td>{{$new->score}}</td>
                               
                                <td class="text-center">
                                    <a href="{{ route('edit-news', ['id' => $new->id]) }}"><i class="far fa-edit"></i></a>
                                    <a href="{{ route('del-news', ['id' => $new->id])}}" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
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