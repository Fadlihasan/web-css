<?php
require 'funtion.php';

$id = $_GET["id"];

if( hapus2($id) > 0){
     echo  "<script>
                alert('data berhasil dihapus');
                document.location.href = 'tutors.php';
            </script>
        ";
}else{
    echo  "<script>
                alert('data gagal dihapus');
                document.location.href = 'tutors.php';
            </script>
        ";
}