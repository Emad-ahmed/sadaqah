<?php include 'navbar.php' ?>
<link rel="stylesheet" href="css/zakat.css">


<style>
    .readzakat:hover
        {
           color:black !important;
        }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5">
        <h1 class="zakath1">Zakat Calculator</h1>
        <p>Enter your details below to calculate your zakat:</p>
        <form>
            <label for="gold">Value of Gold (in grams):</label>
            <input type="number" id="gold" name="gold" placeholder="₤" class="form-control"><br><br>
            <label for="silver">Value of Silver (in grams):</label>
            <input type="number" id="silver" name="silver" placeholder="₤" class="form-control"><br><br>
            <label for="savings">Savings/Investments (in your local currency):</label>
            <input type="number" id="savings" name="savings" placeholder="₤" class="form-control"><br><br>
            <label for="debt">Total Debt (in your local currency):</label>
            <input type="number" id="debt" name="debt" placeholder="₤" class="form-control"><br><br>
            <button type="button" class="calculatezakat" onclick="calculateZakat()">Calculate Zakat</button><br><br>
            <label for="zakat">Zakat Owed (in your local currency):</label>
            <input type="number" id="zakat" name="zakat" placeholder="₤" class="form-control readzakat p-3" readonly><br><br>
        </form>

        </div>
        <div class="col-lg-1 mobileview">
           

        </div>
        <div class="col-lg-5 hotline">
            <p class="donationhotline">Donation Hotline</p>
            <h4>+44 7967 620120</h4>
            <hr>
            <p class="nisab">Current Value of Nisab</p>
            <h5>Gold <span class="fw-bolder">£3716.76</span> Silver <span class="fw-bolder">£357.2</span></h5>
            <a href="aboutzakat.php" class="readzakat">Read More About Zakat</a>
        </div>
    </div>
</div>



<script src="js/zakat.js"></script>
<?php include 'footer.php' ?>