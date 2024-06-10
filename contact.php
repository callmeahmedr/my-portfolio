<?php
$title = "Contact";
include( 'includes/header.php' );

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name = htmlspecialchars( strip_tags( trim( $_POST["name"] ) ) );
    $email = htmlspecialchars( strip_tags( trim( $_POST["email"] ) ) );
    $message = htmlspecialchars( strip_tags( trim( $_POST["message"] ) ) );

    $to = "ahmed@etarbiyat.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if ( mail( $to, $subject, $body, $headers ) ) {
        echo '
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Form Submitted Successfully",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
        ';
    } else {
        echo '
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Error Submitting Form",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
        ';
    }
}
?>

<div class="page_header">
    <div class="container">
        <h3>
            <small><a href="index.php">Home</a> /</small>
            <div class="display-4 fw-bold"> </div>
            <div class="display-4 fw-bold"><?=$title; ?></div>
        </h3>
    </div>
</div>

<section class="px-4 py-5">
    <div class="container mt-5">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</section>

<?php
include( 'includes/footer.php' );
?>