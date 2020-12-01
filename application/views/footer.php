<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Link Lainnya</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="<?php echo site_url('Home'); ?>"><i class="fa fa-angle-right"></i> Home</a></li>
              <li><a href="<?php echo site_url('Home/galeri'); ?> "><i class="fa fa-angle-right"></i> Gallery</a></li>
              <li><a href="<?php echo site_url('Home/berita'); ?>"><i class="fa fa-angle-right"></i> Berita</a></li>
              <li><a href="<?php echo site_url('Home/kontak'); ?>"><i class="fa fa-angle-right"></i>Kontak </a></li>
            </ul>
          </div>
          <div class="col-md-6">
                <?php
                            $masjid = $this->Home_m->selectData();
                            foreach ($masjid as $row){                         
                ?>
            <div class="main-heading left_text">
              <h2>Kontak Kami</h2>
            </div>
            <p><?php echo $row->nama_masjid; ?> <br>
            <?php echo $row->alamat_masjid; ?> <br>
            <?php echo $row->email_masjid; ?> <br>
              <span style="font-size:18px;"><a href="<?php echo $row->no_telp; ?> "><?php echo $row->no_telp; ?> </a></span></p>

              <?php } ?>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>LTI© Copyrights 2020 Design by <a href="https://www.lauwba.com/">lauwba.com</a></p>
      </div>
    </div>
    
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="<?php echo base_url();?>js/menumaker.js"></script>
<!-- wow animation -->
<script src="<?php echo base_url();?>js/wow.js"></script>
<!-- custom js -->
<script src="<?php echo base_url();?>js/custom.js"></script>
<!-- revolution js files -->
<script src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
<!-- <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: -7.7862586, lng: 110.366998},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = '<?php echo base_url();?>assets/images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script> -->
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
