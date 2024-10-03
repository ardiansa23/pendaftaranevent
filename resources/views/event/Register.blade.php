<html>
 <head>
  <title>Pendaftaran Workshop Artificial Intelligence</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="max-w-2xl mx-auto bg-white p-6 mt-10 shadow-md rounded-lg">
   <div class="mt-6">
    <h4 class="text-gray-700 text-lg font-bold">Pendaftaran Workshop Artificial Intelligent : Generative AI untuk Pemula</h4>
    <p class="text-gray-700 mt-2">
     Mau belajar AI tanpa ribet? ✨ Workshop
     <span class="font-bold">Generative AI</span> adalah jawabannya! Dapatkan ilmu langsung dari ahlinya dan praktekkan langsung.
    </p>
    <p class="text-gray-700 mt-2">
     <span class="font-bold">Early bird</span> sampai 20 Oktober hanya Rp2.000.000!
    </p>
    <p class="text-gray-700 mt-2">16-17 November 2024 di Hotel Amaris Palembang</p>
    <p class="text-gray-700 mt-2">Yuk, gabung dan jadi bagian dari masa depan AI!</p>
   </div>

   <!-- Notifikasi Success -->
   @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6" role="alert">
        <strong class="font-bold">Sukses!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
   @endif

   <form method="POST" action="{{ route('event.Register') }}" class="mt-6">
    @csrf
    <h2 class="text-center text-lg font-bold mb-4">Registrasi Event</h2>

    <div class="mb-4">
     <label for="name" class="block text-gray-700 font-bold mb-2">Nama Lengkap *</label>
     <input id="name" type="text" name="name" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
     <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
     <input id="email" type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
     <label for="phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon *</label>
     <input id="phone" type="text" name="phone" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
     <label class="block text-gray-700 font-bold mb-2">Afiliasi *</label>
     <div class="flex items-center mb-2">
      <input type="radio" id="perusahaan" name="afiliasi" value="perusahaan" required class="mr-2">
      <label for="perusahaan" class="text-gray-700">Perusahaan</label>
     </div>
     <div class="flex items-center mb-2">
      <input type="radio" id="instansi" name="afiliasi" value="instansi" required class="mr-2">
      <label for="instansi" class="text-gray-700">Instansi</label>
     </div>
     <div class="flex items-center mb-2">
      <input type="radio" id="mahasiswa" name="afiliasi" value="mahasiswa" required class="mr-2">
      <label for="mahasiswa" class="text-gray-700">Mahasiswa</label>
     </div>
     <div class="flex items-center mb-2">
      <input type="radio" id="lainnya" name="afiliasi" value="lainnya" class="mr-2">
      <label for="lainnya" class="text-gray-700">Lainnya:</label>
      <input type="text" id="afiliasi_lain" name="afiliasi_lain" placeholder="-" class="ml-2 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
     </div>
    </div>

    <div class="mb-4">
     <label for="jabatan" class="block text-gray-700 font-bold mb-2">Jabatan/Program Studi *</label>
     <input id="jabatan" type="text" name="jabatan" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
     <label class="block text-gray-700 font-bold mb-2">Punya Pengalaman dengan AI dan Programming? *</label>
     <div class="flex items-center mb-2">
      <input type="radio" id="pernah" name="pengalaman" value="pernah" required class="mr-2">
      <label for="pernah" class="text-gray-700">Pernah</label>
     </div>
     <div class="flex items-center mb-2">
      <input type="radio" id="belum" name="pengalaman" value="belum" required class="mr-2">
      <label for="belum" class="text-gray-700">Belum Pernah</label>
     </div>
     <div class="flex items-center mb-2">
      <input type="radio" id="pengalaman_lain" name="pengalaman" value="lainnya" class="mr-2">
      <label for="pengalaman_lain" class="text-gray-700">Lainnya:</label>
      <input type="text" id="pengalaman_lain_input" name="pengalaman_lain" placeholder="-" class="ml-2 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
     </div>
    </div>

    <div class="mb-4">
     <label for="tujuanwo" class="block text-gray-700 font-bold mb-2">Tujuan mengikuti workshop? *</label>
     <textarea id="tujuanwo" name="tujuanwo" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-md transition duration-300">Daftar</button>
   </form>
  </div>
 </body>
</html>
