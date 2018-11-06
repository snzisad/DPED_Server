<!DOCTYPE html>
<html>
	<head>
		<title>DPED Moblie Application</title>
		<?php echo Html::style('css/main.css'); ?>

		<?php echo Html::style('css/jquery-ui.css'); ?> 
	</head>
	<body oncontextmenu="return false;">
		<div class="header"><?php echo $__env->yieldContent('title'); ?></div>
		<br>
		<?php if(count($errors) > 0): ?>
			<div class="modalContainer">
				<div class="modalOverlay"></div>
				<div class="customModal">
				<div class="modalTitle">
					Sorry, there are some errors.

					<div class="crossBtn" id='hideModalBtn'>X</div>
				</div>
				<div class="modalBody">
					<ul class='modalUL'>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($e); ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
			</div>
			
		<?php endif; ?>
		<?php echo $__env->yieldContent('body'); ?>
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
		<form id="fileuploadform" action="<?php echo e(route('fileUpload')); ?>" enctype="multipart/form-data" method="post">
		 <?php echo e(csrf_field()); ?>

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
		<form id="fileupdateform" action="<?php echo e(route('fileUpdate')); ?>" enctype="multipart/form-data" method="post">
		 <?php echo e(csrf_field()); ?>

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
	<?php echo Html::script('js/jquery.min.js'); ?>

	<?php echo Html::script('js/jquery.js'); ?>

	<?php echo Html::script('js/jquery-ui.js'); ?>

	<?php echo Html::script('js/main.js'); ?>

	<?php echo Html::script('js/jquery.cookie.js'); ?>


</html>