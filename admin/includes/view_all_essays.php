<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Institute</th>
                <th>Group</th>
                <th>Class</th>
                <th>Teacher's Name</th>
                <th>Essay Type</th>
                <th>Essay</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // Get all data from essays table
            $getEssaysQuery = "SELECT id, full_name, father_name, dob, address, institute_name, class_group, class_name, teacher_name, essay_type, write_essay, contact_no FROM essays ORDER BY essays.id DESC";

            // Connect DB
            $getEssays = mysqli_query($connect, $getEssaysQuery);

            // Fetch data
            while ($row = mysqli_fetch_assoc($getEssays)) {
                $essay_id = $row['id'];
                $full_name = $row['full_name'];
                $father_name = $row['father_name'];
                $dob = $row['dob'];
                $address = $row['address'];
                $institute_name = $row['institute_name'];
                $class_group = $row['class_group'];
                $class_name = $row['class_name'];
                $teacher_name = $row['teacher_name'];
                $essay_type = $row['essay_type'];
                $write_essay = $row['write_essay'];
                $contact_no = $row['contact_no'];

                echo "<tr>";
                echo "<td>$essay_id</td>";
                echo "<td>$full_name</td>";
                echo "<td>$father_name</td>";
                echo "<td>$dob</td>";
                echo "<td>$address</td>";
                echo "<td>$institute_name</td>";
                echo "<td>$class_group</td>";
                echo "<td>$class_name</td>";
                echo "<td>$teacher_name</td>";
                echo "<td>$essay_type</td>";
                echo "<td>$write_essay</td>";
                echo "<td>$contact_no</td>";
                echo "<td>
                        <div class='btn-group' role='group'>
                            <a href='#' class='btn btn-success'>View</a>
                        </div>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>