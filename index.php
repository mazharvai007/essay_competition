<?php
include "includes/header.php";

$error = "";
$success = "";

if (isset($_POST['submit'])) {

    if (empty($_POST['groupClass'])) {
        $error = "Group cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['essayType'])) {
        $error = "Essay type cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['writeEssay'])) {
        $error = "Essay cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['name'])) {
        $error = "Name cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['fatherName'])) {
        $error = "Father cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['dob'])) {
        $error = "Date of birth cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['full_address'])) {
        $error = "Address cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['nameOfInstitute'])) {
        $error = "Institute cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['className'])) {
        $error = "Class cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['teacherName'])) {
        $error = "Teacher cannot be empty!";
        redirect("index.php");
    } else if (empty($_POST['contactNo'])) {
        $error = "Contact cannot be empty!";
        redirect("index.php");
    } else {
        $fullName = $_POST['name'];
        $fatherName = $_POST['fatherName'];
        $dob = $_POST['dob'];
        $dob_find = explode('/', $dob);
        if (checkdate($dob_find[0], $dob_find[1], $dob_find[2])) {
            $dob = implode("/", $dob_find);
        }
        $full_address = $_POST['full_address'];
        $nameOfInstitute = $_POST['nameOfInstitute'];
        $groupClass = $_POST['groupClass'];
        $className = $_POST['className'];
        $teacherName = $_POST['teacherName'];
        $essayType = $_POST['essayType'];
        $writeEssay = $_POST['writeEssay'];
        $contactNo = $_POST['contactNo'];

        $query = "INSERT INTO essays(full_name, father_name, dob, full_address, institute_name, class_group, class_name, teacher_name, essay_type, write_essay, contact_no) VALUES('{$fullName}', '{$fatherName}', '{$dob}', '{$full_address}', '{$nameOfInstitute}', '{$groupClass}', '{$className}', '{$teacherName}', '{$essayType}', '{$writeEssay}', '{$contactNo}')";
        $createEssay = mysqli_query($connect, $query);

        confirmQuery($createEssay);

        $success = "<p class='bg-success'>Congratulation! Your essay submitted successfully!</p>";
        redirect("index.php");
    }

}

?>

<section class="essay-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="post" enctype="multipart/form-data" id="multiForm" novalidate>
                    <fieldset>
                        <h1 class="fs-title">Submit your Essay</h1>
                        <p class="fs-error"><?php echo $error; ?></p>
                        <?php if ($success) : ?>
                            <p class="fs-success"><?php echo $success; ?></p>
                            <h4>Your information is:</h4>
                            <p><strong>Name:</strong> <?php echo $fullName; ?></p>
                            <p><strong>Father's Name:</strong> <?php echo $fatherName; ?></p>
                            <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
                            <p><strong>Address:</strong> <?php echo $full_address; ?></p>
                            <p><strong>Name of Institute:</strong> <?php echo $nameOfInstitute; ?></p>
                            <p><strong>Group:</strong> <?php echo $groupClass; ?></p>
                            <p><strong>Class:</strong> <?php echo $className; ?></p>
                            <p><strong>Teachr's Name:</strong> <?php echo $teacherName; ?></p>
                            <p><strong>Contact No:</strong> <?php echo $contactNo; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="groupClass">Group</label>
                            <select class="form-control" id="groupClass" name="groupClass" required>
                                <option selected disabled value="">---Select Your Group---</option>
                                <option value="ka">Ka: Be social in social media</option>
                                <option value="kha">Kha: Digital Bangladesh in the pursuit of prosperity</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose the group.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="essayType">Essay Type</label>
                            <select class="form-control" id="essayType" name="essayType" required>
                                <option selected disabled value="">---Select Essay Type---</option>
                                <option value="bangla">Bangla</option>
                                <option value="english">English</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose the essay type.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="writeEssay">Essay</label>
                            <textarea class="form-control" name="writeEssay" id="writeEssay" cols="30" rows="10" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your essay.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary next action-button" name="next">Next</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Name can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fatherName">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                            <div class="invalid-feedback">
                                Father's name can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="text" class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY" required>
                            <div class="invalid-feedback">
                                Date of birth can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="full_address" required>
                            <div class="invalid-feedback">
                                Address can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nameOfInstitute">Name of the Institute</label>
                            <input type="text" class="form-control" id="nameOfInstitute" name="nameOfInstitute" required>
                            <div class="invalid-feedback">
                                Institute can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="className">Class</label>
                            <input type="text" class="form-control" id="className" name="className" required>
                            <div class="invalid-feedback">
                                Class can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="teacherName">Teacher's Name</label>
                            <input type="text" class="form-control" id="teacherName" name="teacherName" required>
                            <div class="invalid-feedback">
                                Teacher's name can not be empty.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactNo">Contact No.</label>
                            <input type="text" class="form-control" id="contactNo" name="contactNo" required>
                            <div class="invalid-feedback">
                                Contact can not be empty.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary previous action-button-previous" name="previous">Previous</button>
                        <button type="submit" class="btn btn-primary action-button" name="submit">Submit</button>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "includes/footer.php";
?>