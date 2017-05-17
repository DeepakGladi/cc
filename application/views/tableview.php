

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>email</th>
            <th>image</th>
            <th>image</th>
        </tr>
    </thead>    <tbody>
<?php foreach($bata as $bt){ ?>	
        <tr>
		
            <th scope="row">1</th>
            <td><?php echo $bt->name; ?></td>
            <td><?php echo $bt->pass; ?></td>
			<td><?php echo $bt->image;?></td>
			<td><img class='img-responsive' src="<?php echo base_url("images/").$bt->image;?>">
            <td>
                <a class="blue-text"><i class="fa fa-user"></i></a>
                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                <a class="red-text"><i class="fa fa-times"></i></a>
            </td>
        </tr>
		
<?php } ?>
        

    </tbody>
</table>