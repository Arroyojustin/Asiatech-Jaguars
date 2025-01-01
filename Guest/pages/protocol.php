<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tryout</title>
    <!-- You can include Bootstrap or your own styles here -->
    <link rel="stylesheet" href="../../assets/css/guest css/protocol.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid p-0 m-0" id="page3">
<div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <!-- Title -->
      <div class="text-center mb-4">
        <h2 class="health-requirements-title">Requirements</h2>
      </div>

      <!-- Form -->
           <form class="health-form">
              <!-- Gender Field -->
              <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" required>
                  <option value="" disabled selected>Select your gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <!-- Health Protocol Field -->
              <div class="mb-3">
                <label for="health-protocol" class="form-label">Health Protocol</label>
                <input class="form-control" id="health-protocol" type="text" placeholder="Describe any health protocols you follow or concerns" required />
              </div>

              <!-- Health Reminder -->
              <div class="text-center mb-4">
                <h4 class="text-danger">Reminder:</h4>
                <p><strong>Please be honest in your health condition</strong>. If there is any pain, that is still an obligation of the school.</p>
              </div>
           </form>
                    <!-- Buttons -->
            <div class="health-button-container">
                <button class="btn btn-lg btn-success" onclick="pickSport()">Next</button>
                <button class="btn btn-lg btn-secondary" onclick="goBack2()">Back</button>
            </div>
        </div>
    </div>
</div>

<script>
          function pickSport() {
            window.location.href = './sport-pic.php';  // Redirect to the homepage
        }
        // Redirect to index.php if the user cancels the tryout
        function goBack2() {
            window.location.href = './fillin.php';  // Redirect to the homepage
        }
    </script>
</body>
</html>

