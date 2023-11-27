@extends('layouts-school.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

{{-- From Insert Start --}}
<div class="row">
    <div class="col-md-12" style="margin-top: 20px;">
        <form action="{{ route('insert.control') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('modal-form')
        </form>
    </div>
</div>
{{-- From Insert End --}}

<center>
    <table class="table" style="background-color: #fff" width="80%">
        <thead>
            <tr>
                <th>ไอดี</th>
                <th>หัวเรื่อง</th>
                <th>เนื้อหา</th>
                <th width="20%">เครื่องมือ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listContents as $listContent)
            <tr>
                <td>{{ $listContent->id }}</td>
                <td>{{ $listContent->title_name }}</td>
                <td>{{ $listContent->content }}</td>
                <td>
                    {{-- <button type="submit" class="btn btn-warning" onclick="window.location.href='{{ route('edit.new', $listContent->id) }}'">แก้ไข</button> --}}
                    <a href="{{ route('edit.new', $listContent->id) }}" class="btn btn-sm btn-warning" style="font-size: 0.8em;">แก้ไข</a>
                    <a href="{{ route('delete', $listContent->id) }}" class="btn btn-sm btn-danger" style="font-size: 0.8em;" id="deleteCompany" data-id="{{ $listContent->id }}">
                        Delete
                     </a>
                </td>
            </tr>
            @endforeach
    </table>
</center>


@endsection
@section('script')

<script>

    $(function(){
        $('.table1').dataTable({
            pageLength: 5,
            responsive: true,
            autoWidth: true,
            searching: false,
            "bInfo": false,
            ordering: true,
            "bLengthChange": false,
            processing: true,
        });
    });

    $(document).ready(function () {
        $(".insert-content1").click(function () {
            $(this).hide();
            console.log("dblclick");
        });
    });

    $(document).on('click','.delete_user',function(){
        var id = $(this).attr('data-id');
        var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
        type: 'POST',
        url: "/delete-new/"+id,

        data: {
            _token: token,
            _method: 'POST',
            id: id,
        },
            success: function (response) {
                console.log("ASD");

            }
        });
        window.location.reload();
    });

    $(document).ready(function () {

$("body").on("click","#deleteCompany",function(e){

   if(!confirm("Do you really want to do this?")) {
      return false;
    }

   e.preventDefault();
   var id = $(this).data("id");
   // var id = $(this).attr('data-id');
   var token = $("meta[name='csrf-token']").attr("content");
   var url = e.target;

   $.ajax(
       {
         url: "/delete/"+id,
         type: 'GET',
         data: {
           _token: token,
               id: id
       },
       success: function (response){

           $("#success").html(response.message)

           Swal.fire(
             'Remind!',
             'Company deleted successfully!',
             'success'
           )
       }
    });
     return false;
  });


});


</script>
@endsection
