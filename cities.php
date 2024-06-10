<?php 
    $title = "Favorite Cities";
    include('includes/header.php');
?>

<div class="page_header">
    <div class="container">
        <h3>
            <small><a href="index.php">Home</a> /</small>
            <div class="display-4 fw-bold"> </div>
            <div class="display-4 fw-bold"><?=$title;?></div>
        </h3>
    </div>
</div>

<section class="px-4 py-5">
    <div class="container mt-5">
        <div class="row">
            <!-- Karachi Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Jinnah_Mausoleum_%28cropped%29.JPG/268px-Jinnah_Mausoleum_%28cropped%29.JPG" class="card-img-top" alt="Karachi">
                    <div class="card-body">
                        <h5 class="card-title">Karachi</h5>
                        <p class="card-text">Karachi is the largest city in Pakistan and the capital of the Sindh province. It is known for its vibrant culture, diverse population, and significant economic importance as the main financial hub of the country. Karachi also boasts major seaports and is a center for commerce and industry.</p>
                    </div>
                </div>
            </div>
            <!-- Kashmir Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Pahalgam_Valley.jpg/220px-Pahalgam_Valley.jpg" class="card-img-top" alt="Kashmir">
                    <div class="card-body">
                        <h5 class="card-title">Kashmir</h5>
                        <p class="card-text">Kashmir is a region in South Asia, known for its stunning natural beauty, including mountains, lakes, and valleys. It is a disputed territory between India and Pakistan, each administering parts of it. The region is famed for its cultural heritage, handicrafts, and picturesque landscapes.</p>
                    </div>
                </div>
            </div>
            <!-- Quetta Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Quetta_cantt.jpg/268px-Quetta_cantt.jpg" class="card-img-top" alt="Quetta">
                    <div class="card-body">
                        <h5 class="card-title">Quetta</h5>
                        <p class="card-text">Quetta is the capital city of the Balochistan province in Pakistan. It is known as the "Fruit Garden of Pakistan" due to the variety of fruits grown in and around the region. Quetta has a rich history and serves as a major commercial and cultural center in the province.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include('includes/footer.php');
?>