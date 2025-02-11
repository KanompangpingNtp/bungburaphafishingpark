@extends('users.layout.users_layout')
@section('user_content')

<style>
.room-status-1 {
    background-color: #e24f5f; /* สีแดง */
    color: white;
}

.room-status-2 {
    background-color: #ed5c27; /* สีม่วง */
    color: white;
}


.room-status-3 {
    background-color: #f6ea24; /* สีเหลือง */
    color: black;
}

.room-status-4 {
    background-color: #1faae1; /* สีฟ้า */
    color: white;
}

.room-status-5 {
    background-color: #8dc240; /* สีน้ำเงิน */
    color: white;
}

.room-status-6 {
    background-color: #c49a74; /* สีเทา */
    color: white;
}

</style>


<div class="container">
    <h2 class="text-center">ระบบจองห้องพัก</h2><br>
    <div class="row">
        {{-- @foreach ($rooms as $room)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-house-down-fill" style="color: blue;"></i> {{ $room->room_name }}</h5>
                    <p class="card-text">
                        <strong>ขนาดห้อง : </strong> {{ $room->roomType->room_types_name }}<br>
                    </p>
                    <button type="button" class="btn btn-primary col-md-12" data-bs-toggle="modal" data-bs-target="#bookRoomModal{{ $room->id }}">
                        <i class="bi bi-plus-circle"></i> จองห้อง
                    </button>
                </div>
            </div>
        </div>
        @endforeach --}}
        @foreach ($rooms as $room)
        @php
            // สร้างชื่อคลาสที่กำหนดเองตาม room_status
            $cardClass = 'room-status-' . $room->room_status;
        @endphp

        <div class="col-md-4">
            <div class="card mb-4 {{ $cardClass }}">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-house-down-fill" style="color: #fdfefe;"></i>
                        {{ $room->room_name }}
                    </h5>
                    <p class="card-text">
                        <strong>ขนาดห้อง : </strong> {{ $room->roomType->room_types_name }}<br>
                    </p>
                    <button type="button" class="btn btn-light col-md-12" data-bs-toggle="modal" data-bs-target="#bookRoomModal{{ $room->id }}">
                        <strong><i class="bi bi-plus-circle"></i> จองห้อง</strong>
                    </button>
                </div>
            </div>
        </div>
    @endforeach




        @foreach ($rooms as $room)
        <div class="modal fade" id="bookRoomModal{{ $room->id }}" tabindex="-1" aria-labelledby="bookRoomModalLabel{{ $room->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookRoomModalLabel{{ $room->id }}">Room : {{ $room->room_name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('createBooking', $room->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="phone" class="form-label">เบอร์ติดต่อ</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="date" class="form-label">วันที่ต้องการเข้า-จอง</label>
                                    <input type="text" class="form-control" id="date{{ $room->id }}" name="dates[]" required>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">จองห้อง</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

<script>
    @foreach ($rooms as $room)
        var bookedDates{{ $room->id }} = @json($bookedDatesByRoom[$room->id]);

        flatpickr("#date{{ $room->id }}", {
            mode: "multiple",
            dateFormat: "Y-m-d",
            minDate: "{{ now()->format('Y-m-d') }}",
            disable: bookedDates{{ $room->id }},
        });
    @endforeach
</script>

@endsection
