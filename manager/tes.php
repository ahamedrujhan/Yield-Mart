<?php
$selectRequests = mysqli_query($conn, $sqlRequestView);
if (mysqli_num_rows($selectRequests) > 0) {
    while ($row = mysqli_fetch_assoc($selectRequests)) {
?>


        <div class="requests">
            <div class="content">
                <p id=f>
                    &nbsp;Farmer Id: <?php echo $row['farmer_id']; ?>
                    <br>
                    &nbsp;Farmer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Stocks: <?php echo $row['stock_id']; ?>
                </p>
                <button class=accept><i class="fa fa-check" aria-hidden="true"></i> Accept</button>
                &nbsp;
                <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>
                &nbsp;
            </div>

        </div>
<?php

    }
} else {
    echo "<p>No Requests!!!!</p>";
}
?>









<div class="rejected">
    <h3>&nbsp;Rejected Orders</h3>
</div>
<br>
<div class="rejects">
    <div class="content">
        <p id=f>
            &nbsp;Farmer Id:
            <br>
            &nbsp;Farmer Name:
            <br>
            &nbsp;Total=
        </p>
        <p id=s>
            &nbsp;Stocks:
        </p>
        <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;

    </div>
    <div class="content">
        <p id=f>
            &nbsp;Farmer Id:
            <br>
            &nbsp;Farmer Name:
            <br>
            &nbsp;Total=
        </p>
        <p id=s>
            &nbsp;Stocks:
        </p>
        <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;

    </div>
</div>
<br>
<div class="fmconf">
    <h3>&nbsp;Waiting for Farmers Conformation </h3>
</div>
<br>
<div class="fmcon">
    <div class="content">
        <p id=f>
            &nbsp;Farmer Id:
            <br>
            &nbsp;Farmer Name:
            <br>
            &nbsp;Total=
        </p>
        <p id=s>
            &nbsp;Stocks:
        </p>
        <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;

    </div>
    <div class="content">
        <p id=f>
            &nbsp;Farmer Id:
            <br>
            &nbsp;Farmer Name:
            <br>
            &nbsp;Total=
        </p>
        <p id=s>
            &nbsp;Stocks:
        </p>
        <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;

    </div>
</div>
<br>