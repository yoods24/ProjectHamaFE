<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Table</title>
    <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" />
</head>
<body>
<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-lg-5">
            <div class="d-flex text-center flex-column border rounded p-4">
            <h1 class="mb-0 mt-4">DokterHama</h1>
            <p class="text-secondary"><strong>info@dokterhama.co.id</strong></p>
            <hr>

            <div class="left-container-information">
                <label class="text-secondary" for="location"> <i class="fa fa-map-marker me-2"></i>Location : </label>
                <p id="location"><strong>Semarang, Indonesia</strong></p>
            </div>

            <div class="left-container-information">
                <label class="text-secondary" for="phone"> <i class="fa fa-phone me-2"></i>Phone : </label>
                <p id="location"><strong>0812 6759 9128</strong></p>
            </div>

            <div class="left-container-information">
                <label class="text-secondary" for="email"> <i class="fa fa-map me-2"></i>Email : </label>
                <p id="email"><strong>info@dokterhama.co.id</strong></p>
            </div>

            <div class="d-flex mx-auto gap-4 mb-4 mt-4">
                <button class="left-container-button delete-btn">
                    <i class="fa fa-trash me-2"></i>Delete
                </button>
                <button class="left-container-button edit-information-btn">
                    <i class="fa fa-pencil me-2"></i>Edit Information
                </button>
            </div>
        </div>
            <div class="border p-4 my-4 container-extra">
                <div class="container d-flex justify-content-between">
                    <h5><strong>Extra :</strong></h5>
                </div>
                <hr width="100%">
                <div class="container alert-box p-4 mb-3">
                    <i class="fa fa-x none"></i>
                    <i class="fa fa-exclamation circle"></i>
                    <div>
                        <p class="m-0 mb-1">Quote Express hasn't been signed yet!</p>
                        <button class=" m-0">Go To Quote Express</button>
                    </div>
                </div>
                <div class="container alert-box p-4 mb-3">
                    <i class="fa fa-x none"></i>
                    <i class="fa fa-exclamation"></i>
                    <div>
                        <p class="m-0 mb-1">Job Cover Letter hasn't been filled!</p>
                        <button class="m-0">Make Job Cover Letter</button>
                    </div>
                </div>
                <div class="table-responsive handling-complain-container">
                    <table class="table table-hover table-secondary align-middle handling-complain-table">
                        <thead>
                            <div class="handling-header">
                                <h4 class=""><strong>Handling Complain</strong></h4>
                                <i class="fa fa-eye action-icon"></i>
                            </div>
                        </thead>
                        <tbody id="tableBody">
                            <!-- Example Rows -->
                            <tr>
                                <td class="text-center">001</td>
                                <td>07/09/2021</td>
                                <td class="text-center ">Area treatment belum terjalankan dengan baik</td>
                                <td class="text-center">
                                    <i class="fa fa-eye action-icon"></i>
                                    <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">002</td>
                                <td>07/09/2025</td>
                                <td class="text-center ">Banyak lalat setelah treatment yang dilakukan</td>
                                <td class="text-center">
                                    <i class="fa fa-eye action-icon"></i>
                                    <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                </td>
                            </tr>                                
                            <tr>
                                <td class="text-center">003</td>
                                <td>07/12/2023</td>                        
                                <td class="text-center ">Tikus masih ada disebelah kulkas belakang</td>
                                <td class="text-center">
                                    <i class="fa fa-eye action-icon"></i>
                                    <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <div class="col-sm-12 col-lg-7">
        <div class="card shadow-sm">
            <div class="card-body view-nav-container">
                <!-- Tabs Navigation -->
                <ul class="nav justify-content-between text-center mb-0" role="tablist">
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-dark active" id="overview-tab" data-mdb-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-dark" id="treatment-tab" data-mdb-toggle="tab" href="#treatment" role="tab" aria-controls="treatment" aria-selected="false">Treatment</a>
                    </li>
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-dark" id="client-tab" data-mdb-toggle="tab" href="#client" role="tab" aria-controls="client" aria-selected="false">Client</a>
                    </li>
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-dark" id="invoice-tab" data-mdb-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">Invoice</a>
                    </li>
                </ul>
                <hr class="mt-0" width="100%">

                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <!-- Overview Tab -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="right-container-information">
                            <h5><strong>Contract Detail: </strong>
                                <button class="btn btn-outline-secondary btn-sm edit-button px-4">Edit</button>
                            </h5>
                            <div class="d-flex">
                                <label for="number">Number : </label>
                                <p id="number">001</p>
                            </div>
                            <div class="d-flex">
                                <label for="type">Type : </label>
                                <p id="type">KP</p>
                            </div>
                            <div class="d-flex">
                                <label for="categort">Category : </label>
                                <p id="category">TC - PRA</p>
                            </div>
                            <div class="d-flex">
                                <label for="duration">Duration : </label>
                                <p id="duration">36 Months</p>
                            </div>
                            <div class="d-flex">
                                <label for="frequency">Frequency : </label>
                                <p id="frequency">3 Times</p>
                            </div>
                            <div class="d-flex">
                                <label for="submitted">Submitted : </label>
                                <p id="submitted">04 February 2021</p>
                            </div>
                            <div class="d-flex">
                                <label for="submittedby">Submitted by : </label>
                                <p id="submittedby">John Doe</p>
                            </div>
                        </div>
                        <div class="right-container-information mt-4">
                            <h5> <strong>Additional detail:</strong> 
                                <button class="btn btn-outline-secondary btn-sm edit-button px-4">Edit</button></h5>
                            <div class="d-flex">
                                <label for="billingaddress">Billing Address : </label>
                                <p id="billingaddress">Jl.Puspowarno Tengah VIII No. 23 Semarang - Jawa Tengah 50143</p>
                            </div>
            
                            <div class="d-flex">
                                <label for="start">Start : </label>
                                <p  id="start">06 February 2021</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="end">End : </label>
                                <p  id="end">05 February 2024</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="billingamount">Billing Amount : </label>
                                <p  id="billingamount">Rp. 2.350.000</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contract Tab -->
                    <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
                        <div class="right-container-information mt-4">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr class="border-top">
                                            <th scope="col" class="text-center">No</th>
                                            <th style="white-space: nowrap" scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="status" selected>TIME</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:00">00:00</option>
                                                </select>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="input-group date">
                                                    <input type="text" id="datePicker" class="form-control form-control-sm" placeholder="DATE">
                                                </div>
                                            </th>   
                                            <th scope="col">
                                                <p style="width: 60px" class="mb-0 text-secondary text-center ">ACTION</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        <!-- Example Rows -->
                                        <tr>
                                            <td class="text-center">001</td>
                                            <td>11:28</td>
                                            <td class="text-center">30-12-2024</td>
                                            <td class="text-center">
                                                <i class="fa fa-eye action-icon"></i>
                                                <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">002</td>
                                            <td>09:50</td>
                                            <td class="text-center">30-12-2022</td>
                                            <td class="text-center">
                                                <i class="fa fa-eye action-icon"></i>
                                                <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Client Tab -->
                    <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                        <div class="right-container-information">
                            <h5><strong>Profile Detail: </strong>
                                <button class="btn btn-outline-secondary btn-sm edit-button px-4">Edit</button>
                            </h5>
                            <div class="d-flex">
                                <label for="clientname">Client Name : </label>
                                <p id="clientname">DokterHama</p>
                            </div>
                            <div class="d-flex">
                                <label for="address">Address : </label>
                                <p id="address">Jl.Puspowarno Tengah VIII No. 23 Semarang - Jawa Tengah 50143</p>
                            </div>
                            <div class="d-flex">
                                <label for="coordinates">Coordinates : </label>
                                <p id="coordinates">0812 6759 9128</p>
                            </div>
                            <div class="d-flex">
                                <label for="phone">Phone : </label>
                                <p id="phone">0812 6759 9128</p>
                            </div>
                            <div class="d-flex">
                                <label for="email">Email :</label>
                                <p id="email">info@dokterhama.co.id</p>
                            </div>
                            <div class="d-flex">
                                <label for="password">Password : </label>
                                <p id="password">*******</p>
                            </div>
                            <div class="d-flex">
                                <label for="taxid">Tax ID (NPWP) </label>
                                <p id="taxid">Tax ID (NPWP)</p>
                            </div>
                        </div>
                        <div class="right-container-information mt-4">
                            <h5> <strong>Additional detail:</strong> 
                                <button class="btn btn-outline-secondary btn-sm edit-button px-4">Edit</button></h5>
                            <div class="d-flex">
                                <label for="billingaddress"></i>Billing Address : </label>
                                <p id="billingaddress">Jl.Puspowarno Tengah VIII No. 23 Semarang - Jawa Tengah 50143</p>
                            </div>
            
                            <div class="d-flex">
                                <label for="picname"></i>PIC Name : </label>
                                <p  id="picname">James Bond</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="picposition"></i>PIC Position : </label>
                                <p  id="picposition">Secret Agent</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="picphonenumber"></i>PIC Phone Number : </label>
                                <p  id="picphonenumber">0812 6759 9128</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="status"></i>Status : </label>
                                <p id="status">Inquiry</p>
                            </div>
                        </div>
                    </div>

                    <!-- Invoice Tab -->
                    <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                        <div class="right-container-information mt-4">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr class="border-top">
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="amount" selected>AMOUNT</option>
                                                </select>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="status" selected>STATUS</option>
                                                    <option value="paid">PAID</option>
                                                    <option value="unpaid">UNPAID</option>
                                                    <option value="progress">ON PROGRESS</option>
                                                </select>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="printability" selected>PRINTABLITITY</option>
                                                    <option value="pending">pending</option>
                                                    <option value="printable">printable</option>
                                                </select>
                                            </th>
                                            <th scope="col">
                                                <p style="width: 60px" class="mb-0 text-secondary text-center ">ACTION</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        <!-- Example Rows -->
                                        <tr>
                                            <td class="text-center">INV#001</td>
                                            <td>Rp.783.333</td>
                                            <td class="text-success">PAID</td>
                                            <td class="text-center text-success">PRINTABLE</td>
                                            <td class="text-center">
                                                <i class="fa fa-eye action-icon"></i>
                                                <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">INV#002</td>
                                            <td>Rp.783.333</td>
                                            <td class="text-danger">UNPAID</td>
                                            <td class="text-center text-grey">PENDING</td>
                                            <td class="text-center">
                                                <i class="fa fa-eye action-icon"></i>
                                                <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td class="text-center">INV#003</td>
                                            <td>Rp.783.333</td>
                                            <td class="text-warning">ON PROGRESS</td>
                                            <td class="text-center text-grey">PENDING</td>
                                            <td class="text-center">
                                                <i class="fa fa-eye action-icon"></i>
                                                <i class="fa fa-navicon ms-4 action-icon text-dark"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>        
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#datePicker", {
            dateFormat: "d-m-Y",
        });
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
