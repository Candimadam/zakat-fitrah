<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Transaksi</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-black">
  <nav class="bg-gray-800 p-4 fixed top-0 left-0 w-full z-10">
    <div class="container mx-auto flex justify-between items-center">
      <div class="space-x-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle inline-block" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg>
        <a href="#" class="text-white">Beranda</a>
        <a href="#" class="text-white">Pembayaran Zakat</a>
        <a href="#" class="text-white">Riwayat Transaksi</a>
      </div>
      <div>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
          Keluar
        </button>
      </div>
    </div>
  </nav>
  <div class="pt-16"></div> 
  <h3 class="text-white text-center text-2xl mt-4">
    Riwayat Transaksi Pembayaran
  </h3>
  <div class="container mx-auto mt-8">
    <div class="bg-slate-200 rounded-lg shadow-lg">
      <div class="flex flex-col gap-2">
        <div class="flex justify-between items-center border-b border-black p-4">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
            </svg>
            <h4 class="font-medium text-lg">Candimadam - Senin 4 Oktober 2025 - 2.600.0000</h4>
          </div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">
            Download
          </button>
        </div>
        <div class="flex justify-between items-center border-b border-black p-4">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
            </svg>
            <h4 class="font-medium text-lg">Candimadam - Senin 4 Oktober 2025 - 2.600.0000</h4>
          </div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">
            Download
          </button>
        </div>
        <div class="flex justify-between items-center border-b border-black p-4">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
            </svg>
            <h4 class="font-medium text-lg">Candimadam - Senin 4 Oktober 2025 - 2.600.0000</h4>
          </div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">
            Download
          </button>
        </div>
        <div class="flex justify-between items-center p-4">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
            </svg>
            <h4 class="font-medium text-lg">Candimadam - Senin 4 Oktober 2025 - 2.600.0000</h4>
          </div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">
            Download
          </button>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-green-500 text-white p-6 mt-8">
    <div class="container mx-auto flex justify-between">
      <div class="w-1/3">
        <h3 class="font-bold mb-2">Tentang Website</h3>
        <p class="mb-2">Penjelasan Zakat</p>
        <p class="mb-2">Niat Zakat</p>
        <p>Kalkulator Zakat</p>
      </div>
      <div class="w-1/3 text-center">
        <h3 class="font-bold mb-2">Tautan</h3>
        <p class="mb-2"><a href="#" class="text-white">Beranda</a></p>
        <p class="mb-2"><a href="#" class="text-white">Pembayaran Zakat</a></p>
      </div>
      <div class="w-1/3 text-right">
        <h3 class="font-bold mb-2">Hubungi Kami</h3>
        <p class="mb-2"><i class="fas fa-phone"></i> Telepon</p>
        <p class="mb-2"><i class="fas fa-whatsapp"></i> WhatsApp</p>
        <p><i class="fas fa-envelope"></i> Email</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>Created By Our Teams &copy; 2025</p>
    </div>
  </footer>
</body>
</html>