<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
  <?php include 'loginpages.php';?>

  <div class="container">
    <h3 class="display-3">Found an Item?</h3>
    <h3 class="text-muted display-4">Please enter the item details below.</h3>
  </div>

  <div class="container">
    <form onsubmit="return valtime(tym)" action="includes/foundform.php" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <div class="col-md-4">
          <label for="type">Type</label>
          <select name="type" class="form-control" id="exampleFormControlSelect1" required>
            <option value="" disabled selected>Select a Type</option>
            <option value="Mobile Phone">Mobile Phone</option>
            <option value="Laptop">Laptop</option>
            <option value="Water Bottle">Water Bottle</option>
            <option value="Lunch Box">Lunch Box</option>
            <option value="Notebook">Notebook</option>
            <option value="Wallet">Wallet</option>
            <option value="Charger">Charger</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="colour">Colour</label>
          <select name="colour" class="form-control" id="exampleFormControlSelect1" required>
            <option value="" disabled selected>Select a Colour</option>
            <option value="Violet">Violet</option>
            <option value="Indigo">Indigo</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Orange">Orange</option>
            <option value="Red">Red</option>
            <option value="White">White</option>
            <option value="Black">Black</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="model">Model (If applicable)</label>
          <input name="model" class="form-control" type="Text" placeholder="Enter Model">
        </div>

        <div class="form-group col-md-4">
          <label for="company">Manufacturer / Company (If applicable)</label>
          <input name="company" class="form-control" type="Text" placeholder="Enter Manufacturer">
        </div>



        <div class="form-group col-md-4">
          <label for="location">Last known location</label>
          <select name="location" class="form-control" required>
             <option value="" disabled selected>Select location</option>
            <option value="Turing Block">Turing Block</option>
            <option value="Tesla Block">Tesla Block</option>
            <option value="Edison Block">Edison Block</option>
            <option value="Newton Block">Newton Block</option>
            <option value="Fleming Block">Fleming Block</option>
            <option value="Gallelio Block">Gallelio Block</option>
            <option value="Le corbusier Block">Le corbusier Block</option>
            <option value="Babbage Block">Babbage Block</option>
            <option value="Demorgan Block">Demorgan Block</option>
            <option value="Alpha zone">Alpha zone</option>
            <option value="Square One">Square One</option>
            <option value="Cricket Ground">Cricket Ground</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="tym">Time when you found the item (HH:MM)</label>
          <input name="tym" class="form-control" type="Text" placeholder="Enter time" required>
        </div>

        <div class="form-group col-md-4">
        <label for="mob">Enter your Mobile Number</label>
        <input name="mob" class="form-control" type="Text" placeholder="Enter Mobile Number">
      </div>
        <div class="form-group col-md-12">
          <label for="details">Extra Details</label>
          <textarea name="details" class="form-control" rows="5" placeholder="Describe your lost item in detail here..."></textarea>
        </div>

        <div class="form-group col-md-12">
          <label for="img">Upload an Image</label>
          <br>
            <input type="file" class="form-control-file" name="img" required>
        </div>

        <div class="form-group col-lg-12">
          <input type="hidden" name="savebtn" value="lost">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>

      </div>
    </form>
  </div>

  <?php include 'footer.php';?>
    </body>
    </html>

    <script type="text/javascript">

    function valtime(timetxt)
    {
      var time = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]+$/;
      if(timetxt.value.match(time))
       {
        return true;
       }
     else
       {
        alert("Please enter the time in HH:MM format.");
        return false;
       }
    }

    </script>
