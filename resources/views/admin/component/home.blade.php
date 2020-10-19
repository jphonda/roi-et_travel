@extends('admin.app')
@section('contents')
    <h1></h1>
    <!-- Illustrations -->
    <!-- Create the toolbar container -->


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มข้อมูล</h6>
        </div>
        <div class="card-body container">
            

            <form id="form" method="POST" action="/index" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg"
                        alt="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row"> 
                            <label for="">ชื่อสถานที่ท่องเที่ยว : </label>
                            <input type="text" class="w-100" style="border:0px; border-bottom:1px solid rgb(215, 215, 215); height:30px" value="">
                            </div>
                            <br>
                            <div class="row"> 
                                <label for="">ชื่อสถานที่ท่องเที่ยว : </label>
                                <input type="text" class="w-100" style="border:0px; border-bottom:1px solid rgb(215, 215, 215); height:30px" value="">
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">เนื้อหา:</label>
                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="quill-wrapper">
                        <div id="toolbar" class="toolbar" style="border:0px">
                            <span class="ql-formats">
                                <select class="ql-font">
                                    <option selected=""></option>
                                    <option value="serif"></option>
                                    <option value="monospace"></option>
                                </select>
                                <select class="ql-size">
                                    <option value="small"></option>
                                    <option selected=""></option>
                                    <option value="large"></option>
                                    <option value="huge"></option>
                                </select>
                                <select class="ql-header ql-picker">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                    <option value="6"></option>
                                    <option selected="selected"></option>
                                </select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-strike"></button>
                            </span>
                            <span class="ql-formats">
                                <select class="ql-color"></select>
                                <select class="ql-background"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-list" value="ordered"></button>
                                <button class="ql-list" value="bullet"></button>
                                <select class="ql-align">
                                    <option selected=""></option>
                                    <option value="center"></option>
                                    <option value="right"></option>
                                    <option value="justify"></option>
                                </select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-link"></button>
                                <button class="ql-image"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-clean"></button>
                            </span>

                        </div>

                        <div id="editor" class="editor" style="border:1px solid rgb(230, 230, 230)">
                            {!! old('content') !!}
                        </div>
                        <textarea name="data" style="display:none;" id="data"></textarea>
                    </div>

                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่ อัพเดต</label>
                    <input type="date" class="form-control" name="show_date" placeholder=" 1 ก.ย. 2563"
                        value="{{ old('show_date') }}">
                    @error('show_date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary">บันทึก</button>
            </form>
            <div style="height: 40px"> </div>
        </div>
    </div>


@endsection
