<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Upload Image</title>
</head>
<body class="container d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #CCD5AE;">
    <form action='/aswupload/index.php/images' method='POST' enctype="multipart/form-data" style="background-color: #E9EDC9; padding: 5%; border-radius: 30px;">
        <div class="mb-3">
            <label class="form-label" style=="color: Red">
              <?php  
                if ( !empty ($errors) ){
                  foreach ($errors as $error) {
                    echo  $error.'<br/>';
                  }
                }
              ?>
            </label>
            <label for="formFileReadonly" class="form-label fw-bold">Upload image</label>
            <input class="form-control" name="file" type="file" id="formFileReadonly" readonly>
          </div>
          <div class="d-flex justify-content-center pt-3">
            <button type="submit" class="btn btn-outline-success">Upload</button>
          </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>