#!bin/usr/bash

blue="\033[34;1m"
green="\033[32;1m"
purple="\033[35;1m"
cyan="\033[36;1m"
red="\033[31;1m"

clear
python log2.py
echo -e $green'
╭▧「 Menu 」
├❥1.Lacak
├❥2.Cek Ip
├❥3.Exit Tools
╰▧'
echo -e $cyan''
read -p "Input Menu: " int
if [[ $int == 1 ]]; then
php lacak.php
fi
if [[ $int == 2 ]]; then
python cekip.py
fi
if [[ $int == 3 ]]; then
echo "THX FOR USING TOOLS"
fi
if [[ $int == '' ]]; then
echo "Input Salah Mengulang..."
sleep 3
bash main.sh
fi
