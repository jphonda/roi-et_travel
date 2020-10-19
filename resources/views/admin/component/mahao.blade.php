<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="grid grid-cols-1">
                <div class="p-6">

                    <form id="form" method="POST" action="/insert-posts" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Web Content</label>
                            <select class="form-control" name="web_content_id">
                                <option value=""> - เลือก - </option>
                                @if(count($web_contents))
                                @foreach($web_contents as $web)
                                <option value="{{ $web->id }}">{{ $web->domain }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('web_content_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">ประเภทบทความ</label>
                            <select class="form-control" name="post_type_id">
                                <option value=""> - เลือก - </option>
                                @if(count($types))
                                @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('post_type_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">ชื่อ content</label>
                            <input type="text" class="form-control" name="title" placeholder="วันนี้จะกินไรดี" value="{{ old('title')}}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">url content</label>
                            <input type="text" class="form-control" name="url" placeholder="url content" value="{{ old('url')}}">
                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">รายละเอียก content <p class="text-blue-500">*โชว์หน้าเว็บ ใส่มาพอสวยงาม.</p></label>
                            <textarea class="form-control" name="show_detail" rows="3">{{ old('show_detail')}}</textarea>
                            @error('show_detail') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">รูปปก <p class="text-blue-500">*โชว์หน้าเว็บ</p></label>
                            <input type="file" class="form-control" name="show_image" placeholder="วันนี้จะกินไรดี">
                            @error('show_image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <br>
                        <hr>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">content:</label>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror

                            @livewire('get-image-url')

                            <div class="quill-wrapper">
                                <div id="toolbar" class="toolbar">
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

                                <div id="editor" class="editor">
                                    {!! old('content') !!}
                                </div>
                                <textarea name="content" style="display:none" id="content"></textarea>
                            </div>

                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">วันที่ อัพเดต</label>
                            <input type="text" class="form-control" name="show_date" placeholder=" 1 ก.ย. 2563" value="{{ old('show_date') }}">
                            @error('show_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">บันทึก</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>