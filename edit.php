<?php

include_once 'includes/header.php';
include 'includes/connection.php';

if (!isset($_GET['member_id'])) {
    echo "<script>window.open('register.php', '_self')</script>";
}
$id = $_GET['member_id'];

// handle the submit post request
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pronouns = $_POST['pronouns'];
    $sex = $_POST['sex'];
    $role = $_POST['role'];
    $age = $_POST['age'];
    $update_query = "update contact set name='$name', email='$email', phone='$phone', address='$address', pronouns='$pronouns', sex='$sex', role='$role', age='$age' where id=$id";
    $update_result = mysqli_query($con, $update_query);
    echo $update_result;
    if ($update_result) {
        echo "
        <script>
        alert('Data updated successfully');
        window.open('register.php', '_self');
        </script>
        ";
    } else {
        die(mysqli_error($con));
    }
}

// Get details of member to be edited from the member_id set in the query
$search_query = "select * from contact where id=$id";
$search_result = mysqli_query($con, $search_query);
if ($search_result -> num_rows) {

    $result_data = mysqli_fetch_assoc($search_result);
    $name = $result_data['name'];
    $email = $result_data['email'];
    $age = $result_data['age'];
    $gender = $result_data['sex'];
    $pronouns = $result_data['pronouns'];
    $phone = $result_data['phone'];
    $role = $result_data['role'];
    $address = $result_data['address'];
    echo "
<body>
<main>
        <form action='' method='post'>
            <fieldset>
                <legend>Add New Staff Member</legend>
                <section>
                    <div>
                        <label for='member_name'>Name</label>
                        <span aria-hidden='true'>*</span>
                    </div>
                    <input type='text' id='member_name' name='name' placeholder='input the staff member's name'
                        autocomplete='off' required aria-label='this is where you put the member's name' value='$name'>
                </section>

                <section>
                    <div>
                        <label for='member_age'>Age</label>
                        <span aria-hidden='true'>*</span>
                    </div>
                    <input type='number' id='member_age' name='age' placeholder='input the staff member's age'
                        autocomplete='off' required value='$age'>
                </section>
                <section>
                    <div>
                        <label for='member_sex'>Staff Member Sex</label>
                        <span aria-hidden='true'>*</span>
                    </div>
                    <input type='text' id='member_sex' name='sex' placeholder='input the staff member's sex'
                        autocomplete='off' required value='$gender'>
                </section>

                <section>
                    <div>
                        <label for='member_sex'>Staff Member Pronouns</label>
                    </div>
                    <input type='text' id='member_pronouns' name='pronouns'
                        placeholder='input the staff member's pronouns' autocomplete='off' value='$pronouns'>
                </section>

                <section>
                    <div>
                        <label for='member_role'>Staff Member Role</label>
                        <span aria-hidden='true'>*</span>

                    </div>
                    <input type='text' id='member_role' name='role' placeholder='input the staff member's role'
                        autocomplete='off' required value='$role'>
                </section>

                <section>
                    <div>
                        <label for='member_email'>Staff Member Email</label>
                        <span aria-hidden='true'>*</span>
                    </div>
                    <input type='email' id='member_email' name='email' placeholder='input the staff member's email'
                        autocomplete='off' required value='$email'>
                </section>

                <section>
                    <div>
                        <label for='member_phone'>Staff Member Phone Number</label>
                    </div>
                    <input type='number' id='member_phone' name='phone'
                        placeholder='input the staff member's phone number' autocomplete='off' value='$phone'>
                </section>

                <section>
                    <div>
                        <label for='member_address'>Staff Member Address</label>
                    </div>
                    <input type='text' id='member_address' name='address' placeholder='input the staff member's address'
                        autocomplete='off' value='$address'>
                </section>
                <div class='controls'>
                <input type='submit' name='submit' value='submit'>
                <input type='reset'>
                </div>
                
            </fieldset>
        </form>
    </main>
</body>
";

} else {
    echo "<h2 style='text-align:center; color:red;'>Invalid Member ID.</h2>";
}

include_once 'includes/footer.php';
