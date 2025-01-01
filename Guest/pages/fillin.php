<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tryout</title>
    <!-- You can include Bootstrap or your own styles here -->
    <link rel="stylesheet" href="../../assets/css/guest css/fill-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid p-0 m-0" id="page2">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <!-- Title -->
      <div class="text-center mb-4">
        <h2 class="fillin-requirements-title">Requirements</h2>
      </div>

      <!-- Form -->
    <form class="requirementsForm">
        <!-- Phone Number -->
        <div class="fillin-form-group mb-3">
          <label for="phone-number" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="phone-number" name="phone_number" required>
        </div>

        <!-- Height -->
        <div class="fillin-form-group mb-3">
          <label for="height" class="form-label">Height (cm)</label>
          <input type="number" class="form-control" id="height" name="height" required>
        </div>

        <!-- Weight -->
        <div class="fillin-form-group mb-3">
          <label for="weight" class="form-label">Weight (kg)</label>
          <input type="number" class="form-control" id="weight" name="weight" required>
        </div>

        <!-- BMI -->
        <div class="fillin-form-group mb-3">
          <label for="bmi" class="form-label">BMI</label>
          <input type="number" class="form-control" id="bmi" name="bmi" readonly>
          </div>
    </form>

            <!-- Buttons -->
            <div class="fillin-button-container">
                <button class="btn btn-lg btn-success" onclick="showPage3()">Next</button>
                <button class="btn btn-lg btn-secondary" onclick="backPage1()">Back</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showPage3() {
            window.location.href = './protocol.php';  // Redirect to the homepage
        }
        // Redirect to index.php if the user cancels the tryout
        function backPage1() {
            window.location.href = './fillup.php';  // Redirect to the homepage
        }

    document.addEventListener('DOMContentLoaded', function () {
    const heightInput = document.getElementById('height');
    const weightInput = document.getElementById('weight');
    const bmiInput = document.getElementById('bmi');

    // Function to calculate and display BMI
    function calculateBMI() {
        const height = parseFloat(heightInput.value);
        const weight = parseFloat(weightInput.value);

        if (height && weight) {
            // Convert height from cm to meters
            const heightInMeters = height / 100;
            // BMI = weight (kg) / (height (m) * height (m))
            const bmi = weight / (heightInMeters * heightInMeters);
            bmiInput.value = bmi.toFixed(2);  // Display BMI rounded to 2 decimal places
        } else {
            bmiInput.value = '';  // Clear BMI if height or weight is not valid
        }
    }

    // Add event listeners to height and weight inputs
    heightInput.addEventListener('input', calculateBMI);
    weightInput.addEventListener('input', calculateBMI);
});
</script>
</body>
</html>
