<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Customers</title>
        <style type="text/css">
            table.customers {
                width: 100%;
            }
            
            table.customers thead {
                background-color: #eee;
                text-align: left;
            }
            
            table.customers thead th {
                border: solid 1px #fff;
                padding: 3px;
            }
            
            table.customers tbody td {
                border: solid 1px #eee;
                padding: 3px;
            }
            
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div><a href="index.php?op=new">Add new contact</a></div>
        <table class="customers" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>    <th>#</a></th>
                    <th>Services</a></th>
                    <th>Type</a></th>
                    <th>Name</a></th>
                    <th>Queued up</a></th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                   <td><?php print htmlentities($contact->id); ?></a></td>
                    <td><?php print htmlentities($contact->services); ?></a></td>
                    <td><?php print htmlentities($contact->type); ?></td>
                    <td><?php print htmlentities($contact->title); ?> <?php print htmlentities($contact->organisation); ?>  <?php print htmlentities($contact->first_name); ?> <?php print htmlentities($contact->last_name); ?></td>
                    <td><?php print htmlentities($contact->queued_at); ?></td>
                  
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
