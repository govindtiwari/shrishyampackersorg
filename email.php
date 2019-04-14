<?php

    $mailto="helpdesk@dtcpackers.org";
        $file="index.html";
        $pcount=0;
        $gcount=0;
$pstr = '';
        $subject = "Enquiry from Website visitor";
        $b = time ();

        $from="dtc@dtcpackers.org";
	       while (list($key,$val)=each($_POST))
        {
        $pstr = $pstr."$key : $val \n ";
        ++$pcount;

        }
        while (list($key,$val)=each($_GET))
        {
        $gstr = $gstr."$key : $val \n ";
        ++$gcount;

        }
        if ($pcount > $gcount)
        {
        $message_body=$pstr;
        mail($mailto,$subject,$message_body,"From:".$from);

        include("$file");
        }
        
        else
        {
        $message_body=$gstr ;

        if (!mail($mailto,$subject,$message_body,"From:".$from))
        
           {die ("Not sent");}
        else {
        include("$file");
         print $b;
             }    
          }
    ?>

           
                            