	
		<footer class="box page-footer">
            <header>
                <h2>Connect with us</h2>
                <p>Subscribe to our newsletter and stay up to date!</p>
            </header>
            <div class="box-content">
                <div class="input-group mb-3">
                    <!-- <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">SUBSCRIBE</button>
                    </div> -->
                    <?php 
                    get_template_part( 'template-parts/faq/content', 'faq' );
                    ?>

                </div>
                <?php 
                    get_template_part( 'template-parts/subscribe/content', 'sub' );
                ?>
                <dl>
                    <dt>Address:</dt>
                    <dd>Oxley Biz Hub 1 #03-65,65 Ubi Road 1,<br>Singapore 408729</dd>
                    <dt>Email:</dt>
                    <dd>contact@inmediate.io</dd>
                </dl>
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <a class="underline" href="https://t.me/inmediate">View inmediate.io</a>
                    </div>
                    <div class="col-lg-5">
                        <a class="underline" href="<?= site_url()?>/newsletter">View our newsletters</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-12">
                        <div class="groupsIcon">
                            <a href="<?= site_url()?>/download-attachment/4040">
                                <span class="icon icon01">Terms and Conditions</span>
                            </a>
                            <a href="<?= site_url()?>/download-attachment/4041">
                                <span class="icon icon01">Privacy Policy</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <p>Copyright @ Inmediate 2018. All rights reserved.</p>
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