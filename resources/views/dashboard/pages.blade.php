@extends('templates.layout')

@section('style')
	<style> 
		#paragraph
		{
			font-family: 'Arial';
			font-size: 17px;
			color: blue;
		}
	</style> 
@endsection

@section ('script')
	
	<script type="text/javascript">

		$('#paragraph').click(function{
			$('#myModal').show();
		})	
	</script>

@endsection

@section('content')
	<button id="paragraph" data-target="myModal"> page </button>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection