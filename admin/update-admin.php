<?php include('partials/menu.php');  ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br>

        <?php
        $id = $_GET['id'];
        $sql = "select * from tbl_admin where id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>

                <form action="#" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Full Name:</td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <td><input type="text" name="full_name" value="<?php echo $row['full_name']; ?>"></td>
                        </tr>

                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>

        <?php }
        } ?>
    </div>
</div>
<?php include('partials/footer.php');  ?>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];

    $sql = "update tbl_admin set full_name='$full_name', username='$username' where id='$id'";
    if (mysqli_query($conn, $sql)) {
        header('location:slider_view.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>