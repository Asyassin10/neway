@extends('dashboard.app')
@section('main')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">ADD blog</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Descrption</label>
                        <input type="text" class="form-control @error('descrption') is-invalid @enderror" id="descrption"
                            name="descrption" required>
                        @error('descrption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                            name="image" required>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="by">By</label>
                        <input type="text" class="form-control" id="by" name="by">
                    </div>

                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" name="text" rows="5" >{!! old('text') !!}</textarea>
                        @error('text')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <!-- CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#text'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
