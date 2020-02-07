<?php

$url = parse_url(getenv("DATABASE_URL"));

return (object) array(
    'db_server' =>$url["localhost"],
    'db_username' => $url["root"],
    'db_pass' => $url[""],
    'db_database' => substr($url["line"], 1),
    'channelID' => 'Uee4a391925a5eef42e4a0d6e9c56c5c4',
    'channelAccessToken' => 'uH7/FdqH5XQrxB0t4yGuZmgfl92Y7ZpFa45bsGLitYHkE+eqbB+Sind850wztPqItL4WvDJjLW2eozCwS9Scs0dllMVR/wjLDG55+TzIk9/gPH10nYKQogSqbja+x+ZSAx1uR3aFpOfeNhjNplZhhAdB04t89/1O/w1cDnyilFU=',
    'channelSecret' => '98cb4e8e9de7032d538b36851e9c9d48',

);

?>
