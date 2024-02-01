<header class="header-section body-collapse">
    <div class="overlay">
        <div class="container-fruid">
            <div class="row d-flex header-area">
                <div class="navbar-area d-flex align-items-center justify-content-between">
                    <div class="sidebar-icon">
                        <img src="{{ asset('assets/images/icon/menu.png') }}" alt="icon">
                    </div>
                    <div class="dashboard-nav">
                        <div class="single-item notifications-area">
                            <div class="notifications-btn">
                                <img src="{{ asset('assets/images/icon/bell.png') }}" class="bell-icon" alt="icon">
                            </div>
                            <div class="main-area notifications-content">
                                <div class="head-area d-flex justify-content-between">
                                    <h5>Notifications</h5>
                                    <span class="mdr">4</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="img-area">
                                                <img src="{{ asset('assets/images/user-1.png') }}" class="max-un" alt="image">
                                            </div>
                                            <div class="text-area">
                                                <p class="mdr">You received a payment of <b>$134.00</b> from <b>Anna
                                                        Green</b></p>
                                                <p class="mdr time-area">09.39AM</p>
                                            </div>
                                        </a>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="img-area">
                                                <img src="{{ asset('assets/images/user-2.png') }}" class="max-un" alt="image">
                                            </div>
                                            <div class="text-area">
                                                <p class="mdr"><b>James Deed</b> requested a payment of
                                                    <b>£890.00</b>
                                                </p>
                                                <p class="mdr time-area">08.09AM</p>
                                            </div>
                                        </a>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="img-area">
                                                <img src="{{ asset('assets/images/master-card.png') }}" class="max-un" alt="image">
                                            </div>
                                            <div class="text-area">
                                                <p class="mdr">Your new payment method has beed added successfully
                                                </p>
                                                <p class="mdr time-area">09.39AM</p>
                                            </div>
                                        </a>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="img-area">
                                                <img src="{{ asset('assets/images/user-3.png') }}" class="max-un" alt="image">
                                            </div>
                                            <div class="text-area">
                                                <p class="mdr">You received a payment of <b>$250.00</b> from Goerge
                                                    Michael</p>
                                                <p class="mdr time-area">Yesterday</p>
                                            </div>
                                        </a>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-item user-area">
                            <div class="profile-area d-flex align-items-center">
                                <span class="user-profile">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="User">
                                </span>
                                <i class="fa-solid fa-sort-down"></i>
                            </div>
                            <div class="main-area user-content">
                                <div class="head-area d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/avatar-2.png') }}" alt="User">
                                    </div>
                                    <div class="profile-head">
                                        <a href="javascript:void(0)">
                                            <h5>Kevin Martin</h5>
                                        </a>
                                        <p class="wallet-id">Wallet ID: 6264849965</p>
                                    </div>
                                </div>
                                <ul>
                                    <li class="border-area">
                                        <a href="account.html"><i class="fas fa-cog"></i>Settings</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-sign-out"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-wrapper">
                    <div class="close-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="sidebar-logo">
                        <a href="{{ route('admin.home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <ul>
                        <li class="active">
                            <a href="{{ route('admin.home') }}">
                                <img src="{{ asset('assets/images/icon/dashboard.png') }}" alt="Dashboard"> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.company.profile') }}">
                                <img src="{{ asset('assets/images/icon/transactions.png') }}" alt="Company Profile"> <span>Company Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.team.members') }}">
                                <img src="{{ asset('assets/images/icon/pay.png') }}" alt="Team Members"> <span>Team Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.my.documents') }}">
                                <img src="{{ asset('assets/images/icon/receive.png') }}" alt="My Documents"> <span>My Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.leads') }}">
                                <img src="{{ asset('assets/images/icon/exchange.png') }}" alt="Leads"> <span>Leads</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/images/icon/recipients.png') }}" alt="Otopilot EPCs"> <span>Otopilot EPCs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/images/icon/recipients.png') }}" alt="Subscriptions"> <span>Subscriptions</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://app.gohighlevel.com/">
                                <img src="{{ asset('assets/images/icon/crypto.png') }}" alt="LeadPilot"> <span>LeadPilot</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://enerflo.io/login">
                                <img src="{{ asset('assets/images/icon/deposit.png') }}" alt="Deposit"> <span>CoPilot</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://learn.zoho.com/portal/otopilot-academy">
                                <img src="{{ asset('assets/images/icon/withdraw.png') }}" alt="Withdraw"> <span>Academy</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.resources') }}">
                                <img src="{{ asset('assets/images/icon/account.png') }}" alt="Account"> <span>Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/images/icon/support.png') }}" alt="Partners"> <span>Partners</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="bottom-item">
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/images/icon/support.png') }}" alt="Submit Request"> <span>Submit Request</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/images/icon/quit.png') }}" alt="Quit"> <span>FAQs</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
