
<?php include "includes/header.php";?>

<h2 class="pageID"><?=$PageID?></h2>
 	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "yoseffkaren@gmail.com";  //place your/your client's email address here
        $toName = "Alumina"; //place your client's name here
        $website = "contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </section>
    
<!-- END LEFT COL -->

<!-- START RIGHT COL -->

<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>

