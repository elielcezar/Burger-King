<?php include "header.tpl.php"; ?>

<div class="principal">

	<div class="container">


		<div class="row">


			<div class="col-sm-12">

				 <?php if ($messages): ?>
	          <div id="messages"><div class="section clearfix">
	            <?php print $messages; ?>
	          </div></div> <!-- /.section, /#messages -->
	          <?php endif; ?>

						<?php if (($title)&&(!$is_front)): ?>
 						 <h1 class="title" id="page-title">
 							 <?php print $title; ?>
 						 </h1>
 					 <?php endif; ?>

					 <div class="conteudo">
								 <?php print render($page['content']); ?>
							 </div>

	        </div>
	       
		</div>

	</div><!-- container -->
</div><!-- principal -->

 <?php include "footer.tpl.php"; ?>
