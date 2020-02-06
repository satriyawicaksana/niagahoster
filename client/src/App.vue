<template>
  <div id="app">
    <header>
      <div>
        <div>
          <div>label</div>
          <a href="#" class="label-title">gratis ebook 9 cara cerdas menggunakan domain [x]</a>
        </div>
        <div>
          <ul>
            <li>
              <a href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                0274-5305505
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-comments" aria-hidden="true"></i>
                live chat
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                member area
              </a>
            </li>
          </ul>
        </div>
      </div>
      <nav>
        <a href="#">
          <img src="#" alt="niagahoster logo" />
        </a>
        <ul>
          <li>
            <a href="#">Hosting</a>
          </li>
          <li>
            <a href="#">Domain</a>
          </li>
          <li>
            <a href="#">Server</a>
          </li>
          <li>
            <a href="#">Website</a>
          </li>
          <li>
            <a href="#">Afiliasi</a>
          </li>
          <li>
            <a href="#">Promo</a>
          </li>
          <li>
            <a href="#">Pembayaran</a>
          </li>
          <li>
            <a href="#">Review</a>
          </li>
          <li>
            <a href="#">Kontak</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="main-banner">
        <div>
          <h1>PHP Hosting</h1>
          <p>Cepat, Handal, penuh dengan modul PHP yang Anda butuhkan</p>
          <ul>
            <li>
              <span class="icon check">Solusi PHP untuk performa query yang lebih cepat.</span>
            </li>
            <li>
              <span>Konsumsi memori yang lebih rendah.</span>
            </li>
            <li>
              <span>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 7.</span>
            </li>
            <li>
              <span>Fitur enkripsi IonCube dan Zend Guard Loaders</span>
            </li>
          </ul>
        </div>
        <div>
          <img src="#" alt="PHP 7 Support" />
        </div>
      </div>
      <div class="feature-banner">
        <div>
          <img src="#" alt="zend guard" />
          <p>PHP Zend Guard Loader</p>
        </div>
        <div>
          <img src="#" alt="zend guard" />
          <p>PHP Composer</p>
        </div>
        <div>
          <img src="#" alt="zend guard" />
          <p>PHP IonCube Loader</p>
        </div>
      </div>
      <section class="pricing-section">
        <h2>Paket Hosting Singapura yang Tepat</h2>
        <h3>Diskon 40% Domain dan SSL Gratis untuk Anda</h3>
        <div class="pricing-card">
          <h4>{{ listprice[0].name }}</h4>
          <p class="strikethrough">Rp. {{ listprice[0].actualprice }}</p>
          <p class="pricing-now">Rp. {{ listprice[0].promoprice }}/bln</p>
          <p class="pricing-user">{{ listprice[0].user }} Pengguna Terdaftar</p>
          <div>
            <ul>
              <li>
                <span>
                  <strong>0.5X RESOURCE POWER</strong>
                </span>
              </li>
              <li>
                <span>
                  <strong>500 MB</strong> Disk Space
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Bandwidth
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Databases
                </span>
              </li>
              <li>
                <span>
                  <strong>1</strong> Domain
                </span>
              </li>
              <li>
                <span>
                  <strong>Instant</strong> Backup
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited SSL</strong> Gratis Selamanya
                </span>
              </li>
            </ul>
          </div>
          <button class="secondary-btn">Pilih Sekarang</button>
        </div>
        <div class="pricing-card">
          <h4>{{ listprice[1].name }}</h4>
          <p class="strikethrough">Rp. {{ listprice[1].actualprice }}</p>
          <p class="pricing-now">Rp. {{ listprice[1].promoprice }}/bln</p>
          <p class="pricing-user">{{ listprice[1].user }} Pengguna Terdaftar</p>
          <div>
            <ul>
              <li>
                <span>
                  <strong>1X RESOURCE POWER</strong>
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Disk Space
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Bandwidth
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> POP3 Email
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Databases
                </span>
              </li>
              <li>
                <span>
                  <strong>10</strong> Addon Domain
                </span>
              </li>
              <li>
                <span>
                  <strong>Instant</strong> Backup
                </span>
              </li>
              <li>
                <span>
                  <strong>Domain Gratis</strong> Selamanya
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited SSL</strong> Gratis Selamanya
                </span>
              </li>
            </ul>
          </div>
          <button class="secondary-btn">Pilih Sekarang</button>
        </div>
        <div class="pricing-card">
          <h4>{{ listprice[2].name }}</h4>
          <p class="strikethrough">Rp. {{ listprice[2].actualprice }}</p>
          <p class="pricing-now">Rp. {{ listprice[2].promoprice }}/bln</p>
          <p class="pricing-user">{{ listprice[2].user }} Pengguna Terdaftar</p>
          <div>
            <ul>
              <li>
                <span>
                  <strong>1X RESOURCE POWER</strong>
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Disk Space
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Bandwidth
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> POP3 Email
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Databases
                </span>
              </li>
              <li>
                <span>
                  <strong>10</strong> Addon Domain
                </span>
              </li>
              <li>
                <span>
                  <strong>Instant</strong> Backup
                </span>
              </li>
              <li>
                <span>
                  <strong>Domain Gratis</strong> Selamanya
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited SSL</strong> Gratis Selamanya
                </span>
              </li>
              <li>
                <span>
                  <strong>Private</strong> Name Server
                </span>
              </li>
              <li>
                <span>
                  <strong>SpamAssasin</strong> Mail Protection
                </span>
              </li>
            </ul>
          </div>
          <button class="secondary-btn">Pilih Sekarang</button>
        </div>
        <div class="pricing-card">
          <h4>{{ listprice[3].name }}</h4>
          <p class="strikethrough">Rp. {{ listprice[3].actualprice }}</p>
          <p class="pricing-now">Rp. {{ listprice[3].promoprice }}/bln</p>
          <p class="pricing-user">{{ listprice[3].user }} Pengguna Terdaftar</p>
          <div>
            <ul>
              <li>
                <span>
                  <strong>1X RESOURCE POWER</strong>
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Disk Space
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Bandwidth
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> POP3 Email
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited</strong> Databases
                </span>
              </li>
              <li>
                <span>
                  <strong>10</strong> Addon Domain
                </span>
              </li>
              <li>
                <span>
                  <strong>Instant</strong> Backup
                </span>
              </li>
              <li>
                <span>
                  <strong>Domain Gratis</strong> Selamanya
                </span>
              </li>
              <li>
                <span>
                  <strong>Unlimited SSL</strong> Gratis Selamanya
                </span>
              </li>
              <li>
                <span>
                  <strong>Private</strong> Name Server
                </span>
              </li>
              <li>
                <span>
                  <strong>Prioritas</strong> Layanan Support
                </span>
              </li>
              <li>
                <span>*****</span>
              </li>
              <li>
                <span>
                  <strong>SpamExpert</strong> Pro Mail Protection
                </span>
              </li>
            </ul>
          </div>
          <button class="secondary-btn">Diskon 40%</button>
        </div>
      </section>
      <section class="advantage-section">
        <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
        <div class="advantage-div">
          <ul>
            <li>
              <span>max execution time 300s</span>
            </li>
            <li>
              <span>max execution time 300s</span>
            </li>
            <li>
              <span>php memory limit 1024 MB</span>
            </li>
          </ul>
        </div>
        <div class="advantage-div">
          <ul>
            <li>
              <span>post max size 128 MB</span>
            </li>
            <li>
              <span>upload max filesize 128 MB</span>
            </li>
            <li>
              <span>max input vars 2500</span>
            </li>
          </ul>
        </div>
      </section>
      <section class="feature-section">
        <h3>Semua Paket Hosting Sudah Termasuk</h3>
        <feature-card
          title="PHP Semua Versi"
          imglink="icon PHP Hosting_PHP Semua Versi.svg.svg"
        >Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka anda!</feature-card>
        <feature-card
          title="MySQL Versi 5.6"
          imglink="icon PHP Hosting_My SQL.svg"
        >Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</feature-card>
        <feature-card
          title="Panel Hosting cPanel"
          imglink="icon PHP Hosting_CPanel.svg"
        >Kelola website dengan panel canggih yang familiar di hati Anda.</feature-card>
        <feature-card
          title="Garansi Uptime 99.9%"
          imglink="icon PHP Hosting_garansi uptime.svg"
        >Data center yang mendukung kelangsungan website Anda 24/7.</feature-card>
        <feature-card
          title="Database InnoDB Unlimited"
          imglink="icon PHP Hosting_InnoDB.svg"
        >Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</feature-card>
        <feature-card
          title="Wildcard Remote MySQL"
          imglink="icon PHP Hosting_My SQL remote.svg"
        >Mendukung s/d 25 max_user_connections dan 100 max_connections.</feature-card>
      </section>
      <section class="laravel-section">
        <h3>Mendukung Penuh Framework Laravel</h3>
        <div class="laravel-div-container">
          <div>
            <p>
              Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami
              mendukung penuh framework favorit anda
            </p>
            <ul>
              <li>
                <span>
                  Install Laravel
                  <strong>1 klik</strong> dengan Softaculous Installer.
                </span>
              </li>
              <li>
                <span>
                  Mendukung ekstensi
                  <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
                  <strong>fileinfo</strong>.
                </span>
              </li>
              <li>
                <span>
                  Tersedia
                  <strong>Composer</strong> dan
                  <strong>SSH</strong> untuk
                  menginstal packages pilihan Anda.
                </span>
              </li>
            </ul>
            <p class="notes">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            <button class="main-button">Pilih Hosting Anda</button>
          </div>
          <div>
            <img src="#" alt="Laravel Illustration" />
          </div>
        </div>
      </section>
      <section class="modul-section">
        <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
        <div class="modul-div-container">
          <div class="modul-card">list modul card</div>
          <div class="modul-card">list modul card</div>
          <div class="modul-card">list modul card</div>
          <div class="modul-card">list modul card</div>
        </div>
        <button class="secondary-btn">Selengkapnya</button>
      </section>
      <section class="support-section">
        <div>
          <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
          <p>
            SuperMicro
            <strong>Intel Xeon 24-Cores</strong> server dengan RAM
            <strong>
              128
              MB
            </strong> dan teknologi
            <strong>LVE Cloud Linux</strong> untuk stabilitas server
            Anda. Dilengkapi dengan
            <strong>SSD</strong> untuk kecepatan
            <strong>MySQL</strong> dan caching.
            Apache load balancer berbasis LiteSpeed Technologies,
            <strong>CageFS</strong> security,
            <strong>Raid-10</strong> protection dan auto
            backup untuk keamanan website PHP Anda.
          </p>
          <button class="main-btn">Pilih Hosting Anda</button>
        </div>
        <div>
          <img src="#" alt="Support Image" />
        </div>
      </section>
      <div class="social-share">
        <p>Bagikan jika Anda menyukai halaman ini.</p>
        <div class="social-div-container">facebook dll</div>
      </div>
      <div class="help-call">
        <p>
          Perlu
          <span class="uppercase">
            <strong>bantuan?</strong>
          </span> Hubungi Kami :
          <strong>0274-5305505</strong>
        </p>
      </div>
    </main>
    <footer>
      <div class="footer-div">
        <div class="footer-card">
          <h6>hubungi kami</h6>
        </div>
        <div class="footer-card">
          <h6>layanan</h6>
        </div>
        <div class="footer-card">
          <h6>service hosting</h6>
        </div>
        <div class="footer-card">
          <h6>tutorial</h6>
        </div>
      </div>
      <div class="footer-div">
        <div class="footer-card">
          <h6>tentang kami</h6>
        </div>
        <div class="footer-card">
          <h6>kenapa pilih niagahoster?</h6>
        </div>
        <div class="footer-card">
          <h6>newsletter</h6>
          <div class="newsletter-btn-wrapper">
            <input type="email" />
            <button class="main-btn">Berlangganan</button>
          </div>
          <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
        </div>
      </div>
      <div class="footer-div">
        <h6>pembayaran</h6>
        <div>kartu kartu kartu</div>
        <p>Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif</p>
      </div>
      <div class="footer-div copyright">
        <div>
          <p>
            Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC
            Biznet Technovillage Jakarta
          </p>
          <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
        </div>
        <div>
          <a href="#">Syarat dan Ketentuan</a>
          <span>|</span>
          <a href="#">Kebijakan Privase</a>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
//import HelloWorld from "./components/HelloWorld.vue";
import axios from "axios";
import FeatureCard from "./components/FeatureCard.vue";

export default {
  name: "app",
  components: {
    FeatureCard
  },
  data() {
    return {
      listprice: []
    };
  },
  mounted() {
    this.getPrice();
  },
  methods: {
    getPrice() {
      axios({ method: "GET", url: "/api/price" }).then(
        res => {
          console.log(res.data);
          this.listprice = res.data;
        },
        error => {
          console.log(error);
        }
      );
    }
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
