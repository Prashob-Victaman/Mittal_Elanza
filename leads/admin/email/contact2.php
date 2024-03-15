<?php session_start(); ?>
<!DOCTYPE html>

<?php
include '../db.php';
?>
<?php

if (!isset($_SESSION['username'])) {
    include 'index.php';
} else {
//    $delar_id = $_GET['id'];
    ?>
    <html>
        <head>
            <?php include './header.php'; ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!--                    <div class="user-panel">
                                            <div class="pull-left image">
                                                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                            </div>
                                            <div class="pull-left info">
                                                <p>Hello, Jane</p>
                    
                                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                            </div>
                                        </div>-->
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="../home.php">
                                <i class="fa fa-dashboard"></i> <span>Managing Finances</span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="pages/widgets.html">
                                                        <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                                                    </a>
                                                </li>-->
                        <!--                        <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                        <span>Charts</span>
                                                        <i class="fa fa-angle-left pull-right"></i>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                                        <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                                        <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                                                    </ul>
                                                </li>-->
                        <!--                        <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-laptop"></i>
                                                        <span>UI Elements</span>
                                                        <i class="fa fa-angle-left pull-right"></i>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                                        <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                                        <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                                        <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                                        <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                                                    </ul>
                                                </li>-->
                       
                      
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Managing Finances Webinar EQ</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
    <!--                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>-->
                              <!--  <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>leads2</a></li>-->

                            </ul>
                        </li>
                        
                        
                        <!--                        <li>
                                                    <a href="pages/calendar.html">
                                                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                                                        <small class="badge pull-right bg-red">3</small>
                                                    </a>
                                                </li>-->
                        <!--                        <li>
                                                    <a href="pages/mailbox.html">
                                                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                                        <small class="badge pull-right bg-yellow">12</small>
                                                    </a>
                                                </li>-->
                        <!--                        <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-folder"></i> <span>Examples</span>
                                                        <i class="fa fa-angle-left pull-right"></i>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                                        <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                                        <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                                        <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                                        <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                                        <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                                                    </ul>
                                                </li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Managing Finances Webinar enquiry
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active"> Managing Finances Webinar enquiry</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                   <!--  <a href="../email/contactdownload.php"  style="margin-left: 90%;background-color: #a17f46;color: #fff;padding:4px;">Download</a>-->
                          <br></br>
                    <div class="row">              
                        <div class="box col-xs-6">
                            <!--select form start-->

                            <!--select form end -->
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>designation</th>
                                            <th>organisation</th>
                                            <th>organisationurl</th>
                                            <th>people</th>
                                            <th>mobile</th>
                                            <th>email</th>
                                            <th>startup</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        
                                       $sql = "select * from eq";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
  

                                            echo " <tr><td>";
                                            echo $name = $row['name'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $desg = $row['designation'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $org = $row['organisation'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $url = $row['organisationurl'];
                                            echo"</td>";
                                            echo "<td>";
                                            echo $ppl = $row['people'];
                                            echo"</td>";
                                            echo "<td>";
                                            echo $tel = $row['mobile'];
                                            echo"</td>";
                                            	echo "<td>";
                                            echo $email = $row['email'];
                                            echo"</td>";
                                            echo "<td>";
                                            echo $start = $row['startup'];
                                            echo"</td>";
                                            echo "<td>";
                                            echo $start = $row['date'];
                                            echo"</td>";
                                            echo "</tr>";
                                        }
}
                                        ?>


                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </section>

                <!--find dealers-->



                <!-- /.content -->
            </aside><!-- /.right-side -->


        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="../js/menu.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
    </html>
<?php }
?>