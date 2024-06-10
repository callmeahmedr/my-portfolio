<?php 
    $title = "Favorite Tourist Spots";
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
            <!-- Eiffel Tower Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg/360px-Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg" class="card-img-top" alt="Eiffel Tower">
                    <div class="card-body">
                        <h5 class="card-title">Eiffel Tower</h5>
                        <p class="card-text">The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is one of the most recognizable structures in the world and a global cultural icon of France. Built for the 1889 World's Fair, it stands at 324 meters (1,063 feet) tall.</p>
                    </div>
                </div>
            </div>
            <!-- Colosseum Card -->
            <div class="col-md-4 mb-2" >
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Colosseo_2020.jpg/270px-Colosseo_2020.jpg" class="card-img-top" alt="Colosseum">
                    <div class="card-body">
                        <h5 class="card-title">Colosseum</h5>
                        <p class="card-text">The Colosseum is an ancient amphitheater in the center of Rome, Italy. It is the largest ancient amphitheater ever built, and is still the largest standing amphitheater in the world today. Constructed in AD 70–80, it could hold 50,000 to 80,000 spectators.</p>
                    </div>
                </div>
            </div>
            <!-- Bora Bora Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Bora_Bora_ISS006.jpg/260px-Bora_Bora_ISS006.jpg" class="card-img-top" alt="Bora Bora">
                    <div class="card-body">
                        <h5 class="card-title">Bora Bora</h5>
                        <p class="card-text">Bora Bora is a small South Pacific island northwest of Tahiti in French Polynesia. Surrounded by sand-fringed islets and a turquoise lagoon protected by a coral reef, it is known for its luxury resorts and scuba diving. The island is a popular tourist destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include('includes/footer.php');
?>