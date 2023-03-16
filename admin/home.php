<div class="boxcenter">
    <div class="row">
        <!-- <div class="r">
            <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row frmcontent">
            <form action="#" method="POST">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" id="">
                </div>
                <div class="row mb10">
                    <input type="submit" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="#"><input type="button" value="DANH SÁCH"></a>
                </div>
            </form>

        </div> -->

        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent">
                        Tên đăng Nhập<br>
                        <input type="text" name="">
                        <br>
                        Mật khẩu<br> 
                        <input type="password" name="">
                        <br>
                        <input type="checkbox" name="" >
                        Ghi nhớ tài khoản?
                        <br>
                        <input class="btn--login" type="submit" value="Đăng nhập">
                        <br>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <br>
                        <li><a href="#">Đăng ký</a></li>
                        
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm= "index.php?act=sanpham&iddm=".$id;
                                echo '<li id="boxcontent--dm">
                                        <a href= "'.$linkdm.'">'.$name.'</a>
                                    </li>';
                            }
                        ?>
                    </div>
                    <div class="boxfooter"></div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="boxcontent"></div>
                </div>

            </div>

            <div class="boxphai">
                <div class="row">
                    <div class="banner">
                        <img src="https://cdn0.fahasa.com/media/magentothem/banner7/AlphaBooks022023_840x320.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i= 0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $hinh= "../upload/".$img;
                            if(($i== 2)|| ($i== 5)||($i== 8)){
                                $mr= "mr";
                            }else{
                                $mr="";
                            }
      
                            echo '<div class="boxsp">
                                    <div class="row_img"><img src="'.$hinh.'" alt=""></div>
                                    <a  class="row_a-name" href="#">'.$name.'</a>
                                    <p class="boxsp-gia">'.number_format($price, 3).'đ</p>
                                    <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                                    <br>
                                    <input type="button" value="Thêm giỏ hàng">
                                </div>';
                            
                        }
                    ?>
                    


                    <!-- <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                </div>
                <div class="row"><br><br></div>
                <div class="row">
                    <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp mr_forSP">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div>
                    <div class="boxsp">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/q/u/quangganhlodi-biacung1_thanh_ly.jpg" alt="">
                        <a href="#">Quẳng gánh lo đi và vui sống</a>                        
                        <p class="boxsp-gia">52.000đ</p>
                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                    </div> -->
                </div>
                <div class="row btn">
                    <input class="loadSPMore" type="button" value="Xem thêm">
                </div>
        
                
            </div>
            

        </div>
  
    </div>

</div>
