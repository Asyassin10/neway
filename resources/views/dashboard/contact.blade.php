@extends("dashboard.app")
@section("main")
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Contacts</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contacts List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>E-mail</th>
                            <th>Sujette</th>
                            <th>Message</th>
                            <th>date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $key => $contact)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->mail}}</td>
                            <td>{{$contact->suject}}</td>
                            <td>{{$contact->text}}</td>
                            <td>{{$contact->created_at}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                    <div>
                        {{ $contacts->links('pagination::simple-bootstrap-4') }}
                    </div>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
