<?php
#Jangan Diubah Nanti Eror
#Jangan Di Decode Juga

system('clear');
system('python log.py');
echo "Input Ip Address : ";
$add = trim(fgets(STDIN));
class requests{

     public $link;

     public function set_link($link){
        $this->link = $link;
     }


     public function get_link(){
        return $this->link;
     }

}

$req = new requests();

$req->set_link(file_get_contents("http://api.ipstack.com/$add?access_key=70ab8800007bd96cbc5fd3aa509fba22"));

$json = $req->get_link();


$ubah = json_decode($json);
system('clear');
system('python log.py');


echo "╭─[•]Ip : {$ubah->ip}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Type : {$ubah->type}\n";
echo "├─[•]Continent code : {$ubah->continent_code}\n";
echo "├─[•]Continent Name : {$ubah->continent_name}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Country Code : {$ubah->country_code}\n";
echo "├─[•]Country Name : {$ubah->country_name}\n";
echo "├─[•]Region Code : {$ubah->region_code}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Region Name : {$ubah->region_name}\n";
echo "├─[•]City : {$ubah->city}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Zip : {$ubah->zip}\n";
echo "├─[•]Latitude : {$ubah->latitude}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Longitude : {$ubah->longitude}\n";
echo "├─[•]Geoname Id : {$ubah->location->geoname_id}\n";
echo "├─[•]────────────────────────────────────\n";
echo "├─[•]Flag Emoji : {$ubah->location->country_flag_emoji}\n";
echo "├─[•]Calling Code : {$ubah->location->calling_code}\n";
echo "├─[•]────────────────────────────────────\n";
echo "___________________________________________________________\n";

?>
