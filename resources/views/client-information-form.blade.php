<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
@media (max-width: 768px) {
    .form-group {
        flex-direction: column; /* Stack label and input vertically */
        align-items: flex-start;
    }

    .form-label {
        flex: 0 0 auto;
        margin-bottom: 0.5rem; /* Add spacing below the label */
        text-align: left;
    }

    .form-control-wrapper {
        width: 100%;
    }

    .form-control-wrapper .input-icon {
        display: none !important;  /* Adding !important to ensure it overrides any other conflicting styles */
    }

    .form-control-wrapper input,
    .form-control-wrapper select {
        padding-left: 15px; /* Adjust padding since icon is removed */
    }
}

@media (max-width: 576px) {
    .form-control-wrapper input,
    .form-control-wrapper textarea,
    .form-control-wrapper select {
        padding-left: 2px !important;
    }

    .form-container {
        padding: 1rem;
    }

    .form-header {
        font-size: 1.25rem; 
    }

    .form-description {
        font-size: 0.875rem;
    }

    .btn-container {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-container button {
        width: 100%; /* Full-width buttons for small screens */
        margin-bottom: 0.5rem;
    }
}

.form-container {
    background-color: rgb(255, 255, 255);
    margin: 2rem;
    padding: 2rem;
    border-radius: 6px;
}

.form-header {
    font-weight: bold;
    margin-bottom: 1rem;
}

.form-description {
    font-size: 0.875rem;
    color: #6c757d;
    margin-bottom: 1.5rem;
}

.form-group {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.form-label {
    flex: 0 0 20%;
    font-weight: 500;
    color: #495057;
}

.form-control-wrapper {
    flex: 1;
    position: relative;
}

.form-control-wrapper {
    border: 0;
}

.form-control:active {
    border: 0;
}

.form-control-wrapper input,
.form-control-wrapper textarea,
.form-control-wrapper select {
    padding-left: 4rem;
}

.form-control-wrapper .input-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #4FD1C5;
    color: white;
    border-radius: 2px;
    height: 100%;
    width: 5%;
    max-width: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-container {
    display: flex;
    justify-content: flex-end;
    margin-top: 2rem;
}

.btn-container button {
    width: 120px;
    padding: 1rem;
}

.form-control-wrapper input {
    flex: 1;
    padding-right: 2.5rem; /* Space for the visibility button */
}

.form-control-wrapper button {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    padding: 0;
}

.btn-submit {
    background-color: #4FD1C5;
    color: white;
}

        </style>
</head>
<body>
    <!-- Main Content -->
    <div id="main-content">
<!-- Client Information Form -->
<div class="form-container">
    <!-- Client Information Header -->
    <div>
        <h5 class="form-header">Client Information:</h5>
        <p class="form-description">The following information will be visible to the user and management.</p>

        <!-- Client Name -->
        <div class="form-group">
            <label class="form-label">Client Name:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-user"></i></div>
                <input type="text" class="form-control" placeholder="Name">
            </div>
        </div>

        <!-- Address & Pinned Location -->
        <div class="form-group">
            <label class="form-label">Address & Pinned Location:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-map-marker-alt"></i></div>
                <input type="text" class="form-control mb-2" placeholder="Coordinates">
                <textarea type="text" class="form-control" placeholder="Address"></textarea>
            </div>
        </div>

        <!-- Phone -->
        <div class="form-group">
            <label class="form-label">Phone:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-phone"></i></div>
                <input type="text" class="form-control" placeholder="Phone">
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label class="form-label">Email:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-envelope"></i></div>
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label class="form-label">Password:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-lock"></i></div>
                <input type="password" class="form-control" placeholder="Password" id="client-password">
                <button type="button" class="btn btn-light " onclick="togglePasswordVisibility('client-password')">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <!-- Tax ID Number (NPWP) -->
        <div class="form-group">
            <label class="form-label">Tax ID Number (NPWP):</label>
            <div class="form-control-wrapper">
                <input type="text" class="form-control" placeholder="NPWP">
                <div class="form-check mt-2">
                    <input class="form-check" type="checkbox" id="no-tax">
                <label class="form-check-label" for="no-tax">No Tax</label>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%">

    <!-- Additional Information Section -->
    <div>
        <h5 class="form-header">Additional Information:</h5>
        <p class="form-description">Information details for technical usage.</p>

        <!-- Billing Address -->
        <div class="form-group">
            <label class="form-label">Billing Address:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-map-marker-alt"></i></div>
                <textarea type="text" class="form-control" placeholder="Billing address"></textarea>
            </div>
        </div>

        <!-- PIC Name -->
        <div class="form-group">
            <label class="form-label">PIC Name:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-user"></i></div>
                <input type="text" class="form-control" placeholder="Name of PIC">
            </div>
        </div>

        <!-- PIC Position -->
        <div class="form-group">
            <label class="form-label">PIC Position:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-briefcase"></i></div>
                <input type="text" class="form-control" placeholder="Position of PIC">
            </div>
        </div>

        <!-- PIC Phone Number -->
        <div class="form-group">
            <label class="form-label">PIC Phone Number:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-phone"></i></div>
                <input type="text" class="form-control" placeholder="Phone Number of PIC">
            </div>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label class="form-label">Status:</label>
            <div class="form-control-wrapper">
                <div class="input-icon"><i class="fas fa-info-circle"></i></div>
                <select class="form-select">
                    <option value="">Select Status</option>
                    <option value="On Going">On Going</option>
                    <option value="">Test</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Status (Lead & Staff) -->
    <div class="form-group">
        <label class="form-label">Status (Lead & Staff):</label>
        <div class="form-control-wrapper d-flex gap-2">
            <select class="form-select">
                <option value="" disabled selected>Lead</option>
                <option value="lead_a">Lead A</option>
                <option value="lead_b">Lead B</option>
            </select>
            <select class="form-select">
                <option value="" disabled selected>Staff</option>
                <option value="staff_a">Staff A</option>
                <option value="staff_b">Staff B</option>
            </select>
        </div>
    </div>
    <div class="btn-container">
        <button type="reset" class="btn btn-secondary me-3"><strong>Cancel</strong></button>
        <button type="submit" class="btn btn-submit"><strong>Submit</strong></button>
    </div>
    </div>   
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector("i");
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
