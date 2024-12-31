<div class="tab-pane active show" id="bottom-tab1" role="tabpanel">
    <div class="card flex-fill bg-info " style="background-image: url('{{ asset('asset/img/shape-05.png') }}'); background-size: cover; background-position: center;">
        <div class="card-body pt-5">
            <h1 class="text-white mb-1 "> {{ $item->name }}</h1>
            <div class="text-white"><strong>{{ $item->user->nama }} </strong></div>
            <p class="text-white">{{ $item->description }}</p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <strong>Kode Kelas</strong>
                    <h3 class="text-white"></h3>
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-icon btn-sm d-flex align-items-center justify-content-center rounded-circle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-14"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right p-3">
                                <li>
                                    <a class="dropdown-item rounded-1" href="edit-teacher.html"><i class="ti ti-edit-circle me-2"></i>Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-1" href="#" data-bs-toggle="modal" data-bs-target="#delete-modal"><i class="ti ti-trash-x me-2"></i>Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <h1 class="text-primary">{{ $id }}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <strong>Tugas Mendatang</strong>


                </div>
                <div class="card-body">
                    @php
                    use Carbon\Carbon;

                    // Mendapatkan tanggal hari ini dan 3 hari mendatang
                    $today = Carbon::now()->startOfDay();
                    $threeDaysAhead = Carbon::now()->addDays(3)->endOfDay();

                    // Filter tugas yang due_date-nya antara hari ini dan 3 hari mendatang
                    $upcomingTasks = $task->filter(function ($t) use ($today, $threeDaysAhead) {
                        $dueDate = Carbon::parse($t->due_date);
                        return $dueDate && $dueDate->between($today, $threeDaysAhead);
                    });
                @endphp

                @if($upcomingTasks->isNotEmpty())
                    @foreach ($upcomingTasks->sortBy('due_date')->where('type','task') as $i)
                        <div class="notice-widget">
                            <div class="d-flex align-items-center justify-content-between ">
                                <div class="d-flex align-items-center overflow-hidden me-2">
                                    <span class="bg-primary-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
                                        <i class="ti ti-books fs-16"></i>
                                    </span>
                                    <div class="overflow-hidden">
                                        <h6 class="text-truncate mb-1">{{ $i->judul ?? 'No Title' }}</h6>
                                        <p><i class="ti ti-calendar me-2"></i>  Due Date: {{ $i->due_date }}</p>
                                    </div>
                                </div>
                                <a href=""><i class="ti ti-chevron-right fs-16"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No upcoming tasks.</p>
                @endif

                </div>
            </div>
        </div>

        <div class="col-lg-9">
            @if($task->count())
                @foreach ($task as $item)
                    <div class="card board-hover mb-3">
                        <div class="card-body d-md-flex align-items-center justify-content-between pb-1">
                            <div class="d-flex align-items-center mb-3">
                                <div style="display: flex;flex-direction: column; ">
                                    <a href="{{ route('classroom.detailTugas',[$item->id,$id]) }}" data-bs-toggle="tooltip" title="View comments">
                                        <span class="mb-2 bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
                                            <i class="ti ti-brand-hipchat fs-16"></i>
                                            <span class="badge position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle">{{ $item->comment->count() }}</span>
                                        </span>
                                    </a>

                                    <a href="{{ route('classroom.detailTugas',[$item->id,$id]) }}" data-bs-toggle="tooltip" title="View task details">
                                        <span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
                                            <i class="ti ti-list-details fs-16"></i>
                                        </span>
                                    </a>

                                </div>
                                <div class="mx-3">
                                    <h6 class="mb-1 fw-semibold">
                                        <div class="d-flex align-items-center">
                                            <a class="avatar avatar-lg flex-shrink-0"><img src="{{ asset('asset/img/user-default.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                            <div class="ms-2">
                                                <h6 class="text-dark text-truncate mb-0"><a>{{ $item->user->nama }}</a></h6>
                                                <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>
                                        {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Tugas Pertemuan 2</a> --}}
                                    </h6>
                                    <div class="col my-3 ">
                                        <h5>{{ $item->judul }}</h5>
                                        @if ($item->type == 'quiz')
                                        Kunjungi link berikut ini untuk memulai,jangan lupa berdo'a terlebih dahulu sebelum dimulai :)
                                            @if($score && $score->where('status', '1')->where('task_id', $item->id)->where('student_id', auth()->user()->nomor)->count() > 0)
                                                <button class="btn btn-success mt-2">Hore..! Kamu Sudah Mengikuti Quiz Ini </button>
                                            @else
                                                <a href="{{ route('quiz',[$id,$item->id]) }}">{{ route('quiz',[$id,$item->id]) }}</a>

                                            @endif
                                        @else
                                            <p>{!! $item->description !!}</p>
                                        @endif
                                    </div>
                                    @if ($item->type == 'quiz')
                                        <div class="col">
                                            <div class="owl-item active" style="width: 338.667px; margin-right: 15px;">
                                                <div class="border rounded-3 bg-white p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('asset/img/icon/qa.png') }}" alt="YouTube Icon" class="me-2" width="35">
                                                            <h5 class="text-nowrap">
                                                                @if($score && $score->where('status', '1')->where('task_id', $item->id)->where('student_id', auth()->user()->nomor)->count() > 0)
                                                                    Soal Pilihan Ganda
                                                                @else
                                                                    <a href="{{ route('quiz',[$id,$item->id]) }}">Soal Pilihan Ganda</a>
                                                                @endif
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                                        <p class="text-primary mb-0 me-2">{{ $item->created_at->diffForHumans() }}</p>
                                                        <div>
                                                         @if($score && $score->where('status', '1')->where('task_id', $item->id)->where('student_id', auth()->user()->nomor)->count() > 0)
                                                         @else
                                                            <a href="{{ route('quiz', [$id, $item->id]) }}" class="btn btn-primary">Ayo Mulai!</a>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @else
                                        {{-- media --}}
                                    <div class="row g-2">
                                        @if($item->media)
                                            @foreach ($item->media as $media)

                                            <div class="owl-item active" style="width: 338.667px; margin-right: 15px;">
                                                <div class="border rounded-3 bg-white p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            @if(isset($media->exstention) && $media->exstention == 'pdf')
                                                                <img src="{{ asset('asset/img/icon/pdf-02.svg') }}" alt="PDF Icon" class="me-2">
                                                                <h5 class="text-nowrap"><a href="/storage/{{ $media->file_path }}" target="_blank" >{{ Str::limit($media->name, 20, '...') }}</a></h5>
                                                            @elseif(isset($media->exstention) && in_array($media->exstention, ['doc', 'docx']))
                                                                <img src="{{ asset('asset/img/icon/doc.png') }}" alt="Document Icon" class="me-2" width="50px">
                                                                <h5 class="text-nowrap"><a href="/storage/{{$media->file_path }}" download="{{ $media->name }}">{{ Str::limit($media->name, 20, '...') }}</a></h5>
                                                            @else
                                                                <img src="{{ asset('asset/img/icon/word.png') }}" alt="Default Icon" class="me-2" width="50px">
                                                                <h5 class="text-nowrap"><a href="/storage/{{$media->file_path }}" download>{{ Str::limit($media->name, 20, '...') }}</a></h5>
                                                            @endif
                                                        </div>
                                                        <div class="d-flex align-items-center">

                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="/storage/{{$media->file_path }}" download="{{ $media->name }}" class="dropdown-item">Download File</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-start mt-3">
                                                        <p class="text-primary mb-0 me-2">{{ $media->created_at->diffForHumans() }}</p>
                                                        <span class="d-flex align-items-center fw-semibold me-2"><i class="ti ti-circle-filled fs-5 me-2"></i>
                                                            {{ number_format($media->size / 1048576, 2) }} MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                        @if($item->links)
                                            @php
                                            // Decode links into an array
                                            $linksArray = json_decode($item->links->youtube_link, true);
                                            @endphp

                                            @foreach($linksArray as $link)
                                            <div class="owl-item active" style="width: 338.667px; margin-right: 15px;">
                                                <div class="border rounded-3 bg-white p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('asset/img/icon/youtube.png') }}" alt="YouTube Icon" class="me-2" width="34">
                                                            <h5 class="text-nowrap">
                                                                <a href="{{ $link }}" target="_Blank">YouTube Video</a>
                                                            </h5>
                                                        </div>
                                                        <div class="d-flex align-items-center">

                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="{{ $link }}" target="_blank" class="dropdown-item">Details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-start mt-3">
                                                        <p class="text-primary mb-0 me-2">{{ $item->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif

                                    </div>
                                    @endif

                                </div>

                            </div>
                            <div class="d-flex align-items-center board-action mb-3">

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="card p-5">
                <div class="d-flex justify-content-center">
                    <p>Belum membuat postingan apapun</p>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
