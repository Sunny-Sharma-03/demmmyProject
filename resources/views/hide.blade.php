<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Hide and Show Format</title>
  </head>
  <body>
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Hide and Show Format</div>
        <div class="card-body">
        <div class="input-box">
			   <input type="radio" id="Filter" value="Address"/>Address
                <input type="radio" id="Filter" value="Qualification"/>Qualification
                <input type="radio" id="Filter" value="Choice"/>Choice
		</div>
        <div class="input-box">
			<select name="cmbStatus" id="cmbStatus" style="display:none;">
				<option value="" disabled selected>-- Select Option --</option>
				<option value="zero"> Pending </option>
				<option value="1"> Completed </option>
			</select>
			</div>
			
					
	<script type="text/javascript">
		$('#Filter').change(function() { var selected = $(this).val();
			 if (selected == "Address"){
				$('#Address').show();
				$('#Qualification').hide();
				$('#Choice').hide();
			}
			else if (selected == "Qualification"){
				$('#Address').hide();
				$('#Qualification').show();
				$('#cmbApproved').hide();
			}
			else if (selected == "Choice"){
				$('#Address').hide();
				$('#Qualification').hide();
				$('#Choice').show();
			}
		});
        
	</script>
</tr>

</body>
</html>