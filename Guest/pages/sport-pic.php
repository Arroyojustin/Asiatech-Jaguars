<?php
include('../../dbconn.php');

$sportsData = [];

// SQL query to fetch sport names and logo filenames from the database
$sql = "SELECT sport_name, logo FROM sports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through the result to fetch each sport's name and logo
    while ($row = $result->fetch_assoc()) {
        $logoFile = trim($row['logo']);
        
        // Correctly reference the Upload folder located in the root directory
        $logoPath = '../../Upload/' . $logoFile; // Adjust path to the correct location

        // Store the sport name and logo path in the sportsData array
        $sportsData[] = [
            'name' => $row['sport_name'],
            'src' => $logoPath // Store the correct relative path to the logo
        ];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tryout</title>
    <link rel="stylesheet" href="../../assets/css/guest css/img-slide.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid p-0 m-0" id="slider">
  <h3 class="text-center">Choose Your Sport</h3>
  
  <!-- Logo Container -->
  <div class="sport-logo-container">
    <i class='bx bxs-chevron-left arrow left' onclick="changeSlide(-1)"></i>
    <div class="logo-wrapper">
      <img src="" alt="Logo" class="logo-image" id="logoImage"> <!-- The logo image -->
      <p class="sport-name" id="sportName"></p> <!-- The sport name -->
    </div>
    <i class='bx bxs-chevron-right arrow right' onclick="changeSlide(1)"></i>
  </div>
  
  <!-- Button Group -->
  <div class="sport-button-container">
    <button class="btn btn-lg btn-success" onclick="goRegister()" id="registerBtn">Register</button>
    <button class="btn btn-lg btn-secondary" onclick="previewsP()" id="backBtn">Back</button>
  </div>
</div>

<script>
  // Fetch sports data from PHP and convert it to a JavaScript array
  const sportsData = <?php echo json_encode($sportsData); ?>;
  let currentIndex = 0;

  // Initialize the first sport on page load
  document.addEventListener('DOMContentLoaded', () => {
    if (sportsData.length > 0) {
        updateSlide();
    } else {
        console.error('No sports data found.');
    }
  });

  function updateSlide() {
    const logoImage = document.getElementById('logoImage');
    const sportName = document.getElementById('sportName');

    const currentSport = sportsData[currentIndex];
    logoImage.src = currentSport.src;  // Set the correct image source
    logoImage.alt = currentSport.name; // Set the alt text for the logo
    sportName.textContent = currentSport.name; // Set the sport name
  }

  function changeSlide(direction) {
    currentIndex = (currentIndex + direction + sportsData.length) % sportsData.length;
    updateSlide();
  }

  function goRegister() {
    window.location.href = './Goodluck.php'; // Redirect to the registration page
  }

  function previewsP() {
    window.location.href = './protocol.php'; // Redirect to the protocol page
  }
</script>
</body>
</html>
