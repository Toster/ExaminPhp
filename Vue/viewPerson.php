<?php include("controlleur/person.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Person</title>
</head>
<body>

<ul>

    <li>

        <h1> <?php echo $person1->getName();?> </h1>

        <h3> <?php echo $person1->getFirstName();?> </h3>

        <h3> <?php echo $person1->getAge();?> </h3>

    </li>
            
    <li>

        <h1> <?php echo $person2->getName();?> </h1>

        <h3> <?php echo $person2->getFirstName();?> </h3>

        <h3> <?php echo $person2->getAge();?> </h3>

    </li>         

    <li>

        <h1> <?php echo $person3->getName();?> </h1>

        <h3> <?php echo $person3->getFirstName();?> </h3>

        <h3> <?php echo $person3->getAge();?> </h3>

    </li>
            
</ul>

</body>
</html>