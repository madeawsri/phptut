<?php
/**
* Parses and verifies the doc comments for file.
*
* PHP version 5.6
*
* @category  PHP
*
* @package   PHPTUT
* @author    Teerapuch Kassakul <teerapuch@hotmail.com>
* @copyright 2016 Teerapuch
* @license   http://opensource.org/licenses/mit-license.php MIT License
* @link      http://teerapuch.com
*/
require 'header.php';
require 'connect.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Update Modal Bootstap</h1>
            <hr>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th></th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>IP Address</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
<?php
$i = 1;
foreach ($customer as $c) {
    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $c['first_name']; ?></td>
                        <td><?php echo $c['last_name']; ?></td>
                        <td><?php echo $c['email']; ?></td>
                        <td><?php echo $c['country']; ?></td>
                        <td><?php echo $c['ip_address']; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle"
                                    class="drop-edit" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="edit"
                                        data-id="<?php echo $c['id']; ?>"
                                        data-firstname="<?php
                                        echo $c['first_name']; ?>"
                                        data-lastname="<?php
                                        echo $c['last_name']; ?>"
                                        data-email="<?php echo $c['email']; ?>"
                                        data-country="<?php echo $c['country']; ?>"
                                        data-ip="<?php echo $c['ip_address']; ?>">
                                        Edit
                                        </a>
                                    </li>
                                    <li><a class="delete">Delete</a></li>
                                </ul>
                            </div><!-- /.dropdown -->
                        </td>
                    </tr>
    <?php
    ++$i;
} // end foreach
?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        // echo 'Email // '.$mail[0];
        // var_dump($mail);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>
<?php
require 'footer.php';
?>
