		<h1> <?php echo $pageData['title'] ?></h1>
		<div class="task-item">
			Task:<br>
			<?php echo $pageData['description'] ?>
		</div>
			<div class="task-item">
				Input:<br>
				<?php echo $pageData['inputData'] ?>
			</div>
			<div class="task-item">
				Output:<br>
				<pre> <?php print_r($pageData['result']) ?> </pre>
			</div>
			<div class="task-item">
				Code:<br>
			</div>
		</div>