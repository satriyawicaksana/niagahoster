<template>
  <div id="app">
    <div class="quick-menu">
      <div class="top-header">
        <div class="top-header-left">
          <img src="./assets/images/label.png" alt="label" />
          <a href="#" class="label-title">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</a>
        </div>
        <div class="top-header-right">
          <ul>
            <li class="inline-flex list-item">
              <a href="#">
                <svg
                  class="svg-grey"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 0 24 24"
                  width="24"
                >
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path
                    d="M19.23 15.26l-2.54-.29c-.61-.07-1.21.14-1.64.57l-1.84 1.84c-2.83-1.44-5.15-3.75-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52c-.12-1.01-.97-1.77-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07.53 8.54 7.36 15.36 15.89 15.89 1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z"
                  />
                </svg>
                <span>0274-5305505</span>
              </a>
            </li>
            <li class="inline-flex list-item">
              <a href="#">
                <svg
                  class="svg-grey"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 0 24 24"
                  width="24"
                >
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path
                    d="M20 6h-1v8c0 .55-.45 1-1 1H6v1c0 1.1.9 2 2 2h10l4 4V8c0-1.1-.9-2-2-2zm-3 5V4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v13l4-4h9c1.1 0 2-.9 2-2z"
                  />
                </svg>
                <span>live chat</span>
              </a>
            </li>
            <li class="inline-flex list-item">
              <a href="#">
                <svg
                  class="svg-grey"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 0 24 24"
                  width="24"
                >
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z"
                  />
                </svg>
                <span>member area</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <header>
      <nav class="container">
        <div class="flex-row-spacebetween full">
          <a href="#">
            <img src="./assets/images/logo.png" alt="niagahoster logo" />
          </a>
          <ul>
            <li class="inline">
              <a href="#">Hosting</a>
            </li>
            <li class="inline">
              <a href="#">Domain</a>
            </li>
            <li class="inline">
              <a href="#">Server</a>
            </li>
            <li class="inline">
              <a href="#">Website</a>
            </li>
            <li class="inline">
              <a href="#">Afiliasi</a>
            </li>
            <li class="inline">
              <a href="#">Promo</a>
            </li>
            <li class="inline">
              <a href="#">Pembayaran</a>
            </li>
            <li class="inline">
              <a href="#">Review</a>
            </li>
            <li class="inline">
              <a href="#">Kontak</a>
            </li>
            <li class="inline">
              <a href="#">Blog</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="main-banner">
          <div>
            <h1>PHP Hosting</h1>
            <p>Cepat, Handal, penuh dengan modul PHP yang Anda butuhkan</p>
            <ul>
              <li class="mark">
                <img src="./assets/images/mark.png" alt="v" /> Solusi PHP untuk performa query yang lebih cepat.
              </li>
              <li class="mark">
                <img src="./assets/images/mark.png" alt="v" /> Konsumsi memori yang lebih rendah.
              </li>
              <li class="mark">
                <img src="./assets/images/mark.png" alt="v" /> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 7.
              </li>
              <li class="mark">
                <img src="./assets/images/mark.png" alt="v" /> Fitur enkripsi IonCube dan Zend Guard Loaders
              </li>
            </ul>
          </div>
          <div>
            <img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="PHP 7 Support" />
          </div>
        </div>
        <div class="feature-banner">
          <div>
            <img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="zend guard" />
            <p>PHP Zend Guard Loader</p>
          </div>
          <div>
            <img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="PHP Composer" />
            <p>PHP Composer</p>
          </div>
          <div>
            <img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="PHP IonCube" />
            <p>PHP IonCube Loader</p>
          </div>
        </div>
        <section class="pricing-section">
          <h2>Paket Hosting Singapura yang Tepat</h2>
          <h3>Diskon 40% Domain dan SSL Gratis untuk Anda</h3>
          <div class="pricing-wrapper">
            <div class="pricing-card">
              <h4>{{ listprice[0].name }}</h4>
              <p class="strikethrough">{{ formatCurrency(listprice[0].actualprice) }}</p>
              <p class="pricing-now">{{ formatCurrency(listprice[0].promoprice) }}/bln</p>
              <p class="pricing-user">
                <strong>{{ listprice[0].user }}</strong> Pengguna Terdaftar
              </p>
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
              <p class="strikethrough">{{ formatCurrency(listprice[1].actualprice) }}</p>
              <p class="pricing-now">{{ formatCurrency(listprice[1].promoprice) }}</p>
              <p class="pricing-user">
                <strong>{{ listprice[1].user }}</strong> Pengguna Terdaftar
              </p>
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
            <div class="pricing-card active-pricing-card">
              <img class="best" src="./assets/images/best.png" alt="best" />
              <div class="pricing-card-header">
                <h4 class="active-pricing-card">{{ listprice[2].name }}</h4>
                <p class="strikethrough">{{ formatCurrency(listprice[2].actualprice) }}</p>
                <p
                  class="pricing-now active-pricing-card"
                >{{ formatCurrency(listprice[2].promoprice) }}/bln</p>
              </div>

              <p class="pricing-user pricing-user-active active-pricing-card">
                <strong>{{ listprice[2].user }}</strong> Pengguna Terdaftar
              </p>
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
              <button class="main-btn">Pilih Sekarang</button>
            </div>
            <div class="pricing-card">
              <h4>{{ listprice[3].name }}</h4>
              <p class="strikethrough">{{ formatCurrency(listprice[3].actualprice) }}</p>
              <p class="pricing-now">{{ formatCurrency(listprice[3].promoprice) }}/bln</p>
              <p class="pricing-user">
                <strong>{{ listprice[3].user }}</strong> Pengguna Terdaftar
              </p>
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
                    <span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24"
                        height="24"
                        viewBox="0 0 24 24"
                        width="24"
                      >
                        <g>
                          <path d="M0,0h24v24H0V0z" fill="none" />
                          <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                          <path
                            d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z"
                          />
                        </g>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24"
                        height="24"
                        viewBox="0 0 24 24"
                        width="24"
                      >
                        <g>
                          <path d="M0,0h24v24H0V0z" fill="none" />
                          <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                          <path
                            d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z"
                          />
                        </g>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24"
                        height="24"
                        viewBox="0 0 24 24"
                        width="24"
                      >
                        <g>
                          <path d="M0,0h24v24H0V0z" fill="none" />
                          <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                          <path
                            d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z"
                          />
                        </g>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24"
                        height="24"
                        viewBox="0 0 24 24"
                        width="24"
                      >
                        <g>
                          <path d="M0,0h24v24H0V0z" fill="none" />
                          <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                          <path
                            d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z"
                          />
                        </g>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24"
                        height="24"
                        viewBox="0 0 24 24"
                        width="24"
                      >
                        <g>
                          <path d="M0,0h24v24H0V0z" fill="none" />
                          <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                          <path
                            d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z"
                          />
                        </g>
                      </svg>
                    </span>
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
          </div>
        </section>
        <section class="advantage-section">
          <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
          <div class="advantage-wrapper">
            <div class="advantage-div">
              <ul>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>max execution time 300s</span>
                </li>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>max execution time 300s</span>
                </li>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>php memory limit 1024 MB</span>
                </li>
              </ul>
            </div>
            <div class="advantage-div">
              <ul>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>post max size 128 MB</span>
                </li>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>upload max filesize 128 MB</span>
                </li>
                <li class="mark center">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>max input vars 2500</span>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="feature-section">
          <h3>Semua Paket Hosting Sudah Termasuk</h3>
          <div class="feature-wrapper">
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
          </div>
        </section>
        <section class="laravel-section">
          <h3>Mendukung Penuh Framework Laravel</h3>
          <div class="laravel-wrapper">
            <div>
              <p>
                Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami
                mendukung penuh framework favorit anda
              </p>
              <ul>
                <li class="mark">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>
                    Install Laravel
                    <strong>1 klik</strong> dengan Softaculous Installer.
                  </span>
                </li>
                <li class="mark">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>
                    Mendukung ekstensi
                    <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
                    <strong>fileinfo</strong>.
                  </span>
                </li>
                <li class="mark">
                  <img src="./assets/images/mark.png" alt="v" />
                  <span>
                    Tersedia
                    <strong>Composer</strong> dan
                    <strong>SSH</strong> untuk
                    menginstal packages pilihan Anda.
                  </span>
                </li>
              </ul>
              <p class="notes">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
              <button class="main-btn">Pilih Hosting Anda</button>
            </div>
            <div>
              <img
                src="./assets/svg/illustration banner support laravel hosting.svg"
                alt="Laravel Illustration"
              />
            </div>
          </div>
        </section>
        <section class="modul-section">
          <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
          <div class="modul-wrapper">
            <div class="modul-card">
              <ul>
                <li>IcePHP</li>
                <li>apc</li>
                <li>apcu</li>
                <li>apm</li>
                <li>ares</li>
                <li>bcmath</li>
                <li>bcompiler</li>
                <li>big_int</li>
                <li>bitset</li>
                <li>bloomy</li>
                <li>bz2_filter</li>
                <li>clamav</li>
                <li>coin_acceptor</li>
                <li>crack</li>
                <li>dba</li>
              </ul>
            </div>
            <div class="modul-card">
              <ul>
                <li>http</li>
                <li>huffman</li>
                <li>idn</li>
                <li>igbinary</li>
                <li>imagick</li>
                <li>imap</li>
                <li>inclued</li>
                <li>inotify</li>
                <li>interbase</li>
                <li>intl</li>
                <li>ioncube_loader</li>
                <li>ioncube_loader_4</li>
                <li>jsmin</li>
                <li>json</li>
                <li>ldap</li>
              </ul>
            </div>
            <div class="modul-card">
              <ul>
                <li>nd_pdo_mysql</li>
                <li>oauth</li>
                <li>oci8</li>
                <li>odbc</li>
                <li>opcache</li>
                <li>pdf</li>
                <li>pdo</li>
                <li>pdo_dblib</li>
                <li>pdo_firebird</li>
                <li>pdo_mysql</li>
                <li>pdo_odbc</li>
                <li>pdo_pgsql</li>
                <li>pdo_sqlite</li>
                <li>pgsql</li>
                <li>phalcon</li>
              </ul>
            </div>
            <div class="modul-card">
              <ul>
                <li>stats</li>
                <li>stem</li>
                <li>stomp</li>
                <li>suhosin</li>
                <li>sybase_ct</li>
                <li>sysvmsg</li>
                <li>sysvsem</li>
                <li>sysvshm</li>
                <li>tidy</li>
                <li>timezonedb</li>
                <li>trader</li>
                <li>translit</li>
                <li>uploadprogress</li>
                <li>uri_template</li>
                <li>uuid</li>
              </ul>
            </div>
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
            <img src="./assets/images/Image support.png" alt="Support Image" />
          </div>
        </section>
      </div>
    </main>
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
      <button class="live-chat">
        <svg
          class="svg-grey"
          xmlns="http://www.w3.org/2000/svg"
          height="24"
          viewBox="0 0 24 24"
          width="24"
        >
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M20 6h-1v8c0 .55-.45 1-1 1H6v1c0 1.1.9 2 2 2h10l4 4V8c0-1.1-.9-2-2-2zm-3 5V4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v13l4-4h9c1.1 0 2-.9 2-2z"
          />
        </svg>
        live chat
      </button>
    </div>
    <footer>
      <div class="container">
        <div class="footer-div">
          <div class="footer-card">
            <h6>hubungi kami</h6>
            <a href="tel:+02745305505">0274-5305505</a>
            <p>Senin - Minggu</p>
            <p>24 Jam Nonstop</p>
            <br />
            <p>Jl. Selokan Mataram Monjali</p>
            <p>Karangjati MT I/304</p>
            <p>Sinduadi, Mlati, Sleman</p>
            <p>Yogyakarta 55284</p>
          </div>
          <div class="footer-card">
            <h6>layanan</h6>
            <a href="#">Domain</a>
            <a href="#">Shared Hosting</a>
            <a href="#">Cloud VPS Hosting</a>
            <a href="#">Managed VPS Hosting</a>
            <a href="#">Web Builder</a>
            <a href="#">Keamanan SSL / HTTPS</a>
            <a href="#">Jasa pembukaan Website</a>
            <a href="#">Program Affiliasi</a>
          </div>
          <div class="footer-card">
            <h6>service hosting</h6>
            <a href="#">Hosting Murah</a>
            <a href="#">Hosting Indonesia</a>
            <a href="#">Hosting Singapura SG</a>
            <a href="#">Hosting PHP</a>
            <a href="#">Hosting Wordpress</a>
            <a href="#">Hosting Laravel</a>
          </div>
          <div class="footer-card">
            <h6>tutorial</h6>
            <a href="#">Knowlegdebase</a>
            <a href="#">Blog</a>
            <a href="#">Cara Pembayaran</a>
          </div>
        </div>
        <div class="footer-div">
          <div class="footer-card">
            <h6>tentang kami</h6>
            <a href="#">Tim Niagahoster</a>
            <a href="#">Karir</a>
            <a href="#">Events</a>
            <a href="#">Penawaran & Promo Spesial</a>
            <a href="#">Kontak Kami</a>
          </div>
          <div class="footer-card">
            <h6>kenapa pilih niagahoster?</h6>
            <a href="#">Support Terbaik</a>
            <a href="#">Garansi Harga Termurah</a>
            <a href="#">Datacenter Hosting Terbaik</a>
            <a href="#">Review Pelanggan</a>
          </div>
          <div class="footer-newsletter">
            <h6>newsletter</h6>
            <div class="newsletter-wrapper">
              <div>
                <div class="newsletter-btn-wrapper">
                  <input type="email" placeholder="Email" />
                  <button>Berlangganan</button>
                </div>
                <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
              </div>
              <div>
                <a href="#">
                  <img src="./assets/images/fb.png" alt="Facebook link" />
                </a>
                <a href="#">
                  <img src="./assets/images/tw.png" alt="Twitter link" />
                </a>
                <a href="#">
                  <img src="./assets/images/gl.png" alt="Google Plus link" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-payment">
          <h6>pembayaran</h6>
          <div class="card-holder">
            <img src="./assets/images/bca.png" alt="BCA" />
            <img src="./assets/images/mandiri.png" alt="Mandiri" />
            <img src="./assets/images/bni.png" alt="BNI" />
            <img src="./assets/images/visa.png" alt="Visa" />
            <img src="./assets/images/master.png" alt="Master Card" />
            <img src="./assets/images/bersama.png" alt="ATM bersama" />
            <img src="./assets/images/permata.png" alt="Permata" />
            <img src="./assets/images/prima.png" alt="Prima" />
            <img src="./assets/images/alto.png" alt="Alto" />
          </div>
          <p class="darker">Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif</p>
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
            <a href="#">Kebijakan Privasi</a>
          </div>
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
    },
    formatCurrency(num) {
      return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0
      }).format(num);
      /* return num.toLocaleString("id-ID", {
        style: "currency",
        currency: "IDR"
      }); */
    }
  }
};
</script>

