<?php include "header.tpl.php"; ?>


<div class="principal">
	<div class="container">

			<?php if ($messages): ?>
	          <div id="messages"><div class="section clearfix">
	            <?php print $messages; ?>
	          </div></div> <!-- /.section, /#messages -->
	          <?php endif; ?>
	          <?php if ($tabs): ?>
	            <div class="tabs">
	              <?php print render($tabs); ?>
	            </div>
	        <?php endif; ?>


					<div class="conteudo">
			          <?php print render($page['content']); ?>
			     </div>


	</div><!-- container -->

</div><!-- principal -->

 <?php include "footer.tpl.php"; ?>
