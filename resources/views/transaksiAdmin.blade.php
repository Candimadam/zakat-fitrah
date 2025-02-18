<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-black p-4 flex justify-between items-center">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg">
                <span class="text-yellow-400">DKM</span> <span class="text-white">Al-Ikhlas</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill text-white" viewBox="0 0 16 16">
                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
            </svg>
        </div>
    </nav>

    <div class="flex">
        <div class="w-1/6 bg-gray-600 p-4 min-h-screen">
            <ul>
            <li class="mb-6">
                <a href="#" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill inline-block ml-2" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                </svg> Dashboard</a>
            </li>
            <li class="mb-6">
                <a href="#" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack inline-block ml-2" viewBox="0 0 16 16">
                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                </svg> Zakat</a>
            </li>
            <li class="mb-6">
                <a href="#" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill inline-block ml-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                </svg> Distribusi Zakat</a>
            </li>
            <li class="mb-6">
                <a href="#" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-post inline-block ml-2" viewBox="0 0 16 16">
                <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                </svg> Laporan</a>
            </li>
            </ul>
        </div>

        <div class="w-3/4 p-4">
            <h1 class="text-2xl mb-4">Transaksi > Input Data</h1>
            <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="pengelola" class="block text-gray-700">Pengelola</label>
                <input type="text" id="pengelola" name="pengelola" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jumlah_jiwa" class="block text-gray-700">Jumlah Jiwa</label>
                <input type="number" id="jumlah_jiwa" name="jumlah_jiwa" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="mustahik" class="block text-gray-700">Mustahik</label>
                <input type="text" id="mustahik" name="mustahik" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jenis_pembayaran" class="block text-gray-700">Jenis Pembayaran</label>
                <select id="jenis_pembayaran" name="jenis_pembayaran" class="w-full p-2 border border-gray-300 rounded">
                <option value="tunai">Tunai</option>
                <option value="KartuKredit">Kartu Kredit</option>
                <option value="VirtualAccount">Virtual Account</option>
                <option value="gopay">gopay</option>
                <option value="OVO">OVO</option>
                <option value="Dana">Dana</option>
                <option value="ShopeePay">ShopeePay</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="pembayaran_zakat" class="block text-gray-700">Pembayaran Zakat</label>
                <input type="number" id="pembayaran_zakat" name="pembayaran_zakat" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>