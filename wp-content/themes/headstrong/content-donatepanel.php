
   
   <div class="row donateFlags">
	   
	   <div class="col-xs-6 col-md-2">
		   
		   <div class="donatePenant">
			   
			   <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_1', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_1', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_1', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_1', true); ?></a>
		   </div>
		   
	   </div>
	   
	   <div class="col-xs-6 col-md-2">
		   
		   <div class="donatePenant">
			   
			   <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_2', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_2', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_2', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_2', true); ?></a>
		   </div>
		   
	   </div>
	   
	   <div class="col-xs-6 col-md-2">
		   <div class="donatePenant">
			   
			   <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_3', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_3', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_3', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_3', true); ?></a>
		   </div>
	   </div>
	   
	   <div class="col-xs-6 col-md-2">
		   
		   <div class="donatePenant">
			   
			   <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_4', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_4', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_4', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_4', true); ?></a>
		   </div>
		   
	   </div>
	   
	    <div class="col-xs-6 col-md-2">
		   
		   <div class="donatePenant">
			   
			    <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_5', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_5', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
   			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_5', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_5', true); ?></a>

		   </div>
		   
	   </div>
	   
	   <div class="col-xs-6 col-md-2">
		   
		   <div class="donatePenant">
			   
			    <div class="penantBody equal-height" data-heightGroup="donatePenants">
				   
				   <h4>$<?php echo get_post_meta($post->ID, 'donate_amount_6', true); ?></h4>
				   
				   <p><?php echo get_post_meta($post->ID, 'donate_text_6', true); ?></p>
				   
			   </div>
			   
			   <img src="<?php bloginfo('template_url'); ?>/img/pointy.svg" alt="" class="justTheTip" />
   			   <a class="blockLink" href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=<?php echo get_post_meta($post->ID, 'donate_amount_6', true); ?>">Donate $<?php echo get_post_meta($post->ID, 'donate_amount_6', true); ?></a>
			   
		   </div>
		   
	   </div>
	   
	   
   </div>
   
   <div class="row customDonate">
	   
   		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-align-panel">
	   		
	   			<form class="form-inline" method="get" action="https://www.stayclassy.org/checkout/donation?cid=8919&amount=">
		   			<input type="hidden" name="cid" value="8919" />
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			    <div class="input-group">
			      <div class="input-group-addon">$</div>
			      <input type="number" min="1" class="form-control input-lg" id="exampleInputAmount" name="amount" placeholder="Other amount">

			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary btn-lg">Donate now</button>
			</form>
	   
   		</div>
	   
   </div>
   
