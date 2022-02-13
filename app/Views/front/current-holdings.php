<?= $this->extend("front/layout"); ?>

<?= $this->section("stylesheet") ?>

<?= $this->endSection() ?>



<?= $this->section('content'); ?>

<div class="row">
    <div class="card info-card sales-card">
        <div class="card-body">
            <div class="row pt-3">
                <div class="col-xxl-4 col-md-6">
                    <h5 class="card-title">Cache Balance <span>(AUD)</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="ps-3 text-warning">
                            <h6>$<?= $user['user_portfolioValue'] ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-md-6 text-center">
                    <div class="row pt-5 text-nowrap">
                        <div class="col-2">&nbsp;</div>
                        <div class="col-3">
                            <span class="small fw-bold">Equities</span><br />
                            <span class="text-primary small pt-2">$<?= $user['user_interestBalance'] ?></span>
                        </div>
                        <div class="col-3">
                            <span class="small fw-bold">Funds</span><br />
                            <span class="text-success small pt-2">$<?= $user['user_savingsBalance'] ?></span>
                        </div>
                        <div class="col-3">
                            <span class="small fw-bold">Fixed Income</span><br />
                            <span class="text-info small pt-2">$<?= $user['user_pendingTransactions'] ?></span>
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

<!-- Transaction History Accordion -->
<div class="accordion mb-4" id="accordionHistory">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="card-title text-primary"><i class="fa fa-calendar me-2"></i>&nbsp;&nbsp;<span class="text-primary">Deposit & Withdraw History</span></h5>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionHistory">
            <div class="accordion-body">
                <table id="transaction_history_table" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ind = 0;
                        foreach ($transaction_history as $transaction_th) {
                            if ($transaction_th["trans_status"] == 'Recieved') {
                                $class = "success";
                            }
                            if ($transaction_th["trans_status"] == 'Pending') {
                                $class = "warning";
                            }
                            if ($transaction_th["trans_status"] == 'Unpaid') {
                                $class = "danger";
                            }
                            $ind++;
                        ?>
                            <tr>
                                <th scope="row"><?= $ind ?></th>
                                <td><?= $transaction_th["trans_date"] ?></td>
                                <td><?= $transaction_th["trans_description"] ?></td>
                                <td class="text-<?= $class ?>"><?= $transaction_th["trans_status"] ?></td>
                                <td><?= $transaction_th["trans_amount"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Transaction History Accordion -->

<!-- BanksData Accordion -->
<div class="accordion" id="accordionTransaction">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <h5 class="card-title text-primary"><i class="bi bi-currency-bitcoin"></i>&nbsp;&nbsp;<span class="text-primary">Your Current Holding(s)</span></h5>
            </button>
        </h2>

        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionTransaction">
            <div class="accordion-body">
                <div class="accordion-body-thead row-same-height cd-offers-header clearfix d-flex pt-3">
                    <div class="col-no-1 text-center accordion-body-right-bar">Investment</div>
                    <div class="col-no-2 text-center accordion-body-right-bar">Ticker / ISIN </div>
                    <div class="col-no-3 text-center accordion-body-right-bar">Holdings </div>
                    <div class="col-no-4 text-center accordion-body-right-bar"> Number of Shares </div>
                    <div class="col-no-5 text-center accordion-body-right-bar"> Live Price</div>
                    <div class="col-no-6 text-center">&nbsp;</div>
                </div>
                <?php foreach ($bank_details as $bank_data) : ?>
                    <div class="row accordion-body-space">
                        <div class="col-12">&nbsp;</div>
                    </div>
                    <div class="row accordion-row">
                        <div class="accordion-body-tbody row-same-height cd-offers-header clearfix d-flex pt-3">
                            <div class="col-no-1 text-center accordion-body-right-bar">
                                <a data-bs-toggle="collapse" href="#bankdetail_collapse<?= $bank_data->bank_id ?>" role="button" aria-expanded="false" aria-controls="bankdetail_collapse<?= $bank_data->bank_id ?>">
                                    <img class="w-100" src="assets/img/<?= $bank_data->name ?>.jpg">
                                </a>
                            </div>
                            <div class="col-no-2 m-auto text-center accordion-body-right-bar"><?= $bank_data->bank_isin ?></div>
                            <div class="col-no-3 m-auto text-center accordion-body-right-bar"><?= $bank_data->bank_totalHoldings ?></div>
                            <div class="col-no-4 m-auto text-center accordion-body-right-bar"><?= $bank_data->bank_totalBondAmount ?></div>
                            <div class="col-no-5 m-auto text-center accordion-body-right-bar"><?= $bank_data->bank_price ?></div>
                            <div class="col-no-6 m-auto text-center">
                                <a class="btn dropdown-toggle btn-toggle" data-bs-toggle="collapse" href="#bankdetail_collapse<?= $bank_data->bank_id ?>" role="button" aria-expanded="false" aria-controls="bankdetail_collapse<?= $bank_data->bank_id ?>">&nbsp;</a>
                            </div>
                        </div>
                        <div class="collapse" id="bankdetail_collapse<?= $bank_data->bank_id ?>">
                            <div class="card card-body px-5">
                                <table class="table table-striped px-5 mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col-4">Category</th>
                                            <th scope="col-6">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Bank</th>
                                            <td><?= $bank_data->bank_name ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Initial Trade Date</th>
                                            <td><?= $bank_data->bank_initialTradeDate ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Investment Sum</th>
                                            <td><?= $bank_data->bank_totalBondAmount ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Shares Purchased</th>
                                            <td><?= $bank_data->bank_bondsPurchased ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Price (per unit)</th>
                                            <td><?= $bank_data->bank_price ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ticker / ISIN</th>
                                            <td><?= $bank_data->bank_isin ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Trade PNL</th>
                                            <td><?= $bank_data->bank_totalHoldings ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="row text-center">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary">Request Buy Order</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-info">Request Sell Order</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>





            </div>
        </div>
    </div>
</div>
<!-- End BanksData Accordion -->


<?= $this->endSection() ?>




<?= $this->section("javascript") ?>


<script>
    $(document).ready(function() {
        $('#transaction_history_table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'pdf', 'print'
            ]
        });
    });
</script>

<?= $this->endSection() ?>