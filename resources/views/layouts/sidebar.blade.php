{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

<div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <a href="{{ route('home') }}" class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
        <svg width="23px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M981.4 502.3c-9.1 0-18.3-2.9-26-8.9L539 171.7c-15.3-11.8-36.7-11.8-52 0L70.7 493.4c-18.6 14.4-45.4 10.9-59.7-7.7-14.4-18.6-11-45.4 7.7-59.7L435 104.3c46-35.5 110.2-35.5 156.1 0L1007.5 426c18.6 14.4 22 41.1 7.7 59.7-8.5 10.9-21.1 16.6-33.8 16.6z" fill="#5F6379" /><path d="M810.4 981.3H215.7c-70.8 0-128.4-57.6-128.4-128.4V534.2c0-23.5 19.1-42.6 42.6-42.6s42.6 19.1 42.6 42.6v318.7c0 23.8 19.4 43.2 43.2 43.2h594.8c23.8 0 43.2-19.4 43.2-43.2V534.2c0-23.5 19.1-42.6 42.6-42.6s42.6 19.1 42.6 42.6v318.7c-0.1 70.8-57.7 128.4-128.5 128.4z" fill="#3688FF" /></svg>
            <span class="ml-2 text-sm font-semibold">Dashboard</span>
        </a>
        <!-- Log on to codeastro.com for more projects -->
        @role('Admin')
        <a href="{{ route('teacher.index') }}" class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
        <svg width="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 7C5 4.23858 7.23858 2 10 2C12.7614 2 15 4.23858 15 7C15 9.76142 12.7614 12 10 12C7.23858 12 5 9.76142 5 7ZM10 4C8.34315 4 7 5.34315 7 7C7 8.65685 8.34315 10 10 10C11.6569 10 13 8.65685 13 7C13 5.34315 11.6569 4 10 4Z" fill="#152C70"/>
            <path d="M4.00242 20C4.07771 17.7781 5.90263 16 8.14286 16H9C9.55228 16 10 15.5523 10 15C10 14.4477 9.55228 14 9 14H8.14286C4.75025 14 2 16.7503 2 20.1429C2 21.1685 2.83147 22 3.85714 22H10C10.5523 22 11 21.5523 11 21C11 20.4477 10.5523 20 10 20H4.00242Z" fill="#152C70"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 22C19.7614 22 22 19.7614 22 17C22 14.2386 19.7614 12 17 12C14.2386 12 12 14.2386 12 17C12 19.7614 14.2386 22 17 22ZM17.0303 19.0303L19.5303 16.5303C19.8232 16.2374 19.8232 15.7626 19.5303 15.4697C19.2374 15.1768 18.7626 15.1768 18.4697 15.4697L16.5 17.4393L16.0303 16.9697C15.7374 16.6768 15.2626 16.6768 14.9697 16.9697C14.6768 17.2626 14.6768 17.7374 14.9697 18.0303L15.9692 19.0298C16.2621 19.3227 16.7374 19.3232 17.0303 19.0303Z" fill="#4296FF"/>
            </svg>
        <span class="ml-1 text-sm font-semibold">Data Personil</span>
     </a>                  
     {{-- <a href="{{ route('subject.index') }}" class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
     onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
     onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
     <svg class="h-4 w-4 fill-current text-gray-600 transition-colors duration-300 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
     </svg>
     <span class="ml-1 text-sm font-semibold transition-colors duration-300 ease-in-out">Subjects</span>
  </a>   --}}
        {{-- <a href="{{ route('classes.index') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
            <span class="ml-2 text-sm font-semibold">Classes</span>
        </a> --}}

        <a href="{{ route('parents.index') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
        <svg width="25px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 661.3c-117.6 0-213.3-95.7-213.3-213.3S394.4 234.7 512 234.7 725.3 330.4 725.3 448 629.6 661.3 512 661.3z m0-341.3c-70.6 0-128 57.4-128 128s57.4 128 128 128 128-57.4 128-128-57.4-128-128-128z" fill="#5F6379" /><path d="M837 862.9c-15.7 0-30.8-8.7-38.2-23.7C744.3 729.5 634.4 661.3 512 661.3s-232.3 68.1-286.8 177.9c-10.5 21.1-36.1 29.7-57.2 19.2s-29.7-36.1-19.2-57.2C217.8 662.3 357 576 512 576s294.2 86.3 363.2 225.2c10.5 21.1 1.9 46.7-19.2 57.2-6.1 3-12.6 4.5-19 4.5z" fill="#5F6379" /><path d="M512 1002.7c-270.6 0-490.7-220.1-490.7-490.7S241.4 21.3 512 21.3s490.7 220.1 490.7 490.7-220.1 490.7-490.7 490.7z m0-896c-223.5 0-405.3 181.8-405.3 405.3S288.5 917.3 512 917.3 917.3 735.5 917.3 512 735.5 106.7 512 106.7z" fill="#3688FF" /></svg> 
            {{-- <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 0c70.7 0 128 57.3 128 128s-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 39.5-161.2c77.2 12 136.3 78.8 136.3 159.4c0 17-13.8 30.7-30.7 30.7H265.1 182.9 30.7C13.8 512 0 498.2 0 481.3c0-80.6 59.1-147.4 136.3-159.4l39.5 161.2 33.4-123.9z"/></svg> --}}
            <span class="ml-2 text-sm font-semibold">Data OTA</span>
        </a>
        <a href="{{ route('student.index') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 128 128"  id="Layer_1" version="1.1" viewBox="0 0 128 128" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M20,48h8v-8h-8V48z M52,40h8v-8h-8V40z M68,40h8v-8h-8V40z M84,40h8v-8h-8V40z M52,24h8v-8h-8V24z M68,24    h8v-8h-8V24z M84,24h8v-8h-8V24z M52,72h8v-8h-8V72z M68,72h8v-8h-8V72z M84,72h8v-8h-8V72z M52,88h8v-8h-8V88z M84,88h8v-8h-8V88    z M52,104h8v-8h-8V104z M84,104h8v-8h-8V104z M108,96h8v-8h-8V96z M108,72v8h8v-8H108z M108,112h8v-8h-8V112z M52,56h8v-8h-8V56z     M68,56h8v-8h-8V56z M84,56h8v-8h-8V56z M20,64h8v-8h-8V64z M20,80h8v-8h-8V80z M20,96h8v-8h-8V96z M20,112h8v-8h-8V112z M68,88h8    v-8h-8V88z" fill="#B0BEC5"/></g></g><path clip-rule="evenodd" d="M124,120c0,4.422-3.578,8-8,8H12c-4.422,0-8-3.578-8-8V32  c0-4.422,3.578-8,8-8h24V8c0-4.422,3.578-8,8-8h56c4.422,0,8,3.578,8,8v48h8c4.422,0,8,3.578,8,8V120z M36,32H12v88h24V32z M100,8  H44v112h24V96h8v24h24V8z M116,64h-8v56h8V64z" fill="#546E7A" fill-rule="evenodd"/></svg>
        <span class="ml-2 text-sm font-semibold">Data Pesantren</span>        
        {{-- </a><!-- Log on to codeastro.com for more projects -->
        <a href="{{ route('attendance.index') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
            <span class="ml-2 text-sm font-semibold">Attendance Report</span>
        </a> --}}
        {{-- <a href="{{ route('assignrole.index') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';"> --}}
            {{-- <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tag" class="svg-inline--fa fa-user-tag fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M630.6 364.9l-90.3-90.2c-12-12-28.3-18.7-45.3-18.7h-79.3c-17.7 0-32 14.3-32 32v79.2c0 17 6.7 33.2 18.7 45.2l90.3 90.2c12.5 12.5 32.8 12.5 45.3 0l92.5-92.5c12.6-12.5 12.6-32.7.1-45.2zm-182.8-21c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24c0 13.2-10.7 24-24 24zm-223.8-88c70.7 0 128-57.3 128-128C352 57.3 294.7 0 224 0S96 57.3 96 128c0 70.6 57.3 127.9 128 127.9zm127.8 111.2V294c-12.2-3.6-24.9-6.2-38.2-6.2h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 287.9 0 348.1 0 422.3v41.6c0 26.5 21.5 48 48 48h352c15.5 0 29.1-7.5 37.9-18.9l-58-58c-18.1-18.1-28.1-42.2-28.1-67.9z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Assign Role</span> --}}
        </a>
        {{-- <a href="{{ route('roles-permissions') }}"  class="flex items-center text-gray-700 py-2 px-2 rounded-lg transition-transform duration-300 ease-in-out"
        onmouseover="this.style.color='blue'; this.style.backgroundColor='#eaf2f8'; this.style.transform='scale(1.05) translateX(-5px)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
        onmouseout="this.style.color=''; this.style.backgroundColor=''; this.style.transform=''; this.style.boxShadow='';">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-cog" class="svg-inline--fa fa-user-cog fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M610.5 373.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 400.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm201.2 226.5c-2.3-1.2-4.6-2.6-6.8-3.9l-7.9 4.6c-6 3.4-12.8 5.3-19.6 5.3-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-5.5-17.7 1.9-36.4 17.9-45.7l7.9-4.6c-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-16-9.2-23.4-28-17.9-45.7.9-2.9 2.2-5.8 3.2-8.7-3.8-.3-7.5-1.2-11.4-1.2h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c10.1 0 19.5-3.2 27.2-8.5-1.2-3.8-2-7.7-2-11.8v-9.2z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Roles &amp; Permissions</span>
        </a> --}}
     
<div class="fixed bottom-0 left-0 bg-opacity-20 text-blue-800 p-2 text-sm font-bold rounded" style="backdrop-filter: blur(35px); z-index: -1;">
    <span id="clock"></span>
    <br>
    <span id="date"></span>
  </div>
        @endrole
    </div>

<script>
    function updateClock() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      var day = now.getDate();
      var month = now.getMonth() + 1; // karena bulan dimulai dari 0 (Januari = 0)
      var year = now.getFullYear();
  
      // Format jam dan menit menjadi 2 digit (misalnya 09:05)
      hours = ("0" + hours).slice(-2);
      minutes = ("0" + minutes).slice(-2);
      seconds = ("0" + seconds).slice(-2);
  
      // Update elemen dengan id "clock" dengan waktu saat ini
      document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;
  
      // Update elemen dengan id "date" dengan tanggal saat ini
      document.getElementById("date").innerHTML = day + "/" + month + "/" + year;
  
      // Panggil fungsi updateClock() setiap 1 detik
      setTimeout(updateClock, 1000);
    }
  
    // Panggil fungsi updateClock() untuk pertama kali
    updateClock();
  </script>
    
</div>