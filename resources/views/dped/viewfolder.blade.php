@extends('model.model')

@section('title',$name->folder)

@section('body')
	{!! Form::open(["route"=>['dped.show',5],"method"=>"GET"]) !!}
	{!! Form::close() !!}
	<div class="container" id="{{$name->folderID}}" oncontextmenu="return false;">
		<div class="data" >
		<table class="table">
			<?php 
				$f=count($folders);
				$n=$f+count($files); 
			?>
			@for($i=0;$i<$n;$i=$i+3)
			<tr>
				@if($i<$f)
					<td>
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/folders.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{route('dped.show',$folders[$i]->folderID)}}" class="title"  id="{{$folders[$i]->folderID}}" name="{{$folders[$i]->folder}}" type="folder">{!!$folders[$i]->folder!!}</a>
							</td>
						</tr>
					</table>
					</td>
				@else
					<td>
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/files.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{url('view',$files[$i-$f]->fileID)}}" class="title" id="{{$files[$i-$f]->fileID}}" name="{{$files[$i-$f]->file}}" type="file">{!!$files[$i-$f]->file!!}</a>
							</td>
						</tr>
					</table>
					</td>
				@endif

				@if($i+1<$f)
					<td>
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
				@elseif(!empty($files[$i-$f+1]))
					<td>
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/files.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{url('view',$files[$i-$f+1]->fileID)}}" class="title" id="{{$files[$i-$f+1]->fileID}}" name="{{$files[$i-$f+1]->file}}" type="file">{!!$files[$i-$f+1]->file!!}</a>
							</td>
						</tr>
					</table>
					</td>
				@endif

				@if($i+2<$f)
					<td>
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
				@elseif(!empty($files[$i-$f+2]))
					<td class="menu">
					<table>
						<tr>
							<td>
								<img src="{{ asset('images/files.png') }}" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="{{url('view',$files[$i-$f+2]->fileID)}}" class="title" id="{{$files[$i-$f+2]->fileID}}" name="{{$files[$i-$f+2]->file}}" type="file">{!!$files[$i-$f+2]->file!!}</a>
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

