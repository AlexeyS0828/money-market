<?= $this->extend("front/layout"); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="card info-card sales-card">
        <div class="card-body">
            <div class="row">
                <h5 class="card-title">Trade History</h5>
            </div>
            <div class="row">
                <table id="transaction_history_table" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($transaction_history as $transaction_th) {
                        ?>
                            <tr>
                                <th scope="row"><?= $transaction_th['user_firstName'] ?></th>
                                <td>Job</td>
                                <td><?= $transaction_th["trans_description"] ?></td>
                                <td><?= $transaction_th['user_dob'] ?></td>
                                <td><?= $transaction_th["trans_date"] ?></td>
                                <td><?= $transaction_th["trans_amount"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


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