@extends('admin.app')
@section('contents')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ตารางรายการสถานที่ท่องเที่ยว</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>ชื่อสถานที่ท่องเที่ยว</th>
                                    <th>จำนวนผู้เข้าชม</th>                                
                                    <th>สายเส้นทาง</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>ชื่อสถานที่ท่องเที่ยว</th>
                                    <th>จำนวนผู้เข้าชม</th>                                
                                    <th>สายเส้นทาง</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($datas as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->score}}</td>                                        
                                        <td class=" text-center">
                                            @if ($item->status == 0)
                                                <p style="background:rgba(255, 237, 166, 0.591); position: absolute; padding:3px; width:100px ; border-radius:5px; color:rgb(77, 77, 77)">บุญ/ไหว้พระ</p>
                                            @elseif($item->status == 1)
                                                <p style="background:rgba(166, 255, 173, 0.523); position: absolute; padding:3px; width:100px ; border-radius:5px; color:rgb(77, 77, 77)">ธรรมชาติ</p>
                                                @elseif($item->status == 2)
                                                <p style="background:rgba(166, 228, 255, 0.523); position: absolute; padding:3px; width:100px ; border-radius:5px; color:rgb(77, 77, 77)">แหล่งเรียนรู้</p>
                                                @elseif($item->status == 3)
                                                <p style="background:rgba(255, 166, 255, 0.523); position: absolute; padding:3px; width:150px ; border-radius:5px; color:rgb(77, 77, 77)">แช๊ะ,ชิม,ช๊อป,ชิลล์</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{url('/edit_place/'. $item->id_place)}}"><i class="far fa-edit"></i></a>
                                            <a href="{{url('/edit_place-delete/' . $item->id)}}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
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
