
<?php include_once './includes/header.php';
include_once './includes/connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pronouns = $_POST['pronouns'];
    $sex = $_POST['sex'];
    $role = $_POST['role'];
    $age = $_POST['age'];
    $insert_query = "insert into contact (name, email, phone, address, pronouns, sex, role, age) VALUES ('$name', '$email', '$phone', '$address', '$pronouns', '$sex', '$role', '$age' )";
    $insert_result = mysqli_query($con, $insert_query);
    if ($insert_result) {
        echo " <script>
        alert('DATA INSERTED SUCCESSFULLY!');
                window.open('register.php', '_self');
        </script>";
    } else {
        echo '<h3>Failed to insert data into database</h3>';
        die(mysqli_error($con));
    }
}



?>

<body>
<main>
        <form action="" method="post">
            <fieldset>
                <legend>Add New Staff Member</legend>
                <section>
                    <div>
                        <label for="member_name">Name</label>
                        <span aria-hidden="true">*</span>
                    </div>
                    <input type="text" id="member_name" name="name" placeholder="input the staff member's name"
                        autocomplete="off" required aria-label="this is where you put the member's name">
                </section>

                <section>
                    <div>
                        <label for="member_age">Age</label>
                        <span aria-hidden="true">*</span>
                    </div>
                    <input type="number" id="member_age" name="age" placeholder="input the staff member's age"
                        autocomplete="off" required>
                </section>
                <section>
                    <div>
                        <label for="member_sex">Staff Member Sex</label>
                        <span aria-hidden="true">*</span>
                    </div>
                    <input type="text" id="member_sex" name="sex" placeholder="input the staff member's sex"
                        autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_sex">Staff Member Pronouns</label>
                    </div>
                    <input type="text" id="member_pronouns" name="pronouns"
                        placeholder="input the staff member's pronouns" autocomplete="off">
                </section>

                <section>
                    <div>
                        <label for="member_role">Staff Member Role</label>
                        <span aria-hidden="true">*</span>

                    </div>
                    <input type="text" id="member_role" name="role" placeholder="input the staff member's role"
                        autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_email">Staff Member Email</label>
                        <span aria-hidden="true">*</span>
                    </div>
                    <input type="email" id="member_email" name="email" placeholder="input the staff member's email"
                        autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_phone">Staff Member Phone Number</label>
                    </div>
                    <input type="number" id="member_phone" name="phone"
                        placeholder="input the staff member's phone number" autocomplete="off">
                </section>

                <section>
                    <div>
                        <label for="member_address">Staff Member Address</label>
                    </div>
                    <input type="text" id="member_address" name="address" placeholder="input the staff member's address"
                        autocomplete="off">
                </section>
                <div class="controls">
                <input type="submit" name="submit" value="submit">
                <input type="reset">
                </div>
                
            </fieldset>
        </form>
    </main>

    <?php include_once './includes/footer.php';?>
</body>

</html>