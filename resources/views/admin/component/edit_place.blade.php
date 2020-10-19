@extends('admin.app')
@section('contents')
    <h1></h1>
    <!-- Illustrations -->
    <!-- Create the toolbar container -->
    @foreach ($datas as $item)
    <div class="card">
        <div class="row m-0 p-0">
            <div class="d-flex justify-content-center col-8  m-0 p-0">
                <div class="mb-4 border-0 w-100" style="box-shadow: 1px 1px 5px 1px rgb(235, 235, 235)">
                    <div class="d-flex justify-content-center">


                    </div>
                    <div class="card-header py-3 d-flex justify-content-md-between">
                        <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มข้อมูล</h6>
                        <a href="{{url('/edit_slider/'. $item->id_place)}}"><p>แก้ไขสไลด์</p></a>
                    </div>

                    <br>
                    <div class="card-body  d-flex justify-content-center m-0 p-0">
                        


                            <form id="form" method="POST" action="{{ url('/edit_place/' . $item->id_place) }}"
                                enctype="multipart/form-data" class="text-center">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <input type="hidden" name="id_place" value="{{$item->id_place}}">

                                <div class="container">
                                    <div class="container d-flex justify-content-lg-between">
                                        <label class="label" for="input">Please upload a picture !</label>
                                        <div class="input">
                                            <input name="image" id="file" type="file" value="{{$item->image}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" name="name" class="w-100" value="{{$item->name}}"
                                                placeholder="  ชื่อสถานที่ท่องเที่ยว"
                                                style="border:1px solid rgb(235, 235, 235); border-radius:5px; height:40px">
                                        </div>
                                        <div class="col-4 d-flex align-items-center justify-content-center">
                                            {{-- <label id="save">เส้นทาง: </label>
                                            --}}

                                            <select id="status" name="status"
                                                style="border: 1px solid rgba(128, 128, 128, 0.16); border-radius:5px">
                                                <option value="0">บุญ/ไหว้พระ</option>
                                                <option value="1">ธรรมชาติ</option>
                                                <option value="2">แหล่งเรียนรู้</option>
                                                <option value="3">แช๊ะ,ชิม,ช๊อป,ชิลล์</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group text-left " style="background: rgb(247, 250, 255)">
                                    <div class="container">

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

                                            <div id="editor" class="editor" style="border:1px solid rgb(230, 230, 230);">
                                                {!! $item->content !!}
                                            </div>
                                            {{-- <input type="hidden" value="{{ $__genId }}"
                                                name="__genId"> --}}
                                            <textarea name="data" style="display:none;" id="data"></textarea>
                                            <br>
                                            <input type="text" name="youtube" class="w-100" value=""
                                                placeholder="  ลิ้งค์ Youtube"
                                                style="border:1px solid rgb(235, 235, 235); border-radius:5px; height:40px">

                                            <br>
                                            <br>

                                            <input type="text" name="map" class="w-100" value="{{$item->map}}"
                                                placeholder="  สถานที่ google map"
                                                style="border:1px solid rgb(235, 235, 235); border-radius:5px; height:40px">

                                            <div style="height: 40px"> </div>
                                        </div>
                                        <br>

                                    </div>


                                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <br>
                                <div class="d-row">
                                    <p>
                                        <label for="upload_imgs" class="button hollow">Select Your Images +</label>
                                        <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]"
                                            multiple />
                                    </p>
                                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" style=""
                                        aria-live="polite">
                                        <div class="img-preview-thumb col-lg-2"></div>
                                    </div>
                                </div>

                                <button type="submit" id="submit-all" class="btn btn-primary float-right"
                                    style=" bottom:10px; right:10px">บันทึก</button>

                            </form>

                        


                    </div>

                    <br>
                    {{-- <div class="panel panel-default container">
                        <div class="panel-heading">
                            <p>รูปสไลด์</p>
                        </div>
                        <div class="panel-body">
                            <form id="dropzoneForm" style="border:0px; background:rgb(247, 250, 255); border-radius:20px"
                                class="dropzone" action="{{ route('dropzone.upload') }}" enctype="multipart/form-data">
                                <input type="hidden" value="{{ $__genId }}" name="__genId">
                                @csrf
                            </form>
                        </div>
                    </div> --}}


                    <br>                                              
                </div>
                
            </div>

            <div class="col-4 m-0 " style="overflow:scroll; height:900px; z-index:0; background:rgba(227, 227, 227, 0.687)">
                <div class="panel panel-default m-0 p-0 ">
                    <div class="panel-heading mt-4">
                        <p>เพิ่มรูป</p>
                    </div>
                    <div>
                        <form id="dropzoneForm2" style="border:0px; background:rgb(227, 227, 227); " class="dropzone"
                            action="{{ route('dropzone.upload') }}" enctype="multipart/form-data">
                            @csrf
                        </form>
                        <br>
                        <button type="submit" id="submit-all2" class="btn btn-primary margin:40px">บันทึก</button>
                    </div>

                </div>
                <br>
                <br>
                <div class="panel panel-default p-2">
                    <div class="panel-body" id="uploaded_image"></div>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('script')
    <script>
        $(function() {
            var container = $('.container'),
                inputFile = $('#file'),
                img, btn, txt = 'อัพโหลดรูปปก',
                txtAfter = 'แก้ไขรูปปก';

            if (!container.find('#upload').length) {
                container.find('.input').append('<input type="button" value="' + txt + '" id="upload">');
                btn = $('#upload');
                container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="200">');
                img = $('#uploadImg');
            }

            btn.on('click', function() {
                img.animate({
                    opacity: 0
                }, 300);
                inputFile.click();
            });

            inputFile.on('change', function(e) {
                container.find('label').html(inputFile.val());

                var i = 0;
                for (i; i < e.originalEvent.srcElement.files.length; i++) {
                    var file = e.originalEvent.srcElement.files[i],
                        reader = new FileReader();

                    reader.onloadend = function() {
                        img.attr('src', reader.result).animate({
                            opacity: 1
                        }, 700);
                    }
                    reader.readAsDataURL(file);
                    img.removeClass('hidden');
                }

                btn.val(txtAfter);
            });
        });

        var imgUpload = document.getElementById('upload_imgs'),
            imgPreview = document.getElementById('img_preview'),
            imgUploadForm = document.getElementById('img-upload-form'),
            totalFiles, previewTitle, previewTitleText, img;

        imgUpload.addEventListener('change', previewImgs, false);
        imgUploadForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Images Uploaded! (not really, but it would if this was on your website)');
        }, false);

        function previewImgs(event) {
            totalFiles = imgUpload.files.length;

            if (!!totalFiles) {
                imgPreview.classList.remove('quote-imgs-thumbs--hidden');
                // previewTitle = document.createElement('p');
                // previewTitle.style.fontWeight = 'bold';
                // previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
                // previewTitle.appendChild(previewTitleText);
                // imgPreview.appendChild(previewTitle);
            }

            for (var i = 0; i < totalFiles; i++) {
                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');
                imgPreview.appendChild(img);
            }
        }

    </script>
@endsection