<style>
/** IMPORT FONT */
@font-face {
  font-family: "mon reg";
  src: url("./assets/fonts/montserrat/Montserrat-Regular.otf");
}
@font-face {
  font-family: "mon light";
  src: url("./assets/fonts/montserrat/Montserrat-Light.otf");
}
@font-face {
  font-family: "mon hair";
  src: url("./assets/fonts/montserrat/Montserrat-Hairline.otf");
}
@font-face {
  font-family: "mon bold";
  src: url("./assets/fonts/montserrat/Montserrat-Bold.otf");
}
@font-face {
  font-family: "mon black";
  src: url("./assets/fonts/montserrat/Montserrat-Black.otf");
}
@font-face {
  font-family: "rob reg";
  src: url("./assets/fonts/roboto/Roboto-Regular.ttf");
}
@font-face {
  font-family: "rob bold";
  src: url("./assets/fonts/roboto/Roboto-Bold.ttf");
}
@font-face {
  font-family: "rob bold con";
  src: url("./assets/fonts/roboto/Roboto-BoldCondensed.ttf");
}
@font-face {
  font-family: "rob bold con it";
  src: url("./assets/fonts/roboto/Roboto-BoldCondensedItalic.ttf");
}
@font-face {
  font-family: "rob bold it";
  src: url("./assets/fonts/roboto/Roboto-BoldItalic.ttf");
}
@font-face {
  font-family: "rob con";
  src: url("./assets/fonts/roboto/Roboto-Condensed.ttf");
}
@font-face {
  font-family: "rob con it";
  src: url("./assets/fonts/roboto/Roboto-CondensedItalic.ttf");
}
@font-face {
  font-family: "rob it";
  src: url("./assets/fonts/roboto/Roboto-Italic.ttf");
}
@font-face {
  font-family: "rob light";
  src: url("./assets/fonts/roboto/Roboto-Light.ttf");
}
@font-face {
  font-family: "rob light it";
  src: url("./assets/fonts/roboto/Roboto-LightItalic.ttf");
}
@font-face {
  font-family: "rob med";
  src: url("./assets/fonts/roboto/Roboto-Medium.ttf");
}
@font-face {
  font-family: "rob med it";
  src: url("./assets/fonts/roboto/Roboto-MediumItalic.ttf");
}
@font-face {
  font-family: "rob thin";
  src: url("./assets/fonts/roboto/Roboto-Thin.ttf");
}
@font-face {
  font-family: "rob thin it";
  src: url("./assets/fonts/roboto/Roboto-ThinItalic.ttf");
}

