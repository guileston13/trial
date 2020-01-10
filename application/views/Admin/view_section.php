<html>
    <body>
        <h1>Section</h1>
        <table border=1>
            <tr>
                <td>Section</td>
                <td>School Year</td>
                <td>Adviser</td>
            </tr>
           
            <?php foreach($add as $adding){?>
            <tr>
                <td><?php echo $adding->section_name?></td>
                <td><?php echo $adding->schoolyear_start?></td>
                <td><?php echo $adding->firstname?> <?php echo $adding->lastname?></td>
                <td><a href="<?php echo base_url()?>assign_subject/view_specific_section/<?php echo $adding->section_id?>">View section</a></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>