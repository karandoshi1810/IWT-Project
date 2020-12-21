<?php
    if(isset($_POST['received_dustbin']))
    {
        $complainID=$_COOKIE["complainid"];
        echo $complainID;
        //$email = S_POST[$row["email"]];
        if(mail('karan.doshi105417@marwadiuniversity.ac.in','Update regarding your complaint','Respected citizen
        We are sorry for the inconvinency. We have received your complain and we will make our best and swift efforts to resolve it.
        Regards and Thank you.'))
        {
            echo "<script>alert('Complain status has been updated')</script>";
        }
        else
        {
            echo "<script>alert('Complain status cannot be updated')</script>";
        }
    }


    if(isset($_POST['resolved_dustbin']))
    {
        $complainID=$_POST['uniqueid'];
        echo $complainID;
        //$email = S_POST[$row["email"]];
        if(mail('karan.doshi105417@marwadiuniversity.ac.in','Update regarding your complaint','Respected citizen,
        We have resolved your complain for dustbin. Please contact us if you face any inconviniency.
        Regards and Thank you.'))
        {
            echo "<script>alert('Complain status has been updated')</script>";
        }
        else
        {
            echo "<script>alert('Complain status cannot be updated')</script>";
        }
    }
?>