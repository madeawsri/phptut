<!-- Modal Zone -->
<div class="modal fade" id="formEditCustomer">
    <div class="modal-dialog">
        <form action="save.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Customer</h4>
                </div>
                <div class="modal-body">
                    <!-- Hidden Zone -->
                    <input type="hidden" name="id" id="id" value="">

                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <!--
                        <input type="text" id="country" name="country">
                        -->
                        <select id="country" name="country">
                            <?php
                            foreach ($country as $c) {
                            ?>
                            <option value="<?php echo $c['country_name']; ?>"><?php echo $c['country_name']; ?></option>
                            <?php
                            } // end foreach
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ip">IP Address</label>
                        <input type="text" id="ip" name="ip">
                    </div>

                </div><!--/.modal-body-->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" class="btn btn-primary" value="Save">
                </div><!--/.modal-footer-->
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>