/** GENERAL STYLING */
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
body {
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #303030;
}
.inline {
  display: inline;
}
.inline-flex {
  display: inline-flex;
}
ul {
  list-style-type: none;
}

/** FONT SIZE */
body {
  font-family: "rob light";
}
h1 {
  font-size: 2.5rem;
  font-family: "mon bold";
}
h2 {
  font-size: 2rem;
  font-family: "mon bold";
}
h3 {
  font-size: 1.8rem;
  margin: 8px 0;
  font-family: "mon hair";
}
h4 {
  font-size: 1.5rem;
  font-family: "mon bold";
}
h5 {
  font-size: 1.2rem;
  font-family: "mon bold";
}
h6 {
  text-transform: uppercase;
  color: #767676;
  font-size: 0.8rem;
  margin-bottom: 24px;
}
button {
  font-size: 1rem;
  font-family: "mon reg";
}
.top-header-left a {
  font-size: 0.75rem;
  font-family: "rob reg";
}
.quick-menu a,
header a {
  font-family: "rob reg";
}
.main-banner {
  font-family: "mon reg";
}
.main-banner p {
  font-size: 2rem;
  font-family: "mon light";
}
.main-banner ul {
  margin: 24px 0;
}
.main-banner li {
  margin: 16px 0;
  font-family: "mon light";
}
.pricing-section {
  font-family: "rob reg";
}
.strikethrough {
  text-decoration: line-through;
}
.laravel-wrapper p {
  font-family: "mon reg";
}
p.notes {
  font-family: "mon light";
  font-size: 0.75rem;
}
.social-share p {
  font-family: "mon reg";
  font-size: 1rem;
}
.help-call p {
  font-family: "mon reg";
  font-size: 2rem;
}
.support-section p {
  font-size: 1.1rem;
  font-family: "rob light";
}
.live-chat {
  font-size: 1.2rem;
  text-transform: capitalize;
}
.newsletter-btn-wrapper button {
  font-size: 0.8rem;
  font-family: "rob reg";
}
.footer-payment p {
  font-size: 0.75rem;
}
.copyright p,
.copyright a {
  font-size: 0.75rem;
}

