		<div class="wrap">
		<div class="Header"><h2><?php _e("Ultimate FAQ Settings", 'ultimate-faqs') ?></h2></div>

		
		<?php if ($UFAQ_Full_Version != "Yes" or get_option("EWD_UFAQ_Trial_Happening") == "Yes") { ?>
			<div class="ewd-ufaq-dashboard-new-upgrade-banner">
				<div class="ewd-ufaq-dashboard-banner-icon"></div>
				<div class="ewd-ufaq-dashboard-banner-buttons">
					<a class="ewd-ufaq-dashboard-new-upgrade-button" href="http://www.etoilewebdesign.com/plugins/ultimate-faq/#buy" target="_blank">UPGRADE NOW</a>
					<?php if (!get_option("EWD_UFAQ_Trial_Happening")) { ?>
						<form method="post" action="edit.php?post_type=ufaq">
							<input name="Key" type="hidden" value='EWD Trial'>
							<input name="EWD_UFAQ_Upgrade_To_Full" type="hidden" value='EWD_UFAQ_Upgrade_To_Full'>
							<button class="ewd-ufaq-dashboard-new-upgrade-button ewd-ufaq-dashboard-new-trial-button">GET FREE 7-DAY TRIAL</button>
						</form>
					<?php } ?>
				</div>
				<div class="ewd-ufaq-dashboard-banner-text">
					<div class="ewd-ufaq-dashboard-banner-title">
						GET FULL ACCESS WITH OUR PREMIUM VERSION
					</div>
					<div class="ewd-ufaq-dashboard-banner-brief">
						Easily customize, administer and share your FAQs
					</div>
				</div>
			</div>
		<?php } ?>

		<?php EWD_UFAQ_Add_Header_Bar("Yes"); ?>
		