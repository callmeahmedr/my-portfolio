<?php 
    $title = "Favorite Personalities";
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
            <!-- Imran Khan Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Imran_Khan_WEF_2020.jpg/220px-Imran_Khan_WEF_2020.jpg" class="card-img-top" alt="Imran Khan">
                    <div class="card-body">
                        <h5 class="card-title">Imran Khan</h5>
                        <p class="card-text">Imran Khan is a Pakistani politician and former cricketer who served as the 22nd Prime Minister of Pakistan from 2018 to 2022. He founded the political party Pakistan Tehreek-e-Insaf (PTI) in 1996. Before his political career, Khan was an acclaimed cricketer, captaining Pakistan to their first World Cup victory in 1992.</p>
                    </div>
                </div>
            </div>
            <!-- Felix Kjellberg Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pewdiepie_head_shot.jpg/250px-Pewdiepie_head_shot.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Felix Kjellberg</h5>
                        <p class="card-text">Felix Kjellberg, better known as PewDiePie, is a Swedish YouTuber and content creator who gained immense popularity for his Let's Play videos and comedic formatted shows. Starting his channel in 2010, PewDiePie became one of the most subscribed and viewed channels on YouTube, known for his energetic and humorous commentary on video games.</p>
                    </div>
                </div>
            </div>
            <!-- Linus Sebastian Card -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Linus_Sebastian_at_LTX_2023_%28cropped%29.jpg/220px-Linus_Sebastian_at_LTX_2023_%28cropped%29.jpg" class="card-img-top" alt="Linus Sebastian">
                    <div class="card-body">
                        <h5 class="card-title">Linus Sebastian</h5>
                        <p class="card-text">Linus Sebastian is a Canadian YouTuber, presenter, and producer, best known for creating and hosting the YouTube channel Linus Tech Tips (LTT). He provides technology reviews, unboxings, and various computer build guides. His channel is one of the most influential in the tech space, helping consumers make informed decisions about technology products.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include('includes/footer.php');
?>