<aside class="sidebar" id="sidebar">
    <div class="d-flex">
        <div class="sidebar-logo">
            <img src="{{asset('images/DokterHama-logo-mini.png')}}" alt="">
        </div>
        <div class="sidebar-mini-logo">
            <img src="{{asset('images/dokterhama-logo-rat.png')}}" alt="">
        </div>
    </div>
    <hr style="width: 100%">
    <ul class="sidebar-nav">

        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-laptop"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Admin</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-protection"></i>
                <span>Sales</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Client</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Contract</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Item</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                <i class="lni lni-layout"></i>
                <span>Multi Level</span>
            </a>
            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                        data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                        Two Links
                    </a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#service" aria-expanded="false" aria-controls="service">
                <i class="lni lni-protection"></i>
                <span>Service Supervisor</span>
            </a>
            <ul id="service" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Technician</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Schedule</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer p-3">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-center" id="software-problem-container">
            <h6 class="h6"><strong>Software Problem?</strong></h6>
            <p>Designed to sharpened your decision and effectuate your workflow</p>
            <button class="btn btn-success">REACH US OUT</button>
        </div>
    </div>
</aside>