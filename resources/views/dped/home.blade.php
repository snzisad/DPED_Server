@extends('model.model')

@section('title','DPED Moblie Application')

@section('body')
	{!! Form::open(["route"=>"dped.index","method"=>"GET"]) !!}
	{!! Form::close() !!}
	<div class="container" id="0" oncontextmenu="return false;">
		<div class="data">
		<table class="table">
			<?php
				$f=count($folders);
			?>		
			<script type="text/javascript">
				var folders = {!! $folders->toJSON() !!};
			</script>
			
			@for($i=0;$i<$f;$i=$i+3)
			<tr>
				<td width="33.33%">
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/folders.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{route('dped.show',$folders[$i]->folderID)}}" class="title" id="{{$folders[$i]->folderID}}" name="{{$folders[$i]->folder}}" type="folder">{!!$folders[$i]->folder!!}</a>
							</td>
						</tr>
					</table>
				</td>
					
				@if($i+1<$f)
				<td width="33.33%">
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/folders.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{route('dped.show',$folders[$i+1]->folderID)}}" class="title" id="{{$folders[$i+1]->folderID}}" name="{{$folders[$i+1]->folder}}" type="folder">{!!$folders[$i+1]->folder!!}</a>
							</td>
						</tr>
					</table>
				</td>
				@endif

				@if($i+2<$f)
				<td width="33.33%">
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/folders.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{route('dped.show',$folders[$i+2]->folderID)}}" class="title" id="{{$folders[$i+2]->folderID}}" name="{{$folders[$i+2]->folder}}" type="folder">{!!$folders[$i+2]->folder!!}</a>
							</td>
						</tr>
					</table>
				</td>
				@endif
			</tr>
			@endfor
		</table>
		</div>
	</div>
@endsection

