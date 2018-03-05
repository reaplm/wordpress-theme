		<div class="footer">
			<div class="row">	
				<div class="col-sm-2 d-flex  align-items-center justify-content-center social-links">
				</div>
				<div class="col-sm-4" >

						
						<?php 
							if(is_active_sidebar('footer-1')):dynamic_sidebar('footer-1');
							endif;
						?>
				
					
				</div>
				<div class="col-sm-4 centered-container">
					<div class="contact-me">
						<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/mail.png"/> pdm.molefe@gmail.com</h3>
						<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/smartphone.png" class="d-inline"/> +267 71406569</h3>
						<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/placeholder.png"/> Gaborone, Botswana</h3>
						<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>
							/assets/images/skype.png"/> pearl.molefe</h3>
						
					</div>
				</div>
				<div class="col-sm-2 d-flex  ">
					
				</div>
			
			<br>
			
		</div>
		<div class="card footer-footer">
				<p>&copy;  Pearl Molefe 2017</p>
			</div>
		<?php wp_footer(); ?>
	</body>
</html>