<?PHP

$sql_q = mysqli_query($conn, "SELECT * FROM products");
$row = mysqli_fetch_assoc($sql_q);



?>
<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <p class="title-card">Name : <?PHP echo $row['name'] ?></p>

                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="<?PHP echo $row['name'] ?>">
                    </div>
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?PHP
   
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $sql_q = mysqli_query($conn, "UPDATE products SET name='$name' WHERE id=1");
        
        if ($sql) {
            echo "success";
        }
    }

?>