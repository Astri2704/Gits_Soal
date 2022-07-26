<?php

        if(isset($_POST['save']))
        {
            $masuk = $_POST['masuk'];

            if($masuk == "yes")
            {
                echo "{ }";
                echo "[ ]";
                echo "( }";

            }
            elseif ($masuk == "no") 
            {
                echo " [ ( ] ) ";
            }
        }

?>