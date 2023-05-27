@extends('layouts.app')

@section('content')
    <div class="roles-permissions">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold text-4xl tracking-wide border-b-4 border-gray-600 pb-2">Data Personil</h2>
            </div>            
            <div class="flex flex-wrap items-center">
                <a href="{{ route('teacher.create') }}" class="bg-green-500 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                  <?xml version="1.0" ?><svg class="feather feather-user-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" x2="20" y1="8" y2="14"/><line x1="23" x2="17" y1="11" y2="11"/></svg>
                    <span class="ml-2 text-xs font-semibold">Add New</span>
                </a>
                <button class="download-button">
                    <a href="{{ route('teacher.index', ['export' => 1]) }}"> <div class="docs">
                      <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="20" width="20" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line y2="13" x2="8" y1="13" x1="16"></line>
                        <line y2="17" x2="8" y1="17" x1="16"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                      </svg>
                    Excell
                    </div></a>
                    <div class="download">
                      <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="24" width="24" viewBox="0 0 24 24">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line y2="3" x2="12" y1="15" x1="12"></line>
                      </svg>
                    </div>
                  </button>                  
            </div>
        </div>
        <form action="{{ route('teacher.index') }}" method="GET" class="mb-4">
            <div class="flex items-center">
              <div class="inputGroup">
                <input type="text" name="search" id="search" class="border border-gray-300 px-2 py-1 rounded" value="{{ request('search') }}" required>
                <label for="search" autocomplete="off">Search</label>
              </div>
              <button type="submit" class="ml-1 bg-purple-500 text-white px-4 py-1 rounded">Search</button>
            </div>
          </form>          
        <!-- Log on to codeastro.com for more projects -->
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-600 text-white rounded-tl rounded-tr">
                <div class="w-2/12 px-4 py-3">Name</div>
                <div class="w-3/12 px-4 py-3">Email</div>
                <div class="w-3/12 px-4 py-3">Alamat</div>
                {{-- <div class="w-3/12 px-4 py-3">Subject Code</div> --}}
                <div class="w-2/12 px-4 py-3">Phone</div>
                <div class="w-2/12 px-4 py-3 text-right">Actions</div>
            </div>
            @foreach ($teachers as $teacher)
            <div style="font-family: 'Quicksand', sans-serif;" class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
              <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" onclick="toggleDetails('details{{ $teacher->id }}')">{{ $teacher->user->name }}</div>
              <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" onclick="toggleDetails('details{{ $teacher->id }}')">{{ $teacher->user->email }}</div>
              <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" onclick="toggleDetails('details{{ $teacher->id }}')">{{ $teacher->current_address }}</div>
              <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight" onclick="toggleDetails('details{{ $teacher->id }}')">{{ $teacher->phone }}</div>
              <div class="w-2/12 flex items-center justify-end px-3">
                <!-- Tombol aksi -->
                <a href="{{ route('teacher.edit',$teacher->id) }}">
                  <svg width="24px" viewBox="0 0 24 24" fill="#FBFFDC" xmlns="http://www.w3.org/2000/svg">  <rect width="100%" height="100%" rx="4" ry="4" fill="#B3C890" />
                    <path d="M13.9445 14.1875L9.94446 10.1875M13.9445 14.1875L8.946 19.1859C8.28735 19.8446 7.48784 20.3646 6.56993 20.5229C5.64311 20.6828 4.49294 20.736 3.94444 20.1875C3.39595 19.639 3.44915 18.4888 3.609 17.562C3.76731 16.6441 4.28735 15.8446 4.946 15.1859L9.94446 10.1875M13.9445 14.1875C13.9445 14.1875 16.9444 11.1875 14.9444 9.1875C12.9444 7.1875 9.94446 10.1875 9.94446 10.1875M3.5 12C3.5 5.5 5.5 3.5 12 3.5C18.5 3.5 20.5 5.5 20.5 12C20.5 18.5 18.5 20.5 12 20.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                  
                </a>
                <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" onsubmit="confirmDelete()">
                  @csrf
                  @method('DELETE')
              
                  <button type="submit" class="deletebtn ml-1 bg-red-600 block p-1 border border-red-600 rounded-sm">
                      <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path>
                      </svg>
                  </button>
              </form>                           
              </div>
            </div>
            <div id="details{{ $teacher->id }}" style="display: none;" class="details-container transition-all duration-300">
              <!-- Elemen untuk menampilkan detail biodata -->
              <p>Detail Biodata</p>
              <img width="100px" src="{{ asset('images/profile/' . $teacher->user->profile_picture) }}" alt="" srcset="">
              <p>Email: {{ $teacher->user->email }}</p>
              <p>TTL: {{ $teacher->dateofbirth }}</p>
              <p>Gender: {{ $teacher->gender }}</p>
              <p>No.HP: {{ $teacher->phone }}</p>
              <p>Alamat: {{ $teacher->current_address }}</p>
              <!-- Tambahkan properti lain sesuai kebutuhan -->
            </div>
            @endforeach
          </div>
        <div class="mt-8">
            {{ $teachers->links() }}
        </div>

        @include('backend.modals.delete',['name' => 'teacher'])
    </div>
    <script>
  function toggleDetails(elementId) {
    var detailsElement = document.getElementById(elementId);
    if (detailsElement.style.display === "none") {
      detailsElement.style.display = "block";
    } else {
      detailsElement.style.display = "none";
    }
  }
    </script>
@endsection
