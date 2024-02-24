@extends('dashboard.app')
@section('main')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Posts List</h6>
            </div>
            <div class="card-body">
                <a class="btn btn-primary mb-3" href="{{ route('add-blog') }}">Ajouter un Post</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Descrption</th>
                                <th>By</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td><img src="{{ asset('uploads/' . $blog->image) }}" alt="Blog Image"
                                            style="max-width: 200px;"></td>
                                            <td>{{ $blog->descrption }}</td>
                                    <td>{{ $blog->by }}</td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                        <a href="{{ route('blogs.edit', $blog->slug) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('blogs.destroy', $blog->slug) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
@endsection
