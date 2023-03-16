
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);

                        ?>   
                                <div class="row mb10px">
                                Xin chào<br>
                                <?=$user?>                              
                            </div>
                            <div class="row mb10px">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>

                                <?php if($role==1){     ?>
                                <li>
                                    <a href="../admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php } ?>


                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>
                        <?php
                            }else{

                        ?>    
                     

                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10px">
                                Tên đăng Nhập<br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10px">
                                Mật khẩu<br> 
                                <input type="password" name="pass" >
                            </div>
                            <div class="row mb10px">
                                <input type="checkbox" name="" >
                                Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10px">
                                <input class="btn--login" type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        
                        <li>
                            <a href="index.php?act=dangky">Đăng ký</a>
                        </li>
                        <?php    }   ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm= "index.php?act=sanpham&iddm=".$id;
                                echo '<ul>
                                        <li id="boxcontent--dm">
                                            <a href= "'.$linkdm.'">'.$name.'</a>
                                        </li>
                                    </ul>';
                            }
                        ?>
                    </div>
                    <div class="boxfooter searbox">
                    
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                    <?php
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                $linkdm= "index.php?act=sanpham&iddm=".$id;
                                echo '<div class="row mb10px top10">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                       </div>';
                                       
                            }
                        ?>
                       
                    </div>
                </div>

            