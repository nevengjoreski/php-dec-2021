
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Transaction</th>
            <th>Type</th>
            <th>Sum</th>
            <th>Date Created</th>
            <th>Phone</th>
            <th>Student</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($transactioni as $transaction) { ?>
            <tr>
                <td><?= $transaction['id'] ?></td>
                <td><?= $transaction['transaction_number'] ?></td>
                <td><?= $transaction['type'] ?></td>
                <td><?= $transaction['sum'] ?></td>
                <td><?= $transaction['date_created'] ?></td>
                <td><?= $transaction['student'] ?></td>
                <td>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("transaction/show/{$transaction['id']}") ?>"
                    >Open</a>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("transaction/edit/{$transaction['id']}") ?>"
                    >Edit</a>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("transaction/delete/{$transaction['id']}") ?>"
                       onclick="return confirm('Are you sure you want to delete the transaction?')"
                    >Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php if (count($transactioni) > 1){ ?>
    <div class="container">
        <a class="btn btn-primary d-flex"  href="<?= getSiteUrl("transaction/create") ?>">Create</a>
    </div>
<?php } else { ?>
    <a class="btn btn-danger" href="<?= getSiteUrl('transaction/show') ?>"> <-- Back to Transaction </a>
<?php } ?>


