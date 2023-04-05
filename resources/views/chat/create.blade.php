<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Add CKEditor 5 and save it to MySQL database in Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >

    <style type="text/css">
    .ck-editor__editable {
         min-height: 250px;
    }
    </style>
</head>
<body>

    <div class="container">
         <div class="row">
               <div class="col-md-8 mt-5" style="margin: 0 auto;">

                    <!-- Alert message (start) -->
                    @if(Session::has('message'))
                         <div class="alert alert-success">
                             {{ Session::get('message') }}
                         </div>
                    @endif
                    <!-- Alert message (end) -->

                    <form method="post" action="{{ route('submitform') }}">

                        @csrf

                        <div class="form-group mb-4">

                            <label class="control-label col-sm-2" for="subject">Name:</label>

                            <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" value="{{ old('name') }}">
                            </div>

                            <!-- Error -->
                            @if($errors->has('name'))

                                <div class='text-danger mt-2'>
                                     * {{ $errors->first('name') }}
                                </div>

                            @endif
                        </div>

                        <div class="form-group mb-4">

                            <label class="control-label col-sm-2" for="message">Message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control editor" name="message"></textarea>
                            </div>

                            <!-- Error -->
                            @if($errors->has('message'))

                                <div class='text-danger mt-2'>
                                     * {{ $errors->first('message') }}
                                </div>

                            @endif

                        </div>

                        <div class="form-group "> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>

                    </form>

               </div>

          </div>

    </div>

    <!-- Script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script type="text/javascript">

    ClassicEditor
          .create( document.querySelector( '.editor' ),{ 
                ckfinder: {
                      uploadUrl: "{{route('uploadFile').'?_token='.csrf_token()}}",
                }
          } )
          .then( editor => {

                console.log( editor );

          } )
          .catch( error => {
                console.error( error );
          } );
    </script>
</body>
</html>