<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Table</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="d-flex flex-column flex-md-row justify-content-between mb-3">
            <div class="show-select">
                <label for="entries" class="form-label text-secondary">Show</label>
                <select id="entries" class="form-select form-select-sm w-50 d-inline ">
                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
                <span class="text-secondary">entries</span>
            </div>
            <div class="mt-2 mt-md-0">
                <label for="search" class="form-label d-inline text-secondary">Search: </label>
                <input type="text" id="search" class="form-control form-control-sm d-inline w-auto ms-2">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="border-top">
                        <th scope="col"></th>
                        <th scope="col">
                            <select class="form-select form-select-sm border-0">
                                <option value="Client" selected>Client</option>
                                <option value="Webdologi">Webdologi</option>
                                <option value="Telkomsel">Telkomsel</option>
                            </select>
                        </th>
                        <th scope="col">
                            <select class="form-select form-select-sm border-0">
                                <option value="Email" selected>EMAIL</option>
                                <option value="sdk@gmail.com">sdk@gmail.com</option>
                                <option value="fella@gmail.com">fella@gmail.com</option>
                            </select>
                        </th>
                        <th scope="col">
                            <select class="form-select form-select-sm border-0">
                                <option value="Status" selected>STATUS</option>
                                <option value="Online">ONLINE</option>
                                <option value="Offline">OFFLINE</option>
                            </select>
                        </th>
                        <th scope="col">
                            <select class="form-select form-select-sm border-0">
                                <option value="Phone" selected>PHONE</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </th>
                        <th scope="col">
                            <select class="form-select form-select-sm border-0">
                                <option value="Category" selected>CATEGORY</option>
                                <option value="KNP">KNP</option>
                                <option value="KP">KP</option>
                                <option value="JP">JP</option>
                            </select>
                        </th>
                        <th scope="col">
                            <div class="input-group date">
                                <input type="text" id="datePicker" class="form-control form-control-sm" placeholder="Select Date">
                                <span class="input-group-text border-0">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </th>
                        <th scope="col">
                            <p class="mb-0 text-secondary th-text">ACTION</p>
                        </th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>Webdologi</td>
                        <td>webdologi@gmail.com</td>
                        <td class="status-online">ONLINE</td>
                        <td>+62 888 888 888</td>
                        <td>KNP</td>
                        <td>30-12-2024</td>
                        <td>
                            <i class="fa fa-eye action-icon"></i>
                            <i class="fa fa-navicon ms-4 action-icon"></i>
                        </td>
                    </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>SDK</td>
                    <td>sdk@gmail.com</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>021 888 888</td>
                    <td>KP</td>
                    <td>06-10-2021</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Fella Co.</td>
                    <td>fella@gmail.co</td>
                    <td class="status-online">ONLINE</td>
                    <td>0888 888 000</td>
                    <td>KP</td>
                    <td>11-07-2023</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Hummer</td>
                    <td>hummer@gmail.com</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>+62 888 888 888</td>
                    <td>KP</td>
                    <td>01-01-2020</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>DokterHama</td>
                    <td>info@dokterhama.co.id</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>0819 222 2424</td>
                    <td>KP</td>
                    <td>02-03-2019</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Facebook</td>
                    <td>mail@facebook.com</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>+1 888 888 888</td>
                    <td>JP</td>
                    <td>14-07-2023</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Googol Plex</td>
                    <td>gmail@google.com</td>
                    <td class="status-online">ONLINE</td>
                    <td>+1 888 888 888</td>
                    <td>JP</td>
                    <td>28-11-2024</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>PT. Integra Solusi Bersama</td>
                    <td>isb-dh@gmail.com</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>0888 888 888</td>
                    <td>KP</td>
                    <td>22-02-2022</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Ebbie</td>
                    <td>ebbie@gmail.com</td>
                    <td class="status-offline">OFFLINE</td>
                    <td>0876 543 2100</td>
                    <td>KNP</td>
                    <td>14-04-2024</td>
                    <td class="">
                        <i class="fa fa-eye action-icon"></i>
                        <i class="fa fa-navicon ms-4 action-icon"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#datePicker", {
                dateFormat: "d-m-Y",
            });

            const searchInput = document.getElementById("search");
            const tableBody = document.getElementById("tableBody");
            const rows = tableBody.getElementsByTagName("tr");

            searchInput.addEventListener("input", function () {
                const filter = searchInput.value.toLowerCase();

                for (const row of rows) {
                    const cells = row.getElementsByTagName("td");
                    let match = false;

                    for (const cell of cells) {
                        if (cell.textContent.toLowerCase().includes(filter)) {
                            match = true;
                            break;
                        }
                    }

                    row.style.display = match ? "" : "none";
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
