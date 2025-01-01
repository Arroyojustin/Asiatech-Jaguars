<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tryout</title>
    <!-- You can include Bootstrap or your own styles here -->
    <link rel="stylesheet" href="../../assets/css/guest css/fill.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid p-0 m-0" id="page1">
  <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <!-- Title -->
            <div class="text-center mb-4">
                <h2 class="fillup-requirements-title">Requirementss</h2>
            </div>

            <!-- Form Start -->
            <form class="fillup-form">
                <!-- First Name -->
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name" required>
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name" required>
                </div>

                <!-- Middle Initial -->
                <div class="mb-3">
                    <label for="middle-initial" class="form-label">Middle Initial</label>
                    <input type="text" class="form-control" id="middle-initial" required>
                </div>
            </form>
            <!-- Buttons -->
            <div class="fillup-button-container">
                <button class="btn btn-lg btn-success" onclick="turnPage2()">Next</button>
                <button class="btn btn-lg btn-secondary" onclick="backTryout()">Back</button>
            </div>
        </div>
    </div>
</div>

<script>
          function turnPage2() {
            window.location.href = './fillin.php';  // Redirect to the homepage
        }
        // Redirect to index.php if the user cancels the tryout
        function backTryout() {
            window.location.href = './tryout.php';  // Redirect to the homepage
        }
    </script>
</body>
</html>

