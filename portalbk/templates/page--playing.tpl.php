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

					<?php if (($title)&&(!$is_front)): ?>
					 <h1 class="title" id="page-title">
						 <?php print $title; ?>
					 </h1>
				 <?php endif; ?>

					 <?php
						try {
					    //$hostname = "10.0.1.252";
							$hostname = "131.255.239.38:3061";
					    $port = 3306;
					    $dbname = "logs_final";
					    $username = "portal";
					    $pw = "p@rt4l";
					    $dbo = new PDO ("mysql:host=$hostname;port=$port;dbname=$dbname","$username","$pw");
					  } catch (PDOException $e) {
					    echo "Failed to get DB handle: " . $e->getMessage();
					    exit;
					  }

						$rede = 'burgerking';
		  			$loja = 'bkf_mtfortatacadista';

						if( isset($_GET['data']) ){
					    $data = $_GET['data'];
					    $data_query = "and data like '{$data}'";
					  } else {
					    $data_query = "";
					  }

						$query = $dbo->query("SELECT arquivo, data, count(*) from audiencia where loja like '{$loja}' and tipo like 'comercial' {$data_query} group by arquivo ,data ,loja ORDER BY DATA desc LIMIT 50");


	?>

	<?php
			$query_dates = $dbo->query("SELECT DISTINCT data from audiencia where loja like '{$loja}' ORDER BY data DESC");
	?>

	<form method="GET" action="/">
	  <input type="hidden" name="q" value="playing">
		<label>Filtrar por data: </label>
	  <select name="data">
		<?php
			while($row = $query_dates->fetch(PDO::FETCH_NUM)) {
				foreach( $row as $elem ){ ?>
						<option value="<?php echo $elem; ?>" <?php if(isset($_GET['data'])&&($data==$elem)){echo 'selected="selected"';}?>> <?php echo $elem ?> </option>
		<?php
				}
			}
		?>
		 </select>
		 <button class="btn" type="submit">Filtrar</button>
	</form>

	<table class="table">
		<thead>
			<tr>
		    <td>Arquivo</td>
		    <td>Data</td>
		    <td>Quantidade</td>
				<td>Solicitar Exclusão</td>
		  </tr>
		</thead>
		<tbody>
		<?php
			while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			  echo "<tr>";
			  foreach( $row as $elem ){
			    echo "<td>".$elem."</td>";
			  }
			  echo "
				<td><a class=\"email\" href=\"?q=content/excluir-conteúdo&arquivo=".$row['arquivo']."&loja=".$loja."\" target=\"_blank\">Por Email</a> <a class=\"wpp\" href=\"https://wa.me/5541999631609?text=Favor excluir o arquivo ''".$row['arquivo']."'' da programação da loja ".$loja."\" target=\"_blank\">Por Whatsapp</a></td></tr>
				";
			}
		?>
		</tbody>
	</table>



	</div><!-- container -->

</div><!-- principal -->

 <?php include "footer.tpl.php"; ?>

 <script>
 jQuery(document).ready(function(){
	 jQuery('.modal').on("click", "a", function (e) {
			var target = $(this).attr('href');
			$('.modal-body').html('');
			$('<iframe>').attr('src', target).appendTo($('.modal-body'));
			e.preventDefault();
	});
})

 </script>
