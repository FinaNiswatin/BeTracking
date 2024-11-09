@extends('base')

@section('content')
    <div class="container mt-5 py-5">
        

        <!-- Balance and Category Breakdown -->
        <div class="row">
            <div class="col-md-8 mt-3">

                <!-- Welcome Message -->
                <h3 class="text-start text-primary">Dashboard</h3>
                <p class="text-start fs-5 fw-normal text-primary">Here are your finance stats, Najem Salamy!</p>

                <!-- Search Bar -->
                <input type="text" class="form-control custom-shadow-search card mb-4" placeholder="Search everything">
                
                <div class="custom-shadow balance-card p-4 rounded-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="text-primary">Balance</h5>
                            <h3 class="text-primary">Rp5,321,100</h3>
                        </div>
                        <div>
                            <!-- Dropdown untuk filter kategori -->
                            <div class="dropdown d-inline-block me-2">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Categories
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                    <li><a class="dropdown-item" href="#">All Categories</a></li>
                                    <li><a class="dropdown-item" href="#">Food and Beverages</a></li>
                                    <li><a class="dropdown-item" href="#">Groceries</a></li>
                                    <li><a class="dropdown-item" href="#">Subscription</a></li>
                                    <li><a class="dropdown-item" href="#">Hanging Out</a></li>
                                </ul>
                            </div>
                            <!-- Dropdown untuk filter waktu -->
                            <div class="dropdown d-inline-block">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="timeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Time
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="timeDropdown">
                                    <li><a class="dropdown-item" href="#">All Time</a></li>
                                    <li><a class="dropdown-item" href="#">Daily</a></li>
                                    <li><a class="dropdown-item" href="#">Monthly</a></li>
                                    <li><a class="dropdown-item" href="#">Yearly</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5">  
                            <canvas id="expenseChart" class="my-4" width="300" height="300"></canvas>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-center"> 
                            <ul class="list-unstyled legend fs-5">
                                <li data-index="0" class="legend-item"><span class="bullet" style="color: #004442;">&#9679;</span> Food and Beverages</li>
                                <li data-index="1" class="legend-item"><span class="bullet" style="color: #2EA8A2;">&#9679;</span> Groceries</li>
                                <li data-index="2" class="legend-item"><span class="bullet" style="color: #3B3E48;">&#9679;</span> Subscription</li>
                                <li data-index="3" class="legend-item"><span class="bullet" style="color: #777C90;">&#9679;</span> Hanging Out</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column justify-content-center"> 
                            <ul class="list-unstyled legend justify-content-start fs-5">
                                <li data-index="0" class="legend-item"><span class="bullet" style="color: #ffffff;">#fff;</span>34%</li>
                                <li data-index="1" class="legend-item"><span class="bullet" style="color: #ffffff;">#fff;</span>16%</li>
                                <li data-index="2" class="legend-item"><span class="bullet" style="color: #ffffff;">#fff;</span>25%</li>
                                <li data-index="3" class="legend-item"><span class="bullet" style="color: #ffffff;">#fff;</span>15%</li> 
                            </ul>
                        </div>  
                    </div>
                </div>
                
            </div>

            <!-- My Goals -->
            <div class="col-md-4">
                <div class="custom-shadow goal-card p-4 mb-4 rounded-4">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="text-primary">My Goals</h5>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ asset('images/plus-icon-dashboard.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Laptop Goal -->
                        <div class="col-md-6 my-3">
                            <div class="border p-3 text-center rounded-4 custom-shadow" style="background: linear-gradient(135deg, #8F96AE, #3B3E48); color: white;">
                                <h6 class="fs-5 fw-normal">Laptop</h6>
                                <h2>20%</h2>
                                <p class="fw-normal">Rp4,045,300</p>
                            </div>
                        </div>
                        
                        <!-- PS 5 Goal -->
                        <div class="col-md-6 my-3">
                            <div class="border p-3 text-center rounded-4 custom-shadow" style="background: linear-gradient(135deg, #2EA8A2, #124240); color: white;">
                                <h6 class="fs-5 fw-normal">PS 5</h6>
                                <h2>30%</h2>
                                <p class="fw-normal">Rp2,128,900</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                    <!-- Wallet -->
                    <a href="{{ route('wallet') }}" class="text-decoration-none">
                        <div class="outer-card custom-shadow-wallet px-4 pb-5 pt-4 rounded-4">
                            <div class="row">
                                <div class="col-md-10">
                                    <h5 class="wallet-title fw-semibold">Wallet <span class="wallet-icon"></span></h5>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('images/arrow45degree.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="wallet-container mt-2">
                                <div class="wallet-card custom-shadow p-4">
                                    <div class="wallet-content">
                                        <img src="{{ asset("images/bni.png") }}" alt="">
                                        <p class="wallet-balance fw-semibold mt-3">Rp5,321,100 <span class="wallet-eye-icon"><img src="{{ asset('images/eye.svg') }}" alt=""></span></p>
                                        <small class="wallet-account fw-semibold">1234567890 <span class="wallet-copy-icon"><img src="{{ asset('images/copy.svg') }}" alt=""></span></small>
                                    </div>
                                    <div class="wallet-date">09/27</div>
                                </div>
                            </div>
                        </div>

                    </a>
                
            </div>
        </div>
        

        <!-- Detail Transactions -->
        <div class="custom-shadow transaction-card mt-4 p-4 rounded-4">
            <div class="row align-items-start">
                <a href="{{ route('reports') }}"class="col-md-9 text-decoration-none">
                    <div class="row mx-2">
                        <h5 class="text-primary">Detail Transactions  <img src="{{ asset('images/plus-icon-dashboard.svg') }}" alt=""></h5>
                    </div>
                </a>    
                <div class="dropdown d-inline-block float-end mt-2 col-md-2 ms-4 ps-5">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="timeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Last 2 Weeks
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="timeDropdown">
                        <li><a class="dropdown-item" href="#">Last 2 Weeks</a></li>
                        <li><a class="dropdown-item" href="#">Last Month</a></li>
                        <li><a class="dropdown-item" href="#">Last 2 Months</a></li>
                    </ul>
                </div>
            </div>


            <table class="table mx-4 my-3">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ asset('images/Icon grocery.svg') }}" alt="Lunch Icon" class="me-2" />
                            Grocery at shop</td>
                        <td>Indomaret</td>
                        <td>12 Sept 2024</td>
                        <td class="text-danger">- Rp600,000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/icon_subs.svg') }}" alt="Subscription Icon" class="me-2" />
                            Netflix Subscription</td>
                        <td>Netflix</td>
                        <td>5 Sept 2024</td>
                        <td class="text-danger">- Rp186,000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/Icon Lunch1.svg') }}" alt="Subscription Icon" class="me-2" />Lunch</td>
                        <td>Geprek</td>
                        <td>3 Sept 2024</td>
                        <td class="text-danger">- Rp25,000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/Icon coffe1.svg') }}" alt="Subscription Icon" class="me-2" />Coffee</td>
                        <td>Kopken</td>
                        <td>1 Sept 2024</td>
                        <td class="text-danger">- Rp20,000</td>
                    </tr>
                
                </tbody>
            </table>


            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center text-primary">
                    <li class="page-item disabled">
                        <a class="page-link text-dark" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">...</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">6</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">7</a></li>
                    <li class="page-item">
                        <a class="page-link text-dark" href="#" aria-label="Next">
                            <span aria-hidden="true">Next &raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>

    <!--  dashboard.js -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection