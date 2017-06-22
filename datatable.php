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
            <table class="table datatable" id='cj'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>IP Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<hr>
<?php
require 'footer.php';
?>
