<html>

<head></head>
<style>
    #popup {
        display: none;
    }

    .popup-container {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: rgb(96 95 127 / 75%);
        position: absolute;
        top: 0;
        left: 0;

    }

    .popup {
        background-color: #ffffff;
        padding: 20px 30px;
        width: 40%;
        border-radius: 15px;

    }

    .close-popup {
        display: flex;
        justify-content: flex-end;
    }

    .close-popup a {
        font-size: 1.2rem;
        background-color: rebeccapurple;
        color: #fff;
        padding: 5px 10px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 10px;
        display: inline-block;
    }

    .popup>h2 {
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .popup>p {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .req {
        font-size: 2rem;
    }

    #quantity {
        width: auto;
        height: 2.5rem;

    }

    input[name="que"] {
        width: 20%;
        border: 2px solid #aaa;
        border-radius: 4px;
        margin: 8px 0;
        outline: none;
        padding: 8px;
        box-sizing: border-box;
        transition: .3s;
    }
</style>
<button id="clickBtn">Click meeeee....</button>
<div id="popup">
    <div class="popup-container">
        <div class="popup">
            <div class="close-popup" id="closeBtn">
                <a href="#">X</a>
            </div>
            <h1 class="req">Update</h1>
            <p>
                <img id='img-popup' src="" alt="">
            <h3 id='stock_name'></h3>
            <p id='quantity'>
            <h3>Quantity :&nbsp;
                <input type='number' name="que" placeholder='Quantity' id="qua"></p>
            </h3>
            </p>
            <button id="clickBtn" class="btn">Update</button>
        </div>
    </div>
</div>
<script>
    const clickBtn = document.getElementById("clickBtn");
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("closeBtn");

    clickBtn.addEventListener('click', () => {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';
    });
</script>

</html>