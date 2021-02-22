<?php

// CODE BY DAVIT ID

// REST API
$url = "https://ostch.herokuapp.com/api/v1/hash-identifier?hash=";

// Banner
function banner() {
echo "\033[1;34m      _________        \n";
echo "    _|_________|_      \n";
echo "   /             \     \n";
echo "  | \033[1;36m###  \033[1;33mHASH \033[1;36m### \033[1;34m|    \n";
echo "  | \033[1;36m### \033[1;31mIDENT \033[1;36m### \033[1;34m|    \n";
echo "   \_____________/     \n\n\033[0m";
}

system("clear");
banner();
echo "\033[1;37mHash \033[1;33m~> \033[1;31m";
$url .= trim(fgets(STDIN));
$req = file_get_contents($url);
$data = json_decode($req, true);
$type_hash = $data["hash_type"];
$type = $data["char_type"];

echo "\n\033[1;36mIdentify \033[1;33m~> \033[1;32m$type_hash";
echo "\n\033[1;36mType     \033[1;33m~> \033[1;32m$type\033[0m\n\n";

?>
