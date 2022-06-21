<?php
$gcesStaffs = [

    "Academic" => [
        [
            "Name" => "Ramesh Thapa",
            "Address" => "Lamachaur",
            "phones" => ["982650000",""],
            "subjects" => ["pst"]
        ],
        [
            "Name" => "Nishal Gurung",
            "Address" => "Bagar",
            "phones" => ["982651112","7454"],
            "subjects" => ["Java", "web"]
        ],
        [
            "Name" => "Rajendra Thapa",
            "Address" => "Mahendrapul",
            "phones" => ["984600000","541254"],
            "subjects" => ["C++"]
        ]
    ],
    "Non-academic" => [
        [
            "Name" => "Hari KC",
            "Address" => "Kudar",
            "phones" => ["9856011111",""]
        ],
        [
            "Name" => "RamBabu KC",
            "Address" => "Bagar",
            "phones" => ["9856011111","541241"]
        ],
    ]
   
];
echo '<table border="2px" >';
echo '<tr><th>Faculty</th><th>Name</th> <th>Address</th> <th colspan=2>Phone number</th> <th colspan=2>Subjects</th></tr>';
echo '<tr>';
foreach ($gcesStaffs as $faculty => $details){
    echo '<tr>';
    
        foreach($details as $detail => $datas){
            echo "<td>$faculty</td>";
           foreach($datas as $data => $values){
        
           
            
            if(is_array($values)){
              
            
                foreach($values as $value => $v){
                    // echo "<td>$faculty</td>";
                    echo "<td> $v</td>";
                

                }
            }else {
                // echo "<td >$faculty</td>";

                echo "<td> $values </td>";
            
            }
           }
           echo '</tr>';
    
        
        
    } echo '</tr>';
}
    echo '</table>';

  

