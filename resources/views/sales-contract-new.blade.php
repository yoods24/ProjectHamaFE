<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <!-- Main Content -->
    <div id="main-content">
        <div class="form-container">
            <!-- Client Information Header -->
            <div>
                <h5 class="form-header">Client Information:</h5>
                <p class="form-description">The following information will be visible to the user and management.</p>
                <!-- Client Name -->
                <div class="form-group">
                    <label class="form-label">Client:</label>
                    <div class="form-control-wrapper">
                        <select class="form-select">
                            <option selected disabled value="">Client</option>
                            <option value="On Going">On Going</option>
                            <option value="">Test</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">

            <!-- PIC Name -->
            <div class="form-group">
                <label class="form-label">Worksite PIC Name:</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"><i class="bi bi-person-fill"></i></div>
                    <input id="informationChange" disabled type="text" class="form-control"
                        placeholder="John Doe">
                </div>
            </div>

            <!-- PIC Position -->
            <div class="form-group">
                <label class="form-label">Worksite PIC Position:</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"><i class="bi bi-bag-fill"></i></div>
                    <input id="informationChange" disabled type="text" class="form-control"
                        placeholder="Secret Agent">
                </div>
            </div>

            <!-- PIC Phone Number -->
            <div class="form-group">
                <label class="form-label">Worksite PIC Phone Number:</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"><i class="bi bi-telephone"></i></div>
                    <input id="informationChange" disabled type="text" class="form-control"
                        placeholder="+62 1298 9182">
                        
                </div>
            </div>
            <div style="margin-left: 17%" class="form-check mt-2">
                <label class="toggle-switch">
                    <input type="checkbox" id="bi bi-tag" onclick="changeInformation()">
                    <span class="slider"></span>
                </label>
                <label class="form-check-label" for="no-tax">Different Information</label>
            </div>
            
            <hr class="mt-5 mb-5" width="100%">

            <!-- Additional Information Section -->
                <div class="form-group">
                    <label class="form-label">Treatment type:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="bi bi-tag"></i></div>
                        <select class="form-select">
                            <option value="">Select Status</option>
                            <option value="On Going">On Going</option>
                            <option value="">Test</option>
                        </select>
                    </div>
                </div>
            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Duration:</label>
                <div class="form-control-wrapper half">
                    <div class="input-icon"><i class="bi bi-clock"></i></div>
                    <input type="text" class="form-control" placeholder="Duration">
                </div>
                <div class="ms-3">
                    <p>months</p>
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Frequency:</label>
                <div class="form-control-wrapper half">
                    <div class="input-icon"><i class="bi bi-journal-album"></i></div>
                    <input type="text" class="form-control" placeholder="Frequency">
                </div>
                <div class="ms-3">
                    <p>times per months</p>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">

            {{-- Treated Pests --}}
            <div class="form-group">
                <label class="form-label align-self-start">Treated Pests:</label>
                <div class="form-control-wrapper">
                    <div class="pests-container">
                        <div class="d-flex flex-column gap-4">

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Tikus</label>
                            </div>

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Nyamuk</label>
                            </div>

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Kecoa</label>
                            </div>

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Lalat</label>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-4">
                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Semut</label>
                            </div>

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="tikus">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="tikus">Rayap</label>
                            </div>

                            <div class="form-check mt-2">
                                <label class="toggle-switch">
                                    <input type="checkbox" id="toggle-tags">
                                    <span class="slider"></span>
                                </label>
                                <label class="form-check-label" for="toggle-tags">Others</label>
                            </div>

                            <!-- Tags Input Form -->
                            <div class="tags-container mt-3 d-none" id="tags-container">
                                <input type="text" id="tags-input" placeholder="">
                                <span class="placeholder-text" id="placeholder-text">Separate items with enter
                                    ↵</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">


            <!-- PIC Name -->
            <div class="form-group mixed">
                <label class="form-label">Consumable Chemical (monthly):</label>
                <div class="form-control-wrapper mixed">
                    <div class="input-icon"><i class="bi bi-grid"></i></div>
                    <select class="form-select w-50">
                        <option value="" selected disabled>Item Type</option>
                        <option value="On Going">On Going</option>
                        <option value="">Test</option>
                    </select>
                    <select class="form-select w-50">
                        <option value="" disabled selected>Item Name</option>
                        <option value="On Going">On Going</option>
                        <option value="">Test</option>
                    </select>
                </div>
                <div class="counter-container mixed">
                    <button class="counter-button decrease">−</button>
                    <span class="counter-number">0</span>
                    <button class="counter-button increase">+</button>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">
            <!-- PIC Name -->
            <div class="form-group mixed">
                <label class="form-label">Equipment Install (monthly):</label>
                <div class="form-control-wrapper mixed">
                    <div class="input-icon"><i class="bi bi-boxes"></i></div>
                    <select class="form-select w-50">
                        <option value="" selected disabled>Item Type</option>
                        <option value="On Going">On Going</option>
                        <option value="">Test</option>
                    </select>
                    <select class="form-select w-50">
                        <option value="" disabled selected>Item Name</option>
                        <option value="On Going">On Going</option>
                        <option value="">Test</option>
                    </select>
                </div>
                <div class="counter-container mixed">
                    <button class="counter-button decrease">−</button>
                    <span class="counter-number">0</span>
                    <button class="counter-button increase">+</button>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">
            <!-- PIC Phone Number -->
            <div class="form-group">
                <label class="form-label">Distance From DokterHama Office:</label>
                <div class="d-flex ">
                    <div class="justify-content-center">
                        <span class="kilometre">0</span>
                    </div>
                    <p class="ms-4">kilometres</p>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Technician Count</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>person / visit</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Install Hour:</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>hour / install</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Routine Hour:</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>hour / treatment</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Overtime Hour</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>hour</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Monthly Reporting:</label>
                <div class="d-flex align-items-center">
                    <div id="toggleSwitch" class="toggle-container">
                        <span class="toggle-slider"></span>
                        <div class="toggle-text active">Yes</div>
                        <div class="toggle-text active">No</div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">SPV/QC Visit:</label>
                <div class="d-flex flex-wrap gap-5 align-items-center justify-content-center">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p class="m-0">times per</p>
                    <div style="width:200px;" id="toggleSwitch" class="toggle-container mt-4">
                        <span class="toggle-slider"></span>
                        <div class="toggle-text active">MONTH</div>
                        <div class="toggle-text active">YEAR</div>
                    </div>
                </div>
            </div>


            <!-- PIC Position -->
            <!-- Date Picker -->
            <div class="form-group">
                <label class="form-label">Select Date:</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"><i class="bi bi-calendar"></i></div>
                    <input type="date" id="datePicker" class="form-control form-control-sm">
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">


            <div>
                <h5 class="form-header">Additional & Operational Cost:</h5>
                <p class="form-description">Additional & Operative cost for technical needs.</p>
                <div class="form-group">
                    <label class="form-label">Vehicle:</label>
                    <div class="d-flex align-items-center">
                        <div id="toggleSwitch" class="toggle-container">
                            <span class="toggle-slider"></span>
                            <div class="toggle-text active"><i style="font-size: 25px" class="bi bi-bicycle"></i></div>
                            <div class="toggle-text active"><i style="font-size: 22px" class="bi bi-truck"></i></div>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Meal Allowance:</label>
                <div class="d-flex align-items-center">
                    <div id="toggleSwitch" class="toggle-container">
                        <span class="toggle-slider"></span>
                        <div class="toggle-text active">Yes</div>
                        <div class="toggle-text active">No</div>
                    </div>
                    <p></p>
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Parking Fee:</label>
                <div class="form-control-wrapper small">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input type="text" class="form-control" placeholder="3000" value="3000">
                </div>
                <div class="ms-3">
                    <p>per parking / visit</p>
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Location Entry Fee:</label>
                <div class="form-control-wrapper small">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input type="text" class="form-control" placeholder="5000" value="5000">
                </div>
                <div class="ms-3">
                    <p>per enrty / visit</p>
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group">
                <label class="form-label">Casual Support:</label>
                <div class="d-flex flex-wrap gap-3 align-items-center ">
                    <div class="form-control-wrapper small">
                        <div class="input-icon"> <strong>Rp.</strong></div>
                        <input type="text" class="form-control" placeholder="25000" value="25000">
                    </div>
                    <p>per</p>
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>technician</p>
                </div>
            </div>

            <!-- Casual Support -->
            <div class="form-group">
                <label class="form-label">Lodging Fee:</label>
                <div class="d-flex flex-wrap gap-3 align-items-center ">
                    <div class="form-control-wrapper small">
                        <div class="input-icon"> <strong>Rp.</strong></div>
                        <input type="text" class="form-control" placeholder="255000" value="255000">
                    </div>
                    <p>per</p>
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>technician</p>
                </div>
            </div>
            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Toll Fee</label>
                <div class="form-control-wrapper small">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input type="text" class="form-control" placeholder="45000" value="45000">
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">

            <div>
                <h5 class="form-header">Administrative Cost:</h5>
                <p class="form-description">Administrative cost for technical needs.</p>
                <div class="form-group">
                    <label class="form-label">Contract Duty Stamp:</label>
                    <div class="d-flex gap-3">
                        <div class="counter-container">
                            <button class="counter-button decrease">−</button>
                            <span class="counter-number">0</span>
                            <button class="counter-button increase">+</button>
                        </div>
                        <p>stamp</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Invoice Duty Stamp</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>stamp</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Invoice Courier:</label>
                <div class="d-flex gap-3">
                    <div class="counter-container">
                        <button class="counter-button decrease">−</button>
                        <span class="counter-number">0</span>
                        <button class="counter-button increase">+</button>
                    </div>
                    <p>person</p>
                </div>
            </div>
            <hr class="mt-5 mb-5" width="100%">

            <div>
                <h5 class="form-header">Pricing:</h5>
                <p class="form-description">Pricing details for offer usage.</p>
                <div class="form-group">
                    <label class="form-label">Estimated AMount:</label>
                    <div class="form-control-wrapper">
                        <input disabled type="text" class="form-control ps-3"
                            placeholder="Estimated Amount">
                    </div>
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Discount:</label>
                <div class="form-control-wrapper half me-5">
                    <div class="input-icon"><i class="bi bi-percent"></i></div>
                    <input type="text" class="form-control" placeholder="Discount">
                </div>
                <div class="form-control-wrapper half ">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input type="text" class="form-control" placeholder="New Price">
                </div>
            </div>

            <!-- PIC Name -->
            <div class="form-group align-content-center">
                <label class="form-label">Fee:</label>
                <div class="form-control-wrapper half">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input type="text" class="form-control" placeholder="Non VAT End Price">
                </div>
                {{-- here --}}
            </div>


            <!-- PIC Phone Number -->
            <div class="form-group">
                <label class="form-label">Non VAT Total:</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input id="informationChange" disabled type="text" class="form-control"
                        placeholder="Non VAT End Price">
                </div>
            </div>
            
            <!-- PIC Phone Number -->
            <div class="form-group">
                <label class="form-label">Total After VAT (11%)</label>
                <div class="form-control-wrapper">
                    <div class="input-icon"> <strong>Rp.</strong></div>
                    <input id="informationChange" disabled type="text" class="form-control"
                        placeholder="End Price After VAT">
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


        function changeInformation() {

            const informationAreas = document.querySelectorAll("[id='informationChange']");


            informationAreas.forEach((informationArea) => {
                if (informationArea.disabled) {
                    informationArea.disabled = false;
                } else {
                    informationArea.disabled = true;
                    informationArea.value = "";
                }
            });
        }

        const toggleTags = document.getElementById("toggle-tags");
        const tagsContainer = document.getElementById("tags-container");
        const tagsInput = document.getElementById("tags-input");
        const placeholderText = document.getElementById("placeholder-text");

        // Toggle visibility of the tags container
        toggleTags.addEventListener("change", () => {
            if (toggleTags.checked) {
                tagsContainer.classList.remove("d-none");
                tagsInput.focus();
            } else {
                tagsContainer.classList.add("d-none");
            }
        });

        tagsInput.addEventListener("keydown", (e) => {
            if (e.key === "Enter" && tagsInput.value.trim() !== "") {
                e.preventDefault();

                const tagText = tagsInput.value.trim();

                const tag = document.createElement("span");
                tag.className = "tag";
                tag.innerHTML = `${tagText} <span class="remove-tag">✕</span>`;

                tagsContainer.insertBefore(tag, tagsInput);
                tagsInput.value = "";

                tag.querySelector(".remove-tag").addEventListener("click", () => {
                    tagsContainer.removeChild(tag);
                });

                placeholderText?.remove();
            }
        });
        const counters = document.querySelectorAll('.counter-container');

        counters.forEach((counterContainer) => {
            const decreaseButton = counterContainer.querySelector('.decrease');
            const increaseButton = counterContainer.querySelector('.increase');
            const counterNumber = counterContainer.querySelector('.counter-number');

            let counterValue = 0;

            // Decrease button functionality
            decreaseButton.addEventListener('click', () => {
                if (counterValue > 0) {
                    counterValue--;
                    updateCounter();
                }
            });

            // Increase button functionality
            increaseButton.addEventListener('click', () => {
                counterValue++;
                updateCounter();
            });

            // Update the displayed counter value
            function updateCounter() {
                counterNumber.textContent = counterValue;
                decreaseButton.disabled = counterValue === 0; // Disable the decrease button at 0
            }

            // Initialize
            updateCounter();
        });

        const datePicker = document.getElementById('datePicker');
        if (datePicker) {
            datePicker.addEventListener('click', () => {
                console.log('Date picker clicked');
            });
        }

        const toggleSwitches = document.querySelectorAll('.toggle-container');

        // Add event listener to each toggle
        toggleSwitches.forEach(toggle => {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
