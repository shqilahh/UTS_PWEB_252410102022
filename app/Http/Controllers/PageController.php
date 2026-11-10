<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data sementara, belum pakai database
    private function recipes()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Nasi Telur Kecap',
                'kategori' => 'Makanan Utama',
                'harga' => 5000,
                'waktu' => 10,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/nasi-telur-kecap.jpg',
                'deskripsi' => 'Telur goreng dan nasi hangat dengan tumisan bawang putih dan kecap manis.',
                'bahan' => ['Nasi putih', '1 butir telur', '1 siung bawang putih', '1 sdm kecap manis', 'Garam', 'Minyak'],
                'langkah' => [
                    'Cincang bawang putih.',
                    'Goreng telur hingga matang.',
                    'Tumis bawang putih sampai harum.',
                    'Masukkan kecap dan sedikit garam.',
                    'Sajikan telur dengan nasi hangat.',
                ],
            ],
            [
                'id' => 2,
                'nama' => 'Mie Nyemek Sederhana',
                'kategori' => 'Makanan Utama',
                'harga' => 7000,
                'waktu' => 15,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/mie-nyemek.jpg',
                'deskripsi' => 'Mi instan berkuah kental dengan telur, sawi, dan cabai.',
                'bahan' => ['1 bungkus mi instan', '1 butir telur', 'Sawi', '1 siung bawang putih', 'Cabai', 'Air secukupnya'],
                'langkah' => [
                    'Tumis bawang putih dan cabai.',
                    'Tambahkan air secukupnya.',
                    'Masukkan telur dan aduk perlahan.',
                    'Masukkan mi dan sawi.',
                    'Tambahkan bumbu mi, masak hingga kuah mengental.',
                ],
            ],
            [
                'id' => 3,
                'nama' => 'Tahu Crispy',
                'kategori' => 'Camilan',
                'harga' => 4000,
                'waktu' => 15,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/tahu-crispy.jpg',
                'deskripsi' => 'Tahu dadu berbalut tepung, digoreng renyah dan enak dengan saus sambal.',
                'bahan' => ['3 potong tahu putih', '4 sdm tepung terigu', '2 sdm tepung maizena', 'Garam', 'Lada', 'Air'],
                'langkah' => [
                    'Potong tahu menjadi bentuk dadu.',
                    'Campurkan tepung terigu, maizena, garam, lada, dan air.',
                    'Masukkan tahu ke adonan.',
                    'Goreng hingga berwarna keemasan.',
                    'Sajikan dengan saus sambal.',
                ],
            ],
            [
                'id' => 4,
                'nama' => 'Nasi Omelet',
                'kategori' => 'Makanan Utama',
                'harga' => 6000,
                'waktu' => 10,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/nasi-omelet.jpg',
                'deskripsi' => 'Nasi dan telur kocok dengan daun bawang, digoreng hingga kedua sisinya matang.',
                'bahan' => ['1 butir telur', 'Nasi putih', '1 batang daun bawang', 'Garam', 'Lada', 'Minyak'],
                'langkah' => [
                    'Kocok telur bersama daun bawang.',
                    'Tambahkan garam dan lada.',
                    'Masukkan nasi ke dalam adonan telur.',
                    'Panaskan minyak di wajan.',
                    'Goreng hingga kedua sisi matang.',
                ],
            ],
            [
                'id' => 5,
                'nama' => 'Tumis Sosis Sayur',
                'kategori' => 'Makanan Utama',
                'harga' => 8000,
                'waktu' => 15,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/tumis-sosis-sayur.jpg',
                'deskripsi' => 'Sosis, wortel, dan sawi ditumis dengan bawang putih dan kecap manis.',
                'bahan' => ['2 buah sosis', 'Wortel', 'Sawi', '2 siung bawang putih', 'Kecap manis', 'Garam', 'Minyak'],
                'langkah' => [
                    'Potong sosis dan sayuran.',
                    'Tumis bawang putih sampai harum.',
                    'Masukkan sosis dan wortel.',
                    'Tambahkan sawi, kecap, dan garam.',
                    'Aduk hingga sayuran matang.',
                ],
            ],
            [
                'id' => 6,
                'nama' => 'Pisang Cokelat',
                'kategori' => 'Camilan',
                'harga' => 5000,
                'waktu' => 15,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/pisang-cokelat.jpg',
                'deskripsi' => 'Pisang dan meses cokelat dalam kulit lumpia, digoreng hingga kecokelatan.',
                'bahan' => ['2 buah pisang', '2 lembar kulit lumpia', 'Meses cokelat', 'Sedikit air sebagai perekat'],
                'langkah' => [
                    'Kupas dan belah pisang.',
                    'Letakkan pisang di atas kulit lumpia.',
                    'Tambahkan meses cokelat.',
                    'Lipat dan rekatkan kulit lumpia.',
                    'Goreng hingga kecokelatan.',
                ],
            ],
            [
                'id' => 7,
                'nama' => 'Sup Telur Sederhana',
                'kategori' => 'Makanan Utama',
                'harga' => 6000,
                'waktu' => 15,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/sup-telur.jpg',
                'deskripsi' => 'Kuah hangat dengan wortel, telur kocok, dan taburan daun bawang.',
                'bahan' => ['1 butir telur', 'Wortel', 'Daun bawang', '1 siung bawang putih', 'Garam', 'Lada', 'Air'],
                'langkah' => [
                    'Didihkan air dalam panci.',
                    'Masukkan bawang putih dan wortel.',
                    'Kocok telur dalam wadah.',
                    'Tuangkan telur perlahan ke dalam kuah.',
                    'Tambahkan garam, lada, dan daun bawang.',
                ],
            ],
            [
                'id' => 8,
                'nama' => 'Roti Telur Keju',
                'kategori' => 'Sarapan',
                'harga' => 7000,
                'waktu' => 10,
                'kesulitan' => 'Mudah',
                'foto' => 'images/resep/roti-telur-keju.jpg',
                'deskripsi' => 'Roti tawar panggang berisi telur dan keju, cocok untuk sarapan cepat.',
                'bahan' => ['2 lembar roti tawar', '1 butir telur', '1 lembar keju', 'Margarin', 'Sedikit garam'],
                'langkah' => [
                    'Kocok telur dengan sedikit garam.',
                    'Panaskan margarin di teflon.',
                    'Masak telur hingga matang.',
                    'Letakkan telur dan keju di antara roti.',
                    'Panggang roti hingga sedikit kecokelatan.',
                ],
            ],
        ];
    }

    private function tips()
    {
        return [
            ['nomor' => '01', 'judul' => 'Belanja mingguan', 'isi' => 'Catat menu seminggu, lalu belanja sekali di pasar. Lebih murah daripada beli eceran tiap hari.'],
            ['nomor' => '02', 'judul' => 'Simpan nasi sisa', 'isi' => 'Nasi semalam yang disimpan di kulkas justru paling pas untuk nasi goreng.'],
            ['nomor' => '03', 'judul' => 'Siapkan bumbu dasar', 'isi' => 'Haluskan bawang merah dan bawang putih sekaligus, simpan di wadah tertutup untuk 3–4 hari.'],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = trim($request->query('username', ''));

        if ($username === '') {
            return redirect('/login')->with('error', 'Username wajib diisi dulu ya.');
        }

        $recipes = $this->recipes();

        $stats = [
            'total' => count($recipes),
            'termurah' => min(array_column($recipes, 'harga')),
            'cepat' => count(array_filter($recipes, fn ($r) => $r['waktu'] <= 10)),
        ];

        return view('dashboard', [
            'username' => $username,
            'recipes' => $recipes,
            'kategori' => array_unique(array_column($recipes, 'kategori')),
            'stats' => $stats,
            'tips' => $this->tips(),
        ]);
    }

    public function detail(Request $request, $id)
    {
        $username = trim($request->query('username', ''));
         if ($username === '') {
            return redirect('/login')->with('error', 'Username wajib diisi dulu ya.');
        }
        $semua = $this->recipes();

        $recipe = null;
        foreach ($semua as $item) {
            if ($item['id'] == $id) {
                $recipe = $item;
            }
        }

        if ($recipe === null) {
            abort(404);
        }

        $lainnya = array_values(array_filter($semua, fn ($r) => $r['id'] != $id));

        return view('detail', [
            'username' => $username,
            'recipe' => $recipe,
            'lainnya' => array_slice($lainnya, 0, 3),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = trim($request->query('username', ''));
        if ($username === '') {
            return redirect('/login')->with('error', 'Username wajib diisi dulu ya.');
        }
        $pilihan = $request->query('kategori', 'Semua');
        $cari = trim($request->query('cari', ''));

        $semua = $this->recipes();
        $recipes = $semua;

        if ($pilihan !== 'Semua') {
            $recipes = array_filter($recipes, fn ($r) => $r['kategori'] === $pilihan);
        }

        if ($cari !== '') {
            $recipes = array_filter($recipes, fn ($r) => stripos($r['nama'], $cari) !== false);
        }

        return view('pengelolaan', [
            'username' => $username,
            'recipes' => $recipes,
            'kategori' => array_unique(array_column($semua, 'kategori')),
            'pilihan' => $pilihan,
            'cari' => $cari,
            'totalBiaya' => array_sum(array_column($recipes, 'harga')),
        ]);
    }

    public function profile(Request $request)
    {
            $username = $request->query('username', '');

            if (trim($username) === '') {
                return redirect()->route('login');
            }

            return view('profile', compact('username'));
    }
}
