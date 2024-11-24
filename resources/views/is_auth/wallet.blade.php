@extends('base')

@section('content')
<div class="container mt-5 py-5">

    <!-- divide section -->
    <div class="row">
        <div class="mt-3">

            <!-- title -->
            <h3 class="text-center text-primary">My Wallet</h3>

            <!-- wallets-container -->
            <div class="wallets-container p-2 rounded-4">
                <!-- Slide Left Button -->
                <button class="custom-shadow slide-btn left" onclick="slideLeft()">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <!-- Slide Right Button -->
                <button class="custom shadow slide-btn right" onclick="slideRight()">
                    <i class="fas fa-arrow-right"></i>
                </button>
                <div class="col">
                    <div class="wallets-container">

                        <div class="wallets" id="wallets">
                            <!-- wallet 1 -->
                            <div class="wallet" style="background: linear-gradient(180deg, #005E6A 0%, #002E34 100%);">
                                <div class="wallet-header">
                                    <img src="{{ asset("images/bni.png") }}" alt="BNI">
                                </div>
                                <div class="wallet-balance">
                                    Rp******
                                    <i class="fas fa-eye-slash">
                                    </i>
                                </div>
                                <small class="wallet-number fw-semibold">1234567890 <span class="wallet-copy-icon"><img
                                            src="{{ asset('images/copy.svg') }}" alt=""></span></small>
                                <div class="wallet-footer">
                                    09/27
                                </div>
                            </div>

                            <!-- wallet 2 -->
                            <div class="wallet" style="background: linear-gradient(180deg, #025faf 25%, #0A2444 100%);">
                                <div class="wallet-header">
                                    <img src="{{ asset("images/BCA.jpg") }}" alt="BCA">
                                </div>
                                <div class="wallet-balance">
                                    Rp125,500
                                    <i class="fas fa-eye">
                                    </i>
                                </div>
                                <div class="wallet-number fw-semibold">1234567890 <span class="wallet-copy-icon"><img
                                            src="{{ asset('images/copy.svg') }}" alt=""></span></div>
                                <div class="wallet-footer">
                                    09/27
                                </div>
                            </div>

                            <!-- wallet 3 -->
                            <div class="wallet" style="background: linear-gradient(180deg, #ECEAEA 0%, #868585 100%);">
                                <div class="wallet-header">
                                    <img src="{{ asset("images/gopay.png") }}" alt="GOPAY">
                                </div>
                                <div class="wallet-balance" style="color: black">
                                    Rp******
                                    <i class="fas fa-eye-slash">
                                    </i>
                                </div>
                                <div class="wallet-number fw-semibold" style="color: black">1234567890 <span class="wallet-copy-icon"><img
                                            src="{{ asset('images/copy.svg') }}" alt=""></span></div>
                                <div class="wallet-footer" style="color: black">
                                    09/27
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- add wallet button -->
            <div class="d-flex justify-content-center mb-3">
                <button class="wallet-btn" onclick="">
                    Insert New Card
                </button>
            </div>

            <div class="d-flex justify-content-center">
                <div class="custom-shadow mt-4 p-4 rounded-4" style="width: 65%">
                    <div class="row align-items-start">
                        <div class="row mx-2">
                            <h5 class="text-primary font-weight-bold pb-1">Card Details</h5>
                            <div class="wallet-details">
                                <div>
                                    <span>Total income this month</span>
                                    <span data-value="positive">Rp220,000</span>
                                </div>
                                <div>
                                    <span>Total expenses this month</span>
                                    <span data-value="negative">-Rp130,000</span>
                                </div>
                                <div>
                                    <span>Total</span>
                                    <span data-value="positive">Rp90,000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="row mx-2 mt-2">
                            <h5 class="text-primary font-weight-bold pb-1">Latest Transaction</h5>
                            <div class="latest-transaction">
                                <div class="row">
                                    <div class="col">
                                        <span>Chicken katsu rice</span>
                                        <span data-value="negative">-Rp13,000</span>
                                    </div>
                                    <div class="col">
                                        <span>22/09/2024 - 13.05</span>
                                        <span>Food</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>Nursal pays the debt</span>
                                        <span data-value="positive">Rp25,000</span>
                                    </div>
                                    <div class="col">
                                        <span>20/09/2024 - 20.12</span>
                                        <span>Other</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>Netflix premium</span>
                                        <span data-value="negative">-Rp32,000</span>
                                    </div>
                                    <div class="col">
                                        <span>17/09/2024 - 10.49</span>
                                        <span>Entertainment</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>Coffee</span>
                                        <span data-value="negative">-Rp20,000</span>
                                    </div>
                                    <div class="col">
                                        <span>17/09/2024 - 07.55</span>
                                        <span>Drink</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('reports') }}" class="see-all text-decoration-none">
                            <button >See All</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <script src="{{ asset('js/wallet.js') }}"></script>

        @endsection