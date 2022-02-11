<div class="container">
    <a class="btn btn-danger" href="<?= getSiteUrl('transaction/show') ?>"> <-- Back to Students </a>

    <form action="<?= $action ?>" method="POST" class="row mt-4">
        
        <input type="hidden" class="form-control"
                name="id" value="<?= @$transaction['id'] ?>">

        <div class="col-sm-6">
            <label for="">Transaction</label>
            <input type="text" class="form-control"
                name="transaction_number" value="<?= @$transaction['transaction_number'] ?>">
                
            <label for="">Type</label>
            <select class="form-control" name="type">
                <?php foreach($this->types as $type){ 
                    $selected = $type === $transaction['type'] ? 'selected' : '';
                    echo "<option $selected value='$type'>$type</option>";
                }?>
            </select>
        </div>

        
        <div class="col-sm-6">
            <label for="">Sum</label>
            <input type="number" class="form-control"
                name="sum" value="<?= @$transaction['sum'] ?>">
                                
            <label for="">Date Created</label>
            <input type="datetime-local" class="form-control"
                name="date_created" value="<?= @$transaction['date_created'] ?>">
        </div>

        
        <div class="col-sm-12">
        <label for="">Student</label>
            <select class="form-control" name="student_id">
                <?php foreach($studenti as $student){ 
                    $selected = $transaction['student_id'] === $student['id'] ? 'selected' : '';
                    echo "<option $selected value='{$student['id']}'>
                            {$student['name']} {$student['lastname']}
                        </option>";
                }?>
            </select>
                  
        </div>

        <div class="mt-5 col-sm-12">
            <input type="submit" class="btn btn-primary" value="<?= $button_label ?>">
        </div>
    </form>
</div>