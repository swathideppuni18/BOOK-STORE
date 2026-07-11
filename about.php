<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="https://images.unsplash.com/photo-1612541831162-96d8fe7558f9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGJvb2slMjBjb3ZlcnxlbnwwfHwwfHx8MA%3D%3D" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         
         <p>Choosing us means opting for a seamless and efficient book management experience. Our user-friendly platform simplifies tracking, organizing, and managing your book collection, whether you're a reader, librarian, or bookstore owner. With advanced search and categorization features, finding books is quick and hassle-free. Our system ensures secure and reliable data storage, offering multi-user access for better collaboration. Stay updated with automated inventory tracking and real-time notifications, making book management effortless. Plus, our cloud-based access lets you manage your books from anywhere, on any device. Customizable features allow you to tailor the system to your specific needs, and our dedicated support team is always ready to assist. Let us help you streamline your book collection with ease and efficiency!</p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">
      <!-- First review -->
      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This book management system has completely transformed how I organize my collection. It's user-friendly, efficient, and saves me so much time! Highly recommended for book lovers and businesses alike!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>chris evan</h3>
      </div>

      <!-- Second review -->
      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>An exceptionally well-managed bookstore with a vast selection of books across all genres. The staff is knowledgeable and always ready to help, making the shopping experience smooth and enjoyable. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>mary jane</h3>
      </div>

      <!-- Third review -->
      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>This bookstore is a haven for book lovers! The management ensures that the latest titles are always in stock, and their seamless organization. customers always find what they need without hassle.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>dane jones</h3>
      </div>

      <!-- Fourth review (newly added) -->
      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>A well-maintained bookstore with an excellent book collection and a customer-friendly approach. Their online and offline inventory management is impressive, ensuring customers always find what they need without hassle. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>jane doe</h3>
      </div>

      <!-- Fifth review (newly added) -->
      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>A perfectly managed bookstore where efficiency meets passion. The staff is always welcoming, and the store layout is designed for easy browsing. Whether you're searching for classics or new arrivals, this store never disappoints!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>sumanth</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">
      <!-- First author -->
      <div class="box">
         <img src="https://static.wixstatic.com/media/46ccc2_a3062c765eee46dda40ea47dbede8431~mv2.jpeg/v1/fit/w_320,h_320,q_90/46ccc2_a3062c765eee46dda40ea47dbede8431~mv2.jpeg" alt="">
         
         <h3>Arvind Mehta </h3>
      </div>

      <!-- Second author -->
      <div class="box">
         <img src="https://t4.ftcdn.net/jpg/06/93/63/43/360_F_693634339_zDbJT57kRm6eO3X9YrWVAMF1iKXEWPxW.jpg" alt="">
         
         <h3>Meera Sharma</h3>
      </div>

      <!-- Third author -->
      <div class="box">
         <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg" alt="">
         
         <h3>bob martin</h3>
      </div>

      <!-- Fourth author (newly added) -->
      <div class="box">
         <img src="https://www.shutterstock.com/image-photo/close-head-shot-portrait-preppy-600nw-1433809418.jpg" alt="">
         
         <h3>Tara Thakur</h3>
      </div>

      <!-- Fifth author (newly added) -->
      <div class="box">
         <img src="https://media.istockphoto.com/id/1540766473/photo/young-adult-male-design-professional-smiles-for-camera.jpg?s=612x612&w=0&k=20&c=BbwgfMOtFOIJn1Km-ASix_EBbF9SHW5h0FtWbna5nFk=" alt="">
         
         <h3>surya patel</h3>
      </div>

      <!-- Sixth author (newly added) -->
      <div class="box">
         <img src="https://media.istockphoto.com/id/1320811419/photo/head-shot-portrait-of-confident-successful-smiling-indian-businesswoman.jpg?s=612x612&w=0&k=20&c=bCUTB8vd8MnzZFIq-x645-SmLNk2sQzOvOvWCPGDfZ4=" alt="">
         
         <h3>emily jones</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
