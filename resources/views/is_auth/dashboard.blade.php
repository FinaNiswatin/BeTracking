@extends('base')

@section('content')
    <div class="container mt-5 py-5" style="margin-top: 6rem">
        <!-- Welcome Message -->
        <h3 class="text-start text-primary">Dashboard</h3>
        <p class="text-start fs-5 fw-normal text-primary">Here are your finance stats, Najem Salamy!</p>

        <!-- Balance and Category Breakdown -->
        <div class="row">
            <div class="col-md-8">

                <!-- Search Bar -->
                <input type="text" class="form-control custom-shadow-search card mb-4" placeholder="Search everything">
                
                <div class="custom-shadow balance-card p-4">
                    <h5 class="text-primary">Balance</h5>
                    <h3 class="text-primary">Rp5,321,100</h3>
                    <div class="row">
                        <div class="col-md-5">  
                            <canvas id="expenseChart" class="my-3" width="300" height="300"></canvas>
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
                <div class="custom-shadow goal-card p-4 mb-4">
                    <h5>My Goals</h5>
                    <div class="row">
                        <!-- Laptop Goal -->
                        <div class="col-md-6 my-3">
                            <div class="border p-3 text-center rounded-4" style="background: linear-gradient(135deg, #8F96AE, #3B3E48); color: white;">
                                <h6 class="fs-5 fw-normal">Laptop</h6>
                                <h2>20%</h2>
                                <p class="fw-normal">Rp4,045,300</p>
                            </div>
                        </div>
                        
                        <!-- PS 5 Goal -->
                        <div class="col-md-6 my-3">
                            <div class="border p-3 text-center rounded-4" style="background: linear-gradient(135deg, #2EA8A2, #124240); color: white;">
                                <h6 class="fs-5 fw-normal">PS 5</h6>
                                <h2>30%</h2>
                                <p class="fw-normal">Rp2,128,900</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                <!-- Wallet -->
                <div class="wallet-container">
                    <h5 class="wallet-title">Wallet <span class="wallet-icon">➜</span></h5>
                    <div class="wallet-card custom-shadow p-4">
                        <div class="wallet-content">
                            <h6 class="wallet-bank">BNI</h6>
                            <p class="wallet-balance">Rp5,321,100 <span class="wallet-eye-icon">👁️</span></p>
                            <small class="wallet-account">1234567890 <span class="wallet-copy-icon">📋</span></small>
                        </div>
                        <div class="wallet-date">09/27</div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Detail Transactions -->
        <div class="custom-shadow transaction-card mt-4 p-4">
            <h5>Detail Transactions</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Grocery at shop</td>
                        <td>12 Sept</td>
                        <td class="text-danger">- Rp600,000</td>
                    </tr>
                    <tr>
                        <td>Netflix Subscription</td>
                        <td>5 Sept</td>
                        <td class="text-danger">- Rp186,000</td>
                    </tr>
                    <tr>
                        <td>Lunch</td>
                        <td>3 Sept</td>
                        <td class="text-danger">- Rp25,000</td>
                    </tr>
                    <tr>
                        <td>Coffee</td>
                        <td>1 Sept</td>
                        <td class="text-danger">- Rp20,000</td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>

    <!--  dashboard.js -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection