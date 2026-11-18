<?php
/**
 * The front page template file for SGD Care
 *
 * @package SGD_Care
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="fas fa-leaf"></i>
                        <span>Home Maintenance & Property Care Specialist</span>
                    </div>

                    <h1 class="hero-title">
                        Rawat Rumah Anda dengan <span class="gradient-text">Standar Rekayasa Konstruksi</span>
                    </h1>

                    <p class="hero-description">
                        SGD Care hadir sebagai unit spesialis dari <strong>SGD Construction</strong> untuk memberikan solusi pemeliharaan rumah tinggal, villa, dan komersial secara preventif, presisi, dan bergaransi resmi.
                    </p>

                    <div class="hero-ctas">
                        <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya ingin menjadwalkan inspeksi perawatan rumah.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
                            <i class="fab fa-whatsapp"></i> Jadwalkan Inspeksi
                        </a>
                        <a href="#estimasi" class="btn btn-outline btn-lg">
                            <i class="fas fa-calculator"></i> Hitung Estimasi Biaya
                        </a>
                    </div>

                    <div class="hero-trust-bar">
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <div class="trust-text">
                                Garansi Pekerjaan
                                <span>Perbaikan tuntas terjamin</span>
                            </div>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-hard-hat"></i>
                            <div class="trust-text">
                                Teknisi Tersertifikasi
                                <span>Didukung tim SGD Construction</span>
                            </div>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-clock"></i>
                            <div class="trust-text">
                                Respon Cepat
                                <span>Layanan darurat terpadu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Diagnostic Calculator Widget -->
                <div class="hero-card" id="estimasi">
                    <div class="hero-card-header">
                        <h3><i class="fas fa-sliders-h" style="color: var(--color-accent); margin-right: 8px;"></i> Quick Care Diagnostic</h3>
                        <p>Simulasi biaya awal & langsung terhubung dengan tim teknisi kami.</p>
                    </div>

                    <form id="care-estimator-form">
                        <div class="form-group">
                            <label for="calc-service"><i class="fas fa-tools"></i> Jenis Layanan</label>
                            <select id="calc-service" class="form-control">
                                <option value="inspection" selected>Inspeksi & Diagnostic Lengkap (Home Health Check)</option>
                                <option value="waterproofing">Deteksi Bocor & Waterproofing Atap/Dinding</option>
                                <option value="ac-mep">Servis & Pembersihan AC / Kelistrikan MEP</option>
                                <option value="structural">Perbaikan Retak Dinding & Cat Ulang</option>
                                <option value="annual-care">Paket Berlangganan Annual Care</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="calc-property"><i class="fas fa-home"></i> Tipe Properti</label>
                            <select id="calc-property" class="form-control">
                                <option value="residential" selected>Rumah Tinggal Standar</option>
                                <option value="luxury">Rumah Mewah / Townhouse</option>
                                <option value="apartment">Apartemen / Penthouse</option>
                                <option value="commercial">Ruko / Kantor Bisnis</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="calc-area"><i class="fas fa-ruler-combined"></i> Estimasi Luas Bangunan (m²)</label>
                            <input type="number" id="calc-area" class="form-control" value="150" min="30" max="2000" step="10">
                        </div>

                        <div class="calc-estimate-result">
                            <div class="label">Perkiraan Biaya Awal Mulai Dari</div>
                            <div class="price" id="calc-price-display">Rp 350.000</div>
                            <small style="color: var(--color-text-muted);">*Biaya final ditentukan setelah tim melakukan survei teknis.</small>
                        </div>

                        <a href="<?php echo esc_url( sgd_care_whatsapp_url() ); ?>" id="calc-wa-cta" target="_blank" rel="noopener" class="btn btn-accent" style="width: 100%;">
                            <i class="fab fa-whatsapp"></i> Kirim Estimasi via WhatsApp &rarr;
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Care Pillars Section -->
    <section class="section" id="layanan">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Layanan Unggulan</span>
                <h2 class="section-title">Solusi Komprehensif Perawatan Rumah</h2>
                <p class="section-intro">
                    Dari perbaikan kebocoran musim hujan hingga diagnostik elektrikal berkala, tim ahli SGD Care menjaga rumah Anda tetap aman, prima, dan bernilai tinggi.
                </p>
            </div>

            <div class="services-grid">
                <!-- Pillar 1 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-tint-slash"></i>
                    </div>
                    <h4>Deteksi Bocor & Waterproofing</h4>
                    <p>Pemeriksaan atap dak beton, talang, dinding rembes, dan kamar mandi menggunakan metode uji thermal leak detection.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Injeksi poliuretan & pelapisan elastomer</li>
                        <li><i class="fas fa-check-circle"></i> Garansi anti rembes pasca pengerjaan</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya butuh bantuan penanganan bocor atau waterproofing.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Konsultasi Bocor &rarr;</a>
                </div>

                <!-- Pillar 2 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-fan"></i>
                    </div>
                    <h4>Servis & Perawatan AC/HVAC</h4>
                    <p>Pembersihan berkala, pengisian freon standar pabrikan, uji tekanan kompresor, dan sterilisasi antibakteri indoor unit.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> AC Split, Cassette, & Multi-Split</li>
                        <li><i class="fas fa-check-circle"></i> Efisiensi konsumsi listrik lebih hemat</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya ingin pesan servis & cuci AC.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Pesan Servis AC &rarr;</a>
                </div>

                <!-- Pillar 3 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4>Diagnostik Elektrikal & MEP</h4>
                    <p>Audit keamanan panel listrik, penyeimbangan beban fasa, uji grounding anti petir, dan instalasi penerangan hemat energi.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Deteksi korsleting & kabel panas</li>
                        <li><i class="fas fa-check-circle"></i> Standar keselamatan SNI & PUIL</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya butuh teknisi kelistrikan & MEP rumah.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Periksa Kelistrikan &rarr;</a>
                </div>

                <!-- Pillar 4 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-faucet"></i>
                    </div>
                    <h4>Pipa, Sanitasi & Tekanan Air</h4>
                    <p>Pelancaran pipa mampet dengan spiral drain cleaning, perbaikan pompa pendorong (booster), serta servis filter air utama.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Deteksi pipa bawah tanah bocor</li>
                        <li><i class="fas fa-check-circle"></i> Penggantian valve & fitting premium</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, ada masalah pipa saluran atau pompa air di rumah saya.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Konsultasi Plumbing &rarr;</a>
                </div>

                <!-- Pillar 5 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-paint-roller"></i>
                    </div>
                    <h4>Touch-Up Finishing & Pengecatan</h4>
                    <p>Pengecatan ulang interior/eksterior tahan cuaca, perbaikan retak rambut dinding, vernis kayu kusen, dan plafon gypsum.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Cat ramah lingkungan anti jamur</li>
                        <li><i class="fas fa-check-circle"></i> Hasil rapi tanpa debu mengotori furnitur</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya ingin touch up cat atau finishing rumah.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Jadwalkan Cat Ulang &rarr;</a>
                </div>

                <!-- Pillar 6 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h4>Home Health Check Berkala</h4>
                    <p>Program inspeksi menyeluruh atas 40+ titik struktural, atap, mekanikal, dan elektrikal dengan dokumen laporan digital.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Laporan komprehensif rekomendasi teknis</li>
                        <li><i class="fas fa-check-circle"></i> Cegah kerusakan fatal berbiaya besar</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya tertarik dengan Home Health Check berkala.' ) ); ?>" target="_blank" rel="noopener" class="service-card-link">Daftar Health Check &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Heritage & Synergy Section -->
    <section class="section section-alt" id="tentang">
        <div class="container">
            <div class="heritage-grid">
                <div class="heritage-img-wrap">
                    <?php 
                    $hero_img = SGD_CARE_DIR . '/assets/images/hero-care.jpg';
                    $hero_url = file_exists($hero_img) ? SGD_CARE_URI . '/assets/images/hero-care.jpg' : '';
                    if ($hero_url) : ?>
                        <img src="<?php echo esc_url( $hero_url ); ?>" alt="Teknisi SGD Care Home Maintenance">
                    <?php else : ?>
                        <div style="height: 380px; background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius: var(--radius-lg);"></div>
                    <?php endif; ?>

                    <div class="heritage-badge-overlap">
                        <i class="fas fa-award"></i>
                        <div>
                            <strong>SGD Construction Lineage</strong>
                            <span>Dikelola dengan standar keteknikan korporat</span>
                        </div>
                    </div>
                </div>

                <div class="heritage-text">
                    <span class="section-subtitle">Mengapa SGD Care?</span>
                    <h2 class="section-title">Keahlian Kontraktor untuk Perawatan Rumah Anda</h2>
                    <p style="margin-bottom: 20px; font-size: 1.05rem;">
                        Banyak pemilik hunian kecewa dengan perbaikan tambal-sulam yang berulang kali gagal. <strong>SGD Care</strong> dibentuk sebagai unit spesialis dari <strong>SGD Construction (PT Sunggiardi Prima Konstruksi)</strong> untuk menghadirkan ketelitian kontraktor bangunan langsung ke pintu rumah Anda.
                    </p>

                    <ul class="service-features" style="font-size: 1rem; margin-bottom: 30px;">
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle" style="color: var(--color-accent); font-size: 1.1rem;"></i>
                            <span><strong>Diagnostik Ilmiah:</strong> Kami mencari akar masalah structural & hidrolik, bukan sekadar menutupi retak atau bercak air.</span>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle" style="color: var(--color-accent); font-size: 1.1rem;"></i>
                            <span><strong>Material Standar Konstruksi:</strong> Menggunakan sealant, waterproofing, dan komponen listrik tier-1 yang telah teruji pada proyek besar.</span>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle" style="color: var(--color-accent); font-size: 1.1rem;"></i>
                            <span><strong>Teknisi Beretika & Terpercaya:</strong> Petugas berseragam resmi dengan identitas terverifikasi, menjaga keamanan dan privasi keluarga Anda.</span>
                        </li>
                    </ul>

                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya ingin tahu lebih lanjut mengenai program pemeliharaan properti Anda.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-primary">
                        <i class="fab fa-whatsapp"></i> Hubungi Care Specialist
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Plans -->
    <section class="section" id="paket">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Paket Perawatan</span>
                <h2 class="section-title">Pilih Proteksi Terbaik untuk Hunian Anda</h2>
                <p class="section-intro">
                    Hemat waktu dan cegah depresiasi bangunan dengan paket perawatan berkala yang terencana rapi.
                </p>
            </div>

            <div class="plans-grid">
                <!-- Plan 1 -->
                <div class="plan-card">
                    <h3 class="plan-name">Essential Care</h3>
                    <p class="plan-desc">Solusi dasar pencegahan masalah berkala untuk rumah tinggal compact.</p>
                    <div class="plan-price">Rp 1.500.000 <span>/ semester</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 2x Home Health Inspection per tahun</li>
                        <li><i class="fas fa-check"></i> Cuci & Perawatan 2 unit AC per visit</li>
                        <li><i class="fas fa-check"></i> Pemeriksaan MCB & Jalur Stopkontak</li>
                        <li><i class="fas fa-check"></i> Pengecekan Talang & Titik Rawan Bocor</li>
                        <li><i class="fas fa-times"></i> Emergency Fast Track 2-Jam</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya berminat mendaftar paket Essential Care.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-outline">Pilih Essential</a>
                </div>

                <!-- Plan 2 (Featured) -->
                <div class="plan-card featured">
                    <div class="plan-tag">Paling Populer</div>
                    <h3 class="plan-name">Comfort Living</h3>
                    <p class="plan-desc">Proteksi menyeluruh 4 musim untuk kenyamanan maksimal keluarga.</p>
                    <div class="plan-price">Rp 2.850.000 <span>/ semester</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 4x Home Health Inspection per tahun</li>
                        <li><i class="fas fa-check"></i> Cuci AC s/d 5 unit per visit</li>
                        <li><i class="fas fa-check"></i> Audit MEP & Penyeimbangan Beban Listrik</li>
                        <li><i class="fas fa-check"></i> Pembersihan Saluran Pipa Pembuangan</li>
                        <li><i class="fas fa-check"></i> Prioritas Respon Darurat & Diskon Sparepart 10%</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya berminat mendaftar paket Comfort Living.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-accent">Pilih Comfort Living</a>
                </div>

                <!-- Plan 3 -->
                <div class="plan-card">
                    <h3 class="plan-name">Total Estate</h3>
                    <p class="plan-desc">Dedicated care untuk rumah mewah, villa, atau kantor dengan penanganan VIP.</p>
                    <div class="plan-price">Rp 5.500.000 <span>/ semester</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Kunjungan rutin bulanan (12x per tahun)</li>
                        <li><i class="fas fa-check"></i> Unlimited perawatan AC & filtrasi udara</li>
                        <li><i class="fas fa-check"></i> Pemeriksaan dak atap thermal infrared</li>
                        <li><i class="fas fa-check"></i> Dedicated Care Supervisor & Emergency 2-Jam</li>
                        <li><i class="fas fa-check"></i> Laporan Digital Executive Properti Bulanan</li>
                    </ul>
                    <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya ingin konsultasi paket Total Estate Care.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-outline">Konsultasi Total Estate</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Call to Action Banner -->
    <section class="section section-dark" id="kontak">
        <div class="container" style="text-align: center; max-width: 800px;">
            <div style="font-size: 2.4rem; color: var(--color-gold); margin-bottom: 12px;">
                <i class="fas fa-phone-volume"></i>
            </div>
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">Punya Masalah Mendesak di Rumah?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 32px;">
                Atap bocor mendadak saat hujan deras, pipa pecah, atau listrik padam mendadak? Tim teknisi siaga SGD Care siap meluncur memberikan solusi tanggap.
            </p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'DARURAT: Halo SGD Care, rumah saya butuh penanganan perbaikan secepatnya.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-accent btn-lg">
                    <i class="fab fa-whatsapp"></i> Hubungi WhatsApp Siaga (24/7)
                </a>
                <a href="tel:<?php echo esc_attr( SGD_CARE_PHONE ); ?>" class="btn btn-outline btn-lg" style="color: #ffffff; border-color: rgba(255,255,255,0.4);">
                    <i class="fas fa-phone-alt"></i> Telepon: <?php echo esc_html( SGD_CARE_PHONE ); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
