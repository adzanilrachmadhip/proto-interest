@extends('layouts.sidebar')

@section('title', 'Rovex - Design Agency Home')

@section('page-header')
    <x-page-header title="FAQs<span></span>">
        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
    </x-page-header>
@endsection

@section('page-wrapper-class', 'page-faqs')
@section('sidebar')
                    <div class="faq-sidebar">
                        <!-- Faq Category List Start -->
                        <div class="faq-catagery-list wow fadeInUp">
                            <ul>
                                <li><a href="#general_information">FAQ Umum</a></li>
                                <li><a href="#technical_and_design">Pertanyaan Teknis & Desain</a></li>
                                <li><a href="#project_management">Pertanyaan Seputar Proyek</a></li>
                                <li><a href="#client_support">Bantuan Klien</a></li>
                            </ul>
                        </div>
                        <!-- Faq Category List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-sidebar-cta.svg" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- CTA Contact Content Start -->
                            <div class="cta-contact-content">
                                <p>Kami selalu siap berdiskusi dengan Anda.</p>
                                <h3>info@domainname.com</h3>
                            </div>
                            <!-- CTA Contact Content End -->

                            <!-- CTA Contact Button Start -->
                            <div class="cta-contact-btn">
                                <a href="{{ route('contact') }}" class="btn-default">Hubungi Kami Sekarang</a>
                            </div>
                            <!-- CTA Contact Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Faq Sidebar End -->
                @endsection

                @section('main-content')
                    <!-- Page Faqs Catagery Start -->
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="general_information">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">FAQ Umum</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Layanan apa saja yang Dikelolain Creative Agency sediakan?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Dikelolain Creative Agency berspesialisasi dalam manajemen media sosial dan konten kreatif yang komprehensif untuk Bisnis, UMKM, dan UKM. Layanan utama kami mencakup pembuatan konten video dan foto yang menarik khusus untuk Instagram & TikTok, desain grafis kreatif untuk kebutuhan Feed, Reels, dan Story, pengembangan strategi konten & manajemen media sosial yang terarah, hingga pengelolaan iklan kreatif di platform Meta (Instagram & FB Ads). Kami juga menawarkan Paket Manajemen Konten Full di mana semua konten untuk kebutuhan satu bulan ke depan sudah kami siapkan secara lengkap.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Siapa saja klien tipikal Dikelolain Creative Agency?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Klien tipikal kami adalah Bisnis, UMKM, UKM, dan Perusahaan di seluruh Nusantara yang ingin memperkuat kehadiran online dan mengembangkan bisnis mereka melalui strategi media sosial dan konten yang efektif.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Berapa lama waktu yang dibutuhkan untuk sebuah proyek?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Durasi proyek sangat bervariasi tergantung pada jenis layanan dan kompleksitasnya. Untuk Paket Manajemen Konten Full, kami menyiapkan semua konten untuk kebutuhan 1 bulan ke depan. Untuk layanan lain seperti desain grafis tunggal atau kampanye iklan khusus, waktu pengerjaan akan disesuaikan berdasarkan kesepakatan.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Bagaimana struktur harga layanan Dikelolain?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Kami menawarkan berbagai paket layanan yang disesuaikan dengan kebutuhan dan anggaran klien, mulai dari paket pembuatan konten bulanan hingga manajemen media sosial penuh. Untuk informasi lebih detail mengenai harga, silakan hubungi tim kami untuk konsultasi gratis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            Apakah saya bisa melihat contoh hasil kerja Dikelolain (portofolio)?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Tentu! Anda bisa melihat beberapa portofolio kami di akun Instagram resmi kami @dikelolain atau dengan menghubungi kami untuk studi kasus yang lebih spesifik.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="technical_and_design">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Pertanyaan Teknis & Desain</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Format file apa saja yang Anda sediakan untuk desain akhir?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Kami menyediakan desain dalam berbagai format sesuai kebutuhan platform dan penggunaan Anda. Untuk gambar, kami biasanya menyediakan file PNG atau JPEG berkualitas tinggi. Sedangkan untuk video, format yang kami gunakan adalah MP4 atau format lain yang sesuai dengan platform seperti Instagram dan TikTok.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Apakah desain Anda disesuaikan untuk tampilan seluler (mobile-friendly)?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Tentu saja. Semua desain dan konten video yang kami buat dioptimalkan secara khusus agar terlihat menarik dan efektif saat diakses melalui perangkat seluler, terutama di platform Instagram dan TikTok.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="project_management">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">FAQ Manajemen Proyek</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Bagaimana Anda mengelola proyek untuk memastikan pengiriman tepat waktu?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Kami menggunakan alur kerja yang terstruktur dan sistem manajemen proyek internal untuk memantau setiap tahapan. Dengan penjadwalan yang jelas, penugasan yang terorganisir, dan komunikasi berkala dengan klien, kami berkomitmen untuk memastikan semua konten dan proyek selesai serta dikirimkan tepat waktu.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                            Bagaimana saya akan terlibat dalam proyek?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Keterlibatan Anda sangat penting bagi kami. Anda akan terlibat dalam proses persetujuan ide awal, review draf konten atau desain, dan memberikan masukan di setiap tahapan penting. Kami akan menjaga komunikasi yang terbuka melalui WhatsApp, email, ataupun meeting online untuk memastikan proyek sesuai dengan ekspektasi Anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Siapa yang akan menjadi narahubung utama saya?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Anda akan memiliki seorang Project Manager atau Account Executive yang ditunjuk sebagai narahubung utama Anda. Beliau akan bertanggung jawab untuk mengoordinasikan proyek Anda dan memastikan semua pertanyaan atau kebutuhan Anda terpenuhi dengan baik.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="client_support">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Bantuan Klien</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Apakah Anda menawarkan dukungan berkelanjutan setelah proyek selesai?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Ya, kami menyediakan dukungan berkelanjutan, terutama untuk layanan manajemen media sosial dan kampanye iklan. Bentuk dukungan dapat meliputi monitoring performa, penyesuaian strategi konten, analisis metrik, hingga sesi konsultasi berkala. Paket dukungan kami dapat disesuaikan berdasarkan kebutuhan spesifik Anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Bagaimana cara saya menghubungi tim dukungan Anda?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Anda dapat menghubungi tim dukungan kami melalui whatsapp atau melalui narahubung utama proyek Anda selama jam kerja kami. Kami siap membantu Anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp"  data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                            Berapa waktu respons untuk pertanyaan dukungan?
                                        </button>
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            {{-- waktu nya belum tau --}}
                                            <p>Kami berusaha untuk merespons semua pertanyaan dukungan dalam waktu 1x19 jam kerja setelah menerima pesan Anda. Untuk masalah yang bersifat sangat mendesak, kami akan memberikan prioritas dan respons secepat mungkin.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div>
                    <!-- Page Faqs Catagery End -->
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
