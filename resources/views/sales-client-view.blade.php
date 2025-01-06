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
        <div class="col-lg-5 d-flex text-center flex-column border rounded p-4">
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

            <div class="left-container-information mb-5">
                <label class="text-secondary" for="ongoing"> <i class="fa fa-map-marker me-2"></i>On Going : </label>
                <div class="w-75 d-flex flex-column gap-4 mb-4">
                    <div class="border-dashed p-3 w-100">
                        <p class="mb-1"><strong>34 Months | KP | TC-Pra</strong></p>
                        <p class="mb-0 text-secondary">Start: 04-02-2021</p>
                        <p class="mb-0 text-secondary">End: 05-02-2024</p>
                    </div>
                    <!-- Item 2 -->
                    <div class="border-dashed p-3">
                        <p class="mb-1"><strong>12 Months | KPI | TC-B</strong></p>
                        <p class="mb-0 text-secondary">Start: 17-06-2024</p>
                        <p class="mb-0 text-secondary">End: 16-06-2025</p>
                    </div>
                </div>
            </div>

            <div class="d-flex mx-auto gap-4 mb-4">
                <button class="left-container-button delete-btn">
                    <i class="fa fa-trash me-2"></i>Delete
                </button>
                <button class="left-container-button edit-information-btn">
                    <i class="fa fa-pencil me-2"></i>Edit Information
                </button>
            </div>
        </div>
        

    <div class="col-lg-7">
        <div class="card shadow-sm">
            <div class="card-body view-nav-container">
                <!-- Tabs Navigation -->
                <ul class="nav justify-content-between text-center mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark active" id="overview-tab" data-mdb-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="contract-tab" data-mdb-toggle="tab" href="#contract" role="tab" aria-controls="contract" aria-selected="false">Contract</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="billing-tab" data-mdb-toggle="tab" href="#billing" role="tab" aria-controls="billing" aria-selected="false">Billing</a>
                    </li>
                </ul>
                <hr class="mt-0" width="100%">

                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <!-- Overview Tab -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
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
                                <label for="password">Password : </label>
                                <p id="password">*******</p>
                            </div>
                        </div>
                        <div class="right-container-information mt-4">
                            <h5> <strong>Worksite detail:</strong> 
                                <button class="btn btn-outline-secondary btn-sm edit-button px-4">Edit</button></h5>
                            <div class="d-flex">
                                <label for="billingaddress"></i>Workside address</label>
                                <p id="billingaddress">Christopher Jullian Copper St. No. 23 Semville - Jawa Tengah 50XXX</p>
                            </div>
            
                            <div class="d-flex">
                                <label for="picname"></i>PIC Name </label>
                                <p id="picname">James Bond</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="picposition"></i>PIC Position : </label>
                                <p id="picposition">Secret Agent</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="picphonenumber"></i>PIC Phone Number : </label>
                                <p id="picphonenumber">+1 888 888 007</p>
                            </div>
            
                            <div class=" d-flex">
                                <label for="status"></i>Status : </label>
                                <p id="status">Inquiry</p>
                            </div>
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
                    <!-- Contract Tab -->
                    <div class="tab-pane fade" id="contract" role="tabpanel" aria-labelledby="contract-tab">
                        <div class="right-container-information mt-4">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr class="border-top">
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="Client" selected>CONTRACT</option>
                                                    <option value="Webdologi">Webdologi</option>
                                                    <option value="Telkomsel">Telkomsel</option>
                                                </select>
                                            </th>
                                            <th style="" scope="col" class="text-center">
                                                <select class="form-select form-select-sm border-0 shadow-none">
                                                    <option value="status" selected>STATUS</option>
                                                    <option value="DONE">DONE</option>
                                                    <option value="40%">40%</option>
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
                                            <td>1</td>
                                            <td>001/DH-001/KP/TC-Pra/SMG/02/21</td>
                                            <td class="status-online">ONLINE</td>
                                            <td class="text-center">30-12-2024</td>
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

                    <!-- Billing Tab -->
                    <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
                        <div class="mt-4 d-flex justify-content-between">
                            <p><strong>Billing Information</strong></p>
                            <button class="btn btn-outline-secondary btn-sm edit-button px-4"><strong>Edit</strong></button>                        </div>
                    </div>
                </div>
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
