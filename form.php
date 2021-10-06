<!DOCTYPE html>
<html>
  <head>
    <title>Levenshtein Distance Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"
    />
    <script src="js/jquery.min.js"></script>
</head>
  <body>
    <div class="col-sm-6 col-sm-offset-3">
      <h1>Calculating Levenshtein distance</h1>

      <form action="#" method="POST">
        <div id="s1-group" class="form-group">
          <label for="s1">First String</label>
          <input
            type="text"
            class="form-control"
            id="s1"
            name="s1"
            placeholder="First String"
          />
        </div>

        <div id="s2-group" class="form-group">
          <label for="s2">Secound String</label>
          <input
            type="text"
            class="form-control"
            id="s2"
            name="s2"
            placeholder="Secound String"
          />
        </div>


         <div id="s2-result" class="form-group">
          <label for="s2">levenshtein</label>
          <input
            type="text"
            class="form-control"
            id="levenshtein"
            name="levenshtein"
            readonly="readonly"
          />
        </div>


       

        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
    </div>
  </body>
  <script type="text/javascript">
  	

$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      s1: $("#s1").val(),
      s2: $("#s2").val()

    };


    if ($("#s1").val() == '' ) {
    	alert('Please insert first text');
    	return false;
    }


    if ($("#s2").val() == '' ) {
    	alert('Please insert Secound text');
    	return false;
    }

    $.ajax({
      type: "POST",
      url: "calculate.php",
      data: formData,
      dataType: "json",
      encode: true,
      success: function(data){
          $("#levenshtein").val(data);
           }
    }).done(function (data) {
      console.log(data);
    });
    

    event.preventDefault();
  });
});


  </script>
</html>