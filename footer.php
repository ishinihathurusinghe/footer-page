                <?php
                if(is_admin_login())
                {
                ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Library Management System <?php echo date('Y'); ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
                <?php
                }
                else
                {
                ?>
                <footer class="pt-3 mt-4 text-muted text-center border-top">
                    &copy; <?php echo date('Y'); ?>
                </footer>



                <div class="footer">
    <div class="card text-center">
        <div class="card-footer text-muted">
            &copy; &nbspDEVELOPED BY : <a href="https://github.com/ishinihathurusinghe" target="_blank" style="text-decoration: none;">Ishini Hathurusinghe</a> || 2022 May
        </div>
    </div>
</div>

       <p style="color:white;text-align: center;">
		<br>
		
		Mobile:&nbsp &nbsp 076 750 7263
	</p>


            </div>
        </main>
                <?php 
                }
                ?>

    	<script src="<?php echo base_url(); ?>asset/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>asset/js/scripts.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>asset/js/datatables-simple-demo.js"></script>

    </body>

</html>
