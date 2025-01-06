<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- Main Content -->
    <div id="main-content">
        <div class="form-container">
            <!-- Personal Information Section -->
            <div>
                <h5 class="form-header">Personal Information:</h5>
                <p class="form-description">The following information will be visible to the user and management.</p>
    
                <!-- Avatar -->
                <div class="form-group">
                    <label class="form-label">Avatar:</label>
                    <div class="form-control-wrapper">
                        <input type="file" class="form-control">
                        <small class="form-text text-muted d-block mt-2"># Avatar size: 200 x 200<br># Max upload size: 2MB<br># Allowed file types: PNG, JPG, JPEG</small>
                    </div>
                </div>
    
                <!-- Name -->
                <div class="form-group">
                    <label class="form-label">Name:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-user"></i></div>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                </div>
    
                <!-- Address -->
                <div class="form-group">
                    <label class="form-label">Address:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <textarea type="text" class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                </div>
    
                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Email:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-envelope"></i></div>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                </div>
    
                <!-- Password -->
                <div class="form-group">
                    <label class="form-label">Password:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-lock"></i></div>
                        <input type="password" class="form-control" placeholder="Enter your password">
                    </div>
                </div>
    
                <!-- Date of Birth -->
                <div class="form-group">
                    <label class="form-label">Date of Birth:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-calendar-alt"></i></div>
                        <input type="date" class="form-control">
                    </div>
                </div>
    
                <!-- Phone -->
                <div class="form-group">
                    <label class="form-label">Phone:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-phone"></i></div>
                        <input type="text" class="form-control" placeholder="Enter your phone number">
                    </div>
                </div>
    
                <!-- Role -->
                <div class="form-group">
                    <label class="form-label">Role:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-briefcase"></i></div>
                        <select class="form-select">
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr width="100%">
    
            <!-- Additional Information Section -->
            <div>
                <h5 class="form-header">Additional Information:</h5>
                <p class="form-description">Information details for technical usage.</p>
    
                <!-- Date of Joining -->
                <div class="form-group">
                    <label class="form-label">Date of Joining:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-calendar-check"></i></div>
                        <input type="date" class="form-control">
                    </div>
                </div>
    
                <!-- ID Card -->
                <div class="form-group">
                    <label class="form-label">ID Card Number:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-id-card"></i></div>
                        <input type="text" class="form-control" placeholder="Enter your ID card number">
                    </div>
                </div>
    
                <!-- Education -->
                <div class="form-group">
                    <label class="form-label">Education:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-graduation-cap"></i></div>
                        <input type="text" class="form-control" placeholder="Enter your education">
                    </div>
                </div>
    
                <!-- Bank Information -->
                <div class="form-group">
                    <label class="form-label">Bank Account Information:</label>
                    <div class="form-control-wrapper d-flex">
                        <div class="input-icon"><i class="fas fa-university"></i></div>
                        <select class="form-select me-2" style="max-width: 200px;">
                            <option value="">Bank</option>
                            <option value="bank_a">Bank A</option>
                            <option value="bank_b">Bank B</option>
                        </select>
                            <input type="text" class="form-control" placeholder="Account Number">
                            <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
    
            <!-- Buttons -->
            <div class="btn-container">
                <button type="reset" class="btn btn-secondary me-3"><strong>Cancel</strong></button>
                <button type="submit" class="btn btn-submit"><strong>Submit</strong></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
