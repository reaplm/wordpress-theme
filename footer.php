		<div class="footer">
			<div class="row">	
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4 col-sm-6" >

						
						<?php 
							if(is_active_sidebar('footer-1')):dynamic_sidebar('footer-1');
							endif;
						?>
				
					
				</div>
				<div class="col-lg-4 col-sm-6 centered-container">
					<div class="contact-me">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/mail.png"/> pdm.molefe@gmail.com<br />
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/smartphone.png" class="d-inline"/> +267 71406569<br />
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/placeholder.png"/> Gaborone, Botswana<br />
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/skype.png"/> pearl.molefe<br />
						
					</div>
				</div>
				<div class="col-lg-2">
					
				</div>
			
			<br>
			
		</div>
		<div class="card footer-footer">
				<p>&copy;  Pearl Molefe 2018</p>
			</div>
		<?php wp_footer(); ?>
	</body>
</html>