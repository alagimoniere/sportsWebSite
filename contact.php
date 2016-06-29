<?php include("php/header.php"); ?>
<img class="img-responsive img-rounded logos text-center" src="img/sports.jpg" alt="Chania"><!-- center tag used here just for now, maybe change later -->

<hr>

<div id="contactTable" class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">About the devs</div> <!-- TODO: fix line thing above this element -->
  <div class="panel-body">
    <p>All of us here at College Football Central love our sports, and we also love programming. Here is our contact page! Contact us if you are interested in any web programming work that needs to be done!</p>
  </div>

  <!-- Table -->
  <table class="table">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>First Name</th>
	      <th>Last Name</th>
	      <th>Github Username</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Esa</td>
	      <td>Serog</td>
	      <td>julianserog</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Alyssa</td>
	      <td>Lagimoniere</td>
	      <td>alagimoniere</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Josh</td>
	      <td>O'Shields</td>
	      <td>joshOshields</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Cristian</td>
	      <td>Aviles</td>
	      <td>caviles</td>
	    </tr>
	  </tbody>
	</table>
</div>

<br>

<form class="form-horizontal " role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control contactForms" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control contactForms" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control contactForms" rows="4" name="message" placeholder="Message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
</form>


<?php
    //PHP email form submit here

	if (isset($_POST['submit'])) 
	{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'College Football Central Contact Form'; 
        $to = 'eserog@uga.edu'; 
        $subject = 'Message from College Football Central';
        $body = "From: $name\n E-Mail: $email\n Message:\n $message"; //body of email containing all the details

        if (mail ($to, $subject, $body, $from)) 
        {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
            echo $result;
        }//if
        else 
        {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            echo $result;
        }//else
	}
?>

<?php include("php/footer.php"); ?>