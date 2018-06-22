<!-- section -->
<section class="box teams" id="teams">
    <div class="container">
		<header>
			<h2 class="tim">Meet Our Core Team</h2>
		</header>
		<div class="box-content">
			<h3 class="subTitle">A DIVERSE, WELL ROUNDED GROUP</h3>
			<?php 
				$q = getQueryArgs('ct_team_person', $tax_query=['taxonomy' => 'ct_teams', 'termSlug' => 'team']);
				if ( $q->have_posts() ) {
					$pos=1;	
					$df = 1;	
					while ( $q->have_posts() ) : $q->the_post();
						if($pos == 1) {
							echo '<ul class="row listItem">';
							$dfOpen = 'open';
							$dfActive = 'active';
							$dfId = get_the_ID();
							$dfContent = get_the_content();
						} else {
							$dfOpen = '';
							$dfActive = '';							
						}
						require ('loop.php');
						
						if($pos%3 == 0) {
							echo '</ul>'; 
							if($df == 1) {
								// df
								echo "<div id='core-team-item-div' data-ref='" . $dfId . "' class='core-team-item-div'>" . $dfContent . "</div>";
								$df++;
							}
							echo '<ul class="row listItem">';
						}
					$pos++;	
					endwhile;
					echo '</ul>';
					
				} // end have_posts()
			?>             
			<h3 class="subTitle">BACKED BY WORLD CLASS ADVISORS</h3>        
			<?php 
				$q = getQueryArgs('ct_team_person', $tax_query=['taxonomy' => 'ct_teams', 'termSlug' => 'advisors']);
				if ( $q->have_posts() ) {
					$pos=1;
					while ( $q->have_posts() ) : $q->the_post();
						if($pos == 1) {
							echo '<ul class="row listItem">';
						}					
						require ('loop.php');
						
						if($pos%3 == 0) {
							echo '</ul> <ul class="row listItem">';
						}
					$pos++;	
					endwhile;
					echo '</ul>';
					
				} // end have_posts()
			?>         
		</div>
    </div>
</section>