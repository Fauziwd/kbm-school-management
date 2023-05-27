<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-5 py-6 rounded shadow-lg" style="margin-right: 10px;">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57c0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($students)) }}</span>
                <span class="leading-tight">Pesantren</span>
            </h3>
            <canvas id="student-chart"></canvas>
        </div>
        <!-- Log on to codeastro.com for more projects -->
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-5 py-6 rounded shadow-lg" style="margin-right: 10px;">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($teachers)) }}</span>
                <span class="leading-tight">Personil</span>
            </h3>
            <canvas id="teacher-chart"></canvas>
        </div>
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-5 py-6 rounded shadow-lg">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224 0c70.7 0 128 57.3 128 128s-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 39.5-161.2c77.2 12 136.3 78.8 136.3 159.4c0 17-13.8 30.7-30.7 30.7H265.1 182.9 30.7C13.8 512 0 498.2 0 481.3c0-80.6 59.1-147.4 136.3-159.4l39.5 161.2 33.4-123.9z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($parents)) }}</span>
                <span class="leading-tight">OTA</span>
            </h3>
            <canvas id="parent-chart"></canvas>
        </div>
    </div>
</div>
<div class="w-full block mt-8">
    <div class="flex justify-between">
        <div class="w-1/3 bg-gray-200 text-center border border-gray-300 px-4 py-6 rounded-lg shadow-lg" style="margin-right: 10px; border-radius: 0px, 0px, 30px,">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="leading-tight">Jumlah OTA yang diinput</span>
            </h3>
            <div class="mt-4 relative inline-flex">
                {{-- <select class="appearance-none bg-transparent border border-gray-300 rounded-md py-2 px-4 pr-8 leading-tight focus:outline-none text-gray-700" id="filter-dropdown">
                    <option value="weekly">Pekanan</option>
                    <option value="monthly">Bulanan</option>
                    <option value="yearly">Tahunan</option>
                </select> --}}
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12l-4-4h8l-4 4z" />
                    </svg> --}}
                </div>
            </div>
        </div>              

        <div class="w-2/3 bg-gray-200 text-center border border-gray-300 px-4 py-6 rounded-lg shadow-lg" style="margin-right: 10px; border-radius: 0px, 0px, 30px,">
            <!-- Kolom 2 -->
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="leading-tight">Jumlah Personil yang diinput</span>
            </h3>
            <div class="mt-4 relative inline-flex">
                {{-- <select class="appearance-none bg-transparent border border-gray-300 rounded-md py-2 px-4 pr-8 leading-tight focus:outline-none text-gray-700" id="filter-dropdown">
                    <option value="weekly">Pekanan</option>
                    <option value="monthly">Bulanan</option>
                    <option value="yearly">Tahunan</option>
                </select> --}}
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12l-4-4h8l-4 4z" />
                    </svg> --}}
                </div>
            </div>
        </div>
        <div class="w-1/3 bg-gray-200 text-center border border-gray-300 px-4 py-6 rounded-lg shadow-lg" style="margin-right: 10px; border-radius: 0px, 0px, 30px,">
            <!-- Kolom 3 -->
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="leading-tight">Jumlah PONPES yang diinput</span>
            </h3>
            <div class="mt-4 relative inline-flex">
                {{-- <select class="appearance-none bg-transparent border border-gray-300 rounded-md py-2 px-4 pr-8 leading-tight focus:outline-none text-gray-700" id="filter-dropdown">
                    <option value="weekly">Pekanan</option>
                    <option value="monthly">Bulanan</option>
                    <option value="yearly">Tahunan</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12l-4-4h8l-4 4z" />
                    </svg> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="w-full block mt-8">
    <div class="flex justify-between">
        <div class="w-1/3 bg-gray-200 text-center border border-gray-300 px-4 py-6 rounded-lg shadow-lg" style="margin-right: 10px; border-radius: 0px 0px 30px 30px;">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="leading-tight">Data Role</span>
            </h3>
            <!-- Tambahkan kode untuk menampilkan data role di sini -->
            
        </div>

        <div class="w-2/3 bg-gray-200 text-center border border-gray-300 px-4 py-6 rounded-lg shadow-lg" style="margin-right: 10px; border-radius: 0px 0px 30px 30px;">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="leading-tight">Tugas</span>
            </h3>
            <!-- Tambahkan kode untuk menampilkan tugas atau to-do list di sini -->
        </div>
    </div>
</div> --}}


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Data for the charts
        var studentData = {
            labels: ['CAT.A', 'CAT.B', 'CAT.C'],
            datasets: [{
                label: '# of Pesantren',
                data: [15, 9, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        };

        var teacherData = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of personil',
                data: [8, 10, 6, 12, 4, 8],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        var parentData = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of OTA',
                data: [5, 3, 8, 2, 6, 4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Chart options
        var chartOptions = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        // Render the charts
        var studentChart = new Chart(document.getElementById('student-chart'), {
            type: 'bar',
            data: studentData,
            options: chartOptions
        });

        var teacherChart = new Chart(document.getElementById('teacher-chart'), {
            type: 'bar',
            data: teacherData,
            options: chartOptions
        });

        var parentChart = new Chart(document.getElementById('parent-chart'), {
            type: 'bar',
            data: parentData,
            options: chartOptions
        });


    </script>
@endpush
</body>
</html>

{{-- <div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
            <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                <span class="text-4xl">{{ sprintf("%02d", count($subjects)) }}</span>
                <span class="leading-tight">Subjects</span>
            </h3>
        </div> --}}
        {{-- <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
            <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                <span class="text-4xl">{{ sprintf("%02d", count($classes)) }}</span>
                <span class="leading-tight">Classes</span>
            </h3>
        </div> --}}
        
