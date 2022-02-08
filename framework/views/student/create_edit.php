<div class="container">
    <a class="btn btn-danger" href="<?= getSiteUrl('student/show') ?>"> <-- Back to Students </a>

    <form action="<?= getSiteUrl('student/insert') ?>" method="POST" class="row mt-4">
        
        <div class="col-sm-6">
            <label for="">Name</label>
            <input type="text" class="form-control"
                name="name">
                
            <label for="">Lastname</label>
            <input type="text" class="form-control"
                name="lastname">
        </div>

        
        <div class="col-sm-6">
            <label for="">Age</label>
            <input type="text" class="form-control"
                name="age">
                
            <label for="">Email</label>
            <input type="text" class="form-control"
                name="email">

                
            <label for="">Phone</label>
            <input type="text" class="form-control"
                name="phone">
        </div>

        <div class="col-sm-12">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</div>