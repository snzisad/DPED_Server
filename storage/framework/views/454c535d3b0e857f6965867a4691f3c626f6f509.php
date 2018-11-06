<?php $__env->startSection('title',$name->folder); ?>

<?php $__env->startSection('body'); ?>
	<?php echo Form::open(["route"=>['dped.show',5],"method"=>"GET"]); ?>

	<?php echo Form::close(); ?>

	<div class="container" id="<?php echo e($name->folderID); ?>" oncontextmenu="return false;">
		<div class="data" >
		<table class="table">
			<?php 
				$f=count($folders);
				$n=$f+count($files); 
			?>
			<?php for($i=0;$i<$n;$i=$i+3): ?>
			<tr>
				<?php if($i<$f): ?>
					<td>
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/folders.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(route('dped.show',$folders[$i]->folderID)); ?>" class="title"  id="<?php echo e($folders[$i]->folderID); ?>" name="<?php echo e($folders[$i]->folder); ?>" type="folder"><?php echo $folders[$i]->folder; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php else: ?>
					<td>
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/files.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(url('view',$files[$i-$f]->fileID)); ?>" class="title" id="<?php echo e($files[$i-$f]->fileID); ?>" name="<?php echo e($files[$i-$f]->file); ?>" type="file"><?php echo $files[$i-$f]->file; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php endif; ?>

				<?php if($i+1<$f): ?>
					<td>
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/folders.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(route('dped.show',$folders[$i+1]->folderID)); ?>" class="title" id="<?php echo e($folders[$i+1]->folderID); ?>" name="<?php echo e($folders[$i+1]->folder); ?>" type="folder"><?php echo $folders[$i+1]->folder; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php elseif(!empty($files[$i-$f+1])): ?>
					<td>
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/files.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(url('view',$files[$i-$f+1]->fileID)); ?>" class="title" id="<?php echo e($files[$i-$f+1]->fileID); ?>" name="<?php echo e($files[$i-$f+1]->file); ?>" type="file"><?php echo $files[$i-$f+1]->file; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php endif; ?>

				<?php if($i+2<$f): ?>
					<td>
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/folders.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(route('dped.show',$folders[$i+2]->folderID)); ?>" class="title" id="<?php echo e($folders[$i+2]->folderID); ?>" name="<?php echo e($folders[$i+2]->folder); ?>" type="folder"><?php echo $folders[$i+2]->folder; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php elseif(!empty($files[$i-$f+2])): ?>
					<td class="menu">
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/files.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(url('view',$files[$i-$f+2]->fileID)); ?>" class="title" id="<?php echo e($files[$i-$f+2]->fileID); ?>" name="<?php echo e($files[$i-$f+2]->file); ?>" type="file"><?php echo $files[$i-$f+2]->file; ?></a>
							</td>
						</tr>
					</table>
					</td>
				<?php endif; ?>
			</tr>
			<?php endfor; ?>
		</table>
		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('model.model', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>