
<div style="width:600px; box-shadow: 1px 1px 1px 1px white;
        margin:10px;
        background-color: #E0D8D6;">


<form action = "">
    <textarea name = "data" placeholder = "Upload json here"></textarea>
    <input type="submit">
</form>


<?php

        $data  = $_GET['data'] ?? null;

        if($data){
            //$json = '[{"name":"xxx","phone":"123","email":"a@a.com"},{"name":"yyy","phone":"456","email":"b@a.com"},{"name":"zzz","phone":"678","email":"c@a.com"}]';
            $json_decoded = json_decode($data,true);
            $table_headers  =  array_keys($json_decoded[0]);

            //
            print_r($table_headers);
            echo '<table>';
            echo '<thead>';
                echo "<tr>";

            foreach($table_headers as $key ){
            
                   echo " <th>$key</th>";
            }
            echo "
            </thead>    
            <tbody>";

            print_r($json_decoded);
            foreach($json_decoded as $result){
                echo '<tr>';
            foreach($result as $key => $value){
                
                    echo '<td>'.$value.'</td>';
    
                
            }
            echo '</tr>';
            }
            echo '</table>';
    }
?>
</div>
