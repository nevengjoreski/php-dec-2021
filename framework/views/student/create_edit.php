<div class="container">
    <a class="btn btn-danger" href="<?= getSiteUrl('student/show') ?>"> <-- Back to Students </a>

    <form action="<?= $action ?>" method="POST" class="row mt-4">
        
        <input type="hidden" class="form-control"
                name="id" value="<?= @$student['id'] ?>">

        <div class="col-sm-6">
            <label for="">Name</label>
            <input type="text" class="form-control"
                name="name" value="<?= @$student['name'] ?>">
                
            <label for="">Lastname</label>
            <input type="text" class="form-control"
                name="lastname" value="<?= @$student['lastname'] ?>">
        </div>

        
        <div class="col-sm-6">
            <label for="">Age</label>
            <input type="text" class="form-control"
                name="age" value="<?= @$student['age'] ?>">
                
            <label for="">Email</label>
            <input type="text" class="form-control"
                name="email" value="<?= @$student['email'] ?>">

                
            <label for="">Phone</label>
            <input type="text" class="form-control"
                name="phone" value="<?= @$student['phone'] ?>">
        </div>

        <div class="col-sm-12">
            <input type="submit" class="btn btn-primary" value="<?= $button_label ?>">
        </div>
    </form>
</div>