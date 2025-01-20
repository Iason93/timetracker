<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/c46d1e780c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">

        <header class="row">

            <div class="col-6">
                <a href="#">Enter Restore Mode</a>
            </div>

            <div class="col-6 text-end">
                Total Time:
            </div>

        </header>

        <div class="row">
            <form id="form-new">
              <div class="form-group row">
                 <div class="col-10">
                     <input id="task" name="task" class="form-control" placeholder="Enter new task name...">
                 </div>

                 <div class="col-2">
                     <button type="submit" class="btn btn-block btn-success"><?=i('play')?></button>
                 </div>
              </div>
            </form>
        </div>
        
        <hr>

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>Task</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>

                </tr>

            </thead>

            <tbody id="log"></tbody>
            
        </table>
    </div>    

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- App scripts -->
    <script src="tracker.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>