header,
main,
footer,
.quick-menu {
  width: 100%;
  display: flex;
  justify-content: center;
}
.container {
  width: 80%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/** SPECIFIC STYLE */
.flex-row-spacebetween {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.secondary-btn {
  margin-bottom: 24px;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  border: 1px solid #303030;
  background-color: #fff;
  color: #303030;
}
.main-btn {
  margin-bottom: 24px;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  border: none;
  background-color: #008fee;
  color: #fff;
}
.uppercase {
  text-transform: uppercase;
}

/** HEADER SECTION */
.top-header {
  height: 60px;
  width: 80%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.top-header-left {
  height: 100%;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
}
.top-header-left a {
  margin: 8px;
}

.top-header-right a {
  display: flex;
  justify-content: center;
  align-items: center;
}
.top-header-right svg {
  margin-right: 8px;
}
.list-item {
  margin: 0 16px;
}
header {
  border-bottom: 1px solid #dadada;
  border-top: 1px solid #dadada;
}
.quick-menu a,
header a {
  color: #303030;
  text-decoration: none;
}
nav li {
  margin: 0 16px;
}

.full {
  width: 100%;
}
/** MAIN SECTION */
.main-banner,
.feature-banner,
.pricing-section,
.advantage-section,
.feature-section,
.laravel-section,
.modul-section,
.support-section {
  margin: 32px 0;
}

/** MAIN BANNER */
.main-banner {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.main-banner div {
  width: 50%;
}
.main-baner img {
  width: 100%;
}
.mark {
  display: flex;
  align-items: center;
}
.mark img {
  margin-right: 8px;
}
.center span {
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}
/** Feature Banner Section */
.feature-banner {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
.feature-banner div {
  margin: 48px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.feature-banner img {
  height: 100px;
  margin: 16px;
}

/** Pricing Section */
.pricing-section {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.pricing-wrapper {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  flex-wrap: wrap;
  margin: 32px;
}
.pricing-card {
  width: 25%;
  text-align: center;
  border: 1px solid #ececec;
}
.best {
  position: absolute;
  transform: translate(-145px, -10px);
}
.pricing-card h4 {
  padding: 0.5rem;
  border-bottom: 1px solid #ececec;
}
.pricing-card p {
  padding: 1rem;
}
.pricing-card div:not(:first-child) {
  padding: 24px;
}
.pricing-card li {
  margin: 1rem;
}
.pricing-card svg {
  fill: #008fee;
}
.pricing-now {
  border-bottom: 1px solid #ececec;
}
.pricing-user {
  border-bottom: 1px solid #ececec;
}
.pricing-card-header {
  color: #fff;
  background-color: #00a2f3;
}
.active-pricing-card,
.active-pricing-card h4 {
  border-color: #00a2f3;
}
.pricing-user-active {
  background-color: #008fee;
  color: #fff;
}

/** Advantage Section */
.advantage-section {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.advantage-wrapper {
  width: 80%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
.advantage-div {
  margin: 24px;
  width: 50%;
  text-align: center;
}
.advantage-div ul {
  border: 1px solid #ececec;
}
.advantage-div li {
  padding: 0.5rem;
}
.advantage-div li:nth-child(even) {
  background-color: #f1f1f1;
}
.advantage-div li:nth-child(2) {
  border-top: 1px solid #ececec;
  border-bottom: 1px solid #ececec;
}

/** FEATURE SECTION */
.feature-section {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.feature-wrapper {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  padding: 16px;
}
.feature-wrapper div {
  width: 33.33%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.feature-wrapper img {
  height: 60px;
  margin-bottom: 16px;
  margin-top: 80px;
}
.feature-wrapper h5 {
  margin: 4px 0;
}
.feature-wrapper p {
  padding: 0 40px;
}

/** LARAVEL SECTION */
.laravel-section {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.laravel-wrapper {
  width: 100%;
  display: flex;
  flex-direction: row;
  padding: 32px;
}
.laravel-wrapper div {
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
}
.laravel-wrapper p {
  padding: 8px 0;
  line-height: 2;
}
.laravel-wrapper li {
  margin: 16px 0;
}

/** modul section */
.modul-section {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.modul-wrapper {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin: 24px 0;
}
.modul-card {
  margin: 1rem 4rem;
}

/** support section */
.support-section {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.support-section div {
  width: 50%;
  padding: 0 24px;
}
.support-section p {
  padding: 0 16px;
  line-height: 1.6;
  margin: 32px 0;
}

/** social share */
.social-share {
  width: 100%;
  height: 60px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  background-color: #f7f7f7;
  padding: 0 10%;
}
.help-call {
  width: 100%;
  height: 200px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  background-color: #00a2f3;
  color: #fff;
  padding: 0 10%;
}
.live-chat {
  padding: 8px 24px;
  display: flex;
  align-items: center;
  background-color: #00a2f3;
  border: 2px solid #fff;
  border-radius: 24px;
  color: #fff;
}
.live-chat svg {
  fill: #fff;
  margin-right: 16px;
}

/** FOOTER */
footer {
  background-color: #303030;
  color: #dadada;
}
footer a {
  color: #dadada;
  text-decoration: none;
}
footer a,
footer p {
  margin: 4px 0;
}
.footer-div {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.footer-card {
  width: 25%;
  display: flex;
  flex-direction: column;
  margin: 32px 0;
}
.footer-newsletter {
  width: 50%;
  margin: 32px 0;
}
.newsletter-wrapper {
  width: 100%;
  display: flex;
  flex-direction: row;
}
.newsletter-wrapper > div:first-child {
  width: 50%;
}
.newsletter-wrapper > div:last-child {
  width: 50%;
  padding-left: 16px;
  display: flex;
  justify-content: space-around;
  position: relative;
  top: -10px;
}

.newsletter-btn-wrapper {
  background-color: #fff;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  height: 46px;
  border-radius: 23px;
  padding: 8px 4px;
}
.newsletter-btn-wrapper input {
  width: 60%;
  border: none;
  outline: none;
  padding: 0 1rem;
}
.newsletter-btn-wrapper button {
  width: 40%;
  padding: 0.75rem 1.5rem;
  border-radius: 20px;
  border: none;
  background-color: #008fee;
  color: #fff;
}

.footer-payment {
  width: 100%;
}
.footer-payment p {
  margin-top: 32px;
  margin-bottom: 48px;
}
.card-holder {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.card-holder img {
  margin-right: 16px;
}
.darker {
  color: #686868;
}

.copyright {
  border-top: 1px solid #1f1f1f;
  padding: 24px 0;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}
.copyright div:last-child {
  margin: 4px 0;
}

.svg-grey {
  fill: #303030;
}
</style>
