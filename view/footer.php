<!-- <div class="row mb footer"></div>
<footer>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="pre-footer">
            <p>Đăng ký nhận bản tin   </p>
            <input type="text" placeholder="Nhập địa chỉ email của bạn">
            <button type="submit">Đăng ký</button>
        </div>
        
        <div class="footer">
            <p>© 2023, Bản quyền thuộc về Sách. <br>
            Follow us :
            <a href="#"><i class="fab fa-facebook-f footer__icon"></i></a> 
            <a href="#"><i class="fab fa-twitter footer__icon"></i></a>
            <a href="#"><i class="fab fa-pinterest footer__icon"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping menu-icon"></i></a>
            </p>
            <a href="#top"><img class="footer__icon--top " src="https://cdn.iconscout.com/icon/premium/png-256-thumb/top-arrow-26-1112323.png" alt="top"></a>
            <script src="./js/data.js"></script>
            <script src="./js/template.js"></script>
        </div>        
    </footer> -->
    <div class="row">
    <footer>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="pre-footer">
            <p>Đăng ký nhận bản tin   </p>
            <input type="text" placeholder="Nhập địa chỉ email của bạn">
            <button type="submit">Đăng ký</button>
        </div>
        
        <div class="footer">
            <p>© 2023, Bản quyền thuộc về Sáchs. <br>
            Follow us :
            <a href="#"><i class="fab fa-facebook-f footer__icon"></i></a> 
            <a href="#"><i class="fab fa-twitter footer__icon"></i></a>
            <a href="#"><i class="fab fa-pinterest footer__icon"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping menu-icon"></i></a>
            </p>
            <a href="#top"><img class="footer__icon--top " src="https://cdn.iconscout.com/icon/premium/png-256-thumb/top-arrow-26-1112323.png" alt="top"></a>
            <script src="./js/data.js"></script>
            <script src="./js/template.js"></script>
        </div>        
    </footer>
</div>
<!-- Start js slideshow -->
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!-- End js slideshow -->

