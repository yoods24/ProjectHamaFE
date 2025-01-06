@extends('layouts.dashboard')

@section('Sales', 'Dashboard Page')

@section('content')
    <div class="container-fluid m-4">
        <div class="row d-flex gap-3">
            <div class="col-lg-5 col-sm-10 bg-white p-3 rounded graph-container">
                <div class="row d-flex flex-column">
                    <div class=" container col w-100 bg-success p-3 rounded ">
                        test
                    </div>
                    <div class="col d-flex flex-column">
                        <p><strong>Project Taken</strong></p>
                        <p class="text-secondary"><span class="text-success">(+23)</span> than last week</p>
                    </div>
                    <div class="col d-flex justify-content-between ">
                        <div class="d-flex flex-column">
                            <p><span><i class="fa fa-wallet action-icon"></i></span>Contract</p>
                            <p>73</p>
                            <div class="d-flex align-items-center text-center">
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 46%" class="progress-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <p><span><i class="fa fa-wallet action-icon"></i></span>Job</p>
                            <p>21</p>
                            <div class="d-flex align-items-center text-center">
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 46%" class="progress-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <p><span><i class="fa fa-shopping-cart action-icon"></i></span>Sales</p>
                            <p>Rp. 690.420.000</p>
                            <div class="d-flex align-items-center text-center gap-2">
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 46%" class="progress-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <p><span><i class="fa fa-wallet action-icon"></i></span>Survey</p>
                            <p>116</p>
                            <div class="d-flex align-items-center text-center gap-2">
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 46%" class="progress-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10 bg-white p-3 rounded">
                test
            </div>
        <div class="col-lg-11 col-md-10 bg-white mt-1 p-3 rounded">
            <div class="table-responsive">
                <h5>Projects</h5>
                <p class="text-secondary text-align-start"> <span><i class="fa fa-check "></i></span><strong>30 Done</strong> This Month</p>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="border-top">
                            <th scope="col">
                                <p>COMPANIES</p>
                            </th>
                            <th scope="col">
                                <p>BUDGET</p>
                            </th>
                            <th scope="col">
                                <p>STATUS</p>
                            </th>
                            <th scope="col">
                                <p>COMPLETION</p>
                            </th>
                            <th scope="col">
                                <p class="mb-0 text-secondary th-text">ACTION</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>Webdologi Website Development</td>
                            <td>Rp. 85.400.000</td>
                            <td class="status-online">Working</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">36%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 36%" class="progress-bar"></div>
                                </div>
                            </div>
                        </td>
                            <td>
                                <i class="fa fa-navicon ms-4 action-icon"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Webdologi Website Development</td>
                            <td>Rp. 85.400.000</td>
                            <td class="status-online">Working</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">36%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 36%" class="progress-bar"></div>
                                </div>
                            </div>
                        </td>
                            <td>
                                <i class="fa fa-navicon ms-4 action-icon"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
