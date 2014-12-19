<?
include "../database/database.php";
$data = array(
        1=>"ศรีษะ",
        2=>"ลำคอ",
        3=>"ตา",
        4=>"จมูก",
        5=>"หู",
        6=>"ท้อง",
        7=>"ปาก",
        8=>"หน้าอก",
        9=>"ร่างกาย",
        10=>"พฤติกรรม",
        11=>"โรคแทรกซ้อน"
);
foreach($data as $key => $value){
    $insert = array(
        'id_type' => $key,
        'name_type' => $value
    );
    db_insert('type_wrong' , $insert);
}
?>


