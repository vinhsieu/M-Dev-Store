<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_size'])){
        
        $delete_cat_id = $_GET['delete_size'];
        
        $delete_cat = "delete from size where id='$delete_cat_id'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('Đã xóa size thành công')</script>";
            
            echo "<script>window.open('index.php?view_size','_self')</script>";
            
        }
        else{
            echo "<script>alert('Xóa Không Thành Công Do Liên Quan Đến Các Mối Quan Hệ Trên Cơ Sơ Dữ Liệu')</script>";
        }
        
    }

?>




<?php } ?>