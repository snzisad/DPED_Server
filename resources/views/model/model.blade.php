<!DOCTYPE html>
<html>
	<head>
		<title>DPED Moblie Application</title>
		{!!Html::style('css/main.css')!!}
		{!!Html::style('css/jquery-ui.css')!!} 
	</head>
	<body oncontextmenu="return false;">
		<div class="header">@yield('title')</div>
		<br>
		@if(count($errors) > 0)
			<div class="modalContainer">
				<div class="modalOverlay"></div>
				<div class="customModal">
				<div class="modalTitle">
					Sorry, there are some errors.

					<div class="crossBtn" id='hideModalBtn'>X</div>
				</div>
				<div class="modalBody">
					<ul class='modalUL'>
						@foreach($errors->all() as $e)
							{{ $e }}
						@endforeach
					</ul>
				</div>
			</div>
			</div>
			
		@endif
		@yield('body')
	</body>

	<!-- Custom Dialog Box -->
	<div id="renamedialog" title="Edit Name" style="display: none;">
		<form action="	" method="get">
			<label>Name:</label><br>
			<input id="nameoffile" name="name" type="text" required="true">
			<br>
			<input id="save" class="savename" type="submit" value="Save">
		</form>
	</div>

	<div id="newfiledialog" title="New File" style="display: none;">
		<form id="fileuploadform" action="{{ route('fileUpload') }}" enctype="multipart/form-data" method="post">
		 {{ csrf_field() }}
			<!-- <label>Name:</label><br> -->
			<input id="nameoffile" name="name" type="text" required="true" placeholder="Enter Name">
			Select PDF File:
			<input type="file" accept="application/pdf" name="pdffile">
			<br><br>
			Select DOCX File: (Optional) 
			<input type="file" accept="application/msword" name="docxfile">
			<br><br>
			<input type="hidden" id='idField' name="id" value="">
			<input id="save" class="savefile" type="submit" value="Save">
		</form>
	</div>

	<div id="updatefiledialog" title="Update File" style="display: none;">
		<form id="fileupdateform" action="{{ route('fileUpdate') }}" enctype="multipart/form-data" method="post">
		 {{ csrf_field() }}
			<label>Name:</label><br>
			<input id="updatename" name="name" type="text" required="true" placeholder="Enter Name">
			Select PDF File:
			<input type="file" accept="application/pdf" name="pdffile">
			<br><br>
			Select DOCX File: (Optional) 
			<input type="file" accept=".doc, .docx" name="docxfile">
			<br><br>
			<input type="hidden" id='updatefileid' name="id" value="Hello">
			<input id="save" class="savefile" type="submit" value="Save">
		</form>
	</div>



	<div id="newfolderdialog" title="New Folder" style="display: none;">
		<form action="" method="get">
			<label>Name:</label><br>
			<input id="foldername" name="name" type="text" required="true" placeholder="Enter Name">
			<br>
			<input id="save" class="savefolder" type="submit" value="Save">
		</form>
	</div>

	<div id="deletedialog" title="Delete" style="display: none;">
		<form action="	" method="get">
			<p>Are you sure to delete ? </p>
			<input id="delete" type="submit" value="Yes">
			<input id="cancel" type="submit" value="No">
		</form>
	</div>

	<!-- Custom Context Menu -->
	<ul class="contextmenu" id="FileMenu" style="display: none">
		<li> <a href="#" id="cut">Cut</a></li>
		<li> <a href="#" id="del">Delete</a></li>
		<li> <a href="#" id="update">Update</a></li>
		<li> <a href="#" id="rename">Rename</a></li>
	</ul>
	<ul class="contextmenu" id="FolderMenu" style="display: none">
		<li> <a href="#" id="paste">Paste</a></li>
		<li> <a href="#" id="newFile">New File</a></li>
		<li> <a href="#" id="newFolder">New Folder</a></li>
	</ul>
	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/jquery.js')!!}
	{!!Html::script('js/jquery-ui.js')!!}
	{!!Html::script('js/main.js')!!}
	{!!Html::script('js/jquery.cookie.js')!!}

</html>