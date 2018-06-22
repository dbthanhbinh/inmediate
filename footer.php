	
		<footer class="box page-footer">
            <header>
                <h2>Connect with us</h2>
                <p>Subscribe to our newsletter and stay up to date!</p>
            </header>
            <div class="box-content">
                <div class="input-group mb-3 subscribe">
                    <!-- <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">SUBSCRIBE</button>
                    </div> -->
                    <?php 
                    // get_template_part( 'template-parts/subscribe/content', 'sub' );
                    ?>
                    <link href="https://d1gwclp1pmzk26.cloudfront.net/agile/forms/v1/agile-form-min.css" rel="stylesheet">
                        <form class="form-view theme2" id="agile-form" action="https://inmediate.agilecrm.com/formsubmit" style="max-width:450px;" method="GET">
                        <fieldset>

                        <!-- Form Name -->
                        <legend class="agile-hide-formname">Subscribe Now</legend>
                        <p class="agile-form-description"></p>
                        <div style="display: none; height: 0px; width: 0px;">
                        <input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Subscribe Now">
                        <input type="hidden" id="_agile_domain" name="_agile_domain" value="inmediate">
                        <input type="hidden" id="_agile_api" name="_agile_api" value="ffqf8cnb15p5dp2a9k7fsvn1ig">
                        <input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="#">
                        <input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
                        <input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="Thank you for subscribing to our newsletter! ">
                        <input type="hidden" id="_agile_form_id_tags" name="tags" value="">

                        <input type="hidden" id="_agile_form_id" name="_agile_form_id" value="5762637883244544">
                        </div>
                        <!-- Text input-->
                        <input maxlength="250" id="agilefield-2" name="email" type="email" placeholder="Email address" class="required email form-control" required="">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">SUBSCRIBE</button>
                        </div>
                        <span id="agile-error-msg"></span>
                        <!--recaptcha aglignment-->
                        </fieldset>
                        </form>
                        <script type="text/javascript">
                        (function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
                        </script>

                </div>
                <?php 
                    // get_template_part( 'template-parts/subscribe/content', 'sub' );
                ?>
                <dl>
                    <dt>Address:</dt>
                    <dd>Oxley Biz Hub 1 #03-65,65 Ubi Road 1,<br>Singapore 408729</dd>
                    <dt>Email:</dt>
                    <dd>contact@inmediate.io</dd>
                </dl>
                <div class="row justify-content-md-center">
                    <div class="col col-lg-3">
                        <a class="underline" target="_blank" href="https://t.me/inmediate">View inmediate.co</a>
                    </div>
                    <div class="col col-lg-3">
                        <a class="underline" target="_blank" href="<?= site_url()?>/newsletter">View our newsletters</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-12">
                            <div class="groupsIcon">
                                <a target="_blank" href="https://inmediate.io/Terms_and_Conditions.pdf">
                                    <span class="icon icon01">Terms and Conditions</span>
                                </a>
                                <a target="_blank" href="https://inmediate.io/Inmediate_Privacy_Policy.pdf">
                                    <span class="icon icon01">Privacy Policy</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <p>Copyright @ Inmediate 2018. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	</div>
	
	<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
    
	<!-- faq -->
	<?php if(is_page( 'faqs' )): ?>
	<script src="<?= get_template_directory_uri() ?>/assets/js/faq.js" type="text/javascript" ></script>
	<?php endif ?>
	
    <?php wp_footer(); ?>    
	</body>
</html>