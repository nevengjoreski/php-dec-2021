<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="container">
    <form action="insert.php" method="POST" class="row">
        
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" 
                    class="form-control" 
                    name="name"
                    required>

            <label class="form-label">Lastname</label>
            <input type="text" 
                class="form-control" 
                name="lastname"
                required>
        </div>

        <div class="col-md-6">
            <label class="form-label">age</label>
            <input type="number" 
                    class="form-control" 
                    name="age"
                    required>

            <label class="form-label">Email</label>
            <input type="email" 
                class="form-control" 
                name="email"
                required>

            <label class="form-label">Phone</label>
            <input type="text" 
                class="form-control" 
                name="phone"
                required>
        </div>

        <div class="col-md-12 mt-2">
        <input type="submit" 
            value="Create Student" 
            class="btn d-block btn-warning form-control">
        </div>  
    </form>
</div>