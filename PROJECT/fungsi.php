<?php

    function OtomatisID()
    {
        include("setting.php");
        $querycount="SELECT count(id_transaksi) as LastID FROM tbl_transaksi";
        $result=mysqli_query($db, $querycount);
        
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['LastID'];
    }
    
    function FormatNoTrans($num) {
        $num=$num+1; switch (strlen($num))
        {
            case 1 : $NoTrans = "PK0000".$num; break;
            case 2 : $NoTrans = "PK000".$num; break;
            case 3 : $NoTrans = "PK00".$num; break;
            case 4 : $NoTrans = "PK0".$num; break;
            default: $NoTrans = $num;
        }
        return $NoTrans;
    }
?>