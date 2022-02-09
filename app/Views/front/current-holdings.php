<?= $this->extend("front/layout"); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="card info-card sales-card">
        <div class="card-body">
            <div class="row pt-3">
                <div class="col-xxl-4 col-md-6">
                    <h5 class="card-title">Cache Balance <span>(AUD)</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="ps-3 text-warning">
                            <h6>$10,239.00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-md-6 text-center">
                    <div class="row pt-5">
                        <div class="col-2">&nbsp;</div>
                        <div class="col-3">
                            <span class="text-primary small fw-bold">Equities</span><br />
                            <span class="small pt-2">23564.23</span>
                        </div>
                        <div class="col-3">
                            <span class="text-success small fw-bold">Funds</span><br />
                            <span class="small pt-2">23564.23</span>
                        </div>
                        <div class="col-3">
                            <span class="text-info small fw-bold text-nowrap">Fixed Income</span><br />
                            <span class="small pt-2">23564.23</span>
                        </div>
                        <div class="col-1">&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col text-center mx-auto">
                    <button type="button" class="btn btn-primary me-4"><i class="fa fa-refresh"></i><span class="ms-2">Fund Account</span></button>
                    <button type="button" class="btn btn-primary ms-4"><i class="fa fa-refresh"></i><span class="ms-2">Withdraw</span></button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="card info-card sales-card">
        <div class="card-body">
            <div class="row pt-5">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%;height: 74px!important;">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [{
                                    "description": "AAPL",
                                    "proName": "NASDAQ:AAPL"
                                },
                                {
                                    "description": "MSFT",
                                    "proName": "NASDAQ:MSFT"
                                },
                                {
                                    "description": "GOOGL",
                                    "proName": "NASDAQ:GOOGL"
                                },
                                {
                                    "description": "AMZN",
                                    "proName": "NASDAQ:AMZN"
                                },
                                {
                                    "description": "TSLA",
                                    "proName": "NASDAQ:TSLA"
                                },
                                {
                                    "description": "FB",
                                    "proName": "NYSE:FBK"
                                },
                                {
                                    "description": "NVDA",
                                    "proName": "NASDAQ:NVDA"
                                },
                                {
                                    "description": "BRK.A",
                                    "proName": "NYSE:BRK.A"
                                },
                                {
                                    "description": "TSM",
                                    "proName": "NYSE:TSM"
                                }
                            ],
                            "showSymbolLogo": true,
                            "colorTheme": "light",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

        </div>
    </div>
</div>


<!-- Default Accordion -->
<div class="accordion mb-4" id="accordionHistory">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="card-title"><i class="fa fa-calendar me-2"></i><span>Deposit & Withdraw History</span></h5>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionHistory">
            <div class="accordion-body">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select> entries per page</label></div>
                        <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                    </div>
                    <div class="dataTable-container">
                        <table class="table datatable dataTable-table">
                            <thead>
                                <tr>
                                    <th scope="col" data-sortable="" style="width: 5.70305%;"><a href="#" class="dataTable-sorter">#</a></th>
                                    <th scope="col" data-sortable="" style="width: 28.0236%;"><a href="#" class="dataTable-sorter">Date</a></th>
                                    <th scope="col" data-sortable="" style="width: 37.7581%;"><a href="#" class="dataTable-sorter">Description</a></th>
                                    <th scope="col" data-sortable="" style="width: 9.24287%;"><a href="#" class="dataTable-sorter">Status</a></th>
                                    <th scope="col" data-sortable="" style="width: 19.2724%;"><a href="#" class="dataTable-sorter">Amount</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- < ?php foreach ($transaction_history as $transaction_th) {
                                            extract($transaction_th);
                                            if ($trans_status == 'Recieved') {
                                                $class = "success";
                                            }
                                            if ($trans_status == 'Pending') {
                                                $class = "warning";
                                            }
                                            if ($trans_status == 'Unpaid') {
                                                $class = "danger";
                                            }
                                        ?> -->
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2016-05-25</td>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>2014-12-05</td>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>2011-08-12</td>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTable-bottom">
                        <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                        <nav class="dataTable-pagination">
                            <ul class="dataTable-pagination-list"></ul>
                        </nav>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionTransaction">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <h5 class="card-title"><span>Your Current Holding(s)</span></h5>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionTransaction">
            <div class="accordion-body">
                <div class="row-same-height cd-offers-header clearfix d-flex pt-3">
                    <div class="w-25 p3 text-center">Investment</div>
                    <div class="w-25 p3 text-center">Ticker / ISIN </div>
                    <div class="w-25 p3 text-center">Holdings </div>
                    <div class="w-25 p3 text-center"> Number of Shares </div>
                    <div class="w-25 p3 text-center"> Live Price</div>
                </div>

















            </div>
        </div>
    </div>
</div><!-- End Default Accordion -->


<?= $this->endSection() ?>