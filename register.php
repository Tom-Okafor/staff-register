<?php

include_once './includes/header.php';
require_once './includes/connection.php';
?>

<main class="register_main">
    <h2 class="register_heading">Register Table</h2>
    <?php
    if ($con) {
        $select_query = 'Select * from contact';
        $query_result = mysqli_query($con, $select_query);
        if (mysqli_num_rows($query_result)) {

            echo '<table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Pronouns</th>
                <th>Role</th>
                <th>Phone</th>
                <th>Address</th>
                <th>options</th>
            </tr>
        </thead>
        <tbody>';
            $count = 001;
            while ($row = mysqli_fetch_assoc($query_result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $gender = $row['sex'];
                $phone = $row['phone'];
                $address = $row['address'];
                $pronouns = $row['pronouns'];
                $age = $row['age'];
                $role = $row['role'];
                echo "
             <tr>
                 <td>$count</td>
                 <td>$name</td>
                 <td>$age</td>
                 <td>$email</td>
                 <td>$gender</td>
                 <td>$pronouns</td>
                 <td>$role</td>
                 <td>$phone</td>
                 <td>$address</td>
                 <td>
                 <a href='edit.php?member_id=$id'>edit</a>
                 <a href='register.php?member_ id=$id'>delete</a>
                 </td>
             </tr>";
                $count++;
            }
            echo '
        </tbody>
        </table>';

        } else {

            echo '<h2>No data Inserted</h2>';

        }

    } else {
        echo '<h2>Failed to connect to the database.</h2>';
    }
?>
    
</main>

<?php include_once './includes/footer.php'; ?>