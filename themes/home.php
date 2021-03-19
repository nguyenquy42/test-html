<main>

  <section class="">
    <div class="b1"><img class="w-100" src="https://vesinhcongnghiep.com/uploads/files/2020/08/11/BANNERWEB9.jpg" alt="img-banner"></div>
  </section>

  <!-- Contact Top start -->
  <section class="section_contact_top position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="d-flex align-items-center">
            <div class="img_contact_top">
              <i class="flaticon-email-1"></i>
            </div>
            <div class="content_contact_top">
              <p class="title_c_top">Liên hệ nhanh</p>
              <span>Phone: <a href="tel:0936750009">0936750009</a></span> <br>
              <span>Email: <a href="mailto:vesinhcongnghiep.com">vesinhcongnghiep.com</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex align-items-center">
            <div class="img_contact_top">
              <i class="flaticon-location"></i>
            </div>
            <div class="content_contact_top">
              <p class="title_c_top">Địa chỉ</p>
              <span>Số 17 Mai Chí Thọ, <br> Phường Bình Khánh, Quận 2, TPHCM</span> <br>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact_about_top">
            <p>Đi đầu trong dịch vụ làm sạch khu công nghiệp, cam kết hài lòng 100%</p>
            <span>Chuyên cung cấp dịch vụ vệ sinh công nghiệp tại TP Hồ Chí Minh và các tỉnh thành lân cận với đội ngũ chuyên viên kinh nghiệm</span> <br>
            <a class="btn__link mt-2" href="about">Xem Thêm <i class="flaticon-right-arrow"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Top end -->

  <!-- list Service start -->
  <section class="List_service sectipn_p pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center title_main">
            <p class="title_main_intro">Những dịch vụ nổi bật của chúng tôi</p>
            <h2 class="title_main_content">Dịch Vụ <span class="title_main_name">Năm Sao</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
          <div class="col-lg-4">
            <div class="service_items mb-4">
              <div class="service_item_img">
                <a href="#"><img src="<?= BASE_URL ?>/assets/images/1.jpg" alt="img"></a>
              </div>
              <div class="service_item_content">
                <a href="#">
                  <h3 class="title">Dịch vụ lau kính toà nhà</h3>
                </a>
                <p>Dịch vụ khử trùng diệt khuẩn đang ngày càng trở nên cấp thiết giữa thực trạng sức khỏe toàn cầu bị đe dọa bởi đại dịch COVID-19. Tất cả mọi người, mọi loại hình và cơ sở kinh doanh, môi trường sống...</p>
                <a class="btn__link blog_link" href="#"><span>Xem Thêm</span> <i class="flaticon-right-arrow icon-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="text-center mt-5">
        <p>Đưa ra các biện pháp vệ sinh chất lượng cao. <a class="category_link" href="#">Hãy xem thêm các bài viết của chúng tôi!</a></p>
      </div>

    </div>
  </section>
  <!-- list Service start -->

</main>