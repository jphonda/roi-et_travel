@extends('admin.app')
@section('contents')
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card  mb-4" style="border:0px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ตารางรายการสถานที่ท่องเที่ยว</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>รูป</th>
                                    <th>key</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>รูป</th>
                                    <th>key</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($img_slider as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>

                                        <td class=""><img src="{{ asset('avatar/' . $item->image) }}" style="height: 50px"
                                                class="img-fluid float-left" alt=""></td>
                                        <td>{{ $item->id_place }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/admin_deleteImage/' . $item->id) }}"><i
                                                    class="far fa-trash-alt"></i></a>
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
