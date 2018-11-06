<?php $__env->startSection('title',"DPED Moblie Application"); ?>

<?php $__env->startSection('body'); ?>

	<form method="POST" action="<?php echo e(route('login')); ?>">
	<?php echo e(csrf_field()); ?>

	<div class="logincontainer">
		<div class="section"> 
			<div class="block">
				<?php echo Html::image('images/sir.png','Education Specialist',array('class'=>'icon','height'=>'100px','width'=>'100px')); ?>

			</div>
			<div class="block">
				<?php if($errors->any()): ?>
        			<div class="message"><font color="red">Sorry, You've typped a wrong secret number.</font></div>
				<?php else: ?>
					<div class="message">Dear Specialist, Please enter your secret number.</div>
				<?php endif; ?>
			</div>
		</div>
		<input type="hidden" name="email" value="snzisad@gmail.com">
		<?php echo Form::password('password',array('class'=>'edittext','id'=>'	password','required autofocus',"placeholder"=>"Enter Secret Number")); ?>


		<?php echo Form::submit('Login',$attributes=array('class'=>'loginbutton')); ?>

	</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('model.model', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>