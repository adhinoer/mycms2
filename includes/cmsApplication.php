<?php
    require_once('cmsBase.php');
    class CmsApplication extends CmsBase{
// Di sini kita dapat membuat banyak fungsi yang dapat 
// di panggil oleh USER secara langsung
 
        function addcontent()
        {
            echo 'Di sini akan dibuat fungsi menambah konten';
        }
 
        function viewcontent()
        {
            echo 'Di sini akan dibuat fungsi untuk menampilkan konten';
        }
 
        function anyothertask()
        {
            echo 'Di sini akan ditulis fungsi yang lainnya';
        }
    }
