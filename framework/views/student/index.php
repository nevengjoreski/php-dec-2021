
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($studenti as $student) { ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['lastname'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("student/show/{$student['id']}") ?>"
                    >Open</a>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("student/edit/{$student['id']}") ?>"
                    >Edit</a>
                    <a class="btn btn-info btn-sm" 
                       href="<?= getSiteUrl("student/delete/{$student['id']}") ?>"
                       onclick="return confirm('Are you sure you want to delete the student?')"
                    >Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php if (count($studenti) > 1){ ?>
    <div class="container">
        <a class="btn btn-primary d-flex"  href="<?= getSiteUrl("student/create") ?>">Create</a>
    </div>
<?php } else { ?>
    <a class="btn btn-danger" href="<?= getSiteUrl('student/show') ?>"> <-- Back to Students </a>
<?php } ?>


