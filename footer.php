
		</div> <!-- end #container -->
			<footer role="contentinfo" class="container-fluid">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-4">
						<a href="https://www.facebook.com/pages/Shanes-Big-League/142633815754059" target="_blank" class="facebook-link"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" alt="Facebook"></a>
						<a href="http://www.yelp.com/biz/shanes-big-league-sports-cards-renton" target="_blank" class="yelp-link"><img src="<?php bloginfo('template_directory'); ?>/images/yelp-icon.png" alt="Yelp"></a>
						<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
						</div>

						<div class="col-sm-4">
							<h3>Mailing List</h3>
							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup" class="mail-list">
								<form action="//shanescards.us9.list-manage.com/subscribe/post?u=909310b6a5e186a43789e18ef&amp;id=f24e3a21cf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
								<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
								<div class="mc-field-group form-group">
									<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
								</label>
									<input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
								</div>
								<div class="mc-field-group form-group">
									<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
								</label>
									<input type="text" value="" name="LNAME" class="required form-control" id="mce-LNAME">
								</div>
								<div class="mc-field-group form-group">
									<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
								</label>
									<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
								</div>
								<div class="mc-field-group input-group checkbox">
								    <strong>What newsletter would you like to receive? </strong>
								    <ul><li><input type="checkbox" value="1" name="group[14881][1]" id="mce-group[14881]-14881-0"><label for="mce-group[14881]-14881-0">Magic: The Gathering</label></li>
								<li><input type="checkbox" value="2" name="group[14881][2]" id="mce-group[14881]-14881-1"><label for="mce-group[14881]-14881-1">Yu-gi-oh</label></li>
								<li><input type="checkbox" value="4" name="group[14881][4]" id="mce-group[14881]-14881-2"><label for="mce-group[14881]-14881-2">Pokemon TCG</label></li>
								<li><input type="checkbox" value="8" name="group[14881][8]" id="mce-group[14881]-14881-3"><label for="mce-group[14881]-14881-3">Card Fight Vanguard</label></li>
								<li><input type="checkbox" value="16" name="group[14881][16]" id="mce-group[14881]-14881-4"><label for="mce-group[14881]-14881-4">Sports</label></li>
								<li><input type="checkbox" value="32" name="group[14881][32]" id="mce-group[14881]-14881-5"><label for="mce-group[14881]-14881-5">Board Games</label></li>
								</ul>
								</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;"><input type="text" name="b_909310b6a5e186a43789e18ef_f24e3a21cf" tabindex="-1" value=""></div>
								    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default"></div>
								    </div>
								</form>
							</div>

							<!--End mc_embed_signup-->
							</div>
						<div class="col-sm-4">
							<nav class="clearfix footer-links">
								<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
							</nav>
						</div>
						<div class="clearfix"></div>
						<p class="mtg-disclaimer">Shanes Big League is not affiliated with, endorsed, sponsored, or specifically approved by Wizards of the Coast LLC. This website may use the trademarks and other intellectual property of Wizards of the Coast LLC, which is permitted under Wizards' Digital Marketing Asset Policy.MAGIC: THE GATHERING® is a trademark[s] of Wizards of the Coast. For more information about Wizards of the Coast or any of Wizards' trademarks or other intellectual property, please visit their website at www.wizards.com</p>
					</div> <!-- end row -->
				</div> <!-- end footer container -->

			</footer> <!-- end footer -->

		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); // js scripts are inserted using this function ?>

		<!-- remove this for production -->

		<script src="//localhost:35729/livereload.js"></script>
		<script>
		$('.carousel').carousel({
        interval: 3000
    })

		</script>
	</body>

</html>
