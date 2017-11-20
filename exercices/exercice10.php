<?php 

$users = array();
for ($i=0 ; $i <= 20; $i++)
{
    $user = array ("user" => "user" . $i, 
                "pass" => "pass" . $i);

    array_push($users, $user);
}

for ($i = count($users) -1 ; $i >= 0; $i--)
{
    echo "\nutilisateur n° " . $i;
    echo "( ";
    foreach ($users[$i] as $key => $value) {
        echo "$key = $value , ";
    }
    echo ")";
}

$utilisateurs = array();
for ($i=1; $i <= 20; $i++)
{
    $user = array("user" => "user".$i,
                    "pass" => "pass".$i);
    $utilisateurs[$i] = $user;
}
for ($i = 20 ; $i > 0; $i--)
{
    echo "\nutilisateur n° " . $i;
    echo "( ";
    foreach ($users[$i] as $key => $value) {
        echo "$key = $value , ";
    }
    echo ")";
}

?>