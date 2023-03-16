<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "header.php";
    include "../global.php";
    
    $spnew= loadAll_sanpham_home();
    $dsdm= loadAll_danhmuc();
    //controller
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch ($act) {
            case 'adddm':

                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ 
                    $tenloai= $_POST['tenloai'];
                    $sql= "insert into danhmuc(name) values('$tenloai')";
                    pdo_execute($sql);
                    $thongbao= "<i>Thêm thành công</i>";

                }
                include "danhmuc/add.php";
                break;

            case 'listdm':
                $sql= "select * from danhmuc order by id desc";
                $listdanhmuc= pdo_query($sql);
                include "danhmuc/list.php"; echo "case listdm";
                break;
               

            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $sql= "delete from danhmuc where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql= "select * from danhmuc order by id desc";
                $listdanhmuc= pdo_query($sql);                               
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id']> 0)){               
                    $sql= "select * from danhmuc where id=".$_GET['id'];
                    $dm= pdo_query_one($sql);
                
                }
                include "danhmuc/update.php";
                break;
            
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){  //co ton tai and clicked          
                    $tenloai= $_POST['tenloai'];
                    $id=$_POST['id'];
                    $sql= "update danhmuc set name='".$tenloai."' where id=".$id ;
                    pdo_execute($sql);
                    $thongbao= "Cập nhật thành công.";                                                        
                }                                
                $sql= " select * from danhmuc order by id desc";
                $listdanhmuc= pdo_query($sql);
                include "danhmuc/list.php";
                break;
            
            //controller for sanpham BOOK
            case 'addsp':
                
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    
                    $target_dir= "../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        echo "img";
                    }else{
                        echo "not img";
                    }

                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao= "Thêm sách thành công.";
                }
                $listdanhmuc= loadAll_danhmuc();
                // var_dump($listdanhmuc);
                include "sanpham/add.php";
                break;
            case 'listsp':
                // $sql= "select * from sanpham order by id desc";
                $listsanpham= loadAll_sanpham();
                include "sanpham/list.php"; echo "case listsp";
                break;

            case 'dskh':
                include "";
                break;
            case 'dsbl':
                include "";
                break;
            case 'thongke':
                include "";
                break;
            
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
        
    }
    include "footer.php";
    

    //include "home.php";
?>