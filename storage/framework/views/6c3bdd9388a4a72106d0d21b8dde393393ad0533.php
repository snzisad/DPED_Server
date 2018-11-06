

<?php $__env->startSection('title','DPED Moblie Application'); ?>

<?php $__env->startSection('body'); ?>
	<?php echo Form::open(["route"=>"dped.index","method"=>"GET"]); ?>

	<?php echo Form::close(); ?>

	<div class="container" id="0" oncontextmenu="return false;">
		<div class="data">
		<table class="table">
			<?php
				$f=count($folders);
			?>		
			<script type="text/javascript">
				var folders = <?php echo $folders->toJSON(); ?>;
			</script>
			
			<?php for($i=0;$i<$f;$i=$i+3): ?>
			<tr>
				<td width="33.33%">
					<table>
						<tr>
							<td>
								<img src="<?php echo e(asset('images/folders.png')); ?>" height="50px" width="45px">
							</td>
							<td valign="center">
								<a href="<?php echo e(route('dped.show',$folders[$i]->folderID)); ?>" class="title" id="<?php echo e($folders[$i]->folderID); ?>" name="<?php echo e($folders[$i]->folder); ?>" type="folder"><?php echo $folders[$i]->folder; ?></a>
							</td>
						</tr>
					</table>
				</td>
					
				<?php if($i+1<$f): ?>
				<td width="33.33%">
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
				<?php endif; ?>

				<?php if($i+2<$f): ?>
				<td width="33.33%">
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
				<?php endif; ?>
			</tr>
			<?php endfor; ?>
		</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('model.model', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>