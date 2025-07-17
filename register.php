<?php

include_once './includes/header.php';
require_once './includes/connection.php';
?>

<main class="register_main">
    <h2 class="register_heading">Register Table</h2>
    <?php
    if ($con) {
        echo '.<table>
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
        <tbody>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Jonathan Offor</td>
                <td>34</td>
                <td>jonoffor@outlook.com</td>
                <td>Male</td>
                <td>He/Him</td>
                <td>Managing Director</td>
                <td>+2339889879977</td>
                <td>New York, USA</td>
                <td>
                <a href="">edit</a>
                <a href="">delete</a>
                </td>
            </tr>
        </tbody>
    </table>';
    } else {
        echo '<h2>Failed to connect to the database.</h2>';
    }
?>
    
</main>

<?php include_once './includes/footer.php'; ?>