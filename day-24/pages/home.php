<main>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php
                    foreach ($allStudents as $key => $student){
                ?>
                    <div class="col-md-4 pb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $student['img']; ?>" class="card-img-top w-100" height="150px" alt="student-image">
                        <div class="card-body">
                            <h5 class="card-title">Id: <?php echo $key+1; ?></h5>
                            <p class="card-text">Name: <?php echo $student['name']; ?></p>
                            <p class="card-text">Class: <?php echo $student['class']; ?></p>
                            <a href="route.php?page=students-details&id=<?php echo $key+1; ?>&img=<?php echo $student['img']; ?>&name=<?php echo $student['name']; ?>&cla=<?php echo $student["class"]; ?>&mob1=<?php echo $student['mobile'][0]; ?>" class="btn btn-primary">Student Details</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
</main>

