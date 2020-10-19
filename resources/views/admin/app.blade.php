<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style>
.hidden, #uploadImg:not(.hidden) + label{
	display: none;
}
#file{
	display: none;
  	margin: 0 auto;
}
#upload{
	display: block;
	padding: 10px 25px;
	border: 0;
	margin: 0 auto;
	font-size: 15px;
	letter-spacing: 0.05em;
	cursor: pointer;
	background: #216e69;
	color: #fff;
	outline: none;
	transition: .3s ease-in-out;
	&:hover, &:focus{
		background: #1AA39A;
	}
	&:active{
		background: #13D4C8;
		transition: .1s ease-in-out;
	}
}

img{
	display: block;
	margin: 0 auto 15px;
}

.quote-imgs-thumbs {
  background: #eee;
  border: 0px solid white;
  border-radius: 0.25rem;
  margin: 1.5rem 0;
  padding: 0.75rem;
  display: grid;
  grid-column-gap: 10px;
  grid-template-columns: auto auto auto auto ;
  
  
}
.quote-imgs-thumbs--hidden {
  display: none;
}

.img-preview-thumb {
  background: #fff;
  border: 1px solid #777;
  border-radius: 0.25rem;
  box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
  max-width: 140px;
  padding: 0.25rem;
  
}

    </style>
</head>

<body id="page-top">
    @include('admin.layout.manu')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @yield('contents')

    </div>


    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <!-- Initialize Quill editor -->
    <script>
        var customBoldHandler = {
            // handlers object will be merged with default handlers object
            'link': function(value) {
                if (value) {
                    var href = prompt('Enter the URL');
                    this.quill.format('link', href);
                } else {
                    this.quill.format('link', false);
                }
            },
            'image': function(value) {
                if (value) {
                    var href = prompt('Enter the URL');
                    this.quill.format('image', href);
                } else {
                    this.quill.format('image', false);
                }
            },
        }
        var quill = new Quill('#editor', {
            modules: {
                toolbar: {
                    container: '#toolbar', // Selector for toolbar container
                    handlers: customBoldHandler
                }
            },
            theme: 'snow'
        });

        $("#form").on("submit", function() {
            // alert($(".ql-editor").html());
            $("#data").val($(".ql-editor").html());
            // $("#data").val('222');
            // $("#content").val($("p").html());            
            // console.log('มาแล้ว')
        });

    </script>

    <script type="text/javascript">
        // Dropzone.options.dropzoneForm = {
        //     autoProcessQueue: false,
        //     acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg,.webp",

        //     init: function() {
        //         var submitButton = document.querySelector("#submit-all");
        //         myDropzone = this;

        //         submitButton.addEventListener('click', function() {
        //             myDropzone.processQueue();
        //         });

        //         this.on("complete", function() {
        //             if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
        //                 var _this = this;
        //                 _this.removeAllFiles();
        //             } else {
        //                 myDropzone.processQueue();
        //             }                    
        //         });

        //     }

        // };

        Dropzone.options.dropzoneForm2 = {
            autoProcessQueue: false,
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg,.webp",

            init: function() {
                var submitButton = document.querySelector("#submit-all2");
                myDropzone = this;

                submitButton.addEventListener('click', function() {
                    myDropzone.processQueue();
                });

                this.on("complete", function() {
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        var _this = this;
                        _this.removeAllFiles();
                    } else {
                      myDropzone.processQueue();
                    }
                    load_images();
                });

            }

        };
        

        load_images();

        function load_images() {
            $.ajax({
                url: "{{ route('dropzone.fetch') }}",
                success: function(data) {
                    $('#uploaded_image').html(data);
                }

            })

        }


        function select_Copy() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }

        $(document).on('click', '.remove_image', function() {
            // var name = $(this).attr('id');    
            var copyText = document.getElementById("select");
            // var copyText = document.getElementById(name); 
            console.log(name)
            // name.select();
            // name.setSelectionRange(0, 99999)
            // document.execCommand("copy");
            // alert("Copied the text: " + name.value);   
            $.ajax({

                // url:"{{ route('dropzone.delete') }}",
                // data:{name : name},
                // success:function(data){
                //   load_images();
                // }
            })
        });

    </script>
    @yield('script')
</body>

</html>
