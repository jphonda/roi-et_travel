@extends('admin.app')
@section('contents')
    <h1></h1>
    <!-- Illustrations -->
    <!-- Create the toolbar container -->


    <div class="row">        
        <div class="col-sm-12 col-md-8 d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="card  mb-4  border-0" style="box-shadow: 1px 1px 5px 1px rgb(235, 235, 235)">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มข้อมูล</h6>
                    </div>
                    <div class="card-body  d-flex justify-content-center m-0 p-0">


                        <form id="form" method="POST" action="{{url('/create_otop')}}" enctype="multipart/form-data"
                            class="text-center " >
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="d-flex justify-content-center">

                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="img/undraw_posting_photo.svg" alt="">

                            </div>
                            <div class="container">
                                <input type="text" name="name" class="w-100" value="" placeholder="  ชื่อสินค้า Otop"
                                    style="border:1px solid rgb(235, 235, 235); border-radius:5px; height:40px">
                                <br>
                                <br>
                                <div class="input-group">


                                    <div class="custom-file text-left text-left ">
                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">เพิ่มรูปหน้าปก</label>
                                    </div>

                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="number" name="price" class="w-100" value="" placeholder="  ราคา"
                                        style="border:1px solid rgb(235, 235, 235); border-radius:5px; height:40px">
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary margin:40px"
                                style="position: absolute; right:30px; ">บันทึก</button>
                            <br>
                            <div style="height: 40px"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 d-none d-sm-block">            
            <div class="row" style="overflow: scroll; height:75vh">
                @foreach ($otops as $item)

                    <div class="col-6 p-2">
                        <div class="card text-center border-0 shadow-sm">
                            <img src="{{ asset('avatar/' . $item->image) }}" class="img-fluid" alt="">
                            <p>{{ $item->name }}</p>
                            <p>{{ $item->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
