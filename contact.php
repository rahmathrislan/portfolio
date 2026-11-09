<?php
$page_title = "Contact | M.R. Rahmath Rufaidh";
$status_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $log_data = "Date: " . date("Y-m-d H:i:s") . "\nName: $name\nEmail: $email\nMessage: $message\n-------------------------\n";
        file_put_contents('messages.txt', $log_data, FILE_APPEND);
        $status_msg = "Thank you! Your message has been successfully saved.";
    } else {
        $status_msg = "Please fill in all fields.";
    }
}

include 'header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Contact Me</h1>
        <p>Get in touch for professional web development inquiries or business collaborations.</p>
    </div>
</section>

<section class="section contact-section">
    <div class="container contact-grid">
        <div class="contact-info">
            <h2>Let's Build Your Web Project</h2>
            <p>Looking for a specialized web developer for your next digital platform or e-commerce store? Send a message directly through this form.</p>
            
                </div>
</section>

<?php include 'footer.php'; ?>