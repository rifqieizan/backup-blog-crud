@extends('templates.layout')

@section ('style')
<style type="text/css">
	.hidden:{
		display: block;
	}
</style>
@endsection

@section ('content')
<!--<form action="{{route('create')}}" method="post">
	{{ csrf_field() }}
	<input type="text" name="nama" placeholder="nama">
	<input type="text" name="alamat" placeholder="alamat">
	<input type="text" name="ipk" placeholder="ipk">
	<input type="text" name="jurusan" placeholder="jurusan">

	<button type="submit">Submit</button>
</form> -->
	<button id="buttoncreate">Create</button>
	<div id="create" class="hidden" hidden>
		<form action="{{route('create')}}" method="post">
			{{ csrf_field() }}
			<input type="text" name="nama" placeholder="nama">
			<input type="text" name="alamat" placeholder="alamat">
			<input type="text" name="ipk" placeholder="ipk">
			<input type="text" name="jurusan" placeholder="jurusan">

			<button type="submit">Submit</button>
		</form>
	 </div>
<div class="container-fluid">
	<h1>Bookings</h1>
	
	<div class="table-responsive">
		<table class="table table-striped" id="bookings-table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>alamat</th>
					<th>ipk</th>
					<th>jurusan</th>
					<th>action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('delete')}}" method="post">
			{{ csrf_field() }}
			<input type="hidden" id="id" name="id">
			<p>Are you sure want to delete this data ? </p>
			<button class="btn btn-danger pull-right" type="submit">Delete</button>
			<button class="btn pull-right" type="button" data-dismiss="modal">Cancel</button>
		</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div -->>
    </div>
  </div>
</div>

@endsection

@section ('script')
<script type="text/javascript">
$(function() {
    $('#bookings-table').DataTable({
        processing: true,
        serverSide: true,
		responsive: true,
        ajax: "{!! route('datatabel') !!}",
        columns: [
			
			{ data: 'nama', name: 'nama' },
            { data: 'alamat', name: 'alamat' },
            { data: 'ipk', name: 'ipk' },
            { data: 'jurusan', name: 'jurusan' },
			{ data: 'action', name: 'action' }

			]
    });

    $('#buttoncreate').click(function(){
    	
    	$("#create").removeAttr('hidden');
    })

});

function deleteData(id) {

	$('#id').val(id);
	$('#exampleModal').modal('show');

}

</script>
@endsection