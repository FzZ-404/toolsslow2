#!/system/xbin/bash

cy='\033[36;1m'
gr='\033[32;1m'
name='Tools by:FuzZza_KN'
echo 
clear
echo $cy ""
read -p "Your Name: " gg
clear
sh fck
sleep 1
echo ""
echo "Thanks to====:(CYBER Silent Squad)====" | lolcat
echo "         ====:(    ANONYMOUS     )====" 
echo $cy
trap ctrl_c INT
ctrl_c() {
clear
echo $gr ""
sleep 1
exit
}
echo "Tools BY:FuzZza_KN"
echo $cy "__________________________________________________"
echo "{1} kali linux" | lolcat
echo $cy "__________________________________________________"
echo "{2} hack kamera" | lolcat
echo $cy "__________________________________________________"
echo "{0} keluar / tekan CTRL+C " | lolcat
echo $cy "__________________________________________________"
echo $gr ""
read -p "[root@$name:~# " pill

if [ $pill = 1 ] || [ $pill = 1 ]
then
clear
echo $gr "install linux\ninstall bahan bahan dulu ya"
cd
pkg install wget openssl-tool proot -y && hash -r && wget https://raw.githubusercontent.com/EXALAB/AnLinux-Resources/master/Scripts/Installer/Kali/kali.sh && bash kali.sh
fi

if
[ $pill = 2 ] || [ $pill = 2 ]
then
clear
echo $gr "install bahan bahan dulu ya cok"
cd
pkg install php
pkg install openssh
git clone github.com/thelinuxchoice/saycheese
echo $gr "oke install selesai\ncara buka nya ketik\ncd\ncd saycheese\nsh saycheese.sh"
fi

if
[ $pill = 0 ] || [ $pill = 0 ]
then
clear
echo $gr ""
sleep 1
exit
fi

          

    