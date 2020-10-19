@extends('admin.app')
@section('contents')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">รายงาน</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            @foreach ($sum as $value)
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        รวมสถานที่ท่องเที่ยวทั้งหมด
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$value['place']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">รวมสินค้า OTOP
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$value['otop']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">รวมผู้เยี่ยมชมเว็บ</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$value['score']}}</div>
                                        </div>
                                        <div class="col">
                                            {{-- <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            @endforeach
        </div>
        <!-- Content Row -->
        <div class="card shadow mb-4 d-none d-sm-block">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">สถานที่ท่องเที่ยว</h6>
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
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>ชื่อสถานที่ท่องเที่ยว</th>
                                <th>จำนวนผู้เข้าชม</th>                                
                                <th>สายเส้นทาง</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td class="text-center">{{$item->score}}</td>                                    
                                    <td class="text-center">
                                        @if ($item->status == 0)
                                            <p style="background:rgba(255, 237, 166, 0.591);  padding:3px;   position: absolute; border-radius:5px; color:rgb(77, 77, 77)">บุญ/ไหว้พระ</p>
                                        @elseif($item->status == 1)
                                            <p style="background:rgba(166, 255, 173, 0.523);  padding:3px;  position: absolute; border-radius:5px; color:rgb(77, 77, 77)">ธรรมชาติ</p>
                                            @elseif($item->status == 2)
                                            <p style="background:rgba(166, 228, 255, 0.523);  padding:3px;  position: absolute; border-radius:5px; color:rgb(77, 77, 77)">แหล่งเรียนรู้</p>
                                            @elseif($item->status == 3)
                                            <p style="background:rgba(255, 166, 255, 0.523);   padding:3px; position: absolute; border-radius:5px; color:rgb(77, 77, 77)">แช๊ะ,ชิม,ช๊อป,ชิลล์</p>
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



@endsection
