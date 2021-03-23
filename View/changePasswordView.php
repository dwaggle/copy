<?php
$user=$_SESSION['User'];
echo '
<!DOCTYPE html>
<html lang="en">
<body style="background:#CCC;">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                
              

                    <div class="card-body">
                        <form action="Model/modelCPassword.php" method="post">
                            <input type="hidden" value= '.$_SESSION['User'].' name="user_name" placeholder=" Username" readonly>
                            <input type="password" name="user_pass" placeholder=" Password">
                            <button class="btn btn-success mt-3" name="Change">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>';
?>