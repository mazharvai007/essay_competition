<?php
include "includes/header.php";

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
                <form action="final_form.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="groupClass">Group</label>
                        <select class="form-control" id="groupClass" name="groupClass">
                            <option>Ka: Be social in social media</option>
                            <option>Kha: Digital Bangladesh in the pursuit of prosperity</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="essayType">Essay Type</label>
                        <select class="form-control" id="essayType" name="essayType">
                            <option>Bangla</option>
                            <option>English</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="writeEssay">Write Essay</label>
                        <textarea class="form-control" name="writeEssay" id="writeEssay" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="next">Next</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "includes/footer.php";
?>