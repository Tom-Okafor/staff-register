<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Staff Register</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <span>Staff Register</span>
        <nav>
            <a href="">View All</a>
            <a href="">Add Member</a>
        </nav>
    </header>
    <main>
        <form action="" method="post">
            <fieldset>
                <legend>Add New Staff Member</legend>
                <section>
                    <div>
                        <label for="member_name">Name</label>
                        <span>*</span>
                    </div>
                    <input type="text" id="member_name" name="name" placeholder="input the staff member's name" autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_age">Age</label>
                        <span>*</span>
                    </div>
                    <input type="number" id="member_age" name="age" placeholder="input the staff member's age" autocomplete="off" required>
                </section>
                <section>
                    <div>
                        <label for="member_sex">Staff Member Sex</label>
                        <span>*</span>
                    </div>
                    <input type="text" id="member_sex" name="sex" placeholder="input the staff member's sex" autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_sex">Staff Member Pronouns</label>
                    </div>
                    <input type="text" id="member_pronouns" name="pronouns" placeholder="input the staff member's pronouns" autocomplete="off">
                </section>

                <section>
                    <div>
                        <label for="member_role">Staff Member Role</label>
                    </div>
                    <input type="text" id="member_role" name="role" placeholder="input the staff member's role" autocomplete="off">
                </section>

                <section>
                    <div>
                        <label for="member_email">Staff Member Email</label>
                        <span>*</span>
                    </div>
                    <input type="email" id="member_email" name="email" placeholder="input the staff member's email" autocomplete="off" required>
                </section>

                <section>
                    <div>
                        <label for="member_phone">Staff Member Phone Number</label>
                    </div>
                    <input type="number" id="member_phone" name="phone" placeholder="input the staff member's phone number" autocomplete="off">
                </section>

                <section>
                    <div>
                        <label for="member_address">Staff Member Address</label>
                    </div>
                    <input type="text" id="member_address" name="address" placeholder="input the staff member's address" autocomplete="off">
                </section>

            </fieldset>
        </form>
    </main>

</body>

</html>