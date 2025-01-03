@extends('users.layout.users_layout')
@section('user_content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<div class="container">
    <br>
    <h3 class="text-center">แสดงประวัติการจองห้องพัก</h3><br>

    <table class="table table-bordered table-striped mt-4" id="data_table">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th style="text-align: center;">วันที่</th>
                <th style="text-align: center;">ชื่อห้อง</th>
                <th style="text-align: center;">ชื่อผู้จอง</th>
                <th style="text-align: center;">เบอร์ติดต่อ</th>
                <th style="text-align: center;">สถานะ</th>
                <th style="text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookRooms as $booking)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ \Carbon\Carbon::parse($booking->date)->addYears(543)->translatedFormat('d F Y') }}</td>
                <td>{{ $booking->room->room_name }}</td>
                <td>{{ $booking->name }}</td>
                <td class="text-center">{{ $booking->phone }}</td>
                <td class="text-center">
                    @if($booking->book_room_status == 1)
                    <p class="text-warning">รอดำเนินการ</p>
                    @elseif($booking->book_room_status == 2)
                    <p class="text-primary"><i class="bi bi-check-circle"></i></p>
                    @endif
                </td>
                <td class="text-center">
                    @if ($booking->book_room_status != 2)
                    <form action="{{ route('approve', $booking->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">อนุมัติ</button>
                    </form>
                    @endif
                    <form action="{{ route('deleteBooking', $booking->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการลบการจองนี้หรือไม่?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
