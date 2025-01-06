@extends('layouts.dashboard')

@section('Management', 'Dashboard Page')

@section('content')
<div class="container-fluid m-3">
    <!-- Recent Client Section -->
    <div class="row">
        <div class="col-lg-5 bg-white rounded p-3">
            <div class="table-responsive">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>Recent Client</h4>
                        <p class="text-secondary text-align-start"> <span><i class="fa fa-check "></i></span><strong>30 Done</strong> This Month</p>
                    </div>
                    <div class="d-flex flex-column recent-client-table">
                        <a href="#"><i class="fa fa-arrow-right action-icon"></i> Go To Contract Page</a>
                        <a href="#"><i class="fa fa-arrow-right action-icon"></i> Go To Client Page</a>
                    </div>
                </div>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">
                                <p>CLIENT</p>
                            </th>
                            <th scope="col">
                                <p>STATUS</p>
                            </th>
                            <th scope="col">
                                <p>CATEGORY</p>
                            </th>
                            <th scope="col">
                                <p>COMPLETION</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">
                                <p>KP</p>
                                <p>JP</p>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">80%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 80%" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">42%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 42%" class="progress-bar"></div>
                                </div>
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">96%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 96%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">63%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 63%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">20%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 20%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">13%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 13%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">45%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 45%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Webdologi</td>
                            <td class="status-online">ONLINE</td>
                            <td class="">KP</td>
                            <td>
                                <div class=" d-flex align-items-center gap-2">
                                <label class="progress-percentage" for="progress-bar">36%</label>
                                <div class="progress-bar-container">
                                <div id="progress-bar" style="width: 36%" class="progress-bar"></div>
                                </div>
                            </div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 ">
            <div class="card">
                <div class="card-header">
                  Sales Overview
                </div>
                <div class="card-body">
                  <canvas id="salesChart"></canvas>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-header">
                  Performance Overview
                </div>
                <div class="card-body">
                  <canvas id="performanceChart"></canvas>
                </div>
              </div>
        </div>
    </div>
    </div>
  </div>
@endsection
