@extends('base')

@section('content')
<div class="container-report-fluid py-5"> <!-- Use container-fluid for full width -->

    <main class="main-reports py-5 align-items-center">
        <div class="row justify-content-center"> <!-- Center row -->
            <div class="col-lg-8 col-md-10"> <!-- Center column and adjust width -->
                <h2 class="h2 d-flex justify-content-between align-items-center">
                    <!-- Trigger Modal -->
                    <div class="d-flex align-items-center">
                        <span class="title-report me-4">My Reports</span>
                        <img src="{{ asset('images/add.svg') }}" alt="Add Report Icon" data-bs-toggle="modal" data-bs-target="#reportModal" style="cursor: pointer;" />
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border-radius: 12px; padding: 20px;">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title text-start w-100" id="reportModalLabel" style="color: #333;">Make a Report</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Tabs for Incomes and Expenses -->
                                    <ul class="nav nav-tabs justify-content-center mb-3" id="reportTab" role="tablist">
                                        <li class="nav-item">
                                            <button class="nav-link-report active" id="incomes-tab" data-bs-toggle="tab" data-bs-target="#incomes" type="button" role="tab" aria-controls="incomes" aria-selected="true">Incomes</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link-report" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses" type="button" role="tab" aria-controls="expenses" aria-selected="false">Expenses</button>
                                        </li>
                                    </ul>
                                    <!-- Form Content -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="incomes" role="tabpanel" aria-labelledby="incomes-tab">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label fs-5" style="color: #333;">Date</label>
                                                    <input type="date" class="form-control" id="date" style="border-radius: 8px;">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="category" class="form-label fs-5" style="color: #333;">Category</label>
                                                    <select class="form-select" id="category" style="border-radius: 8px;">
                                                        <option selected>Choose...</option>
                                                        <!-- Tambahkan opsi kategori di sini -->
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label fs-5" style="color: #333;">Amount</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" style="border-radius: 8px 0 0 8px;">Rp.</span>
                                                        <input type="number" class="form-control" id="amount" style="border-radius: 0 8px 8px 0;">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="details" class="form-label fs-5" style="color: #333;">Details</label>
                                                    <textarea class="form-control" id="details" rows="2" style="border-radius: 8px;"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-outline-secondary-report" data-bs-dismiss="modal" style="border-radius: 8px;">Cancel</button>
                                                    <button type="submit" class="btn btn-primary" style="background-color: #00c2c7; border: none; border-radius: 8px;">save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label fs-5" style="color: #333;">Date</label>
                                                    <input type="date" class="form-control" id="date" style="border-radius: 8px;">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="category" class="form-label fs-5" style="color: #333;">Category</label>
                                                    <select class="form-select" id="category" style="border-radius: 8px;">
                                                        <option selected>Choose...</option>
                                                        <!-- Tambahkan opsi kategori di sini -->
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label fs-5" style="color: #333;">Amount</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" style="border-radius: 8px 0 0 8px;">Rp.</span>
                                                        <input type="number" class="form-control" id="amount" style="border-radius: 0 8px 8px 0;">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="details" class="form-label fs-5" style="color: #333;">Details</label>
                                                    <textarea class="form-control" id="details" rows="2" style="border-radius: 8px;"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-outline-secondary-report" data-bs-dismiss="modal" style="border-radius: 8px;">Cancel</button>
                                                    <button type="submit" class="btn btn-primary" style="background-color: #00c2c7; border: none; border-radius: 8px;">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Daily
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Daily</a></li>
                            <li><a class="dropdown-item" href="#">Monthly</a></li>
                            <li><a class="dropdown-item" href="#">Yearly</a></li>
                        </ul>
                    </div>
                </h2>

                <div class="report-controls d-flex justify-content-between align-items-center mb-3">
                    <span>Sep 2024</span>
                </div>

                <div class="report-day mb-3">
                    <div class="report-date ms-3">
                        <span class="date-day">23</span>
                        <div class="date-info"> 
                            <span class="date-month-year">09-2024</span>
                            <span class="date-weekday">Monday</span>
                        </div>
                    </div>
                    <div class="report-items px-3">
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon Lunch1.svg') }}" alt="Lunch Icon" class="me-2" />
                                <div class="details">
                                    <span>Lunch</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Food and Beverages</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp12,000</span>
                            </div>
                        </div>
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon grocery.svg') }}" alt="Grocery Icon" class="me-2" />
                                <div class="details">
                                    <span>Grocery at shop</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Grocery</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp17,000</span>
                            </div>
                        </div>
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon coffe1.svg') }}" alt="Coffee Icon" class="me-2" />
                                <div class="details">
                                    <span>Coffee</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Hanging Out</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp15,000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="report-day mb-3">
                    <div class="report-date ms-3">
                        <span class="date-day">24</span>
                        <div class="date-info">
                            <span class="date-month-year">09-2024</span>
                            <span class="date-weekday">Tuesday</span>
                        </div>
                </div>
                    <div class="report-items px-3">
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon grocery.svg') }}" alt="Grocery Icon" class="me-2" />
                                <div class="details">
                                    <span>Grocery at shop</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Grocery</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp50,000</span>
                            </div>
                        </div>
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon grocery.svg') }}" alt="Grocery Icon" class="me-2" />
                                <div class="details">
                                    <span>Pemutih</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Grocery</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp15,000</span>
                            </div>
                        </div>
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon Lunch1.svg') }}" alt="Lunch Icon" class="me-2" />
                                <div class="details">
                                    <span>Lunch</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Grocery</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount expense">Rp16,000</span>
                            </div>
                        </div>
                        <div class="row report-item align-items-center"> <!-- Flexbox for alignment -->
                            <div class="col-5 d-flex align-items-center"> <!-- Left section for icon and description -->
                                <img src="{{ asset('images/Icon Lunch1.svg') }}" alt="Lunch Icon" class="me-2" />
                                <div class="details">
                                    <span>Hutang Najem</span>
                                </div>
                            </div>
                            <div class="col-5 text-start"> <!-- Center section for category -->
                                <span class="category">Food and Beverages</span>
                            </div>
                            <div class="col-2 text-start"> <!-- Right section for amount -->
                                <span class="amount income">Rp9,000</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>
</div>

<script src="{{ asset('js/reports.js') }}"></script>

@endsection
