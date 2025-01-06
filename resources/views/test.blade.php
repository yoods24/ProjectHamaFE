@extends('layouts.dashboard')

@section('title', 'Dashboard Page')

@section('content')
<div class="container">
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
                    <label class="form-label">PIC Name:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-user"></i></div>
                        <input id="informationChange" disabled type="text" class="form-control" placeholder="Name of PIC">
                    </div>
                </div>
        
                <!-- PIC Position -->
                <div class="form-group">
                    <label class="form-label">PIC Position:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-briefcase"></i></div>
                        <input id="informationChange" disabled type="text" class="form-control" placeholder="Position of PIC">
                    </div>
                </div>
        
                <!-- PIC Phone Number -->
                <div class="form-group">
                    <label class="form-label">PIC Phone Number:</label>
                    <div class="form-control-wrapper">
                        <div class="input-icon"><i class="fas fa-phone"></i></div>
                        <input id="informationChange" disabled type="text" class="form-control" placeholder="Phone Number of PIC">
                    </div>
                </div>
        
                <!-- Tax ID Number (NPWP) -->
                <div class="form-group">
                    <label class="form-label">Tax ID Number (NPWP):</label>
                    <div class="form-control-wrapper">
                        <div class="form-check mt-2">
                            <label class="toggle-switch">
                                <input type="checkbox" id="no-tax" onclick="changeInformation()">
                                <span class="slider"></span>
                            </label>
                            <label class="form-check-label" for="no-tax">No Tax</label>
                        </div>
                    </div>
                </div>
                <hr class="mt-5 mb-5" width="100%">
        
            <!-- Additional Information Section -->
            <div>
                <h5 class="form-header">Additional Information:</h5>
                <p class="form-description">Information details for technical usage.</p>
        
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
                <!-- PIC Name -->
                <div class="form-group align-content-center">
                    <label class="form-label">PIC Name:</label>
                    <div class="form-control-wrapper half">
                        <div class="input-icon"><i class="fas fa-user"></i></div>
                        <input type="text" class="form-control" placeholder="Name of PIC">
                    </div>
                    <div class="ms-3">
                        <p>months</p>
                    </div>
                </div>
        
                <!-- PIC Name -->
                <div class="form-group align-content-center">
                    <label class="form-label">PIC Name:</label>
                    <div class="form-control-wrapper half">
                        <div class="input-icon"><i class="fas fa-user"></i></div>
                        <input type="text" class="form-control" placeholder="Name of PIC">
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
                                <span class="placeholder-text" id="placeholder-text">Separate items with enter ↵</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        
        
            <div class="btn-container">
                <button type="reset" class="btn btn-secondary me-3"><strong>Cancel</strong></button>
                <button type="submit" class="btn btn-submit"><strong>Submit</strong></button>
            </div>
            </div>   
            </div>
        </div>
</div>
@endsection
