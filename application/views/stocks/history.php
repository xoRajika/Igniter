        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>    
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                            <form method="post" action="saveReadings">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Reading</th>
                                            <th>Current stock</th>
                                            <th>Order</th>
                                            <!-- <th></th> -->
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
//                                            var_dump($data);
                                            foreach ($dataPetrol->result() as $row):
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->reading; ?></td>
                                            <td><?php echo $row->stock; ?></td>
                                            <td class="center"><?php echo $row->order_amount; ?></td>
                                            <!-- <td><input type="button" class="btn btn-success" value="Edit"></td> -->
                                            <!-- <td><input type="button" class="btn btn-danger" value="Remove"></td> -->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="dataTable_wrapper">
                            <form method="post" action="saveReadings">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Reading</th>
                                            <th>Current stock</th>
                                            <th>Order</th>
                                            <!-- <th></th> -->
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
//                                            var_dump($data);
                                            foreach ($dataDiesel->result() as $row):
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->reading; ?></td>
                                            <td><?php echo $row->stock; ?></td>
                                            <td class="center"><?php echo $row->order_amount; ?></td>
                                            <!-- <td><input type="button" class="btn btn-success" value="Edit"></td> -->
                                            <!-- <td><input type="button" class="btn btn-danger" value="Remove"></td> -->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </form>
        </div>