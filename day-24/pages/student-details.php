<main>
    <section class="py-5">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <img src="<?php echo $_GET['img']; ?>" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title">Id: <?php echo $_GET['id']; ?></h5>
                           <p class="card-text">Name: <?php echo $_GET['name']; ?></p>
                       </div>
                       <ul class="list-group list-group-flush">
                           <li class="list-group-item">Class: <?php echo $_GET['cla']; ?></li>
                           <li class="list-group-item">Mobile: <?php echo $_GET['mob1']; ?></li>
                       </ul>
                       <div class="card-body">
                           <a href="#" class="card-link card-title">Card link</a>
                           <a href="#" class="card-link card-title">Another link</a>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
</main>

