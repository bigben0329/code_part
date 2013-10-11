#!/bin/sh

UIN="$1"
ID="$2"

echo "$UIN will add collection $ID..."


echo "############ add mini before #############"
/tmp/tool/add_mini_card 1 $UIN 
echo "############ add mini        #############"
/tmp/tool/add_mini_card 2 $UIN $ID 1
echo "############ add mini after  #############"
/tmp/tool/add_mini_card 1 $UIN 



echo "############ add collction before #############"
/tmp/tool/get_records $UIN
echo "############ add collction        #############"
/tmp/tool/add_record $UIN $ID 0
echo "############ add collction after  #############"
/tmp/tool/get_records $UIN
