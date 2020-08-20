
      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/bg-express.jpg')">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1>Aplikasi pengecekan Nomor Resi Express</h1>
                <p class="mb-5">Masukkan nomor resi anda untuk melakukan pencarian</p>
                <form action="#">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" v-model="noresi" placeholder="Masukkan nomor resi">
                    <button @click="getBarang" type="button" class="btn btn-primary text-white px-4 nav-link" :disabled="load">{{load ? 'Loading...':'Cek No. Resi'}}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END .ftco-cover-1 -->
      </div>

      <div class="site-section" id="hasilpencarian" tabindex="-1" v-show="length > 0 && error == false">
        <div class="container">
          <div class="row block-heading-1" data-aos="fade-up" data-aos-delay="">
            <div class="col-sm-8">
              <h2>Info Pengiriman Barang</h2>
            </div>
            <table class="table">
              <tbody>
                <tr>
                  <td width="150">No. Resi</td>
                  <td width="20" align="center">:</td>
                  <td><strong>{{ databarang.noresi }}</strong></td>
                </tr>
                <tr>
                  <td width="150">Status</td>
                  <td width="20" align="center">:</td>
                  <td><strong :class="(databarang.sts_kirim==1)?'text-warning':(databarang.sts_kirim==0?'text-muted':'text-success')">{{ (databarang.sts_kirim==1)?'Sedang Dalam Pengiriman':(databarang.sts_kirim == 0?'Belum diproses':'Paket Sudah Diterima') }}</strong></td>
                </tr>
                <tr>
                  <td width="150">Dikirim Tanggal</td>
                  <td width="20" align="center">:</td>
                  <td>{{ frontEndDateFormat(databarang.tgl_kirim) }} {{ databarang.jam_kirim }}</td>
                </tr>
                <tr>
                  <td width="150">Dikirim Oleh</td>
                  <td width="20" align="center">:</td>
                  <td>{{ databarang.namapengirim }}<br>{{databarang.kotapengirim}}</td>
                </tr>
                <tr>
                  <td width="150">Dikirim Ke</td>
                  <td width="20" align="center">:</td>
                  <td>{{ databarang.namapenerima }}<br>{{databarang.alamatpenerima}}, {{databarang.kotapenerima}}, {{databarang.provpenerima}}</td>
                </tr>
                <tr v-if="databarang.sts_kirim == 2">
                  <td width="150">Diterima pada Tanggal</td>
                  <td width="20" align="center">:</td>
                  <td>{{ databarang.updated_at }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <div id="pencarianerror" class="site-section" v-show="error == true">
          <div class="container">
            <div class="alert alert-danger text-center block-heading-1" data-aos="fade-up" data-aos-delay="">
              <strong>
                <i :class="class"></i> {{ message }}
              </strong>
            </div>
          </div>
        </div>

      <div class="site-section" id="about-section">

        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Tentang Kami</h2>
                <p>Trans Express Logistic adalah Perusahaan berskala Nasional yang bergerak di bidang pengelolaan jasa transportasi dan logistik hadir guna menjawab tantangan terhadap layanan pengiriman yang cepat dan akurat</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1">
                <h2>Product Kami</h2>
                <p>Inilah beberapa produk dan layanan milik perusahaan kami.</p>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-all">
            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-ferry"></span>
              </div>
              <h3 class="mb-3">Sea Freight</h3>
              <p></p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-airplane"></span>
              </div>
              <h3 class="mb-3">Air Freight</h3>
              <p></p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-box"></span>
              </div>
              <h3 class="mb-3">Package & Handling</h3>
              <p></p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-lorry"></span>
              </div>
              <h3 class="mb-3">Trucking</h3>
              <p></p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-warehouse"></span>
              </div>
              <h3 class="mb-3">Warehouse</h3>
              <p></p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-add"></span>
              </div>
              <h3 class="mb-3">Government & Shipment</h3>
              <p></p>
            </div>

          </div>
        </div>
      </div>
      
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Tetap Dekat</span>
              <h2>Kontak Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1383460005286!2d110.34915311520915!3d-6.992982194948366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a9421e0e23d%3A0xff88407128454bb2!2sJl.%20Prof.%20Dr.%20Hamka%2C%20Tambakaji%2C%20Kec.%20Ngaliyan%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1579851089109!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Info Kontak</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Alamat:</span>
                  <span>RUKO NGALIYAN BARU, JL. PROF DR. HAMKA BLOK E NO. 110, NGALIYAN SEMARANG JAWA TENGAH 50181</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>trans.express@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


<script>
  new Vue({
    el: '#app',
    data: {
      load:false,
      databarang:{
        noresi:'',
      },
      length:0,
      error:false,
      noresi:'',
      message:'',
      class:'',
    },
    methods:{
      getBarang(){
        this.error = false;
        this.load=true;
        axios.get("BarangServices.php?noresi="+this.noresi)
        .then(response => {
          console.log(response);
          if(response.data.status == '200'){
            this.length = response.data.data.length;
            this.databarang = response.data.data[0];
            this.load = false;
            window.scrollBy(0, 690);
            // $('#hasilpencarian').attr("tabindex", -1).focus();
          } else if(response.data.status == '500'){
            console.log(response.data.message);
            this.error = true;
            this.message = response.data.message;
            this.class= "icon-info-circle";
            this.length = response.data.data.length;
            this.load = false;
            window.scrollBy(0, 500)
          }
        })
        .catch(error => {

        });
      },
      frontEndDateFormat(date) {
                date = moment(date, 'YYYY-MM-DD');
                if(date.isValid())
                    return moment(date, 'YYYY-MM-DD').format('DD-MM-YYYY');
                else
                    return '-';
            }
    }
  })
</script>