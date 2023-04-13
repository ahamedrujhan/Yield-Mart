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
    <button class=accept><i class="fa fa-check" aria-hidden="true"></i> Accept</button>
    &nbsp;
    <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>
    &nbsp;

    <div class="popup">
        <div class="popupContent">
            <img src="./images/close.png" alt="close" class="close">
            <p>First</p>


        </div>
    </div>
    <script>
        document.getElementById("f").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "flex";
        })
        document.querySelector(".close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        })
    </script>
</div>




<div class="requests">
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
        <button class=accept><i class="fa fa-check" aria-hidden="true"></i> Accept</button>
        &nbsp;
        <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>
        &nbsp;
    </div>

</div>