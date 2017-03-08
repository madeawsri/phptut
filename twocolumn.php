<?php require 'header.php'; ?>
<?php require 'connect.php'; ?>
<div class="container">
    <h1>Table 2 Column in 1 row</h1>
    <table class="table">
        <?php foreach (array_chunk($customer, 2) as $row) { ?>
            <tr>
                <?php foreach ($row as $value) { ?>
                    <td>
                        <?php
                        echo $value['first_name'].' '.$value['last_name'];
                        ?>
                        <br>
                        <?php
                        echo $value['ip_address'];
                        ?>
                        <br>
                        <?php
                        echo $value['email'];
                        ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
/*
    <table class="table table-hover" id="bootstrap-table">
    <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
        <b><?php echo $row['id']; ?>.  </b>
        <b><?php echo $row['name']; ?><br></b>
        <div> Office : <?php echo $row['office']; ?><br>
        <div> Address : <?php echo $row['Address']; ?><br>
        <div> Country/City : <?php echo $row['Country']; ?>
        <?php echo $row['city']; ?><br></div>
        <div> Tel : <?php echo $row['Tel']; ?><br></div>
        <div> Fax : <?php echo $row['Fax']; ?><br></div>
        <div> Email Company : <?php echo $row['Email']; ?><br></div>
        <div> Website Company : <?php echo $row['Website']; ?><br></div>
        <div><h5><b>Personal Data</h5></b></h5>
        <div> Tel : <?php echo $row['Telephone_number']; ?><br></div>
        <div> Email : <?php echo $row['Email_Person']; ?><br><div>
        </div>
    </tr>
    <?php } ?>
    </form>
    </div>
</div>

*/
?>
<?php require 'footer.php'; ?>
