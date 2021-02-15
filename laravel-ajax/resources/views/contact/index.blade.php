<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    {{-- dataTables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
           
        <h4>Contact list
            <a onclick="addForm()" class="btn btn-primary pull-right" >Add Contact</a>
        </h4>
              
        <table id="contact-table" class="table table-striped table-sm " style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>         
 </div>


    {{-- dataTables --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
 
    <script type="text/javascript">
        var table1 = $('#contact-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('all.contacts') }}",
            columns: [
                {data:'id', name:'id'},
                {data:'name', name:'name'},
                {data:'email', name:'email'},
                {data:'phone', name:'phone'},
                {data:'religion', name:'religion'},
                {data:'action', name:'action', orderable: false, searchable: false}
            ]
        });
    </script>
  </body>
</html>