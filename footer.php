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
				<div class="col-sm-4 text-center">
					<div>
						<h2>Pearl Molefe</h2>
						<h2>pdm.molefe@gmail.com</h2>
						<h2>+267 71406569</h2>
						<h2>Gaborone</h2>
						
					</div>
					<br />
					<div class="social-links">
						<a href="#" >
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/twitter-logo-silhouette.png" 
								/> 
						</a>
						
						<a href="#">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/facebook-logo_1.png"/> 
						</a>
						
						<a href="https://linkedin.com/in/pearl-m/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/linkedin.png"/> 
						</a>
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