<?php
include "includes/header.php";

if (isset($_POST['submit'])) {
    $fullName = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $nameOfInstitute = $_POST['nameOfInstitute'];
    $groupClass = $_POST['groupClass'];
    $className = $_POST['className'];
    $teacherName = $_POST['teacherName'];
    $essayType = $_POST['essayType'];
    $writeEssay = $_POST['writeEssay'];
    $contactNo = $_POST['contactNo'];

    $query = "INSERT INTO essays(full_name, father_name, dob, address, institute_name, class_group, class_name, teacher_name, essay_type, write_essay, contact_no) VALUES('{$fullName}', '{$fatherName}', '{$dob}', '{$address}', '{$nameOfInstitute}', '{$groupClass}', '{$className}', '{$teacherName}', '{$essayType}', '{$writeEssay}', '{$contactNo}')";
    $createEssay = mysqli_query($connect, $query);

    confirmQuery($createEssay);

    echo "<p class='bg-success'>Essay submitted successfully!</p>";
}

?>

<section class="essay-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Submit your Essay</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="fatherName">Father's Name</label>
                        <input type="text" class="form-control" id="fatherName" name="fatherName">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="text" class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nameOfInstitute">Name of the Institute</label>
                        <input type="text" class="form-control" id="nameOfInstitute" name="nameOfInstitute">
                    </div>
                    <div class="form-group">
                        <label for="className">Class</label>
                        <input type="text" class="form-control" id="className" name="className">
                    </div>
                    <div class="form-group">
                        <label for="teacherName">Teacher's Name</label>
                        <input type="text" class="form-control" id="teacherName" name="teacherName">
                    </div>
                    <div class="form-group">
                        <label for="contactNo">Contact No.</label>
                        <input type="text" class="form-control" id="contactNo" name="contactNo">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "includes/footer.php";
?>